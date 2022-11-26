<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/payment_method.css">
</head>
<body>
    <div class="banner"></div>
    <div class="container">
        <div class="article-container">
            
<?php
$x=0;
while($x <= 5) {
    echo "<article class='article-card'>";
    echo "<figure class='article-image'>";
    echo "<img src='../img/girl.jpg' alt='1'>";
    echo "</figure>";
    echo "<div class='article-content'>";
    echo "<a href='' class='card-category'>Travel</a>";
    echo "<figure class='article-image'>";
    echo "<h3 class='cart-title'>Trip Planning for total beginers.</h3>";
    echo "<p class='card-excerpt'>Lorem ipsum dolor sit amet,</p>";
    echo "</div>";
    echo "</article>";
    $x++;
  } 
?>

        </div>
    </div>
</body>
</html>

                    

            