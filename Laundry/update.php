<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $id= $_POST['id'];
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
    
    $query = "UPDATE pemesanan SET nama_pelanggan='$nama_pelanggan', notelp_pelanggan='$notelp_pelanggan', berat='$berat', harga_perkilo='$harga_perkilo', lama_pengerjaan='$lama_pengerjaan', total='$total', NIK='$NIK' WHERE id=$id";
    if (mysqli_query($conn, $query)) {
        echo "Data berhasil diperbarui.";
        echo "<a href='pemesanan.php'>show</a>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>