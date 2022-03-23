<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Auth;
use Carbon\Carbon;
class ReviewController extends Controller
{
    public function ReviewStore(Request $request){
        $product = $request->product_id;

        $request->validate([
            'summary'=>'required',
            'comment'=>'required',
        ]);

        Review::insert([
            'product_id'=> $product,
            'user_id'=>Auth::id(),
            'summary'=>$request->summary,
            'comment'=>$request->comment,
            'rating'=>$request->quality,
            'created_at'=>Carbon::now(),
        ]);

         $notification = array(
                        'message' => 'Your Review Placed  Successfuly',
                        'alert-type' =>'success'
                    );
                    return redirect()->back()->with($notification);

    }

    public function PendingReview(){
        $reviews = Review::where('status',0)->orderBy('id','DESC')->get();
        return view('backend.review.pending_review',compact('reviews'));
    }

     public function ReviewApprove($id){
        Review::where('id',$id)->update(['status' => 1]);

         $notification = array(
                        'message' => 'Review Approved  Successfuly',
                        'alert-type' =>'success'
                    );
                    return redirect()->back()->with($notification);

    }

    public function PublishReview(){
         $reviews = Review::where('status',1)->orderBy('id','DESC')->get();
        return view('backend.review.publish_review',compact('reviews'));
    }

    public function DeleteReview($id){
         Review::findOrFail($id)->delete();
         $notification = array(
                        'message' => 'Review Deleted Successfuly',
                        'alert-type' =>'warning'
                    );
                    return redirect()->back()->with($notification);
    }

}
