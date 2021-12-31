<?php include('header.php'); ?>

<body>
    <div class="container">
        <h1>Silahkan Isi Pembeli</h1>
        <form action="simpanpembeli.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Pembeli</label>
                <input type="text" name="nm_pembeli" class="form-control">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_hp">No HP</label>
                <input type="text" name="no_hp" class="form-control">
            </div>
            <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
    </div>
    <?php include('footer.php'); ?>