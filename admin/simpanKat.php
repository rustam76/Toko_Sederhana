<?php

include('../koneksi.php');
$nm_kat=$_POST[nm_kat];

$query=mysqli_query($koneksi,"INSERT Into t_kategori SET nm_kat='$nm_kat'");

if($query){
    header('location:kategori.php');
}else{
    echo"Gagal Menambah Data ";
}
