<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ayosh company | Add User</title>
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
	<style>
		.btn-tambah, .btn-edit, .btn-hps{
			background-color: #4f5962;
			border: none;
			border-radius: 10px;
			text-decoration: none;
			color: white;
			padding: 10px 14px;
			text-align: center;
			display: inline-block;
			font-size: 13px;
			margin: 4px 2px;
			cursor: pointer;
		}

		.btn-edit{
			background-color:#00bfff;
		}

		.btn-hps{
			background-color: red;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User Ayosh Company</h1>
          </div>
		</div>
	  </div>
	</section>
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
			<div class="card-body">
			<a href="<?php echo base_url('welcome/add_user')?>" class="btn-tambah">Tambah</a>
			<br>
			<br>
			<table border="1" id="example2" class="table table-bordered table-hover">
				<tr>
					<td>No</td>
					<td>Id</td>
					<td>Name</td>
					<td>Position</td>
					<td>Action</td>
				</tr>
				<?php 
					$count = 0;
					foreach($queryAllU as $row){ //$row itu nama terserah
						$count = $count + 1;
				?>
				<tr>
					<td><?php echo $count ?></td>
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->name ?></td>
					<td><?php echo $row->posisi ?></td>
					<td><a href="<?php echo base_url('welcome/edit_user')?>/<?php echo $row->id ?>" class="btn-edit">Edit</a> | <a href="<?php echo base_url('welcome/hapus')?>/<?php echo $row->id ?>" class="btn-hps">Delete</a></td>
				</tr>
				<?php }?>
			</table>
		  </div>
		  </div>
	     </div>
	    </div>
	  </div>
	</section>
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

