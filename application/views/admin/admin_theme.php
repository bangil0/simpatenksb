<?php 
$userdata = $this->session->userdata('admin_login');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link type="text/css" href="<?php echo base_url(); ?>assets/css/app.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- end of global css -->
</head>

<body>
<!-- header logo: style can be found in header-->
<header class="header">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.html" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="<?php echo base_url(); ?>assets/img/logo_blue.png" alt="logo"/>
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="javascript:void(0)" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i
                    class="fa fa-fw fa-bars"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> <i
                            class="fa  fa-fw fa-bell-o black"></i>
                        <span class="label label-danger">3</span>
                    </a>
                    <ul class="dropdown-menu dropdown-notifications table-striped">
                        <li>
                            <a href="" class="notification">
                                <img class="notif-image img-circle" src="img/authors/avatar6.jpg" alt="avatar-image">
                                <div class="notif-body"><strong>Williams</strong> liked <strong>Lorem Ipsum</strong>
                                    typesetting.
                                    <br>
                                    <small>5 minutes ago</small>
                                </div>
                                <span class="label label-success label-mini msg-lable">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification striped-col">
                                <img class="notif-image img-circle" src="img/authors/avatar5.jpg" alt="avatar-image">
                                <div class="notif-body">
                                    <strong>Robinson</strong> started follwing <strong>Trac Theme</strong>.
                                    <br>
                                    <small>14/10/2014 1:31 pm</small>
                                </div>
                                <span class="label label-success label-mini msg-lable">New</span>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification">
                                <img class="notif-image img-circle" src="img/authors/avatar1.jpg" alt="avatar-image">
                                <div class="notif-body">
                                    <strong>Franklin</strong> Liked <strong>Trending Designs</strong> Post.
                                    <br>
                                    <small>5 days ago</small>
                                </div>
                            </a>
                        </li>
                        <li class="dropdown-footer"><a href="javascript:void(0)">View All messages</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                
            </ul>
        </div>
    </nav>
