<?php
session_start();
$username = $_SESSION['username'];
    include('config.php');
    $koneksi = new database();
    foreach($koneksi->login_admin($username) as $x){
    $akses_id = $x['akses_id'];
    if($akses_id=='1'){
        ?>
        <?php
    if(isset($_GET['id'])){
        $a=$_GET['id'];
        $koneksi->edit_data_out($a,$_POST['b'],$_POST['c'],$_POST['d'],$_POST['e'],$_POST['f']);
    };header('location: table_out_admin.php')
?>
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>