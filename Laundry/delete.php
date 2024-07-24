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

$connection = new mysqli($host, $user, $password, $database);

if (!$connection) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Data</title>
</head>
<body>
<script>
function confirmDeletion(id){
    if(confirm("apakah anda ingin menghapus?")){
        window.location.href = "delete.php?id=" + id + "&confirm=yes";
    }
    else{
        window.location.href = "pemesanan.php";
    }
}

</script>

<body onload = "confirmDeletion ('.$id.')">
</body>
</html>
';

if(isset($_GET['confirm']) && $_GET['confirm'] == 'yes'){
$sql = "DELETE FROM pemesanan WHERE id = '$id'";

if ($connection->query($sql) === TRUE) {
    $successMessage = "Data Pesanan dengan Id $id berhasil dihapus.";
    header("Location: pemesanan.php?successMessage=" . urlencode($successMessage));
    exit();
    }
    else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
};

$connection->close();
?>