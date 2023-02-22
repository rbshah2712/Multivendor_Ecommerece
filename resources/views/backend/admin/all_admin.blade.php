@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">All Admin</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All Admin</li>
         </ol>
       </div>
       <div class="col-sm-2">
        <a href="{{route('add.admin')}}" class="btn btn-primary">Add Admin</a>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($allAdminUser as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{!empty($item->photo)? url('upload/admin_images/'.$item->photo) : url('upload/no-image.png')}}" alt="{{$item->username}}" style="width:60px;height:60px;"/></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                            @foreach($item->roles as $role)
                            <span class="badge badge-pill bg-danger">{{$role->name}}</span>
                            @endforeach
                        </td>
                        <td><a href="{{route('edit.admin.role',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('admin.user.delete',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Role</th>
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