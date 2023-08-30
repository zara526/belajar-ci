<style>
	.btn-hps{
			background-color: red;
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
		<p>Yakin ingin menghapus produk <?= $hasil->kode_prod;?><?= $hasil->name_prod;?></p>
		<input type="hidden"name="kode_prod" value="<?= $hasil->kode_prod;?>">
	<button id="tombol_hapus" type="button" class="btn btn-hps" data-dismiss="modal">Hapus</button>
								
</form>
<script>
	$(document).ready(function(){
		$("#tombol_hapus").click(function(){
			var data = $('#form').serialize();
			$.ajax({
				type: 'POST',
				url: "<?= base_url()?>welcome/hpsprod",
				data: data,
				cache: false,
				success: function(data){
					$('#tampil').load("<?= base_url()?>welcome/tampilanProd");
				}
			});
		});
	});
</script>
