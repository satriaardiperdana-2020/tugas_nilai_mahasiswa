<?php
include "conn.inc.php";





$query  = "SELECT
    mhs.nim,
    mhs.nama,
    matkul.kd_mtk,
    matkul.nm_mtk
FROM
    mahasiswa mhs 
    inner join nilai nil on mhs.nim = nil.nim
    inner join matakuliah matkul on nil.kd_mtk = matkul.kd_mtk";
$result = mysqli_query($conn, $query);

echo "<h1>List Nilai</h1>";
echo "<a href='input_nilai_mhs.php'>Input Nilai Mahasiswa</a> | Cetak Nilai Mahasiswa :";
?>
<form method="post" action="cetak_hasil_study_mahasiswa.php" target="_blank">
<select name = 'kd_matkul'>
	<?php
		$query2 = "select  matkul.kd_mtk, 
						  matkul.nm_mtk
				  from 
				  	nilai nil
				  	inner join matakuliah matkul on nil.kd_mtk = matkul.kd_mtk 
		";
		$result2 = mysqli_query($conn, $query2);
		while($rec2 = mysqli_fetch_assoc($result2)){
			echo "<option value='$rec2[kd_mtk]'>$rec2[kd_mtk] - $rec2[nm_mtk] <input type='hidden' name='nm_mtk' value='$rec2[nm_mtk]'></option>";

		}
	?>
</select>
<input type='submit' name='submit' value='cetak'>

</form>		


<?php

echo "<table cellpadding='5' border = '1'>
	  	<tr>
	  		<th>No.</th>
	  		<th>Nim</th>
	  		<th>Nama</th>
	  		<th>Kode Matakuliah</th>
	  		<th>Mata Kuliah</th>
	  		<th>Action</th>
	  	</tr>	
	 ";
$no = 1;
while($rec = mysqli_fetch_assoc($result)){
	echo "<tr>
			<td>$no.</td>
			<td>$rec[nim]</td>
			<td>$rec[nama]</td>
			<td>$rec[kd_mtk]</td>
			<td>$rec[nm_mtk]</td>
			<td>
				<a href='update_nilai_mhs.php?id=$rec[nim]&id2=$rec[kd_mtk]'>Update |</a>
				<a href='delete_nilai_mhs.php?id=$rec[nim]&id2=$rec[kd_mtk]'>Delete</a>
			</td>
		  </tr>
		 ";
	$no++;
}
echo "</table>";
mysqli_close($conn);


?>