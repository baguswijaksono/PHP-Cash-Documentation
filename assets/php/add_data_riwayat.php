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
  foreach($db->login_admin($username) as $x){
    $akses_id = $x['akses_id'];
    if($akses_id=='1'){
  ?>
    <h3>Tambah Data Peminjam</h3>
    <form action="simpan_data_riwayat.php" method='POST' class="form">
        <table>
            <tr>
                <td>Kode Transaksi</td>
                <td><input type="text" name="kd_riwayat"></td>
            </tr>
            <tr>
                <td>Nama Pembayar</td>
                <td>
                <select name="kd_pembayar" id="kd_pembayar" class="form__input">
                <option value="1">Ade Prasetyo</option>
              <option value="2">Afifah Naura Kamilia</option>
              <option value="3">Agustinus Ricad Simbolon</option>
              <option value="4">Annisa Aisyah Amini Nur Rohmah</option>
              <option value="5">Azyumi Azra</option>
              <option value="6">Bagus Muhammad Wijaksono</option>
              <option value="7">Dewi Maharani</option>
              <option value="8">Dwi Krisnandi</option>
              <option value="9">Faris Adhi Laksana Yusuf</option>
              <option value="10">Febrian Giovanni</option>
              <option value="11">Ferina Ayu Fella Puspita</option>
              <option value="12">Kanya Audy Prahmadyta</option>
              <option value="13">Maulana Arya Yoga Juliansyah</option>
              <option value="14">Muhammad Naufal Yesha Rendra</option>
              <option value="15">Nabilla Syaharani Putri S</option>
              <option value="16">Nandya Nurmala</option>
              <option value="17">Putri Ayu Widyaningrum</option>
              <option value="18">Raihana Khalika Putri</option>
              <option value="19">Salma Afdhila Khalda</option>
              <option value="20">Syalita Widyandini</option>
              <option value="21">Vannisa Ardiani</option>
              <option value="22">Yudha Zaniargo</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>Nama Penerima</td>
                <td>
                <select name="kd_penerima" id="kd_penerima" class="form__input">
                <option value="1">Nandya Nurmala</option>
                <option value="2">Bagus Muhammad Wijaksono</option>

                </select>      
                </td>
            </tr>
            <tr>
                <td>Metode </td>
                <td>
                <select name="kd_metode" id="kd_metode" class="form__input">
              <option value="1">Tunai</option>
              <option value="2">Gopay</option>
              <option value="3">Dana</option>
              <option value="4">Ovo</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>Pembayaran Untuk </td>
                <td>
                <select name="kd_minggu" id="kd_minggu" class="form__input">
              <option value="1">Minggu 1</option>
              <option value="2">Minggu 2</option>
              <option value="3">Minggu 3</option>
              <option value="4">Minggu 4</option>
              <option value="5">Minggu 5</option>
              <option value="6">Minggu 6</option>
              <option value="7">Minggu 7</option>
              <option value="8">Minggu 8</option>
              <option value="9">Minggu 9</option>
              <option value="10">Minggu 10</option>
              <option value="11">Minggu 11</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>Jumlah </td>
                <td>
                <select name="kd_jumlah" id="kd_jumlah" class="form__input">
              <option value="1">Rp.5000,00</option>
              <option value="2">Rp.10000,00</option>
              <option value="3">Rp.15000,00</option>
              <option value="4">Rp.20000,00</option>
              <option value="5">Rp.25000,00</option>
              <option value="6">Rp.30000,00</option>
                </select>      
                </td>
            </tr>
            <tr>
                <td>Status </td>
                <td>
                <select name="kd_status" id="kd_status" class="form__input">
              <option value="1">Selesai</option>
              <option value="2">Belum Selesai</option>
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
<?php
        }
        else{
            echo "Anda belum login";
            header("Location: login.php");
        }
    }
?>