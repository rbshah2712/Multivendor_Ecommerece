@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Brand</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Brand</li>
         </ol>
       </div>
       <div class="col-sm-2">
        <a href="{{route('add.brand')}}" class="btn btn-primary">Add Brand</a>
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
                        <th>Brand Name</th>
                        <th>Brand Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($brands as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->brand_name}}</td>
                        <td><img src="{{asset($item->brand_image)}}" style="width:70px;height:40px;"/></td>
                        <td><a href="{{route('edit.brand',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('delete.brand',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Brand Name</th>
                      <th>Brand Image</th>
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