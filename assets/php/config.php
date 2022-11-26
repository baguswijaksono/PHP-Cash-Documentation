<?php
    class final_database{
        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database ="final_dinamis";
        var $koneksi ="";
        function __construct(){
            $this ->koneksi = mqsqli_connect($this->host,$this->username,$this->password,$this->database);
            if(mqsqli_connect_errno()){
                echo "Koneksi Gagal : " . mqsqli_connect_error();
            }
        }

    }

?>