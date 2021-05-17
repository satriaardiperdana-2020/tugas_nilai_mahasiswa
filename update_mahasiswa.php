<?php 
include "conn.inc.php";
if(isset($_POST['submit'])){
	$vNIM	 = $_POST['vNIM'];
	$vNama	 = $_POST['vNama'];
	$vAlamat = $_POST['vAlamat'];
	$vOldNIM = $_POST['vOldNIM'];

	$query = "UPDATE mahasiswa SET nim='$vNIM', nama='$vNama', alamat='$vAlamat' WHERE nim='$vOldNIM'";
	$result = mysqli_query($conn, $query);
	if($result){
		echo "<script>
				alert('Data Berhasil Diupdate');window.location='retreive_mahasiswa.php';
			  </script>";
	}else{
		echo "<script>
				alert('Data Gagal Diupdate');window.location='update_mahasiswa.php';
			  </script>";
	}
	mysqli_close($conn);

}else{
	if(isset($_REQUEST['id'])){
		$query  = "SELECT * FROM mahasiswa WHERE nim = '$_REQUEST[id]'";
		$result = mysqli_query($conn, $query);
		if(mysqli_num_rows($result)==1){
			$data = mysqli_fetch_assoc($result);
		}
	}
?>

<h1>Update Data</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
	<pre>
		NIM 	: <input type='text' name='vNIM'  value="<?php echo $data['nim']; ?>">
		Nama 	: <input type='text' name='vNama' value="<?php echo $data['nama']; ?>">
		Alamat  : <textarea name='vAlamat'><?php echo $data['alamat']; ?></textarea>
		<input type='hidden' name="vOldNIM" value="<?php echo $data['nim']; ?>">
		<input type='submit' name='submit' value='Update'> 
	</pre>
	
</form>

<?php
}
?>