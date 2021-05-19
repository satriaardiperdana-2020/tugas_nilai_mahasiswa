<?php 
include "conn.inc.php";

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
				alert('Data Nilai Gagal Diinput. Cek pada data nilai apakah data nim dan matakuliah sudah ada. Jika sudah ada maka bisa di update atau hapus terlebih dahulu');window.location='input_nilai_mhs.php';
			  </script>

			 ";
	}
	mysqli_close(conn);
}else{
?>

<h1>Input Nilai</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table cellpadding='5'>
		<tr>
			<td>Mahasiswa</td>
			<td>:
				<select name='vNIM'>
					<?php 
						$query = "SELECT * FROM mahasiswa";
						$result= mysqli_query($conn, $query);
						while ($rec = mysqli_fetch_assoc($result)) {
							echo "<option value='$rec[nim]'>$rec[nim] - $rec[nama]</option> ";
						}
					?>
					
				</select>
			</td>

		</tr>
		<tr>
			<td>Matakuliah</td>
			<td>:
				<select name='vKdMTK'>
					<?php 
						$query = "SELECT * FROM matakuliah";
						$result= mysqli_query($conn, $query);
						while ($rec = mysqli_fetch_assoc($result)) {
							echo "<option value='$rec[kd_mtk]'>$rec[kd_mtk] - $rec[nm_mtk]</option>";
						}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>Tugas</td>
			<td>:
				<input type='text' name='vTugas' size='3' maxlength='3' required>
			</td>
		</tr>
		<tr>
			<td>UTS</td>
			<td>:
				<input type='text' name='vUTS' size='3' maxlength='3' required>
			</td>
		</tr>
		<tr>
			<td>UAS</td>
			<td>:
				<input type='text' name='vUAS' size='3' maxlength='3' required>
			</td>
		</tr>
		<tr>
			<td align='center' colspan='2'>
				<input type='submit' name='submit' value='simpan'>
			</td>
		</tr>
	</table>
	
</form>




<?php	
}

?>