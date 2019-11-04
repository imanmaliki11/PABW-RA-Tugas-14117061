<h2>Update siswa</h2>
<form method="POST" enctype=multipart/form-data>
    <label>Nama awal</label>
	<input type="text" name="nama"><br>

	<label>Nama baru</label>
	<input type="text" name="nm"><br>

	<label>Alamat baru</label>
	<textarea name="alamat"></textarea><br>

	<label>Foto baru</label>
	<input type="file" name="foto"><br>

	<button type="submit" name="kirim">Simpan</button>
</form>

<?php
include 'class.php';
if(isset($_POST['kirim'])){
	$siswa -> update_siswa($_POST['nama'],$_POST['nm'],$_POST['alamat'],$_FILES['foto']);
	echo "<script>alert('data terupdate');</script>";
	echo "<script>location='tampilsiswa.php';</script>";
}
?>