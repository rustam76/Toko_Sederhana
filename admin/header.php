<?php
include('koneksi.php');
session_start()
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Halaman Admin</title>
</head>

<body>

  <div class="container mt-2">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success" style="color: white;">
      <a class="navbar-brand" href="admin.php">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Daftar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="tampilProduk.php">Daftar Produk</a>
              <a class="dropdown-item" href="tampil_pembeli.php">Daftar Pembeli</a>
              <a class="dropdown-item" href="kategori.php">Data Kategori</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produk</a>
          </li>
        </ul>
      </div>
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
              <a class="dropdown-item" href="#">Profil</a>
              <a class="dropdown-item" href="log_admin.php">Keluar</a>
            </div>
          </li>
        <?php } ?>
      </ul>
    </nav>