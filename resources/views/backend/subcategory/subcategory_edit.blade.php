@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit SubCatgory</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">SubCatgory</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit SubCatgory</li>
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
                <form method="POST" action="{{ route ('update.subcategory') }}" id="subcategoryform">
                    @csrf
                    <input type="hidden" name="id" value="{{$subcategory->id}}">
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">Category Name</label>
                      <div class="form-group col-lg-9">
                          <select class="custom-select" id="category_name" name="category_name">
                            <option value="">Open this Menu</option>
                          @foreach($categories as $cat)
                          <option value="{{$cat->id}}" {{$cat->id == $subcategory->category_id? 'selected' : ''}}>{{$cat->category_name}}</option>
                          @endforeach
                          </select>
                      </div>
                  </div>
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">SubCategory Name</label>
                      <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="subcategory_name" name="subcategory_name" value="{{$subcategory->subcategory_name}}">
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
        

      
    $('#subcategoryform').validate({
      rules:{
        category_name : {
          required : true,
        },
        subcategory_name : {
          required : true,
        },
      },
      messages:{
        category_name:{
          required:'Please Select Category Name',
        },
        subcategory_name:{
          required:'Please Enter SubCategory Name',
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