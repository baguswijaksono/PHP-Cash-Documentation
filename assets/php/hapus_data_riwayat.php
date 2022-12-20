<?php
    include('config.php');
    $db = new Database();
    if(isset($_GET['id'])){
        $kd_pembayar = $_GET['id'];
        $db->hapus_data_riwayat($kd_pembayar);
        header('Location: payment_history_admin.php');
    }
?>