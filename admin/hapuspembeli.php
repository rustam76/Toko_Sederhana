<?php

include('koneksi.php');

    $id= $_GET['id'];

    $delete = mysqli_query($koneksi,"DELETE FROM t_pembeli Where id='$id' ");
        
    if($delete){
            header('location: tampil_pembeli.php');
        }
        else{
            echo"gagal menghapus data";
        }

?>