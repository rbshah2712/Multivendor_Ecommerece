<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
   
    public function UserDashboard(){
        $id = Auth::user()->id;
        $UserData = User::find($id);
        return view('index',compact('UserData'));
    }// End Method

    public function UserProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        
        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/user_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['photo'] = $filename;

        }

        $data->save();
        $notification = array('message'=>'User profile updated successfully','alert-type'=>'success');
        return redirect()->back()->with($notification);

    }

    public function UserDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        
        $notification = array('message'=>'User Logout successfully','alert-type'=>'success');
        return redirect('/login')->with($notification);
    }//end method

    public function UserStorePassword(Request $request){
        $request->validate([
            'oldpass'=> 'required',
            'newpass'=>'required | same:confirmpassword',
        ]);

        //Match Old Password
        $hashedPassword = Auth::user()->password;
        if(!Hash::check($request->oldpass,$hashedPassword)){
               return back()->with("error","Old Password Doesn't Match!!");
        }

        //Update New Password
        User::whereId(Auth::user()->id)->update([
            'password'=> Hash::make($request->newpass),
        ]);
        return back()->with('status','Password Changed Successfully');
                
    }

}
