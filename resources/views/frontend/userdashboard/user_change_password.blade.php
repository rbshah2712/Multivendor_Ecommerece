@extends('dashboard')
@section('user')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{url('/')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Change Password
        </div>
    </div>
</div>
<div class="page-content pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="row">
                     <!--Start Col md 3 menu-->
                     @include('frontend.body.dashboard_sidebar_menu')
                    <!--End Col md 3 menu-->
                    <div class="col-md-9">
                        <div class="tab-content account dashboard-content pl-50">
                            <div class="tab-pane fade active show" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Change Password</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{ route ('user.password.store') }}">
                                            @csrf
                                            @if(session('status'))
                                            <div class="alert alert-success alert-dismissible" role="alert">
                                               
                                                <div class="alert-icon">
                                                    <i class="fa fa-check"></i>
                                                   </div>
                                                   <div class="alert-message">
                                                    <span><strong>{{session('status')}}</span>
                                                  </div>
                                                
                                            </div>
                                            @elseif(session('error'))
                                            <div class="alert alert-danger alert-dismissible" role="alert">
                                               
                                                <div class="alert-icon">
                                                    <i class="fa fa-times"></i>
                                                   </div>
                                                   <div class="alert-message">
                                                    <span><strong>{{session('error')}}</span>
                                                  </div>
                                                
                                            </div>
                                            @endif
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Old Password <span class="required">*</span></label>
                                                    <input id="current_password" class="form-control" name="oldpass" @error('oldpass') is-invalid @enderror type="password" placeholder="Old Password"/>
                                                    @error('oldpass')<span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>New Password <span class="required">*</span></label>
                                                    <input id="newpass" class="form-control" name="newpass" @error('newpass') is-invalid @enderror type="password" placeholder="New Password"/>
                                                    @error('newpass')<span class="text-danger">{{$message}}</span>@enderror
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Confirm Password <span class="required">*</span></label>
                                                    <input id="confirmpassword" class="form-control" name="confirmpassword" type="password" placeholder="Confirm Password"/>
                                                </div>
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-fill-out submit font-weight-bold" name="submit" value="Submit">Save Change</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                          
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection