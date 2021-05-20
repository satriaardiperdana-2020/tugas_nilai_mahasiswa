<?php 
//if(isset($_REQUEST['id'])){
if(isset($_GET['id'])){
	include "conn.inc.php";
	$id = $_GET['id'];

	//$query  = "DELETE FROM mahasiswa WHERE nim = '$_REQUEST[id]'";
	$query  = "DELETE FROM matakuliah WHERE kd_mtk = '$id'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Dihapus');window.location='retreive_matakuliah.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus, Cek data Kode MAtakuliahnya nya digunakan oleh Tabel Nilai atau tidak');window.location='retreive_matakuliah.php';
			  </script>";
	}
	mysqli_close($conn);
}
?>