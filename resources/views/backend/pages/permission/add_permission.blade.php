@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Add Permission</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Permission</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Permission</li>
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
                <form method="POST" action="{{ route ('store.permission') }}" id="permissionform">
                    @csrf
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Permission Name</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="name" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Group Name</label>
                        <div class="col-lg-9">
                            <select class="custom-select" id="group_name" name="group_name">
                                <option value="">Open this Menu</option>
                                <option value="brand">Brand</option>
                                <option value="category">Category</option>
                                <option value="subcategory">SubCategory</option>
                                <option value="product">Product</option>
                                <option value="slider">Slider</option>
                                <option value="ads">Ads</option>
                                <option value="coupon">Coupon</option>
                                <option value="vendor">Vendor</option>
                                <option value="area">Area</option>
                                <option value="order">Order</option>
                                <option value="returns">Return</option>
                                <option value="report">Report</option>
                                <option value="user">User Management</option>
                                <option value="review">Review</option>
                                <option value="setting">Setting</option>
                                <option value="blog">Blog</option>
                                <option value="role">Role</option>
                                <option value="admin">Admin</option>
                                <option value="stock">Stock</option>
                              </select>
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
    $('#permissionform').validate({
      rules:{
        name : {
          required : true,
        },
      },
      messages:{
        name:{
          required:'Please Enter Permission Name',
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