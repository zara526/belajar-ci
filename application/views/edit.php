<style>
	.btn-edit{
			background-color:#00bfff;
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
</style>
<form method="post" id="form">
	<div class="form-group">
		<label for="">Kode Produksi</label>	
		<input type="text" name="kode_prod" id="nkode_prod" value="<?= $hasil->kode_prod; ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" id="name_prod" name="name_prod" value="<?= $hasil->name_prod; ?>"class="form-control">
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="number" id="harga" name="harga" value="<?= $hasil->harga; ?>" class="form-control">
	</div>
	<button id="tombol_edit" type="button" class="btn btn-edit" data-dismiss="modal">Update</button>
								
</form>
<script>
	$(document).ready(function(){
		$("#tombol_edit").click(function(){
			var data = $('#form').serialize();
			$.ajax({
				type: 'POST',
				url: "<?= base_url()?>welcome/ubahprod",
				data: data,
				cache: false,
				success: function(data){
					$('#tampil').load("<?= base_url()?>welcome/tampilanProd");
				}
			});
		});
	});
</script>
