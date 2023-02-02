@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit Brand</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Brand</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
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
                <form method="POST" action="{{ route ('update.brand') }}" enctype="multipart/form-data" id="brandform">
                    @csrf
                    <input type="hidden" name="id" value="{{$brand->id}}">
                    <input type="hidden" name="old_image" value="{{$brand->brand_image}}">
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Brand Name</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="brand_name" name="brand_name" value="{{$brand->brand_name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Image</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file" id="brand_image" name="brand_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> </label>
                       <div class="col-lg-9">
                           <img id="showImage" class="profile" src="{{asset($brand->brand_image)}}" alt="{{$brand->brand_name}}" width="200px" height="200px">
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
        $('#brand_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });


      
    $('#brandform').validate({
      rules:{
        brand_name : {
          required : true,
        },
      },
      messages:{
        brand_name:{
          required:'Please Enter Brand Name',
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