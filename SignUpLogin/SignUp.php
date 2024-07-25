<?php
include 'koneksi.php';

if (isset($_POST['signup'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO data (nama, email, password) VALUES ('$nama', '$email', '$password')";

    if (mysqli_query($connection, $query)) {
        echo '
        <!doctype html>
            <html>
                <head>
                    <meta charset="UTF-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                    <link
                    rel="stylesheet"
                    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
                    />
                    <link
                    href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
                    rel="stylesheet"
                    />
                    <link
                    href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css"
                    rel="stylesheet"
                    />
                    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
                </head>
                <body>

                    <main>
                    <div class="flex justify-center">
                        <div class=" text-center box-content h-52 w-64 p-4 border-2 border-blue-700 mt-36 flex flex-col items-center">
                        <img src="src/img/Berhasil.svg" class="text-center" >
                         <h2 class="font-bold font-serif font-xl mt-4"> SignUp Berhasil Silahkan lanjut untuk Login</h2>
                         <button class="mt-12 bg-blue-500 text-white h-10 w-24 rounded "> <a href="Login.html"> Login </a> </button>                 
                        </div>
                         </div>
                         </main>
                </body>
            </html>';

    } else {
        echo "Sign Up mengalami masalah" . $query . mysqli_error($connection);
    }
}


?>