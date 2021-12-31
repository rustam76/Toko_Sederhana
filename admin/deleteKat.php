<?php
include('koneksi.php');

$id_kat = $_GET['id'];

$query=mysqli_query($koneksi,"DELETE From t_kategori where id_kat='$id_kat'");

if($query){
    header('location:kategori.php');
}else{
    echo"Gagal Menghapus";
}

?>