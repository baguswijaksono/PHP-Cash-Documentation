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
    background-image: url(../img/retsu.jpg);
    background-position: top;
    background-repeat: no-repeat;
    background-size: 70%;
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
                <li><a href="assets/php/payment_history.php">History</a></li>
                <li><a href="assets/php/cash.php">Cash</a></li>
                <li><a href="assets/php/cash.php">Cash</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
<center>
    <h1>Selamat Datang di Dashboard<br>Administrators</h1>
    <a href="add_data_masuk.php"><button type="button">Menambah Data</button></a>
    <a href="modify_data.php"><button type="button">Mengubah Data</button></a>
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