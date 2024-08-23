<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
    <title>Halaman Utama</title>
</head>
</head>
<body class="bg-gray-100">
    <!-- AWAL NAVBAR -->
      <nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="hotel.php" class="flex items-center space-x-3 rtl:space-x-reverse">
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Aqnia</span>
          </a>
          <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
              <li>
                <a href="hotel.php" class="md:text-blue-700 md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
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
                <a href="pesanan.php" class="md:text-black md:hover:text-blue-700 md:p-0">Pesan Kamar</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- AKHIR NAVBAR -->

    
    <div class="relative">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('src/img/taman.jpg');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- CONTENT -->
        <div class="relative z-10 text-white text-center py-24">
            <h1 class="text-4xl font-bold">Welcome to Aqnia Hotel</h1>
            <p class="mt-4 text-lg">Best Choice for Your Stay in Vacation</p>
        </div>
      </div>

    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="src/img/standar.jpg" alt="Single Room" class="w-full h-56 object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="src/img/deluxe.jpg" alt="Deluxe Room" class="w-full h-56 object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
              <img src="src/img/family.jpg" alt="Executive Single Room" class="w-full h-56 object-cover">
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-4">
                <video controls src="src/vid/standar.mp4" alt="Single Room" class="w-full h-56 object-cover"></video>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Standar Room</h2>
                    <p class="mt-2 text-gray-600">Rp. 500.000</p>
                    <p class="mt-2 text-gray-600">Standar Room menawarkan kenyamanan dasar dengan fasilitas modern</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-4">
              <video controls src="src/vid/deluxe.mp4" alt="Deluxe Room" class="w-full h-56 object-cover"></video>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Deluxe Room</h2>
                    <p class="mt-2 text-gray-600">Rp. 1.000.000</p>
                    <p class="mt-2 text-gray-600">Deluxe Room memberikan ruang yang lebih luas dengan dekorasi elegan</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden mt-4">
            <video controls src="src/vid/family.mp4" alt="Executive Single Room" class="w-full h-56 object-cover"></video>
                <div class="p-4">
                    <h2 class="text-xl font-bold">Family Room</h2>
                    <p class="mt-2 text-gray-600">Rp.1.500.000</p>
                    <p class="mt-2 text-gray-600">Family Room menawarkan kemewahan tingkat tinggi dengan ruang yang luas dan fasilitas eksklusif</p>
                </div>
            </div>
        </div>
    </div>
    <!-- AKHIR CONTENT -->

    <!-- FOOTER -->
    <footer>
      <div class="mt-10 px-5">
        <p class="text-slate-900 font-medium text-sm">Copyright &copy<span id="tahun"></span> AqniaHotel</p>
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