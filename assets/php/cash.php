
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total cash</title>
    <link rel="stylesheet" href="../css/cash_style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
    <div class="hero">
        <left><h1 class="content-header-title"> <?php $var = date('H:i');
            $var1 =substr($var,0,2);
            $var2 = (int)$var1+6;
            if($var2>19){
                echo "Good Night :)";

            }elseif($var2>15){
                echo "Good Evening :3";
            }
            elseif($var2>12){
                echo "Good Afternoon :p";
            }elseif($var2>7){
                echo "Good Morning !!";
            };
            ?>
            <br>
            <?php
            $teks = array("How Are you today ?", "Do you need Something ?", "This is the Amount of mooney we have right now!!");
    
            $randomNumber = rand(0,2);
            ($randomNumber);
            echo $teks[$randomNumber];
            ?>, <br />for now IK-2D have<br><br>Rp.324.920,00</h1>
        </left>

        
    </div>
    </div>
</body>
</html>