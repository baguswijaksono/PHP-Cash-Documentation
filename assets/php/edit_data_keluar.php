<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\css\add_data_style.css">
</head>
<body>
<?php
    session_start();
    $username = $_SESSION['username'];
  include 'config.php';
  $db = new Database();
  if(isset($_GET['id'])){
    $nomor = $_GET['id'];}
  foreach($db->login_admin($username) as $x){
    $akses_id = $x['akses_id'];
    if($akses_id=='1'){
  ?>
    <h3>Edit Data Kas Keluar</h3>
    <form action="simpan_edit_data_masuk.php?id=<?php echo $nomor; ?>" method='POST' class="form">
        <table>
            <tr>
            <td>
            <label for="name">Nama Pembayar</label>
            <select name="kd_minggu" id="kd_minggu" class="form__input">
                <?php
                echo "<option value='$nomor'>$nomor</option>";
                ?>
                </select>      
                </td>
            </tr>  
            <?php
      $no=1;
      foreach($db->ambil_data_keluar($nomor) as $x){
      ?> 
                <tr>
                <td><input type="text" name="rincian" class="form__input"></td>
                </tr>
                <tr>
                <td><input type="text" name="jumlah" class="form__input"></td>
                </tr>
                <tr>
                <td><input type="text" name="debit" class="form__input"></td>
                </tr>
                <tr>
                <td><input type="text" name="saldo" class="form__input"></td>
                </tr>
      <?php
      }
      ?>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>