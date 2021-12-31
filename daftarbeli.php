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

$use = $_SESSION['username'];

$query = mysqli_query($koneksi, "SELECT * FROM t_keranjang where user='$use'");
$results = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>

<div class="container">
    <div class="row">
        <div class="card-body">
        <h3 class="text-center">Pesanan Anda: <?= $_SESSION['username']; ?></h3>
        <h5> <?= $_SESSION['tlp']; ?></h5>
        </div>
        <table class="table table-striped">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>semua</th>
                <th>jumlah</th>
            </tr>
            <?php $no = 1;
            $total=0;
            foreach ($results as $result) { ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $result['user']; ?></td>
                    <td><?= $result['nm_b']; ?></td>
                    <td><?= $result['harga']; ?></td>
                    <td><?= $result['qty']; ?></td>
                    <td><?= $harga= $result['harga'] * $result['qty']; ?></td>
                </tr>
            <?php $no++;
                $total= $total + $harga;
            } ?>
            <tr >
                <td >Total</td>
                <td colspan="5">
                    <?= $total ?>
                </td>
            </tr>
        </table>
       
    </div>
    <form action="checkout.php" method="post">
            <div class="form-group">
                <label for="">Nama Pengguna</label>
                <input type="text" name="user" value="<?= $_SESSION['username']; ?>" class="form-control" readonly>
            </div>
            
            <div class="form-group">
                <label for="">NO HP</label>
                <input type="text" name="no_hp" value="<?= $_SESSION['tlp']; ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="alamat" name="alamat" class="form-control"><?= $_SESSION['alamat']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Total Bayar</label>
                <input type="text" name="total" value="<?= $total ?>" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="">Tanggal</label>
                <input type="text" name="tgl" value="<?php echo date("d-m-Y"); ?>" class="form-control" readonly>
            </div>
            <input type="submit" value="Check OUT" class="btn btn-outline-success">
        </form>
</div>

<?php include('footer.php'); ?>