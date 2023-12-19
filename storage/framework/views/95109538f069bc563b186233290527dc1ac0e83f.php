    <!-- Top Bar Banner -->
 <?php
//  error_reporting(E_ALL);
//  ini_set('display_errors', '1'); 
 ?>
<style>
 *+ul{
     margin-top:0px !important;
 }
</style>

    <header class="<?php if(get_setting('header_stikcy') == 'on'): ?> sticky-top <?php endif; ?> z-1020 " style="background: #0074fd;">
       	<!--  <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025" >
            <div class="container-fluid">
               <div class="d-flex row">
                 <div class="col-md-4"></div>
                 <div class="col-md-4"></div>
                 <div class="col-md-4 text-center">
              <a href="<?php echo e(route('seller.login')); ?>"
                                    class="text-reset  fs-12 d-inline-block py-2 pl-2" style="color:#fff !important;"><?php echo e(translate('Beome a Seller')); ?></a>
 </div>
             </div>
              </div>
         </div> -->
        <!-- Search Bar -->
        <div class="position-relative logo-bar-area border-bottom border-md-nonea z-1025" >
            <div class="container" style="height:80%;">
                <div class="d-flex align-items-center">
                    <!-- top menu sidebar button -->
                    <button type="button" class="btn d-lg-none mr-3 mr-sm-4 p-0 active" data-toggle="class-toggle"
                        data-target=".aiz-top-menu-sidebar">
                        <svg id="Component_43_1" data-name="Component 43 – 1" xmlns="http://www.w3.org/2000/svg"
                            width="16" height="16" viewBox="0 0 16 16">
                            <rect id="Rectangle_19062" data-name="Rectangle 19062" width="16" height="2"
                                transform="translate(0 7)" fill="#fff" />
                            <rect id="Rectangle_19063" data-name="Rectangle 19063" width="16" height="2"
                                fill="#fff" />
                            <rect id="Rectangle_19064" data-name="Rectangle 19064" width="16" height="2"
                                transform="translate(0 14)" fill="#fff" />
                        </svg>

                    </button>
                    <!-- Header Logo -->
                    <div class="col-auto pl-0 pr-3 d-flex align-items-center" style="margin-left:-3rem;">
                        <a class="d-block py-20px mr-3 ml-0" href="<?php echo e(route('home')); ?>">
                            <?php
                                $header_logo = get_setting('header_logo');
                            ?>
                            <?php if($header_logo != null): ?>
                                <img src="<?php echo e(uploaded_asset($header_logo)); ?>" alt="<?php echo e(env('APP_NAME')); ?>"
                                    class="mw-100 h-30px h-md-40px" height="40">
                            <?php else: ?>
                                <img src="<?php echo e(static_asset('assets/img/logo.png')); ?>" alt="<?php echo e(env('APP_NAME')); ?>"
                                    class="mw-100 h-30px h-md-40px" height="40">
                            <?php endif; ?>
                        </a>
                  </div>
                    <!-- Search Icon for small device -->
                    <div class="d-lg-none ml-auto mr-0">
                        <a class="p-2 d-block text-reset" href="javascript:void(0);" data-toggle="class-toggle"
                            data-target=".front-header-search">
                            <i class="las la-search la-flip-horizontal la-x"></i>
                        </a>
                    </div>
                    <!-- Search field -->
                    <div class="flex-grow-1 front-header-search d-flex align-items-center active">
                        <div class="position-relative flex-grow-1 px-3 px-lg-0">
                            <form action="<?php echo e(route('search')); ?>" method="GET" class="stop-propagation">
                                <div class="d-flex position-relative align-items-center">
                                    <div class="d-lg-none" data-toggle="class-toggle"
                                        data-target=".front-header-search">
                                        <button class="btn px-2" type="button"></button>
                                    </div>
                                    <div class="search-input-box">
                                        <input type="text"
                                            class="border border-soft-light form-control fs-14 hov-animate-outline"
                                            id="search" name="keyword"
                                            <?php if(isset($query)): ?>
                                            value="<?php echo e($query); ?>"
                                        <?php endif; ?>
                                            placeholder="<?php echo e(translate('I am shopping for...')); ?>" autocomplete="off">

                                        <svg id="Group_723" data-name="Group 723" xmlns="http://www.w3.org/2000/svg"
                                            width="20.001" height="20" viewBox="0 0 20.001 20">
                                            <path id="Path_3090" data-name="Path 3090"
                                                d="M9.847,17.839a7.993,7.993,0,1,1,7.993-7.993A8,8,0,0,1,9.847,17.839Zm0-14.387a6.394,6.394,0,1,0,6.394,6.394A6.4,6.4,0,0,0,9.847,3.453Z"
                                                transform="translate(-1.854 -1.854)" fill="#b5b5bf" />
                                            <path id="Path_3091" data-name="Path 3091"
                                                d="M24.4,25.2a.8.8,0,0,1-.565-.234l-6.15-6.15a.8.8,0,0,1,1.13-1.13l6.15,6.15A.8.8,0,0,1,24.4,25.2Z"
                                                transform="translate(-5.2 -5.2)" fill="#b5b5bf" />
                                        </svg>
                                    </div>
                                </div>
                            </form>
                            <div class="typed-search-box stop-propagation document-click-d-none d-none bg-white rounded shadow-lg position-absolute left-0 top-100 w-100"
                                style="min-height: 200px">
                                <div class="search-preloader absolute-top-center">
                                    <div class="dot-loader">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="search-nothing d-none p-3 text-center fs-16">

                                </div>
                                <div id="search-content" class="text-left">

                                </div>
                            </div>
                        </div>
                    </div><br />
                  
                    <!-- Search box -->
                    <div class="d-none d-lg-none ml-3 mr-0">
                        <div class="nav-search-box">
                            <a href="#" class="nav-box-link">
                                <i class="la la-search la-flip-horizontal d-inline-block nav-box-icon"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Compare -->
                    <!--<div class="d-none d-lg-block ml-3 mr-0">-->
                    <!--    <div class="" id="compare">-->
                    <!--        <?php echo $__env->make('frontend.partials.compare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!-- Wishlist -->
                    <!--<div class="d-none d-lg-block mr-3" style="margin-left: 36px;">-->
                    <!--    <div class="" id="wishlist">-->
                    <!--        <?php echo $__env->make('frontend.partials.wishlist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="ml-auto mr-0">
                        <?php 
                            if(Auth::check())
                            {
                                $user = json_decode(Session::get('user'),true);   
                            }else{
                                $user = [];
                            }
                            if (Auth::guard('web')->check())
                            {
                                $user = Auth::guard('web')->user();
                        ?>
                            <span
                                class="user-hover d-none d-xl-flex align-items-center nav-user-info py-20px <?php if(isAdmin()): ?> ml-5 <?php endif; ?>"
                                id="nav-user-info">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                    <?php if($user->avatar_original != null): ?>
                                        <img src="<?php echo e(uploaded_asset(user->avatar_original)); ?>"
                                            class="img-fit h-100" alt="<?php echo e(translate('avatar')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('assets/img/avatar-place.png')); ?>" class="image" alt="<?php echo e(translate('avatar')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                                    <?php endif; ?>
                                </span>
                                <!-- Name -->
                                <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0"><?php echo e($user->name); ?></h4>
                            </span>
                            <?php }else{ ?>
                        
                            <!--Login & Registration -->
                            <span class="d-none d-xl-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <?php if(Auth::guard('web')->check()): ?>
                                <?php else: ?>

                                <span
                                    class="size-40px  d-flex align-items-center justify-content-center">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" fill="#fff" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
</svg><br /><br />
                                </span>
                                <a href="<?php echo e(route('user.login')); ?>"
                                    class="text-reset  fs-12 d-inline-block  border-soft-light border-width-2" style="color:#fff !important;"><?php echo e(translate('Login')); ?></a>
                                <span class="ml-2 text-white">|</span>
                                <?php endif; ?>
                                <!-- <a href="<?php echo e(route('seller.login')); ?>"
                                    class="text-reset  fs-12 d-inline-block py-2 pl-2" style="color:#fff !important;"><?php echo e(translate('Beome a Seller')); ?></a>
                           <span class="size-40px d-flex align-items-center justify-content-center">
    
</span> -->

                            </span>
                        <?php } ?>
                    </div>




                    <!-- for two users -->
                   

                    <div class="ml-auto mr-0 ">
                        <?php 
                            if(Auth::check())
                            {
                                $user = json_decode(Session::get('user'),true);   
                            }else{
                                $user = [];
                            }
                            if (Auth::guard('seller')->check())
                            {
                                $user = Auth::guard('seller')->user();
                        ?>
                            <span
                                class="seller-hover d-none d-xl-flex align-items-center nav-user-info py-20px <?php if(isAdmin()): ?> ml-5 <?php endif; ?>"
                                id="nav-user-info1">
                                <!-- Image -->
                                <span
                                    class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                                    <?php if($user->avatar_original != null): ?>
                                        <img src="<?php echo e(uploaded_asset(user->avatar_original)); ?>"
                                            class="img-fit h-100" alt="<?php echo e(translate('avatar')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('assets/img/avatar-place.png')); ?>" class="image" alt="<?php echo e(translate('avatar')); ?>"
                                            onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                                    <?php endif; ?>
                                </span>
                                <!-- Name -->
                                <h4 class=" h5 fs-14 fw-700 text-dark ml-2 mb-0"><?php echo e($user->name); ?></h4>
                            </span>
                            <?php }else{ ?>
                        
                            <!--Login & Registration -->
                            <span class="d-none d-xl-flex align-items-center nav-user-info ml-3">
                                <!-- Image -->
                                <!-- <span
                                    class="size-40px  d-flex align-items-center justify-content-center">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" fill="#fff" class="bi bi-person" viewBox="0 0 16 16">
  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664z"/>
</svg><br /><br />
                                </span>
                                <a href="<?php echo e(route('user.login')); ?>"
                                    class="text-reset  fs-12 d-inline-block  border-soft-light border-width-2" style="color:#fff !important;"><?php echo e(translate('Login')); ?></a>
                                <span class="ml-2 text-white">|</span> -->

                                <?php if(Auth::guard('seller')->check()): ?>
                                <?php else: ?>
                                <a href="<?php echo e(route('seller.login')); ?>"
                                    class="text-reset  fs-12 d-inline-block py-2 pl-2" style="color:#fff !important;"><?php echo e(translate('Beome a Seller')); ?></a>
                                <?php endif; ?>

                           <span class="size-40px d-flex align-items-center justify-content-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012" viewBox="0 0 19.902 20.012" fill="#fff" >
        <path fill="#fff" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
    </svg><br /><br />
</span>
<svg xmlns="http://www.w3.org/2000/svg" width="19" height="21" fill="#fff" class="bi bi-globe" viewBox="0 0 16 16">
  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472M3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
</svg>
<span>
    <select class="selectpicker" data-width="fit" style="border:none !important;">
    <option data-content='<span class="flag-icon flag-icon-us"></span> EN'>EN</option>
  <option  data-content='<span class="flag-icon flag-icon-mx"></span> NP'>NP</option>
</select>
</span>
                            </span>
                        <?php } ?>
                    </div>
                     <?php if(!isAdmin()): ?>
                        <!-- Notifications -->
                        <ul class="list-inline mb-0 h-100 d-none d-xl-flex justify-content-end align-items-center">
                            <li class="list-inline-item ml-3 mr-3 pr-3 pl-0 dropdown">
                                <a class="dropdown-toggle no-arrow text-secondary fs-12" data-toggle="dropdown"
                                    href="javascript:void(0);" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <span class="">
                                        <span class="position-relative d-inline-block">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.668" height="16"
                                                viewBox="0 0 14.668 16">
                                                <path id="_26._Notification" data-name="26. Notification"
                                                    d="M8.333,16A3.34,3.34,0,0,0,11,14.667H5.666A3.34,3.34,0,0,0,8.333,16ZM15.06,9.78a2.457,2.457,0,0,1-.727-1.747V6a6,6,0,1,0-12,0V8.033A2.457,2.457,0,0,1,1.606,9.78,2.083,2.083,0,0,0,3.08,13.333H13.586A2.083,2.083,0,0,0,15.06,9.78Z"
                                                    transform="translate(-0.999)" fill="#fff" />
                                            </svg>
                                            <?php if(Auth::check() && count(Auth::user()->unreadNotifications) > 0): ?>
                                                <span
                                                    class="badge badge-primary badge-inline badge-pill absolute-top-right--10px"><?php echo e(count(Auth::user()->unreadNotifications)); ?></span>
                                            <?php endif; ?>
                                        </span>
                                </a>

                                <?php if(auth()->guard()->check()): ?>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg py-0 rounded-0">
                                        <div class="p-3 bg-light border-bottom">
                                            <h6 class="mb-0"><?php echo e(translate('Notifications')); ?></h6>
                                        </div>
                                        <div class="px-3 c-scrollbar-light overflow-auto " style="max-height:300px;">
                                            <ul class="list-group list-group-flush">
                                                <?php $__empty_1 = true; $__currentLoopData = Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <li class="list-group-item">
                                                        <?php if($notification->type == 'App\Notifications\OrderNotification'): ?>
                                                            <?php if(Auth::user()->user_type == 'customer'): ?>
                                                                <a href="<?php echo e(route('purchase_history.details', encrypt($notification->data['order_id']))); ?>"
                                                                    class="text-secondary fs-12">
                                                                    <span class="ml-2">
                                                                        <?php echo e(translate('Order code: ')); ?>

                                                                        <?php echo e($notification->data['order_code']); ?>

                                                                        <?php echo e(translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status'])))); ?>

                                                                    </span>
                                                                </a>
                                                            <?php elseif(Auth::user()->user_type == 'seller'): ?>
                                                                <a href="<?php echo e(route('seller.orders.show', encrypt($notification->data['order_id']))); ?>"
                                                                    class="text-secondary fs-12">
                                                                    <span class="ml-2">
                                                                        <?php echo e(translate('Order code: ')); ?>

                                                                        <?php echo e($notification->data['order_code']); ?>

                                                                        <?php echo e(translate('has been ' . ucfirst(str_replace('_', ' ', $notification->data['status'])))); ?>

                                                                    </span>
                                                                </a>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <li class="list-group-item">
                                                        <div class="py-4 text-center fs-16">
                                                            <?php echo e(translate('No notification found')); ?>

                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <div class="text-center border-top">
                                            <a href="<?php echo e(route('all-notifications')); ?>"
                                                class="text-secondary fs-12 d-block py-2">
                                                <?php echo e(translate('View All Notifications')); ?>

                                            </a>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </li>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Loged in user Menus -->
            <div class="hover-user-top-menu position-absolute top-100 left-200 right-0 z-3">
                <div class="container">
                    <div class="position-static float-right">
                        <div class="aiz-user-top-menu bg-white rounded-0 border-top shadow-sm" style="width:220px;">
                            <ul class="list-unstyled no-scrollbar mb-0 text-left">

                                <?php if(isAdmin()): ?>
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Dashboard')); ?></span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('dashboard')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Dashboard')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                <?php if(isCustomer()): ?>
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('purchase_history.index')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <g id="Group_25261" data-name="Group 25261"
                                                    transform="translate(-27.466 -542.963)">
                                                    <path id="Path_2953" data-name="Path 2953"
                                                        d="M14.5,5.963h-4a1.5,1.5,0,0,0,0,3h4a1.5,1.5,0,0,0,0-3m0,2h-4a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1"
                                                        transform="translate(22.966 537)" fill="#b5b5bf" />
                                                    <path id="Path_2954" data-name="Path 2954"
                                                        d="M12.991,8.963a.5.5,0,0,1,0-1H13.5a2.5,2.5,0,0,1,2.5,2.5v10a2.5,2.5,0,0,1-2.5,2.5H2.5a2.5,2.5,0,0,1-2.5-2.5v-10a2.5,2.5,0,0,1,2.5-2.5h.509a.5.5,0,0,1,0,1H2.5a1.5,1.5,0,0,0-1.5,1.5v10a1.5,1.5,0,0,0,1.5,1.5h11a1.5,1.5,0,0,0,1.5-1.5v-10a1.5,1.5,0,0,0-1.5-1.5Z"
                                                        transform="translate(27.466 536)" fill="#b5b5bf" />
                                                    <path id="Path_2955" data-name="Path 2955"
                                                        d="M7.5,15.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 532)" fill="#b5b5bf" />
                                                    <path id="Path_2956" data-name="Path 2956"
                                                        d="M7.5,21.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 529)" fill="#b5b5bf" />
                                                    <path id="Path_2957" data-name="Path 2957"
                                                        d="M7.5,27.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5"
                                                        transform="translate(23.966 526)" fill="#b5b5bf" />
                                                    <path id="Path_2958" data-name="Path 2958"
                                                        d="M13.5,16.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 531.5)" fill="#b5b5bf" />
                                                    <path id="Path_2959" data-name="Path 2959"
                                                        d="M13.5,22.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 528.5)" fill="#b5b5bf" />
                                                    <path id="Path_2960" data-name="Path 2960"
                                                        d="M13.5,28.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                        transform="translate(20.966 525.5)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Purchase History')); ?></span>
                                        </a>
                                    </li>
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('digital_purchase_history.index')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.001" height="16"
                                                viewBox="0 0 16.001 16">
                                                <g id="Group_25262" data-name="Group 25262"
                                                    transform="translate(-1388.154 -562.604)">
                                                    <path id="Path_2963" data-name="Path 2963"
                                                        d="M77.864,98.69V92.1a.5.5,0,1,0-1,0V98.69l-1.437-1.437a.5.5,0,0,0-.707.707l1.851,1.852a1,1,0,0,0,.707.293h.172a1,1,0,0,0,.707-.293l1.851-1.852a.5.5,0,0,0-.7-.713Z"
                                                        transform="translate(1318.79 478.5)" fill="#b5b5bf" />
                                                    <path id="Path_2964" data-name="Path 2964"
                                                        d="M67.155,88.6a3,3,0,0,1-.474-5.963q-.009-.089-.015-.179a5.5,5.5,0,0,1,10.977-.718,3.5,3.5,0,0,1-.989,6.859h-1.5a.5.5,0,0,1,0-1l1.5,0a2.5,2.5,0,0,0,.417-4.967.5.5,0,0,1-.417-.5,4.5,4.5,0,1,0-8.908.866.512.512,0,0,1,.009.121.5.5,0,0,1-.52.479,2,2,0,1,0-.162,4l.081,0h2a.5.5,0,0,1,0,1Z"
                                                        transform="translate(1324 486)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Downloads')); ?></span>
                                        </a>
                                    </li>
                                    <?php if(get_setting('conversation_system') == 1): ?>
                                        <li class="user-top-nav-element border border-top-0" data-id="1">
                                            <a href="<?php echo e(route('conversations.index')); ?>"
                                                class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 16 16">
                                                    <g id="Group_25263" data-name="Group 25263"
                                                        transform="translate(1053.151 256.688)">
                                                        <path id="Path_3012" data-name="Path 3012"
                                                            d="M134.849,88.312h-8a2,2,0,0,0-2,2v5a2,2,0,0,0,2,2v3l2.4-3h5.6a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2m1,7a1,1,0,0,1-1,1h-8a1,1,0,0,1-1-1v-5a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1Z"
                                                            transform="translate(-1178 -341)" fill="#b5b5bf" />
                                                        <path id="Path_3013" data-name="Path 3013"
                                                            d="M134.849,81.312h8a1,1,0,0,1,1,1v5a1,1,0,0,1-1,1h-.5a.5.5,0,0,0,0,1h.5a2,2,0,0,0,2-2v-5a2,2,0,0,0-2-2h-8a2,2,0,0,0-2,2v.5a.5.5,0,0,0,1,0v-.5a1,1,0,0,1,1-1"
                                                            transform="translate(-1182 -337)" fill="#b5b5bf" />
                                                        <path id="Path_3014" data-name="Path 3014"
                                                            d="M131.349,93.312h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1"
                                                            transform="translate(-1181 -343.5)" fill="#b5b5bf" />
                                                        <path id="Path_3015" data-name="Path 3015"
                                                            d="M131.349,99.312h5a.5.5,0,1,1,0,1h-5a.5.5,0,1,1,0-1"
                                                            transform="translate(-1181 -346.5)" fill="#b5b5bf" />
                                                    </g>
                                                </svg>
                                                <span
                                                    class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Conversations')); ?></span>
                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(get_setting('wallet_system') == 1): ?>
                                        <li class="user-top-nav-element border border-top-0" data-id="1">
                                            <a href="<?php echo e(route('wallet.index')); ?>"
                                                class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="16"
                                                    height="16" viewBox="0 0 16 16">
                                                    <defs>
                                                        <clipPath id="clip-path1">
                                                            <rect id="Rectangle_1386" data-name="Rectangle 1386"
                                                                width="16" height="16" fill="#b5b5bf" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_8102" data-name="Group 8102"
                                                        clip-path="url(#clip-path1)">
                                                        <path id="Path_2936" data-name="Path 2936"
                                                            d="M13.5,4H13V2.5A2.5,2.5,0,0,0,10.5,0h-8A2.5,2.5,0,0,0,0,2.5v11A2.5,2.5,0,0,0,2.5,16h11A2.5,2.5,0,0,0,16,13.5v-7A2.5,2.5,0,0,0,13.5,4M2.5,1h8A1.5,1.5,0,0,1,12,2.5V4H2.5a1.5,1.5,0,0,1,0-3M15,11H10a1,1,0,0,1,0-2h5Zm0-3H10a2,2,0,0,0,0,4h5v1.5A1.5,1.5,0,0,1,13.5,15H2.5A1.5,1.5,0,0,1,1,13.5v-9A2.5,2.5,0,0,0,2.5,5h11A1.5,1.5,0,0,1,15,6.5Z"
                                                            fill="#b5b5bf" />
                                                    </g>
                                                </svg>
                                                <span
                                                    class="user-top-menu-name has-transition ml-3"><?php echo e(translate('My Wallet')); ?></span>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('support_ticket.index')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.001"
                                                viewBox="0 0 16 16.001">
                                                <g id="Group_25259" data-name="Group 25259"
                                                    transform="translate(-316 -1066)">
                                                    <path id="Subtraction_184" data-name="Subtraction 184"
                                                        d="M16427.109,902H16420a8.015,8.015,0,1,1,8-8,8.278,8.278,0,0,1-1.422,4.535l1.244,2.132a.81.81,0,0,1,0,.891A.791.791,0,0,1,16427.109,902ZM16420,887a7,7,0,1,0,0,14h6.283c.275,0,.414,0,.549-.111s-.209-.574-.34-.748l0,0-.018-.022-1.064-1.6A6.829,6.829,0,0,0,16427,894a6.964,6.964,0,0,0-7-7Z"
                                                        transform="translate(-16096 180)" fill="#b5b5bf" />
                                                    <path id="Union_12" data-name="Union 12"
                                                        d="M16414,895a1,1,0,1,1,1,1A1,1,0,0,1,16414,895Zm.5-2.5V891h.5a2,2,0,1,0-2-2h-1a3,3,0,1,1,3.5,2.958v.54a.5.5,0,1,1-1,0Zm-2.5-3.5h1a.5.5,0,1,1-1,0Z"
                                                        transform="translate(-16090.998 183.001)" fill="#b5b5bf" />
                                                </g>
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Support Ticket')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                                
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="<?php echo e(route('logout')); ?>"
                                        class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                            viewBox="0 0 16 15.999">
                                            <g id="Group_25503" data-name="Group 25503"
                                                transform="translate(-24.002 -377)">
                                                <g id="Group_25265" data-name="Group 25265"
                                                    transform="translate(-216.534 -160)">
                                                    <path id="Subtraction_192" data-name="Subtraction 192"
                                                        d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                        transform="translate(-11803.999 -2367)" fill="#d43533" />
                                                </g>
                                                <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1"
                                                    height="8" rx="0.5" transform="translate(31.5 377)"
                                                    fill="#d43533" />
                                            </g>
                                        </svg>
                                        <span
                                            class="user-top-menu-name text-primary has-transition ml-3"><?php echo e(translate('Logout')); ?></span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>


              <div class="hover-user-top-menu-seller position-absolute top-100 left-0 right-0 z-3">
                <div class="container">
                    <div class="position-static float-right">
                        <div class="aiz-user-top-menu-seller bg-white rounded-0 border-top shadrrow-sm" style="width:220px;">
                            <ul class="list-unstyled no-scrollbar mb-0 text-left">
                                <?php if(Auth::guard('seller')->check()): ?>
                               
                                    <li class="user-top-nav-element border border-top-0" data-id="1">
                                        <a href="<?php echo e(route('admin.dashboard')); ?>"
                                            class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16">
                                                <path id="Path_2916" data-name="Path 2916"
                                                    d="M15.3,5.4,9.561.481A2,2,0,0,0,8.26,0H7.74a2,2,0,0,0-1.3.481L.7,5.4A2,2,0,0,0,0,6.92V14a2,2,0,0,0,2,2H14a2,2,0,0,0,2-2V6.92A2,2,0,0,0,15.3,5.4M10,15H6V9A1,1,0,0,1,7,8H9a1,1,0,0,1,1,1Zm5-1a1,1,0,0,1-1,1H11V9A2,2,0,0,0,9,7H7A2,2,0,0,0,5,9v6H2a1,1,0,0,1-1-1V6.92a1,1,0,0,1,.349-.76l5.74-4.92A1,1,0,0,1,7.74,1h.52a1,1,0,0,1,.651.24l5.74,4.92A1,1,0,0,1,15,6.92Z"
                                                    fill="#b5b5c0" />
                                            </svg>
                                            <span
                                                class="user-top-menu-name has-transition ml-3"><?php echo e(translate('Dashboard')); ?></span>
                                        </a>
                                    </li>
                                    <?php endif; ?>
                               

                               
                                <?php if(Auth::guard('seller')->check()): ?>
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="<?php echo e(route('seller.logout')); ?>"
                                        class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                            viewBox="0 0 16 15.999">
                                            <g id="Group_25503" data-name="Group 25503"
                                                transform="translate(-24.002 -377)">
                                                <g id="Group_25265" data-name="Group 25265"
                                                    transform="translate(-216.534 -160)">
                                                    <path id="Subtraction_192" data-name="Subtraction 192"
                                                        d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                        transform="translate(-11803.999 -2367)" fill="#d43533" />
                                                </g>
                                                <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1"
                                                    height="8" rx="0.5" transform="translate(31.5 377)"
                                                    fill="#d43533" />
                                            </g>
                                        </svg>
                                        <span
                                            class="user-top-menu-name text-primary has-transition ml-3"><?php echo e(translate('Logout')); ?></span>
                                    </a>
                                </li>
                                <?php elseif(Auth::guard('web')->check()): ?>
                                <li class="user-top-nav-element border border-top-0" data-id="1">
                                    <a href="<?php echo e(route('logout')); ?>"
                                        class="text-truncate text-dark px-4 fs-14 d-flex align-items-center hov-column-gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999"
                                            viewBox="0 0 16 15.999">
                                            <g id="Group_25503" data-name="Group 25503"
                                                transform="translate(-24.002 -377)">
                                                <g id="Group_25265" data-name="Group 25265"
                                                    transform="translate(-216.534 -160)">
                                                    <path id="Subtraction_192" data-name="Subtraction 192"
                                                        d="M12052.535,2920a8,8,0,0,1-4.569-14.567l.721.72a7,7,0,1,0,7.7,0l.721-.72a8,8,0,0,1-4.567,14.567Z"
                                                        transform="translate(-11803.999 -2367)" fill="#d43533" />
                                                </g>
                                                <rect id="Rectangle_19022" data-name="Rectangle 19022" width="1"
                                                    height="8" rx="0.5" transform="translate(31.5 377)"
                                                    fill="#d43533" />
                                            </g>
                                        </svg>
                                        <span
                                            class="user-top-menu-name text-primary has-transition ml-3"><?php echo e(translate('Logout')); ?></span>
                                    </a>
                                </li>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                  
                </div>
            </div>

</div>

        <!-- Menu Bar -->
       
                    <!-- Header Menus -->
                 
                    <!-- Cart -->
                 
            <!-- Categoty Menus -->
  
    </header>

    <!-- Top Menu Sidebar -->
    <div class="aiz-top-menu-sidebar collapse-sidebar-wrap sidebar-xl sidebar-left d-lg-none z-1035">
        <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle"
            data-target=".aiz-top-menu-sidebar" data-same=".hide-top-menu-bar"></div>
        <div class="collapse-sidebar c-scrollbar-light text-left">
            <button type="button" class="btn btn-sm p-4 hide-top-menu-bar" data-toggle="class-toggle"
                data-target=".aiz-top-menu-sidebar">
                <i class="las la-times la-2x text-primary"></i>
            </button>
            <?php if(auth()->guard()->check()): ?>
                <span class="d-flex align-items-center nav-user-info pl-4">
                    <!-- Image -->
                    <span class="size-40px rounded-circle overflow-hidden border border-transparent nav-user-img">
                        <?php if(Auth::user()->avatar_original != null): ?>
                            <img src="<?php echo e(uploaded_asset(Auth::user()->avatar_original)); ?>" class="img-fit h-100" alt="<?php echo e(translate('avatar')); ?>"
                                onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                        <?php else: ?>
                            <img src="<?php echo e(static_asset('assets/img/avatar-place.png')); ?>" class="image" alt="<?php echo e(translate('avatar')); ?>"
                                onerror="this.onerror=null;this.src='<?php echo e(static_asset('assets/img/avatar-place.png')); ?>';">
                        <?php endif; ?>
                    </span>
                    <!-- Name -->
                    <h4 class="h5 fs-14 fw-700 text-dark ml-2 mb-0"><?php echo e(Auth::user()->name); ?></h4>
                </span>
            <?php else: ?>
                <!--Login & Registration -->
                <span class="d-flex align-items-center nav-user-info pl-4" >
                    <!-- Image -->
                    <span
                        class="size-40px rounded-circle overflow-hidden border d-flex align-items-center justify-content-center nav-user-img">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.902" height="20.012"
                            viewBox="0 0 19.902 20.012">
                            <path id="fe2df171891038b33e9624c27e96e367"
                                d="M15.71,12.71a6,6,0,1,0-7.42,0,10,10,0,0,0-6.22,8.18,1.006,1.006,0,1,0,2,.22,8,8,0,0,1,15.9,0,1,1,0,0,0,1,.89h.11a1,1,0,0,0,.88-1.1,10,10,0,0,0-6.25-8.19ZM12,12a4,4,0,1,1,4-4A4,4,0,0,1,12,12Z"
                                transform="translate(-2.064 -1.995)" fill="#fff" />
                        </svg>
                    </span>
                    <a href="<?php echo e(route('user.login')); ?>"
                        class="text-reset opacity-60 hov-opacity-100  hov-text-white fs-12 d-inline-block border-right border-soft-light border-width-2 pr-2 ml-3"><?php echo e(translate('Login')); ?></a>
                    <a href="<?php echo e(route('user.registration')); ?>"
                        class="text-reset opacity-60 hov-opacity-100 hov-text-white fs-12 d-inline-block py-2 pl-2"><?php echo e(translate('Registration')); ?></a>
                </span>
            <?php endif; ?>
            <hr>
            <ul class="mb-0 pl-3 pb-3 h-100">
                <?php if(get_setting('header_menu_labels') != null): ?>
                    <?php $__currentLoopData = json_decode(get_setting('header_menu_labels'), true); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="mr-0">
                            <a href="<?php echo e(json_decode(get_setting('header_menu_links'), true)[$key]); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                            <?php if(url()->current() == json_decode(get_setting('header_menu_links'), true)[$key]): ?> active <?php endif; ?>">
                                <?php echo e(translate($value)); ?>

                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(isAdmin()): ?>
                        <hr>
                        <li class="mr-0">
                            <a href="<?php echo e(route('admin.dashboard')); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links">
                                <?php echo e(translate('My Account')); ?>

                            </a>
                        </li>
                    <?php else: ?>
                        <hr>
                        <li class="mr-0">
                            <a href="<?php echo e(route('dashboard')); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                <?php echo e(areActiveRoutes(['dashboard'], ' active')); ?>">
                                <?php echo e(translate('My Account')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(isCustomer()): ?>
                        <li class="mr-0">
                            <a href="<?php echo e(route('all-notifications')); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                <?php echo e(areActiveRoutes(['all-notifications'], ' active')); ?>">
                                <?php echo e(translate('Notifications')); ?>

                            </a>
                        </li>
                        <li class="mr-0">
                            <a href="<?php echo e(route('wishlists.index')); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                <?php echo e(areActiveRoutes(['wishlists.index'], ' active')); ?>">
                                <?php echo e(translate('Wishlist')); ?>

                            </a>
                        </li>
                        <li class="mr-0">
                            <a href="<?php echo e(route('compare')); ?>"
                                class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-dark header_menu_links
                                <?php echo e(areActiveRoutes(['compare'], ' active')); ?>">
                                <?php echo e(translate('Compare')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <hr>
                    <li class="mr-0">
                        <a href="<?php echo e(route('logout')); ?>"
                            class="fs-13 px-3 py-3 w-100 d-inline-block fw-700 text-primary header_menu_links">
                            <?php echo e(translate('Logout')); ?>

                        </a>
                    </li>
                <?php endif; ?>
            </ul>
            <br>
            <br>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="order_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div id="order-details-modal-body">

                </div>
            </div>
        </div>
    </div>

    <?php $__env->startSection('script'); ?>
        <script type="text/javascript">
            function show_order_details(order_id) {
                $('#order-details-modal-body').html(null);

                if (!$('#modal-size').hasClass('modal-lg')) {
                    $('#modal-size').addClass('modal-lg');
                }

                $.post('<?php echo e(route('orders.details')); ?>', {
                    _token: AIZ.data.csrf,
                    order_id: order_id
                }, function(data) {
                    $('#order-details-modal-body').html(data);
                    $('#order_details').modal();
                    $('.c-preloader').hide();
                    AIZ.plugins.bootstrapSelect('refresh');
                });
            }
            $(function(){
    $('.selectpicker').selectpicker();
});
        </script>
    <?php $__env->stopSection(); ?>
<?php /**PATH D:\xm\htdocs\kolzo\kolzo\resources\views/frontend/inc/nav.blade.php ENDPATH**/ ?>