<?php
if(isset($_POST['submit'])){
	$vKdMTK    = $_POST['vKdMTK'];
	$vNmMTK   = $_POST['vNmMTK'];
	$vSks = $_POST['vSks'];

	include "conn.inc.php";
	$query  = "INSERT INTO matakuliah VALUES('$vKdMTK', '$vNmMTK', '$vSks')";
	$result = mysqli_query($conn, $query);
	if($result){
		echo"<script>
			 	alert('Data Berhasil Diinput');window.location='retreive_matakuliah.php';
			 </script>";
	}else{
		echo"<script>
			 	alert('Data Gagal Diinput');window.location='input_matakuliah.php';
			 </script>";
	}
	mysqli_close($conn);
}else{
?>
	<h1>Input Data Matakuliah</h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<pre>
			Kode Matakuliah : <input type='text' name='vKdMTK'>
			Nama Matakuliah : <input type='text' name='vNmMTK'>
			SKS             : <input type='text' name='vSks'>
			<input type='submit' name='submit' value='Simpan'> 
		</pre>
	</form>

<?php	
}
?>