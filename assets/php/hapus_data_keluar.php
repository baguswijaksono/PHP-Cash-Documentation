<?php
    include('config.php');
    $db = new Database();
    if(isset($_GET['id'])){
        $kd_pembayar = $_GET['id'];
        $db->hapus_data_keluar($kd_pembayar);
        header('Location: table_out_admin.php');
    }
?>