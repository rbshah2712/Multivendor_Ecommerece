@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Add Admin User</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Admin User</li>
     </ol>
   </div>

 </div>
<!-- End Breadcrumb-->

<div class="row">
    <div class="col-lg-12">
       <div class="card">
        <div class="card-body">
        <div class="tab-content p-3">
            <div class="tab-pane active" id="profile">
                <form method="POST" action="{{ route ('admin.user.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">User Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="username" name="username" placeholder="Add User Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="name" name="name" placeholder="Add Full Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" id="email" name="email" placeholder="Add Email">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="phone"  name="phone" placeholder="Add Phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="address" name="address" placeholder="Add Address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" id="password" name="password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Assign Roles</label>
                        <div class="col-lg-9">
                            <select id="roles" name="roles" class="custom-select">
                                <option value="">Open this Menu</option>
                                @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
       
  </div>
  </div>
    
</div>
@endsection