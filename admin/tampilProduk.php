<?php

include('koneksi.php');


$query = mysqli_query($koneksi, "SELECT * FROM t_produk");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);



?>

<?php include('header.php'); ?>

<div class="container mt-2" style="margin-top:120px;">
    <a href="inputProduk.php" class="btn btn-warning">Tambah Data</a>
    <table class="table table-bordered mt-2">
        <tr class="bg-primary text-center" style="color:white;">
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>jumlah</th>
            <th>Deskripsi</th>
            <th>gambar</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($result as $row) { ?>
            <tr align="center">
                <td><?php echo $no ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['kategori'] ?></td>
                <td><?php echo $row['jumlah'] ?></td>
                <td><?php echo $row['deskripsi']; ?></td>
                <td><img src="img/<?php echo $row['gambar'] ?>" width="50px" height="50px"></td>
                <td><a href="fromEditProduk.php?id=<?php echo $row['id']; ?>" class="btn btn-success">edit</a> | <a href="hapusproduk.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">hapus</a></td>
            </tr>
        <?php $no++;
        } ?>

    </table>
</div>

<?php include('footer.php');
