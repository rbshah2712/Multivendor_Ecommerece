@extends('vendor.vendor_dashboard')
@section('vendor')

@php

  $id = Auth::user()->id;
  $vendorId = App\Models\User::find($id);
  $status = $vendorId->status;


@endphp

@if($status === 'active')
<h4>Vendor Account is <span class="text-success">Active</span></h4>
@else
<h4>Vendor Account is <span class="text-danger">Inactive</span></h4>
<p class="text-danger"><strong> Please wait admin will check and approve your account</strong></p>
@endif
      <!--Start Dashboard Content-->  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-bloody">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Orders</p>
                <h4 class="text-white line-height-5">8450</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-cart-plus text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-scooter">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Total Revenue</p>
                <h4 class="text-white line-height-5">$750</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-money text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-blooker">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">New Users</p>
                <h4 class="text-white line-height-5">620</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-users text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card gradient-ohhappiness">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body">
                <p class="text-white">Bounce Rate</p>
                <h4 class="text-white line-height-5">12.80%</h4>
              </div>
              <div class="w-circle-icon rounded-circle border border-white">
                <i class="fa fa-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
      <div class="card-header border-0">
                Recent Orders Table
        <div class="card-action">
         <div class="dropdown">
         <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
          <i class="icon-options"></i>
         </a>
            <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="javascript:void();">Action</a>
            <a class="dropdown-item" href="javascript:void();">Another action</a>
            <a class="dropdown-item" href="javascript:void();">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="javascript:void();">Separated link</a>
           </div>
          </div>
                 </div>
                </div>
               <div class="table-responsive">
         
                 <table class="table align-items-center table-flush">
                  <thead>
                   <tr>
                     <th>Action</th>
                     <th>Product</th>
                     <th>Photo</th>
                     <th>Product ID</th>
                     <th>Status</th>
                     <th>Amount</th>
                     <th>Completion</th>
                   </tr>
                   </thead>
                   <tr>
                    <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check1"/>
                        <label for="check1"></label>
                      </div>
                    </td>
                    <td>Iphone 5</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/01.png')}}" class="product-img" alt="product img"></td>
                    <td>#9405822</td>
                    <td><span class="btn btn-sm btn-outline-success btn-round btn-block">Paid</span></td>
                    <td>$ 1250.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div></td>
                   </tr>

                   <tr>
                    <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check2"/>
                        <label for="check2"></label>
                      </div>
                    </td>
                    <td>Earphone GL</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/02.png')}}" class="product-img" alt="product img"></td>
                    <td>#9405820</td>
                    <td><span class="btn btn-sm btn-outline-info btn-round btn-block">Pending</span></td>
                    <td>$ 1500.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 80%"></div>
                       </div></td>
                   </tr>

                   <tr>
                    <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check3"/>
                        <label for="check3"></label>
                      </div>
                    </td>
                    <td>HD Hand Camera</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/03.png')}}" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td><span class="btn btn-sm btn-outline-danger btn-round btn-block">Failed</span></td>
                    <td>$ 1400.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 60%"></div>
                       </div></td>
                   </tr>

                   <tr>
                    <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check4"/>
                        <label for="check4"></label>
                      </div>
                    </td>
                    <td>Clasic Shoes</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/04.png')}} class="product-img" alt="product img"></td>
                    <td>#9405825</td>
                    <td><span class="btn btn-sm btn-outline-success btn-round btn-block">Paid</span></td>
                    <td>$ 1200.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ohhappiness" role="progressbar" style="width: 100%"></div>
                       </div></td>
                   </tr>

                   <tr>
                    <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check5"/>
                        <label for="check5"></label>
                      </div>
                    </td>
                    <td>Hand Watch</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/05.png')}}" class="product-img" alt="product img"></td>
                    <td>#9405840</td>
                    <td><span class="btn btn-sm btn-outline-danger btn-round btn-block">Failed</span></td>
                    <td>$ 1800.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-ibiza" role="progressbar" style="width: 75%"></div>
                       </div></td>
                   </tr>

                    <tr>
                      <td>
                       <div class="icheck-material-primary">
                        <input type="checkbox" id="check6"/>
                        <label for="check6"></label>
                      </div>
                    </td>
                    <td>HD Hand Camera</td>
                    <td><img src="{{asset('adminbackend/assets/images/products/03.png')}}" class="product-img" alt="product img"></td>
                    <td>#9405830</td>
                    <td><span class="btn btn-sm btn-outline-info btn-round btn-block">Pending</span></td>
                    <td>$ 1400.00</td>
                    <td><div class="progress shadow" style="height: 4px;">
                          <div class="progress-bar gradient-scooter" role="progressbar" style="width: 70%"></div>
                       </div></td>
                   </tr>

                 </table>
               </div>
          </div>
        </div>
      </div><!--End Row-->

      <!--End Dashboard Content-->


    <!-- End container-fluid-->
    
    
   <!--Start Back To Top Button-->
   
    <!--End Back To Top Button-->
	
	@endsection