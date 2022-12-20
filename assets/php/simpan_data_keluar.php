<?php
    include 'config.php' ;
    $koneksi = new database();
    $koneksi->tambah_data_out($_POST['nomor'], $_POST['rincian'],$_POST['jumlah_pengeluaran']
);header('location: table_out_admin.php')
?>