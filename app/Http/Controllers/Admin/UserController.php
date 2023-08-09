<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Order;
use App\Models\Review;
use App\Models\User;
use Cloudinary\Api\Upload\UploadApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // -- Employee --
    public function employeeList(Request $request) {
        $search = $request->get("search");
        $employees = Admin::with('user')
            ->whereHas('user', function($query) use ($search) {
                $query->search($search);
            })
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('admin2.user.employee-list', compact('employees'));
    }

    public function employeeCreate() {
        return view('admin2.user.employee-add');
    }
    public function employeeStore(Request $request) {
        $request->validate([
            'avatar' => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
        ]);

        $avatarUrl = null;
        try {
            if($request->hasFile("avatar")) {
                $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                //-- Upload image to Cloudinary --
                $result = (new UploadApi())->upload(
                    $request->file('avatar')->getRealPath(),
                    [
                        'public_id' => $fileName,
                        'folder' => 'eproject-sem2/'
                    ]
                );
                //-- Save url to 'thumbnail' --
                $avatarUrl = $result['secure_url'];
            }
        } catch (\Exception $e) {
        } finally {
            $avatarUrl = $avatarUrl ?? null;
        }

        //Create new user
        $user = User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            'avatar' => $avatarUrl,
            'telephone' => $request->get('phone'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
        ]);

        // Assign the employee role to the user
        $user->admin()->create([
            'role' => Admin::ADMIN,
        ]);

        return redirect()->to('admin2/employee');
    }

    public function employeeEdit(Admin $employee) {
        return view('admin2.user.employee-edit', compact('employee'));
    }

    public function employeeUpdate(Admin $employee, Request $request) {
        $request->validate([
            'avatar' => "nullable|image|mimes:jpeg,png,jpg,svg,webp",
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => "required|string|email|max:255|unique:users,email,".$employee->user->id,
            'phone' => ['required', 'regex:/^[0-9]{10}$/'],
        ]);

        $data = $request->except("avatar");
        try {
            if ($request->get('keep_old_avatar') == 0) { //Don't keep the old avatar
//                //-- Delete the old avatar from Cloudinary
//                if ($user->avatar) {
//                    $public_id = 'eproject-sem2/' . basename($user->avatar, '.' . pathinfo($user->avatar, PATHINFO_EXTENSION));
//                    $delete_result = (new UploadApi())->destroy($public_id, ['resource_type' => 'image']);
//                }
                $data['avatar'] = null;
                //-- If user want to upload new avatar
                if($request->hasFile("avatar")) {
                    $fileName = time() . "_" . str_replace(' ', '_', $request->get('name'));
                    //-- Upload image to Cloudinary --
                    $result = (new UploadApi())->upload(
                        $request->file('avatar')->getRealPath(),
                        [
                            'public_id' => $fileName,
                            'folder' => 'eproject-sem2/'
                        ]
                    );
                    //-- Save url to 'avatar' --
                    $data['avatar'] = $result['secure_url'];
                }
            }
        } catch (\Exception $e) {
        } finally {
            $data['avatar'] = $data['avatar'] ?? null;
        }

        $employee->user->update($data);

        return redirect()->to('admin2/employee');
    }

    public function changePassword(Admin $employee, Request $request) {
        $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        $user = $employee->user;
        $user->password =  Hash::make($request->password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }

    public function employeeDelete(Admin $employee) {
        $employee->delete();
        return redirect()->back();
    }

    public function employeeDeleted(Request $request) {
        $search = $request->get("search");
        $employees = Admin::onlyTrashed()
            ->with('user')
            ->whereHas('user', function($query) use ($search) {
                $query->search($search);
            })
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('admin2.user.employee-deleted', compact('employees'));
    }

    public function employeeRestore(Request $request) {
        $employee = Admin::withTrashed()->findOrFail($request->get('employee_id'));
        $employee->restore();
        return redirect()->back();
    }

    // -- User (Customer) --
    public function userList(Request $request) {
        $search = $request->get("search");
        $users = User::whereNotIn('id', function($query) {
            $query->select('user_id')->from('admins');
        })
            ->search($search, ['name', 'email', 'telephone'])
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('admin2.user.user-list', compact('users'));
    }

    public function userDetail(User $user) {
        $orderIds = Order::where('user_id', $user->id)->get()->pluck('id');
        $reviews = Review::whereIn('order_id', $orderIds)->orderBy('created_at','desc')->get();
        return view('admin2.user.user-detail', compact('user','reviews'));
    }
}
