@extends('admin.admin_dashboard')
@section('admin')
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<div class="row pt-2 pb-2">
    <div class="col-sm-9">
        <h4 class="page-title">Add Roles in Permission</h4>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Roles in Permission</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Roles in Permission</li>
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
                <form method="POST" action="{{ route ('role.permission.store') }}" id="rolesform">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Roles Name</h6>
                        </div>
                        <div class="form-group col-sm-9 text-secondary">
                        <select name="role_id" class="custom-select mb-3" aria-label="Default select example">
                        <option selected="">Open this select menu</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                         @endforeach
                    </select>
                        </div>
                    </div> 
        
        
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultAll">
            <label class="form-check-label" for="flexCheckDefaultAll">Permission All</label>
        </div>
        
        
                    <hr>
                    @foreach($permission_group as $group)
			<div class="row"><!--  // Start row  -->
				<div class="col-3">
<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
 <label class="form-check-label" for="flexCheckDefault">{{ $group->group_name }}</label>
			</div>
				</div>




				<div class="col-9">

@php
$permissions = App\Models\User::getpermissionByGroupName($group->group_name);
@endphp

	@foreach($permissions as $permission)
   <div class="form-check">
 <input class="form-check-input" name="permission[]" type="checkbox" value="{{$permission->id}}" id="flexCheckDefault{{$permission->id}}">
				<label class="form-check-label" for="flexCheckDefault{{$permission->id}}">{{ $permission->name }}</label>
			</div>
		@endforeach	
		<br>		
				</div>
				
			</div><!--  // end row  -->
			@endforeach
 


			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-9 text-secondary">
					<input type="submit" class="btn btn-primary px-4" value="Save Changes" />
				</div>
			</div>
		</div>

		</form>



	</div>
	 



							</div>
						</div>
					</div>
				</div>
			


 
<script type="text/javascript">
	$('#flexCheckDefaultAll').click(function(){
		if ($(this).is(':checked')) {
			$('input[type = checkbox]').prop('checked',true);
		}else{
			$('input[type = checkbox]').prop('checked',false);
		}
	});
</script>

 


@endsection