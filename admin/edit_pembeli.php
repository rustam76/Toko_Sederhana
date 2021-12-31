<?php

include('koneksi.php');
$id=$_GET['id'];
$tampil=mysqli_query($koneksi, "SELECT * From t_pembeli Where id='$id' LIMIT 1");
$result=mysqli_fetch_all($tampil, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Silahkan Isi Pembeli</h1>
        <form action="update_Pembeli.php" method="post">
        <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $result[0]['id']; ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama Pembeli</label>
                <input class="form-control" type="text" name="nm_pembeli" value="<?php echo $result[0]['nm_pembeli']; ?>">
        </div>
        <div class="form-group">
            <label for="Alamat">Alamat</label>
                <input class="form-control" type="text" name="alamat" value="<?php echo $result[0]['alamat']; ?>">
        </div>
        <div class="form-group">
            <label for="no_hp">No Hp</label>
                <input class="form-control" type="number" name="no_hp" value="<?php echo $result[0]['no_hp']; ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Edit" class="btn btn-success">
        </div>
        </form>
    </div>
</body>
</html>