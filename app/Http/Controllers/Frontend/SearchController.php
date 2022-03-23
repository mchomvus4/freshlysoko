<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Slider;
class SearchController extends Controller
{
    public function ProductSearch(Request $request){

            $request->validate(["search" =>"required"]);
            $item = $request->search;
            // echo "$item";
            $sliders = Slider::where('status',1)->orderBy('id','DESC')->limit(4)->get();
            $categories = Category::orderBy('category_name_en','ASC')->get();
            $products = Product::where('product_name_en','LIKE',"%$item%")->get();
                        return view('frontend.product.search',compact('products','categories','sliders'));

    }

    //Advanced Search Method
    public function AdvancedProductSearch(Request $request){

            $request->validate(["search" =>"required"]);
            $item = $request->search;
            // echo "$item";
           
           
            $products = Product::where('product_name_en','LIKE',"%$item%")->select('product_name_en','product_thambnail','id','product_slug_en')->limit(8)->get();
                        return view('frontend.product.search_product',compact('products'));

    }
}
