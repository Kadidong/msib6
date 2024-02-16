<?php
//sertakan file koneksi.php
include_once 'koneksi.php';


//menampilkan semua query dari data produk
// $sql = "SELECT * FROM produk";
$sql = "SELECT produk.*, jenis.nama AS kategori FROM produk INNER JOIN jenis ON jenis.id = produk.idjenis";


//untuk melihat data hasilnya di varibael $sql diatas
$rs = $dbh->query($sql)


?>

<h2 align="center">DAFTAR PRODUK</h2>
<table align="center" border="1" width="600" cellpadding="10">
<thead>
    <tr bgcolor="beige" align="center">
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Jenis</th>
        <th>Gambar</th>
    </tr>
</thead>
<tbody>
    <?php
    $no=1;
    foreach ($rs as $row) {
    ?>    
    <tr> 
    <!-- <td> <?= $row['id'] ?></td> //jangan ambil nomor dari id  -->
       <th><?= $no ?></th> <!--untuk nomornya buat sendiri-->
       <td><?= $row['nama'] ?></td>
       <td>Rp.<?= number_format($row['harga']) ?></td>
       <td><?= $row['stok'] ?></td>
       <td><?= $row['kategori'] ?></td>
       <td><img src="images/<?= $row['gambar'] ?>" width="100"></td>
     </tr>  
     <?php $no++; } ?>
</tbody>    
</table>
<script>
    window.print();
</script>