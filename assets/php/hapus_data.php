<?php
    include('config.php');
    $db = new Database();
    if(isset($_GET['kd_pembayar'])){
        $kode_peminjam = $_GET['id'];
        $data_peminjam = $db->kode_peminjam($kode_peminjam);
        $kode_peminjam = $data_peminjam[0]['kode_peminjam'];
        $db->hapus_data_peminjam($kd_pembayar);
        header('Location: tampil_data.php');
    }
    else
    {
        header('Location: tampil_data.php');
    }
?>