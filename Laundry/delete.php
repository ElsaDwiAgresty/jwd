<?php

if (!isset($_GET['id'])) {
    header("Location: pemesanan.php");
    exit();
}

$id = $_GET['id'];

$host = "localhost";
$user = "root";
$password = "";
$database = "jwd_laundry";

$conn = new mysqli($host, $user, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$sql = "DELETE FROM pemesanan WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
    $successMessage = "Data Pesanan dengan Id $id berhasil dihapus.";
    header("Location: pemesanan.php?successMessage=" . urlencode($successMessage));
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$connection->close();
?>