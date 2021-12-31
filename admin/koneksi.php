<?php

    $koneksi= mysqli_connect('localhost','root','','db_penjualan');
    if(!$koneksi){
        echo"maaf koneksi gagal";
    }

?>