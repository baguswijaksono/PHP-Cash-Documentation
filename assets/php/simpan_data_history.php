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
    $koneksi = new database();
    $koneksi->tambah_data_peminjam($_POST['kode_peminjam'],$_POST['nama_peminjam'],
        $_POST['jenis_kelamin'],$_POST['tanggal_lahir'],$_POST['alamat'],$_POST['pekerjaan']);
?>
</body>
</html>