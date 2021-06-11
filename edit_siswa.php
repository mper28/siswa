<?php
$nis = $_GET['nis'];
include 'model.php';
$model = new Model();
$data = $model->edit_siswa($nis);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Data Siswa</title>
</head>

<body>
	<h1>Edit Data Siswa</h1>
	<a href="siswa.php">Kembali</a>
	<br><br>
	<form action="proses.php" method="post">
		<label>NIS</label>
		<br>
		<input type="text" name="nis" value="<?php echo $data->nis ?>">
		<br>
		<label>Nama</label>
		<br>
		<input type="text" name="nama" value="<?php echo $data->nama ?>">
		<br>
		<label>Semester</label>
		<br>
		<input type="text" name="semester" value="<?php echo $data->semester ?>">
		<br><label>Alamat</label>
		<br>
		<input type="text" name="alamat" value="<?php echo $data->alamat ?>">
		<br>
		<label>No.Telp</label>
		<br>
		<input type="text" name="no_tlp" value="<?php echo $data->no_tlp ?>">
		<br>
		<label>Email</label>
		<br>
		<input type="text" name="email" value="<?php echo $data->email ?>">
		<br><br>
		<button type="submit" name="submit_edit_siswa">Submit</button>
	</form>
</body>
</html>