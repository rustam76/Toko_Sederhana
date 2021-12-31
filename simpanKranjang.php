<?php
session_start();
include('admin/koneksi.php');

$user = $_POST['nm'];
$nm_b = $_POST['nm_b'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$query = mysqli_query($koneksi, "INSERT INTO t_keranjang SET user='$user', nm_b='$nm_b', harga='$harga', qty='$qty'");
if ($query) {
    echo "<script>
    alert('Terimakasih');
    window.location.href='index.php'
    </script>";
} else {
    echo "gagal";
}
