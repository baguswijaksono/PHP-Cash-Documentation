<?php
    session_start();
    session_destroy();
    $home_url = 'http://' . $_SERVER['HTTP_ HOST'] . dirname($_SERVER['PHP_SELF']) . '/index';
    header('Location: index.php');
?>