<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\MultiImg;
use Carbon\Carbon;
use Image;
class ProductController extends Controller
{
    public function AddProduct(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('backend.product.product_add',compact('categories','brands','subcategories'));
    }
    public function StoreProduct(Request $request){



            $request->validate([
              'file' =>'required|mimes:jpeg,png,jpg,zip,pdf|max:4096',
            ]);

                if ($files = $request->file('file')) {
                $destinationPath = 'upload/pdf'; // upload path
                $digitalItem = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath,$digitalItem);
                }

                    $image = $request->file('product_thambnail');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(917,1000)->save('upload/products/thambnail/'.$name_gen);
                    $save_url = 'upload/products/thambnail/'.$name_gen;
          $product_id =  Product::insertGetId([
                'brand_id'=>$request->brand_id,
                'category_id'=>$request->category_id,
                'category_id'=>$request->category_id,
                'subcategory_id'=>$request->subcategory_id,
                'subsubcategory_id'=>$request->subsubcategory_id,
                'product_name_en'=>$request->product_name_en,
                'product_name_sw'=>$request->product_name_sw,
                'product_slug_en'=>strtolower(str_replace('','-',$request->product_name_en)),
                'product_slug_sw'=>str_replace('','-',$request->product_name_sw),
                'product_code'=>$request->product_code,


                'product_qty'=>$request->product_qty,
                'product_tags_en'=>$request->product_tags_en,
                'product_tags_sw'=>$request->product_tags_sw,
                'product_size_en'=>$request->product_size_en,
                'product_size_sw'=>$request->product_size_sw,
                'product_color_en'=>$request->product_color_en,
                'product_color_sw'=>$request->product_color_sw,


                'selling_price'=>$request->selling_price,
                'discount_price'=>$request->discount_price,
                'short_descp_en'=>$request->short_descp_en,
                'short_descp_sw'=>$request->short_descp_sw,
                'long_descp_en'=>$request->long_descp_en,
                'long_descp_sw'=>$request->long_descp_sw,


                'hot_deals'=>$request->hot_deals,
                'featured'=>$request->featured,
                'special_offer'=>$request->special_offer,
                'special_deals'=>$request->special_deals,

                'product_thambnail'=>$save_url,

                'digital_file' => $digitalItem,
                'status'=>1,
                'created_at'=>Carbon::now(),

            ]);


            // Multiple images code
            $images = $request->file('multi_img');
            foreach($images as $img){
                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                    Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
                    $uploadPath = 'upload/products/multi-image/'.$make_name;

                    MultiImg::insert([
                        'product_id' => $product_id,
                        'photo_name' => $uploadPath,
                        'created_at'=>Carbon::now(),
                    ]);
            }
            $notification = array(
            'message' => 'Product Inserted Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('manage-product')->with($notification);

            //End of Multiple images code
    }

    public function ManageProduct(){
        $products = Product::latest()->get();

        return view('backend.product.product_view',compact('products'));
    }

