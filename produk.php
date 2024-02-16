<?php
//sertakan file koneksi.php
include_once 'koneksi.php';

//untuk sesi perizinan script mana yg mau di tampilkan saat login saja
$sesi = $_SESSION['username'];


//Buat Filter berdasarkan jenis pada prodik
$filter = $_GET['filter'];
if ($filter){
    $sql = "SELECT produk.*,jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis WHERE produk.idjenis = $filter";
}
else {
//menampilkan semua query dari data produk
// $sql = "SELECT * FROM produk";
$sql = "SELECT produk.*,jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis";
}


//untuk melihat data hasilnya di varibael $sql diatas
$rs = $dbh->query($sql)
?>

<!-- <h3 align="center">DAFTAR PRODUK</h3> -->
<div class="badge badge-primary text-wrap" style="width: 62rem; font-size:20px">
  DAFTAR PRODUK
</div>
<br>
<!-- <table align="center" border="1" width="600" cellpadding="10"> -->
<table class="table table-striped">
<thead>
    <!-- <th>
    <a class="btn btn-success" href="index.php?hal=tambah" role="button">Tambah</a>
    </th> -->
<td colspan="6">
    <?php
    if(isset($sesi)) {
    ?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Tambah Produk
    </button>
    <?php } ?>
    <th><a href="print.php" target="_blank" class="btn btn-danger btn-md">Print</a></th>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Produk</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <?php include_once "tambah.php"; ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>
</td>

    <tr class="table-warning" style="text-align:center;">
       <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Jenis</th>
        <th>Gambar</th>
        <th colspan="3">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php
    $no=1;
    foreach ($rs as $row) {
    ?>    
    <tr> 
    <!-- <td> <?= $row['id'] ?></td> //jangan ambil nomor dari id  -->
       <td><?= $no ?></td> <!--untuk nomornya buat sendiri-->
       <td><?= $row['nama'] ?></td>
       <td>Rp.<?= number_format($row['harga']) ?></td>
       <td><?= $row['stok'] ?></td>
       <td><?= $row['kategori'] ?></td>
       <td><img src="images/<?= $row['gambar'] ?>" width="100"></td>
       <td><a class="btn btn-primary" href="index.php?hal=show_produk&id=<?= $row['id'] ?>" role="button">Show</a></td>
       <?php
       if(isset($sesi)) {
       ?>
       <td><a class="btn btn-success" href="index.php?hal=edit&id=<?= $row['id'] ?>"role="button">Edit</a></td>
      
       <td><a class="btn btn-danger" onclick="return confirm('Apakah yakin data akan dihapus?')" href="index.php?hal=delete&id=<?= $row['id'] ?>" role="button">Delete</a></td>
       <?php } ?>
     </tr>  
     <?php $no++; } ?>
</tbody>    
</table>