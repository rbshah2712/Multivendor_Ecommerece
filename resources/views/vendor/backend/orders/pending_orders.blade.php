@extends('vendor.vendor_dashboard')
@section('vendor')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Vendor Pending Orders</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendor Pending Orders</li>
         </ol>
       </div>
       
     </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Date</th>
                        <th>Invoice</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($orderitem as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item['order']['order_date']}}</td>
                        <td>{{$item['order']['invoice_number']}}</td>
                        <td>${{$item['order']['amount']}}</td>
                        <td>{{$item['order']['payment_method']}}</td>
                        <td><span class="badge rounded-pill bg-success">{{$item['order']['status']}}</span></td>
                        <td><a  href="{{route('vendor.order.details',$item->order->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a></td></tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Date</th>
                        <th>Invoice</th>
                        <th>Amount</th>
                        <th>Payment</th>
                        <th>State</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
     
	@endsection