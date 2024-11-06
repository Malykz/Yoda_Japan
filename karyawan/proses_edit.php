<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

$sql = "UPDATE karyawan SET nik='$nik', nama='$nama', jabatan='$jabatan' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Data karyawan berhasil diperbarui";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
