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
        function tampil_data()
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

    }
?>