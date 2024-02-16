<?php
session_start();
require_once('koneksi.php');
?>

<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>OlShop NF</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="images/sonic.png">

	<!-- Back To Top -->
	<style>
	/* Back to Top Pure CSS by igniel.com */
	html {scroll-behavior:smooth;}
	.ignielToTop {width:30px; height:30px; position:fixed; bottom:50px; right: 50px; z-index:99; cursor:pointer; border-radius:100px; transition:all .5s; background:#008c5f url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
	.ignielToTop:hover {background:#1d2129 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}	
	</style>

  </head>
  <body style="padding-top:70px;">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="carousel slide" id="carousel-371003">
				<ol class="carousel-indicators">
					<li data-slide-to="0" data-target="#carousel-371003">
					</li>
					<li data-slide-to="1" data-target="#carousel-371003">
					</li>
					<li data-slide-to="2" data-target="#carousel-371003" class="active">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap First" src="images/1.jpg">
						<div class="carousel-caption">
							<h4>
								Gambar ke-1
							</h4>
							<p>
								Ini Gambar ke-1....
							</p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" alt="Carousel Bootstrap Second" src="images/2.jpg">
						<div class="carousel-caption">
							<h4>
								Gambar ke-2
							</h4>
							<p>
								Ini Gambar ke-2...
							</p>
						</div>
					</div>
					<div class="carousel-item active">
						<img class="d-block w-100" alt="Carousel Bootstrap Third" src="images/3.jpg">
						<div class="carousel-caption">
							<h4>
							    Gambar ke-3
							</h4>
							<p>
							    Ini Gambar ke-3... 
							</p>
						</div>
					</div>
				</div> <a class="carousel-control-prev" href="#carousel-371003" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-371003" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>
		</div>
	</div>