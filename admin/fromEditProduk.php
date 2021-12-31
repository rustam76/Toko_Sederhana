<?php
include('koneksi.php');

    $id =$_GET['id'];
    $tampil=mysqli_query($koneksi,"SELECT * FROM t_produk WHERE id='$id' LIMIT 1");

    $result= mysqli_fetch_all($tampil, MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<div class="container">
<h1>Form edit Produk</h1>
    <form method="post" action="updateProduk.php" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">
        </div>
        <div class="form-group">
        <label for="Nama Produk">Nama Produk</label>
            <input class="form-control" type="text" name="nama" size="50px" value="<?php echo $result[0]['nama']; ?>">
        </div>
        <div class="form-group">
        <label for="Harga">Harga</label>
            <input class="form-control" type="text" name="harga" size="50px" value="<?php echo $result[0]['harga']; ?>">
        </div>
        <div class="form-group">
        <label for="Kategori">Kategori</label>
            <input class="form-control" type="text" name="kategori" value="<?php echo $result[0]['kategori']; ?>">
        </div>
        <div class="form-group">
        <label for="Jumlah">Jumlah</label>
            <input class="form-control" type="number" name="jumlah" value="<?php echo $result[0]['jumlah']; ?>">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5"><?php echo $result[0]['deskripsi'];?></textarea>
        </div>
        <div class="form-group">
        <label for="Gambar">Gambar</label>
            <img src="img/<?php echo $result[0]['gambar']; ?>" width="100" height="100">
            <br><br>
            <input class="form-control" type="file" name="gambar" value="img/<?php echo $result[0]['gambar']; ?>">
        </div>
        <div class="form-group mt-2">
            <input type="submit" value="edit" class="btn btn-success">
        </div>
    </form>
    </div>
        
</body>
</html>