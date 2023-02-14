@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">All User Data</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">All User Data</li>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Online/Offline</th>
                        <th>Last Active</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($users as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td><img src="{{!empty($item->photo)? url('upload/user_images/'.$item->photo) : url('upload/no-image.png')}}" alt="{{$item->username}}" style="width:60px;height:60px;"/></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->phone}}</td>
                        <td>
                            @if(Cache::has('user-is-online-' . $item->id))
                            <span class="badge badge-all badge-success">Online Now</span>
                            @else
                            <span class="badge badge-all badge-danger">Offline</span>
                            @endif
                        </td>
                        <td><span class="badge badge-pill bg-warning"> {{ Carbon\Carbon::parse($item->last_seen)->diffForHumans() }} </span></td>
                        <td><span class="badge badge-all badge-success">{{$item->status}}</span></td>
                        <td><a href="{{route('edit.subcategory',$item->id)}}" class="btn btn-info">Edit</a>&nbsp;&nbsp;<a href="{{route('delete.subcategory',$item->id)}}" class="btn btn-danger" id="delete">Delete</a></td>
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
                        <th>Online/Offline</th>
                        <th>Last Active</th>
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