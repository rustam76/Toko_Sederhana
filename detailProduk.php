<?php

include('header.php');

?>

<?php

$id= $_GET['id'];
$query=mysqli_query($koneksi,"SELECT * FROM t_produk Where id='$id' LIMIT 1");
$result=mysqli_fetch_all($query, MYSQLI_ASSOC); //mengubah data query menjadi array

//var_dump($result)

?>


<div class="container" style="margin-top:120px;">

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img src="admin/img/<?= $result[0]['gambar']?>" width="300" height="300">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="col-md-7">
                        <h3><?php echo $result[0]['nama'];?></h3>
                        <div class="card mt-2">
                            <div class="card-body">
                                <h4 style="color:tomato;">Rp. <?= $result[0]['harga']; ?> <span style="font-size: 10px;" class="badge badge-pill badge-danger">Diskon 50%</span></h4>
                                
                                <p>
                                  <?php echo $result[0]['deskripsi']; ?>  
                                </p>
                                <p style="font-size: 10px;"><i class="fas fa-shipping-fast mr-2"></i>Pegiriman Gratis</p>
                                <div class="form-grub mt-2 mb-2">
                                    <div class="row">
                                    <div class="col-md-9">
                                        <label for="">Size</label>
                                        <input type="number" class="form-control" placeholder="Ukuran" >
                                    </div>
                                    <div class="col-md-3">
                                        <label for="">jumlah</label>
                                        <input type="number" class="form-control" >
                                    </div>
                                    </div>
                                </div>
                                <a href="pesan.php?id=<?= $result[0]['id']; ?>">
                                <button type="submit" class="btn btn-success form-control">
                                <i class="fas fa-shopping-cart"></i>
                                    Pesan Sekarang
                                </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

<?php include('footer.php');