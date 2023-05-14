@extends('user.dashboard.index')
@section('content')
    <!-- ================================
           START USER CANVAS MENU
    ================================= -->
    <div class="user-canvas-container">
        <div class="side-menu-close">
            <i class="la la-times"></i>
        </div><!-- end menu-toggler -->
        <div class="user-canvas-nav">
            <div class="section-tab section-tab-2 text-center pt-4 pb-3 pl-4">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="notification-tab" data-toggle="tab" href="#notification"
                            role="tab" aria-controls="notification" aria-selected="false">
                            Notifications
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab"
                            aria-controls="account" aria-selected="true">
                            Account
                        </a>
                    </li>
                </ul>
            </div><!-- end section-tab -->
        </div>
        <div class="user-canvas-nav-content">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                    <div class="user-sidebar-item">
                        <div class="notification-item">
                            <div class="list-group drop-reveal-list">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element flex-shrink-0 mr-3 ml-0"><i class="la la-bell"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your request has been sent</h3>
                                            <p class="msg-text">2 min ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i class="la la-check"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account has been created</h3>
                                            <p class="msg-text">1 day ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i class="la la-user"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your account updated</h3>
                                            <p class="msg-text">2 hrs ago</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i class="la la-lock"></i>
                                        </div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your password changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-5 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email sent</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="msg-body d-flex align-items-center">
                                        <div class="icon-element bg-6 flex-shrink-0 mr-3 ml-0"><i
                                                class="la la-envelope"></i></div>
                                        <div class="msg-content w-100">
                                            <h3 class="title pb-1">Your email changed</h3>
                                            <p class="msg-text">Yesterday</p>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
                <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                    <div class="user-action-wrap user-sidebar-panel">
                        <div class="notification-item">
                            <a href="user-dashboard-profile.html" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img src="images/team8.jpg"
                                            alt="team-img"></div>
                                    <span class="font-size-14 font-weight-bold">{{$data->username}}</span>
                                </div>
                            </a>
                            <div class="list-group drop-reveal-list user-drop-reveal-list">
                                <a href="user-dashboard-profile.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-user mr-2"></i>My Profile</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-booking.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-shopping-cart mr-2"></i>My Booking</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-reviews.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-heart mr-2"></i>My Reviews</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <a href="user-dashboard-settings.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-gear mr-2"></i>Settings</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                                <div class="section-block"></div>
                                <a href="index.html" class="list-group-item list-group-item-action">
                                    <div class="msg-body">
                                        <div class="msg-content">
                                            <h3 class="title"><i class="la la-power-off mr-2"></i>Logout</h3>
                                        </div>
                                    </div><!-- end msg-body -->
                                </a>
                            </div>
                        </div><!-- end notification-item -->
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end user-canvas-container -->
    <!-- ================================
           END USER CANVAS MENU
    ================================= -->

    <!-- ================================
           START DASHBOARD NAV
    ================================= -->
    <div class="sidebar-nav">
        <div class="sidebar-nav-body">
            <div class="side-menu-close">
                <i class="la la-times"></i>
            </div><!-- end menu-toggler -->
            <div class="author-content">
                <div class="d-flex align-items-center">
                    <div class="author-img avatar-sm">
                        <img src="images/team8.jpg" alt="testimonial image">
                    </div>
                    <div class="author-bio">
                        <h4 class="author__title">{{$data->username}}</h4>
                        <span class="author__meta">Member Since May 2017</span>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrap">
                <ul class="sidebar-menu list-items">
                    <li><a href="user-dashboard.html"><i class="la la-dashboard mr-2 text-color"></i>Dashboard</a></li>
                    <li><a href="user-dashboard-booking.html"><i class="la la-shopping-cart mr-2 text-color-2"></i>My
                            Booking</a></li>
                    <li class="page-active"><a href="{{route('user.dashboard.profile')}}"><i class="la la-user mr-2"></i>My
                            Profile</a></li>
                    <li><a href="user-dashboard-reviews.html"><i class="la la-star mr-2 text-color-3"></i>My Reviews</a>
                    </li>
                    <li><a href="user-dashboard-wishlist.html"><i class="la la-heart mr-2 text-color-4"></i>Wishlist</a>
                    </li>
                    <li><a href="user-dashboard-settings.html"><i class="la la-cog mr-2 text-color-5"></i>Settings</a>
                    </li>
                    <li><a href="index.html"><i class="la la-power-off mr-2 text-color-6"></i>Logout</a></li>
                </ul>
            </div><!-- end sidebar-menu-wrap -->
        </div>
    </div><!-- end sidebar-nav -->
    <!-- ================================
           END DASHBOARD NAV
    ================================= -->

    <!-- ================================
        START DASHBOARD AREA
    ================================= -->
    <section class="dashboard-area">
        <div class="dashboard-nav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-wrapper">
                            <div class="logo mr-5">
                                <a href="index.html"><img src="images/logo2.png" alt="logo"></a>
                                <div class="menu-toggler">
                                    <i class="la la-bars"></i>
                                    <i class="la la-times"></i>
                                </div><!-- end menu-toggler -->
                                <div class="user-menu-open">
                                    <i class="la la-user"></i>
                                </div><!-- end user-menu-open -->
                            </div>
                            <div class="dashboard-search-box">
                                <div class="contact-form-action">
                                    <form action="#">
                                        <div class="form-group mb-0">
                                            <input class="form-control" type="text" name="text"
                                                placeholder="Search">
                                            <button class="search-btn"><i class="la la-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="nav-btn ml-auto">
                                <div class="notification-wrap d-flex align-items-center">
                                    <div class="notification-item mr-2">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle drop-reveal-toggle-icon"
                                                id="notificationDropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="la la-bell"></i>
                                                <span class="noti-count">4</span>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-xl dropdown-menu-right">
                                                <div class="dropdown-header drop-reveal-header">
                                                    <h6 class="title">You have <strong class="text-black">4</strong>
                                                        notifications</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list">
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-bell"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your request has been sent</h3>
                                                                <p class="msg-text">2 min ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-2 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-check"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your account has been created</h3>
                                                                <p class="msg-text">1 day ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-3 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-user"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your account updated</h3>
                                                                <p class="msg-text">2 hrs ago</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="#" class="list-group-item list-group-item-action">
                                                        <div class="msg-body d-flex align-items-center">
                                                            <div class="icon-element bg-4 flex-shrink-0 mr-3 ml-0"><i
                                                                    class="la la-lock"></i></div>
                                                            <div class="msg-content w-100">
                                                                <h3 class="title pb-1">Your password changed</h3>
                                                                <p class="msg-text">Yesterday</p>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                                <a href="#" class="dropdown-item drop-reveal-btn text-center">View
                                                    all</a>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                    <div class="notification-item">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" id="userDropdownMenu"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm flex-shrink-0 mr-2"><img
                                                            src="images/team8.jpg" alt="team-img"></div>
                                                    <span class="font-size-14 font-weight-bold">{{$data->username}}</span>
                                                </div>
                                            </a>
                                            <div
                                                class="dropdown-menu dropdown-reveal dropdown-menu-md dropdown-menu-right">
                                                <div class="dropdown-item drop-reveal-header user-reveal-header">
                                                    <h6 class="title text-uppercase">Welcome!</h6>
                                                </div>
                                                <div class="list-group drop-reveal-list user-drop-reveal-list">
                                                    <a href="user-dashboard-profile.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-user mr-2"></i>My
                                                                    Profile</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-booking.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-shopping-cart mr-2"></i>My Booking
                                                                </h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-reviews.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-heart mr-2"></i>My
                                                                    Reviews</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <a href="user-dashboard-settings.html"
                                                        class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i class="la la-gear mr-2"></i>Settings
                                                                </h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                    <div class="section-block"></div>
                                                    <a href="index.html" class="list-group-item list-group-item-action">
                                                        <div class="msg-body">
                                                            <div class="msg-content">
                                                                <h3 class="title"><i
                                                                        class="la la-power-off mr-2"></i>Logout</h3>
                                                            </div>
                                                        </div><!-- end msg-body -->
                                                    </a>
                                                </div>
                                            </div><!-- end dropdown-menu -->
                                        </div>
                                    </div><!-- end notification-item -->
                                </div>
                            </div><!-- end nav-btn -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-12 -->
                </div><!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-nav -->
        <div class="dashboard-content-wrap">
            <div class="dashboard-bread dashboard--bread">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="breadcrumb-content">
                                <div class="section-heading">
                                    <h2 class="sec__title font-size-30 text-white">My Profile</h2>
                                </div>
                            </div><!-- end breadcrumb-content -->
                        </div><!-- end col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="breadcrumb-list text-right">
                                <ul class="list-items">
                                    <li><a href="index.html" class="text-white">Home</a></li>
                                    <li>Dashboard</li>
                                    <li>My Profile</li>
                                </ul>
                            </div><!-- end breadcrumb-list -->
                        </div><!-- end col-lg-6 -->
                    </div><!-- end row -->
                </div>
            </div><!-- end dashboard-bread -->
            <div class="dashboard-main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-box">
                                <div class="form-title-wrap border-bottom-0 pb-0">
                                    <h3 class="title">Profile Information</h3>
                                </div>
                                <div class="form-content">
                                    <div class="table-form table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">First Name</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{$data->username}}</td>
                                                </tr>
                                                {{-- <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">Last Name</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>Tufan</td>
                                                </tr> --}}
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">Email Address</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{$data->email}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">Phone Number</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{$data->phone}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">Date of Birth</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{$data->dob}}</td>
                                                </tr>
                                                <tr>
                                                    <td class="pl-0">
                                                        <div class="table-content">
                                                            <h3 class="title font-weight-medium">Address</h3>
                                                        </div>
                                                    </td>
                                                    <td>:</td>
                                                    <td>{{$data->address}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="section-block"></div>
                                    <div class="btn-box mt-4">
                                        <a href="{{route('user.dashboard.edit')}}" class="theme-btn">Edit Profile</a>
                                    </div>
                                </div>
                            </div><!-- end form-box -->
                        </div><!-- end col-lg-12 -->
                    </div><!-- end row -->
                    <div class="border-top mt-4"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="copy-right padding-top-30px">
                                <p class="copy__desc">
                                    &copy; Copyright Trizen 2020. Made with
                                    <span class="la la-heart"></span> by <a
                                        href="https://themeforest.net/user/techydevs/portfolio">TechyDevs</a>
                                </p>
                            </div><!-- end copy-right -->
                        </div><!-- end col-lg-7 -->
                        <div class="col-lg-5">
                            <div class="copy-right-content text-right padding-top-30px">
                                <ul class="social-profile">
                                    <li><a href="#"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#"><i class="lab la-instagram"></i></a></li>
                                    <li><a href="#"><i class="lab la-linkedin-in"></i></a></li>
                                </ul>
                            </div><!-- end copy-right-content -->
                        </div><!-- end col-lg-5 -->
                    </div><!-- end row -->
                </div><!-- end container-fluid -->
            </div><!-- end dashboard-main-content -->
        </div><!-- end dashboard-content-wrap -->
    </section><!-- end dashboard-area -->
    <!-- ================================
        END DASHBOARD AREA
    ================================= -->
@endsection
