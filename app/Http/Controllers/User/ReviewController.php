<?php

namespace App\Http\Controllers\User;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function StoreReview(Request $request)
    {
        $product = $request->product_id;
        $vendor = $request->hvendor_id;

        $request->validate([
            'comment' => 'required',
        ]);

        Review::insert([
            'product_id' => $product,
            'user_id' => Auth::user()->id,
            'comment' => $request->comment,
            'rating' => $request->quality,
            'vendor_id' => $vendor,
            'created_at' => Carbon::now(),
        ]);

        $notification = array('message'=>'Review Will be approved by Admin','alert-type'=>'success');
        return redirect()->back()->with($notification);
    }//End Method

        public function PendingReview(){
            $pendingreviews = Review::where('status',0)->orderBy('id','DESC')->get();
            return view('backend.review.pending_review',compact('pendingreviews')); 
        }//End Method


        public function ReviewApproved($id){
            Review::where('id',$id)->update(['status' => 1]);
            $notification = array('message'=>'Review is Approved Successfully','alert-type'=>'success');
            return redirect()->back()->with($notification);
        }//End Method


        public function PublishedReview(){
            $publishedreviews = Review::where('status',1)->orderBy('id','DESC')->get();
            return view('backend.review.published_review',compact('publishedreviews')); 
        }//End Method

        public function ReviewDelete($id){
            Review::where('id',$id)->delete();
            $notification = array('message'=>'Review is Deleted Successfully','alert-type'=>'success');
            return redirect()->back()->with($notification);
        }//End Method

        public function VendorAllReview(){
            $id = Auth::user()->id;
            $review = Review::where('vendor_id',$id)->where('status',1)->orderBy('id','DESC')->get();
            return view('vendor.backend.review.approve_review',compact('review'));
        }//End Method
}
