<?php
include('header.php');
?>

<?php

$query = mysqli_query($koneksi, "SELECT * From t_produk");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<!--awal-->
<div class="container" style="margin-top:120px;">
    <div class=" p-3 mt-5 bg-white rounded text-center">
        <h5>Semua Produk</h5>

        <hr>
    </div>
</div>

<div class="container mb-2">
    <div class="row">

        <?php foreach ($result as $row) { ?>

            <div class="col-md-3">
                <div class="card mt-3">
                    <a href="detailProduk.php?id=<?= $row['id'] ?>">
                        <div class="box">
                            <img src="admin/img/<?php echo $row['gambar']; ?>" class="card-img-top" alt="..." height="200" width="200">
                            <div class="ket">
                                <button class="btn btn-danger">Diskon 50%</button>
                            </div>
                    </a>
                    <div class="card-body">
                        <div class="card-text">
                            <?php echo $row['nama']; ?>
                            <p style="color: red;">Rp. <?php echo $row['harga']; ?></p>
                            <a href="pesan.php?id=<?= $row['id']; ?>">
                                <button class="btn btn-outline-success">Pesan Sekarang</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
    </div>
<?php } ?>

</div>
</div>
<!--akhir-->

<?php include('footer.php');
