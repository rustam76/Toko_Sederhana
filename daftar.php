<?php
include('admin/koneksi.php');


$user = $_POST['username'];
$pass = $_POST['pass'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];

$daftar = mysqli_query($koneksi, "INSERT INTO t_user SET username='$user', password='$pass', alamat='$alamat', tlp='$no'");

if ($daftar) {
    echo "<script>
    alert('terimakasih telah Mendaftar');
    window.location.href='login.php';
    
    </script>";
} else {
    echo "<script>
    alert('Anda Gagal Mendaftar');
    window.location.href='regis.php';
    </script>";
}
