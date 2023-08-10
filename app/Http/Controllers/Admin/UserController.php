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
    // -- User (Customer) --
    public function userList(Request $request) {
        $search = $request->get("search");
        $users = User::whereNotIn('id', function($query) {
            $query->select('user_id')->from('admins');
        })
            ->search($search, ['name', 'email', 'telephone'])
            ->orderBy('id', 'desc')
            ->paginate(20);
        return view('admin.user.user-list', compact('users'));
    }

    public function userDetail(User $user) {
        $orderIds = Order::where('user_id', $user->id)->get()->pluck('id');
        return view('admin.user.user-detail', compact('user'));
    }
}
