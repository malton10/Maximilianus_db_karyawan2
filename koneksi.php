<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "db_karyawan2";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
