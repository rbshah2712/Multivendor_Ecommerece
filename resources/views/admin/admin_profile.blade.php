@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Admin Profile</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Admin</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
     </ol>
   </div>

 </div>
<!-- End Breadcrumb-->

<div class="row">
   

    <div class="col-lg-4">
        <div class="card profile-card-2">
         <div class="ml-5 mt-5 pl-5">
             <img class="rounded-circle" src="{{!empty($adminData->photo)? url('upload/admin_images/'.$adminData->photo) : url('upload/no-image.png')}}" alt="{{$adminData->username}}" width="200px" height="200px">
         </div>
         <div class="card-body pt-5">
             <h5 class="card-title">{{$adminData->username}}</h5>
             <p class="card-text">{{$adminData->email}}</p>
         </div>
 
         <div class="card-body border-top">
              <div class="media align-items-center">
                
               </div>
               
               <div class="media align-items-center">
                
               </div>
               
               <div class="media align-items-center">
                
               </div>
                
               <div class="media align-items-center">
                
               </div>
               
           </div>
     </div>
 
     </div>

    <div class="col-lg-8">
       <div class="card">
        <div class="card-body">
        <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
            <li class="nav-item">
                <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
            </li>
            
           
        </ul>
        <div class="tab-content p-3">
            
            
            <div class="tab-pane active" id="profile">
                <form method="POST" action="{{ route ('admin.profile.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">User Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="username" name="username" value="{{$adminData->username}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Full Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="name" name="name" value="{{$adminData->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" id="email" name="email" value="{{$adminData->email}}">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="phone"  name="phone" value="{{$adminData->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="address" name="address" value="{{$adminData->address}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Image</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file" id="photo" name="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> </label>
                       <div class="col-lg-9">
                           <img id="showImage" class="profile" src="{{ (!empty($adminData->photo))? url('upload/admin_images/'.$adminData->photo):url('upload/no-image.png') }}" alt="{{$adminData->username}}" width="200px" height="200px">
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
<script type="text/javascript">
    
    $(document).ready(function(){
        $('#photo').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
    </script>




@endsection