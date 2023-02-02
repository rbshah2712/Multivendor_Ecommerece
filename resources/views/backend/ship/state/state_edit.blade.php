@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Edit State</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">State</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit State</li>
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
                <form method="POST" action="{{ route ('update.state') }}" id="stateform">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$state->id}}"/>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">Division Name</label>
                        <div class="form-group col-lg-9">
                          <select class="custom-select" id="division_name" name="division_name">
                            <option value="">Open this Menu</option>
                          @foreach($divisions as $divi)
                          <option value="{{$divi->id}}" {{$divi->id == $state->division_id? 'selected' : ''}}>{{$divi->division_name}}</option>
                          @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">District Name</label>
                        <div class="form-group col-lg-9">
                          <select class="custom-select" id="district_name" name="district_name">
                            <option value="">Open this Menu</option>
                          @foreach($districts as $distr)
                          <option value="{{$distr->id}}" {{$distr->id == $state->district_id? 'selected' : ''}}>{{$distr->district_name}}</option>
                          @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-lg-3 col-form-label form-control-label">State Name</label>
                        <div class="form-group col-lg-9">
                          <input class="form-control" type="text" id="state_name" name="state_name" value="{{$state->state_name}}">
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

    $('#stateform').validate({
      rules:{
        division_name : {
          required : true,
        },
        district_name : {
          required : true,
        },
        state_name : {
          required : true,
        }
      },
      messages:{
        division_name:{
          required:'Please Select Division Name',
        },
        district_name:{
          required:'Please Select District Name',
        },
        state_name:{
          required:'Please Enter State Name',
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


  $(document).ready(function(){
  			$('select[name="division_name"]').on('change', function(){
  				var category_id = $(this).val();
  				if (category_id) {
  					$.ajax({
  						url: "{{ url('/district/ajax') }}/"+category_id,
  						type: "GET",
  						dataType:"json",
  						success:function(data){
  							$('select[name="district_name"]').html('');
  							var d =$('select[name="district_name"]').empty();
  							$.each(data, function(key, value){
  								$('select[name="district_name"]').append('<option value="'+ value.id + '">' + value.district_name + '</option>');
  							});
  						},
  					});
  				} else {
  					alert('danger');
  				}
  			});
  		});
    
    
    </script>




@endsection