<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\League;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;

class LeagueController extends Controller
{


    public function list(Request $request) {
        $search = $request->get("search");

        $data = League::Search($search)->paginate(20);



        return view("admin.league.list",compact('data'));
    }
    public function create(Request $request) {



        return view("admin.league.add");
    }

    public function store(Request $request) {
        $request->validate([
            "name" => "required|string|min:1",
            "country" => "required|string|min:0",
            "season" => "required|string|min:0",
            "logo" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
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
                $data['logo'] = $result['secure_url'];
            }
        } catch (\Exception $e) {

        } finally {
            $data['logo'] = $data['logo'] ?? null;
        }
        $league = League::create($data);

        $league->update();
        return redirect()->to("/admin/league");




    }
    public function edit(League $league) {
        return view("admin.league.edit", compact('league'));
    }
    public function update(League $league, Request $request) {
        $request->validate([
            "name" => "required|string|min:1",
            "country" => "required|string|min:0",
            "season" => "required|string|min:0",
            "logo" => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
        ]);

        $data = $request->except("logo");
        try {
            if ($request->get('old_logo_url') == null) { //Don't keep the old thumbnail
                //-- Delete the old thumbnail from Cloudinary
                if ($league->logo) {
                    $public_id = 'techwiz/' . basename($league->logo, '.' . pathinfo($league->logo, PATHINFO_EXTENSION));
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
                $data['logo'] = $league->logo;
            }
        } catch (\Exception $e) {
        } finally {
            $data['logo'] = $data['logo'] ?? null;
        }


        $data = $request->all();

        $league->update($data);
        return redirect()->to("/admin/league");
    }
    public function delete(League $league) {
        $league->delete();
        return redirect()->to("/admin/league");
    }






}
