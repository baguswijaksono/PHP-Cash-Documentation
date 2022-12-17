<?php
    include 'config.php' ;
    $koneksi = new database();
    $koneksi->tambah_data_peminjam($_POST['nama'], $_POST['minggu1'],$_POST['minggu2'],$_POST['minggu3'],$_POST['minggu4'],$_POST['minggu5'],$_POST['minggu6'],$_POST['minggu7'],$_POST['minggu8']);
?>