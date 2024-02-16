<?php
session_start();
require_once('koneksi.php');

//proses login
$username = $_POST['username'];
$password = $_POST['password'];

$sql = $dbh->prepare("SELECT * FROM `users` WHERE `username`=? AND `password`=?");
$datalogin=[$username, $password];
$sql->execute($datalogin);

$data = $sql->fetch();

if(!empty($data['username'])){ //sukses login (jika sukses login kita masuk MEMBER (identitas pengenal)
    $_SESSION['username'] = $data['username'];
    $_SESSION['fullname'] = $data['fullname'];
    header('location:index.php?hal=produk'); //login sukses kita di arahkan ke landing page produk
}
else{ //gagal login(jika gagal, keluar halaman alert)
echo '<script>alert("Maaf User/Password Anda Salah !!!");window.location="index.php?hal=login"</script>';
}
?>