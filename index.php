<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Pastikan file koneksi berhasil dipanggil
include 'koneksi.php';

if (!$conn) {
    die("Koneksi gagal!");
}
?>

<h2>Data Karyawan</h2>
<a href="tambah.php">Tambah Data</a><br><br>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jabatan</th>
        <th>Departemen</th>
        <th>Email</th>
        <th>No. Telepon</th>
        <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM karyawan");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>".$row['id']."</td>
            <td>".$row['nip']."</td>
            <td>".$row['nama']."</td>
            <td>".$row['jabatan']."</td>
            <td>".$row['departemen']."</td>
            <td>".$row['email']."</td>
            <td>".$row['no_telepon']."</td>
            <td>
                <a href='edit.php?id=".$row['id']."'>Edit</a> |
                <a href='hapus.php?id=".$row['id']."' onclick=\"return confirm('Yakin hapus?');\">Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>
