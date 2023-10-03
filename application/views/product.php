<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="app-url" content="<?= base_url('/')?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	
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
						<a class="btn-tambah" id="btn-tambah" data-toggle="modal" data-target="#tambahModal"><i class="fa fa-plus-circle" style="padding: 5px;"></i>Tambah</a>
					 <br>
					<br>
					<table border="1" id="mytable" class="table table-bordered table-hover display nowrap">
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
							foreach($hasil as $row){ 
								
						?>
						<tr>
							<td><?php echo $count ?></td>
							<td><?php echo $row->kode_prod ?></td>
							<td><?php echo $row->name_prod ?></td>
							<td><?php echo $row->harga ?></td>
							<td><button  type="button" id="<?php echo $row->kode_prod;?>" data-toggle="modal" data-target="#editModal" class="btn-edit">Edit</button> | <button type="button" onclick="hpsprod('<?php echo $row->kode_prod?>')" class="btn-hps">Delete</button></td>
						</tr>
						<?php 
							$count++;
						}?>
						</tbody>
					</table>
			
	<!-- Modal Tambah-->
	<div class="modal fade" role="dialog" id="tambahModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<!--Modal Header -->
							<div class="modal-header">
								<h5 class="modal-title"> Form Tambah Produk</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- Modal Body -->
							<div class="modal-body">
							<form method="post" id="form-add">
								<div class="form-group">
									<label for="">Kode Produksi</label>	
									<input type="text" name="kode_prod" id="kode_prod" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" id="name_prod" name="name_prod" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Harga</label>
									<input type="number" id="harga" name="harga" class="form-control">
								</div>						
							</form>	
									
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button id="simpan-btn" type="button" class="btn btn-primary">Add</button>
						  	</div>
						</div>
					</div>
				</div>
			</div>
		 </div>
	</div>

	<!-- Modal Edit -->
	<div class="modal fade" role="dialog" id="editModal" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<!--Modal Header -->
							<div class="modal-header">
								<h5 class="modal-title"> Form Edit Produk</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<!-- Modal Body -->
							<di class="modal-body">
							<form method="post" id="form-edit">
								<div class="form-group">
									<label for="">Kode Produksi</label>	
									<input type="text" name="kode_prod" id="kode_prod" value="<?= $row->kode_prod; ?>" class="form-control" readonly>
								</div>
								<div class="form-group">
									<label for="">Nama</label>
									<input type="text" id="name_prod" name="name_prod" value="<?= $row->name_prod; ?>" class="form-control">
								</div>
								<div class="form-group">
									<label for="">Harga</label>
									<input type="number" id="harga" name="harga" value="<?= $row->harga; ?>" class="form-control">
								</div>
															
							</form>		
									
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
								<button id="save-edit" type="button" class="btn btn-primary">Update</button>
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

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.7.0.js"></script>

<!-- Bootstrap 4 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Datatables-->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php  echo base_url('assets/dist/js/adminlte.js'); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php  echo base_url('assets/dist/js/demo.js'); ?>"></script>
<script>
	var base_url = '<?= base_url()?>'
	var kode = '<?php echo $row->kode_prod ?>'
</script>
<script src="<?php  echo base_url('assets/js/product.js'); ?>"></script>

</body>
</html>