    public function EditProduct($id){

        $multiImgs = MultiImg::where('product_id',$id)->get();
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        $subsubcategories = SubSubCategory::latest()->get();
        $brands = Brand::latest()->get();
        $products = Product::findOrFail($id);

        return view('backend.product.product_edit',compact('categories','subcategories','subsubcategories','brands','products','multiImgs'));
    }
    public function ProductDataUpdate(Request $request){
        $product_id = $request->id;
                     Product::findOrFail($product_id)->update([
                'brand_id'=>$request->brand_id,
                'category_id'=>$request->category_id,
                'category_id'=>$request->category_id,
                'subcategory_id'=>$request->subcategory_id,
                'subsubcategory_id'=>$request->subsubcategory_id,
                'product_name_en'=>$request->product_name_en,
                'product_name_sw'=>$request->product_name_sw,
                'product_slug_en'=>strtolower(str_replace('','-',$request->product_name_en)),
                'product_slug_sw'=>str_replace('','-',$request->product_name_sw),
                'product_code'=>$request->product_code,


                'product_qty'=>$request->product_qty,
                'product_tags_en'=>$request->product_tags_en,
                'product_tags_sw'=>$request->product_tags_sw,
                'product_size_en'=>$request->product_size_en,
                'product_size_sw'=>$request->product_size_sw,
                'product_color_en'=>$request->product_color_en,
                'product_color_sw'=>$request->product_color_sw,


                'selling_price'=>$request->selling_price,
                'discount_price'=>$request->discount_price,
                'short_descp_en'=>$request->short_descp_en,
                'short_descp_sw'=>$request->short_descp_sw,
                'long_descp_en'=>$request->long_descp_en,
                'long_descp_sw'=>$request->long_descp_sw,


                'hot_deals'=>$request->hot_deals,
                'featured'=>$request->featured,
                'special_offer'=>$request->special_offer,
                'special_deals'=>$request->special_deals,

              
                'status'=>1,
                'created_at'=>Carbon::now(),

            ]);
                $notification = array(
            'message' => 'Product Updated Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('manage-product')->with($notification);
    }

        // Multiple Images Update
    public function MultiImageUpdate(Request $request){
        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            unlink($imgDel->photo_name);
                    $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                    Image::make($img)->resize(917,1000)->save('upload/products/multi-image/'.$make_name);
                    $uploadPath = 'upload/products/multi-image/'.$make_name;
                    MultiImg::where('id',$id)->update([
                        'photo_name'=>$uploadPath,
                        'updated_at'=>Carbon::now(),
                    ]);
        }

          $notification = array(
            'message' => 'Product Image(s) Update Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);

    }
             //   Product Thambnail Update
    public function ThambnailImageUpdate(Request $request){
            $pro_id = $request->id;
            $oldImage = $request->old_img;
            unlink($oldImage);

             $image = $request->file('product_thambnail');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    Image::make($image)->resize(917,1000)->save('upload/products/thambnail/'.$name_gen);
                    $save_url = 'upload/products/thambnail/'.$name_gen;

                      Product::findOrFail($pro_id)->update([
                        'product_thambnail'=>$save_url,
                        'updated_at'=>Carbon::now(),
                    ]);

                     $notification = array(
                            'message' => 'Product Image Thambnail Update Successfuly',
                            'alert-type' =>'success'
                        );
                        return redirect()->back()->with($notification);
                    }

                   // Multi Image Delete
    public function MultiImageDelete($id){
            $oldimg = MultiImg::findOrFail($id);
            unlink($oldimg->photo_name);
            MultiImg::findOrFail($id)->delete();
         $notification = array(
                            'message' => 'Product Image Deleted Successfuly',
                            'alert-type' =>'warning'
                        );
                        return redirect()->back()->with($notification);
    }

    public function ProductInactive($id){
        Product::findOrFail($id)->update(['status' =>0]);
        $notification = array(
                            'message' => 'Product Inactive',
                            'alert-type' =>'info'
                        );
                        return redirect()->back()->with($notification);

    }

    public function ProductActive($id){
        Product::findOrFail($id)->update(['status' =>1]);
            $notification = array(
                            'message' => 'Product Active',
                            'alert-type' =>'info'
                        );
                        return redirect()->back()->with($notification);
    }

    ////Delete Product, all multi Images and Thambnail at once
    public function DeleteProduct($id){
        $product = Product::findOrFail($id);
        unlink($product->product_thambnail);
        Product::findOrFail($id)->delete();

        $images = MultiImg::where('product_id',$id)->get();
            foreach ($images as  $img) {

                unlink($img->photo_name);
                MultiImg::where('product_id',$id)->delete();
            }
                $notification = array(
                            'message' => 'Product Delete Successfully',
                            'alert-type' =>'info'
                        );
                        return redirect()->back()->with($notification);
    }

    ///product stock
      public function ProductStock(){
        $products = Product::latest()->get();

        return view('backend.product.product_stock',compact('products'));
    }
     
}
