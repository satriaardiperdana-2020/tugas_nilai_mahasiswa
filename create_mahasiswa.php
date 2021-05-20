<?php
if(isset($_POST['submit'])){
	$vNIM    = $_POST['vNIM'];
	$vNama   = $_POST['vNama'];
	$vAlamat = $_POST['vAlamat'];

	include "conn.inc.php";
	$query  = "INSERT INTO mahasiswa VALUES('$vNIM', '$vNama', '$vAlamat')";
	$result = mysqli_query($conn, $query);
	if($result){
		echo"<script>
			 	alert('Data Berhasil Diinput');window.location='retreive_mahasiswa.php';
			 </script>";
	}else{
		echo"<script>
			 	alert('Data Gagal Diinput');window.location='create_mahasiswa.php';
			 </script>";
	}
	mysqli_close($conn);
}else{
?>
	<h1>Input Data Mahasiswa</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<pre>
			NIM   : <input type='text' name='vNIM'>
			Nama  : <input type='text' name='vNama'>
			Alamat: <textarea name='vAlamat'></textarea>
			<input type='submit' name='submit' value='Simpan'> 
		</pre>
	</form>

<?php	
}
?>