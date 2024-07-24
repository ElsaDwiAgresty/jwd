<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <button><a href="tambah.html" class="bg-blue-500 text-white py-2 px-4 rounded mt-2">Tambah
                Data+</a></button><br><br>

        <h2 class="text-2xl font-semibold mb-4">Data Pemesanan Laundry</h2>
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-xs leading-normal">
                    <th class="py-3 px-4 text-left">Id</th>
                    <th class="py-3 px-4 text-left">Nama Pelanggan</th>
                    <th class="py-3 px-4 text-left">No Telp Pelanggan</th>
                    <th class="py-3 px-4 text-left">Berat</th>
                    <th class="py-3 px-4 text-left">Harga Perkilo</th>
                    <th class="py-3 px-4 text-left">Lama Pengerjaan</th>
                    <th class="py-3 px-4 text-left">Total Bayar</th>
                    <th class="py-3 px-4 text-left">NIK</th>
                    <th class="py-3 px-4 text-left">Dokum Nota</th>
                    <th class="py-3 px-4 text-left">Action</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                <?php
                include 'koneksi.php';

                $query = "SELECT * FROM pemesanan";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td class='py-3 px-4'>" . $row["id"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["nama_pelanggan"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["notelp_pelanggan"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["berat"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["harga_perkilo"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["lama_pengerjaan"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["total"] . "</td>";
                        echo "<td class='py-3 px-4'>" . $row["NIK"] . "</td>";
                        echo "<td class='py-3 px-4'> <img src='" . $row["fileToUpload"] . "' width='100' height='100' </td>";
                        echo "<td class='py-3 px-4'>
                                <a href='edit.php?id=" . $row["id"] . "' class='text-blue-500 hover:underline'>Edit</a> | 
                                <a href='delete.php?id=" . $row["id"] . "' class='text-red-500 hover:underline'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='py-3 px-4 text-center'>0 results</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="text-center">
        <p>&copy; <span id="tahun"></span> Laundry jwd.</p>
        <script>
            // mengambil tanggal hari ini
            var now = new Date();
            var tahun = now.getFullYear();
            // menampilkan tahun di dalam elemen HTML
            document.getElementById("tahun").innerHTML = tahun;
        </script>
    </footer>



</body>

</html>