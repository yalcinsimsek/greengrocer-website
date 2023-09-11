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
								<li><a href="#">Site Bilgileri</a>
									<ul class="sub-menu">
										<li><a href="sbilgi.php">Genel Bilgiler</a></li>
										<li><a href="ssbilgi.php">Sosyal Medya</a></li>
									</ul></li>
									<li><a href="gkutusu.php">Gelen Kutusu</a></li>
									<li  class="current-list-item"><a href="ayurun.php">Ayın Ürünü</a></li>
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
$adı = "";
$inor = "";
$tarih = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $inor = $_POST["inor"];
    $tarih = $_POST["tarih"];
    $urid = $_POST["id"];

   
    $sql1 = "SELECT * FROM urun WHERE urid = '$urid'";
    $result = mysqli_query($conn, $sql1);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $fiyat = $row['fiyat'];

       
        $indirimliFiyat = $fiyat - ($fiyat * $inor / 100);

        
        $sql2 = "UPDATE ayurun SET indirimor = '$inor', tarih = '$tarih', urid = '$urid' WHERE id = 0";
        $sql3 = "UPDATE urun SET fiyat = '$indirimliFiyat' WHERE urid = $urid";
        $result1 = mysqli_query($conn, $sql2);
        $result2 = mysqli_query($conn, $sql3);

        if ($result1 && $result2) {
            $success_message = "Ürün bilgileri başarıyla kaydedildi.";
        } else {
            $error_message = "Ürün bilgileri kaydedilirken bir hata oluştu.";
        }
    }
}


$sql4 = "SELECT * FROM ayurun WHERE id = 0";
$result = mysqli_query($conn, $sql4);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $urid = $row['urid'];
    $inor = $row['indirimor'];
    $tarih = $row['tarih'];

   
    $sql5 = "SELECT * FROM urun WHERE urid = '$urid'";
    $result = mysqli_query($conn, $sql5);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $adı = $row['adı'];
        $fiyat = $row['fiyat'];
        $resim = $row['resim'];
    }
}
?>


<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>

<div style="display: flex; justify-content: center; align-items: center; height: 70vh;">
    <div style="background-color: #f1f1f1; padding: 20px; border-radius: 10px; text-align: center;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Ayın Ürünü</h2>
        <?php if(isset($success_message)) { ?>
            <p style="color: green; margin-top: 30px; font-weight: bold;"><?php echo $success_message; ?></p>
        <?php } ?>
        <?php if(isset($error_message)) { ?>
            <p style="color: red; margin-top: 30px; font-weight: bold;"><?php echo $error_message; ?></p>
        <?php } ?>
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">	 
            <img src="assets/img/products/<?php echo $resim; ?>" alt="Ürün Resmi" style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
        </div>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
            <span style="font-size: 18px; font-weight: bold;">Ürün Adı:</span><br>
            <input type="text" name="adı" value="<?php echo $adı; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;" readonly><br>
            <span style="font-size: 18px; font-weight: bold;">Ürün ID:</span><br>
            <input type="text" name="id" value="<?php echo $urid; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">İndirim Oranı:</span><br>
            <input type="text" name="inor" value="<?php echo $inor; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Tarih:</span><br>
            <input type="text" name="tarih" id="datepicker" value="<?php echo $tarih; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"readonly><br>
            <input type="submit" value="Kaydet" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #F28123; color: white; border: none; border-radius: 5px; cursor: pointer;">
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        var today = new Date(); 
        var nextDay = new Date(today.getTime() + (24 * 60 * 60 * 1000)); 

        $("#datepicker").datepicker({
            dateFormat: "yy-mm-dd", 
            minDate: nextDay 
        });
    });
</script>















	
	
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
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