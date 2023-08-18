<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Halaman Edit User</title>
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
<section class="content">
      <div class="container-fluid">
		<h1>Halaman Edit User</h1>
		<form action="<?php echo base_url('welcome/ubah') ?>" method="POST">
		<table>
			<tr>
				<td>Id</td>
				<td>:</td>
				<td><input type="text" name="id" value="<?php echo $queryUbahu->id ?>" readonly></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text"  name="name" value="<?php echo $queryUbahu->name ?>"></td>
			</tr>
			<tr>
				<td>Posisi</td>
				<td>:</td>
				<td><input type="text" name="posisi" value="<?php echo $queryUbahu->posisi ?>"></td>
			</tr>
			<tr>
				<td colspan="2"><button type="submit">Update</button></td>
			</tr>
		</table>
	</form>
</div>
</section>

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
