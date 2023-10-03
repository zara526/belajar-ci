<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Add User</title>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="<?php echo base_url('assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback'); ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?> ">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'); ?> ">
	<!-- Tempusdominus Bootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?> ">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?> ">
	<!-- JQVMap -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/jqvmap/jqvmap.min.css'); ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css'); ?> ">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css'); ?> ">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.css'); ?> ">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.css'); ?> ">

	<style>
		.container {
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			padding: 20px 25px;
			width: 430px;
			border: double 10px #4f5962;
			box-shadow: 0 0 10px rgba(255, 255, 255, .3);

		}

		.container h1 {
			text-align: left;
			color: #4f5962;
			margin-bottom: 30px;
		}

		.container table td {
			text-align: left;
			color: #4f5962;
		}

		.container form input {
			width: calc(100% - 5px);
			padding: 8px 10px;
			margin-bottom: 15px;
			border: none;
			background-color: #4f5962;
			color: #fff;
			font-size: 20px;
		}

		.btn-tambah {
			width: 350px;
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
	</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<a href="<?= base_url('welcome/table') ?>"><i class=" fa fa-solid fa-arrow-left" style="margin:20px"></i></a>
			</div>
		</div>
	</section>
	<section class="content">
		<div class="container">
			<h1>Halaman Add User</h1>
			<form action="<?php echo base_url('welcome/tambahin') ?>" method="POST">
				<table>
					<tr>
						<td>Id</td>
						<td>:</td>
						<td><input type="text" name="id"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="name"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td>:</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td>:</td>
						<td><input type="password" name="password"></td>
					</tr>
				</table>

				<button type="submit" class="btn-tambah">Add User</button>

			</form>
		</div>
	</section>

	<!-- jQuery -->
	<script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="<?php echo base_url('assets/plugins/jquery-ui/jquery-ui.min.js'); ?> "></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
		$.widget.bridge('uibutton', $.ui.button)
	</script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?> "></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url('assets/plugins/chart.js/Chart.min.js'); ?> "></script>
	<!-- Sparkline -->
	<script src="<?php echo base_url('assets/plugins/sparklines/sparkline.js'); ?>"></script>
	<!-- JQVMap -->
	<script src="<?php echo base_url('assets/plugins/jqvmap/jquery.vmap.min.js'); ?> "></script>
	<script src="<?php echo base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js'); ?>"></script>
	<!-- jQuery Knob Chart -->
	<script src="<?php echo base_url('assets/plugins/jquery-knob/jquery.knob.min.js'); ?>"></script>
	<!-- daterangepicker -->
	<script src="<?php echo base_url('assets/plugins/moment/moment.min.js'); ?> "></script>
	<script src="<?php echo base_url('assets/plugins/daterangepicker/daterangepicker.js'); ?>"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<script src="<?php echo base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'); ?> "></script>
	<!-- Summernote -->
	<script src="<?php echo base_url('assets/plugins/summernote/summernote-bs4.min.js'); ?> "></script>
	<!-- overlayScrollbars -->
	<script src="<?php echo base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'); ?> "></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url('assets/dist/js/demo.js'); ?>"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo base_url('assets/dist/js/pages/dashboard.js'); ?> "></script>
</body>

</html>
