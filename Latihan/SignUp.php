<?php
include 'koneksi.php';

if (isset($_POST['signup'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO dataweb (nama, username, password) VALUES ('$nama','$username' , '$password')";

    if (mysqli_query($connection, $query)) {
        echo 'Sign up berhasil, silahkan login';
        header("Location: Login.php");
        exit;
    } else {
        echo 'Koneksi Error' . $query . mysqli_error($connection);
    }
}
?>