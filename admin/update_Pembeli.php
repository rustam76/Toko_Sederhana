<?php

    include('koneksi.php');

    $id=$_POST['id'];
    $nama=$_POST['nm_pembeli'];
    $alamat=$_POST['alamat'];
    $no=$_POST['no_hp'];

    $update=mysqli_query($koneksi,"UPDATE t_pembeli SET nm_pembeli='$nama', alamat='$alamat',no_hp='$no' where id='$id' ");
    if($update){
        header('location: tampil_pembeli.php');
    }else{
        echo"Gagal Memperbaharui";
    }

?>