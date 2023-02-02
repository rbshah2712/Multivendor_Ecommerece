@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">SubCategory</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">SubCategory</li>
         </ol>
       </div>
       <div class="col-sm-2">
        <a href="{{route('add.subcategory')}}" class="btn btn-primary">Add SubCategory</a>
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
                        <th>Category Name</th>
                        <th>SubCategory Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($subcategories as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item['category']['category_name']}}</td>
                        <td>{{$item->subcategory_name}}</td>
                        <td><a href="{{route('edit.subcategory',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('delete.subcategory',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                      <th>Sr</th>
                      <th>Category Name</th>
                      <th>SubCategory Name</th>
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