<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Product;
use App\Models\MultiImg;
use Illuminate\Support\Facades\Hash;
use App\Models\Blog\BlogPost;
class IndexController extends Controller
{
    public function Index(){
        $blogpost = BlogPost::latest()->get();
        $products = Product::where('status',1)->orderBy('id','DESC')->get();
        $featured = Product::where('featured',1)->orderBy('id','DESC')->get();
        $hot_deals = Product::where('hot_deals',1)->where('discount_price','!=',NULL)->orderBy('id','DESC')->get();
        $special_offer = Product::where('special_offer',1)->orderBy('id','DESC')->get();
        $special_deals = Product::where('special_deals',1)->orderBy('id','DESC')->get();
        $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(4)->get();
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $skip_category_0 = Category::skip(0)->first();
        $skip_product_0 = Product::where('status',1)->where('category_id', $skip_category_0->id)->orderBy('id','DESC')->get();
        $skip_category_1 = Category::skip(1)->first();
        $skip_product_1 = Product::where('status',1)->where('category_id', $skip_category_1->id)->orderBy('id','DESC')->get();
        $skip_category_2 = Category::skip(2)->first();
        $skip_product_2 = Product::where('status',1)->where('category_id', $skip_category_1->id)->orderBy('id','DESC')->get();
        // return $skip_category->id;
        // die();
       
        return view('frontend.index', compact('categories','sliders','products','featured','hot_deals','special_offer','special_deals','skip_category_0','skip_product_0','skip_category_1','skip_product_1','skip_category_2','skip_product_2','blogpost'));

    }
    public function UserLogout(){
        Auth::logout();
        return Redirect()->route('login');
    }
    public function UserProfile(){
        $id =Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile',compact('user'));
    }

    public function UserProfileStore(Request $request){
        $storeData = User::find(Auth::user()->id);
        $storeData->name = $request->name;
        $storeData->email = $request->email;
        $storeData->phone = $request->phone;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            @unlink(public_path('upload/user_images/'.$storeData->profile_photo_path));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $storeData['profile_photo_path'] =  $filename;
        }
        $storeData->save();
        $notification = array(
            'message' => 'Profile Updated Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('dashboard')->with($notification);
    }

    public function UserChangePassword(){
         $id =Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.change_password',compact('user'));
    }
    public function UserPasswordUpdate(Request $request){
            $validateData = $request->validate([
                'oldpassword' =>'required',
                'password' => 'required|confirmed',
            ]);
            $hashedPassword = Auth::user()->password;
            if (Hash::check($request->oldpassword,$hashedPassword )) {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
           
                Auth::logout();
                return redirect()->route('user.logout');
            }else{
                return redirect()->back();
            }
    }


    public function ProductDetails($id,$slug){
        $product = Product::findOrFail($id);

        $color_en =  $product->product_color_en;
        $product_color_en = explode(',', $color_en);

        $color_sw =  $product->product_color_sw;
        $product_color_sw = explode(',', $color_sw);

        $size_en =  $product->product_size_en;
        $product_size_en = explode(',',$size_en);

        $size_sw =  $product->product_size_sw;
        $product_size_sw = explode(',',$size_sw);

        $multiImage = MultiImg::where('product_id',$id)->get();
        return view('frontend.product.product_details', compact('product','multiImage','product_color_en','product_color_sw','product_size_en','product_size_sw'));

    }

    public function TagWiseProduct($tag){
       
        $categories = Category::orderBy('category_name_en','ASC')->get();
         $products = Product::where('status',1)->where('product_tags_en',$tag)->where('product_tags_sw',$tag)->orderBy('id', 'DESC')->paginate(3);
        // dd($products);
        return view('frontend.tags.tags_view',compact('products','categories'));
    }

    //Subcategory wise data
    public function SubCatWiseProduct($subcat_id,$slug){
         $categories = Category::orderBy('category_name_en','ASC')->get();
         $products = Product::where('status',1)->where('subcategory_id',$subcat_id)->orderBy('id', 'DESC')->paginate(6);
        // dd($products);
        return view('frontend.product.subcategory_view',compact('products','categories'));
    }

    public function SubSubCatWiseProduct($subsubcat_id,$slug){
         $categories = Category::orderBy('category_name_en','ASC')->get();
         $products = Product::where('status',1)->where('subsubcategory_id',$subsubcat_id)->orderBy('id', 'DESC')->paginate(6);
        // dd($products);
        return view('frontend.product.sub_subcategory_view',compact('products','categories'));
    }



    //Produnct view with ajax
    public function ProductViewAjax($id){
         $product = Product::with('category','brand')->findOrFail($id);

        $color =  $product->product_color_en;
        $product_color = explode(',', $color);

        $size =  $product->product_size_en;
        $product_size = explode(',', $size);

        return response()->json(array(
            'product' => $product,
            'color' => $product_color,
            'size' => $product_size,
        ));

    }
}
