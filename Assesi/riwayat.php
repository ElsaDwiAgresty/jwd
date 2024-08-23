<?php
require 'functions.php';
$mahasiswa = $query = mysqli_query($conn, 'SELECT * FROM pesanan');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th class="border border-blue-500">No</th>
            <th class="border border-blue-500">Nama Pemesan</th>
            <th class="border border-blue-500">Nomor Identitas</th>
            <th class="border border-blue-500">Jenis Kelamin</th>
            <th class="border border-blue-500">Tipe Kamar</th>
            <th class="border border-blue-500">DUrasi Menginap</th>
            <th class="border border-blue-500">Total Bayar</th>
            <th class="border border-blue-500 px-10">Foto Kamar</th>
            <th class="border border-blue-500 px-10">Video Kamar</th>
            
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row): ?>
        <tr class="border border-blue-600">
            <th class="border border-blue-500"><?= $i ?></th>
            <th class="border border-blue-500"><?= $row["namaPemesan"]; ?></th>
            <th class="border border-blue-500"><?= $row["nomorIdentitas"]; ?></th>
            <th class="border border-blue-500"><?= $row["jenisKelamin"]; ?></th>
            <th class="border border-blue-500"><?= $row["tipeKamar"]; ?></th>
            <th class="border border-blue-500"><?= $row["durasiMenginap"]; ?></th>
            <th class="border border-blue-500 px-10"><?= $row["totalBayar"]; ?></th>
            <th class="border border-blue-500"><img src="<?= $row["fotoKamar"]; ?>" alt="" class="w-48"></th>
            <th class="border border-blue-500">
                <video controls class="w-32">
                    <source src="<?= $row["videoKamar"]; ?>" type="video/mp4">
                    Browser Anda tidak mendukung video.
                </video></th>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>