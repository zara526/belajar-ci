<style>
	.btn-tambah{
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
</style>
<form method="post" id="form">
	<div class="form-group">
		<label for="">Kode Produksi</label>	
		<input type="text" name="kode_prod" id="nkode_prod" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Nama</label>
		<input type="text" id="name_prod" name="name_prod" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Harga</label>
		<input type="number" id="harga" name="harga" class="form-control">
	</div>
	<button id="tombol_tambah" type="button" class="btn btn-tambah" data-dismiss="modal">Add</button>
								
</form>
<script>
	$(document).ready(function(){
		$("#tombol_tambah").click(function(){
			var data = $('#form').serialize();
			$.ajax({
				type: 'POST',
				url: "<?= base_url()?>welcome/simpanprod",
				data: data,
				cache: false,
				success: function(data){
					$('#tampil').load("<?= base_url()?>welcome/tampilanProd");
				}
			});
		});
	});
</script>
