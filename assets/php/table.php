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
      </tr>
      <?php
      $no=1;
      foreach($db->tampil_data() as $x){
      ?>
      <tr>
        <td>
          <?php echo $x['na']; ?>
        </td>
        <td>
        <?php echo $x['nama']; ?>
        </td>
        <td>
        <?php 
        if ($x["minggu1"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu1"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "<p class='status status-pending'>n/a</p>";
        }  ?>
        </td>
        <td >
        <?php
        if ($x["minggu2"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu2"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "  <p class='status status-pending'>n/a</p>";
        } ?>
        </td>
        <td>
        <?php
        if ($x["minggu3"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu3"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "  <p class='status status-pending'>n/a</p>";
        }  ?>
        </td>
        <td>
        <?php
        if ($x["minggu4"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu4"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "  <p class='status status-pending'>n/a</p>";
        }  ?>
        </td>
        <td>
        <?php
        if ($x["minggu5"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu5"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "  <p class='status status-pending'>n/a</p>";
        } ?>
        </td>
        <td>
        <?php
        if ($x["minggu6"] == "P") {
          echo "  <p class='status status-paid'>Paid</p>";
        }
        elseif ($x["minggu6"] == "U") {
          echo "  <p class='status status-unpaid'>Unpaid</p>";
        }
        else {
          echo "  <p class='status status-pending'>n/a</p>";
        }  ?>
        </td>
      </tr>
      <?php
      }
      ?>
  </table>
</body>