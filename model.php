<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();

 // tabel nilai
 }
public function insert($nis, $nama, $uts, $uas, $tugas)
{
	 $na = $this->na($uts,$tugas,$uas);
	 $status = $this->status($na); $sql = "INSERT INTO tbl_nilai (nis, nama, uts, uas, tugas, na, status) 
	 VALUES ('$nis', '$nama', '$uts', '$uas', '$tugas', '$na', '$status')";
	 $this->conn->query($sql);
}
public function na($uts,$tugas,$uas)
{
	 $na=(0.3*$uts)+(0.3*$tugas)+(0.4*$uas);
	 	return $na;
}
public function status($na)
{
	 $status="";
	 if($na >=60 && $na <=100){
	 	$status="Lulus";
	}else{
	 	$status="Tidak Lulus";
	}
	return $status;
}
public function tampil_data()
{
	 $sql = "SELECT * FROM tbl_nilai";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
		 return $baris;
	 }
}
public function edit($nis)
{
	 $sql = "SELECT * FROM tbl_nilai WHERE nis='$nis'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
	 	$baris = $obj;
	 }
	 return $baris;
}
public function update($nis, $nama, $uts, $tugas,$uas)
{
	 $na=$this->na($uts,$tugas,$uas);
	 $status=$this->status($na);
	 $sql = "UPDATE tbl_nilai SET nama='$nama', uts='$uts', uas='$uas', tugas='$tugas', na='$na',status='$status' WHERE nis='$nis'";
	 $this->conn->query($sql);
}
public function delete($nis)
{ 
	$sql = "DELETE FROM tbl_nilai WHERE nis='$nis'";
	$this->conn->query($sql);
}

// tabel siswa
 public function insert_siswa($nis, $nama, $semester, $alamat, $no_tlp, $email)
{
	$sql = "INSERT INTO tbl_siswa (nis, nama, semester, alamat, no_tlp, email) 
	VALUES ('$nis', '$nama','$semester', '$alamat', '$no_tlp', '$email')";
	$this->conn->query($sql);
}
public function tampil_data_siswa()
{
	 $sql = "SELECT * FROM tbl_siswa";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) { 
	 	$baris[] = $obj;
	 }
	 if(!empty($baris)){
	 	return $baris;
	 }
}
public function edit_siswa($nis)
{
	 $sql = "SELECT * FROM tbl_siswa WHERE nis='$nis'";
	 $bind = $this->conn->query($sql);
	 while ($obj = $bind->fetch_object()) {
		 $baris = $obj;
	 }
	 return $baris;
}
public function update_siswa($nis, $nama, $semester, $alamat, $no_tlp, $email)
{
	 $sql = "UPDATE tbl_siswa SET nama='$nama', semester='$semester', alamat='$alamat', no_tlp='$no_tlp', email='$email' WHERE nis='$nis'";
	 $this->conn->query($sql);
}
public function delete_siswa($nis)
{ 
	$sql = "DELETE FROM tbl_siswa WHERE nis='nis'";
	$this->conn->query($sql);
}
}