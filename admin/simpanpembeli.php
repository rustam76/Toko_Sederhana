<?php
include('koneksi.php');

$nama = $_POST['nm_pembeli'];
$alamat = $_POST['alamat'];
$no = $_POST['no_hp'];

$simpan=mysqli_query($koneksi, "INSERT INTO t_pembeli SET nm_pembeli='$nama',alamat='$alamat',no_hp='$no'");

if($simpan){
    header('location: tampil_pembeli.php');
}else{
    echo"gagal menyimpan data cuy..!!!";
}

?>