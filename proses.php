<?php
include 'model.php';

// tabel nilai
if (isset($_POST['submit_simpan'])) {
 $nis = $_POST['nis']; 
 $nama = $_POST['nama'];
 $uts = $_POST['uts'];
 $uas = $_POST['uas'];
 $tugas = $_POST['tugas'];
 $model = new Model();
 $model->insert($nis, $nama, $uts, $uas, $tugas);
 header('location:index.php');
}
if (isset($_POST['submit_edit'])) {
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $uts = $_POST['uts'];
 $uas = $_POST['uas'];
 $tugas = $_POST['tugas'];
 $model = new Model();
 $model->update($nis, $nama, $uts, $tugas,$uas);
 header('location:index.php');
}
if (isset($_GET['nis'])) {
 $nis = $_GET['nis'];
 $model = new Model();
 $model->delete($nis);
 header('location:index.php');
}

// tabel siswa
if (isset($_POST['submit_simpan_siswa'])) {
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $email = $_POST['email'];
 $model = new Model();
 $model->insert_siswa($nis, $nama, $semester, $alamat, $no_tlp, $email);
 header('location:siswa.php');
}
if (isset($_POST['submit_edit_siswa'])) {
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $semester = $_POST['semester'];
 $alamat = $_POST['alamat'];
 $no_tlp = $_POST['no_tlp'];
 $email = $_POST['email'];
 $model = new Model();
 $model->update_siswa($nis, $nama, $semester, $alamat, $no_tlp, $email);
 header('location:siswa.php');
}
if (isset($_GET['nis'])) {
 $nis = $_GET['nis'];
 $model = new Model();
 $model->delete_siswa($nis);
 header('location:siswa.php');
}
