<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Seo;
use Image;
class SiteSettingController extends Controller
{
    public function SiteSetting(){
        $setting = SiteSetting::find(1);
        return view('backend.setting.setting_update',compact('setting'));
    }

      public function SiteSettingUpdate(Request $request){
        $setting_id = $request->id;
       
            if ($request->file('logo')) {
               
                    $image = $request->file('logo');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(139,36)->save('upload/logo/'.$name_gen);
                    $save_url = 'upload/logo/'.$name_gen;

                    SiteSetting::findOrFail($setting_id)->update([
                        'phone_one'=>$request->phone_one,
                        'phone_two'=>$request->phone_two,
                        'email'=>$request->email,
                        'comapany_name'=>$request->comapany_name,
                        'campany_address'=>$request->campany_address,
                        'facebook'=>$request->facebook,
                        'youtube'=>$request->youtube,
                        'instagram'=>$request->instagram,
                        'logo'=> $save_url,
                    ]);
                    $notification = array(
                        'message' => 'Setting Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->back()->with($notification);
            }else{
                //else will update all field except image field
                    SiteSetting::findOrFail($setting_id)->update([
                        'phone_one'=>$request->phone_one,
                        'phone_two'=>$request->phone_two,
                        'email'=>$request->email,
                        'comapany_name'=>$request->comapany_name,
                        'campany_address'=>$request->campany_address,
                        'facebook'=>$request->facebook,
                        'youtube'=>$request->youtube,
                        'instagram'=>$request->instagram,
                        
                        
                    ]);
                    $notification = array(
                        'message' => 'Setting Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->back()->with($notification);
            }
    }

    public function SeoSetting(){
         $seo = Seo::find(1);
        return view('backend.setting.seo_update',compact('seo'));
    }

    public function SeoSettingUpdate(Request $request){
        $seo_id = $request->id;

         Seo::findOrFail($seo_id )->update([
                        'meta_title'=>$request->meta_title,
                        'meta_author'=>$request->meta_author,
                        'meta_keyword'=>$request->meta_keyword,
                        'meta_description'=>$request->meta_description,
                        'google_analytics'=>$request->google_analytics,
                    ]);
                    $notification = array(
                        'message' => 'Seo Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->back()->with($notification);

    }
}
