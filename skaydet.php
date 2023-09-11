<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "manav";

  
    $isim = $_POST["isim"];
    $mail = $_POST["mail"];
    $adres = $_POST["adres"];
    $telefon = $_POST["telefon"];
    $ek_not = $_POST["bill"];
    $odeme_yontemi = $_POST["odeme"];

    
    $siparisNo = rand(1000, 9999);

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Veritabanına bağlanırken hata oluştu: " . $conn->connect_error);
    }
$tarih = date("Y-m-d H:i:s");


    
    $siparisSQL = "INSERT INTO siparis (ad, adres, mail, tel, ek_not, sipno ,oyontem,tarih)
            VALUES ('$isim', '$adres', '$mail', '$telefon', '$ek_not', '$siparisNo','$odeme_yontemi','$tarih')";

    if ($conn->query($siparisSQL) === TRUE) {
        
        $sepetSQL = "SELECT * FROM sepet";
        $sepetResult = $conn->query($sepetSQL);

        if ($sepetResult->num_rows > 0) {
            while ($sepetRow = $sepetResult->fetch_assoc()) {
                $urunId = $sepetRow["urun_id"];
                $miktar = $sepetRow["miktar"];

               
                $siparisUrunSQL = "INSERT INTO siparis_urunler (siparisNo, urunId, miktar)
                          VALUES ('$siparisNo', '$urunId', '$miktar')";

                if ($conn->query($siparisUrunSQL) !== TRUE) {
                    echo "Ürün kaydedilirken hata oluştu: " . $conn->error;
                }
            }

           
            $sepetTemizleSQL = "DELETE FROM sepet";
            if ($conn->query($sepetTemizleSQL) !== TRUE) {
                echo "Sepet temizlenirken hata oluştu: " . $conn->error;
            }
        }

        
        header("Location: sipbilg.php?siparisNo=" . $siparisNo);
        exit(); 
    } else {
        echo "Sipariş kaydedilirken hata oluştu: " . $conn->error;
    }
}
?>
