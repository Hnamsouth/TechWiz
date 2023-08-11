<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function list(Request $request){
//        $search = $request->get("search");
//        $orderCol = $request->has('order_col') ? $request->get('order_col') : 'id';
//        $sortBy = $request->has('sort_by') ? $request->get('sort_by') : 'asc';
//        $data = Team::Seacrh($search)->orderBy($orderCol,$sortBy)->paginate(20);
//

        $data = Team::orderBy("id","asc")->paginate(20);
        return view("admin.team.list", compact('data'));
    }
    public function create(){
        return view("admin.team.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "country"=>"required",
            "level"=>"required|numeric|min:0|max:1",
            "logo"=>"required|image|mimes:png,gif,jpg,jpeg"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "min"=> "Nhập tối thiểu :min ký tự",
        ]);

        $data = $request->except("logo");
        try {
            if($request->hasFile("logo")) {
                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                //-- Upload image to Cloudinary --
                $result = (new UploadApi())->upload(
                    $request->file('logo')->getRealPath(),
                    [
                        'public_id' => $fileName,
                        'folder' => 'techwiz/'
                    ]
                );
                //-- Save url to 'thumbnail' --
                $data['logo'] = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $data['logo'] = $data['logo'] ?? null;
        }

        Team::create($data);

        return redirect()->to("/admin/team");
    }

    public function edit(Team $team){
        return view("admin.team.edit",compact('team'));
    }

    public function update(Team $team,Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "country"=>"required",
            "level"=>"required|numeric|min:0|max:1",
            "logo"=>"required|image|mimes:png,gif,jpg,jpeg"
        ],[
            "required"=>"Vui lòng nhập thông tin",
            "min"=> "Nhập tối thiểu :min ký tự"
        ]);

        $data = $request->except("logo");
        try {
            if ($request->get('old_logo_url') == null) { //Don't keep the old thumbnail
                //-- Delete the old thumbnail from Cloudinary
                if ($team->logo) {
                    $public_id = 'techwiz/' . basename($team->logo, '.' . pathinfo($team->logo, PATHINFO_EXTENSION));
                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
                }
                $data['logo'] = null;
                //-- If user want to upload new thumbnail
                if($request->hasFile("logo")) {
                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                    //-- Upload image to Cloudinary --
                    $result = (new UploadApi())->upload(
                        $request->file('logo')->getRealPath(),
                        [
                            'public_id' => $fileName,
                            'folder' => 'techwiz/'
                        ]
                    );
                    //-- Save url to 'thumbnail' --
                    $data['logo'] = $result['secure_url'];
                }
            } else { //Still keep the old thumbnail
                $data['logo'] = $team->logo;
            }
        } catch (\Exception $e) {
        } finally {
            $data['logo'] = $data['logo'] ?? null;
        }

        $team->update($data);
        return redirect()->to("admin/team");
    }

    public function delete(Team $team){
        $team->delete();
        return redirect()->to("admin/team");
    }

}
