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

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if (isset($_POST["submitButton"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

if (strlen($NIK) != 16 || !ctype_digit($NIK)) {
    echo "NIK harus berisi 16 angka!";
    exit;
}

$query = "INSERT INTO pemesanan (nama_pelanggan, notelp_pelanggan, berat, harga_perkilo, lama_pengerjaan, total, NIK, fileToUpload)
              VALUES ('$nama_pelanggan', '$notelp_pelanggan', '$berat', '$harga_perkilo', '$lama_pengerjaan', '$total', '$NIK', '$target_file')";


if (mysqli_query($conn, $query)) {
    echo "Pesanan berhasil ditambahkan!";
    echo "<a href='pemesanan.php'>show</a>";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}


?>