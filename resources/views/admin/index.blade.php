@extends('admin.admin_dashboard')
@section('admin')

@php
	$date = date('d-m-y');
	$today = App\Models\Order::where('order_date',$date)->sum('amount');
	$month = date('F');
	$month = App\Models\Order::where('order_month',$month)->sum('amount');
	$year = date('Y');
	$year = App\Models\Order::where('order_year',$year)->sum('amount');
	$pending = App\Models\Order::where('status','pending')->get();
	$vendor = App\Models\User::where('status','active')->where('role','vendor')->get();
	$customer = App\Models\User::where('status','active')->where('role','user')->get();
  $orders = App\Models\Order::where('status','pending')->orderBy('id','DESC')->limit(10)->get();
@endphp
      <!--Start Dashboard Content-->  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-bloody">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Today's Sale</p>
                <h4 class="text-white line-height-5">${{$today}} USD</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-cart-plus text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Monthly Sale</p>
                <h4 class="text-white line-height-5">${{ $month }} USD</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-money text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-blooker">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Yearly Sale</p>
                <h4 class="text-white line-height-5">${{ $year }} USD</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-users text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Pending Orders</p>
                <h4 class="text-white line-height-5">{{count($pending)}}</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-blooker">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Vendors</p>
                <h4 class="text-white line-height-5">{{count($vendor)}}</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-users text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Users</p>
                <h4 class="text-white line-height-5">{{count($customer)}}</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
      <div class="card-header border-0">
                Order Summary
        <div class="card-action">
         <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
          </div>
                 </div>
                </div>
               <div class="table-responsive">
         
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                    <th>Sl</th>
                     <th>Date</th>
                     <th>Invoice</th>
                     <th>Amount</th>
                     <th>Payment</th>
                     <th>Status</th>
                   </tr>
                   </thead>
                   @foreach ($orders as $key => $item)
                       
                   
                   <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$item->order_date}}</td>
                    <td>{{$item->invoice_number}}</td>
                    <td>${{$item->amount}}</td>
                    <td>{{$item->payment_method}}</td>
                    <td><span class="badge badge-pill text-primary">{{$item->status}}</span></td>
        
                      </tr>
                      @endforeach
                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->

      <!--End Dashboard Content-->


    <!-- End container-fluid-->
    
    
   <!--Start Back To Top Button-->
   
    <!--End Back To Top Button-->
    <script src="{{asset('adminbackend/assets/js/index.js')}}"></script>
	@endsection