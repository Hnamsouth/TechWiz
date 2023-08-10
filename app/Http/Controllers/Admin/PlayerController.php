<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Players;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function list(){
        $data = Players::orderBy("id","asc")->paginate(20);
        return view("admin.player.list",compact("data"));
    }

    public function create(){
        return view("admin.player.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "nationality"=>"required",
            "position"=>"required",
            "date_of_birth"=>"required",
            "img"=>"required|image|mimes:png,gif,jpg,jpeg",
            "description"=>"nullable|string",
            "number"=>"required|numeric|min:0",
            "height"=>"required|numeric|min:0",
            "weight"=>"required|numeric|min:0",
        ],[
            "required"=>"Vui lòng nhập thông tin",
        ]);
        $data = $request->except("img");
        try {
            if($request->hasFile("img")) {
                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                //-- Upload image to Cloudinary --
                $result = (new UploadApi())->upload(
                    $request->file('img')->getRealPath(),
                    [
                        'public_id' => $fileName,
                        'folder' => 'techwiz/'
                    ]
                );
                //-- Save url to 'thumbnail' --
                $data['img'] = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $data['img'] = $data[''] ?? null;
        }

        Players::create($data);

        return redirect()->to("/admin/player");
    }

    public function edit(Players $players){
        return view("admin.player.edit",compact("players"));
    }

    public function update(Players $players,Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "nationality"=>"required",
            "position"=>"required",
            "date_of_birth"=>"required",
            "img"=>"required|image|mimes:png,gif,jpg,jpeg",
            "description"=>"nullable|string",
            "number"=>"required|numeric|min:0|max:100",
            "height"=>"required|numeric|min:0",
            "weight"=>"required|numeric|min:0",
        ],[
            "required"=>"Vui lòng nhập thông tin",
        ]);
        $data = $request->except("img");
        try {
            if ($request->get('old_img_url') == null) { //Don't keep the old thumbnail
                //-- Delete the old thumbnail from Cloudinary
                if ($players->img) {
                    $public_id = 'techwiz/' . basename($players->img, '.' . pathinfo($players->img, PATHINFO_EXTENSION));
                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
                }
                $data['img'] = null;
                //-- If user want to upload new thumbnail
                if($request->hasFile("img")) {
                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                    //-- Upload image to Cloudinary --
                    $result = (new UploadApi())->upload(
                        $request->file('img')->getRealPath(),
                        [
                            'public_id' => $fileName,
                            'folder' => 'techwiz/'
                        ]
                    );
                    //-- Save url to 'thumbnail' --
                    $data['img'] = $result['secure_url'];
                }
            } else { //Still keep the old thumbnail
                $data['img'] = $players->img;
            }
        } catch (\Exception $e) {
        } finally {
            $data['img'] = $data['img'] ?? null;
        }

        $players->update($data);
        return redirect()->to("admin/player");
    }

    public function delete(Players $players){
        $players->delete();
        return redirect()->to("admin/player");
    }
}
