<?php

include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM t_kategori");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>



<?php include('header.php'); ?>
<div class="container mt-3">
    <h1>Form Input Produk</h1>
    <form method="post" action="simpanProduk.php" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Nama Produk">Nama Produk</label>
            <input type="text" name="nama" class="form-control">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control">
        </div>

        <!--perulangan-->
        <div class="form-group">
            <label for="kategori">Kategori</label>
            <select name="kategori" class="form-control">

                <?php foreach ($result as $row) { ?>

                    <option value="<?= $row['nm_kat'] ?>"><?= $row['nm_kat'] ?></option>
                <?php } ?>
            </select>
        </div>
        <!--perulangan-->

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="deskripsi" id="" rows="5" class="form-control">

        </textarea>
        </div>
        <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="form-group mt-2">
            <input type="submit" value="simpan" class="btn btn-primary">
        </div>

    </form>
</div>

<?php include('footer.php'); ?>