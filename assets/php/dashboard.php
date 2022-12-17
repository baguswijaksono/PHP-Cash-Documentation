<head>
<link rel="stylesheet" href="../css/table_style.css">
<link rel="stylesheet" href="../css/button.css">
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
        <th>Nomor</th>
        <th>Tanggal</th>
        <th>Rincian</th>
        <th>Jumlah</th>
        <th>Debit</th>
        <th>Kredit</th>
        <th>Saldo</th>
        <th>Bukti</th>
        <th>Edit</th>
        <th>Hapus</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $no=1;
      foreach($db->tampil_data_out() as $x){
      ?>
      <tr>
      <td>
          <?php 
          echo $x['id']; ?>
        </td>
        <td>
          <?php 
          echo $x['dt']; ?>
        </td>
        <td>
        <?php echo $x['dtl']; ?>
        </td>
        <td>
        <?php echo $x['cnt']; ?>
        </td>
        <td>
        <?php echo $x['dbt']; ?>
        </td>
        <td>
        <?php echo $x['sldo']; ?>
        </td>
        <td>
        <?php echo $x['prf']; ?>
        </td>
        <td>
        <?php echo $x['prf']; ?>
        </td>
        <td>
          Edit
          </td>
          <td>
            Hapus
          </td>
      </tr>

      <?php
      }
      ?>
    </tbody>
  </table>
</body>