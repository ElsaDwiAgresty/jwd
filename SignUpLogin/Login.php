<?php

include 'koneksi.php';
session_start();

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT*FROM data WHERE email = '$email' AND password = '$password'";

    if (mysqli_num_rows(mysqli_query($connection, $query)) == 1) {
        $_SESSION['user'] = $email;
        header("Location: index.php");
        exit();
    } else {
        $error_message = "Invalid email or password!";
    }
}

?>