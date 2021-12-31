<?php

session_start();
include('admin/koneksi.php');

//kondisi
if (!$_SESSION) {

    // menangkap data dari login.php
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    //panggil querynya
    $hasil = mysqli_query($koneksi, "SELECT * FROM t_user where username='$user' and password='$pass'");
    //ubah data menjadi array
    $user = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

    //kondisi
    if ($user) {
        //username, alamat, dan tlp dari session kita buat sendiri kecuali varibel user datanya kita ambil dari filed tabel t_user
        $_SESSION['username'] = $user[0]['username'];
        $_SESSION['alamat'] = $user[0]['alamat'];
        $_SESSION['tlp'] = $user[0]['tlp'];
        //mengalihkan ke index.php
        header('location:index.php');
    } else {
        echo "
            <script>
            alert('Username dan Password Anda Salah');
            window.location.href='login.php';
            </script>
            ";
    }
} else {
    //mengalihkan ke index.php
    header('location:index.php');
}
