@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Admin Change Password</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin Change Password</li>
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
                <form method="POST" action="{{ route ('admin.password.store') }}">
                    @csrf
                    @if(session('status'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="alert-icon">
                            <i class="fa fa-check"></i>
                           </div>
                           <div class="alert-message">
                            <span><strong>{{session('status')}}</span>
                          </div>
                        
                    </div>
                    @elseif(session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <div class="alert-icon">
                            <i class="fa fa-times"></i>
                           </div>
                           <div class="alert-message">
                            <span><strong>{{session('error')}}</span>
                          </div>
                        
                    </div>
                    @endif
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Old Password</label>
                        <div class="col-lg-9">  
                            <input class="form-control" type="password" @error('oldpassword') is-invalid @enderror id="current_password" name="oldpassword">
                            @error('oldpassword')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">New Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password" @error('newpassword') is-invalid @enderror id="newpassword" name="newpassword">
                            @error('newpassword')<span class="text-danger">{{$message}}</span>@enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Confirm Password</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="password"  id="confirm_password" name="confirm_password" value="">
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