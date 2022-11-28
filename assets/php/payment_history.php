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
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
        <td>
          <?php 
          echo $x['tr_code']; ?>
        </td>
      </tr>
      <?php
      }?>
    </tbody>
  </table>
</body>