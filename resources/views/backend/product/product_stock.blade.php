@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Product Stock</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product Stock</li>
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
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Discount Price</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                  @foreach($products as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{asset($item->product_thumbnail)}}" style="width: 70px; height:40px;" /></td>
                        <td>{{$item->product_name}}</td>
                        <td>{{$item->selling_price}}</td>
                        <td>{{$item->product_qty}}</td>
                        <td>
                          @if($item->discount_price == NULL)
                      <span class="badge rounded-pill bg-info">No Discount</span>
                      @else
                      @php
                      $amount = $item->selling_price - $item->discount_price;
                      $discount = ($amount/$item->selling_price) * 100;
                      @endphp
                    <span class="badge rounded-pill bg-danger"> {{ round($discount) }}%</span>
                      @endif
                           </td>
                           <td> @if($item->status == 1)
                            <span class="badge rounded-pill bg-success">Active</span>
                            @else
                            <span class="badge rounded-pill bg-danger">InActive</span>
                            @endif
                             </td>
                          
                            
                                   </tr>
                             
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>Price</th>
                      <th>Qty</th>
                      <th>Discount Price</th>
                      <th>Status</th>
                      
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
     
	@endsection