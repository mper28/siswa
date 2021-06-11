<!doctype html>
<html lang="en">
<head>
	<title>Tambah Data Siswa</title>
</head>

<body>
	<h1>Tambah Data Siswa</h1>
	<a href="siswa.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>NIS</label>
		<br>
		<input type="text" name="nis">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama"><br>
		<label>Semester</label>
		<br>
		<input type="text" name="semester">
		<br>
		<label>Alamat</label>
		<br>
		<input type="text" name="alamat">
		<br>
		<label>No.Telp</label>
		<br>
		<input type="text" name="no_tlp">
		<br>
		<label>Email</label>
		<br>
		<input type="text" name="email">
		<br><br>
		<button type="submit" name="submit_simpan_siswa">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>