@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit Banner</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Banner</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Banner</li>
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
                <form method="POST" action="{{ route ('update.banner') }}" enctype="multipart/form-data" id="bannerform">
                    @csrf
                    <input type="hidden" name="id" value="{{$banner->id}}">
                    <input type="hidden" name="old_image" value="{{$banner->banner_image}}">
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Banner Title</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="banner_title" name="banner_title" value="{{$banner->banner_title}}">
                        </div>
                    </div>
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">Banner URL</label>
                      <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="banner_url" name="banner_url" value="{{$banner->banner_url}}">
                      </div>
                  </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Image</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file" id="banner_image" name="banner_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> </label>
                       <div class="col-lg-9">
                           <img id="showImage" class="profile" src="{{asset($banner->banner_image)}}" alt="{{$banner->banner_title}}" width="200px" height="200px">
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
        $('#banner_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });


      
        $('#bannerform').validate({
      rules:{
        banner_title : {
          required : true,
        },
        banner_url : {
          required : true,
        },
      },
      messages:{
        banner_title:{
          required:'Please Enter Banner Title',
        },
        banner_url:{
          required:'Please Enter Banner URL',
        },
      },
      errorElement: 'span',
      errorPlacement: function(error,element){
        error.addClass('invalid-feedback');
        $(element).parents('.form-group').append(error);
      },
      highlight: function(element,errorClass,validClass){
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element,errorClass,validClass){
        $(element).removeClass('is-invalid');
      },
    });

  });
    </script>




@endsection