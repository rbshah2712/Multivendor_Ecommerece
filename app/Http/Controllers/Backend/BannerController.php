<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Image;

class BannerController extends Controller
{
    public function AllBanner(){
        $banners = Banner::latest()->get();
        return view('backend.banner.banner_all',compact('banners'));

    }//End Method

    public function AddBanner(){
        return view('backend.banner.banner_add');
    }//End Method

    public function StoreBanner(Request $request){

        $image = $request->file('banner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(300,300)->save('upload/banner/'.$name_gen);
        $save_url = 'upload/banner/'.$name_gen;

        Banner::insert([
            'banner_title' => $request->banner_title,
            'banner_url' => $request->banner_url,
            'banner_image'=> $save_url,

        ]);
        $notification = array('message'=>'Banner Added successfully','alert-type'=>'success');
        return redirect()->route('all.banner')->with($notification);

    }//End Method 


    public function EditBanner($id){
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_edit',compact('banner'));

    }//End Method

    public function UpdateBanner(Request $request){

        $banner_id = $request->id;
        $old_image = $request->old_image;
        
        if(!empty($request->file('banner_image'))){
            $image = $request->file('banner_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(768,450)->save('upload/banner/'.$name_gen);
            $save_url = 'upload/banner/'.$name_gen;

            if(file_exists($old_image)){
                unlink($old_image);
            }

            Banner::findOrFail($banner_id)->update([
                'banner_title' => $request->banner_title,
                'banner_url' =>  $request->banner_url,
                'banner_image'=> $save_url,

            ]);
            $notification = array('message'=>'Banner Updated with Image successfully','alert-type'=>'success');
            return redirect()->route('all.banner')->with($notification);

        } else {

            Banner::findOrFail($banner_id)->update([
                'banner_title' => $request->slider_title,
                'banner_url' =>  $request->banner_url,

            ]);
            $notification = array('message'=>'Banner Updated without Image successfully','alert-type'=>'success');
            return redirect()->route('all.banner')->with($notification);
        }

}//End Method

public function DeleteBanner($id){

    $banner = Banner::findOrFail($id);
    $img = $banner->banner_image;
    unlink($img);

    Banner::findOrFail($id)->delete();
    $notification = array('message'=>'Banner Deleted successfully','alert-type'=>'success');
    return redirect()->route('all.banner')->with($notification);


}//End Method
}
