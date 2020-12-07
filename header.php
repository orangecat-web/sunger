<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- SEO meta -->
		<?php include("meta.php"); ?>

		<!--標籤上的 icon-->
		<link rel="icon" href="favicon.png">
		<link rel="icon" href="favicon.ico?v=1.1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png" sizes="180x180">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<!-- dropdown Nav -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap-4-hover-navbar.css">

		<!--note: slidebars-->
		<link rel="stylesheet" href="css/slidebars/slidebars.css">
		<link rel="stylesheet" href="css/slidebars/style.css">

		<!--note: layout-->
		<link rel="stylesheet"  href="css/layout.css">
		<link rel="stylesheet"  href="css/d-layout.css">
	</head>
	<body>
		<header class="fixed-top">
			<!--nav for mobile-->
			<div off-canvas="slidebar-2 left overlay" class="slidebars">
				<div class="closeBtn"><button class="js-close-right-slidebar btn_close"><i class="fas fa-times"></i></button></div>
				<dl class="row mx-auto slidebarNav">
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="about.php">
							<p>品牌介紹</p>
							<span>About us</span>
						</a>
					</dd>
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="process.php">
							<p>訂製流程</p>
							<span>Tollor Made</span>
						</a>
					</dd>
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="products.php">
							<p>產品專區</p>
							<span>Products</span>
						</a>
					</dd>
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="case.php">
							<p>作 品 集</p>
							<span>Showcase</span>
						</a>
					</dd>
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="news.php">
							<p>最新消息</p>
							<span>News</span>
						</a>
					</dd>
					<dd class="col-md-12 col-sm-6 col-12">
						<a href="contact.php">
							<p>聯絡我們</p>
							<span>Contact us</span>
						</a>
					</dd>
				</dl>
			</div>

			<!-- nav for desktop -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand TabletsMobile" href="."><img src="images/layout/logo.svg" alt=""></a>
				<button class="navbar-toggler navbar-toggler-right js-toggle-right-slidebar"><i class="fas fa-bars"></i></button>
				<div class="collapse navbar-collapse justify-content-center align-items-center" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="about.php">
								<p>品牌介紹</p>
								<span>About us</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="process.php">
								<p>訂製流程</p>
								<span>Tollor Made</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="products.php">
								<p>產品專區</p>
								<span>Products</span>
							</a>
						</li>
						<a class="navbar-brand" href="."><img src="images/layout/logo.svg" alt=""></a>
						<li class="nav-item">
							<a class="nav-link" href="case.php">
								<p>作 品 集</p>
								<span>Showcase</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="news.php">
								<p>最新消息</p>
								<span>News</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">
								<p>聯絡我們</p>
								<span>Contact us</span>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<article class="" canvas="container">