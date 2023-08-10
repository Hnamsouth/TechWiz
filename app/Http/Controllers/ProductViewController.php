<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductViewController extends Controller
{
    public function list(Request $request) {
        $search = $request->get("search");
        $category_id = $request->get("category_id");
        //$lowest_price = $request->get("lowest_price");
        //$highest_price = $request->get("highest_price");
        $orderCol = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[0] : "created_at";
        $sortBy = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[1] : "desc";

        $searchedData = Product::Search($search);
        $searchedDataCount = $searchedData->count();
        $outOfStock = Product::Search($search)->where('quantity', 0)->count();
        $totalItems = $searchedData->sum('quantity');

        $category_ids = $searchedData->pluck('category_id')->toArray();
        $categories = Category::orderBy('id')
            ->whereIn('id', $category_ids)
            ->withCount(['products' => function ($query) use ($searchedData) {
                $query->whereIn('id', $searchedData->pluck('id'));
            }])
            ->get();

        $data = $searchedData->CategoryFilter($category_id)->orderBy($orderCol, $sortBy)->paginate(20);

        return view("admin.product.list", compact('data', 'categories', 'outOfStock', 'totalItems','searchedDataCount'));
    }

    public function detail(Product $product) {
        return view("guest.product-detail", compact("product"));
    }

//    public function create() {
//        $categories = Category::all();
//        return view("admin.product.add", compact('categories'));
//    }
//
//    public function store(Request $request) {
//        $request->validate([
//            "name" => "required|string|min:1",
//            "price" => "required|numeric|min:0",
//            "quantity" => "required|numeric|min:0",
//            "thumbnail" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
//            "images.*" => "nullable|image|mimes:jpeg,png,jpg,svg,webp"
//        ]);
//
//        $data = $request->except("thumbnail");
//        try {
//            if($request->hasFile("thumbnail")) {
//                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
//                //-- Upload image to Cloudinary --
//                $result = (new UploadApi())->upload(
//                    $request->file('thumbnail')->getRealPath(),
//                    [
//                        'public_id' => $fileName,
//                        'folder' => 'techwiz/'
//                    ]
//                );
//                //-- Save url to 'thumbnail' --
//                $data['thumbnail'] = $result['secure_url'];
//            }
//        } catch (\Exception $e) {
//        } finally {
//            $data['thumbnail'] = $data['thumbnail'] ?? null;
//        }
//
//        //After create new product in database, retrieve id and store images
//        $data['slug'] = Str::slug($data['name'].'-'.now()->format('YmdHisu'));
//        $product = Product::create($data);
//        $product_id = $product->id;
//        $product->update();
//
//        if ($request->hasFile('images')) {
//            foreach ($request->file('images') as $image) {
//                try {
//                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
//                    $result = (new UploadApi())->upload(
//                        $image->getRealPath(),
//                        [
//                            'public_id' => $fileName,
//                            'folder' => 'techwiz/'
//                        ]
//                    );
//                    $url = $result['secure_url'];
//                    // Save the image to the database
//                    $imageData = [
//                        'product_id' => $product_id,
//                        'url' => $url
//                    ];
//                    Image::create($imageData);
//                } catch (\Exception $e) {
//                }
//            }
//        }
//
//        return redirect()->to("/admin/product");
//
//    }
//
//    public function edit(Product $product) {
//        $categories = Category::all();
//        return view("admin.product.edit", compact('product','categories'));
//    }
//
//    public function update(Product $product, Request $request) {
//        $request->validate([
//            "name" => "required|string|min:1",
//            "price" => "required|numeric|min:0",
//            "quantity" => "required|numeric|min:0",
//            "thumbnail" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
//            "images.*" => "nullable|image|mimes:jpeg,png,jpg,svg,webp"
//        ]);
//
//        $data = $request->except("thumbnail");
//        try {
//            if ($request->get('old_thumb_url') == null) { //Don't keep the old thumbnail
//                //-- Delete the old thumbnail from Cloudinary
//                if ($product->thumbnail) {
//                    $public_id = 'techwiz/' . basename($product->thumbnail, '.' . pathinfo($product->thumbnail, PATHINFO_EXTENSION));
//                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
//                }
//                $data['thumbnail'] = null;
//                //-- If user want to upload new thumbnail
//                if($request->hasFile("thumbnail")) {
//                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
//                    //-- Upload image to Cloudinary --
//                    $result = (new UploadApi())->upload(
//                        $request->file('thumbnail')->getRealPath(),
//                        [
//                            'public_id' => $fileName,
//                            'folder' => 'techwiz/'
//                        ]
//                    );
//                    //-- Save url to 'thumbnail' --
//                    $data['thumbnail'] = $result['secure_url'];
//                }
//            } else { //Still keep the old thumbnail
//                $data['thumbnail'] = $product->thumbnail;
//            }
//        } catch (\Exception $e) {
//        } finally {
//            $data['thumbnail'] = $data['thumbnail'] ?? null;
//        }
//
//        //After edit product in database, check the old images if they need replace
//        $data['slug'] = Str::slug($data['name'].'-'.now()->format('YmdHisu'));
//        $product->update($data);
//        $product_id = $product->id;
//
//        if ($request->get('keep_old_images') == 0) { //Don't keep the old image
//            //Delete all old images from Cloudinary
//            foreach ($product->images()->get() as $image) {
//                $public_id = 'techwiz/' . basename($image->url, '.' . pathinfo($image->url, PATHINFO_EXTENSION));
//                $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
//                var_dump($delete_result);
//            }
//            //Delete all old images in database
//            $product->images()->delete();
//            //Check if user want to upload new images
//            if ($request->hasFile('images')) {
//                foreach ($request->file('images') as $image) {
//                    try {
//                        $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
//                        $result = (new UploadApi())->upload(
//                            $image->getRealPath(),
//                            [
//                                'public_id' => $fileName,
//                                'folder' => 'techwiz/'
//                            ]
//                        );
//                        $url = $result['secure_url'];
//                        // Save the image to the database
//                        $imageData = [
//                            'product_id' => $product_id,
//                            'url' => $url
//                        ];
//                        Image::create($imageData);
//                    } catch (\Exception $e) {
//                    }
//                }
//            }
//        }
//
//        return redirect()->to("/admin/product");
//    }
//
//    public function delete(Product $product) {
//        $product->delete();
//        return redirect()->to("/admin/product");
//    }
//
//    public function deleted(Request $request) {
//        $search = $request->get("search");
//        $category_id = $request->get("category_id");
//        $orderCol = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[0] : "created_at";
//        $sortBy = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[1] : "desc";
//
//        $searchedData = Product::onlyTrashed()->Search($search);
//        $searchedDataCount = $searchedData->count();
//
//        $category_ids = $searchedData->pluck('category_id')->toArray();
//        $categories = Category::orderBy('id')
//            ->whereIn('id', $category_ids)
//            ->withCount(['products' => function ($query) use ($searchedData) {
//                $query->whereIn('id', $searchedData->pluck('id'))->withTrashed();
//            }])
//            ->get();
//
//        $data = $searchedData->CategoryFilter($category_id)->orderBy($orderCol, $sortBy)->paginate(20);
//
//        return view("admin.product.deleted", compact('data', 'categories', 'searchedDataCount'));
//    }
//
//    public function restore(Request $request) {
//        $product = Product::withTrashed()->findOrFail($request->get('product_id'));
//        $product->restore();
//        return redirect()->to("/admin/product/deleted");
//    }
}
