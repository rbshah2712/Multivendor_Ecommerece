<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use PhpParser\Node\Expr\FuncCall;

class SubCategoryController extends Controller
{
  

    public function AllSubCategory(){
        $subcategories = SubCategory::latest()->get();
        return view('backend.subcategory.subcategory_all',compact('subcategories'));
    }//end method


    public function AddSubCategory(){
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('backend.subcategory.subcategory_add',compact('categories'));
    }//end method


    public function StoreSubCategory(Request $request){
        SubCategory::insert([
            'category_id' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),

        ]);
        $notification = array('message'=>'SubCategory Added successfully','alert-type'=>'success');
        return redirect()->route('all.subcategory')->with($notification);

    }//End Method 

    public function EditSubCategory($id){
        $subcategory = SubCategory::findOrFail($id);
        $categories = Category::orderBy('category_name','ASC')->get();
        return view('backend.subcategory.subcategory_edit',compact('subcategory','categories'));

    }//End Method


    public function UpdateSubCategory(Request $request){

        $subcategory_id = $request->id;
        SubCategory::findOrFail($subcategory_id)->update([
            'category_id' => $request->category_name,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ','-',$request->subcategory_name)),

        ]);
        $notification = array('message'=>'SubCategory Updated successfully','alert-type'=>'success');
        return redirect()->route('all.subcategory')->with($notification);

    }//End Method

    public function DeleteSubCategory($id){
        SubCategory::findOrFail($id)->delete();
        $notification = array('message'=>'SubCategory Deleted successfully','alert-type'=>'success');
        return redirect()->route('all.subcategory')->with($notification);
    }//End Method

    public function GetSubCategory($category_id)
    {
       $subcat = SubCategory::where('category_id',$category_id)->orderBy('subcategory_name','ASC')->get();
       return json_encode($subcat);
    }

}
