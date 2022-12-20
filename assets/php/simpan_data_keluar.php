<?php
    session_start();
    $username = $_SESSION['username'];
    include 'config.php' ;
    $koneksi = new database();
    foreach($koneksi->login_admin($username) as $x){
      $akses_id = $x['akses_id'];
      if($akses_id=='1'){?>
      <?php
    if(isset($_POST['nomor'])){
        $koneksi->data_out($_POST['nomor'],$_POST['rincian'],$_POST['jumlah_pengeluaran'],$_POST['debit'],$_POST['saldo'],$_POST['keterangan']);
        header('location: table_out_admin.php');
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