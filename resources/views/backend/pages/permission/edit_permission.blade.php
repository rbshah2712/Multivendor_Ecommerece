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
                <form method="POST" action="{{ route ('update.permission') }}" id="permissionform">
                    @csrf
                    <input class="form-control" type="hidden" id="id" name="id" value={{$Permission->id}}>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Permission Name</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="name" name="name" value={{$Permission->name}}>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Group Name</label>
                        <div class="col-lg-9">
                            <select class="custom-select" id="group_name" name="group_name">
                                <option value="">Open this Menu</option>
                                <option value="brand" {{$Permission->group_name == 'brand'? 'selected' : ''}}>Brand</option>
                                <option value="category" {{$Permission->group_name == 'category'? 'selected' : ''}}>Category</option>
                                <option value="subcategory" {{$Permission->group_name == 'subcategory'? 'selected' : ''}}>SubCategory</option>
                                <option value="product" {{$Permission->group_name == 'product'? 'selected' : ''}}>Product</option>
                                <option value="slider" {{$Permission->group_name == 'slider'? 'selected' : ''}}>Slider</option>
                                <option value="ads" {{$Permission->group_name == 'ads'? 'selected' : ''}}>Ads</option>
                                <option value="coupon" {{$Permission->group_name == 'coupon'? 'selected' : ''}}>Coupon</option>
                                <option value="vendor" {{$Permission->group_name == 'vendor'? 'selected' : ''}}>Vendor</option>
                                <option value="area" {{$Permission->group_name == 'area'? 'selected' : ''}}>Area</option>
                                <option value="order" {{$Permission->group_name == 'order'? 'selected' : ''}}>Order</option>
                                <option value="returns" {{$Permission->group_name == 'returns' ? 'selected' : ''}}>Return</option>
                                <option value="report" {{$Permission->group_name == 'report'? 'selected' : ''}}>Report</option>
                                <option value="user" {{$Permission->group_name == 'user'? 'selected' : ''}}>User Management</option>
                                <option value="review" {{$Permission->group_name == 'review'? 'selected' : ''}}>Review</option>
                                <option value="setting" {{$Permission->group_name == 'setting'? 'selected' : ''}}>Setting</option>
                                <option value="blog" {{$Permission->group_name == 'blog'? 'selected' : ''}}>Blog</option>
                                <option value="role" {{$Permission->group_name == 'role'? 'selected' : ''}}>Role</option>
                                <option value="admin" {{$Permission->group_name == 'admin'? 'selected' : ''}}>Admin</option>
                                <option value="stock" {{$Permission->group_name == 'stock'? 'selected' : ''}}>Stock</option>
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