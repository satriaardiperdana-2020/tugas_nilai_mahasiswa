<?php
$host = 'localhost';
$user = 'satria';
$pass = 'Sap123456789';
$db   = 'tugas_nilai_mhs_satria';
$conn = mysqli_connect($host, $user, $pass, $db);

if(!$conn){
	echo "Koneksi Error: ". mysqli_connect_error();
	exit();
} 
//echo "Koneksi berhasil";

?>