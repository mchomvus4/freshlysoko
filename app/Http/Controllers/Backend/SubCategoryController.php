<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Category;
class SubCategoryController extends Controller
{
    public function SubCategoryView(){
        $categories = Category::orderBy('category_name_en','ASC')->get();
         $sub_categories = SubCategory::latest()->get();
        return view('backend.category.subcategory_view',compact('sub_categories','categories'));
    }

     public function SubCategoryStore(Request $request){
             $request->validate([
            'category_id' =>'required',
            'subcategory_name_en' =>'required',
            'subcategory_name_sw' =>'required',
            
        ],[
            'category_id.required' =>'Please Select any Option',
            'subcategory_name_en.required' =>'Input SubCategory English Name',
            'subcategory_name_sw.required' =>'Input SubCategory Swahili Name',
        ]);

       

        SubCategory::insert([
             'category_id'=>$request->category_id,
             'subcategory_name_en'=>$request->subcategory_name_en,
             'subcategory_name_sw'=>$request->subcategory_name_sw,
             'subcategory_slug_en'=>strtolower(str_replace('','-',$request->subcategory_name_en)),
             'subcategory_slug_sw'=>str_replace('','-',$request->subcategory_name_sw),
            
        ]);
        $notification = array(
            'message' => 'SubCategory  Inserted  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
        public function SubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $sub_categories = SubCategory::findOrFail($id);
         return view('backend.category.subcategory_edit',compact('sub_categories','categories'));
    }

    public function SubCategoryUpdate(Request $request){
        $subcat_id = $request->id;
         SubCategory::findOrFail($subcat_id)->update([
             'category_id'=>$request->category_id,
             'subcategory_name_en'=>$request->subcategory_name_en,
             'subcategory_name_sw'=>$request->subcategory_name_sw,
             'subcategory_slug_en'=>strtolower(str_replace('','-',$request->subcategory_name_en)),
             'subcategory_slug_sw'=>str_replace('','-',$request->subcategory_name_sw),
            
        ]);
        $notification = array(
            'message' => 'SubCategory  Updated  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('all.subcategory')->with($notification);

    }

    public function SubCategoryDelete($id){
        SubCategory::findOrFail($id)->delete();
        $notification = array(
                        'message' => 'SubCategory Deleted  Successfuly',
                        'alert-type' =>'warning'
                    );
                    return redirect()->back()->with($notification);
    }




    //////////////////////Sub Sub->Category All Methods////////////////

    public function SubSubCategoryView(){
        $categories = Category::orderBy('category_name_en','ASC')->get();
         $sub_sub_categories = SubSubCategory::latest()->get();
        return view('backend.category.sub_subcategory_view',compact('sub_sub_categories','categories'));
    }

    public function GetSubCategory($category_id){
        $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name_en','ASC')->get();
        return json_decode($subcat);
    }
    public function GetSubSubCategory($subcategory_id){
        $subsubcat = SubSubCategory::where('subcategory_id',$subcategory_id)->orderBy('subsubcategory_name_en','ASC')->get();
        return json_decode($subsubcat);
    }


    public function SubSubCategoryStore(Request $request){
             $request->validate([
            'category_id' =>'required',
            'subcategory_id' =>'required',
            'subsubcategory_name_en' =>'required',
            'subsubcategory_name_sw' =>'required',
            
        ],[
            'category_id.required' =>'Please Select any Option',
            'subcategory_id.required' =>'Please Select any Option',
            'subsubcategory_name_en.required' =>'Input Sub-SubCategory English Name',
            'subsubcategory_name_sw.required' =>'Input Sub-SubCategory Swahili Name',
        ]);

       

        SubSubCategory::insert([
             'category_id'=>$request->category_id,
             'subcategory_id'=>$request->subcategory_id,
             'subsubcategory_name_en'=>$request->subsubcategory_name_en,
             'subsubcategory_name_sw'=>$request->subsubcategory_name_sw,
             'subsubcategory_slug_en'=>strtolower(str_replace('','-',$request->subsubcategory_name_en)),
             'subsubcategory_slug_sw'=>str_replace('','-',$request->subsubcategory_name_sw),
            
        ]);
        $notification = array(
            'message' => 'Sub-SubCategory  Inserted  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }

    public function SubSubCategoryEdit($id){
        $categories = Category::orderBy('category_name_en','ASC')->get();
        $subcategories = SubCategory::orderBy('subcategory_name_en','ASC')->get();
        $subsubcategories = SubSubCategory::findOrFail($id);
        return view('backend.category.sub_subcategory_edit',compact('categories','subcategories','subsubcategories'));
    }

    public function SubSubCategoryUpdate(Request $request){
             $subsubcat_id = $request->id;


        SubSubCategory::findOrFail($subsubcat_id)->update([
             'category_id'=>$request->category_id,
             'subcategory_id'=>$request->subcategory_id,
             'subsubcategory_name_en'=>$request->subsubcategory_name_en,
             'subsubcategory_name_sw'=>$request->subsubcategory_name_sw,
             'subsubcategory_slug_en'=>strtolower(str_replace('','-',$request->subsubcategory_name_en)),
             'subsubcategory_slug_sw'=>str_replace('','-',$request->subsubcategory_name_sw),
            
        ]);
        $notification = array(
            'message' => 'Sub-SubCategory  Updated  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->route('all.sub_subcategory')->with($notification);
    }

    public function SubSubCategoryDelete($id){
            SubSubCategory::findOrFail($id)->delete();
            $notification = array(
            'message' => 'Sub-SubCategory  Deleted  Successfuly',
            'alert-type' =>'warning'
        );
        return redirect()->back()->with($notification);

    }
}
