<?php
$servername = "localhost";
//$database = "niagahos_namadatabase";
$username = "satria";
$password = "Sap123456789";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
//$conn = mysqli_connect($servername, $username, $password, $database);
$conn = mysqli_connect($servername, $username, $password);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>