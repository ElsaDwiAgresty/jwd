<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM pemesanan where id='$id'";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    ?>
    <form action="update.php" method="post">
        <table>
            <tr>
                <td>Nama Pelanggan</td>
                <td>
                    <input type="text" name="id" value="<?php echo $row['id'] ?>" hidden>
                    <input type="text" name="nama_pelanggan" value="<?php echo $row['nama_pelanggan'] ?>">
                </td>
            </tr>
            <tr>
                <td>No Telp Pelanggan</td>
                <td><input type="text" name="notelp_pelanggan" value="<?php echo $row['notelp_pelanggan'] ?>"></td>
            </tr>
            <tr>
                <td>Berat</td>
                <td><input type="text" name="berat" value="<?php echo $row['berat'] ?>"></td>
            </tr>
            <tr>
                <td>Harga Perkilo</td>
                <td><input type="text" name="harga_perkilo" value="<?php echo $row['harga_perkilo'] ?>"></td>
            </tr>
            <tr>
                <td>Lama Pengerjaan</td>
                <td><input type="text" name="lama_pengerjaan" value="<?php echo $row['lama_pengerjaan'] ?>"></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td><input type="text" name="total" value="<?php echo $row['total'] ?>"></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="NIK" value="<?php echo $row['NIK'] ?>" maxlength="16" minlength="16"></td>
            </tr>
            <tr>
                <td>Dokum Nota</td>
                <td><input type="text" name="fileToUpload" value="<?php echo $row['fileToUpload'] ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>

        </table>
    </form>
<?php } ?>