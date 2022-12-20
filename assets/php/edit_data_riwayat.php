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
        $kode_peminjam = $_GET['id'];
        $nama = substr($kode_peminjam,2,1);
        $nama1 = substr($kode_peminjam,4,1);
    }
        //aturan kode transaksi = 4010201
    ?>
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_data_riyawat.php" method='POST' class="form">
        <table>
        <tr>
            <td>
            <label for="name">Kode Transaksi</label>
            <select name="kd_minggu" id="kd_riwayat" class="form__input">
                <?php
                echo "<option value='$kode_peminjam'>$kode_peminjam</option>";
                ?>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
            <label for="name">Nama Pembayar</label>
                <select name="kd_pembayar" id="kd_pembayar" class="form__input">
                <?php
    if ($nama == 1) {
    echo "<option value='$nama'>Ade Prasetyo</option>";
  } elseif ($nama == 2) {
    echo "<option value='$nama'>Afifah Naura Kamilia</option>";
  } elseif ($nama == 3) {
    echo "<option value='$nama'>Agustinus Ricad Simbolon</option>";
  }elseif ($nama == 4) {
    echo "<option value='$nama'>Annisa Aisyah Amini Nur Rohmah</option>";
  }elseif ($nama == 5) {
    echo "<option value='$nama'>Azyumi Azra</option>";
  }elseif ($nama == 6) {
    echo "<option value='$nama'>Bagus Muhammad Wijaksono</option>";
  }elseif ($nama == 7) {
    echo "<option value='$nama'>Dewi Maharani</option>";
  }elseif ($nama == 8) {
    echo "<option value='$nama'>Dwi Krisnandi</option>";
  }elseif ($nama == 9) {
    echo "<option value='$nama'>Faris Adhi Laksana Yusuf</option>";
  }elseif ($nama == 10) {
    echo "<option value='$nama'>Febrian Giovanni</option>";
  }elseif ($nama == 11) {
    echo "<option value='$nama'>Ferina Ayu Fella Puspita</option>";
  }elseif ($nama == 12) {
    echo "<option value='$nama'>Kanya Audy Prahmadyta</option>";
  }elseif ($nama == 13) {
    echo "<option value='$nama'>Maulana Arya Yoga Juliansyah</option>";
  }elseif ($nama == 14) {
    echo "<option value='$nama'>Muhammad Naufal Yesha Rendra</option>";
  }elseif ($nama == 15) {
    echo "<option value='$nama'>Nabilla Syaharani Putri S</option>";
  }elseif ($nama == 16) {
    echo "<option value='$nama'>Nandya Nurmala</option>";
  }elseif ($nama == 17) {
    echo "<option value='$nama'>Putri Ayu Widyaningrum</option>";
  }elseif ($nama == 18) {
    echo "<option value='$nama'>Raihana Khalika Putri</option>";
  }elseif ($nama == 19) {
    echo "<option value='$nama'>Salma Afdhila Khalda</option>";
  }elseif ($nama == 20) {
    echo "<option value='$nama'>Syalita Widyandini</option>";
  }elseif ($nama == 21) {
    echo "<option value='$nama'>Vannisa Ardiani</option>";
  }elseif ($nama == 22) {
    echo "<option value='$nama'>Yudha Zaniargo</option>";
  }?>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
            <label for="name">Nama Penerima</label>
                <select name="kd_penerima" id="kd_penerima" class="form__input">
                <?php
    if ($nama1 == 1) {
    echo "<option value='$nama'>Nandya Nurmala</option>";
  } elseif ($nama1 == 2) {
    echo "<option value='$nama'>Bagus Muhammd Wijaksono</option>";
  } ?>
                </select>      
                </td>
            </tr>
            <tr>
                <td>Metode </td>
                <td><input type="text" name="kd_metode"></td>
            </tr>
            <tr>
                <td>Pembayaran Untuk </td>
                <td><input type="text" name="kd_minggu"></td>
            </tr>
            <tr>
                <td>Jumlah </td>
                <td><input type="text" name="kd_jumlah"></td>
            </tr>
            <tr>
                <td>Status </td>
                <td><input type="text" name="kd_status"></td>
            </tr>
            <tr>
                <td>
                <input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>
</html>