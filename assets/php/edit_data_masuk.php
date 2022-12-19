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
    include 'config.php';
    $db = new Database();
    if(isset($_GET['id'])){
        $kode_peminjam = $_GET['id'];}
    ?>
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_edit_data_masuk.php?id=<?php echo $kode_peminjam; ?>" method='POST' class="form">
        <table>
            <tr>
            <tr>
            <td>
            <label for="name">Nama Pembayar</label>
            <select name="kd_minggu" id="kd_minggu" class="form__input">
                <?php
                echo "<option value='$kode_peminjam'>$kode_peminjam</option>";
                ?>
                </select>      
                </td>
            </tr>
            </tr>
            <tr>
            <td>
                <select name="kd_pembayar" id="kd_pembayar" class="form__input">
                <?php
    if ($kode_peminjam == 1) {
    echo "<option value='$kode_peminjam'>Ade Prasetyo</option>";
  } elseif ($kode_peminjam == 2) {
    echo "<option value='$kode_peminjam'>Afifah Naura Kamilia</option>";
  } elseif ($kode_peminjam == 3) {
    echo "<option value='$kode_peminjam'>Agustinus Ricad Simbolon</option>";
  }elseif ($kode_peminjam == 4) {
    echo "<option value='$kode_peminjam'>Annisa Aisyah Amini Nur Rohmah</option>";
  }elseif ($kode_peminjam == 5) {
    echo "<option value='$kode_peminjam'>Azyumi Azra</option>";
  }elseif ($kode_peminjam == 6) {
    echo "<option value='$kode_peminjam'>Bagus Muhammad Wijaksono</option>";
  }elseif ($kode_peminjam == 7) {
    echo "<option value='$kode_peminjam'>Dewi Maharani</option>";
  }elseif ($kode_peminjam == 8) {
    echo "<option value='$kode_peminjam'>Dwi Krisnandi</option>";
  }elseif ($kode_peminjam == 9) {
    echo "<option value='$kode_peminjam'>Faris Adhi Laksana Yusuf</option>";
  }elseif ($kode_peminjam == 10) {
    echo "<option value='$kode_peminjam'>Febrian Giovanni</option>";
  }elseif ($kode_peminjam == 11) {
    echo "<option value='$kode_peminjam'>Ferina Ayu Fella Puspita</option>";
  }elseif ($kode_peminjam == 12) {
    echo "<option value='$kode_peminjam'>Kanya Audy Prahmadyta</option>";
  }elseif ($kode_peminjam == 13) {
    echo "<option value='$kode_peminjam'>Maulana Arya Yoga Juliansyah</option>";
  }elseif ($kode_peminjam == 14) {
    echo "<option value='$kode_peminjam'>Muhammad Naufal Yesha Rendra</option>";
  }elseif ($kode_peminjam == 15) {
    echo "<option value='$kode_peminjam'>Nabilla Syaharani Putri S</option>";
  }elseif ($kode_peminjam == 16) {
    echo "<option value='$kode_peminjam'>Nandya Nurmala</option>";
  }elseif ($kode_peminjam == 17) {
    echo "<option value='$kode_peminjam'>Putri Ayu Widyaningrum</option>";
  }elseif ($kode_peminjam == 18) {
    echo "<option value='$kode_peminjam'>Raihana Khalika Putri</option>";
  }elseif ($kode_peminjam == 19) {
    echo "<option value='$kode_peminjam'>Salma Afdhila Khalda</option>";
  }elseif ($kode_peminjam == 20) {
    echo "<option value='$kode_peminjam'>Syalita Widyandini</option>";
  }elseif ($kode_peminjam == 21) {
    echo "<option value='$kode_peminjam'>Vannisa Ardiani</option>";
  }elseif ($kode_peminjam == 22) {
    echo "<option value='$kode_peminjam'>Yudha Zaniargo</option>";
  }?>
                </select>      
                </td>
            </tr>
           
            <?php
      $no=1;
      foreach($db->ambil_data_lunas($kode_peminjam) as $x){
      ?> <tr>
            <td>
                <select name="minggu1" id="minggu1" class="form__input">
                    <?php
                    if($x['minggu1']==1){
                        echo "<option value='1'>Lunas</option>";
                        echo "<option value='2'>Belum Lunas</option>";
                    }else{
                        echo "<option value='2'>Belum Lunas</option>";
                        echo "<option value='1'>Lunas</option>";
                    }
                    ?>
                </select>      
                </td>
                </tr>
      <?php
      }
      ?>
      
            <tr>
            <td>
                <select name="minggu2" id="minggu2" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu3" id="minggu3" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu4" id="minggu4" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu5" id="minggu5" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu6" id="minggu6" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu7" id="minggu7" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu8" id="minggu8" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
                <select name="minggu9" id="minggu9" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>
                <select name="minggu10" id="minggu10" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>
                <select name="minggu11" id="minggu11" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>