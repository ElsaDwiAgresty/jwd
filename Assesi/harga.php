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
    <title>Daftar Harga</title>
</head>
<body>
    <style>
        body::before {
          content: "";
          position: absolute;
          inset: 0;
          background-image: url("src/img/pemandangan.jpg");
          background-size: cover;
          background-position: center;
          opacity: 1; /* Ubah ini untuk menyesuaikan opasitas */
          z-index: -1; /* Menempatkan background di belakang konten */
        }
      </style>

      <!-- AWAL NAVBAR -->
    <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="hotel.php" class="flex items-center space-x-3 rtl:space-x-reverse">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Aqnia</span>
          </a>
          <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="hotel.php" class="md:text-black md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
              </li>
              <li>
                <a href="produk.html" class="md:text-black md:hover:text-blue-700 md:p-0">Produk</a>
              </li>
              <li>
                <a href="#" class="md:text-blue-700 md:hover:text-blue-700 md:p-0">Daftar Harga</a>
              </li>
              <li>
                <a href="tentangKami.html" class="md:text-black md:hover:text-blue-700 md:p-0">Tentang Kami</a>
              </li>
              <li>
                <a href="pesanan.php" class="md:text-black md:hover:text-blue-700 md:p-0">Pesan Kamar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- AKHIR NAVBAR -->

      <!-- CONTENT -->
      <div class=" bg-white mt-24 mx-80">
            <div class="text-center text-xl font-semibold bg-slate-500 text-white">DAFTAR HARGA PENGINAPAN</div>
            <p class="text-center bg-slate-500 text-white py-2">Berikut daftar harga layanan Aqnia Hotel</p><hr>
            <div>
                <p class="px-2 font-bold text-lg">Standar Room</p>
                <p class="px-8">per-malam. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .Rp. 500.000 </p>
            </div>
            <div>
                <p class="mt-2 px-2 font-bold text-lg">Deluxe Room</p>
                <p class="px-8">per-malam. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .Rp. 1.000.000 </p>
            </div>
            <div>
                <p class="mt-2 px-2 font-bold text-lg">Family Room</p>
                <p class="px-8">per-malam. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .Rp. 1.500.000 </p>
            </div>
            <div>
                <p class="mt-2 px-2 font-bold text-lg">Breakfast</p>
                <p class="px-8">per-hari. . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . . .Rp. 80.000 </p>
            </div>
            <div class="flex justify-end px-5 font-semibold bg-slate-500 text-white mt-4">
                <span><a href="pesanan.php"><p class="font-medium">go to order</p></a></span>
                <a href="pesanan.php">
                    <img src="src/img/order.png" class="h-10 w-10 mt-2" alt="">
                </a>
            </div>
            
      </div>
      <!-- AKHIR CONTENT -->

      <!-- FOOTER -->
    <footer>
        <div class="mt-24 px-5">
          <p class="text-white font-medium text-sm">Copyright &copy<span id="tahun"></span> AqniaHotel</p>
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