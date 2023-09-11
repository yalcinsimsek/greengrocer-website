<!DOCTYPE html>
<html lang="tr">
<?php
include('baglan.php');
?>
<?php
session_start(); 
if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
  
    $_SESSION["error"] = "İzinsiz erişim! Giriş yapmanız gerekmektedir.";
    header("Location: login.php"); // Kullanıcıyı login sayfasına yönlendir
    exit();
}

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true) {
    header("Location: login.php"); // Kullanıcı giriş yapmamışsa login sayfasına yönlendir
    exit();
}
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Yönetici Paneli</title>

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

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>AKDENİZ MANAV</p>
						<h1>Yönetici Paneli</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->


<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="yonetim.php">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li><a href="yonetim.php">Ana Sayfa</a></li>
								<li><a href="#">Ürün</a>
									<ul class="sub-menu">
										<li><a href="urun.php">Ürün Düzenle</a></li>
										<li><a href="ekle.php">Ürün Ekle</a></li>
										<li><a href="urun.php">Ürün Sil</a></li>
									</ul>
								</li>
								<li><a href="#">Haber</a>
									<ul class="sub-menu">
										<li><a href="haber.php">Haber Düzenle</a></li>
										<li><a href="hekle.php">Haber Ekle</a></li>
										<li><a href="haber.php">Haber Sil</a></li>
									</ul>
								</li>
								<li><a href="sipkon.php">Sipariş Kontrol</a></li>
								<li  class="current-list-item"><a href="#">Site Bilgileri</a>
									<ul class="sub-menu">
										<li><a href="sbilgi.php">Genel Bilgiler</a></li>
										<li><a href="ssbilgi.php">Sosyal Medya</a></li>
										
									</ul></li>
									<li><a href="gkutusu.php">Gelen Kutusu</a></li>
									<li><a href="ayurun.php">Ayın Ürünü</a></li>
								<li>
									<div class="header-icons">
										
										<a class="mobile-hide search-bar-icon" href="logout.php"><i class="fas fa-lock"></i>   Çıkış</a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-lock"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	<br>
	<br>
	<br>




<?php



$sql = "SELECT * FROM sirket";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $adresmah = $row["adresmah"];
    $adres2 = $row["adres2"];
    $adres3 = $row["adres3"];
    $maghaftaici = $row["maghaftaici"];
    $maghaftasonu = $row["maghaftasonu"];
    $itelefon = $row["iltelefon"];
    $mail = $row["ilmail"];
    $konum = $row["konum"];
    $hk = $row["hk"];
} else {
    $adresmah = "";
    $adres2 = "";
    $adres3 = "";
    $maghaftaici = "";
    $maghaftasonu = "";
    $itelefon = "";
    $mail = "";
    $konum = "";
    $hk = "";
}
$resim = "uyari.png";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $adresmah =  mysqli_real_escape_string($conn, $_POST["adresmah"]);
    $adres2 =  mysqli_real_escape_string($conn, $_POST["adres2"]);
    $adres3 =  mysqli_real_escape_string($conn, $_POST["adres3"]);
    $maghaftaici =  mysqli_real_escape_string($conn, $_POST["maghaftaici"]);
    $maghaftasonu =  mysqli_real_escape_string($conn, $_POST["maghaftasonu"]);
    $itelefon =  mysqli_real_escape_string($conn, $_POST["itelefon"]);
    $mail =  mysqli_real_escape_string($conn, $_POST["mail"]);
    $hk =  mysqli_real_escape_string($conn, $_POST["hk"]);
    $konum =  mysqli_real_escape_string($conn, $_POST["konum"]);

 
    $sql = "UPDATE sirket SET adresmah='$adresmah', adres2='$adres2', adres3='$adres3', maghaftaici='$maghaftaici', maghaftasonu='$maghaftasonu', iltelefon='$itelefon', ilmail='$mail', konum='$konum', hk='$hk' WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        $success_message = "Şirket bilgileri başarıyla güncellendi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}

?>

<div style="display: flex; justify-content: center; align-items: center; height: 115vh;">
    <div style="background-color: #f1f1f1; padding: 20px; border-radius: 10px; text-align: center;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Şirket Bilgileri Düzenleme</h2>
        <?php if(isset($success_message)) { ?>
            <p style="color: green; margin-top: 30px; font-weight: bold;"><?php echo $success_message; ?></p>
        <?php } ?>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">	 
            <img src="assets/img/products/<?php echo $resim; ?>" alt="Ürün Resmi" style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
        </div>
            <span style="font-size: 18px; font-weight: bold;">Adres Mahalle:</span><br>
            <input type="text" name="adresmah" value="<?php echo $adresmah; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Adres 2:</span><br>
            <input type="text" name="adres2" value="<?php echo $adres2; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Adres 3:</span><br>
            <input type="text" name="adres3" value="<?php echo $adres3; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Mağaza Hafta İçi Çalışma Saatleri:</span><br>
            <input type="text" name="maghaftaici" value="<?php echo $maghaftaici; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Mağaza Hafta Sonu Çalışma Saatleri:</span><br>
            <input type="text" name="maghaftasonu" value="<?php echo $maghaftasonu; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">İletişim Telefonu:</span><br>
            <input type="text" name="itelefon" value="<?php echo $itelefon; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">E-Posta:</span><br>
            <input type="text" name="mail" value="<?php echo $mail; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
			<span style="font-size: 18px; font-weight: bold;">Hakkımızda:</span><br>
            <input type="text" name="hk" value="<?php echo $hk; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
			 <span style="font-size: 18px; font-weight: bold;">Konum:</span><br>
            <input type="text" name="konum" value="<?php echo $konum; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <input type="submit" value="Kaydet" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #F28123; color: white; border: none; border-radius: 5px; cursor: pointer;">
        </form>
    </div>
</div>













	
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