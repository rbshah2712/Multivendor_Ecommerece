@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Add Coupon</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Coupon</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Coupon</li>
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
                <form method="POST" action="{{ route ('store.coupon') }}" id="couponform">
                    @csrf
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Coupon Name</label>
                        <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="coupon_name" name="coupon_name">
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Coupon Discount(%)</label>
                        <div class="form-group col-lg-9">
                            <input class="form-control" type="text" id="coupon_discount" name="coupon_discount">
                        </div>
                    </div>
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">Coupon Validity Date</label>
                      <div class="form-group col-lg-9">
                          <input class="form-control" type="date" id="coupon_validity" name="coupon_validity" min="{{Carbon\Carbon::now()->format('Y-m-d')}}"/>
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

    $('#couponform').validate({
      rules:{
        coupon_name : {
          required : true,
        },
        coupon_discount: {
          required : true,
        }
      },
      messages:{
        coupon_name:{
          required:'Please Select Coupon Name',
        },
        coupon_discount:{
          required:'Please Enter Coupon Discount',
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