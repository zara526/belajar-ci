<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="app-url" content="<?= base_url('/')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ayosh Company | Table Product</title>
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/dataTables.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/buttons.bootstrap4.min.css')?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('assets/plugins/datatables/responsive.bootstrap4.min.css')?>" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="<?php  echo base_url('')?>https://cdn.datatables.net/rowreorder/1.4.1/css/rowReorder.dataTables.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php  echo base_url('')?>https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
	<script src="<?= base_url('')?>https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="<?= base_url('')?>https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="<?= base_url('')?>https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
	<style>
		.btn-tambah, .btn-edit, .btn-hps{
			background-color: #4f5962;
			border: none;
			border-radius: 10px;
			text-decoration: none;
			color: white;
			padding: 10px 10px;
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
					<h1>Data Product Ayosh Company</h1>
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
						<a class="btn-tambah" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus-circle" style="padding: 5px;"></i>Tambah</a>
					 <br>
					<br>
					<table border="1" id="example2" class="table table-bordered table-hover display nowrap">
						<thead>
						<tr>
							<td>No</td>
							<td>Kode Produksi</td>
							<td>Nama</td>
							<td>Harga</td>
							<td>Aksi</td>
						</tr>
						</thead>
						<tbody>
						<?php 
							$count = 1;
							foreach($hasil as $item){ 
								
						?>
						<tr>
							<td><?php echo $count ?></td>
							<td><?php echo $item->kode_prod ?></td>
							<td><?php echo $item->name_prod ?></td>
							<td><?php echo $item->harga ?></td>
							<td><button type="button" kode_prod="<?= $item->kode_prod;?>" class="btn-edit">Edit</button> | <button tyep="button" kode_prod="<?= $item->kode_prod?>" class="btn-hps">Delete</button></td>
						</tr>
						<?php 
							$count++;
						}?>
						</tbody>
					</table>
			
	<!-- Modal -->
	<div class="modal fade" role="dialog" id="tambahModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<!--Modal Header -->
							<div class="modal-header">
								<h5 class="modal-title" id="judul"></h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- Modal Body -->
							<div class="modal-body">
								<div id="tampil_modal">
									
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								
							</div>
						  </div>
						</div>
					  </div>
					</div>
					</div>
				</div>
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
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="crossorigin="anonymous"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script>
	$(document).ready(function(){
		$("#example2").DataTable();
	});
</script>
<script>
	$(document).ready(function(){
		$('.tambah').click(function(){
			var aksi = 'Tambah Produk';
			$.ajax({
				url: '<?= base_url(); ?>welcome/tambah',
				method: 'post',
				data: {aksi:aksi},
				success: function(data){
					$('#tambahModal').modal("show");
					$('#tampil_mpdal').html(data);
					document.getElementById("judul").innerHTML='Tambah Product';
				}
			});
		});

		$('.edit').click(function(){
			var kode_prod = $(this).attr("kode_prod");
			$.ajax({
				url: '<?= base_url(); ?>welcome/edit',
				method: 'post',
				data: {kode_prod:kode_prod},
				success: function(data){
					$('#tambahModal').modal("show");
					$('#tampil_mpdal').html(data);
					document.getElementById("judul").innerHTML='Edit Product';
				}
			});
		});

		$('.hps').click(function(){
			var kode_prod = $(this).attr("kode_prod");
			$.ajax({
				url: '<?= base_url(); ?>welcome/hps',
				method: 'post',
				data: {kode_prod:kode_prod},
				success: function(data){
					$('#tambahModal').modal("show");
					$('#tampil_mpdal').html(data);
					document.getElementById("judul").innerHTML='Hapus Product';
				}
			});
		});
	})
	
	
</script>
</body>
</html>
