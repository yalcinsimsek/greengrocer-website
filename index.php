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
	<title>Akdeniz Manav</title>

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
								<li class="current-list-item"><a href="index.php">Ana Sayfa</a>
									
								</li>
								<li><a href="about.php">Hakkımızda</a></li>
								<li><a href="shop.php">Ürünler</a></li>
								<li><a href="news.php">Haberler</a>
									
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

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 offset-lg-2 text-center">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Taze & Organik</p>
							<h1>Taze Mevsim Meyveleri</h1>
							<div class="hero-btns">
								<a href="shop.php" class="boxed-btn">Ürünler</a>
								<a href="contact.php" class="bordered-btn">Bize Ulaşın</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Ücretsiz Teslimat</h3>
							<p>75 TL'nin üstü sipariş verildiğinde</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>7/24 Destek</h3>
							<p>Tüm gün destek</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Değişim</h3>
							<p>Memnun kalmadığınız ürünlerde değişim</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Ürünlerimiz</span> </h3>
						<p>Mevsiminde taptaze organik ürünlerimiz.</p>
					</div>
				</div>
			</div>

			<div class="row">
<?php 
	$sorgu_urun = mysqli_query($conn,"select * from urun order by rand() limit 3");
	$say_urun = mysqli_num_rows($sorgu_urun);
	if ( $say_urun > 0 ) {	
	while ( $satir_urun = mysqli_fetch_array($sorgu_urun)) {
?>
			
				<div class="col-lg-4 col-md-6 text-center <?php echo $satir_urun['kategori']?>">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php?uid=<?php echo hash('sha256', rand(1,1000)).$satir_urun['urid'].hash('sha256', rand(1,1000))?>"><img src="assets/img/products/<?php echo $satir_urun['resim'] ?>" alt=""></a>
						</div>
						<h3><?php echo $satir_urun['adı']?></h3>
						<p class="product-price"><span>Kg Başı</span><?php echo $satir_urun['fiyat']." ".'TL'?></p>
						<a href="single-product.php?uid=<?php echo hash('sha256', rand(1,1000)).$satir_urun['urid'].hash('sha256', rand(1,1000))?>" class="cart-btn"><i class="fas fa-shopping-cart"></i>Sepete Ekle</a>
					</div>
				</div>
			
<?php 	
		}
	}
?>			</div>
		</div>
	</div>
	<!-- end product section -->

	<!-- cart banner section -->
	<?php 
					$sorgu_urun = mysqli_query($conn,"select * from ayurun");
					$satir_urun = mysqli_fetch_array($sorgu_urun);
					$urunid = $satir_urun['urid'];
					
					$sorgu_ayurun = mysqli_query($conn,"select * from urun where urid = $urunid");
					$satir_ayurun = mysqli_fetch_array($sorgu_ayurun);	
					
				
				?>
	 <section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong><?php echo $satir_urun['indirimor']."%"?></strong> <br> KG Başı
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/products/<?php echo $satir_ayurun['resim']?>" alt="">
                    </div>
                </div>
                <!--Content Column-->
				
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Ayın</span> Fırsatı</h3>
                    <h4><?php echo $satir_ayurun['adı']?></h4>
                    <div class="text"><?php echo $satir_ayurun['acıklama']?></div><br>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown=<?php echo $satir_urun['tarih']?>><div class="counter-column"><div class="inner"><span class="count">00</span>Gün</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Saat</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Dakika</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Saniye</div></div></div></div>
                	<a href="single-product.php?uid=<?php echo hash('sha256', rand(1,1000)).$satir_urun['urid'].hash('sha256', rand(1,1000))?>" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Sepete Ekle</a>
                </div>
            </div>
        </div>
    </section>
	
    <!-- end cart banner section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150 mt-150">
		<div class="container">
			<div class="row">
			<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
					<?php 
	$sorgu_sirket = mysqli_query($conn,"select * from sirket");
	$satir_sirket = mysqli_fetch_array($sorgu_sirket);
	
?>
						<center><p class="top-sub">Since Year 2016</p>
						<h2>Biz <span class="orange-text"> Akdeniz Manav</span></h2>
						<p><?php echo $satir_sirket['hk']?></p>
						
						<a href="about.php" class="boxed-btn mt-4">Daha Fazla</a></center>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
	<div class="feature1">
    	<div class="container">
        	<h3>Aralık İNDİRİMİ! <br> BÜYÜK <span class="orange-text">İndirimler...</span></h3>
            <div class="sale-percent"><span><br></span>50% <span>'ye varan</span></div>
            <a href="shop.php" class="cart-btn btn-lg">Şimdi Alışveriş Yap</a>
        </div>
	</div>
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Akdeniz Manav</span> Haberler</h3>
						<p>Gündemde olan gelişmeler haberler burada.</p>
					</div>
				</div>
			</div>

			<div class="row">
			<?php 
				$sorgu_haber = mysqli_query($conn,"select * from haberler order by rand() limit 3");
				$say_haber = mysqli_num_rows($sorgu_haber);
				if ( $say_haber > 0 ) {	
				while ( $satir_haber = mysqli_fetch_array($sorgu_haber)) {
			?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>"><img height='200' width='350' src="assets/img/latest-news/<?php echo $satir_haber['resim']?>" alt=""</div></a>
						<div class="news-text-box">
							<h3><a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>"><?php echo $satir_haber['baslik']?></a></h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i> <?php echo $satir_haber['padı']?></span>
								<span class="date"><i class="fas fa-calendar"></i> <?php echo $satir_haber['tarih']?></span>
							</p>
							<p class="excerpt"><?php echo nl2br($satir_haber['ozet'])?></p>
							<a href="single-news.php?hid=<?php echo hash('sha256', rand(1,1000)).$satir_haber['id'].hash('sha256', rand(1,1000))?>" class="read-more-btn">Devamını Oku <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<?php 	
						}
					}
				?>

			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="news.php" class="boxed-btn">Daha Fazla Haber</a>
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