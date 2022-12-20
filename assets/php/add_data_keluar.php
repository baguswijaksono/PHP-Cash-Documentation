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
    session_start();
    $username = $_SESSION['username'];
  include 'config.php';
  $db = new Database();
  foreach($db->login_admin($username) as $x){
    $akses_id = $x['akses_id'];
    if($akses_id=='1'){
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
                <td>nomor</td>
                <td><input type="text" name="jumlah_pengeluaran"></td>
            </tr>
            <tr>
                <td>rincian </td>
                <td><input type="text" name="debit"></td>
            </tr>
            <tr>
                <td>nomor</td>
                <td><input type="text" name="saldo"></td>
            </tr>
            <tr>
                <td>rincian </td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>