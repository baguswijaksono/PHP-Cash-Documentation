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
            $data = mysqli_query($this->koneksi,"select * from data_kas");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function itung_minggu()//buat loop print
        {
            $minggu = mysqli_query($this->koneksi,"select count(*) as columns from information_schema.columns where table_name = 'data_kas'");
            $row = mysqli_fetch_array($minggu);
            return $row;
        }
        function tampil_payment_history()//nampilin data kas masuk
        {
            $data_py_hstry = mysqli_query($this->koneksi,"select * from payment_history");
            while($row_py_hstry = mysqli_fetch_array($data_py_hstry)){
                $hasil_py_hstry[] = $row_py_hstry;
            }
            return $hasil_py_hstry;
        }
        function tampil_data_out()//nampilin data kas masuk
        {
            $data = mysqli_query($this->koneksi,"select * from data_kas_out");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        function tambah_data_pembayaran($kode_peminjam,$nama_peminjam,$jenis_kelamin,$tanggal_lahir,$alamat,$pekerjaan)
        {
            mysqli_query($this->koneksi,"insert into 'data_kas' (``, `$nama`, `$minggu1`, `$minggu2`, `$minggu3`, `$minggu4`, `$minggu5`, `$minggu6`, `$minggu7`, `$minggu8`)");
        }
        function tambah_data_history($kode_peminjam,$nama_peminjam,$jenis_kelamin,$tanggal_lahir,$alamat,$pekerjaan)
        {
            mysqli_query($this->koneksi,"insert into 'data_kas' (``, `$nama`, `$minggu1`, `$minggu2`, `$minggu3`, `$minggu4`, `$minggu5`, `$minggu6`, `$minggu7`, `$minggu8`)");
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
    }
?>