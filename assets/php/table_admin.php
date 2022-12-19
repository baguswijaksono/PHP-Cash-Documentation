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
        <th>Minggu 1</th>
        <th>Minggu 2</th>
        <th>Minggu 3</th>
        <th>Minggu 4</th>
        <th>Minggu 5</th>
        <th>Minggu 6</th>
        <th>Minggu 7</th>
        <th>Minggu 8</th>
        <th>Minggu 9</th>
        <th>Minggu 10</th>
        <th>Minggu 11</th>
        <th>Minggu 12</th>
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
        for ($i = 1; $i < 12; $i++){
          echo "<td>";
          if($x['minggu'.$i] == "1"){
            echo "Lunas";
          }else{
            echo "Belum Lunas";
          }
          echo "</td>";
        }
         ?>
        </td>
        <td>
        <a href="edit_data.php?id=<?php echo $x['kd_minggu']; ?>">Edit</a>
        </td>
        <td>
        <a href="hapus_data.php?id=<?php echo $x['kd_minggu']; ?>">Hapus</a>
        </td>
      </tr>
      <?php
      }
      ?>
  </table>
</body>