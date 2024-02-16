<?php
$sql = "SELECT * FROM jenis";
$ps = $dbh->prepare($sql);
$ps->execute();
$rs = $ps->fetchAll();
?>

	<!-- sidebar.php -->
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
				 <a href="index.php?hal=produk" class="list-group-item list-group-item-action active">Filter Jenis</a>
					<?php
						foreach ($rs as $row) {
					?>
				
				 <div class="list-group-item">
					<a href="index.php?hal=produk&filter=<?=$row['id']?>"><?=$row['nama']?>
					</a>			 
				 </div> 
				 <?php }?>
				
			</div>
		</div>