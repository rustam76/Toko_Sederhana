<!--mengambil data header-->
<?php include('header.php'); ?>
<!--mengambil data header-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://eigeradventure.com/media/weltpixel/owlcarouselslider/images/o/c/octofest_-_1010.jpeg" class="d-block w-100" height="500px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://eigeradventure.com/media/weltpixel/owlcarouselslider/images/n/e/new_arrival_banner.jpeg" class="d-block w-100" height="500px" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://eigeradventure.com/media/weltpixel/owlcarouselslider/images/p/a/payment_web_benner_1366x630.jpg" class="d-block w-100" height="500px" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container">
    <h3 class="mt-3 text-center">Produk</h3>
    <hr style="width: 200px; height:2px; background:brown; line-weight:100px">
</div>
<!--awal-->
<div class="container mt-2">
    <div class="shadow-sm p-3 mb-2 bg-white rounded">
        <i class="fa fa-list-ul">
            Sepatu
        </i>
    </div>
</div>

<div class="container mb-2">
    <div class="row">

        <?php foreach ($result as $row) { ?>

            <div class="col-md-3">
                <div class="card mt-5">
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

<?php

include('admin/koneksi.php');

$query = mysqli_query($koneksi, "SELECT * From t_produk where kategori='Minuman'");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);

//var_dump($result);

?>
<!--awal-->
<div class="container mt-5">
    <div class="shadow-sm p-3 mb-2 bg-white rounded">
        <i class="fa fa-list-ul">
            Minuman
        </i>
    </div>
</div>

<div class="container mb-2">
    <div class="row">

        <?php foreach ($data as $rows) { ?>

            <div class="col-md-3">
                <div class="card mt-5">
                    <div class="box">
                        <img src="admin/img/<?php echo $rows['gambar']; ?>" class="card-img-top" alt="..." height="200" width="200">
                        <div class="ket">
                            <button class="btn btn-danger">Diskon 50%</button>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <?php echo $rows['nama']; ?>
                                <p style="color: red;">Rp. <?php echo $rows['harga']; ?></p>
                                <button class="btn btn-outline-success">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>
<!--akhir-->
<?php
$tgl = date('d-m-Y');
echo $tgl;
?>

<!--mengambil data header-->
<?php include('footer.php'); ?>
<!--mengambil data header-->