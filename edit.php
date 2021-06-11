<?php
$id = $_GET['nis'];
include 'model.php';
$model = new Model();
$data = $model->edit($id);?>
<!doctype html>
<html lang="en">
<head>
	<title>Edit Nilai Siswa</title>
</head>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Nilai Siswa</title>
</head>

<body>
	<h1>Edit Nilai Siswa</h1>
	<a href="index.php">Kembali</a>
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
		<label>UTS</label>
		<br>
		<input type="text" name="uts" value="<?php echo $data->uts ?>">
		<br><label>Tugas</label>
		<br>
		<input type="text" name="tugas" value="<?php echo $data->tugas ?>">
		<br>
		<label>UAS</label>
		<br>
		<input type="text" name="uas" value="<?php echo $data->uas ?>">
		<br><br>
		<button type="submit" name="submit_edit">Submit</button>
	</form>
</body>
</html>