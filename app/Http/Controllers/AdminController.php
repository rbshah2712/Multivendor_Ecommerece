<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\VendorApproveNotification;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    
    public function AdminDashboard(){

        return view('admin.index');

    }//end method

    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }//end method

    public function AdminLogin(){

        return view('admin.admin_login');
    
    }//end method

    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile',compact('adminData'));
    }//end method

    public function AdminProfileStore(Request $request){
        
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;

        }

        $data->save();
        $notification = array('message'=>'Admin profile updated successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);
       
    }//end method

    public function AdminChangePassword(){
       
        return view('admin.admin_change_password');
    }//end method


    public function AdminStorePassword(Request $request){
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
                
    }//end method

    public function InactiveVendor(){
        $inactiveVendor = User::where('status','inactive')->where('role','vendor')->latest()->get();
        return view('backend.vendor.inactive_vendor',compact('inactiveVendor'));

    }//end method

    public function ActiveVendor(){
        $activeVendor = User::where('status','active')->where('role','vendor')->latest()->get();
        return view('backend.vendor.active_vendor',compact('activeVendor'));

    }//end method

    public function InactiveVendorDetails($id){
        $inactiveVendorDetails = User::findOrFail($id);
        return view('backend.vendor.inactive_vendor_details',compact('inactiveVendorDetails'));
    }//end method

    public function ActiveVendorDetails($id){
        $activeVendorDetails = User::findOrFail($id);
        return view('backend.vendor.active_vendor_details',compact('activeVendorDetails'));
    }//end method

    public function ActiveVendorApprove(Request $request){
        $vendor_id = $request->id;
        $user = User::findOrFail($vendor_id)->update([
            'status'=>'active'
        ]);
        $notification = array('message'=>'Vendor Activated successfully','alert-type'=>'success');
        $vuser =  User::where('role','vendor')->get();
        Notification::send($vuser,new VendorApproveNotification($request->name));
        return redirect()->route('active.vendor')->with($notification);
    }//End  Method



    public function InactiveVendorApprove(Request $request){
        $vendor_id = $request->id;
        $user = User::findOrFail($vendor_id)->update([
            'status'=>'inactive'
        ]);
        $notification = array('message'=>'Vendor Inactivated successfully','alert-type'=>'success');
        return redirect()->route('inactive.vendor')->with($notification);
    }//End  Method



    /////Admin All Routes/////

    public function AllAdmin(){
        $allAdminUser = User::where('role','admin')->latest()->get();
        return view('backend.admin.all_admin',compact('allAdminUser'));

    }//End  Method

    public function AddAdmin(){
        $roles = Role::all();
        return view('backend.admin.add_admin',compact('roles'));
    }//End Method

    public function AdminUserStore(Request $request){

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        if($request->roles){
            $user->assignRole($request->roles);
        }
        $notification = array('message'=>'New Admin User Inserted successfully','alert-type'=>'success');
        return redirect()->route('all.admin')->with($notification);

    }//End Method


    public function EditAdminRole($id){

        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('backend.admin.edit_admin',compact('roles','user'));

    }//End Method


    public function UpdateAdminRole(Request $request,$id){

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $user->roles()->detach();
        if($request->roles){
            $user->assignRole($request->roles);
        }
        $notification = array('message'=>'Admin User Updated successfully','alert-type'=>'success');
        return redirect()->route('all.admin')->with($notification);

    }//End Method

    public function DeleteAdminRole($id){
        $user = User::findOrFail($id);
        if(!is_null($user)){
            $user->delete();
        }
        $notification = array('message'=>'Admin User Deleted successfully','alert-type'=>'success');
        return redirect()->route('all.admin')->with($notification);
    }//End Method


}
