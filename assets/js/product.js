var table,modal_edit=$('#editModal');
$(document).ready(function(){
	table=$("#mytable").DataTable();
}); 
$(document).ready(function(){
		var tambahModal = $('#tambahModal');
		$('#simpan-btn').click(function(){
			var kode_prod = $('#kode_prod').val();
			var name_prod = $('#name_prod').val();
			var harga = $('#harga').val();
			var url =   base_url +'welcome/simpanprod'
			var data ={ kode_prod: kode_prod, name_prod: name_prod, harga: harga};

		$.ajax({
			type: "POST",
			url: url,
			data: data,
			dataType:'JSON',
			success: function(response){
				console.log(response)
				if(response.status==200){
					tambahModal.modal('hide');
					location.reload();
					// table.ajax.reload()
				}else{
					alert("Gagal Menyimpan Data!")
				}
			}
		});
	});
	 
	var editModal = $('#editModal')
	$('.btn-edit').click(function(){
		var kode_prod= $(this).attr('id');
		$.ajax({
			type: "POST",
			url: base_url+'welcome/get_kodeprod',
			data: {kode_prod:kode_prod},
			dataType: "JSON",
			success: function(data){
				console.log(data)
				modal_edit.find('#kode_prod').val(data.kode_prod);
				modal_edit.find('#name_prod').val(data.name_prod);
				modal_edit.find('#harga').val(data.harga);
			}
		});
		// }
	});

	$('#save-edit').click(function(){
		var kode_prod= $('#kode_prod').val();
		var name_prod= $('#name_prod').val();
		var harga= $('#harga').val();
		var url =base_url +'welcome/ubahprod'
		var data ={ kode_prod: kode_prod, name_prod: name_prod, harga: harga};
		
		$.ajax({
			type: "POST",
			url: url,
			data: data,
			dataType: "JSON",
			success: function(response){
				if(response.status==200){
					modal_edit.modal('hide');
					location.reload();
				}else{
					alert("Gagal Mengedit Data!")
				}
			}
		});
	});

	$('.btn-hps').click(function(){
		var kode_prod= $(this).data('kode_prod');
		
		if(confirm('Anda yakin ingin menghapus produk ini?')){
		$.ajax({
			type: "POST",
			url: base_url+'welcome/hpsprod',
			data: {kode_prod:kode_prod},
			dataType: "JSON",
			success: function(response){
				if(response.status){
					editModal.modal('hide');
					location.reload();
				}else{
					alert("Gagal Menghapus Data!")
				}
			}
		});
	  }
	});
})

