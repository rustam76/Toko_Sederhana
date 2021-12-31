<?php

include('koneksi.php');

    $id= $_GET['id'];

    $delete = mysqli_query($koneksi,"DELETE FROM t_produk Where id='$id' ");
        
    if($delete){
            header('location: tampilProduk.php');
        }
        else{
            echo"gagal menghapus data";
        }

?>