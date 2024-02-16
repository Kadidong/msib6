<?php
//sertakan file koneksi.php
include_once 'koneksi.php';

//1.Menampilkan produk berdasarkan id
$id = $_GET['id']; //ambil berdasarkan id
$sql = "DELETE FROM produk WHERE id=?";

//untuk melihat data hasilnya
$ps = $dbh->prepare($sql);
$ps->execute(array($id)); //prepare sql,eksekusi query sql

//2. Redirect ke Produk
echo '<script>alert("Berhasil Hapus Data");window.location="index.php?hal=produk"</script>';

?>