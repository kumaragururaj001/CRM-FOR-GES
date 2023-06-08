<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:49:16 GMT -->
<head>
    
        <meta charset="utf-8">
        <title>Dashboard | Foxia - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url('assets/css/icons.min.css'); ?>" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url('assets/css/app.min.css'); ?>" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="colored">

<?php

   echo base_url();

?>
        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="d-flex">
        <div class="navbar-brand-box text-center">
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="20">
                </span>
            </a>
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo_dark.png" alt="" height="20">
                </span>
            </a>
        </div>

        <div class="navbar-header">    
            <button type="button" class="button-menu-mobile waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button> 
            <div class="d-flex ms-auto">
                <!-- Search input -->
                <div class="search-wrap" id="search-wrap">
                    <div class="search-bar">
                        <input class="search-input form-control" placeholder="Search">
                        <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>


                <div class="dropdown d-none d-md-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="flag-img me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/germany_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/italy_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/french_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/spain_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Spanish </span>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <img src="assets/images/flags/russia_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Russian </span>
                        </a>

                    </div>
                </div>

                <div class="dropdown">
                    <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="badge bg-danger rounded-pill">3</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                </div>
                            </div>
                        </div>

                        <div data-simplebar style="max-height: 230px;">
                            <a href="#" class="text-reset notification-item d-block active">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-danger rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-info rounded-circle font-size-16">
                                            <i class="mdi mdi-glass-cocktail"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">It is a long established fact that a reader will</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-success rounded-circle font-size-16">
                                            <i class="mdi mdi-message-text-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">You have 87 unread messages</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
    
                            <a href="#" class="text-reset notification-item d-block">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-warning rounded-circle font-size-16">
                                            <i class="mdi mdi-cart-outline"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
    
                        </div>
                        
                        <div class="p-2 border-top">
                            <div class="d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-start" href="javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" src="assets/images/users/avatar-1.jpg" alt="Header Avatar"> 
                        <span class="d-none d-md-inline-block ms-1">Donald T. <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-wallet font-size-16 align-middle d-inline-block me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="dripicons-gear font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="#"><i class="dripicons-lock-open font-size-16 align-middle d-inline-block me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                    </div>
                </div>

                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                        <i class="mdi mdi-spin mdi-cog"></i>
                    </button>
                </div>

            </div>
        </div>    
    </div>    
