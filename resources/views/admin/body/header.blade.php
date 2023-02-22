@php
$adminData = App\Models\User::find(Auth::user()->id);
@endphp
<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top bg-white">
       <ul class="navbar-nav mr-auto align-items-center">
       <li class="nav-item">
         <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
       </li>
       <li class="nav-item">
         <form class="search-bar">
           <input type="text" class="form-control" placeholder="Enter keywords">
            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
         </form>
       </li>
     </ul>
        
     <ul class="navbar-nav align-items-center right-nav-link">
       <li class="nav-item dropdown-lg">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
         <i class="fa fa-envelope-open-o"></i><span class="badge badge-secondary badge-up">12</span></a>
         <div class="dropdown-menu dropdown-menu-right">
           <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center">
             You have 12 new messages
             <span class="badge badge-secondary">12</span>
             </li>
             <li class="list-group-item">
             <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-5.png" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-0 msg-title">Jhon Deo</h6>
               <p class="msg-info">Lorem ipsum dolor sit amet...</p>
               <small>Today, 4:10 PM</small>
               </div>
             </div>
             </a>
             </li>
             <li class="list-group-item">
             <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-6.png" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-0 msg-title">Sara Jen</h6>
               <p class="msg-info">Lorem ipsum dolor sit amet...</p>
               <small>Yesterday, 8:30 AM</small>
               </div>
             </div>
             </a>
             </li>
             <li class="list-group-item">
             <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{asset('adminbackend/assets/images/avatars/avatar-7.png')}}" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-0 msg-title">Dannish Josh</h6>
               <p class="msg-info">Lorem ipsum dolor sit amet...</p>
                <small>5/11/2018, 2:50 PM</small>
               </div>
             </div>
             </a>
             </li>
             <li class="list-group-item">
             <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{asset('adminbackend/assets/images/avatars/avatar-8.png')}}" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
               <p class="msg-info">Lorem ipsum dolor sit amet.</p>
               <small>1/11/2018, 2:50 PM</small>
               </div>
             </div>
             </a>
             </li>
             <li class="list-group-item"><a href="javaScript:void();">See All Messages</a></li>
           </ul>
           </div>
       </li>
       @php
       $ncount =  Auth::user()->unreadNotifications()->count();
       @endphp
       <li class="nav-item dropdown-lg">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
       <i class="fa fa-bell-o"></i><span class="badge badge-info badge-up">{{$ncount}}</span></a>
         <div class="dropdown-menu dropdown-menu-right">
           <ul class="list-group list-group-flush">
           
             <li class="list-group-item d-flex justify-content-between align-items-center">
             You have {{$ncount}} Notifications
             <span class="badge badge-info">{{$ncount}}</span>
             </li>
             @php
             $user = Auth::user();
             @endphp
             @forelse($user->notifications as $notification)
             <li class="list-group-item">
             <a href="javaScript:void();">
              <div class="media">
                <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-secondary"></i>
               <div class="media-body">
               <h6 class="mt-0 msg-title">Message  <span>{{Carbon\Carbon::parse($notification->created_at)->diffForHumans()}}</span></h6>
               <p class="msg-info">{{$notification->data['message']}}</p>
               </div>
             </div>
             </a>
             </li>
             @empty


             @endforelse
             <li class="list-group-item"><a href="javaScript:void();">See All Notifications</a></li>
           </ul>
         </div>
       </li>
       <li class="nav-item">
         <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
           <span class="user-profile"><img src="{{!empty($adminData->photo)? url('upload/admin_images/'.$adminData->photo) : url('upload/no-image.png')}}" class="img-circle" alt="user avatar"></span>
         </a>
         <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
           <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="{{!empty($adminData->photo)? url('upload/admin_images/'.$adminData->photo) : url('upload/no-image.png')}}" alt="user avatar"></div>
               <div class="media-body">
               <h6 class="mt-2 user-title">{{$adminData->name}} | {{$adminData->username}}</h6>
               <p class="user-subtitle">{{$adminData->email}}</p>
               </div>
              </div>
             </a>
           </li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-item"><a href={{route('admin.profile')}}><i class="icon-user mr-2"></i>Profile</a></li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-item"><a href={{route('admin.change.password')}}><i class="icon-settings mr-2"></i> Change Password</a></li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-item"><a href={{route('admin.dashboard')}}><i class="icon-wallet mr-2"></i> Dashboard</a></li>
           <li class="dropdown-divider"></li>
           <li class="dropdown-item"><a href={{route('admin.logout')}}><i class="icon-power mr-2"></i>Logout</a></li>
         </ul>
       </li>
     </ul>
   </nav>
   </header>
   <div class="clearfix"></div>