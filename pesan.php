<?php

include('header.php');
if (!$_SESSION) {
    echo "
    <script>
    alert('Anda harus Login Terlebih Dahulu');
    window.location.href='index.php';
    </script>
    ";
}
?>
<?php

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * From t_produk where id='$id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
//var_dump($result);

?>



<div class="container" style="margin-top:120px;">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <h5>Data Pesanan : <?= $_SESSION['username']; ?> </h5>
                    <div class="card">
                        <div class="card-body">
                            <img src="admin/img/<?php echo $result[0]['gambar']; ?>" width="100px" height="100px">



                            <form action="simpanKranjang.php" method="POST">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nm" value="<?= $_SESSION['username']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama barang</label>
                                    <input type="text" name="nm_b" value="<?php echo $result[0]['nama']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" value="<?php echo $result[0]['harga']; ?>" class="form-control" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <textarea name="alamat" class="form-control" readonly>
                                          <?= $_SESSION['alamat']; ?>
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">QTY</label>
                                    <input type="number" name="qty" value="1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Keranjang" class="btn btn-outline-success">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Mitra Bank</h5>
                    <div class="card">
                        <div class="card-body">

                            <img src="admin/img/12.png" width="480px">
                        </div>
                    </div>

                    <input type="text" class="form-control mt-2" placeholder="Masukkan Nama Bank Anda">

                    <div class="text-center mt-2">
                        <div class="card-body">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php');
