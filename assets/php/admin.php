<?php
    session_start();
    $username = $_SESSION['username'];
    include "config.php";
    $db = new Database();

    foreach($db->login_admin($username) as $x){
        $akses_id = $x['akses_id'];
        if($akses_id=='1'){
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
            <?php
                include "dashboard.php";
            ?>
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