<?php

if (isset($SignUp['$_POST'])) {
    $nama = 'nama';
    $email = 'email';
    $password = 'password';
}

$query = "INSERT INTO data (nama, email, password) VALUES ('$nama', '$email', '$password')";

if ($connection->$query === TRUE) {
    echo "Sign Up berhasil silahkan login";
    echo "<a href='Login.html'>Login</a>";
} else {
    echo "Sign Up mengalami masalah" . $query . mysqli_error($connection);
}
