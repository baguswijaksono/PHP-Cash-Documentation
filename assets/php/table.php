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
        for ($i = 1; $i < 10; $i++){
          echo "<th>";
          echo 'minggu '.$i;
          echo "</th>";
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
          echo $x['kd_minggu']; ?>
        </td>
        <td>
        <?php echo $x['nama_pembayar']; ?>
        </td>
        <?php 
        for ($i = 1; $i < 3; $i++){
          echo "<td>";
          echo $x['minggu'.$i];
          echo "</td>";
        }
         ?>
        </td>
      </tr>
      <?php
      }
      ?>
  </table>
</body>