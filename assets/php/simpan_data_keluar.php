<?php
    include 'config.php' ;
    $koneksi = new database();

    if(isset($_POST['nomor'])){
        ///masalah\
        $koneksi->data_out($_POST['nomor'],$_POST['rincian'],$_POST['jumlah_pengeluaran'],$_POST['debit'],$_POST['saldo'],$_POST['keterangan']);
        header('location: table_out_admin.php');
    }

?>