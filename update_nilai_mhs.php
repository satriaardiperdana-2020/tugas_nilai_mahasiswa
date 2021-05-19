<?php 
include "conn.inc.php";
if(isset($_POST['submit'])){
	

	//$query  = "DELETE FROM nilai WHERE nim = '$id' and kd_mtk = '$id2' ";
	$vNIM	= $_POST['vNIM'];
	$vKdMTK = $_POST['vKdMTK'];
	$vTugas = $_POST['vTugas'];
	$vUTS   = $_POST['vUTS'];
	$vUAS   = $_POST['vUAS'];
	$vOldNIM = $_POST['vOldNIM'];
	$vOldKdMTK = $_POST['vOldKdMTK'];

	$query = "UPDATE nilai SET nim='$vNIM', kd_mtk='$vKdMTK', tugas='$vTugas', uts='$vUTS', uas='$vUAS' WHERE nim='$vOldNIM' and kd_mtk='$vOldKdMTK'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Diupdate');window.location='retreive_nilai_mhs.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Diupdate');window.location='retreive_nilai_mhs.php';
			  </script>";
	}
	mysqli_close($conn);

}else{
	//if(isset($_REQUEST['id'])){
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$id2 = $_GET['id2'];
		$query  = "SELECT * FROM nilai WHERE nim = '$id' and kd_mtk = '$id2'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)==1){
			$data = mysqli_fetch_assoc($result);
		}
	}
?>

<h1>Update Data Nilai</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<pre>
		NIM             : <input type='text' name='vNIM'  value="<?php echo $data['nim']; ?>" readonly>
		Kode Matakuliah : <input type='text' name='vKdMTK' value="<?php echo $data['kd_mtk']; ?>" readonly>
		Tugas           : <input type='text' name='vTugas'  value="<?php echo $data['tugas']; ?>">
		UTS             : <input type='text' name='vUTS'  value="<?php echo $data['uts']; ?>">
		UAS             : <input type='text' name='vUAS'  value="<?php echo $data['uas']; ?>">
		<input type='hidden' name="vOldNIM" value="<?php echo $data['nim']; ?>">
		<input type='hidden' name="vOldKdMTK" value="<?php echo $data['kd_mtk']; ?>">
		<input type='submit' name='submit' value='Update'> 
	</pre>
	
</form>

<?php
}
?>