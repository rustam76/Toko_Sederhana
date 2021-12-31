<?php
session_start();
include('admin/koneksi.php');

$query = mysqli_query($koneksi, "SELECT * From t_produk where kategori='Makanan'");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

//var_dump($result);



?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="asset/fontawesome.css" rel="stylesheet">
    <link href="asset/brands.css" rel="stylesheet">
    <link href="asset/solid.css" rel="stylesheet">
    <link href="asset/css/all.min.css" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="shadow-sm navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand ml-5" href="index.php"><img src="admin/img/44.png" width="70" height="70"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tatacara.php">Tata Cara Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produk.php">Semua Produk</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav mr-3">
            <?php if ($_SESSION) { ?>
                <li><a href="daftarbeli.php"><i class="fas fa-shopping-bag"></i></a></li>
            <?php } ?>
        </ul>
        <ul class="navbar-nav">

            <?php if (!$_SESSION) { ?>
                <li class="nav-item">
                    <a class="nav-link btn btn-success mr-3" href="login.php">Login</a>
                </li>
            <?php } ?>

            <?php if ($_SESSION) { ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-5" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, <?php echo $_SESSION['username']; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="logout.php">Profil</a>
                        <a class="dropdown-item" href="logout.php">Keluar</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </nav>