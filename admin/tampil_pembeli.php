<?php

include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * FROM t_pembeli");


?>
<?php include('header.php'); ?>
<div class="container mt-2">
    <a href="inputpembeli.php" class="btn btn-primary">Tambah Pembeli</a>
    <table class="table table-hover mt-2">
        <tr class="table-primary">
            <th>NO</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>NO Hp</th>
            <th>Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($result as $row) { ?>
            <tr align="center">
                <td><?php echo $no ?></td>
                <td><?php echo $row['nm_pembeli']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['no_hp']; ?></td>
                <td><a href="edit_pembeli.php?id=<?= $row['id']; ?>" class="btn btn-success">edit</a> | <a href="hapuspembeli.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">hapus</a></td>
            </tr>
        <?php $no++;
        } ?>
    </table>
</div>


<?php include('footer.php');
