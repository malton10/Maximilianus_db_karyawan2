<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'koneksi.php'; ?>

<?php
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM karyawan WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>

<h2>Edit Data Karyawan</h2>
<form method="POST" action="">
    NIP: <input type="text" name="nip" value="<?php echo $row['nip']; ?>" required><br>
    Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br>
    Jabatan: <input type="text" name="jabatan" value="<?php echo $row['jabatan']; ?>" required><br>
    Departemen: <input type="text" name="departemen" value="<?php echo $row['departemen']; ?>" required><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br>
    No. Telepon: <input type="text" name="no_telepon" value="<?php echo $row['no_telepon']; ?>" required><br>
    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $departemen = $_POST['departemen'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];

    $query = "UPDATE karyawan SET 
                nip='$nip',
                nama='$nama',
                jabatan='$jabatan',
                departemen='$departemen',
                email='$email',
                no_telepon='$no_telepon'
              WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diupdate! <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>
