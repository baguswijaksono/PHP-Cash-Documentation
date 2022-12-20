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

  ?>
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
        $kode_peminjam = $_GET['id'];
        $nama = substr($kode_peminjam,1,1);//kode penerima
        $nama1 = substr($kode_peminjam,2,1);// kode metode
        $nama2 = substr($kode_peminjam,3,1);//kode jumlah
        $nama3 = substr($kode_peminjam,4,1);//kode status
        $nama4 = substr($kode_peminjam,5,2);//kd pembayar
        $nama5 = substr($kode_peminjam,7,2);//kd minggu
    }
    ?>
    <h3>Edit Data Peminjam</h3>
    <form action="simpan_data_riyawat.php" method='POST' class="form">
        <table>
        <tr>
            <td>
            <label for="name">Kode Transaksi</label>
            <select name="kd_riwayat" id="kd_riwayat" class="form__input">
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
    if ($nama4 == 1) {
    echo "<option value='$nama4'>Ade Prasetyo</option>";
  } elseif ($nama4 == 2) {
    echo "<option value='$nama4'>Afifah Naura Kamilia</option>";
  } elseif ($nama4 == 3) {
    echo "<option value='$nama4'>Agustinus Ricad Simbolon</option>";
  }elseif ($nama4 == 4) {
    echo "<option value='$nama4'>Annisa Aisyah Amini Nur Rohmah</option>";
  }elseif ($nama4 == 5) {
    echo "<option value='$nama4'>Azyumi Azra</option>";
  }elseif ($nama4 == 6) {
    echo "<option value='$nama4'>Bagus Muhammad Wijaksono</option>";
  }elseif ($nama4 == 7) {
    echo "<option value='$nama4'>Dewi Maharani</option>";
  }elseif ($nama4 == 8) {
    echo "<option value='$nama4'>Dwi Krisnandi</option>";
  }elseif ($nama4 == 9) {
    echo "<option value='$nama4'>Faris Adhi Laksana Yusuf</option>";
  }elseif ($nama4 == 10) {
    echo "<option value='$nama4'>Febrian Giovanni</option>";
  }elseif ($nama4 == 11) {
    echo "<option value='$nama4'>Ferina Ayu Fella Puspita</option>";
  }elseif ($nama4 == 12) {
    echo "<option value='$nama4'>Kanya Audy Prahmadyta</option>";
  }elseif ($nama4 == 13) {
    echo "<option value='$nama4'>Maulana Arya Yoga Juliansyah</option>";
  }elseif ($nama4 == 14) {
    echo "<option value='$nama4'>Muhammad Naufal Yesha Rendra</option>";
  }elseif ($nama4 == 15) {
    echo "<option value='$nama4'>Nabilla Syaharani Putri S</option>";
  }elseif ($nama4 == 16) {
    echo "<option value='$nama4'>Nandya Nurmala</option>";
  }elseif ($nama4 == 17) {
    echo "<option value='$nama4'>Putri Ayu Widyaningrum</option>";
  }elseif ($nama4 == 18) {
    echo "<option value='$nama4'>Raihana Khalika Putri</option>";
  }elseif ($nama4 == 19) {
    echo "<option value='$nama4'>Salma Afdhila Khalda</option>";
  }elseif ($nama4 == 20) {
    echo "<option value='$nama4'>Syalita Widyandini</option>";
  }elseif ($nama4 == 21) {
    echo "<option value='$nama4'>Vannisa Ardiani</option>";
  }elseif ($nama4 == 22) {
    echo "<option value='$nama4'>Yudha Zaniargo</option>";
  }?>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
            <label for="name">Nama Penerima</label>
                <select name="kd_penerima" id="kd_penerima" class="form__input">
                <?php
    if ($nama == 1) {
    echo "<option value='$nama'>Nandya Nurmala</option>";
  } elseif ($nama == 2) {
    echo "<option value='$nama'>Bagus Muhammd Wijaksono</option>";
  } ?>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
            <label for="name">Metode Pembayaran</label>
                <select name="kd_metode" id="kd_metode" class="form__input">
                <?php
    if ($nama2 == 1) {
    echo "<option value='$nama2'>Tunai</option>";
  } elseif ($nama2 == 2) {
    echo "<option value='$nama2'>Gopay</option>";
  }elseif ($nama2 == 3) {
    echo "<option value='$nama2'>Dana</option>";
  }elseif ($nama2 == 4) {
    echo "<option value='$nama2'>Ovo</option>";
  } ?>
                </select>      
                </td>
            </tr>
            <tr>
            <td>
            <label for="name">Pembayaran Untuk Minggu</label>
                <select name="kd_minggu" id="kd_minggu" class="form__input">
                <?php
    if ($nama3 == 1) {
    echo "<option value='$nama3'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  } elseif ($nama3 == 2) {
    echo "<option value='$nama3'>Minggu 2</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 3) {
    echo "<option value='$nama3'>Minggu 3</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 4) {
    echo "<option value='$nama3'>Minggu 4</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 5) {
    echo "<option value='$nama3'>Minggu 5</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 6) {
    echo "<option value='$nama3'>Minggu 6</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 7) {
    echo "<option value='$nama3'>Minggu 7</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 8) {
    echo "<option value='$nama3'>Minggu 8</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 9) {
    echo "<option value='$nama3'>Minggu 9</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='10'>Minggu 10</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 10) {
    echo "<option value='$nama3'>Minggu 10</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='11'>Minggu 11</option>";
  }elseif ($nama3 == 11) {
    echo "<option value='$nama3'>Minggu 11</option>";
    echo "<option value='1'>Minggu 1</option>";
    echo "<option value='2'>Minggu 2</option>";
    echo "<option value='3'>Minggu 3</option>";
    echo "<option value='4'>Minggu 4</option>";
    echo "<option value='5'>Minggu 5</option>";
    echo "<option value='6'>Minggu 6</option>";
    echo "<option value='7'>Minggu 7</option>";
    echo "<option value='8'>Minggu 8</option>";
    echo "<option value='9'>Minggu 9</option>";
    echo "<option value='10'>Minggu 10</option>";
  } ?>
                </select>      
                </td>
            </tr>
            <tr>
