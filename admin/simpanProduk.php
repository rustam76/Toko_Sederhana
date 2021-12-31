<?php
    include('koneksi.php');

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $jumlah = $_POST['jumlah'];
    $des = $_POST['deskripsi'];
    
    //$url = $_POST['gambar'];
    $rand = rand();
    $extensi = array('jpg','jpeg','png','gif');
    $filename =$_FILES['gambar']['name'];
    $ukuran =$_FILES['gambar']['size'];
  //fungsi cek extensi
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if(!in_array($ext,$extensi)){
        echo"Maaf Format File tidak di terima";
    }else{
        if($ukuran < 1044070){
            $xx = $rand.'_'.$filename;
            move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' .$rand.'_'.$filename);
       
            $simpan = mysqli_query($koneksi,"INSERT INTO t_produk set nama='$nama',harga='$harga',kategori='$kategori',jumlah='$jumlah',deskripsi='$des',gambar='$xx'");

            if($simpan){
                header('location: tampilProduk.php');
            }else{
                echo"Gagal menhapus";
            }           
       
        }else{
            echo"Ukuran File Terlalu besar";
        }
    }


?>