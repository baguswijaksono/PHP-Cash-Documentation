<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'config.php';
    $db = new Database();
    ?>
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_data.php" method='POST'>
        <table>
            <tr>
                <td>Kode Peminjam</td>
                <td><input type="text" name="kd_riwayat"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_metode"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_minggu"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_jumlah"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_penerima"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_pembayar"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td><input type="text" name="kd_status"></td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>