@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">All Roles Permission</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Roles Permission</li>
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
                        <th>Roles Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($roles as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>
                            @foreach($item->permissions as $perm)
                            <span class="badge rounded-pill badge-danger">{{$perm->name}}</span>
                            @endforeach
                        </td>
                        <td><a href="{{route('admin.edit.roles_permission',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('admin.delete.roles',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Roles Name</th>
                        <th>Permission</th>
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