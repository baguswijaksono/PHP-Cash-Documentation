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
    <form action="simpan_data_keluar.php" method='POST'>
        <table>
            <tr>
                <td>nomor</td>
                <td><input type="text" name="nomor"></td>
            </tr>
            <tr>
                <td>rincian </td>
                <td><input type="text" name="rincian"></td>
            </tr>
            <tr>
                <td>jumlah_pengeluaran</td>
                <td><input type="text" nama='jumlah_pengeluaran'></td>
            </tr>
            <tr>
                <td>debit</td>
                <td><input type="text" nama='debit'></td>
            </tr>
            <tr>
                <td>
                    Pekerjaan
                </td>
                <td>
                    <input type="text" nama="saldo">
                </td>
            </tr>
            <tr>
                <td>
                    Pekerjaan
                </td>
                <td>
                    <input type="text" nama="keterangan">
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>