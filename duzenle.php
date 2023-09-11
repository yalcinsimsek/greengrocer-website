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
								<li  class="current-list-item"><a href="#">Ürün</a>
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




  $urun_id = $_GET["id"];
 

 


$sql = "SELECT * FROM urun WHERE urid = $urun_id";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    echo '<div style="display: flex; justify-content: center; align-items: center; height: 100vh;">';
    echo '<div style="background-color: #f1f1f1; padding: 20px; border-radius: 10px; text-align: center;">';
    echo '<h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Ürün Düzenleme</h2>';
    echo '<div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">';
    echo '<img src="assets/img/products/' . $row["resim"] . '" alt="Ürün Resmi" style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">';
    echo '</div>';
    echo '<form method="POST" action="kaydet.php" enctype="multipart/form-data">';
    echo '<input type="hidden" name="urid" value="' . $row["urid"] . '">';
    echo '<span style="font-size: 18px; font-weight: bold;">Ürün Adı:</span><br>';
    echo '<input type="text" name="adı" value="' . $row["adı"] . '" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>';
    echo '<span style="font-size: 18px; font-weight: bold;">Stok Durumu:</span><br>';
    echo '<input type="text" name="stok" value="' . $row["stok"] . '" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>';
    echo '<span style="font-size: 18px; font-weight: bold;">Açıklama:</span><br>';
    echo '<textarea name="acıklama" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; height: 100px; margin-bottom: 10px;">' . $row["acıklama"] . '</textarea><br>';
    ?><span style="font-size: 18px; font-weight: bold;">Kategori:</span><br>
<select name="kategori" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;">
    <option value="Meyve" <?php if($row["kategori"] == "Meyve") echo "selected"; ?>>Meyve</option>
    <option value="Sebze" <?php if($row["kategori"] == "Sebze") echo "selected"; ?>>Sebze</option>
    <option value="Şarküteri" <?php if($row["kategori"] == "Şarküteri") echo "selected"; ?>>Şarküteri</option>
    <option value="Diğer" <?php if($row["kategori"] == "Diğer") echo "selected"; ?>>Diğer</option>
</select><br>
<?php
    echo '<span style="font-size: 18px; font-weight: bold;">Fiyat:</span><br>';
    echo '<input type="text" name="fiyat" value="' . $row["fiyat"] . '" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>';
    echo '<span style="font-size: 18px; font-weight: bold;">Resim:</span><br><br>';
    echo '<input type="file" name="resim" style="font-size: 16px; font-weight: bold; margin-bottom: 10px;"><br><br>';
    echo '<input type="submit" value="Kaydet" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #F28123; color: white; border: none; border-radius: 5px; cursor: pointer;">';
    echo '<input type="button" value="Ürünü Sil" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #F23C3C; color: white; border: none; border-radius: 5px; cursor: pointer; "onclick="confirmDelete()">';
    echo '</form>';
    echo '</div>';
    echo '</div>';
} else {
    echo "Ürün bulunamadı.";
}

?>

<br>
<br>
<br>
<br>
<br>
<br>
<script>
    function confirmDelete() {
        if (confirm("Ürünü silmek istiyorsunuz. Emin misiniz?")) {
            window.location.href = "sil.php?id=<?php echo $urun_id; ?>";
        }
    }
</script>











	
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