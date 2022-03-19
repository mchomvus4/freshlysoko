<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function CategoryView(){
         $categories = Category::latest()->get();
        return view('backend.category.category_view',compact('categories'));
    }

    public function CategoryStore(Request $request){
             $request->validate([
            'category_name_en' =>'required',
            'category_name_sw' =>'required',
            'category_icon' =>'required',
        ],[
            'category_name_en.required' =>'Input Category English Name',
            'category_name_sw.required' =>'Input Category Swahili Name',
            'category_icon.required' =>'Input Category Icon',
        ]);

       

        Category::insert([
             'category_name_en'=>$request->category_name_en,
             'category_name_sw'=>$request->category_name_sw,
             'category_icon'=>$request->category_icon,
             'category_slug_en'=>strtolower(str_replace('','-',$request->category_name_en)),
             'category_slug_sw'=>str_replace('','-',$request->category_name_sw),
            
        ]);
        $notification = array(
            'message' => 'Category  Inserted  Successfuly',
            'alert-type' =>'success'
        );
        return redirect()->back()->with($notification);
    }
       public function CategoryEdit($id){
        $categories = Category::findOrFail($id);
         return view('backend.category.category_edit',compact('categories'));
    }

    public function CategoryUpdate(Request $request){
        $cat_id = $request->id;
        
        Category::findOrFail($cat_id)->update([
                        'category_name_en'=>$request->category_name_en,
                        'category_name_sw'=>$request->category_name_sw,
                        'category_icon'=>$request->category_icon,
                        'brand_slug_en'=>strtolower(str_replace('','-',$request->category_name_en)),
                        'brand_slug_sw'=>str_replace('','-',$request->category_name_sw),
                        
                    ]);
                    $notification = array(
                        'message' => 'Category Updated  Successfuly',
                        'alert-type' =>'info'
                    );
                    return redirect()->route('all.category')->with($notification);

    }

    public function CategoryDelete($id){
        Category::findOrFail($id)->delete();
        $notification = array(
                        'message' => 'Category Deleted  Successfuly',
                        'alert-type' =>'warning'
                    );
                    return redirect()->back()->with($notification);
    }
}
