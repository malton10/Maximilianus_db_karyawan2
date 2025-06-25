<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'koneksi.php'; ?>

<h2>Tambah Data Karyawan</h2>
<form method="POST" action="">
    NIP: <input type="text" name="nip" required><br>
    Nama: <input type="text" name="nama" required><br>
    Jabatan: <input type="text" name="jabatan" required><br>
    Departemen: <input type="text" name="departemen" required><br>
    Email: <input type="email" name="email" required><br>
    No. Telepon: <input type="text" name="no_telepon" required><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<?php
if (isset($_POST['simpan'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    $query = "INSERT INTO karyawan (nip, nama, jabatan, departemen, email, no_telepon)
              VALUES ('$nip', '$nama', '$jabatan', '$departemen', '$email', '$no_telepon')";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil ditambahkan! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
