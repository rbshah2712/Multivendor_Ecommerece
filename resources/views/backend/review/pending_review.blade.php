@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Pending Reviews</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pending Reviews</li>
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
                        <th>User Name</th>
                        <th>Comments</th>
                        <th>Rating</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($pendingreviews as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{asset($item->product->product_thumbnail)}}" style="width:40px;height:40px"/></td>
                        <td>{{$item->product->product_name}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->comment}}</td>
                        <td>
                            @if($item->rating == NULL)
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            @elseif($item->rating == 1)
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            @elseif($item->rating == 3)
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            @elseif($item->rating == 3)
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-dark"></i>
                            <i class="bx bxs-star text-dark"></i>
                            @elseif($item->rating == 4)
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-dark"></i>
                            @elseif($item->rating == 5)
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                            <i class="bx bxs-star text-warning"></i>
                
                            @endif
                                     </td>
                        <td>
					 	@if($item->status == 0)
 	<span class="badge rounded-pill bg-danger">Pending</span>
					 	@elseif($item->status == 1)
 <span class="badge rounded-pill bg-success">Publish</span>
					 	@endif
					 </td>
                        <td><a href="{{route('review.approve',$item->id)}}" class="btn btn-danger">Approve</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Image</th>
                      <th>Product Name</th>
                      <th>User Name</th>
                      <th>Comments</th>
                      <th>Rating</th>
                      <th>Status</th>
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