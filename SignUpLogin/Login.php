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
        echo'
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
            />
            <title>Try Again</title>
        </head>
        <body>
            <div class="flex justify-center">
                <div class="text-center box-content h-52 w-64 p-4 border-2 border-red-700 mt-36 flex flex-col items-center" bg-slate-600>
                    <p class="text-xl font-bold mt-10 text-red-600">Invalid email or password! Please Try Again</p><br>
                    <button class="bg-blue-600 text-white rounded-lg h-8 w-24 mt-6 font-serif"><a href= "Login.html">Try Again</a>
                </div><br><br>
            </div>
        
            </body>
        </html>';
    }
}

?>