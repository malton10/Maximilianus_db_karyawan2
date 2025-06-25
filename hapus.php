<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM karyawan WHERE id=$id";

if (mysqli_query($conn, $query)) {
    header("Location: index.php");
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}
?>
