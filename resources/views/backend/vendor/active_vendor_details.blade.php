@extends('vendor.vendor_dashboard')
@section('vendor')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Vendor Active Profile</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Vendor</a></li>
        <li class="breadcrumb-item active" aria-current="page">Vendor Active Profile</li>
     </ol>
   </div>

 </div>
<!-- End Breadcrumb-->

<div class="row">
    <div class="col-lg-4">
       <div class="card profile-card-2">
        <div class="ml-5 mt-5 pl-5">
            <img class="rounded-circle" src="{{!empty($activeVendorDetails->photo)? url('upload/vendor_images/'.$activeVendorDetails->photo) : url('upload/no-image.png')}}" alt="{{$activeVendorDetails->username}}" width="200px" height="200px">
        </div>
        <div class="card-body pt-5">
            <h5 class="card-title">{{$activeVendorDetails->username}}</h5>
            <p class="card-text">{{$activeVendorDetails->email}}</p>
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
                <form method="POST" action="{{ route ('inactive.vendor.approve') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$activeVendorDetails->id}}"/>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">User Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="username" name="username" value="{{$activeVendorDetails->username}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Vendor Shop Name</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="name" name="name" value="{{$activeVendorDetails->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Email</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="email" id="email" name="email" value="{{$activeVendorDetails->email}}">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Phone</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="phone"  name="phone" value="{{$activeVendorDetails->phone}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Address</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" id="address" name="address" value="{{$activeVendorDetails->address}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Vendor Join Date</label>
                        <div class="col-lg-9">
                            <select class="form-control" id="vendor_join" name="vendor_join">
                                <option selected="">Open this Menu</option>
                                <option value="2022" {{$activeVendorDetails->vendor_join == 2022 ? 'selected' : ''}}>2022</option>
                                <option value="2023" {{$activeVendorDetails->vendor_join == 2023 ? 'selected' : ''}}>2023</option>
                                <option value="2024" {{$activeVendorDetails->vendor_join == 2024 ? 'selected' : ''}}>2024</option>
                                <option value="2025" {{$activeVendorDetails->vendor_join == 2025 ? 'selected' : ''}}>2025</option>
                                <option value="2026" {{$activeVendorDetails->vendor_join == 2026 ? 'selected' : ''}}>2026</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Vendor Info</label>
                        <div class="col-lg-9">
                            <textarea class="form-control" rows="4" id="vendor_short_info" name="vendor_short_info" required="" aria-invalid="true">{{$activeVendorDetails->vendor_short_info}}</textarea>
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
                           <img id="showImage" class="profile" src="{{ (!empty($activeVendorDetails->photo))? url('upload/vendor_images/'.$activeVendorDetails->photo):url('upload/no-image.png') }}" alt="{{$activeVendorDetails->username}}" width="200px" height="200px">
                       </div>
                   </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"></label>
                        <div class="col-lg-9">
                            <input type="submit" class="btn btn-danger" value="Inactive User">
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