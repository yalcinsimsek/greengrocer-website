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
								<li  class="current-list-item"><a href="#">Haber</a>
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




    $padı = "";
    $baslik = "";
    $haber = "";
    $kaynak = "";
	$ozet = "";
    $tag = "";
	$tag1 = "";;
	$tag2 = "";
	$tag3 = "";
$resim = "uyari.png"; 



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    $padı = mysqli_real_escape_string($conn, $_POST["padı"]);
    $baslik = mysqli_real_escape_string($conn, $_POST["baslik"]);
    $haber = mysqli_real_escape_string($conn, $_POST["haber"]);
    $kaynak = mysqli_real_escape_string($conn, $_POST["kaynak"]);
	$ozet = mysqli_real_escape_string($conn, $_POST["ozet"]);
    $tag = mysqli_real_escape_string($conn, $_POST["tag"]);
	$tag1 = mysqli_real_escape_string($conn, $_POST["tag1"]);
	$tag2 = mysqli_real_escape_string($conn, $_POST["tag2"]);
	$tag3 = mysqli_real_escape_string($conn, $_POST["tag3"]);
	$tarih = date("Y-m-d H:i:s");

	

    $resim = $_FILES["resim"]["name"];
    $resim_tmp = $_FILES["resim"]["tmp_name"];
    $resim_yol = "assets/img/latest-news/" . $resim;

    
    $sql = "INSERT INTO haberler (id, padı, baslik, haber, kaynak, ozet, tag, tag1, tag2, tag3, resim, tarih) VALUES ('$id', '$padı', '$baslik', '$haber', '$kaynak', '$ozet', '$tag', '$tag1', '$tag2', '$tag3', '$resim','$tarih')";

    if ($conn->query($sql) === TRUE) {
       
        move_uploaded_file($resim_tmp, $resim_yol);
        $success_message = "Haber başarıyla kaydedildi.";
    } else {
        echo "Hata: " . $sql . "<br>" . $conn->error;
    }
}


$sql = "SELECT MAX(id) AS max_id FROM haberler";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id = $row["max_id"] + 1;
} else {
    $id = 1;
}

?>

<div style="display: flex; justify-content: center; align-items: center; height: 155vh;">
    <div style="background-color: #f1f1f1; padding: 20px; border-radius: 10px; text-align: center;">
        <h2 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">Haber Ekleme</h2>
		<?php if(isset($success_message)) { ?>
            <p style="color: green; margin-top: 30px; font-weight: bold;"><?php echo $success_message; ?></p>
        <?php } ?>
        <div style="display: flex; justify-content: center; align-items: center; margin-bottom: 20px;">	 
            <img src="assets/img/latest-news/<?php echo $resim; ?>" alt="Ürün Resmi" style="width: 250px; height: 250px; object-fit: cover; border-radius: 10px;">
        </div>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
            <span style="font-size: 18px; font-weight: bold;">Haber ID:</span><br>
            <input type="text" name="id" value="<?php echo $id; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;" readonly><br>
            <span style="font-size: 18px; font-weight: bold;">Paylaşan Adı:</span><br>
            <input type="text" name="padı" value="<?php echo $padı; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Haber Başlığı:</span><br>
            <input type="text" name="baslik" value="<?php echo $baslik; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Haber:</span><br>
            <textarea name="haber" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; height: 100px; margin-bottom: 10px;"><?php echo $haber; ?></textarea><br>
			<span style="font-size: 18px; font-weight: bold;">Özet:</span><br>
            <textarea name="ozet" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; height: 100px; margin-bottom: 10px;"><?php echo $ozet; ?></textarea><br>
            <span style="font-size: 18px; font-weight: bold;">Tag:</span><br>
            <input type="text" name="tag" value="<?php echo $tag; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
			<span style="font-size: 18px; font-weight: bold;">Tag1:</span><br>
            <input type="text" name="tag1" value="<?php echo $tag1; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
			<span style="font-size: 18px; font-weight: bold;">Tag2:</span><br>
            <input type="text" name="tag2" value="<?php echo $tag2; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
			<span style="font-size: 18px; font-weight: bold;">Tag3:</span><br>
            <input type="text" name="tag3" value="<?php echo $tag3; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Kaynak:</span><br>
            <input type="text" name="kaynak" value="<?php echo $kaynak; ?>" style="font-size: 16px; font-weight: bold; padding: 5px; width: 300px; margin-bottom: 10px;"><br>
            <span style="font-size: 18px; font-weight: bold;">Resim:</span><br><br>
            <input type="file" name="resim" style="font-size: 16px; font-weight: bold; margin-bottom: 10px;"><br><br>
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