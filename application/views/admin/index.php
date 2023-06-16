
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
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    </head>

    <body data-sidebar="colored">


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
    <div class="d-flex">
        <div class="navbar-brand-box text-center">
            <a href="<?php echo base_url();?>index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="<?php echo base_url();?>assets/images/logo.jpeg" alt="" height="50">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo base_url();?>assets/images/logo.jpeg" alt="" height="50">
                </span>
            </a>
            <a href="<?php echo base_url();?>index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="<?php echo base_url();?>assets/images/logo.jpeg" alt="" height="50">
                </span>
                <span class="logo-lg">
                    <img src="<?php echo base_url();?>assets/images/logo.jpeg" alt="" height="50">
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
                        <a href="<?php echo base_url();?>#" class="close-search toggle-search" data-target="#search-wrap">
                            <i class="mdi mdi-close-circle"></i>
                        </a>
                    </div>
                </div>


                <div class="dropdown d-none d-md-block">
                    <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="flag-img me-2" src="<?php echo base_url();?>assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <i class="mdi mdi-chevron-down"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">

                        <!-- item-->
                        <a href="<?php echo base_url();?>javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?php echo base_url();?>assets/images/flags/germany_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> German </span>
                        </a>

                        <!-- item-->
                        <a href="<?php echo base_url();?>javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?php echo base_url();?>assets/images/flags/italy_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Italian </span>
                        </a>

                        <!-- item-->
                        <a href="<?php echo base_url();?>javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?php echo base_url();?>assets/images/flags/french_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> French </span>
                        </a>

                        <!-- item-->
                        <a href="<?php echo base_url();?>javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?php echo base_url();?>assets/images/flags/spain_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Spanish </span>
                        </a>

                        <!-- item-->
                        <a href="<?php echo base_url();?>javascript:void(0);" class="dropdown-item notify-item">
                            <img src="<?php echo base_url();?>assets/images/flags/russia_flag.jpg" alt="user-image" height="12"> <span class="align-middle"> Russian </span>
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
                            <a href="<?php echo base_url();?>#" class="text-reset notification-item d-block active">
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

                            <a href="<?php echo base_url();?>#" class="text-reset notification-item d-block">
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

                            <a href="<?php echo base_url();?>#" class="text-reset notification-item d-block">
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
                            <a href="<?php echo base_url();?>#" class="text-reset notification-item d-block">
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
    
                            <a href="<?php echo base_url();?>#" class="text-reset notification-item d-block">
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
                                <a class="btn btn-sm btn-link font-size-14 text-start" href="<?php echo base_url();?>javascript:void(0)">
                                    View all
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user me-2" src="<?php echo base_url();?>assets/images/users/avatar-1.jpg" alt="Header Avatar"> 
                        <span class="d-none d-md-inline-block ms-1">Admin <i class="mdi mdi-chevron-down"></i> </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-user font-size-16 align-middle d-inline-block me-1"></i> Profile</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-wallet font-size-16 align-middle d-inline-block me-1"></i> My Wallet</a>
                        <a class="dropdown-item d-block" href="<?php echo base_url();?>#"><span class="badge bg-success float-end">11</span><i class="dripicons-gear font-size-16 align-middle me-1"></i> Settings</a>
                        <a class="dropdown-item" href="<?php echo base_url();?>#"><i class="dripicons-lock-open font-size-16 align-middle d-inline-block me-1"></i> Lock screen</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="<?php echo base_url();?>admin/logout"><i class="dripicons-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
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
                                <a href="<?php echo base_url();?>index.html" class="waves-effect">
                                    <span class="badge rounded-pill bg-info float-end">2</span>
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>


                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-message"></i>
                                    <span> Email </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>email-inbox.html">Inbox</a></li>
                                    <li><a href="<?php echo base_url();?>email-read.html">Email Read</a></li>
                                    <li><a href="<?php echo base_url();?>email-compose.html">Email Compose</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>calendar.html" class="waves-effect">
                                    <i class="dripicons-calendar"></i>
                                    <span>Calendar</span>
                                </a>
                            </li>

                            <li class="">
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect" aria-expanded="true">
                                    <i class="dripicons-monitor"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li>
                                        <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="true">
                                            <li><a href="<?php echo base_url();?>layouts-light-sidebar.html">Light Sidebar</a></li>
                                            <li><a href="<?php echo base_url();?>layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="<?php echo base_url();?>layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="<?php echo base_url();?>layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="<?php echo base_url();?>layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu mm-collapse" aria-expanded="false">
                                            <li><a href="<?php echo base_url();?>layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="<?php echo base_url();?>layouts-hori-full.html">Full Width</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                
                            <li class="menu-title">Components</li>

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-briefcase"></i>
                                    <span>UI Elements </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>ui-alerts.html">Alerts</a></li>
                                    <li><a href="<?php echo base_url();?>ui-badge.html">Badge</a></li>
                                    <li><a href="<?php echo base_url();?>ui-buttons.html">Buttons</a></li>
                                    <li><a href="<?php echo base_url();?>ui-cards.html">Cards</a></li>
                                    <li><a href="<?php echo base_url();?>ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="<?php echo base_url();?>ui-navs.html">Navs</a></li>
                                    <li><a href="<?php echo base_url();?>ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="<?php echo base_url();?>ui-modals.html">Modals</a></li>
                                    <li><a href="<?php echo base_url();?>ui-images.html">Images</a></li>
                                    <li><a href="<?php echo base_url();?>ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="<?php echo base_url();?>ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="<?php echo base_url();?>ui-pagination.html">Pagination</a></li>
                                    <li><a href="<?php echo base_url();?>ui-popover-tooltips.html">Popover & Tooltips</a></li>
                                    <li><a href="<?php echo base_url();?>ui-carousel.html">Carousel</a></li>
                                    <li><a href="<?php echo base_url();?>ui-video.html">Video</a></li>
                                    <li><a href="<?php echo base_url();?>ui-typography.html">Typography</a></li>
                                    <li><a href="<?php echo base_url();?>ui-sweet-alert.html">Sweet-Alert</a></li>
                                    <li><a href="<?php echo base_url();?>ui-grid.html">Grid</a></li>
                                    <li><a href="<?php echo base_url();?>ui-utilities.html">Utilities</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-broadcast"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>icons-material.html">Material Design</a></li>
                                    <li><a href="<?php echo base_url();?>icons-ion.html">Ion Icons</a></li>
                                    <li><a href="<?php echo base_url();?>icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="<?php echo base_url();?>icons-themify.html">Themify Icons</a></li>
                                    <li><a href="<?php echo base_url();?>icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="<?php echo base_url();?>icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-success float-end">8</span>
                                    <i class="dripicons-to-do"></i>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>form-elements.html">Form Elements</a></li>
                                    <li><a href="<?php echo base_url();?>form-validation.html">Form Validation</a></li>
                                    <li><a href="<?php echo base_url();?>form-advanced.html">Form Advanced</a></li>
                                    <li><a href="<?php echo base_url();?>form-editors.html">Form Editors</a></li>
                                    <li><a href="<?php echo base_url();?>form-uploads.html">Form File Upload</a></li>
                                    <li><a href="<?php echo base_url();?>form-mask.html">Form Mask</a></li>
                                    <li><a href="<?php echo base_url();?>form-xeditable.html">Form Xeditable</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-graph-bar"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>charts-morris.html">Morris Charts</a></li>
                                    <li><a href="<?php echo base_url();?>charts-chartist.html">Chartist Charts</a></li>
                                    <li><a href="<?php echo base_url();?>charts-chartjs.html">Chartjs Charts</a></li>
                                    <li><a href="<?php echo base_url();?>charts-flot.html">Flot Charts</a></li>
                                    <li><a href="<?php echo base_url();?>charts-c3.html">C3 Charts</a></li>
                                    <li><a href="<?php echo base_url();?>charts-other.html">Jquery Knob Charts</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-view-thumb"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>tables-basic.html">Basic Tables</a></li>
                                    <li><a href="<?php echo base_url();?>tables-datatable.html">Data Tables</a></li>
                                    <li><a href="<?php echo base_url();?>tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="<?php echo base_url();?>tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="waves-effect">
                                    <span class="badge rounded-pill bg-danger float-end">2</span>
                                    <i class="dripicons-map"></i>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>maps-google.html">Google Maps</a></li>
                                    <li><a href="<?php echo base_url();?>maps-vector.html">Vector Maps</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>
                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-archive"></i>
                                    <span>Advanced UI</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>advanced-animation.html">Animation</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-highlight.html">Highlight</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-rating.html">Rating</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-nestable.html">Nestable</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-alertify.html">Alertify</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-rangeslider.html">Range Slider</a></li>
                                    <li><a href="<?php echo base_url();?>advanced-sessiontimeout.html">Session Timeout</a></li>
                                </ul>
                            </li>
                

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-box"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>pages-login.html">Login</a></li>
                                    <li><a href="<?php echo base_url();?>pages-register.html">Register</a></li>
                                    <li><a href="<?php echo base_url();?>pages-recoverpw.html">Recover Password</a></li>
                                    <li><a href="<?php echo base_url();?>pages-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-duplicate"></i>
                                    <span>Extra Pages</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="<?php echo base_url();?>pages-timeline.html">Timeline</a></li>
                                    <li><a href="<?php echo base_url();?>pages-invoice.html">Invoice</a></li>
                                    <li><a href="<?php echo base_url();?>pages-directory.html">Directory</a></li>
                                    <li><a href="<?php echo base_url();?>pages-starter.html">Starter Page</a></li>
                                    <li><a href="<?php echo base_url();?>pages-404.html">Error 404</a></li>
                                    <li><a href="<?php echo base_url();?>pages-500.html">Error 500</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-network-1"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="<?php echo base_url();?>javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="<?php echo base_url();?>javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="<?php echo base_url();?>javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="<?php echo base_url();?>javascript: void(0);">Level 2.2</a></li>
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


            


            
        <div class="rightbar-overlay"></div>

                             
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>

        <script src="<?php echo base_url();?>assets/libs/morris.js/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/raphael/raphael.min.js"></script>


        <script src="<?php echo base_url();?>assets/libs/peity/jquery.peity.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/pages/dashboard.init.js"></script>

        <script src="<?php echo base_url();?>assets/js/app.js"></script>

        

    </body>

<!-- Mirrored from themesbrand.com/foxia/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Jun 2023 17:49:41 GMT -->
</html>
