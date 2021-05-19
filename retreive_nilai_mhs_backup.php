<?php
include "conn.inc.php";

$query  = "select * from nilai";
$result = mysqli_query($conn, $query);

echo "<h1>List Nilai Mahasiswa</h1>";
echo "<a href='input_nilai_mhs.php'>Input Nilai Mahasiswa</a> ";
echo "<table cellpadding='5' border = '1'>
	  	<tr>
	  		<th>No.</th>
	  		<th>Nim</th>
	  		<th>Kode Matakuliah</th>
	  		<th>Tugas</th>
	  		<th>UTS</th>
	  		<th>UAS</th>
	  		<th>Action</th>
	  	</tr>	
	 ";
$no = 1;
while($rec = mysqli_fetch_assoc($result)){
	echo "<tr>
			<td>$no.</td>
			<td>$rec[nim]</td>
			<td>$rec[kd_mtk]</td>
			<td>$rec[tugas]</td>
			<td>$rec[uts]</td>
			<td>$rec[uas]</td>
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