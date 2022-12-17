<?php
    include "config.php";
    $db = new Database();
    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach($db->login_admin($username, $password) as $x){
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;
        $akses_id = $x['akses_id'];
        $pass = $x['password'];

        if(($akses_id == '1') AND ($password==$pass)){
            header('Location: admin.php');
        }
        else{
            header('Location: login.php');
        }
    }
?>