<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link rel="stylesheet" href="../css/payment_method_style.css">

<section class="hero-section">
  <div class="card-grid">
    <?php
    $py = array("https://user-images.githubusercontent.com/106671990/205439385-80b24143-fefa-418e-8d34-4ee32f5e5a0e.png",
                "https://user-images.githubusercontent.com/106671990/205439321-c3f9bfec-9f25-4914-95f4-c068b58583f4.png",
                "https://user-images.githubusercontent.com/106671990/205439342-b2f15f4e-c303-4d11-b290-6a0af704dbb6.png",
                "https://user-images.githubusercontent.com/106671990/205439361-784d54bb-0653-49f4-b091-94548171a5e0.png");

    $path = array("https://user-images.githubusercontent.com/106671990/205439385-80b24143-fefa-418e-8d34-4ee32f5e5a0e.png",
                "https://user-images.githubusercontent.com/106671990/205439321-c3f9bfec-9f25-4914-95f4-c068b58583f4.png",
                "https://user-images.githubusercontent.com/106671990/205439342-b2f15f4e-c303-4d11-b290-6a0af704dbb6.png",
                "https://user-images.githubusercontent.com/106671990/205439361-784d54bb-0653-49f4-b091-94548171a5e0.png");

    for ($x = 0; $x <= 3; $x++) {
        echo "<a class='card' href='$path[$x]'>";
        echo "<div class='card__background' style='background-image: url($py[$x])'></div>";
        echo "</a>";
      } 

    ?>
  <div>
</section>