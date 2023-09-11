/*
 Navicat MySQL Data Transfer

 Source Server         : MakeisS
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : manav

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 03/06/2023 23:22:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `kadi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sifre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('akdeniz', '202cb962ac59075b964b07152d234b70');

-- ----------------------------
-- Table structure for ayurun
-- ----------------------------
DROP TABLE IF EXISTS `ayurun`;
CREATE TABLE `ayurun`  (
  `indirimor` int NOT NULL,
  `tarih` datetime NOT NULL,
  `urid` int NOT NULL,
  `id` int NULL DEFAULT NULL,
  INDEX `urid1`(`urid` ASC) USING BTREE,
  CONSTRAINT `urid1` FOREIGN KEY (`urid`) REFERENCES `urun` (`urid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of ayurun
-- ----------------------------
INSERT INTO `ayurun` VALUES (25, '2023-06-30 00:00:00', 11, 0);

-- ----------------------------
-- Table structure for haberler
-- ----------------------------
DROP TABLE IF EXISTS `haberler`;
CREATE TABLE `haberler`  (
  `id` int NOT NULL,
  `padı` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  `baslik` varchar(5000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `haber` varchar(5000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tag` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kaynak` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ozet` varchar(5000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tag1` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tag2` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `tag3` varchar(15) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of haberler
-- ----------------------------
INSERT INTO `haberler` VALUES (0, 'Akdeniz Manav', '2022-12-19 20:47:25', 'Kış yüzünü gösterdi, Sebze Meyve fiyatları artışa geçti.', 'haber1.jpg', 'Türkiye Ziraat Odaları Birliği (TZOB) Genel Başkanı Şemsi Bayraktar, eylülde markette 37 ürünün 27’sinde fiyat artışı, 10’unda fiyat azalışı olduğunu söyledi. Bayraktar “Markette fiyatı en fazla artan ürün yüzde 92,6 ile sivri biber oldu.\r\n\r\nSivri biberdeki fiyat artışını yüzde 73,6 ile domates, yüzde 39,6 ile salatalık, yüzde 32,4 ile patlıcan, yüzde 29 ile marul, yüzde 28,2 ile kabak takip etti. Markette fiyatı en fazla azalan ürün ise yüzde 14,4 ile elma oldu. Elmadaki fiyat düşüşünü yüzde 9,6 ile patates, yüzde 8,7 ile mısır özü yağı, yüzde 6,7 ile kuru soğan, yüzde 6,5 ile yeşil mercimek izledi” dedi. Bu ürünlerde üretici ile market arasındaki fiyat farkına da dikkat çeken Bayraktar yüzde 252,9 ile maydanozda görüldüğünü belirterek, bunu yüzde 231,1 ile marulun, yüzde 219,4 ile domatesin, yüzde 218,3 ile limonun, yüzde 205 ile elmanın takip ettiğini bildirdi. Bayraktar, eylülde üreticide fiyatı en fazla düşen ürünün yüzde 41,2 ile yeşil soğan olduğunu, bunu yüzde 22,5 ile kuru soğan, yüzde 9,1 ile kuru kayısı, yüzde 8,1 ile maydanoz, yüzde 5,1 ile patatesin izlediğini söyledi.', 'Pazar', 'https://www.turkiyegazetesi.com.tr', 'Yaz aylarında tarladan çıkan mahsul ile sebze-meyvede fiyat artışları dizginlenmişti. Kışın yüzünü göstermeye başlamasıyla birlikte yazlık sebze meyve ürünlerinde fiyatlar yeniden yükselişe geçti.\r\n\r\n...', 'Fiyat', 'Gündem', '');
INSERT INTO `haberler` VALUES (1, 'Akdeniz Manav', '2022-12-19 21:12:36', 'Yerin 30 metre altında sebze üretimi', 'haber2.jpg', 'Artan nüfus ve iklim krizinin olumsuz sonuçlarına karşı yeni teknolojilerin geliştirilmesi amacıyla Tarım ve Orman Bakanlığı ile özel sektör işbirliğinde İstanbul’da hayata geçirilen dünyanın en derinde kurulu ikinci dikey tarım merkezinde yüzde 95 su tasarrufuyla çeşitli sebzeler yetiştiriliyor.\r\n\r\nİstanbul Kapalı Dikey Tarım Uygulama ve AR-GE Merkezi, Tarım ve Orman Bakanı Prof. Dr. Vahit Kirişci’nin katılımıyla 8 Aralık’ta açıldı.\r\n\r\nKağıthane’deki Yeni Kültür Merkezi Kompleksi’nde kurulu alanla, şehrin içinde üretim ve tüketim merkezlerinin yakınlaştırılıp lojistik maliyetlerinin düşürülmesi, ürün zayiatının azaltılması ve kentte yaşayanların taze ve ucuz sebzeye erişiminin sağlanması hedefleniyor.\r\n\r\nÇALIŞMALAR 2019’DA BAŞLADI\r\nİstanbul İl Tarım ve Orman Müdürü Ahmet Yavuz Karaca, proje çalışmalarına 2019 yılında başladıkları merkezin, Türkiye’de bir ilk olduğunu söyledi.\r\n\r\nİklim krizinde en önemli konunun su tasarrufu olduğunu ve dikey tarım merkezinde yüzde 95 su tasarrufuyla üretim yapıldığını belirten Karaca, sebze yetiştirirken hiçbir şekilde ilaç kullanmadıklarını, suyun dışında gübreden de tasarruf ettiklerini bildirdi.\r\n\r\nMerkezin sadece kuraklık dönemlerinde değil, afet ve savaş durumlarında da kullanılabileceğine dikkati çeken Karaca, “Afet planları yapıyoruz. Deprem, sel gibi felaketler, savaşlar olabilir. Pandemi, Ukrayna-Rusya savaşı gıdanın ne kadar önemli ve stratejik olduğunu gösterdi. Bir sığınak düşünün. İleride böyle bir üretimin olduğu sığınaktan çıkmadan üretip yiyebilirsiniz. İşte bu alanlar afet zamanlarında değerlendirilebilir” dedi.\r\n\r\nDikey tarım alanını Kağıthane Belediyesi’ne ait bir otoparkta kurdukları bilgisini veren Karaca, “Eksi 30 metre, yani şu anda biz yerin eksi sekizinci katındayız. Bu ne demek? Dünyada kapalı dikey tarım yapılan en derin ikinci noktadayız. Londra’daki üretim alanı 2,5 metre daha derin. Kapalı dikey tarım derken burada toprak yok, güneş yok, bunu özel üretilmiş yapay ışıklarla ve tamamen otomasyonla sağlıyoruz” diye konuştu.\r\n20 DEKARLIK ALANDAKİ VERİM, 250 METREKAREDE ALINIYOR\r\n2050’de dünya nüfusunun 10 milyar, Türkiye nüfusunun ise 105 milyon olacağını, artan nüfus ve sınırlı tarım alanları nedeniyle farklı üretim modelleriyle birim alandan maksimum verim alacak sistemlerin kullanılması gerektiğini vurgulayan Karaca, şöyle devam etti:\r\n\r\n“Buranın brüt olarak tamamı 700 metrekare fakat üretim yapılan kısmı 250 metrekare ve bir yılda yaklaşık olarak 20 dekarlık alandan aldığınız verimi buradan alıyorsunuz. Artı bir değer olarak da optimum şartları oluşturduğunuzda tropikal herhangi bir sebzeyi de üretebiliyorsunuz, nerede ne olursa olsun hepsini yapabiliyorsunuz.”\r\n\r\nHalihazırda marul, İtalyan fesleğeni ve lollo rosso (kırmızı kıvırcık marul) yetiştirdiklerini aktaran Karaca, merkezde yetiştirdikleri ürünlerin üretim parametrelerini ve reçetelerini oluşturmayı da amaçladıklarını dile getirdi.', 'Üretim', 'https://www.sozcu.com.tr', 'Tarım ve Orman Bakanlığı ile özel sektör işbirliğinde İstanbul\'da hayata geçirilen ikinci dikey tarım merkezinde yüzde 95 su tasarrufuyla çeşitli sebzeler yetiştiriliyor. Bu sayede tasarruf sağlanılmış oluyor.\r\n\r\n...', 'Teknoloji', 'Tarım', '');
INSERT INTO `haberler` VALUES (2, 'Akdeniz Manav', '2022-12-19 21:45:59', 'Vitamin Deposu Kış Sebzelerini Nasıl Pişirmeniz Gerektiğini Söylüyoruz', 'haber3.jpg', '1. Sarma yapacağınız lahananın yapraklarını bir dakikadan daha uzun bir süre haşlamayın!\r\nSarmalık lahana yaprakları, ince yapıda oldukları için çok uzun süre haşlandığında, iç harcını koyup sarmaya başladığınızda dağılacak ve istediğiniz gibi olmayacak. \r\nSarmalık lahana yaprakları çok hızlı sürede haşlanacakları için 1 dakikalık süre yeterli olacaktır. Daha fazla haşlamanıza gerek yok.\r\n\r\n2. Lahanayı pişirmeden bir gün önce tuzlu suda bekletmelisiniz.\r\nLahanayı pişirmeden bir gün önce tuzlu suda bekletmek, pişirirken çıkan hoşlanmadığımız kokuyu engeller. Burada dikkat etmeniz gereken nokta, pişirirken lahanaya katacağınız tuz miktarı. Yemeğinizin çok tuzlu olmaması için ölçülü tuz kullanmalısınız.\r\n\r\n3. Lahanayı pişirirken içine elma kabuğu ekleyin.\r\nLahanayı pişirirken çıkan kokudan hoşlanmıyorsanız ve yedikten sonra hazımsızlık yapmasını istemiyorsanız, pişirirken içine elma kabukları atın. Bir elmanın kabuğu yeterli olacaktır. Bu sayede gaz probleminden ve rahatsız edici kokudan kurtulmuş olacaksınız.\r\n\r\n4. Kapuska pişirmeden önce lahanayı şekerli suda bekletin.\r\nŞekerli su, lahananın acılığını alacaktır. Bu sayede yemeğiniz, daha lezzetli olacak. Mutlaka şekerli suda bekletin.\r\n\r\n5. Karnabaharın haşlama suyuna süt ekleyin.\r\nKarnabaharın suyuna ekleyeceğiniz süt, pişerken çıkan kötü kokuyu alacak. Aynı zamanda da piştikten sonra kar gibi bembeyaz olmasını sağlayacak.\r\n\r\n6. Karnabahar pişirirken içine limon suyu ekleyin.\r\nKarnabaharı pişirirken kullanacağınız limon suyu, renk değiştirmemesini sağlar ve karnabaharınız piştiğinde bembeyaz olur. Ayrıca, limonun karnabahara katacağı aromayı da göz ardı etmemek lazım.\r\n\r\n7. Karnabahar kızartması yapacağınızda soda kullanın.\r\nİçi yumuşacık, dışı çıtır çıtır karnabahar kızartması yapmak istiyorsanız, karnabaharı kızartmak için hazırladığınız harcın içine mutlaka soda ekleyin. Lezzetine bayılacaksınız!\r\n\r\n8. Kerevizin kabuğunu soyduktan sonra unlu ve limonlu suyun içinde bekletin.\r\nzeytinyağlı kereviz yapacağınız zaman, kerevizin kabuklarını soyduktan sonra un ve limunlu suyun içinde bekletirseniz kararmasını önlemiş olursunuz.\r\n\r\n9. Koku yapan kerevizlerin içine lahana turşusu ekleyebilirsiniz.\r\nKerevizi pişirirken çıkan rahatsız edici kokuyu önlemenin çok basit bir yolu var. Yaptığınız kereviz yemeğinin içine çok az lahana turşusu ekleyin. Kerevizim tüm kokusunu alacak. \r\nDikkatli oranda kullanmayı unutmayın. Yemeğin lezzetinin değişmesini istemezsiniz.\r\n\r\n10. Ispanağı yıkamadan önce mutlaka sirkeli suda bekletin.\r\nBiliyorsunuz ki ıspanağı yıkamak oldukça zahmetli bir iş. Besin değerini kaybetmeden üzerindeki kimyasal maddeler ve kirlerden güzelce arıtmak için, bir su bardağı sirkeli suyun içinde yarım saat kadar bekletin. Sonrasında berrak su ile yıkayarak pişirebilirsiniz.\r\n\r\n11. Koyu yapraklı yeşil sebzeleri pişirirken tuzu sonradan eklemeyin!\r\nIspanak, pazı, semizotu gibi koyu yapraklı sebzeleri pişirirken tuzunu sonradan atmayın. Sebzelerin rengini ve canlılığını koruyabilmesi için önceden tuzunu atmalı ve tencerenin kapağını hiç açmadan pişirmelisiniz.\r\n\r\n12. Ispanağı pişirirken içine mutlaka şeker ekleyin.\r\nIspanağı yerken ağızınızda oluşan buruk, kekremsi tadın sebebi, pişirirken içine şeker atılmamış olmasıdır. Bunu engellemek ve daha lezzetli ıspanak yemeği pişirmek için, içine bir yada iki adet küp şeker atmanız yeterli olacaktır. Denediğinizde farklı anlayacaksınız.', 'Tavsiye', 'https://onedio.com', 'Peki, çok sevdiğimiz, birbirinden sağlıklı bu sebzeleri doğru pişiriyor musunuz? Sizlere sebzeleri pişirirken dikkat etmeniz gereken püf noktalarını söylüyoruz!\r\n\r\n...', 'Besin', 'Öneri', 'Tarif');
INSERT INTO `haberler` VALUES (3, 'Akdeniz Manav', '2022-12-19 21:52:58', 'Soğuk havalarda hastalıklardan koruyan 7 besin önerisi', 'haber4.jpg', 'SOĞUK HAVALAR BAĞIŞIKLIK SİSTEMİNİ ZAYIFLATIR\r\nSoğuk havaların gelmesiyle hastalıkların arttığına dikkat çeken Uzm. Dyt. Uka, “Soğuk havalar, vücudun savunma sistemini zayıflatır ve vücut direncini düşürerek hastalıklara yakalanma riskini artırır. Soğuk havaların insan sağlığına olumsuz etkilerini en aza indirmek ve bağışıklık sistemini güçlendirmek için kış aylarında doğru beslenmeye daha fazla dikkat etmek, hastalıktan korunmak için önem taşır. Güçlü bir savunma mekanizmasının en temelinde ise et, süt, yoğurt, peynir, meyve, sebze ve ekmek gruplarını içeren yeterli, dengeli ve sağlıklı beslenme ile birlikte antioksidanlardan zengin besinlerin tüketilmesi gerekir” diye konuştu.\r\n\r\nHASTALIKLARDAN KORUNMADA ETKİLİ BESİNLER\r\nUzm. Dyt. Uka, hastalıklardan korunmak için tüketilmesi gereken besinleri şu şekilde sıraladı:\r\n\r\n“ZENCEFİL: Antioksidan kaynağı olan C vitaminden zengin olmasının yanında B6 vitamini, kalsiyum, demir, magnezyum, potasyum, fosfor ve lif açısından yüksek besin değerine sahiptir. Vücudumuzdaki birçok sisteme faydasının yanında en önemli yararı enfeksiyonlardan korumak ve bağışıklık sistemini güçlendirmektir. Özellikle doğal, taze zencefil tüketmek öksürük ve kas ağrısı şikâyetlerinizin önüne geçer.\r\n\r\n“ZERDEÇAL: Zerdeçalın içerisindeki ana aktif madde olan kurkumin, bu besinin vücuda sağladığı olumlu etkilerin birçoğundan sorumlu olan oldukça önemli bir bileşendir. Kurkumin; antiviral, antibakteriyel, antiinflamatuvar, antioksidan, antidiyabetik gibi özellikleri ile bilimsel çalışmalarla gösterilmiş zerdeçalın en aktif formudur. Kurkuminin, tümör hücrelerinin yok edilmesinden bağışıklık sisteminin aktivasyonuna kadar birçok etkisi mevcuttur. Zerdeçal, T hücreleri, B hücreleri, makrofajlar, nötrofiller ve doğal öldürücü hücreleri etkileyerek bağışıklık düzenleyici bir etki sağlamaktadır. Güçlü antienflamatuvar ve antioksidan özelliği bulunan zerdeçal, günde bir yemek kaşığı kadar tüketildiğinde günlük demir ihtiyacının yüzde 16\'sı, potasyum ihtiyacının yüzde 5\'i, manganez ihtiyacının yüzde 26\'sı ve C vitamini ihtiyacının yüzde 3\'ü karşılanır. Dolayısıyla sağlıklı ve dengeli bir beslenme planı belirlenirken zerdeçal tüketiminin de bunun içerisine eklenmesi hem makro ve mikro besin ögesi gereksinimlerinin karşılanmasına hem de bağışıklık sisteminin güçlenmesine yardımcı olacaktır.\r\n\r\n“SEBZE-MEYVE: Sebze ve meyveler sahip oldukları antioksidanlar (A, C, E vitaminleri, folik asit gibi vitaminler, selenyum gibi mineraller, oligosakkaritler ve bazı fenolik bileşikler) sayesinde bağışıklık sistemini güçlendirirler ve hastalıklara karşı vücut direncini artırırlar. Özellikle maydanoz, kuşburnu, yeşil biber, greyfurt, portakal, mandalina, nar, limon, kivi, çilek, enginar içlerinde yüksek miktarda C vitamini ve havuç, ıspanak, domates, brokoli, pırasa, bal kabağı gibi sebzeler ise bir A vitamini türevi olan ve bağışıklık sistemini kuvvetlendiren “beta karoten” içerir. Bu nedenle hastalıklardan korunmak için günde 5 porsiyon sebze ve meyve tüketimine özen gösterilmelidir.\r\n\r\n“SARIMSAK-SOĞAN: Vücudumuzda üretilen çok güçlü bir antioksidan olan glutatyon, birçok hastalığın sebebi sayılan serbest radikalleri hücre içinde yok etmektedir. Glutatyon üretimi, soğanın içinde bulunan ‘cystein’ maddesi ve sarımsak içerdiği ‘allicin’ sayesinde sağlanmaktadır. Beslenmenize soğan ve sarımsak tüketimini eklemek, bağışıklık sisteminizi destekler ve birçok hastalığın oluşumunun önüne geçilir.\r\n\r\n“FERMENTE GIDALAR: Kefir, yoğurt, turşu, zeytin gibi geleneksel fermente gıdalar içerdikleri yararlı mikroorganizmalarla bağışıklık sistemi için vazgeçilmezdir. Probiyotik etki gösteren fermente gıdalar özellikle bağırsak florasını geliştirerek bağışıklık sistemini güçlendirir. Aynı zamanda probiyotik içeren besinlerin hastalıkların oluşumunu önlediği ve antioksidan etki gösterdiği de yapılan çalışmalarda ortaya konmuştur. Bu nedenle gün içinde kefir ve yoğurt gibi probiyotik içeriği yüksek gıdalar mutlaka tüketilmelidir.\r\n\r\n“YAĞLI TOHUMLAR: Ceviz, badem, fındık gibi yararlı yağ tohumlar güçlü bir antioksidan özellik taşıyan E vitamininden oldukça zengindir. Bu nedenle günde 1 kâse yağlı tohuma ara öğünlerde yer verilmelidir.\r\n\r\n“KETEN TOHUMU: Bitkisel bir Omega 3 kaynağı olan keten tohumu B12, K ve E vitaminleri bakımından da zengindir. Aynı zamanda linamarin gibi faydalı bileşikler içermektedir. Güçlü bir antioksidan kaynağı olan keten tohumu, bağışıklık sistemini güçlendirme özelliğine sahiptir.”\r\n\r\nKIŞ AYLARINDA İÇİNİZİ ISITACAK 8 BESİN\r\nVücut ısısını yükseltip üşümeyi önlemenin hastalıklara karşı alabileceğimiz bir önlem olduğunu dile getiren Uzm. Dyt. Uka, bunun yollarından birinin de vücut ısımızı yükselten yiyecekleri tüketmekten geçtiğinin altını çizdi.\r\n\r\nUzm. Dyt. Gözdenur Çavuş Uka kış aylarında içimizi ısıtacak besinleri şöyle sıraladı:\r\n\r\n“Tarçın,\r\nKarabiber,\r\nAcı biber,\r\nKabak,\r\nTatlı patates,\r\nLahana,\r\nHavuç,\r\nZerdeçal.”', 'Sağlık', 'https://www.cumhuriyet.com.tr', 'Beslenme ve Diyet Uzmanı Uzm. Dyt. Gözdenur Çavuş Uka, kış aylarında bağışıklığımızı güçlendirebilecek ve hastalıklardan koruyabilecek besinler hakkında bilgilendirmelerde bulundu.\r\n...', 'Öneri', 'Tarif', '');
INSERT INTO `haberler` VALUES (4, 'Akdeniz Manav', '2022-12-19 21:55:56', 'Antalya\'da yaşanan sel İstanbul\'u vurdu: Sebze ve meyve fiyatları 1 haftada 5 lira arttı', 'haber5.jpg', 'Antalya\'da yağışların etkisiyle meydana gelen sel hayatı olumsuz etkiledi. Seraların sular altında kalmasından dolayı hasat azaldı. Antalya\'dan İstanbul\'a gelen meyve ve sebzelerin fiyatları bir hafta öncesinden ortalama 5 lira kadar arttı. Meyve ve sebze halinde geçen hafta 9 liradan satılan domates, 15 liraya kadar çıktı. Çarliston biber 9 liradan 14 liraya çıktı. Patlıcan 11 liradan 14 liraya, sivri biber 12 liradan 17 liraya, kabak 10 liradan 14 liraya ve kırmızı biber 25 liradan 30 liraya çıktı. Fiyatı sabit kalan Finike portakalı ise 15 liradan satılıyor.\r\n\r\n\"HAVALAR SOĞUDUKÇA FİYATLAR YÜKSELİR\"\r\nAntalya\'da sel olduktan sonra ürünlerin az çıktığını ve buna bağlı olarak İstanbul\'a gelen ürün fiyatlarının arttığını söyleyen hal esnafı Kemal Günaydın, \"Yağmur yağdıktan sonra Antalya\'dan ürünler İstanbul\'a az geldi. Fiyatlar da buna bağlı olarak biraz yükseldi. Antalya\'daki seralarda biber, patlıcan, domates, salatalık, kırmızı biber gibi sebzeler yetişiyor. Sel olduğunda seralar zarar görüyor ve ürünler yetişmiyor. Buna bağlı olarak da fiyatlar yükselir. Nakliye maliyetlerinden dolayı Antalya\'dan bedavaya bir ürün alsan İstanbul\'a 4 liraya gelir. Ayrıca meyve ve sebzelerin mevsimi geçtiği zaman da fiyatlara etki eder. Havalar soğudukça fiyatlar yükselir. Antalya\'daki selden önce İstanbul\'da bulunan meyve ve sebze halinde domates 9-10 liraydı, şu anda 15 liraya kadar çıktı\" dedi.', 'Gündem', 'https://www.turkiyegazetesi.com.tr', 'Antalya’da sel felaketi vatandaşlara zor zamanlar yaşatırken, çiftçileri de etkiledi. İstanbul’da esnafı meyve,sebze fiyatlarında bir haftada ortalama 5 lira arttığını açıkladı.\r\n...', 'Fiyat', '', '');

-- ----------------------------
-- Table structure for iletisim
-- ----------------------------
DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE `iletisim`  (
  `ads` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `konu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mesaj` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of iletisim
-- ----------------------------
INSERT INTO `iletisim` VALUES ('Yalçın Şimşek', 'yalcin@hotmail.com', '0531 555 1234', 'Siparişim HK.', 'Merhabalar siparişim eksik geldi yardımcı olabilir misiniz ?', 8);
INSERT INTO `iletisim` VALUES ('Çağatay Sarıca', 'cgtysrca@gmail.com', '0512 178 9856', 'Ürün hakkında', 'Merhabalar sizden zeytinyağı almak istiyorum fakat üretim tarihi ne zaman ?', 9);
INSERT INTO `iletisim` VALUES ('Emir Acun', 'emracn@gmail.com', '0545 124 5985', 'Ürün İadesi', 'Merhabalar bana gelen ürünü beğenmedim iade etmek istiyorum SİPARİŞ NO : 5489', 10);

-- ----------------------------
-- Table structure for sepet
-- ----------------------------
DROP TABLE IF EXISTS `sepet`;
CREATE TABLE `sepet`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `urun_id` int NOT NULL,
  `miktar` int NOT NULL,
  `ad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `urun_id`(`urun_id` ASC) USING BTREE,
  CONSTRAINT `sepet_ibfk_1` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`urid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 80 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sepet
-- ----------------------------

-- ----------------------------
-- Table structure for siparis
-- ----------------------------
DROP TABLE IF EXISTS `siparis`;
CREATE TABLE `siparis`  (
  `ad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `adres` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ek_not` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sipno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `oyontem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tarih` datetime NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siparis
-- ----------------------------
INSERT INTO `siparis` VALUES ('Yalçın Şimşek', 'deneme@gmail.com', 'Antalya Muratpaşa', '0534 554 1285', 'Hızlı gelirse sevinirim.', '4198', 'Kapıda Kredi Kartı', '2023-06-03 22:12:12');
INSERT INTO `siparis` VALUES ('Eren Şen', 'ernsn@gmail.com', 'Antalya Kepez', '0545 489 4585', 'Kolay gelsin.', '7801', 'Nakit', '2023-06-03 22:13:12');
INSERT INTO `siparis` VALUES ('Emir Acun', 'emracn@gmail.com', 'Antalya Konyaaltı', '0587 449 4596', 'İyi Çalışmalar', '6782', 'Kapıda Kredi Kartı', '2023-06-03 22:14:06');

-- ----------------------------
-- Table structure for siparis_urunler
-- ----------------------------
DROP TABLE IF EXISTS `siparis_urunler`;
CREATE TABLE `siparis_urunler`  (
  `siparisno` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `urunId` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `miktar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of siparis_urunler
-- ----------------------------
INSERT INTO `siparis_urunler` VALUES ('4198', '0', '2');
INSERT INTO `siparis_urunler` VALUES ('4198', '9', '4');
INSERT INTO `siparis_urunler` VALUES ('4198', '10', '2');
INSERT INTO `siparis_urunler` VALUES ('4198', '14', '1');
INSERT INTO `siparis_urunler` VALUES ('4198', '13', '2');
INSERT INTO `siparis_urunler` VALUES ('7801', '12', '2');
INSERT INTO `siparis_urunler` VALUES ('7801', '7', '3');
INSERT INTO `siparis_urunler` VALUES ('7801', '5', '2');
INSERT INTO `siparis_urunler` VALUES ('7801', '0', '3');
INSERT INTO `siparis_urunler` VALUES ('6782', '15', '1');
INSERT INTO `siparis_urunler` VALUES ('6782', '2', '1');
INSERT INTO `siparis_urunler` VALUES ('6782', '4', '1');
INSERT INTO `siparis_urunler` VALUES ('6782', '10', '1');

-- ----------------------------
-- Table structure for sirket
-- ----------------------------
DROP TABLE IF EXISTS `sirket`;
CREATE TABLE `sirket`  (
  `adresmah` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `adres2` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `adres3` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `maghaftaici` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `maghaftasonu` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `iltelefon` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT '',
  `ilmail` varchar(50) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT '',
  `id` int NULL DEFAULT NULL,
  `konum` varchar(5000) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `hk` varchar(400) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sirket
-- ----------------------------
INSERT INTO `sirket` VALUES ('Zerdalilik Mah Cebesoy Caddesi', 'Şükrü Bey Apt, 07100', 'Muratpaşa/Antalya', 'Hafta içi 08:00-22:00', 'Hafta sonu 08:00-22:00', 'Telefon: +09 532 000 00 00', 'Email: akdenizmanav@gmail.com', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1602780.525700037!2d29.23611633138928!3d38.31585561984931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aa9b82eb641%3A0xf06d165a1f4687d2!2sAkdeniz%20Manav!5e0!3m2!1sen!2str!4v1670958326818!5m2!1sen!2str', 'Akdeniz Manav doğal organik ve kaliteli ürünleri ile size en iyi hizmeti vermektedir. A\\\\\\\\\\\\\\\'dan Z\\\\\\\\\\\\\\\'ye olabildiğince çeşitleriyle ve güler yüzleriyle sizin karşınızda');

-- ----------------------------
-- Table structure for sosyalmedya
-- ----------------------------
DROP TABLE IF EXISTS `sosyalmedya`;
CREATE TABLE `sosyalmedya`  (
  `face` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `insta` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `twitter` varchar(250) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `id` int NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of sosyalmedya
-- ----------------------------
INSERT INTO `sosyalmedya` VALUES ('https://www.facebook.com', 'https://www.instagram.com', 'https://twitter.com', 1);

-- ----------------------------
-- Table structure for urun
-- ----------------------------
DROP TABLE IF EXISTS `urun`;
CREATE TABLE `urun`  (
  `urid` int NOT NULL,
  `adı` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `stok` int NOT NULL,
  `acıklama` varchar(255) CHARACTER SET utf8 COLLATE utf8_turkish_ci NULL DEFAULT NULL,
  `fiyat` int NOT NULL,
  `resim` varchar(40) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`urid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_turkish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of urun
-- ----------------------------
INSERT INTO `urun` VALUES (0, 'Çilek', 101, 'Menşei : Muğla', 18, 'cilek.jpg', 'Meyve');
INSERT INTO `urun` VALUES (1, 'Limon', 150, 'Menşei : Antalya', 9, 'limon.jpg', 'Sebze');
INSERT INTO `urun` VALUES (2, 'Siyah Üzüm', 260, 'Menşei : Antalya', 10, 'süzüm.jpg', 'Meyve');
INSERT INTO `urun` VALUES (3, 'Kivi', 200, 'Menşei : Çin', 35, 'kivi.jpg', 'Meyve');
INSERT INTO `urun` VALUES (4, 'Yeşil Elma', 150, 'Menşei : Isparta ', 7, 'yelma.jpg', 'Meyve');
INSERT INTO `urun` VALUES (5, 'Kırmızı Elma', 250, 'Menşei : Isparta ', 9, 'kelma.jpg', 'Meyve');
INSERT INTO `urun` VALUES (7, 'Kiraz', 70, 'Menşei : İzmir', 18, 'kiraz.jpg', 'Meyve');
INSERT INTO `urun` VALUES (8, 'Patlıcan', 50, 'Menşei : Antalya', 7, 'patlican.jpg', 'Sebze');
INSERT INTO `urun` VALUES (9, 'Domates', 40, 'Menşei : Antalya', 6, 'domates.jpg', 'Sebze');
INSERT INTO `urun` VALUES (10, 'Avakado', 15, 'Menşei : Antalya', 13, 'avakado.jpg', 'Sebze');
INSERT INTO `urun` VALUES (11, 'Doğal Bal', 15, 'Menşei : Rize', 53, 'bal.jpg', 'Şarküteri');
INSERT INTO `urun` VALUES (12, 'Nar', 60, 'Menşei : Antalya', 14, 'nar.jpg', 'Meyve');
INSERT INTO `urun` VALUES (13, 'Peynir ', 45, 'Menşei : Isparta', 79, 'peynir.jpg', 'Şarküteri');
INSERT INTO `urun` VALUES (14, 'Siyah Zeytin', 90, 'Menşei : Gemlik', 45, 'szeytin.jpg', 'Şarküteri');
INSERT INTO `urun` VALUES (15, 'Zeytin Yağı', 25, 'Menşei : Gemlik', 130, 'zyagı.jpg', 'Şarküteri');

SET FOREIGN_KEY_CHECKS = 1;
