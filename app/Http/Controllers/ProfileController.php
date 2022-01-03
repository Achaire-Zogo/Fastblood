<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function my_profile($slug)
    {
        $user = User::where('email', $slug)->firstOrFail();
        return view('profile.my_profile', compact('user'));
    }

    public function update_profile($id, Request $request)
    {
        try {
            $user = User::findOrFail($id);
            $user->name = $request->input('name');
            $user->telephone = $request->input('telephone');
            $user->email = $request->input('email');
            $user->save();
            Toastr::success('messages', trans('messages.profile_update_success'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('messages', trans('messages.unable_to_update_profile'));
            return back();
        }
    }

    public function update_password($id, Request $request)
    {
        try {
            $user = User::findOrFail($id);
            $user->password = Hash::make($request->input('newpassword'));
            $user->save();
            Toastr::success('messages', trans('messages.password_update_success'));
            return back();
        } catch(\Exception $e) {
            Toastr::error('message', trans('messages.unable_to_update_password'));
            return back();
        }
    }
}
