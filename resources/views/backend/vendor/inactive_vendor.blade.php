@extends('admin.admin_dashboard')
@section('admin')
      <!--Start Dashboard Content-->  
      <div class="row pt-2 pb-2">
        <div class="col-sm-10">
            <h4 class="page-title">Inactive Vendor</h4>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Inactive Vendor</li>
         </ol>
       </div>
     </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr</th>
                        <th>Shop Name</th>
                        <th>Vendor UserName</th>
                        <th>Join Date</th>
                        <th>Vendor Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($inactiveVendor as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->username}}</td>
                        <td>{{$item->vendor_join}}</td>
                        <td>{{$item->email}}</td>
                        <td><span class="btn btn-light">{{$item->status}}</span></td>
                        <td><a href="{{route('inactive.vendor.details',$item->id)}}" class="btn btn-info">Vendor Details</a></td>
                    </tr>
                   @endforeach  
                </tbody>
                <tfoot>
                    <tr>
                        <th>Sr</th>
                        <th>Shop Name</th>
                        <th>Vendor UserName</th>
                        <th>Join Date</th>
                        <th>Vendor Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->
     
	@endsection