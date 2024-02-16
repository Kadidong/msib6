<?php
//sertakan file koneksi.php
include_once 'koneksi.php';

//Menampilkan produk berdasarkan id
$id = $_GET['id']; //ambil berdasarkan id
$sql = "SELECT produk.*,jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.id = ?";

//untuk melihat data hasilnya
$ps = $dbh->prepare($sql);
$ps->execute(array($id)); //prepare sql,eksekusi query sql
$rs = $ps->fetch(); //fetch: ambil 1 baris data


?>

<div class="card" style="width: 18rem;">
  <img src="images/<?= $rs['gambar'] ?>" class="card-img-top" alt="kosong">
  <div class="card-body">
    <h5 class="card-title"><?= $rs['nama'] ?></h5>
    <p class="card-text">
        Harga: Rp.<?= number_format($rs['harga']) ?> <br>
        Stok: <?= $rs['stok'] ?> <br>
        Kategori: <?= $rs['kategori'] ?>
    </p>
    <a href="index.php?hal=produk" class="btn btn-primary">Go Back</a>
  </div>
</div>