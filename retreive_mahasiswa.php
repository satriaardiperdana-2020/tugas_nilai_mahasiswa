<?php
include "conn.inc.php";

$query  = "select * from mahasiswa";
$result = mysqli_query($conn, $query);

echo "<h1>List Mahasiswa</h1>";
echo "<a href='input_nilai_mhs.php'>Tambah</a> ";
echo "<table cellpadding='5' border = '1'>
	  	<tr>
	  		<th>No.</th>
	  		<th>Nim</th>
	  		<th>Nama</th>
	  		<th>Alamat</th>
	  		<th>Action</th>
	  	</tr>	
	 ";
$no = 1;
while($rec = mysqli_fetch_assoc($result)){
	echo "<tr>
			<td>$no.</td>
			<td>$rec[nim]</td>
			<td>$rec[nama]</td>
			<td>$rec[alamat]</td>
			<td>
				<a href='update_mahasiswa.php?id=$rec[nim]'>Update |</a>
				<a href='delete_mahasiswa.php?id=$rec[nim]'>Delete</a>
			</td>
		  </tr>
		 ";
	$no++;
}
echo "</table>";
mysqli_close($conn);


?>