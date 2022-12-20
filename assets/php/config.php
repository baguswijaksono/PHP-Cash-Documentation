<?php
    class database{
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "final_dinamis";
        var $koneksi = "";
        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username,$this->password,$this->database);
            if (mysqli_connect_errno()){
                echo "Koneksi database gagal : " . mysqli_connect_error();
            }
        }
        function tampil_data()//nampilin data kas masuk
        {
            $data = mysqli_query($this->koneksi,"SELECT kd_minggu,nama_pembayar,minggu1,minggu2,minggu3,minggu4,minggu5,minggu6,minggu7,minggu8,minggu9,minggu10,minggu11 FROM data_minggu 
            INNER JOIN pembayar ON data_minggu.kd_pembayar = pembayar.kd_pembayar;");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function itung_minggu()//buat loop print
        {
            $minggu = mysqli_query($this->koneksi,"select count(*) as columns from information_schema.columns where table_name = 'data_minggu'");
            $row = mysqli_fetch_array($minggu);
            return $row;
        }
        function tampil_payment_history()//nampilin data kas masuk
        {
            $data_py_hstry = mysqli_query($this->koneksi,"SELECT kd_riwayat,nama_penerima,nama_pembayar,nama_minggu,nominal_jumlah,nama_status,nama_metode FROM riwayat_kas 
            INNER JOIN penerima ON riwayat_kas.kd_penerima = penerima.kd_penerima 
            INNER JOIN pembayar ON riwayat_kas.kd_pembayar = pembayar.kd_pembayar 
            INNER JOIN minggu ON riwayat_kas.kd_minggu = minggu.kd_minggu 
            INNER JOIN jumlah ON riwayat_kas.kd_jumlah = jumlah.kd_jumlah
            INNER JOIN metode ON riwayat_kas.kd_metode = metode.kd_metode
            INNER JOIN status ON riwayat_kas.kd_status = status.kd_status;");
            while($row_py_hstry = mysqli_fetch_array($data_py_hstry)){
                $hasil_py_hstry[] = $row_py_hstry;
            }
            return $hasil_py_hstry;
        }
        function tampil_data_out()//nampilin data kas masuk
        {
            $data = mysqli_query($this->koneksi,"SELECT * FROM `kaskeluar` ");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function login_admin($username)
        {
            $data = mysqli_query($this->koneksi,"SELECT * FROM user WHERE username ='$username'");
            if (mysqli_num_rows($data) == 0) {
                echo"<b>Data user tidak</b>";
                $hasil = [];
                header('location:login.php');
            }
            else{
                while($row = mysqli_fetch_array($data)){
                    $hasil[] = $row;
                }
            }
            return $hasil;
        }
        function tambah_data_in($kd_minggu,$kd_pembayar,$minggu1,$minggu2,$minggu3,$minggu4,$minggu5,$minggu6,$minggu7,$minggu8,$minggu9,$minggu10,$minggu11)
        {
            mysqli_query($this->koneksi,"INSERT INTO `data_minggu` (`kd_minggu`, `kd_pembayar`, `minggu1`, `minggu2`, `minggu3`, `minggu4`, `minggu5`, `minggu6`, `minggu7`, `minggu8`, `minggu9`, `minggu10`, `minggu11`) VALUES ($kd_minggu,$kd_pembayar,$minggu1,$minggu2,$minggu3,$minggu4,$minggu5,$minggu6,$minggu7,$minggu8,$minggu9,$minggu10,$minggu11);");
        }
        function hapus_data_masuk($kd_pembayar)
        {
            mysqli_query($this->koneksi,"DELETE FROM `data_minggu` WHERE `data_minggu`.`kd_minggu` = $kd_pembayar ");
        }
        function edit_data_masuk($kd_mingguindex,$kd_minggu,$kd_pembayar,$minggu1,$minggu2,$minggu3,$minggu4,$minggu5,$minggu6,$minggu7,$minggu8,$minggu9,$minggu10,$minggu11)
        {
            mysqli_query($this->koneksi,"UPDATE `data_minggu` SET `kd_minggu` = $kd_minggu, `kd_pembayar` = $kd_pembayar, `minggu1` = $minggu1, `minggu2` = $minggu2, `minggu3` = $minggu3, `minggu4` = $minggu4, `minggu5` = $minggu5, `minggu6` = $minggu6, `minggu7` = $minggu7, `minggu8` = $minggu8, `minggu9` = $minggu9, `minggu10` = $minggu10, `minggu11` = $minggu1 WHERE `data_minggu`.`kd_minggu` = $kd_mingguindex; ");
        }
        function tampil_data_edit($index)//nampilin data kas masuk
        {
            $data = mysqli_query($this->koneksi,"SELECT kd_minggu,nama_pembayar,minggu1,minggu2,minggu3,minggu4,minggu5,minggu6,minggu7,minggu8,minggu9,minggu10,minggu11 FROM data_minggu 
            INNER JOIN pembayar ON data_minggu.kd_pembayar = pembayar.kd_pembayar WHERE kd_minggu=$index;");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function ambil_data_lunas($index)//nampilin data kas masuk
        {
            $data = mysqli_query($this->koneksi,"SELECT * FROM `data_minggu` WHERE kd_minggu=$index;");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tambah_data_riwayat($kd_riwayat,$kd_pembayar,$kd_penerima,$kd_metode,$kd_minggu,$kd_jumlah,$kd_status)
        {
            mysqli_query($this->koneksi,"INSERT INTO `riwayat_kas` (`kd_riwayat`, `kd_pembayar`, `kd_penerima`,`kd_metode`, `kd_minggu`, `kd_jumlah`, `kd_status`) VALUES ('$kd_riwayat','$kd_pembayar','$kd_penerima','$kd_metode','$kd_minggu','$kd_jumlah','$kd_status');");
        }
        function hapus_data_riwayat($kd_riwayat)
        {
            mysqli_query($this->koneksi,"DELETE FROM riwayat_kas WHERE `riwayat_kas`.`kd_riwayat` = $kd_riwayat");
        }
        function edit_data_riwayat($kd_riwayat,$kd_pembayar,$kd_penerima,$kd_metode,$kd_minggu,$kd_jumlah,$kd_status,$index)
        {
            mysqli_query($this->koneksi,"UPDATE `riwayat_kas` SET `kd_riwayat` = '$kd_riwayat', `kd_pembayar` = '$kd_pembayar', `kd_penerima` = '$kd_penerima', `kd_metode` = '$kd_metode', `kd_minggu` = '$kd_minggu', `kd_jumlah` = '$kd_jumlah', `kd_status` = '$kd_status' WHERE `riwayat_kas`.`kd_riwayat` = '$index'; ");
        }
        function hapus_data_keluar($index)
        {
            mysqli_query($this->koneksi,"DELETE FROM kaskeluar WHERE nomor='$index';");
        }
        function data_out($a,$b,$c,$d,$e,$f)
        {
            mysqli_query($this->koneksi,"INSERT INTO `kaskeluar` (`nomor`, `rincian`, `jumlah_pengeluaran`, `debit`, `saldo`, `keterangan`) VALUES ('$a','$b','$c','$d','$e','$f');");
        }
        
    }
?>

