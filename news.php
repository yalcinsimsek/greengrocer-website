<!DOCTYPE html>
<?php
include('baglan.php');
?>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Haberler</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="index.php">Ana Sayfa</a>
									
								</li>
								<li><a href="about.php">Hakkımızda</a></li>
								<li><a href="shop.php">Ürünler</a></li>
								<li class="current-list-item"><a href="news.php">Haberler</a>
									
								</li>
								<li><a href="contact.php">Bize Ulaşın</a></li>
								<li><a href="shop.php">Alışveriş</a>
									<ul class="sub-menu">
										<li><a href="checkout.php">Ödeme</a></li>
										<li><a href="cart.php">Sepet</a></li>
									</ul>
								</li>
								<li>
									<div class="header-icons">
										<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
										<a class="mobile-hide search-bar-icon" href="login.php"><i class="fas fa-lock"></i></a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="admin.php"><i class="fas fa-lock"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Organik Haber</p>
						<h1>Haber Makalesi</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row">
				
<?php 
	$sorgu_haber = mysqli_query($conn,"select * from haberler");
	$say_haber	= mysqli_num_rows($sorgu_haber);
	if ( $say_haber > 0 ) {	
	while ( $satir_haber = mysqli_fetch_array($sorgu_haber)) {
?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>"><img height='200' width='350' src="assets/img/latest-news/<?php echo $satir_haber['resim']?>" alt=""></a>
						<div class="news-text-box">
							<h3><a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>"><?php echo $satir_haber['baslik']?></a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i><?php echo $satir_haber['padı']?></span>
								<span class="date"><i class="fas fa-calendar"></i><?php echo $satir_haber['tarih']?></span>
							</p>
							<p class="excerpt"><?php echo nl2br($satir_haber['ozet'])?></p>
							<a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>" class="read-more-btn">Devamını Oku.. <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
					</div>	
<?php 	
		}
	}
?>
														
				
				</div>
			</div>

			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="pagination-wrap">
								<ul>
									<li><a href="#">Önceki</a></li>
									<li><a class="active" href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">Sonraki</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->


	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
<?php 
	$sorgu_sirket = mysqli_query($conn,"select * from sirket");
	$satir_sirket = mysqli_fetch_array($sorgu_sirket);
	
?>
						<h2 class="widget-title">Hakkımızda</h2>
						<p><?php echo $satir_sirket['hk']?></p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Bize ULAŞ !</h2>
						<ul>
							<li><?php echo $satir_sirket['adresmah']?> <?php echo $satir_sirket['adres2']?> <?php echo $satir_sirket['adres3']?></li>
							<li><?php echo $satir_sirket['iltelefon']?></li>
							<li><?php echo $satir_sirket['ilmail']?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Sayfalar</h2>
						<ul>
							<li><a href="index.php">Ana Sayfa</a></li>
							<li><a href="about.php">Hakkında</a></li>
							<li><a href="services.php">Alışveriş</a></li>
							<li><a href="news.php">Haberler</a></li>
							<li><a href="contact.php">İletişim</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Takipte Kal !</h2>
						<p>Son gelişmeleri takip etmek için sosyal medya hesaplarımızı takip et.</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p><a href="Sablon\fruitkha" target="_blank" >Orjinal Şablon Versiyonu</a>
					<a href="Rapor\rapor.pdf" target="_blank" > - Proje Raporu</a><br>
					&copy; 2019 - 2023 
					<a href="https://imransdesign.com/" target="_blank" >Tüm Hakları Saklıdır.</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
<?php 
	$sorgu_sm = mysqli_query($conn,"select * from sosyalmedya");
	$satir_sm = mysqli_fetch_array($sorgu_sm);
	
?>
							<li><a href="<?php echo $satir_sm['face']?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?php echo $satir_sm['twitter']?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="<?php echo $satir_sm['insta']?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>