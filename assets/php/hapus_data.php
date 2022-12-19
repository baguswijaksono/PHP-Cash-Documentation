<?php
    include('config.php');
    $db = new Database();
    if(isset($_GET['id'])){
        $kd_pembayar = $_GET['id'];
        $db->hapus_data_masuk($kd_pembayar);
        header('Location: table_admin.php');
    }
?>