<?php
    session_start();
    $username = $_SESSION['username'];
    include 'config.php' ;
    $koneksi = new database();
    foreach($koneksi->login_admin($username) as $x){
        $akses_id = $x['akses_id'];
        if($akses_id=='1'){
            ?>
            <?php
    $koneksi->tambah_data_riwayat($_POST['kd_riwayat'],$_POST['kd_pembayar'], $_POST['kd_penerima'],$_POST['kd_metode'],$_POST['kd_minggu'],$_POST['kd_jumlah'],$_POST['kd_status']);
    header('location: payment_history_admin.php');
?>
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>