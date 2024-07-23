<?php
include 'koneksi.php';

if (isset($_POST['tambah_pesanan'])) {
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $notelp_pelanggan = $_POST['notelp_pelanggan'];
    $berat = $_POST['berat'];
    $harga_perkilo = $_POST['harga_perkilo'];
    $lama_pengerjaan = $_POST['lama_pengerjaan'];
    $total = $_POST['total'];
    $NIK = $_POST['NIK'];

    if (strlen($NIK) != 16 || !ctype_digit($NIK)) {
        echo "NIK harus berisi 16 angka!";
        exit;
    }

        $query = "INSERT INTO pemesanan (nama_pelanggan, notelp_pelanggan, berat, harga_perkilo, lama_pengerjaan, total, NIK)
              VALUES ('$nama_pelanggan', '$notelp_pelanggan', '$berat', '$harga_perkilo', '$lama_pengerjaan', '$total', '$NIK')";
    

    if (mysqli_query($conn, $query)) {
        echo "Pesanan berhasil ditambahkan!";
        echo "<a href='pemesanan.php'>show</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

}
?>
