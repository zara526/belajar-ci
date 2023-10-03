<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Other Product</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css'); ?> ?>">
	
</head>

<body>
	<div class="content-wrapper">
		<section class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
				<a href="<?= base_url('welcome/index')?>"><i class=" fa fa-solid fa-arrow-left" style="margin:20px"></i></a>
					<h1 style="margin-left: 730px; margin-top: 10px;">Ajax Datatable</h1>
				</div>
			</div>
		</section>
		<section class="content">
			<div class="container-fluid">
				<div class="row">

					<button type="button" class="btn btn-outline-primary mb-3" onclick="tambah()" style="margin-left:25px"><i class="fa fa-plus-circle" style="padding: 5px;left: 300px;"></i>
						Tambah
					</button>
					<!-- Modal -->

				</div>

				<div class="card">
					<div class="card-body">
						<table id="table" class="table table-bordered table-hover display nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode</th>
									<th>Nama</th>
									<th>Harga</th>
									<th>Stok</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>

							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
		<div class="modal fade" tabindex="-1" id="inimodal" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="judulModal">Modal title</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body form">
						<form action="#" id="formModal">
							<input type="hidden" id="kode" name="kode" value="">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" id="nama" class="form-control">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="number" id="harga" name="harga" class="form-control">
								<div class="invalid-feedback"></div>
							</div>
							<div class="form-group">
								<label for="stok">Stok</label>
								<input type="number" id="stok" name="stok" class="form-control">
								<div class="invalid-feedback"></div>
							</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
						<button type="button" class="btn btn-primary" id="btnSimpan" onclick="simpan()">Save</button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- JQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


	<!-- Sweetalert -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<!-- Bootstrap 4 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Datatables-->
	<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
	` <script>
		var save;
		var modal = $('#inimodal');
		var tabel = $('#table');
		var form = $('#formModal');
		var judulModal = $('#judulModal');
		var simpann = $('#btnSimpan');


		$(document).ready(function() {
			tabel.DataTable({
				paging: true,
				searching: true,
				ordering: true,
				info: true,
				processing: true,
				serverSide: true,
				responsive: true,
				dom: '<"row px-1" <"col-md-6 col-12" l> <"col-md-6 col-12" f>>rt<"row px-1" <"col-md-6 col-12" i> <"col-md-6 col-12" p>>',
				order: [],
				"ajax": {
					"url": "<?= base_url('serverside/get_data') ?>",
					"type": "POST",
				},
				"columnDefs": [{
					"target": [-1],
					"orderable": false
				}]
			});
		});

		function reloadTable() {
			tabel.DataTable().ajax.reload();
		}

		function message(icon, text) {
			Swal.fire({
				icon: icon,
				title: 'Ini Datatable Serverside',
				text: text,
				showConfirmButton: false,
				showCloseButton: false,
				timer: 3000,
				timerProgressBar: true,
			});
		}

		function deleteQuestion(kode, nama) {
			Swal.fire({
				title: 'Apakah Anda Yakin?',
				text: "Akan menghapus data " + nama + "?",
				icon: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#00bfff',
				cancelButtonColor: '#959595',
			}).then((result) => {
				if (result.isConfirmed) {
					delete_Data(kode);
				}
			})
		}

		function tambah() {
			save = 'tambah';
			form[0].reset();
			modal.modal('show');
			judulModal.text('Tambah Produk');
		}

		function simpan() {
			simpann.text('Mohon tunggu...');
			simpann.attr('disabled', true);
			if (save == 'tambah') {
				url = "<?= base_url('serverside/create'); ?>"
			} else {
				url = "<?= base_url('serverside/update'); ?>"
			}

			$.ajax({
				type: "POST",
				url: url,
				data: form.serialize(),
				dataType: "JSON",
				success: function(response) {
					
					if (response.status == 'success') {
						$('#inimodal').modal('hide');
						reloadTable();
						if (save == 'tambah') {
							message('success', 'Data Berhasil ditambahkan');
						} else {
							message('success', 'Data berhasil diedit');
						}
					} else {
						if (response.inputerror) {
							for (var i = 0; i < response.inputerror.length; i++) {
								$('[name="' + response.inputerror[i] + '"]').addClass('is-invalid');
								$('[name="' + response.inputerror[i] + '"]').next().text(response.error_string[i]);
							}
						}
					}
					simpann.text('Simpan Data');
					simpann.attr('disabled', false);
				},
				error: function() {
					message('error', 'Terjadi kesalahan, silahkan ulangi kembali');
				}
			});
		}

		function get_kode(kode, type) {
			if (type == 'edit') {
				save = 'edit';
				form[0].reset();
			}

			$.ajax({
				type: "GET",
				url: "<?= base_url('serverside/get_kode/') ?>" + kode,
				dataType: "JSON",
				success: function(response) {
					if (type == 'edit') {
						form.find('input').removeClass('is-invalid');
						judulModal.text('Edit Produk');
						simpann.text('Update');
						simpann.attr('disabled', false);
						$('[name="kode"]').val(response.kode);
						$('[name="nama"]').val(response.nama);
						$('[name="harga"]').val(response.harga);
						$('[name="stok"]').val(response.stok);
						modal.modal('show');
					} else {
						deleteQuestion(response.kode, response.nama);
					}
				},
				error: function() {
					message('error', 'Terjadi kesalahan, silahkan ulangi kembali');
				}
			});
		}

		function delete_Data(kode) {
			$.ajax({
				type: "POST",
				url: "<?= base_url('serverside/delete/') ?>" + kode,
				dataType: "JSON",
				success: function(response) {
					reloadTable();
					message('success', 'Data Produk berhasil di hapus');
				},
				error: function() {
					message('error', 'Terjadi kesalahan, silahkan ulangi kembali');
				}
			});
		}
	</script>
</body>

</html>
