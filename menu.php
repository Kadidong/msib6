<!-- menu.php -->

<?php
$sesi = $_SESSION['username'];
?>

<div class="row">
		<div class="col-md-12">
			<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
				 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="navbar-toggler-icon"></span>
				</button> <a class="navbar-brand" href="index.php?hal=home">OlShop</a>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="navbar-nav">
						<li class="nav-item active">
							 <a class="nav-link" href="index.php?hal=home">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							 <a class="nav-link" href="index.php?hal=about">About Us</a>
						</li>
						<li class="nav-item dropdown">
							 <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown">Katalog</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								 <a class="dropdown-item" href="index.php?hal=jenis">Jenis</a> <a class="dropdown-item" href="index.php?hal=produk">Produk</a>
							</div>
                        </li>
                        <li class="nav-item">
							 <a class="nav-link" href="index.php?hal=galeri">Galeri</a>
						</li>                        
					</ul>
					<form class="form-inline">
						<input class="form-control mr-sm-2" type="text"> 
						<button class="btn btn-primary my-2 my-sm-0" type="submit">
							Search
						</button>
					</form>
					<ul class="navbar-nav ml-md-auto">
					<?php
					if(!isset($sesi)){
						echo '<li class="nav-item active">';
						echo '<a class="nav-link" href="index.php?hal=login">Login<span class="sr-only"></span></a>';
						echo '</li>';
					}
					else{
						echo '<li class="nav-item dropdown">';
							echo '<a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown">'.$sesi.'</a>';
							echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">';
							echo '<a class="nav-link" href="logout.php">Logout</a>';
							echo '</div>';	
							echo '</li>';				
						} 					
					?>
					</ul>
				</div>
			</nav>
		</div>
	</div>