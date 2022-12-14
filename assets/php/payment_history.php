<head>
<link rel="stylesheet" href="../css/table_style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<?php
  include 'config.php';
  $db = new Database();
  ?>
  <table>
    <thead>
      <tr>
        <th>Kode Transaksi</th>
        <th>Nama Pembayar</th>
        <th>Nama Penerima</th>
        <th>Tanggal Diterima</th>
        <th>Metode Pembayaran</th>
        <th>Pembayaran Untuk</th>
        <th>Jumlah</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $no=1;
      foreach($db->tampil_payment_history() as $x){
      ?>
      <tr>
        <td>
        <a href="#">
          <?php 
          echo $x['tr_code']; ?>
          </a>
        </td>
        <td>
          <?php 
          echo $x['py_nm']; ?>
        </td>
        <td>
          <?php 
          echo $x['rc_nm']; ?>
        </td>
        <td>
          <?php 
          echo $x['dt_rc']; ?>
        </td>
        <td>
          <?php 
                  if ($x["py_mtd"] == "t") {
                    echo "  <p>Tunai</p>";
                  }
                  elseif ($x['py_mtd'] == "g") {
                    echo "  <p>Gopay</p>";
                  }
                  elseif ($x['py_mtd'] == "d") {
                    echo "  <p>Gopay</p>";
                  }
                  elseif ($x['py_mtd'] == "o") {
                    echo "  <p>ovo</p>";
                  }
                  else {
                    echo "<p class='status status-pending'>n/a</p>";
                  }
                  ?>
        </td>
        <td>
          <?php 
          echo $x['py_for']; ?>
        </td>
        <td>
          <?php echo "Rp.";
          echo $x['ttl_py'];
          echo ",00";
           ?>
        </td>
        <td>
          <?php 
        if ($x["sts_py"] == "d") {
          echo "  <p class='status status-paid'>Done</p>";
        }
        elseif ($x['sts_py'] == "u") {
          echo "  <p class='status status-unpaid'>Undone</p>";
        }
        else {
          echo "<p class='status status-pending'>n/a</p>";
        }  ?>
        </td>
      </tr>
      <?php
      }?>
    </tbody>
  </table>
</body>