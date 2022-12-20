<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body> 
    <?php
        include 'config.php';
        $db = new Database();
    ?>
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_data_keluar.php" method="post">
    <table>
        <tr>
            <td>Kode Peminjam</td>
            <td><input type="text" name="nomor"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="rincian"></td>
        </tr>
        <tr>
                <td>Pekerjaan</td>
                <td><input type="text" name="jumlah_pengeluaran"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan"></td>
        </tr>
</table>
</form>
</body>
</html>