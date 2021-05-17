<?php 
if(isset($_REQUEST['id'])){
	include "conn.inc.php";

	$query  = "DELETE FROM mahasiswa WHERE nim = '$_REQUEST[id]'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Dihapus');window.location='retreive_mahasiswa.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Dihapus');window.location='retreive_mahasiswa.php';
			  </script>";
	}
	mysqli_close($conn);
}
?>