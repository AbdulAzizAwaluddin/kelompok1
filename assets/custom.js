$(document).on("click", '.tombol', function(e)
{

	var id = $(this).data('id');
	var nim = $(this).data('nim');
	var nama = $(this).data('nama');
	var pass = $(this).data('pass');
	var kelas = $(this).data('kelas');

	$(".id").val(id);
	$(".nim").val(nim);
	$(".nama").val(nama);
	$(".pass").val(pass);

	if (kelas == 'A') {
		$("#klsa").attr('selected', true);
	}else if (kelas == 'B') {
		$("#klsb").attr('selected', true);
	}else if (kelas == 'C') {
		$("#klsc").attr('selected', true);
	};

	$(".edit").text('Edit From for"'+ nama +'"');
	$(".delete").html('Apakah Anda Akan Menghapus Data Dengn Nama<strong>"'+ nama +'"<strong >?');

	$('#pass').tooltip({
		'placement': 'top',
		'title': 'kosongkan kolom password bila tidak ada perubahan',
		'trigger': 'focus'
	})
}