<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ayosh company | Table User</title>
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="<?php  echo base_url('')?>https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('')?>https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
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
			<?php if($this->session->flashdata('status')):?>
				<div class="alert alert-success">
					<?= $this->session->flashdata('status');?>
				</div>
				<?php endif ?>
				<?php if($this->session->flashdata('s_hapus')):?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('s_hapus');?>
				</div>
				<?php endif;?>

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
					<a href="<?php echo base_url('welcome/add_user')?>" class="btn-tambah"><i class="fa fa-plus-circle" style="padding: 5px;"></i>Tambah</a>
					<br>
					<br>
					<table border="1" id="mytable" class="table table-bordered table-hover display nowrap">
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

<!--Datatable Responsive -->
<script src="<?= base_url('')?>https://cdn.datatables.net/rowreorder/1.4.1/js/dataTables.rowReorder.min.js"></script>
<script src="<?= base_url('')?>https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<!-- jQuery -->
<script src="<?php  echo base_url('assets/plugins/jquery/jquery.min.js'); ?>"></script>

<!-- AdminLTE App -->
<script src="<?php  echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url('assets/dist/js/demo.js'); ?>"></script>


</body>
</html>

