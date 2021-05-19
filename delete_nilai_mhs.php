<?php 
//if(isset($_REQUEST['id'])){
if(isset($_GET['id'])){
	include "conn.inc.php";
	$id = $_GET['id'];
	$id2 = $_GET['id2'];

	$query  = "DELETE FROM nilai WHERE nim = '$id' and kd_mtk = '$id2' ";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Dihapus');window.location='retreive_nilai_mhs.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus');window.location='retreive_nilai_mhs.php';
			  </script>";
	}
	mysqli_close($conn);
}
?>