</header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title text-uppercase">Main</li>


                            <li>
                                <a href="index.html" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end">2</span>
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>


                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-message"></i>
                                    <span> Email </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-inbox.html">Inbox</a></li>
                                    <li><a href="email-read.html">Email Read</a></li>
                                    <li><a href="email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect">
                                    <i class="dripicons-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                                    <i class="dripicons-monitor"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="true">
                                            <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-full.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                
                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-briefcase"></i>
                                    <span>UI Elements </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-badge.html">Badge</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-navs.html">Navs</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-pagination.html">Pagination</a></li>
                                    <li><a href="ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-utilities.html">Utilities</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-broadcast"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end">8</span>
                                    <i class="dripicons-to-do"></i>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-graph-bar"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-morris.html">Morris Charts</a></li>
                                    <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="charts-flot.html">Flot Charts</a></li>
                                    <li><a href="charts-c3.html">C3 Charts</a></li>
                                    <li><a href="charts-other.html">Jquery Knob Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-view-thumb"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-danger float-end">2</span>
                                    <i class="dripicons-map"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-archive"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="advanced-animation.html">Animation</a></li>
                                    <li><a href="advanced-highlight.html">Highlight</a></li>
                                    <li><a href="advanced-rating.html">Rating</a></li>
                                    <li><a href="advanced-nestable.html">Nestable</a></li>
                                    <li><a href="advanced-alertify.html">Alertify</a></li>
                                    <li><a href="advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="advanced-sessiontimeout.html">Session Timeout</a></li>
                                </ul>
                            </li>
                

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-box"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-login.html">Login</a></li>
                                    <li><a href="pages-register.html">Register</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-duplicate"></i>
                                    <span>Extra Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-network-1"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->


            


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">Dashboard</h6>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-info my-2"> + 11% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">5/8</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Orders</h6>
                                                <h5 class="ms-auto mt-0">1758</h5>
                                            </div>
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-danger my-2"> - 27% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">2/5</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Revenue</h6>
                                                <h5 class="ms-auto mt-0">48259</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-primary my-2"> 0% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-pie" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"]}' data-width="54" data-height="54">3/8</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Average Price</h6>
                                                <h5 class="ms-auto mt-0">$17.5</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stats">
                                    <div class="p-3 mini-stats-content">
                                        <div class="mb-4">
                                            <div class="float-end text-end">
                                                <span class="badge bg-light text-info my-2"> - 89% </span> 
                                                <p class="text-white-50">From previous period</p>
                                            </div>
                                            <span class="peity-donut" data-peity='{ "fill": ["rgba(255, 255, 255, 0.8)", "rgba(255, 255, 255, 0.2)"], "innerRadius": 18, "radius": 32 }' data-width="54" data-height="54">3/5</span>
                                        </div>
                                    </div>
                                    <div class="mx-3">
                                        <div class="card mb-0 border p-3 mini-stats-desc">
                                            <div class="d-flex">
                                                <h6 class="mt-0 mb-3">Product Sold</h6>
                                                <h5 class="ms-auto mt-0">2048</h5>
                                            </div>    
                                            <p class="text-muted mb-0">Sed ut perspiciatis unde iste</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="mt-0 header-title mb-5">Monthly Earning</h1>
                                        <div id="morris-bar-stacked" class="morris-chart-height morris-charts" data-colors='["#1699dd", "--bs-primary", "#ebeff2"]'></div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Sales Analytics</h4>
            
                                        <div class="row text-center mt-5">
                                            <div class="col-6">
                                                <h5 class="">56241</h5>
                                                <p class="text-muted font-size-14">Marketplace</p>
                                            </div>
                                            <div class="col-6">
                                                <h5 class="">23651</h5>
                                                <p class="text-muted font-size-14">Total Income</p>
                                            </div>
                                        </div>
            
                                        <div id="morris-donut-example" class="dash-chart morris-charts text-center" data-colors='["#ebeff2", "--bs-primary", "#1699dd"]'></div>
                                    </div>
                                </div>
                
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card">  
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Weekly Sales</h4>
                                        <div class="py-4">
                                            <span class="peity-line" data-width="100%" data-peity='{ "fill": ["rgba(22, 153, 221, 0.3)"],"stroke": ["rgba(22, 153, 221, 0.9)"]}' data-height="60">4,6,8,7,6,7,9,8,6,5,7,5,8,6,4,8,9,8,5,4</span>
                                        </div>
        
        
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="weekly-sale-list text-center">
                                                    <h5>145</h5>
                                                    <p class="text-muted mb-0">This Week</p>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="weekly-sale-list text-center">
                                                    <h5>132</h5>
                                                    <p class="text-muted mb-0">Last Week</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card product-sales">
                                    <div class="card-body">
                                        <h5 class="mt-0 mb-4"><i class="ion-monitor h4 me-2 text-primary"></i> Computers</h5>
                                        <div class="row align-items-center mb-4">
                                            <div class="col-6">
                                                <p class="text-muted">This Month Sales</p>
                                                <h4><sup class="me-1"><small>$</small></sup>14,352</h4>
                                            </div>
                                            <div class="col-6">
                                                <div class="text-center">
                                                    <span class="peity-pie" data-peity='{ "fill": ["rgba(22, 153, 221, 1)", "#f2f2f2"]}' data-width="65" data-height="65" style="display: none;">70/100</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="text-muted mb-3">Top Cities Sales</p>
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-muted mb-2">Los Angeles : <b class="text-dark">$ 8,235</b></p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-muted mb-2">San Francisco : <b class="text-dark">$ 7,256</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                            </div>
        
                            <div class="col-xl-4 col-md-6">
                                <div class="card messages">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Latest Messages</h4>

                                        <nav class="mt-4">
                                            <div class="nav nav-tabs latest-messages-tabs nav-justified" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-first-tab" data-bs-toggle="tab" href="#nav-first" role="tab" aria-controls="nav-first" aria-selected="true">
                                                    <h4 class="mt-0">12</h4>
                                                    <p class="text-muted mb-0">November</p>
                                                </a>
                                                <a class="nav-item nav-link" id="nav-second-tab" data-bs-toggle="tab" href="#nav-second" role="tab" aria-controls="nav-second" aria-selected="false">
                                                    <h4 class="mt-0">13</h4>
                                                    <p class="text-muted mb-0">November</p>
                                                </a>
                                            </div>
                                        </nav>
                                        <div class="tab-content" id="nav-tabContent">
                                            <div class="tab-pane show active" id="nav-first" role="tabpanel" aria-labelledby="nav-first-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-2.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Michael Bowen</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                        <p class="time text-muted">Just Now</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-3.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                        <p class="time text-muted">12 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-4.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Brady Smith</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                        <p class="time text-muted">23 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">Nice to meet you</p>
                                                                        <p class="time text-muted">34 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="nav-second" role="tabpanel" aria-labelledby="nav-second-tab">
                                                <div class="p-2 mt-2">
                                                    <ul class="list-unstyled latest-message-list mb-0">
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Albert Jones</h6>
                                                                        <p class="text-muted mb-0">Hey! there I'm available...</p>
                                                                        <p class="time text-muted">yesterday, 09:42am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-6.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Danny Benson</h6>
                                                                        <p class="text-muted mb-0">I've finished it! See you so...</p>
                                                                        <p class="time text-muted">yesterday, 11:07am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-7.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Joseph Sanchez</h6>
                                                                        <p class="text-muted mb-0">This theme is awesome!</p>
                                                                        <p class="time text-muted">yesterday, 01:17am</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="message-list-item">
                                                            <a href="#" class="text-dark">
                                                                <div class="d-flex">
                                                                    <img class="me-3 avatar-sm rounded-circle" src="assets/images/users/avatar-5.jpg" alt="">
                                                                    <div class="">
                                                                        <h6 class="mt-0">Daniel Anderson</h6>
                                                                        <p class="text-muted mb-0">Nice to meet you</p>
                                                                        <p class="time text-muted">34 min ago</p>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Recent activity</h4>
                                        
                                        <div class="p-2">
                                            <ul class="list-unstyled rec-acti-list">
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">14 Oct, 09:30am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Meeting For a new Projects</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">14 Oct, 11:05am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Start a new Projects</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">15 Oct, 10:16am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Create Landing Psd template</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">16 Oct, 11:24am</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Convert Psd to Html</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="rec-acti-list-item">
                                                    <div>
                                                        <p class="text-muted mb-1">17 Oct, 01:36pm</p>
                                                        <h6 class="mb-0"><a href="#" class="text-dark">Redesign Html template</a></h6>
                                                        <div class="delete-icon">
                                                            <a href="#" class="text-primary"><i class="mdi mdi-delete-forever h4"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <form>
                                            <div class="row">
                                                <div class="col-8 rec-acti-input">
                                                    <input type="text" name="rec-input-text" class="form-control" placeholder="Add new Activity">
                                                </div>
                                                <div class="col-4 rec-acti-send">
                                                    <div class="d-grid">
                                                        <button class="btn-primary btn" type="button"><i class="mdi mdi-plus me-1"></i>Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Latest Transactions</h4>
                                        <div class="table-responsive mt-4">
                                            <table class="table table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">(#) Id</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col" colspan="2">Amount</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#16252</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar-xs rounded-circle me-2"> Rafael Reardon
                                                            </div>
                                                        </td>
                                                        <td>14/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$80</td>
                                                        <td>1</td>
                                                        <td>$80</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16253</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar-xs rounded-circle me-2"> Thomas Hirsch
                                                            </div>
                                                        </td>
                                                        <td>15/10/2018</td>
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                        <td>$76</td>
                                                        <td>2</td>
                                                        <td>$152</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16254</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar-xs rounded-circle me-2"> Archer Desaillly
                                                            </div>
                                                        </td>
                                                        <td>15/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$86</td>
                                                        <td>1</td>
                                                        <td>$86</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16255</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle me-2"> Michael Flannery
                                                            </div>
                                                        </td>
                                                        <td>16/10/2018</td>
                                                        <td><span class="badge bg-danger">Cancel</span></td>
                                                        <td>$82</td>
                                                        <td>2</td>
                                                        <td>$164</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#16256</th>
                                                        <td>
                                                            <div>
                                                                <img src="assets/images/users/avatar-6.jpg" alt="" class="avatar-xs rounded-circle me-2"> Jamie Fishbourne
                                                            </div>
                                                        </td>
                                                        <td>17/10/2018</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>$84</td>
                                                        <td>2</td>
                                                        <td>$84</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    </div>    
                </div>
                <!-- End Page-content -->

                
                
                <footer class="footer text-center">
                    © <script>document.write(new Date().getFullYear())</script> Foxia <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0">
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch">
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>

                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox"  id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
            
                    <h6 class="mt-4">Select Custom Colors</h6>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-default" value="default" onchange="document.documentElement.setAttribute('data-theme-mode', 'default')" checked>
                        <label class="form-check-label" for="theme-default">Default</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-red" value="red" onchange="document.documentElement.setAttribute('data-theme-mode', 'red')">
                        <label class="form-check-label" for="theme-red">Red</label>
                    </div>

                    <div class="form-check form-check-inline">
                        <input class="form-check-input theme-color" type="radio" name="theme-mode"
                            id="theme-green" value="green" onchange="document.documentElement.setAttribute('data-theme-mode', 'green')">
                        <label class="form-check-label" for="theme-green">Green</label>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

                             
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url('assets/libs/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/metismenu/metisMenu.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/simplebar/simplebar.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/node-waves/waves.min.js'); ?>"></script>

        <script src="<?php echo base_url('assets/libs/morris.js/morris.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/libs/raphael/raphael.min.js'); ?>"></script>


        <script src="<?php echo base_url('assets/libs/peity/jquery.peity.min.js'); ?>"></script>

        <script src="<?php echo base_url('assets/js/pages/dashboard.init.js'); ?>"></script>

        <script src="<?php echo base_url('assets/js/app.js'); ?>"></script>

        

    </body>

<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:49:41 GMT -->
</html>
