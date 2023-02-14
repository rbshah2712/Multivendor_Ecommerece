<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AllUserController extends Controller
{
    public function UserAccount(){
        $id = Auth::user()->id;
        $UserData = User::find($id);
        return view('frontend.userdashboard.account_details',compact('UserData'));
    }//End Method


    public function UserChangePassword(){

        return view('frontend.userdashboard.user_change_password');
    }//End Method


    public function UserOrderPage(){
        $id = Auth::user()->id;
        $orders = Order::where('user_id',$id)->orderBy('id','DESC')->get();
        return view('frontend.userdashboard.user_order_page',compact('orders'));
    }//End Method


    public function UserOrderDetails($order_id){
       
        $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderitem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        
        return view('frontend.order.order_details',compact('order','orderitem'));
    }//End Method


    public function UserOrderInvoice($order_id){
       
        $order = Order::with('division','district','state','user')->where('id',$order_id)->where('user_id',Auth::id())->first();
        $orderitem = OrderItem::with('product')->where('order_id',$order_id)->orderBy('id','DESC')->get();
        
        $pdf = Pdf::loadView('frontend.order.order_invoice', compact('order','orderitem'))->setPaper('a4')->setOption(['tempDir' => public_path(), 
        'chroot' => public_path(),]);
        return $pdf->download('invoice.pdf');
    }//End Method

    public function ReturnOrder(Request $request,$order_id){
       
        Order::findOrFail($order_id)->update([
            'return_date' => Carbon::now()->format('d F Y'),
            'return_reason' => $request->return_reason,
            'return_order' => 1,
        ]);

        $notification = array('message'=>'Return Request Sent successfully','alert-type'=>'success');
        return redirect()->route('user.order.page')->with($notification);


    }//End Method

    public function ReturnOrderPage(){

        $orders = Order::where('user_id',Auth::id())->where('return_order','!=',NULL)->orderBy('id','DESC')->get();
        return view('frontend.order.return_order_view',compact('orders'));

    }//End Method
}
