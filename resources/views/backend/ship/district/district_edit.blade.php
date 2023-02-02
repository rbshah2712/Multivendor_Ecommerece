@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit District</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">District</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit District</li>
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
                <form method="POST" action="{{ route ('update.district') }}" id="districtform">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$district->id}}"/>
                    <div class="row">
                      <label class="col-lg-3 col-form-label form-control-label">Division Name</label>
                      <div class="form-group col-lg-9">
                        <select class="custom-select" id="division_name" name="division_name">
                          <option value="">Open this Menu</option>
                        @foreach($divisions as $divi)
                        <option value="{{$divi->id}}" {{$divi->id == $district->division_id? 'selected' : ''}}>{{$divi->division_name}}</option>
                        @endforeach
                        </select>
                      </div>
                  </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">District Name</label>
                        <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="district_name" name="district_name" value={{$district->district_name}}>
                        </div>
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

    $('#districtform').validate({
      rules:{
        division_name : {
          required : true,
        },
        district_name : {
          required : true,
        }
      },
      messages:{
        division_name:{
          required:'Please Select Division Name',
        },
        district_name:{
          required:'Please Enter District Name',
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