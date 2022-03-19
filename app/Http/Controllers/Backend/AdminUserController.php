<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Carbon\Carbon;
use Image;
use Auth;
use Illuminate\Support\Facades\Hash;
class AdminUserController extends Controller
{
    public function AllAdminRole(){
            $adminuser = Admin::where('type',2)->latest()->get();
            return view('backend.role.admin_role_all',compact('adminuser'));
    }

    public function AddAdminRole(){
        return view('backend.role.admin_role_create');
    }

     public function StoreAdminRole(Request $request){
      
        $image = $request->file('profile_photo_path');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
        $save_url = 'upload/admin_images/'.$name_gen;

        Admin::insert([
             'name'=>$request->name,
             'email'=>$request->email,
             'phone'=>$request->phone,
             'password'=>Hash::make($request->password),
             'brand'=>$request->brand,
             'category'=>$request->category,
             'product'=>$request->product,
             'slider'=>$request->slider,
             'coupons'=>$request->coupons,
             'shipping'=>$request->shipping,
             'blog'=>$request->blog,
             'setting'=>$request->setting,
             'returnorder'=>$request->returnorder,
             'review'=>$request->review,
             'orders'=>$request->orders,
             'stock'=>$request->stock,
             'alluser'=>$request->alluser,
             'adminuserrole'=>$request->adminuserrole,
             'type'=>2,
             'profile_photo_path'=> $save_url,
             'created_at'=>Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Admin User Created  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('all.admin-user')->with($notification);
    }

    public function EditAdminRole($id){
        $adminuser = Admin::findOrFail($id);
            return view('backend.role.admin_role_edit',compact('adminuser'));
        
    }

    public function UpdateAdminRole(Request $request){
        $admin_id = $request->id;
        $old_image = $request->old_image;
            if ($request->file('profile_photo_path')) {
                unlink($old_image);
                    $image = $request->file('profile_photo_path');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(225,225)->save('upload/admin_images/'.$name_gen);
                    $save_url = 'upload/admin_images/'.$name_gen;

                    Admin::findOrFail($admin_id)->update([
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'phone'=>$request->phone,
                           
                            'brand'=>$request->brand,
                            'category'=>$request->category,
                            'product'=>$request->product,
                            'slider'=>$request->slider,
                            'coupons'=>$request->coupons,
                            'shipping'=>$request->shipping,

                            'blog'=>$request->blog,
                            'setting'=>$request->setting,
                            'returnorder'=>$request->returnorder,
                            'review'=>$request->review,
                            'orders'=>$request->orders,

                            'stock'=>$request->stock,
                            'reports'=>$request->reports,
                            'alluser'=>$request->alluser,
                            'adminuserrole'=>$request->adminuserrole,
                            'type'=>2,
                            'profile_photo_path'=> $save_url,
                            'created_at'=>Carbon::now(),
                    ]);
                    $notification = array(
                        'message' => 'Admin User Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->route('all.admin-user')->with($notification);
            }else{
                //else will update all field except image field
                    Admin::findOrFail($admin_id)->update([
                            'name'=>$request->name,
                            'email'=>$request->email,
                            'phone'=>$request->phone,
                           
                            'brand'=>$request->brand,
                            'category'=>$request->category,
                            'product'=>$request->product,
                            'slider'=>$request->slider,
                            'coupons'=>$request->coupons,

                            'shipping'=>$request->shipping,
                            'blog'=>$request->blog,
                            'setting'=>$request->setting,
                            'returnorder'=>$request->returnorder,

                            'review'=>$request->review,
                            'orders'=>$request->orders,
                            'stock'=>$request->stock,
                            'reports'=>$request->reports,
                            'alluser'=>$request->alluser,
                            'adminuserrole'=>$request->adminuserrole,
                            'type'=>2,
                            'created_at'=>Carbon::now(),
                        
                    ]);
                    $notification = array(
                        'message' => 'Admin User Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->route('all.admin-user')->with($notification);
            }
    }
}
