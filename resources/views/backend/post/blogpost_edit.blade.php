@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Add Blog Post</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Blog Post</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Blog Post</li>
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
                <form method="POST" action="{{ route ('update.blog.post') }}" id="blogpostform" enctype="multipart/form-data">
                    @csrf
                    <input class="form-control" type="hidden" id="id" name="id" value="{{$blogs->id}}">
                    <input type="hidden" name="old_image" value="{{$blogs->post_image}}">
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Blog Category Name</label>
                        <div class="form-group col-lg-9">
                            <select class="custom-select" id="blog_category_name" name="blog_category_name">
                              <option value="">Open this Menu</option>
                            @foreach($blogcategories as $cat)
                            <option value="{{$cat->id}}" {{$cat->id == $blogs->category_id? 'selected' : ''}}>{{$cat->blog_category_name}}</option>
                            @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Blog Post Title</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="post_title" name="post_title" value="{{$blogs->post_title}}">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Blog Post Short Description</label>
                        <div class="form-group col-lg-9">
                            <textarea class="form-control" rows="4" id="post_short_descp" name="post_short_descp">{{$blogs->post_short_description}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Blog Post Long Description</label>
                        <div class="form-group col-lg-9">
                            <textarea class="form-control" rows="8" cols="4" id="mytextarea" name="post_long_descp">{{$blogs->post_long_description}}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Blog Post Image</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="file" id="post_image" name="post_image">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label"> </label>
                       <div class="col-lg-9">
                           <img id="showImage" class="profile" src="{{asset($blogs->post_image)}}" alt="{{$blogs->post_title}}" alt="" width="200px" height="200px">
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
$('#post_image').change(function(e){
    var reader = new FileReader();
    reader.onload = function(e){
        $('#showImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
});

    
   

    $('#blogpostform').validate({
      rules:{
        blog_category_name : {
          required : true,
        },
        post_title: {
            required : true,
        },
        post_short_descp: {
          required : true,
        },
      },
      messages:{
        blog_category_name:{
          required:'Please Select Blog Category Name',
        },
        post_title:{
          required:'Please Enter Post Title',
        },
        post_short_descp:{
          required:'Please Enter Post Short Description',
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