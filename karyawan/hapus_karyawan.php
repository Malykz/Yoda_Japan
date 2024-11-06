<?php
include '../config.php';

$id = $_GET['id'];
$sql = "DELETE FROM karyawan WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Karyawan berhasil dihapus";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
