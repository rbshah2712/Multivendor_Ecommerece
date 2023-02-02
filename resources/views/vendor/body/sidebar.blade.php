@php

  $id = Auth::user()->id;
  $vendorId = App\Models\User::find($id);
  $status = $vendorId->status;


@endphp

<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="index.html">
      <img src="{{asset('adminbackend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Vendor</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li>
       <a href="index.html" class="waves-effect">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
       </a>
     </li>
     @if($status == 'active')
     <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-layers"></i>
        <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
      <li><a href="{{route('vendor.all.product')}}"><i class="zmdi zmdi-star-outline"></i> All Product</a></li>
      <li><a href="{{route('vendor.add.product')}}"><i class="zmdi zmdi-star-outline"></i> Add Product</a></li>
      </ul>
    </li>
     <li>
       <a href="javaScript:void();" class="waves-effect">
         <i class="zmdi zmdi-gamepad"></i> <span>Order Manage</span>
         <i class="fa fa-angle-left float-right"></i>
       </a>
       <ul class="sidebar-submenu">
         <li><a href="cards-image-cards.html"><i class="zmdi zmdi-star-outline"></i> All Orders</a></li>
       </ul>
     </li>
     @else
     
     @endif
      
     <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-gamepad"></i> <span>Support</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
     </li>
   
     
   </ul>
  
  </div>