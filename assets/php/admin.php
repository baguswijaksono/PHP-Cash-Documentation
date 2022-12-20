<?php
    session_start();
    $username = $_SESSION['username'];
    include "config.php";
    $db = new Database();

    foreach($db->login_admin($username) as $x){
        $akses_id = $x['akses_id'];
        if($akses_id=='1'){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Web Dinamis</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'Poppins' ,sans-serif;
}
.hero{
    min-height: 100vh;
    width: 100%;
    background-color: #000;
    background-image: url(../img/admin.jpg);
    background-position: top;
    background-repeat: no-repeat;
    background-size: 100%;
    color: white;
    padding: 0 8%;
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;

}
.logo{
    width: 100px;
}
nav ul li{
    display: inline-block;
    list-style: none;
    margin: 10px 30px;
    margin: 10px 30px;
}
nav ul li a{
    color: white;
    text-decoration: none;
}
.hero h1{
    font-size: 75px;
    margin-top: 12%;
    padding-top: 5%;
}
.hero button{
    background-color: #393939;
    border: 0;
    outline: none;
    padding: 15px 35px;
    color: white;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
}
    </style>
</head>
<body>
    
    <div class="hero">
        <nav>
            <img src="assets/img/planetX-logo.png" alt="" class="logo">
            <ul>
                <li><a href="payment_history_admin.php">Lihat Riwayat</a></li>
                <li><a href="table_admin.php">Lihat Kas Masuk</a></li>
                <li><a href="table_out_admin.php">Lihat Kas Keluar</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
<center>
    <h1>Selamat Datang di Dashboard<br>Administrator</h1>
    <a href="add_data_masuk.php"><button type="button">Menambah Data Masuk</button></a>
    <a href="add_data_keluar.php"><button type="button">Menambah Data Keluar</button></a>
    <a href="add_data_riwayat.php"><button type="button">Menambah Data Riwayat</button></a>
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