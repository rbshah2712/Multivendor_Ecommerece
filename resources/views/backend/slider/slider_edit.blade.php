@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit Slider</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Slider</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Slider</li>
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
                <form method="POST" action="{{ route ('update.slider') }}" enctype="multipart/form-data" id="sliderform">
                    @csrf
                    <input type="hidden" name="id" value="{{$slider->id}}">
                    <input type="hidden" name="old_image" value="{{$slider->slider_image}}">
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Slider Title</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="slider_title" name="slider_title" value="{{$slider->slider_title}}">
                        </div>
                    </div>
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">Short Title</label>
                      <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="short_title" name="short_title" value="{{$slider->short_title}}">
                      </div>
                  </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Image</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="file" id="slider_image" name="slider_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> </label>
                       <div class="col-lg-9">
                           <img id="showImage" class="profile" src="{{asset($slider->slider_image)}}" alt="{{$slider->slider_title}}" width="200px" height="200px">
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
        $('#slider_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });


      
        $('#sliderform').validate({
      rules:{
        slider_title : {
          required : true,
        },
        short_title : {
          required : true,
        },
      },
      messages:{
        slider_title:{
          required:'Please Enter Slider Title',
        },
        short_title:{
          required:'Please Enter Short Title',
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