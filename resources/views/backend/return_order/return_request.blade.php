@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Return Orders</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Return Orders</li>
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
                        <th>Reason</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($orders as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->order_date}}</td>
                        <td>{{$item->invoice_number}}</td>
                        <td>${{$item->amount}}</td>
                        <td>{{$item->payment_method}}</td>
                        <td>
                            @if($item->return_order == 1)
                            <span class="badge rounded-pill bg-danger">Pending</span>
                            @elseif($item->return_order == 2)
                            <span class="badge rounded-pill bg-success">Success</span>
                            @endif
                        </td>
                        <td>{{$item->return_reason}}</td>
                        <td><a  href="{{route('admin.order.details',$item->id)}}" class="btn btn-info"><i class="fa fa-eye"></i></a>&nbsp;&nbsp;<a  href="{{route('return.request.approved',$item->id)}}" class="btn btn-danger" title="Approved" id="approved"><i class="fa fa-thumbs-up"></i></a></td></tr>
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
                        <th>Reason</th>
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