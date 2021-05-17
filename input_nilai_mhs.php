<?php 
includec "conn.inc.php";

if(isset($_POST['submit'])){
	$vNIM	= $_POST['vNIM'];
	$vKdMTK = $_POST['vKdMTK'];
	$vTugas = $_POST['vTugas'];
	$vUTS   = $_POST['vUTS'];
	$vUAS   = $_POST['vUAS'];

	$query  = "INSERT INTO nilai VALUES('$vNIM', '$vKdMTK', '$vTugas', '$vUTS', '$vUAS')";
	$result = mysqli_query($conn, $query);

	if($result){
		echo "<script>
				alert('Data Nilai Berhasil Diinput');window.location='input_nilai_mhs.php';
			  </script>

			 ";
	}else{
		echo "<script>
				alert('Data Nilai Gagal Diinput');window.location='input_nilai_mhs.php';
			  </script>

			 ";
	}
	mysqli_close(conn);
}else{
?>

<h1>Input Nilai</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	
	
</form>




<?php	
}

?>