</header>
<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-aside">
        <!-- sidebar: style can be found in sidebar-->
        <section class="sidebar">
            <div id="menu" role="navigation">
                <div class="nav_profile">
                    <div class="media profile-left">
                        <a class="pull-left profile-thumb" href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/img/ksb.png" class="img-circle" alt="User Image">
                        </a>
                        <div class="content-profile">
                            <h4 class="media-heading">
                                <?php echo $userdata['nama']; ?>
                            </h4>
                            <p>Admin</p>
                        </div>
                    </div>
                </div>
                <ul class="navigation">
                    <li>
                        <a href="<?php echo site_url('baru'); ?>">
                            <i class="menu-icon fa fa-fw fa-home"></i>
                            <span class="mm-text ">Baru</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('belajar'); ?> ">
                            <i class="menu-icon fa fa-fw fa-dashboard"></i>
                            <span class="mm-text ">Belajar</span>
                        </a>
                    </li>
                    
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-check-square"></i>
                            <span>Forms</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            
                            <li>
                                <a href="form_features.html">
                                    <i class="fa fa-fw fa-file-text-o"></i> Form Features
                                </a>
                            </li>
                            <li>
                                <a href="form_components.html">
                                    <i class="fa fa-fw fa-warning"></i> Form Components
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="typography.html">
                            <i class="menu-icon fa fa-fw fa-table"></i>
                            <span class="mm-text ">Typography</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span>
                                    UI Components
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="notifications.html">
                                    <i class="fa fa-fw fa-flag"></i> Notifications
                                </a>
                            </li>
                            <li>
                                <a href="icons.html">
                                    <i class="fa fa-fw fa-font"></i> Icons
                                </a>
                            </li>
                            <li>
                                <a href="timeline.html">
                                    <i class="fa fa-fw fa-columns"></i> Timeline
                                </a>
                            </li>
                            <li>
                                <a href="alerts.html">
                                    <i class="fa fa-fw fa-suitcase"></i> Alerts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="widgets.html">
                            <i class="menu-icon fa fa-fw fa-shopping-basket"></i>
                            <span class="mm-text "> Widgets</span>
                        </a>
                    </li>
                    <li>
                        <a href="calendar.html">
                            <i class="menu-icon fa fa-fw fa-calendar"></i>
                            <span>Calendar</span>
                        </a>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-bar-chart-o"></i>
                            <span>Charts</span> <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="flot_knob_charts.html">
                                    <i class="fa fa-fw fa-area-chart"></i> Flot & Knob Charts
                                </a>
                            </li>
                            <li>
                                <a href="advanced_charts.html">
                                    <i class="fa fa-fw fa-line-chart"></i> Advanced Charts
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#"> <i class="menu-icon fa fa-table"></i>
                            <span>Tables</span>
                            <span class="fa arrow">
                                </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="simple_tables.html">
                                    <i class="fa fa-fw fa-tasks"></i> Simple tables
                                </a>
                            </li>
                            <li>
                                <a href="advanced_tables.html">
                                    <i class="fa fa-fw fa-table"></i> Advanced Tables
                                </a>
                            </li>
                            <li>
                                <a href="responsive_datatables.html">
                                    <i class="fa fa-fw fa-table"></i> Responsive DataTables
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-fw fa-users"></i>
                            <span>Users</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="user_profile.html">
                                    <i class="fa fa-fw fa-user-md"></i> User Profile
                                </a>
                            </li>
                            <li>
                                <a href="addnew_user.html">
                                    <i class="fa fa-fw fa-user"></i> Add New User
                                </a>
                            </li>
                            <li>
                                <a href="users_list.html">
                                    <i class="fa fa-list" aria-hidden="true"></i> Users List
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="gv_maps.html">
                            <i class="menu-icon fa fa-map-marker"></i>
                            <span>Maps</span>
                        </a>
                    </li>
                    <li class="menu-dropdown ">
                        <a href="#">
                            <i class="menu-icon fa fa-files-o"></i>
                            <span>Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="session_timeout.html">
                                    <i class="fa fa-fw fa-list-alt"></i> Session Timeout
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-fw fa-sign-in"></i> Login
                                </a>
                            </li>
                            <li>
                                <a href="register.html">
                                    <i class="fa fa-fw fa-sign-out"></i> Register
                                </a>
                            </li>
                            <li>
                                <a href="forgot_password.html">
                                    <i class="fa fa-fw fa-bars"></i> Forgot Password
                                </a>
                            </li>
                            <li>
                                <a href="reset_password.html">
                                    <i class="fa fa-fw fa-th-large"></i> Reset Password
                                </a>
                            </li>
                            <li>
                                <a href="lockscreen.html">
                                    <i class="fa fa-fw fa-lock"></i> Lockscreen
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown active">
                        <a href="#">
                            <i class="menu-icon fa fa-th"></i>
                            <span>Extra Pages</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="active" id="active">
                                <a href="blank.html">
                                    <i class="fa fa-fw fa-file-o"></i> Blank
                                </a>
                            </li>
                            <li>
                                <a href="invoice.html">
                                    <i class="fa fa-fw fa-newspaper-o"></i> Invoice
                                </a>
                            </li>
                            <li>
                                <a href="contact_us.html">
                                    <i class="fa fa-fw fa-phone"></i> Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="404.html">
                                    <i class="fa fa-fw fa-unlink"></i> 404 Error
                                </a>
                            </li>
                            <li>
                                <a href="500.html">
                                    <i class="fa fa-fw fa-frown-o"></i> 500 Error
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-dropdown">
                        <a href="#">
                            <i class="menu-icon fa fa-sitemap"></i>
                            <span>
                                    Menu levels
                                </span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-fw fa-sitemap"></i> Level 1
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-fw fa-sitemap"></i> Level 1
                                    <span class="fa arrow"></span>
                                </a>
                                <ul class="sub-menu sub-submenu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-fw fa-sitemap"></i> Level 2
                                            <span class="fa arrow"></span>
                                        </a>
                                        <ul class="sub-menu sub-submenu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-fw fa-sitemap"></i> Level 3
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- / .navigation -->
            </div>
            <!-- menu -->
        </section>
        <!-- /.sidebar -->
    </aside>
    <aside class="right-aside view-port-height">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1><?php echo $subtitle; ?></h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <?php echo $content; ?>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </aside>
    <!-- /.right-side -->
</div>
<!-- ./wrapper -->
<!-- global js -->
<script src="<?php echo base_url(); ?>assets/js/app.js" type="text/javascript"></script>
<!-- end of page level js -->
</body>

</html>
