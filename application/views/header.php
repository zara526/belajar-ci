<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<title>AdminLTE 3 | Header</title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'); ?>">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?> ">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); ?> ">
		<!-- Tempusdominus Bootstrap 4 -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?> ">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?> ">
		<!-- JQVMap -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/dist/css/adminlte.min.css'); ?> ">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?> ">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?> ">
		<!-- summernote -->
		<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/summernote/summernote-bs4.min.css'); ?> ">
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<!-- Preloader -->
			<div class="preloader flex-column justify-content-center align-items-center">
				<img class="animation__shake" src="<?php  echo base_url('assets/dist/img/AdminLTELogo.png'); ?>" alt="AdminLTELogo" height="60" width="60">
			</div>
			
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!--Left Navbar -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="<?php  echo base_url('#'); ?> " role="button"><i class="fas fa-bars"></i></a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
				<a href="<?php  echo base_url('welcome/index3'); ?>" class="nav-link">Home</a>
			</li>
			<li class="nav-item d-none d-sm-inline-block">
        		<a href="<?php  echo base_url('#'); ?> " class="nav-link">Contact</a>
     		</li>
			 <li class="nav-item d-none d-sm-inline-block">
				<a href="<?php  echo base_url('auth/login'); ?>" class="nav-link">Login</a>
			</li>
			 <li class="nav-item d-none d-sm-inline-block">
				<a href="<?php  echo base_url('auth/logout'); ?>" class="nav-link">Logout</a>
			</li>
		</ul>

		<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
		<!--Navbar Search -->
		<li class="nav-item">
			<a class="nav-link" data-widget="navbar-search" href="<?php echo base_url('#');?>" role="button">
			<i class="fas fa-search"></i>
			</a>
			<div class="navbar-search-block">
				<form class="form-inline">
					<div class="input-group input-group-sm">
						<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
						 <i class="fas fa-search"></i>
						</button>
						<button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  			<i class="fas fa-times"></i>
                		</button>
					</div>
				</form>
			</div>
		</li>
		<!-- Message Dropdown-->
		<li class="nav-item dropdown">
			<a class="nav-link" data-toggle="dropdown"  href="<?php  echo base_url('#'); ?> ">
          	<i class="far fa-comments"></i>
		  	<span class="badge badge-danger navbar-badge">3</span>
        </a>
		<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="<?php  echo base_url('assets/#'); ?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php  echo base_url('assets/dist/img/orang2.jpg'); ?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Askandar Young
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
			</a>
          <div class="dropdown-divider"></div>
          <a href="<?php  echo base_url('#'); ?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php  echo base_url('assets/dist/img/orang5.jpg'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Gledek Abang
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="<?php  echo base_url('#'); ?>" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php  echo base_url('assets/dist/img/orang1.png'); ?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Alana Maudia
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Ini isi pesannya</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          	<a href="<?php  echo base_url('/#'); ?>" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
		</li>
		<!-- Notifications Dropdown Menu -->
		<li class="nav-item dropdown">
         <a class="nav-link" data-toggle="dropdown" href="<?php  echo base_url('#'); ?>">
           <i class="far fa-bell"></i>
           <span class="badge badge-warning navbar-badge">15</span>
         </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
           <div class="dropdown-divider"></div>
          	<a href="<?php  echo base_url('assets/#'); ?>" class="dropdown-item">
				<i class="fas fa-envelope mr-2"></i> 4 new messages
				<span class="float-right text-muted text-sm">3 mins</span>
          	</a>
          <div class="dropdown-divider"></div>
           <a href="<?php  echo base_url('assets/#'); ?>" class="dropdown-item">
				<i class="fas fa-users mr-2"></i> 8 friend requests
				<span class="float-right text-muted text-sm">12 hours</span>
           </a>
          <div class="dropdown-divider"></div>
			<a href="<?php  echo base_url('/assets/#'); ?>" class="dropdown-item">
				<i class="fas fa-file mr-2"></i> 3 new reports
				<span class="float-right text-muted text-sm">2 days</span>
			</a>
          <div class="dropdown-divider"></div>
          	<a href="<?php  echo base_url('assets/#'); ?>" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
      </li>
	  <!-- Fullscreen Menu -->
	  <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="<?php  echo base_url('assets/#'); ?>" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
	  <!-- Control Sidebar-->
	  <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="<?php  echo base_url('#'); ?>" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
	</ul>
		</nav>
			</div>
			

<!-- jQuery -->
<script src="<?php  echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php  echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?> "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php  echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
<!-- ChartJS -->
<script src="<?php  echo base_url('assets/plugins/chart.js/Chart.min.js'); ?> "></script>
<!-- Sparkline -->
<script src="<?php  echo base_url('assets/plugins/sparklines/sparkline.js'); ?>"></script>
<!-- JQVMap -->
<script src="<?php  echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?> "></script>
<script src="<?php  echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php  echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
<!-- daterangepicker -->
<script src="<?php  echo base_url('assets/plugins/moment/moment.min.js'); ?> "></script>
<script src="<?php  echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php  echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?> "></script>
<!-- Summernote -->
<script src="<?php  echo base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?> "></script>
<!-- overlayScrollbars -->
<script src="<?php  echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?> "></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url('assets/dist/js/demo.js'); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php  echo base_url('assets/dist/js/pages/dashboard.js'); ?> "></script>
</body>
</html>

