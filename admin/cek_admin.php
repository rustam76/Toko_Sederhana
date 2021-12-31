<?php

session_start();
include('koneksi.php');

//kondisi
if (!$_SESSION) {

    // menangkap data dari login.php
    $user = $_POST['username'];
    $pass = $_POST['pass'];

    //panggil querynya
    $hasil = mysqli_query($koneksi, "SELECT * FROM t_admin where u_admin='$user' and p_admin='$pass'");
    //ubah data menjadi array
    $user = mysqli_fetch_all($hasil, MYSQLI_ASSOC);

    //kondisi
    if ($user) {
        //username, alamat, dan tlp dari session kita buat sendiri kecuali varibel user datanya kita ambil dari filed tabel t_user
        $_SESSION['username'] = $user[0]['u_admin'];
        //mengalihkan ke index.php
        header('location:admin.php');
    } else {
        echo "
            <script>
            alert('Username dan Password Anda Salah');
            window.location.href='index.php';
            </script>
            ";
    }
} else {
    //mengalihkan ke index.php
    echo "
    <script>
    alert('Username dan Password Anda Salah');
    window.location.href='index.php';
    </script>
    ";
}
