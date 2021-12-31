<?php
include('koneksi.php');

$query = mysqli_query($koneksi, "SELECT * From t_kategori");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
?>

<?php include('header.php'); ?>
<div class="container">
    <h1>Daftar Kategori</h1>
    <a href="tambahKategori.php" class="btn btn-warning">Tambah Data</a>
    <table class="table table-bordered mt-2">
        <tr class="text-center bg-primary" style="color: white;">
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($result as $row) { ?>
            <tr class="text-center">
                <td><?= $no ?></td>
                <td><?= $row['nm_kat']; ?></td>
                <td>
                    <a href="deleteKat.php?id=<?php echo $row['id_kat']; ?>" class="btn btn-danger">Delete</a> |
                    <a href="editKat.php?id=<?php echo $row['id_kat']; ?>" class="btn btn-success">Edit</a>
                </td>
            </tr>
        <?php $no++;
        } ?>
    </table>
</div>

<?php include('footer.php');
