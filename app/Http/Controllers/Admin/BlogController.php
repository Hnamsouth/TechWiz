<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\League;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function list(Request $request)
    {
        $search = $request->get('search');
        $data = Blog::Search("%$search%")->orderBy("created_at", "desc")->paginate(20);
        return view("admin.blog.list", compact('data'));
    }

    public function create(Request $request)
    {
        $league = League::all();
        return view("admin.blog.add", compact('league'));
    }

    public function store(Request $request)
    {

        $request->validate([
            "title" => "required|string|min:1|max:50",
            "description" => "required|string|min:10|max:100",
            "content" => "required",
            "thumbnail" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
            "publish_date" => 'required|date|after:today',
            "league_id" => "required"

        ]);

        $data = $request->except("thumbnail");
        try {
            if ($request->hasFile("thumbnail")) {
                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                //-- Upload image to Cloudinary --
                $result = (new UploadApi())->upload(
                    $request->file('thumbnail')->getRealPath(),
                    [
                        'public_id' => $fileName,
                        'folder' => 'techwiz/'
                    ]
                );
                //-- Save url to 'thumbnail' --
                $data['thumbnail'] = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $data['thumbnail'] = $data['thumbnail'] ?? null;
        }
        Blog::create($data);


        return redirect()->to("/admin/blog");

    }

    public function edit(Blog $blog)
    {
        $league = League::all();

        return view("admin.blog.edit", compact('blog', 'league'));
    }

    public function update(Blog $blog, Request $request)
    {

        $request->validate([
            "title" => "required|string|min:1|max:50",
            "description" => "required|string|min:1|max:255",
            "content" => "required",
            "thumbnail" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
            "publish_date" => 'required|date|after:today',
            "league_id" => "required"

        ]);

        $data = $request->except("thumbnail");
        try {
            if ($request->get('old_thumb_url') == null) { //Don't keep the old thumbnail
                //-- Delete the old thumbnail from Cloudinary
                if ($blog->thumbnail) {
                    $public_id = 'techwiz/' . basename($blog->thumbnail, '.' . pathinfo($blog->thumbnail, PATHINFO_EXTENSION));
                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
                }
                $data['thumbnail'] = null;
                //-- If user want to upload new thumbnail
                if ($request->hasFile("thumbnail")) {
                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                    //-- Upload image to Cloudinary --
                    $result = (new UploadApi())->upload(
                        $request->file('thumbnail')->getRealPath(),
                        [
                            'public_id' => $fileName,
                            'folder' => 'techwiz/'
                        ]
                    );
                    //-- Save url to 'thumbnail' --
                    $data['thumbnail'] = $result['secure_url'];
                }
            } else { //Still keep the old thumbnail
                $data['thumbnail'] = $blog->thumbnail;
            }
        } catch (\Exception $e) {
        } finally {
            $data['thumbnail'] = $data['thumbnail'] ?? null;
        }
        $blog->update($data);

        return redirect()->to("/admin/blog");
    }

    public function delete(Blog $blog)
    {
        $blog->delete();
        return redirect()->to("/admin/blog");
    }

    public function detail(Blog $blog)
    {
        return view("admin.blog.detail", compact("blog"));
    }


    //
}
