<?php 
include "conn.inc.php";
if(isset($_POST['submit'])){
	$vKdMTK	 = $_POST['vKdMTK'];
	$vNmMTK	 = $_POST['vNmMTK'];
	$vSks    = $_POST['vSks'];
	$vOldKdMTK = $_POST['vOldKdMTK'];

	$query = "UPDATE matakuliah SET kd_mtk='$vKdMTK', nm_mtk='$vNmMTK', SKS='$vSks' WHERE kd_mtk='$vOldKdMTK'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Diupdate');window.location='retreive_matakuliah.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Diupdate. Kode Matakuliah digunakan pada data nilai');window.location='retreive_matakuliah.php';
			  </script>";
	}
	mysqli_close($conn);

}else{
	if(isset($_REQUEST['id'])){
		$query  = "SELECT * FROM matakuliah WHERE kd_mtk = '$_REQUEST[id]'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)==1){
			$data = mysqli_fetch_assoc($result);
		}
	}
?>

<h1>Update Data Matakuliah</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<pre>
		Kode Matakuliah : <input type='text' name='vKdMTK' value="<?php echo $data['kd_mtk']; ?>" readonly>
		Nama Matakuliah : <input type='text' name='vNmMTK' value="<?php echo $data['nm_mtk']; ?>">
		SKS             : <input type='text' name='vSks' value="<?php echo $data['sks']; ?>">
		<input type='hidden' name="vOldKdMTK" value="<?php echo $data['kd_mtk']; ?>">
		<input type='submit' name='submit' value='Update'> 
	</pre>
	
</form>

<?php
}
?>