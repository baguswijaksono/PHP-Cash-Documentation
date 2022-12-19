<?php
    include 'config.php' ;
    $koneksi = new database();
    $koneksi->tambah_data_in($_POST['kd_minggu'], $_POST['kd_pembayar'],$_POST['minggu1'],$_POST['minggu2'],$_POST['minggu3'],$_POST['minggu4'],$_POST['minggu5'],$_POST['minggu6'],$_POST['minggu7'],$_POST['minggu8'],$_POST['minggu9'],$_POST['minggu10'],$_POST['minggu11'],$_POST['minggu12']);
?>