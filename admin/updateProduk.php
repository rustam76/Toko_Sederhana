<?php
include('koneksi.php');

$id =$_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$des=$_POST['deskripsi'];
//$url = $_POST['gambar'];

$rand = rand();
$extensi = array('jpg','jpeg','png','gif');
$filename =$_FILES['gambar']['name'];
$ukuran =$_FILES['gambar']['size'];



//fungsi ini mengunakan
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext,$extensi)){
    echo"Maaf Format Gambar salah";
}else{
    if($ukuran < 1044070){
        $xx = $rand.'_'.$filename;
        move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' .$rand. '_' .$filename);
    
        $update=mysqli_query($koneksi,"UPDATE t_produk SET nama='$nama',harga='$harga',kategori='$kategori',jumlah='$jumlah',deskripsi='$des',gambar='$xx' where id='$id'");

        if($update){
            header('location:tampilProduk.php');
        }else{
            echo"Gagal mengupdate";
        }
            
    }
}




?>