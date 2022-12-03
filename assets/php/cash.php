<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admindas.css">
</head>
<body>
<center><h1 class="content-header-title">Good afternoon :3, <br />for now IK-2D have<small>Rp.324.920,00</small></h1></center>
<?php
$teks = array("btw Bagaimana kabarmu hari ?", "Apa ada yang kamu perlukan ?", "Berikut ini jumlah kash yang ada untuk sekarang");

$randomNumber = rand(0,2);
($randomNumber);
echo $teks[$randomNumber];
$var = date('H:i');
$var1 =substr($var,0,2);
$var2 = (int)$var1+6;
echo $var2;
if($var2>19){
    echo "selamat malam";

}elseif($var2>15){
    echo "selamat sore";
}
elseif($var2>12){
    echo "selamat siang";
}elseif($var2>7){
    echo "selamat pagi";
}

?>
</body>
</html>