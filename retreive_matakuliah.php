<?php
include "conn.inc.php";

$query  = "select * from matakuliah";
$result = mysqli_query($conn, $query);

echo "<h1>Daftar Matakuliah</h1>";
echo "<a href='input_matakuliah.php'>Tambah Matakuliah</a> ";
echo "<table cellpadding='5' border = '1'>
	  	<tr>
	  		<th>No.</th>
	  		<th>Kode Matakuliah</th>
	  		<th>Nama Matakuliah</th>
	  		<th>Jumlah SKS</th>
	  		<th>Action</th>
	  	</tr>	
	 ";
$no = 1;
while($rec = mysqli_fetch_assoc($result)){
	echo "<tr>
			<td>$no.</td>
			<td>$rec[kd_mtk]</td>
			<td>$rec[nm_mtk]</td>
			<td>$rec[sks]</td>
			<td>
				<a href='update_matakuliah.php?id=$rec[kd_mtk]'>Update |</a>
				<a href='delete_matakuliah.php?id=$rec[kd_mtk]'>Delete</a>
			</td>
		  </tr>
		 ";
	$no++;
}
echo "</table>";
mysqli_close($conn);


?>