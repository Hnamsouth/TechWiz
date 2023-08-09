<?php

namespace App\Http\Controllers\Admin;

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
        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';

        $data = Category::Search($search)->orderBy($orderCol,$sortBy)->paginate(20);

        return view("admin.category.list", compact('data'));
    }

    public function create() {
        return view("admin.category.add");
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required|unique:categories,name|string|min:1"
        ]);

        $data = $request->all();

        $data['slug'] = Str::slug($data['name'].'-'.random_int(1,100));
        Category::create($data);

        return redirect()->to("/admin/category");
    }

    public function edit(Category $category) {
        return view("admin.category.edit", compact('category'));
    }

    public function update(Category $category, Request $request) {
        $request->validate([
            "name" => "required|unique:categories,name," . $category->id . "|string|min:1",
        ]);

        $data = $request->all();

        $data['slug'] = Str::slug($data['name'].'-'.random_int(1,100));
        $category->update($data);
        return redirect()->to("/admin/category");
    }

    public function delete(Category $category) {
        $category->delete();
        return redirect()->to( url("/admin/category") );
    }

    public function deleted(Request $request) {
        $search = $request->get("search");
        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';

        $data = Category::onlyTrashed()->Search($search)->orderBy($orderCol,$sortBy)->paginate(20);

        return view("admin.category.deleted", compact('data'));
    }

    public function restore(Request $request) {
        $category = Category::withTrashed()->findOrFail($request->get('category_id'));
        $category->restore();
        return redirect()->to("/admin/category/deleted");
    }
}
