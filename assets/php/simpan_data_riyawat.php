<?php
    include 'config.php' ;
    $koneksi = new database();
    $koneksi->tambah_data_riwayat($_POST['kd_riwayat'], $_POST['kd_metode'],$_POST['kd_minggu'],$_POST['kd_jumlah'],$_POST['kd_penerima'],$_POST['kd_pembayar'],$_POST['kd_status']);
?>