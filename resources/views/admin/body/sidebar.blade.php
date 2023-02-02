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
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="form-inputs.html"><i class="zmdi zmdi-star-outline"></i> Basic Inputs</a></li>
          <li><a href="form-input-group.html"><i class="zmdi zmdi-star-outline"></i> Input Groups</a></li>
          <li><a href="form-layouts.html"><i class="zmdi zmdi-star-outline"></i> Form Layouts</a></li>
          <li><a href="form-advanced.html"><i class="zmdi zmdi-star-outline"></i> Form Advanced</a></li>
          <li><a href="form-uploads.html"><i class="zmdi zmdi-star-outline"></i> Form Uploads</a></li>
          <li><a href="form-validation.html"><i class="zmdi zmdi-star-outline"></i> Form Validation</a></li>
          <li><a href="form-step-wizard.html"><i class="zmdi zmdi-star-outline"></i> Form Wizard</a></li>
          <li><a href="form-text-editor.html"><i class="zmdi zmdi-star-outline"></i> Form Editor</a></li>
        </ul>
      </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-lock"></i> <span>Authentication</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="authentication-signin.html"><i class="zmdi zmdi-star-outline"></i> SignIn 1</a></li>
          <li><a href="authentication-signup.html"><i class="zmdi zmdi-star-outline"></i> SignUp 1</a></li>
          <li><a href="authentication-lock-screen.html"><i class="zmdi zmdi-star-outline"></i> Lock Screen</a></li>
          <li><a href="authentication-reset-password.html"><i class="zmdi zmdi-star-outline"></i> Reset Password 1</a></li>
        </ul>
       </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-star-outline"></i> Font Awesome</a></li>
          <li><a href="icons-material-designs.html"><i class="zmdi zmdi-star-outline"></i> Material Design</a></li>
          <li><a href="icons-themify.html"><i class="zmdi zmdi-star-outline"></i> Themify Icons</a></li>
          <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-star-outline"></i> Line Icons</a></li>
          <li><a href="icons-flags.html"><i class="zmdi zmdi-star-outline"></i> Flag Icons</a></li>
        </ul>
      </li>
    
       
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="table-simple-tables.html"><i class="zmdi zmdi-star-outline"></i> Simple Tables</a></li>
          <li><a href="table-header-tables.html"><i class="zmdi zmdi-star-outline"></i> Header Tables</a></li>
          <li><a href="table-color-tables.html"><i class="zmdi zmdi-star-outline"></i> Color Tables</a></li>
          <li><a href="table-striped-color-tables.html"><i class="zmdi zmdi-star-outline"></i> Striped Color Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-star-outline"></i> Data Tables</a></li>
        </ul>
       </li>
     
     <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-map"></i> <span>Maps</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="maps-google.html"><i class="zmdi zmdi-star-outline"></i> Google Maps</a></li>
          <li><a href="maps-vector.html"><i class="zmdi zmdi-star-outline"></i> Vector Maps</a></li>
        </ul>
       </li>
     
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-collection-folder-image"></i> <span>Sample Pages</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
              <li><a href="pages-invoice.html"><i class="zmdi zmdi-star-outline"></i> Invoice</a></li>
          <li><a href="pages-user-profile.html"><i class="zmdi zmdi-star-outline"></i> User Profile</a></li>
          <li><a href="pages-blank-page.html"><i class="zmdi zmdi-star-outline"></i> Blank Page</a></li>
              <li><a href="pages-coming-soon.html"><i class="zmdi zmdi-star-outline"></i> Coming Soon</a></li>
          <li><a href="pages-403.html"><i class="zmdi zmdi-star-outline"></i> 403 Error</a></li>
          <li><a href="pages-404.html"><i class="zmdi zmdi-star-outline"></i> 404 Error</a></li>
          <li><a href="pages-500.html"><i class="zmdi zmdi-star-outline"></i> 500 Error</a></li>
        </ul>
       </li>

      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-share"></i> <span>Multilevel</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level One</a></li>
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level Two</a></li>
              <li>
                <a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="sidebar-submenu">
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level Three</a></li>
                  <li><a href="javaScript:void();"><i class="zmdi zmdi-star-outline"></i> Level Three</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-star-outline"></i> Level One</a></li>
        </ul>
      </li>
      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();" class="waves-effect"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>
    </ul>
   
   </div>