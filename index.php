<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

	
<title>>Data Siswa SMA Negeri 3 Kota Cirebon Tugas 8 Ramadhan FeriAnsyah</title>
</head>
<body>
 <div class="p-3 mb-2 bg-dark text-white"><b>Data Siswa SMA Negeri 3 Kota Cirebon Tugas 8 Ramadhan FeriAnsyah</b></a></div></div>
        
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
    <a class="nav-link" href="siswa.php">Siswa-Siswi</a>
    </li>
    <a class="nav-link" href="index.php">Nilai</a>
      </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="p-3 mb-2 bg-info text-white"><h1>Data Nilai Siswa</h1></div>
    
    <a href="create.php">Tambah Data</a>
    <br>
    <a href="print.php" target="_blank">Cetak Data</a>
    <br><br>
    <table border="1">
    <thead>
    <tr>
<th>No.</th>
<th>NIM</th><th>Nama</th>
<th>UTS</th>
<th>UAS</th>
<th>Tugas</th>
<th>NA</th>
<th>Status</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->nis ?></td>
<td><?=$data->nama ?></td>
<td><?=$data->uts ?></td>
<td><?=$data->uas ?></td>
<td><?=$data->tugas ?></td>
<td><?=$data->na ?></td>
<td><?=$data->status ?></td>
<td><a name="edit" nis="edit" 
href="edit.php?nis=<?=$data->nis ?>">Edit</a>
<a name="hapus" nis="hapus" 
href="proses.php?nis=<?=$data->nis ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel nilai Siswa</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>