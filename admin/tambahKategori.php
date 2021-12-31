<?php include('header.php'); ?>
    <div class="container mt-5">
    <h1 class="text-center">Form Input Ketegori</h1>

        <form action="simpanKat.php" method="post" class="mt-5">
            <div class="form-grup">
                <label for="">Kategori</label>
                    <input type="text" name="nm_kat" class="form-control" placeholder="Masukkan Nama Kategori">
            </div>
            <div class="form-grup mt-2">
                <input type="submit" value="Simpan" class="btn btn-success">
            </div>
        </form>


    </div>

    <?php include('footer.php'); ?>