<?php
require 'functions.php';


function pesanan($data)
{
    global $conn;
    $namaPemesan = $data["namaPemesan"];
    $nomorIdentitas = $data["nomorIdentitas"];
    $jenisKelamin = $data["jenisKelamin"];
    $tipeKamar = $data["tipeKamar"];
    $durasiMenginap = $data["durasiMenginap"];
    $totalBayar = $data["totalBayar"];
    $fotoKamar = $data["fotoKamar"];
    $diskon = 0;
    $videoKamar = $data["videoKamar"];

    if ($durasiMenginap > 3) {
        $diskon = 10; 
    }

    $query = "INSERT INTO pesanan VALUES ('', '$namaPemesan', '$nomorIdentitas', '$jenisKelamin', '$tipeKamar', '$durasiMenginap', '$totalBayar','$fotoKamar', '$diskon', '$videoKamar')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);

}

$tipeKamarFoto = [
    'standar' => 'src/img/standar.jpg',
    'deluxe' => 'src/img/deluxe.jpg',
    'family' => 'src/img/family.jpg'
];

$tipeKamarVideo = [
    'standar' => 'src/vid/standar.mp4',
    'deluxe' => 'src/vid/deluxe.mp4',
    'family' => 'src/vid/family.mp4'
];

if (isset($_POST["submit"])) {
    if (pesanan($_POST) > 0) {

        $durasiMenginap = $_POST["durasiMenginap"];
        $diskon = ($durasiMenginap > 3) ? 10 : 0;

        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Data Pemesan</title>
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
        </head>
        <body>
            <div class= "">
            <p>Nama Pemesan : '. $_POST["namaPemesan"]. ' </p>
            <p>Nomor Identitas : '. $_POST["nomorIdentitas"] . '</p>
            <p>Jenis Kelamain : '. $_POST["jenisKelamin"] . '</p>
            <p>Tipe Kamar : '. $_POST["tipeKamar"] . '</p>
            <p>Durasi Penginapan : '. $_POST["durasiMenginap"] . '</p>
            <p>Discount : '. $diskon .'</p>
            <p>Total Bayar : '. $_POST["totalBayar"] . '</p>
            </div>
        </body>
        </html>
            ';
    } else {
        echo "
        <script>
            alert('Pesanan Gagal Dibuat!');
        </script>
    ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Pesan Kamar</title>
</head>

<body class="bg-slate-400">
    <!-- AWAL NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="hotel.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Aqnia</span>
            </a>
            <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="hotel.php" class="md:text-black md:hover:text-blue-700 md:p-0"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="produk.html" class="md:text-black md:hover:text-blue-700 md:p-0">Produk</a>
                    </li>
                    <li>
                        <a href="harga.php" class="md:text-black md:hover:text-blue-700 md:p-0">Daftar Harga</a>
                    </li>
                    <li>
                        <a href="tentangKami.html" class="md:text-black md:hover:text-blue-700 md:p-0">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="" class="md:text-blue-700 md:hover:text-blue-700 md:p-0">Pesan Kamar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- AKHIR NAVBAR -->

    <!-- CONTENT -->
    <div class="bg-slate-500 mx-64 mt-10 min-h-screen">
        <p class="text-center text-white my-4">Form Pemesanan</p>
        <form action="" method="post" class="bg-white mx-2 mt-8 flex justify-center border border-blue-500 mb-24">
            <div class="mb-24 h-fit">
                <div class="flex items-center mt-4">
                    <label for="namaPemesan" class="w-32">Nama Pemesan</label>
                    <input type="text" name="namaPemesan" id="namaPemesan" class="w-96 h-8 border border-blue-400"
                        required>
                </div><br>
                <div class="flex items-center mt-4">
                    <label for="jenisKelamin" class="w-32">Jenis Kelamin</label>
                    <div class="flex items-center me-4">
                        <input id="jenisKelamin" type="radio" value="Laki-laki" name="jenisKelamin"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            required>
                        <label for="jenisKelamin"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                    </div>
                    <div class="flex items-center me-4">
                        <input id="jenisKelamin" type="radio" value="Perempuan" name="jenisKelamin"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                            required>
                        <label for="jenisKelamin"
                            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                    </div>
                </div>
                <div class="mt-4 flex items-center">
                    <label for="nomorIdentitas" class="w-32">Nomor Identitas</label>
                    <input type="text" name="nomorIdentitas" id="nomorIdentitas" class="w-96 h-8 border border-blue-400"
                        required minlength="16" maxlength="16" required>
                </div>
                <div id="notifikasi" class="text-red-500 mt-2"></div>
                <div class="mt-4 flex items-center">
                    <label for="tipeKamar" class="w-32">Tipe Kamar</label>
                    <select name="tipeKamar" id="tipeKamar" class="border border-blue-500" required>
                        <option value="0" data-harga="0">Pilih Tipe Kamar</option>
                        <option value="standar" data-harga="500000">- STANDAR -</option>
                        <option value="deluxe" data-harga="1000000">- DELUXE -</option>
                        <option value="family" data-harga="1500000">- FAMILY -</option>
                    </select>
                </div>
                <div class="mt-4 flex items-center">
                    <label for="harga" class="w-32">Harga</label>
                    <input type="text" name="harga" id="harga" class="w-96 h-8 border border-blue-400" readonly>
                </div>
                <div class="mt-4 flex items-center">
                    <label for="tanggalPesan" class="w-32">Tanggal Pesan</label>
                    <input type="date" name="tanggalPesan" id="tanggalPesan"
                        class="w-96 h-8 border border-blue-400 uppercase" required>
                </div>
                <div class="mt-4 flex items-center">
                    <label for="durasiMenginap" class="w-32">Durasi Menginap</label>
                    <input type="text" name="durasiMenginap" id="durasiMenginap" class="w-60 h-8 border border-blue-400"
                        required>
                </div>
                <div id="notif" class="text-red-500 mt-2"></div>
                <div class="flex items-center">
                    <label for="breakfast" class="w-32">Termasuk Breakfast</label>
                    <input type="checkbox" id="breakfast" name="breakfast">
                </div>
                <div class="flex items-center">
                    <label for="totalBayar" class="w-32">Total Bayar</label>
                    <input type="text" name="totalBayar" id="totalBayar" class="w-60 h-8 border border-blue-400"
                        readonly>
                </div>

                <div>
                    <input type="hidden" id="diskon" name="diskon" value="0%">
                </div>
                <div>
                    <input type="hidden" id="fotoKamar" name="fotoKamar">
                </div>
                <div>
                    <input type="hidden" id="videoKamar" name="videoKamar">
                </div>

                <div class="flex space-x-10 justify-center mt-8">
                    <div>
                        <button class="w-48 h-10 border border-gray-500" id="hitungTotal" name="hitungTotal">Hitung
                            Total Bayar</button>
                    </div>
                    <div id="notifikasi" class="text-red-500 mt-2"></div>
                    <div>
                        <button class="w-48 h-10 border border-gray-500" id="submit" name="submit">Simpan</button>
                    </div>
                    <div id="notifikasi" class="text-red-500 mt-2"></div>
                    <div id="notif" class="text-red-500 mt-2"></div>
                    <div>
                        <button class="w-48 h-10 border border-gray-500" id="cancel" name="cancel"><a
                                href="hotel.php">Cancel</a></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script>
        //Validasi Nomor Identitas Saat Mengetik
        document.getElementById('nomorIdentitas').addEventListener('input', function () {
            var noIdentitas = this.value;
            var notifikasi = document.getElementById('notifikasi');

            if (noIdentitas.length !== 16) {
                notifikasi.textContent = 'Isian Salah Data Harus 16 Digit';
                notifikasi.style.color = 'red';
            } else {
                notifikasi.textContent = '';
            }
        });

        // Validasi Nomor Identitas saat form dikirimkan
        document.querySelector('form').addEventListener('submit', function (event) {
            var noIdentitas = document.getElementById('nomorIdentitas').value;
            var notifikasi = document.getElementById('notifikasi');

            if (noIdentitas.length !== 16) {
                notifikasi.textContent = 'Isian Salah Data Harus 16 Digit';
                notifikasi.style.color = 'red';
                event.preventDefault();
            }
        });

        //Mengubah Harga berdasarkan tipe kamar
        document.getElementById('tipeKamar').addEventListener('change', function () {
            var harga = this.options[this.selectedIndex].getAttribute('data-harga');
            document.getElementById('harga').value = harga;
        });

        //Menghitung total bayar jika klik tombol hitung total
        document.getElementById('hitungTotal').addEventListener('click', function (event) {
            event.preventDefault();
            var harga = parseInt(document.getElementById('harga').value) || 0;
            var durasiMenginap = parseInt(document.getElementById('durasiMenginap').value) || 0;
            var includeBreakfast = document.getElementById('breakfast').checked;
            var totalBayar = 0;
            var diskon = 0;

            if(!isNaN(durasiMenginap) && durasiMenginap > 0){
                totalBayar = harga * durasiMenginap;

                if (includeBreakfast) {
                    totalBayar += 80000;
                }

                if (durasiMenginap > 3) {
                    totalBayar *= 0.9;
                }
            }else{
                totalBayar = 0;
            }

            document.getElementById('totalBayar').value = totalBayar;
            
            document.getElementById('diskon').value = diskon > 0 ? '10%' : '0%';
        });

        //Validasi Durasi Menginap saat Mengetik
        document.getElementById('durasiMenginap').addEventListener('input', function () {
            var durasiMenginap = this.value;
            var notif = document.getElementById('notif');

            // Cek apakah durasiMenginap adalah angka
            if (isNaN(Number(durasiMenginap)) || durasiMenginap.trim() === '') {
                notif.textContent = 'Harus Isi Angka';
                notif.style.color = 'red';
            } else {
                notif.textContent = '';
            }
        });

        // Validasi Durasi Menginap saat form dikirimkan
        document.querySelector('form').addEventListener('submit', function (event) {
            var durasiMenginap = document.getElementById('durasiMenginap').value;
            var notif = document.getElementById('notif');

            // Cek apakah durasiMenginap adalah angka
            if (isNaN(Number(durasiMenginap)) || durasiMenginap.trim() === '') {
                notif.textContent = 'Harus Isi Angka';
                notif.style.color = 'red';
                event.preventDefault();
            }
        });

        //Menambahkan gambar ke database tanpa harus menginputkan dari form
        document.getElementById('tipeKamar').addEventListener('change', function () {
            var pilihanKamar = this.value;
            var fotoTipeKamar = {
                'standar': 'src/img/standar.jpg',
                'deluxe': 'src/img/deluxe.jpg',
                'family': 'src/img/family.jpg'
            }
            document.getElementById('fotoKamar').value = fotoTipeKamar[pilihanKamar];
        })

        //Menambahkan video ke database tanpa harus menginputkan dari form
        document.getElementById('tipeKamar').addEventListener('change', function () {
            var pilihanKamar = this.value;
            var videoTipeKamar = {
                'standar': 'src/vid/standar.mp4',
                'deluxe': 'src/vid/deluxe.mp4',
                'family': 'src/vid/family.mp4'
            }
            document.getElementById('videoKamar').value = videoTipeKamar[pilihanKamar];
        })

        const today = new Date().toISOString().split('T')[0];
    
        // Mengatur nilai atribut min dan max ke tanggal hari ini
        document.getElementById('tanggalPesan').setAttribute('min', today);
        document.getElementById('tanggalPesan').setAttribute('max', today);
    </script>

    <!-- FOOTER -->
    <footer>
        <div class="mt-24 px-5">
            <p class="text-black font-medium text-sm">Copyright &copy<span id="tahun"></span> AqniaHotel</p>
            <script>
                var now = new Date();
                var tahun = now.getFullYear();
                document.getElementById("tahun").innerHTML = tahun;
            </script>
        </div>
    </footer>
    <!-- AKHIR FOOTER -->
</body>

</html>