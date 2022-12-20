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
    ?>
    <h3>Tambah Data Kas Masuk</h3>
    <form action="simpan_data.php" method='POST' class="form">
        <table>
            <tr>
            </tr>
            <tr>
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
            <td>
                <select name="minggu1" id="minggu1" class="form__input">
                <option value="1">Lunas</option>
                <option value="2">Belum Lunas</option>
                </select>      
                </td>
            </tr>
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