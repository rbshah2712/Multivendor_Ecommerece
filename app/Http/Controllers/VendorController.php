<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Validation\Rules;

class VendorController extends Controller
{
    public function VendorDashboard(){

        return view('vendor.index');

    }//end method


    public function VendorDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/vendor/login');
    }//end method


    public function VendorLogin(){

        return view('vendor.vendor_login');
    
    }//end method

    public function VendorProfile(){
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile',compact('vendorData'));
    }//end method


    public function VendorProfileStore(Request $request){
        
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->vendor_join = $request->vendor_join;
        $data->vendor_short_info = $request->vendor_short_info;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/vendor_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images'),$filename);
            $data['photo'] = $filename;

        }

        $data->save();
        $notification = array('message'=>'Vendor profile updated successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);
       
    }//end method

    public function VendorChangePassword(){
       
        return view('vendor.vendor_change_password');
    }//end method


    public function VendorStorePassword(Request $request){
        $request->validate([
            'oldpassword'=> 'required',
            'newpassword'=>'required | same:confirm_password',
        ]);

        //Match Old Password
        $hashedPassword = Auth::user()->password;
        if(!Hash::check($request->oldpassword,$hashedPassword)){
               return back()->with("error","Old Password Doesn't Match!!");
        }

        //Update New Password
        User::whereId(Auth::user()->id)->update([
            'password'=> Hash::make($request->newpassword),
        ]);
        return back()->with('status','Password Changed Successfully');
                
    }

    public function BecomeVendor(){
        return view('auth.become_vendor');
    }

    public function VendorRegister(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 'vendor',
            'status' => 'inactive',
            'vendor_join' => $request->vendor_join,
            'password' => Hash::make($request->password),
        ]);

        $notification = array('message'=>'Vendor Registered successfully','alert-type'=>'success');
        return redirect()->route('vendor.login')->with($notification);
    }
}
