<?php 
//if(isset($_REQUEST['id'])){
if(isset($_GET['id'])){
	include "conn.inc.php";
	$id = $_GET['id'];

	//$query  = "DELETE FROM mahasiswa WHERE nim = '$_REQUEST[id]'";
	$query  = "DELETE FROM mahasiswa WHERE nim = '$id'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Dihapus');window.location='retreive_mahasiswa.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus, Cek data NIM nya digunakan oleh Tabel Nilai atau tidak');window.location='retreive_mahasiswa.php';
			  </script>";
	}
	mysqli_close($conn);
}
?>