<td>
<label for="name">Jumlah</label>
                <select name="kd_jumlah" id="kd_jumlah" class="form__input">
                <?php
                    if ($nama5 == 1) {
                      echo "<option value='$nama5'>Rp.5000,00</option>";
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='6'>Rp.30000,00</option>";
                    } elseif ($nama5 == 2) {
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='1'>Rp.5000,00</option>";
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='6'>Rp.30000,00</option>";
                    }elseif ($nama5 == 3) {
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='1'>Rp.5000,00</option>";
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='6'>Rp.30000,00</option>";
                    }elseif ($nama5 == 4) {
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='1'>Rp.5000,00</option>";
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='6'>Rp.30000,00</option>";
                    }elseif ($nama5 == 5) {
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='1'>Rp.5000,00</option>"; 
                      echo "<option value='6'>Rp.30000,00</option>";
                    }elseif ($nama5 == 6) {
                      echo "<option value='6'>Rp.30000,00</option>";
                      echo "<option value='5'>Rp.25000,00</option>";
                      echo "<option value='4'>Rp.20000,00</option>";
                      echo "<option value='3'>Rp.15000,00</option>";
                      echo "<option value='2'>Rp.10000,00</option>";
                      echo "<option value='1'>Rp.5000,00</option>"; 
                    }
                ?>
</td>
            </tr>
            <tr>
            <td>
<label for="name">Status</label>
                <select name="kd_status" id="kd_status" class="form__input">
                <?php
                    if ($nama3 == 1) {
                      echo "<option value='1'>Lunas</option>";
                      echo "<option value='2'>Belum Lunas</option>";
                    } elseif ($nama3 == 2) {
                      echo "<option value='2'>Belum Lunas</option>";
                      echo "<option value='1'>Lunas</option>";               
                    }
                ?>
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