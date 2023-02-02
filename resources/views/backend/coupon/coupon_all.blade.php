@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Coupon</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Coupon</li>
         </ol>
       </div>
       <div class="col-sm-2">
        <a href="{{route('add.coupon')}}" class="btn btn-primary">Add Coupon</a>
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
                        <th>Coupon Name</th>
                        <th>Coupon Discount</th>
                        <th>Coupon Validity</th>
                        <th>Coupon Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($coupons as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->coupon_name}}</td>
                        <td>{{$item->coupon_discount}}%</td>
                        <td>{{Carbon\Carbon::parse($item->coupon_validity)->format('D, d F Y')}}</td>
                        <td>
                          
                       @if ($item->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                          <span class="badge rounded-pill bg-success">Valid</span>  
                        @else
                        <span class="badge rounded-pill bg-danger">Invalid</span>  
                        @endif
                        
                        
                        
                        </td>
                        <td><a href="{{route('edit.coupon',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('delete.coupon',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Coupon Name</th>
                      <th>Coupon Discount</th>
                      <th>Coupon Validity</th>
                      <th>Coupon Status</th>
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