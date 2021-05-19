<?php 
include "conn.inc.php";
if(isset($_POST['submit'])){
	$kd_matkul = $_POST['kd_matkul'];
	$nm_mtk = $_POST['nm_mtk'];

	$query3 = "SELECT
    	mhs.nim,
    	mhs.nama,
    	matkul.kd_mtk,
    	matkul.nm_mtk,
    	nil.tugas,
    	nil.uts,
    	nil.uas
	FROM
    	mahasiswa mhs 
    inner join nilai nil on mhs.nim = nil.nim
    inner join matakuliah matkul on nil.kd_mtk = matkul.kd_mtk
    where nil.kd_mtk='$kd_matkul'";
	$result3 = mysqli_query($conn, $query3);

	echo"<h1>Laporan Nilai</h1>";
	echo"Kode MTK: $kd_matkul <br>";
	echo"Matakuliah: $nm_mtk ";
	echo"
		 <table cellpadding = '5' border='1'>
		 	<tr>
		 		<th>No.</th>
		 		<th>NIM</th>
		 		<th>Nama</th>
		 		<th>Tugas</th>
		 		<th>UTS</th>
		 		<th>UAS</th>
		 		<th>Akhir</th>
		 		<th>Grade</th>

		 	</tr>
		
	";
	$no = 1;
	while($rec3 = mysqli_fetch_assoc($result3)){
		$akhir = 0.3 * $rec3['tugas'] + 0.3 * $rec3['uts'] + 0.4 * $rec3['uas'];
		if($akhir >=85){
			$grade = "A";
		}else if($akhir >=80){
			$grade = "A-";
		}else if($akhir >=75){
			$grade = "B+";
		}else if($akhir >=70){
			$grade = "B";
		}else if($akhir >=65){
			$grade = "B-";
		}else if($akhir >=60){
			$grade = "C";
		}else if($akhir >=45){
			$grade = "D";
		}else{
			$grade = "E";
		}
		//echo "$grade";
		echo"
			<tr>
				<td>$no.</td>
				<td>$rec3[kd_mtk]</td>
				<td>$rec3[nm_mtk]</td>
				<td>$rec3[tugas]</td>
				<td>$rec3[uts]</td>
				<td>$rec3[uas]</td>
				<td>$akhir</td>
				<td>$grade</td>
			</tr>
		";
		$no++;
	}
	echo" </table>";
	mysqli_close($conn);
}

?>