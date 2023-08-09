<?php

namespace App\Http\Controllers\Admin2;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function list(Request $request) {
        $search = $request->get("search");
        $status = $request->get("status");
        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';

        $data = Category::Search($search)->Status($status)->orderBy($orderCol,$sortBy)->paginate(20);

        return view("admin2.category.list", compact('data'));
    }

    public function create() {
        return view("admin2.category.add");
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required|unique:categories,name|string|min:1",
            "icon" => "nullable|image|mimes:jpeg,png,jpg,svg,webp"
        ]);

        $data = $request->except('icon');
        //dd($data);
        try {
            if ($request->hasFile('icon')) {
                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                //-- Upload image to Cloudinary --
                $result = (new UploadApi())->upload(
                    $request->file('icon')->getRealPath(),
                    [
                        'public_id' => $fileName,
                        'folder' => 'eproject-sem2/'
                    ]
                );
                //-- Save url to 'icon' --
                $data['icon'] = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $data['icon'] = $data['icon'] ?? null;
        }

        $data['slug'] = Str::slug($data['name'].'-'.random_int(1,100));
        Category::create($data);

        return redirect()->to("/admin2/category");
    }

    public function edit(Category $category) {
        return view("admin2.category.edit", compact('category'));
    }

    public function update(Category $category, Request $request) {
        $request->validate([
            "name" => "required|unique:categories,name," . $category->id . "|string|min:1",
            "icon" => "nullable|image|mimes:jpeg,png,jpg,svg,webp"
        ]);

        $data = $request->except('icon');
        //dd($data);
        try {
            if ($request->get('old_icon_url') == null) {
                if ($request->hasFile('icon')) {
                    $file = $request->file('icon');
                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                    //-- Upload image to Cloudinary --
                    $result = (new UploadApi())->upload(
                        $request->file('icon')->getRealPath(),
                        [
                            'public_id' => $fileName,
                            'folder' => 'eproject-sem2/'
                        ]
                    );
                    //-- Save url to 'icon' --
                    $data['icon'] = $result['secure_url'];
                    //-- Delete the old icon from Cloudinary --
                    if ($category->icon) {
                        $public_id = 'eproject-sem2/' . basename($category->icon, '.' . pathinfo($category->icon, PATHINFO_EXTENSION));
                        $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
                    }
                } else {
                    $data['icon'] = null;
                }
            } else {
                $data['icon'] = $category->icon;
            }
        } catch (\Exception $e) {
        } finally {
            $data['icon'] = $data['icon'] ?? null;
        }

        $data['slug'] = Str::slug($data['name'].'-'.random_int(1,100));
        $category->update($data);
        return redirect()->to("/admin2/category");
    }

    public function delete(Category $category) {
        $category->delete();
        return redirect()->to( url("/admin2/category") );
    }

    public function deleted(Request $request) {
        $search = $request->get("search");
        $status = $request->get("status");
        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';

        $data = Category::onlyTrashed()->Search($search)->Status($status)->orderBy($orderCol,$sortBy)->paginate(20);

        return view("admin2.category.deleted", compact('data'));
    }

    public function restore(Request $request) {
        $category = Category::withTrashed()->findOrFail($request->get('category_id'));
        $category->restore();
        return redirect()->to("/admin2/category/deleted");
    }
}
