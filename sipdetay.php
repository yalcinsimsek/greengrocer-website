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
								<li   class="current-list-item"><a href="sipkon.php">Sipariş Kontrol</a></li>
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



	<div class="cart-section mt-150 mb-150">
		<div class="container">
		<!-- cart -->
 <?php
    $siparis_id = $_GET['siparis_id'];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM siparis WHERE sipno = '$siparis_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $siparis_tarihi = $row["tarih"];
		$ad = $row["ad"];
		$tel = $row["tel"];
		$mail = $row["mail"];
		$ek_not = $row["ek_not"];
		$oyontem = $row["oyontem"];
		$adres = $row["adres"];
		

       
        echo "<p style='color: green; margin-top: 30px; font-weight: bold;'>Sipariş No: $siparis_id</p>";
		echo "<p style='color: red; margin-top: 30px; font-weight: bold;'>Sipariş Tarihi: $siparis_tarihi</p>";
	
    } else {
        echo "Sipariş bulunamadı.";
    }

?>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									
									<th class="product-image">Ürün Resmi</th>
									<th class="product-name">Adı</th>
									<th class="product-price">Fiyat</th>
									<th class="product-quantity">Miktar</th>
									<th class="product-total">Toplam</th>
								</tr>
							</thead>
							<tbody>
							
 


<?php 
	$siparis_id = $_GET['siparis_id'];
    $sorgu_urun = mysqli_query($conn, "SELECT siparis_urunler.*, urun.* FROM siparis_urunler INNER JOIN urun ON siparis_urunler.urunId = urun.urid WHERE siparis_urunler.siparisNo = '$siparis_id'");
    $say_urun = mysqli_num_rows($sorgu_urun);
    $toplam = 0;
    
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $siparis_id = $_GET['siparis_id'];

        
        $query = "DELETE FROM sepet WHERE id = '$sepet_id'";
        $result = mysqli_query($conn, $query);

        if ($result) {      
            header("Location: cart.php");
            exit;
        } else {
           
            echo "Silme işlemi başarısız. Hata: " . mysqli_error($conn);
        }
    }
    
    if ($say_urun > 0) {
        while ($satir_urun = mysqli_fetch_array($sorgu_urun)) {           
?>
            <tr class="table-body-row">
           
                <td class="product-image"><img src="assets/img/products/<?php echo $satir_urun['resim'] ?>" alt=""></td>
                <td class="product-name"><?php echo $satir_urun['adı'] ?></td>
                <td class="product-price"><?php echo $satir_urun['fiyat'] ?> TL</td>
                <td class="product-quantity"><?php echo $satir_urun['miktar'] ?> Kg</td>
                <td class="product-total"><?php echo $toplam1 = $satir_urun['miktar'] * $satir_urun['fiyat'] ?> TL</td>
                <?php $toplam = $toplam + $toplam1; ?>
<?php
        }
    }
	
?>



							</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Toplam</th>
									<th>Fiyat</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Ara Toplam: </strong></td>
									<td><?php echo $toplam ?> TL</td>
								</tr>
								<tr class="total-data">
									<td><strong>Gönderim Ücreti: </strong></td>
									<td>15 TL</td>
								</tr>
								<tr class="total-data">
								<?php $aratop=$toplam+15 ?>
									<td><strong>Toplam: </strong></td>
									<td><?php echo $aratop ?> TL</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["teslim_et"])) {
        $siparis_id = $_POST["siparis_id"];
    
$silSQL2 = "DELETE FROM siparis_urunler WHERE siparisno = '$siparis_id'";
if ($conn->query($silSQL2) === TRUE) {
    echo "Sipariş ve ürünleri başarıyla silindi.";

   
    $silSQL = "DELETE FROM siparis WHERE sipno = '$siparis_id'";
    if ($conn->query($silSQL) === TRUE) {
        echo "Sipariş başarıyla silindi.";
        echo "<script>window.location.href = 'sipsil.php';</script>";
        exit();
    } else {
        echo "Sipariş silinirken hata oluştu: " . $conn->error;
    }
} else {
    echo "Sipariş ve ürünleri silinirken hata oluştu: " . $conn->error;
}


    } elseif (isset($_POST["sil"])) {
		$siparis_id = $_POST["siparis_id"];
    

           
$silSQL2 = "DELETE FROM siparis_urunler WHERE siparisno = '$siparis_id'";
if ($conn->query($silSQL2) === TRUE) {
    echo "Sipariş ve ürünleri başarıyla silindi.";

    
    $silSQL = "DELETE FROM siparis WHERE sipno = '$siparis_id'";
    if ($conn->query($silSQL) === TRUE) {
        echo "Sipariş başarıyla silindi.";
        echo "<script>window.location.href = 'sipsil.php';</script>";
        exit();
    } else {
        echo "Sipariş silinirken hata oluştu: " . $conn->error;
    }
} else {
    echo "Sipariş ve ürünleri silinirken hata oluştu: " . $conn->error;
}
        
    }
}
?>

	
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="hidden" name="siparis_id" value="<?php echo $siparis_id; ?>">
    <button type="submit" name="teslim_et" class="boxed-btn black" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #00ce00; color: white; border: none; border-radius: 5px; cursor: pointer;">Teslim Edildi İşaretle</button>

    <button type="submit" name="sil" class="boxed-btn black" style="font-size: 18px; font-weight: bold; padding: 8px; background-color: #b7410e; color: white; border: none; border-radius: 5px; cursor: pointer;">Siparişi Sil</button>
	</form>

						</div>
					</div>

					
				</div>
			</div>
			 <?php
    $siparis_id = $_GET['siparis_id'];
   
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "SELECT * FROM siparis WHERE sipno = '$siparis_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $siparis_tarihi = $row["tarih"];
		$ad = $row["ad"];
		$tel = $row["tel"];
		$mail = $row["mail"];
		$ek_not = $row["ek_not"];
		$oyontem = $row["oyontem"];
		$adres = $row["adres"];
		

        
       
		
    } else {
        echo "Sipariş bulunamadı.";
    }

?>
<br>
<br>
<br>

<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Sipariş Bilgileri</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Ad Soyad: </strong></td>
									<td><?php echo $ad?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Telefon: </strong></td>
									<td><?php echo $tel?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Mail: </strong></td>
									<td><?php echo $mail?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Not: </strong></td>
									<td><?php echo $ek_not?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Ödeme: </strong></td>
									<td><?php echo $oyontem?></td>
								</tr>
								<tr class="total-data">
									<td><strong>Adres: </strong></td>
									<td><?php echo $adres?></td>
								</tr>
							</tbody>
						</table>
						
					</div>
		</div>
	</div>
	
	<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
	<!-- end cart -->


<script>
    function confirmDelete(id) {
        if (confirm("Gelen siparişi silmek istiyorsunuz. Emin misiniz?")) {
            window.location.href = "ssil.php?id="+id;
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