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
        <li class="nav-item">
          <a class="nav-link" href="index.php">Nilai</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="p-3 mb-2 bg-info text-white"><h1>Data Siswa-Siswi</h1></div>
<a href="create_siswa.php">Tambah Data</a>
<br>
<a href="print_siswa.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
  <thead>
    <tr>
      <th>No.</th>
      <th>NIS</th>
      <th>Nama</th>
      <th>Semester</th>
      <th>Alamat</th>
      <th>No.Telp</th>
      <th>Email</th>
      <th>Aksi</th>
    </tr>
  </thead>
<tbody>

<?php
$result = $model->tampil_data_siswa();
if ( !empty($result) ) {
  foreach ($result as $data): ?>
    <tr>
      <td><?=$index++ ?></td>
      <td><?=$data->nis ?></td>
      <td><?=$data->nama ?></td>
      <td><?=$data->semester ?></td>
      <td><?=$data->alamat ?></td>
      <td><?=$data->no_tlp ?></td>
      <td><?=$data->email ?></td>
      <td><a name="edit" nis="edit" href="edit_siswa.php?nis=<?=$data->nis ?>">Edit</a>
      <a name="hapus_siswa" nis="hapus_siswa" href="proses.php?nis=<?=$data->nis ?>">Delete</a>
      </td>
    </tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel  Siswa</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>