<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use App\Models\Compare;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{
  

    public function AddToCompare(Request $request,$product_id){
        if(Auth::check()){
            $exists = Compare::where('user_id',Auth::id())->where('product_id',$product_id)->first();

            if(!$exists){
                Compare::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::Now(),

                ]);
                return response()->json(['success'=>'Successfully Added on Your Compare']);

            }else{

                return response()->json(['error'=>'This Product Has Already on Your Compare']);

            }
        }else{
            return response()->json(['error'=>'At First Login Your Account']);
        }

    }//End Method


    public function AllCompare(){

        return view('frontend.compare.view_compare');

    }//End Method


    public function GetCompareProduct(){

        $comparelist = Compare::with('product')->where('user_id',Auth::id())->latest()->get();
        $compareQty =  Compare::count();

        return response()->json(['comparelist'=>$comparelist,'compareQty'=>$compareQty]);

    }//End Method


    
    public function CompareRemove($id){

        compare::where('user_id',Auth::id())->where('id',$id)->delete();
        return response()->json(['success'=>'Successfully Product Removed From Your Compare']);


    }//End Method

}
