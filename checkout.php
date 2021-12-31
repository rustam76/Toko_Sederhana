<?php 
session_start();
 include('admin/koneksi.php');

 $user = $_POST['user'];
 $no =$_POST['no_hp'];
 $alamat =$_POST['alamat'];
 $total =$_POST['total'];
 $tgl=$_POST['tgl'];


 $query=mysqli_query($koneksi,"INSERT INTO t_checkout Set user='$user',no_hp='$no',alamat='$alamat',total='$total',tgl='$tgl'");

 if($query){
     echo"<script>
     alert('Selamat anda berhasil checkout');
     window.location.href='index.php';
     </script>";
 }else{
     echo"Gagal CheckOUt";
 }

?>