<?php
include 'koneksi.php';

if (isset($_POST['signup'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO data (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($connection, $query)) {
        echo "Sign Up berhasil silahkan login";
        echo "<a href='Login.html'>Login</a>";
    } else {
        echo "Sign Up mengalami masalah" . $query . mysqli_error($connection);
    }
}


?>
