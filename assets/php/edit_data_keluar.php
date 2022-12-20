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
    <form action="simpan_edit_data_keluar.php?id=<?php echo $nomor; ?>" method='POST' class="form">
        <table>
            <tr>
            <td>
            <label for="name">Nama Pembayar</label>
            <select name="a" id="nomor" class="form__input">
                <?php
                echo "<option value='$nomor'>$nomor</option>";
                ?>
                </select>      
                </td>
            </tr>  
            <?php
      $no=1;
      foreach($db->ambil_data_keluar($nomor) as $x){
  $rincian=$x['rincian'];
  $jumlah=$x['jumlah_pengeluaran'];
  $debit=$x['debit'];
  $saldo=$x['saldo'];
  $keterangan=$x['keterangan'];
                echo "<tr>";
              echo "<td><input type='text' name='b' class='form__input' value='$rincian'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><input type='text' name='c' class='form__input' value='$jumlah'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><input type='text' name='d' class='form__input' value='$debit'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><input type='text' name='e' class='form__input' value='$saldo'></td>";
              echo "</tr>";
              echo "<tr>";
              echo "<td><input type='text' name='f' class='form__input' value='$keterangan'></td>";
              echo "</tr>";
                ?> 
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