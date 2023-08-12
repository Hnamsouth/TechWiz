<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coaches;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function list(){
        $data = Coaches::orderBy("id","asc")->paginate(20);
        return view("admin.coach.list",compact("data"));
    }

    public function create(){
        return view("admin.coach.create");
    }

    public function store(Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "nationality"=>"required|string",
            "position"=>"required",
            "date_of_birth"=>"required",
            "des"=>"nullable",
            "img"=>"required|image|mimes:png,gif,jpg,jpeg",
            "club_team_id"=>"nullable",
            "national_team_id"=>"nullable"
        ],[
            "required"=>"Vui lòng nhập thông tin",
        ]);
        $data = $request->except("img");
        try{
            if($request->hasFile("img")){
                $fileName = time() . "_" . str_replace('','_',$request->get('name'));
                $result = (new UploadApi())->upload(
                    $request->file('img')->getRealPath(),
                    [
                        'public_id'=>$fileName,
                        'folder'=>'techwiz/'
                    ]
                );
                $data['img'] = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $data['img'] = $data[''] ?? null;
        }

        $coach = Coaches::create($data);

        $coach->update();
        return redirect()->to('/admin/coach');
    }

    public function edit(Coaches $coaches){
        return view('admin.coach.edit',compact('coaches'));
    }

    public function update(Coaches $coaches,Request $request){
        $request->validate([
            "name"=>"required|string|min:6",
            "nationality"=>"required|string",
            "position"=>"required",
            "date_of_birth"=>"required",
            "des"=>"nullable",
            "img"=>"required|image|mimes:png,gif,jpg,jpeg",
            "club_team_id"=>"nullable",
            "national_team_id"=>"nullable"
        ],[
            "required"=>"Vui lòng nhập thông tin",
        ]);
        $data = $request->except('img');
        try {
            if ($request->get('old_img_url') == null) { //Don't keep the old thumbnail
                //-- Delete the old thumbnail from Cloudinary
                if ($coaches->img) {
                    $public_id = 'techwiz/' . basename($coaches->img, '.' . pathinfo($coaches->img, PATHINFO_EXTENSION));
                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'img']);
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
                $data['img'] = $coaches->img;
            }
        } catch (\Exception $e) {
        } finally {
            $data['img'] = $data['img'] ?? null;
        }

        $data = $request->all();

        $coaches->update($data);
        return redirect()->to('admin/coach');
    }

    public function delete(Coaches $coaches){
        $coaches->delete();
        return redirect()->to('admin/coach');
    }
}
