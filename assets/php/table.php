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
  <table border="1">
      <tr>
        <th>Nomor</th>
        <th>Nama</th>
        <th>Minggu 1</th>
        <th>Minggu 2</th>
        <th>Minggu 3</th>
        <th>Minggu 4</th>
        <th>Minggu 5</th>
        <th>Minggu 6</th>
      </tr>
      <?php
      $no=1;
      foreach($db->tampil_data() as $x){
      ?>
      <tr>
        <td>
          <?php echo $no++; ?>
        </td>
        <td>
          <?php echo $x['na']; ?>
        </td>
        <td>
        <?php echo $x['nama']; ?>
        </td>
        <td>
        <?php echo $x['minggu1']; ?>
        </td>
        <td>
        <?php echo $x['minggu2']; ?>
        </td>
        <td>
        <?php echo $x['minggu3']; ?>
        </td>
        <td>
        <?php echo $x['minggu4']; ?>
        </td>
        <td>
        <?php echo $x['minggu5']; ?>
        </td>
        <td>
        <?php echo $x['minggu6']; ?>
        </td>
      </tr>
      <?php
      }
      ?>
  </table>
</body>