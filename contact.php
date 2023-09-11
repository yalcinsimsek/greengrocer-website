<!DOCTYPE html>
<html lang="tr">
<?php
include('baglan.php');

?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>İletişim</title>

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
								<li><a href="news.php">Haberler</a>
									
								</li>
								<li class="current-list-item"><a href="contact.php">Bize Ulaşın</a></li>
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
						<p>7/24 Destek Alın</p>
						<h1>Bize Ulaşın</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   

    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $subject = isset($_POST['subject']) ? $_POST['subject'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

   
    $sql = "INSERT INTO iletisim (ads, mail, tel, konu, mesaj) VALUES ('$name', '$email', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id; 

        $success_message = "Mesaj başarıyla kaydedildi. MESAJ KODU: " . $last_id;
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}
?>

<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <?php if(isset($success_message)) { ?>
                        <p style="color: green; margin-top: 30px; font-weight: bold;"><?php echo $success_message; ?></p>
                    <?php } ?>
                    <h2>Herhangi bir sorunuz var mı?</h2>
                    <p>Herhangi bir sorunuz varsa bizimle iletişime geçebilirsiniz...</p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form method="POST" action="" id="fruitkha-contact">
                        <p>
                            <input type="text" placeholder="Ad Soyad" name="name" id="name">
                            <input type="email" placeholder="Email" name="email" id="email">
                        </p>
                        <p>
                            <input type="tel" placeholder="Telefon" name="phone" id="phone">
                            <input type="text" placeholder="Konu" name="subject" id="subject">
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Mesaj"></textarea></p>
                        <input type="hidden" name="token" value="FsWga4&@f6aw" />
                        <p><input type="submit" value="Gönder"></p>
                    </form>
					
                </div>
            </div>
			<?php 
	$sorgu_sirket = mysqli_query($conn,"select * from sirket");
	$satir_sirket = mysqli_fetch_array($sorgu_sirket);
	
?>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Mağaza Adresi</h4>
							<p><?php echo $satir_sirket['adresmah']?> <br> <?php echo $satir_sirket['adres2']?> <br> <?php echo $satir_sirket['adres3']?></p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Mağaza Saatleri</h4>
							<p> <?php echo $satir_sirket['maghaftaici']?> <br> <?php echo $satir_sirket['maghaftasonu']?> </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> İletişim</h4>
							<p><?php echo $satir_sirket['iltelefon']?>  <br> <?php echo $satir_sirket['ilmail']?> </p>
						</div>
					</div>
				</div>
        </div>
    </div>
</div>



			
	
	<!-- end contact form -->

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Konumumuz</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="<?php echo $satir_sirket['konum']?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->


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
	<!-- form validation js -->
	<script src="assets/js/form-validate.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>
	
</body>
</html>