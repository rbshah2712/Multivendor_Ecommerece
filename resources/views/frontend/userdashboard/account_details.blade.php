@extends('dashboard')
@section('user')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="{{url('/')}}" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> User Account
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
                                        <h5>Account Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('user.profile.store')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label>User Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="username" type="text" value="{{$UserData->username}}"/>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label>Full Name <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="name" value="{{$UserData->name}}" />
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="email" type="email" value="{{$UserData->email}}"/>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="phone" type="text" value="{{$UserData->phone}}"/>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input required="" class="form-control" name="address" type="text" value="{{$UserData->address}}"/>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>User Photo <span class="required">*</span></label>
                                                    <input class="form-control" name="photo" id="photo" type="file" />
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label></label>
                                                    <img id="profileImg" class="profile rounded-circle bg-primary" alt="User Photo" src="{{ (!empty($UserData->photo))? url('upload/user_images/'.$UserData->photo):url('upload/no-image.png') }}" alt="{{$UserData->username}}" width="200px" height="200px"/>
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
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#photo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#profileImg').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    </script>
@endsection