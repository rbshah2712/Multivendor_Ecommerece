<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.html">
       <img src="{{asset('adminbackend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-home"></i> <span>Brand</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('all.brand')}}"><i class="zmdi zmdi-star-outline"></i>All Brand</a></li>
          <li><a href="{{route('add.brand')}}"><i class="zmdi zmdi-star-outline"></i> Add Brand</a></li>
          </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.category')}}"><i class="zmdi zmdi-star-outline"></i> All Category</a></li>
        <li><a href="{{route('add.category')}}"><i class="zmdi zmdi-star-outline"></i> Add Category</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>SubCategory</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.subcategory')}}"><i class="zmdi zmdi-star-outline"></i> All SubCategory</a></li>
        <li><a href="{{route('add.subcategory')}}"><i class="zmdi zmdi-star-outline"></i> Add SubCategory</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-cloud-done"></i> <span>Vendor Manage</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{route('inactive.vendor')}}"><i class="zmdi zmdi-star-outline"></i> Inactive Vendor</a></li>
          <li><a href="{{route('active.vendor')}}"><i class="zmdi zmdi-star-outline"></i>  Active Vendor</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Product</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.product')}}"><i class="zmdi zmdi-star-outline"></i> All Product</a></li>
        <li><a href="{{route('add.product')}}"><i class="zmdi zmdi-star-outline"></i> Add Product</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Slider</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.slider')}}"><i class="zmdi zmdi-star-outline"></i> All Slider</a></li>
        <li><a href="{{route('add.slider')}}"><i class="zmdi zmdi-star-outline"></i> Add Slider</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Banner</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.banner')}}"><i class="zmdi zmdi-star-outline"></i> All Banner</a></li>
        <li><a href="{{route('add.banner')}}"><i class="zmdi zmdi-star-outline"></i> Add Banner</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Coupon</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.coupon')}}"><i class="zmdi zmdi-star-outline"></i> All Coupon</a></li>
        <li><a href="{{route('add.coupon')}}"><i class="zmdi zmdi-star-outline"></i> Add Coupon</a></li>
        </ul>
      </li>
    
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Shipping Area</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.division')}}"><i class="zmdi zmdi-star-outline"></i> All Division</a></li>
        <li><a href="{{route('all.district')}}"><i class="zmdi zmdi-star-outline"></i> All District</a></li>
        <li><a href="{{route('all.state')}}"><i class="zmdi zmdi-star-outline"></i> All State</a></li>
        </ul>
      </li>
      
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Order Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('pending.order')}}"><i class="zmdi zmdi-star-outline"></i> Pending Orders</a></li>
        <li><a href="{{route('admin.confirmed.order')}}"><i class="zmdi zmdi-star-outline"></i> Confirmed Orders</a></li>
        <li><a href="{{route('admin.processing.order')}}"><i class="zmdi zmdi-star-outline"></i>Processing Orders</a></li>
        <li><a href="{{route('admin.delivered.order')}}"><i class="zmdi zmdi-star-outline"></i>Delivered Orders</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Return Order</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('return.request')}}"><i class="zmdi zmdi-star-outline"></i> Return Request</a></li>
        <li><a href="{{route('complete.return.request')}}"><i class="zmdi zmdi-star-outline"></i> Complete Request</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Reports Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('report.view')}}"><i class="zmdi zmdi-star-outline"></i> Report View</a></li>
        <li><a href="{{route('order.by.user')}}"><i class="zmdi zmdi-star-outline"></i> Order By User</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>User Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all-user')}}"><i class="zmdi zmdi-star-outline"></i> All User</a></li>
        <li><a href="{{route('all-vendor')}}"><i class="zmdi zmdi-star-outline"></i> All Vendor</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Blog Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('admin.blog.category')}}"><i class="zmdi zmdi-star-outline"></i> All Blog Category</a></li>
        <li><a href="{{route('admin.blog.post')}}"><i class="zmdi zmdi-star-outline"></i> All Blog Posts</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Review Manage</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('pending.review')}}"><i class="zmdi zmdi-star-outline"></i> Pending Review</a></li>
        <li><a href="{{route('published.review')}}"><i class="zmdi zmdi-star-outline"></i> Published Review</a></li>
        </ul>
      </li>
      </ul>
   
   </div>