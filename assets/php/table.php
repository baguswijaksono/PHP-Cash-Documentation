<head>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/table_style.css">
</head>
<body>
  <?php
  include 'config.php';
  $db = new Database();
  ?>
  <table >
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <?php
              $z = $db-> itung_minggu();
              $hiya = implode("",$z);
              $hiyahiya = substr($hiya, -2); 
              $hiyahiyahiya = (int)$hiyahiya;
              $hiyahiyahiyahiya = $hiyahiyahiya-2;
      for ($i = 1; $i <= $hiyahiyahiyahiya; $i++) {
      echo  "<th>Minggu $i</th>";
      }
        ?>
      </tr>
      <?php
      $no=1;
      foreach($db->tampil_data() as $x){
      ?>
      <tr>
        <td>
          <?php 
          echo $x['na']; ?>
        </td>
        <td>
        <?php echo $x['nama']; ?>
        </td>
        <?php
        for ($i = 1; $i <= $hiyahiyahiyahiya; $i++) {
       echo "<td>";
        //perulangan disini
        if ($x["minggu"."$i"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu"."$i"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "<p class='status status-pending'>n/a</p>";
        }  
        echo "</td>";
      }
        ?>
      </tr>
      <?php
      }
      ?>
  </table>
</body>