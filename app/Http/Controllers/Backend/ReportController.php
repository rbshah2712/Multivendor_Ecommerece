<?php

namespace App\Http\Controllers\Backend;

use DateTime;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReportController extends Controller
{
    

    public function ReportView(){
        return view('backend.report.report_view');
    }//End Method

    public function SearchByDate(Request $request){
        $date = new DateTime($request->date);
        $formateDate = $date->format('d F Y');
        $orders = Order::where('order_date',$formateDate)->latest()->get();
        return view('backend.report.report_by_date',compact('orders','formateDate'));

    }//End Method

    public function SearchByMonth(Request $request){
        $month = $request->month;
        $year_name = $request->year_name; 
        $orders = Order::where('order_month',$month)->where('order_year',$year_name)->latest()->get();
        return view('backend.report.report_by_month',compact('orders','month','year_name'));

    }//End Method

    public function SearchByYear(Request $request){
        $year = $request->year;
        $orders = Order::where('order_year',$year)->latest()->get();
        return view('backend.report.report_by_year',compact('orders','year'));
    }//End Method

    public function OrderByUser(){
        $users = User::where('role','user')->latest()->get();
        return view('backend.report.report_by_user',compact('users'));
    }//End Method

    public function SearchByUser(Request $request){
        $users = $request->user;
        
        $orders = Order::where('user_id',$users)->latest()->get();
        return view('backend.report.report_by_user_show',compact('orders','users'));
    }
}
