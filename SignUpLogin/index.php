<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

echo "<h1 class='text-xl font-bold px-10 font-serif mt-5'>Welcome, " . $_SESSION['user'] . "!</h1>";
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet"
            />
            <title>logout</title>
            <script>
                function confirmLogout(){
                    var confirmLogout = confirm("Are you sure want to logout?")
                    if(confirmLogout){
                        window.location.href ="Login.html"
                    }
                }
            </script>
        </head>
        <body>
            <div class="px-10">
                <button onclick="confirmLogout()" class="rounded-lg bg-red-600 text-white h-8 w-20"><a href="logout.php">Logout</a></button>
            </div>
        </body>
    </html>


