<?php
    session_start();
    $username = $_SESSION['username'];
  include 'config.php';
  $db = new Database();
  foreach($db->login_admin($username) as $x){
    $akses_id = $x['akses_id'];
    if($akses_id=='1'){
        ?>
        <?php
    if(isset($_GET['id'])){
        $kd_pembayar = $_GET['id'];
        $db->hapus_data_riwayat($kd_pembayar);
        header('Location: payment_history_admin.php');
    }
?>
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>