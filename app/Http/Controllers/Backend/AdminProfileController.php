<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function AdminProfile(){
        $adminData = Admin::find(1);
        return view('admin.admin_profile_view',compact('adminData'));
    }
    public function AdminProfileEdit(){
        $editData = Admin::find(1);
        return view('admin.admin_profile_edit',compact('editData'));
    }
    public function AdminProfileStore(Request $request){
        $storeData = Admin::find(1);
        $storeData->name = $request->name;
        $storeData->email = $request->email;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/admin_images/'.$storeData->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $storeData['profile_photo_path'] =  $filename;
        }
        $storeData->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('admin.profile')->with($notification);
    }

    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }

    public function AdminUpdateChangePassword(Request $request){
            $validateData = $request->validate([
                'oldpassword' =>'required',
                'password' => 'required|confirmed',
            ]);
            $hashedPassword = Admin::find(1)->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $admin = Admin::find(1);
                $admin->password = Hash::make($request->password);
                $admin->save();
           
                Auth::logout();
                return redirect()->route('admin.logout');
            }else{
                return redirect()->back();
            }
    }

    public function AllUsers(){
        $users = User::latest()->get();
        return view('backend.user.all_user',compact('users')); 
    }
    
}
