<h2>Hapus siswa</h2>
<form method="POST" enctype=multipart/form-data>
 	<label>Nama</label>
	<input type="text" name="nm"><br>
	<button type="submit" name="kirim">Simpan</button>
</form>

<?php
include 'class.php';
if(isset($_POST['kirim'])){
	$siswa -> delete_siswa($_POST['nm']);
	echo "<script>alert('data terhapus');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>