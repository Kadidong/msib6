<?php
//sertakan file koneksi.php
include_once 'koneksi.php';

//Menampilkan data jenis di bagian untuk produk select option
$sql = "SELECT * FROM jenis";
//untuk melihat data hasilnya
$ps = $dbh->prepare($sql);
$ps->execute(); //prepare sql,eksekusi query sql
$ra = $ps->fetchAll(); //fetchAll: ambil seluruh baris data


//Buat tombol edit (UPDATE) sbb:
//1. Tangkap request name2 element form
if(!empty($_POST['nama']))
{
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$jenis = $_POST['jenis'];
// $gambar = $_POST['gambar'];
$gambar = $_FILES['gambar']['name'];
$id = $_POST['id'];

//2. himpun dan simpan variabel di atas dalam satu array
$data = [$nama, $harga, $stok, $jenis, $gambar, $id];

//3. Ubah data produk (UPDATE)
$sql = "UPDATE produk SET nama=?,harga=?,stok=?,idjenis=?,gambar=? WHERE id=?";
$ps = $dbh->prepare($sql);
$ps->execute($data); //prepare sql,eksekusi query sql

//4. Redirect ke Produk
echo '<script>alert("Berhasil Edit Data");window.location="index.php?hal=produk"</script>';
}

//Untuk menampilkan data produk berdasarkan id pada produk
$id = $_GET['id']; //ambil berdasarkan id
$sql = "SELECT * FROM produk WHERE id=?";
$ps = $dbh->prepare($sql);
$ps->execute(array($id)); //prepare sql,eksekusi query sql
$rs2 = $ps->fetch(); //fetch: ambil 1 baris data

//5. Upload Gambar
$namaSementara = $_FILES['gambar']['tmp_name']; //ambil data file
$dirUpload = "images/"; //tentukan lokasi file akan pindahkan
$terUpload = move_uploaded_file($namaSementara, $dirUpload.$gambar); //pindahkan fle
?>

<form method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="nama" name="nama" value="<?=$rs2['nama']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="harga" class="col-4 col-form-label">Harga Produk</label> 
    <div class="col-8">
      <input id="harga"  name="harga" value="<?=$rs2['harga']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="stok" class="col-4 col-form-label">Stok Produk</label> 
    <div class="col-8">
      <input id="stok" name="stok" value="<?=$rs2['stok']?>" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="jenis" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
      <select id="jenis" name="jenis" class="custom-select">
        <option value="">-- Pilih Jenis Produk --</option>

        <?php
          foreach ($ra as $row)
          {
              //panggil data lama yg sudah diinput pada data jenis
              $sel=($rs2['idjenis'])==$row['id'] ? 'selected' : '';
        ?>    
            <option value="<?=$row['id']?>"  <?=$sel?> ><?=$row['nama']?></option>
        <?php } ?>

      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="gambar" class="col-4 col-form-label">Gambar Produk</label> 
    <div class="col-8">
       <input type="file" class="form-control" name="gambar">
      <br>
      <p>Gambar yang di upload:</p>
      <img src="images/<?=$rs2['gambar']?>" width="100">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="hidden" value="<?=$rs2['id']?>"  name="id">      
      <button name="proses" type="submit" class="btn btn-primary">Update</button>
      <button name="unproses" type="reset" class="btn btn-info">Cancel</button>
    </div>
  </div>
</form>