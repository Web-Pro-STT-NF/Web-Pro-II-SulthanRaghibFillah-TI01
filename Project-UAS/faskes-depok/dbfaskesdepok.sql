-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: dbfaskesdepok
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `faskes`
--

DROP TABLE IF EXISTS `faskes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faskes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `latlong` varchar(40) DEFAULT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `skor_rating` double DEFAULT NULL,
  `foto` varchar(40) DEFAULT NULL,
  `kecamatan_id` int(11) NOT NULL,
  `website` varchar(45) DEFAULT NULL,
  `jumlah_dokter` int(11) DEFAULT NULL,
  `jumlah_pegawai` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jenis_id` (`jenis_id`),
  KEY `kecamatan_id` (`kecamatan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faskes`
--

LOCK TABLES `faskes` WRITE;
/*!40000 ALTER TABLE `faskes` DISABLE KEYS */;
INSERT INTO `faskes` VALUES (1,'Tanah Baru','Perum Depok Mulya III RT. 06/02 Tanah Baru, Beji.','-6.388567, 106.803338',1,'Menyediakan pelayanan kesehatan untuk segala kalangan masyarakat.',7,'1.jpg',1,'http://dinkes.depok.go.id/?page_id=25',15,50),(2,'Kemiri Muka','Jl. Ciliwung No.12, Kemiri Muka, Kecamatan Beji, Kota Depok, Jawa Barat 16423','-6.380279331812671, 106.83183735829105',1,'Menjadi pelopor masyarakat dalam penyediaan kebutuhan kesehatan.',6.8,'2.jpg',1,'-',15,50),(3,'Beji','Jl. Bambon Raya No. 7B RT. 01/01, Beji','-6.3761429983533775, 106.82167318020426',1,'Memberikan akses kesehatan yang mudah kepada masyarakat.',6.6,'3.jpg',1,'http://dinkes.depok.go.id/?page_id=25',15,50),(4,'Cimanggis','Jl. Raya Bogor Km. 33 RT. 05/02 Curug, Cimanggis','-6.386973931870169, 106.86768513915159',1,'Menyediakan pelayanan kesehatan untuk setiap lapisan masyarakat.',6.8,NULL,2,'https://pkmcimanggis.depok.go.id/',15,50),(5,'Mekarsari','Jl. Tipar Raya 1 RT. 04/09 Mekarsari, Cimanggis','-6.36664939174722, 106.87059664516048',1,'Menjadi teladan dalam memberikan pelayanan kesehatan terhadap masyarakat.',6.4,NULL,2,'http://pkmmekarsari.depok.go.id/',15,50),(6,'Tugu','Jl. Akses UI Palsi Gunung RT. 05/03 Tugu, Cimanggis','-6.355919936402097, 106.85474039047168',1,'Penyedia akses kesehatan untuk masyarakat kecamatan Tugu.',6.2,NULL,2,'https://pkmtugu.depok.go.id/',15,50),(7,'Harjamukti','Komplek Deppen, Harjamukti, Cimanggis','-6.3819614724656, 106.89207954236457',1,'Puskesmas yang memberikan pelayanan kesehatan untuk masyarakat.',7.4,NULL,2,'https://pkmharjamukti.depok.go.id/',15,50),(8,'Pasir Gunung Selatan','Komp. Villa Kalisari Blok B RT. 12/01 Pasir Gn. Selatan','-6.3427251288144735, 106.85100851839148',1,'Menyediakan kebutuhan kesehatan masyarakat dari berbagai kalangan.',8.8,NULL,2,'https://pkmpasirgunungselatan.depok.go.id//',15,50),(9,'Tapos','Jl. Raya Tapos RT. 02/12 Tapos','-6.425547736206384, 106.88899040987152',1,'Puskesmas yang menyediakan layanan kesehatan di kecamatan Tapos, Depok.',6.6,NULL,3,'-',15,50),(10,'Sukatani','Komp. Kopassus Jl. Wijaya Kusuma RT. 04/09, Sukatani','-6.3970156459086605, 106.8889908161579',1,'Menyediakan layanan kesehatan.',7.6,NULL,3,'-',15,50),(11,'Jatijajar','	Jl. Setu Jatijajar No. 25 RT. 07/03, Jatijajar','-6.416637722792393, 106.8623184444807',1,'Puskesmas penyedia layanan kesehatan di kecamatan Jatijajar.',9.2,NULL,3,'-',15,50),(12,'Cilangkap','	Kp. Banjaran Pucung RT. 01/07, Cilangkap','-6.402859881198568, 106.81920955068509',1,'Menjangkau berbagai kebutuhan masyarakat yang berkaitan dengan kesehatan.',8,NULL,3,'-',15,50),(13,'Cimpaeun','	Perumahan Persada Depok, Tapos','-6.4491926269790465, 106.8674462412241',1,'Memberikan pelayanan kesehatan.',8,NULL,3,'-',15,50),(14,'Grogol','Jl. Raya Grogol RT. 01/01 Kel. Grogol','-6.379700177937182, 106.79015594205279',1,'Menjadi Puskesmas andalan bagi masyarakat.',6.6,NULL,4,'-',15,50),(15,'Cinere','Jl. Cinere Raya No. 30 Limo','-6.340887037022136, 106.78005115198005',1,'Pusat pelayanan Kesehatan.',6,NULL,5,'-',15,50),(16,'Depok Jaya','Jl. Melati Raya Depok I, Depok Jaya, Pan Mas','-6.389766009685413, 106.81020131546569',1,'-',7.6,NULL,6,'-',15,50),(17,'Pancoran Mas','Jl. Pemuda No. 2 RT. 02/08 Pancoran Mas','-6.402859881198568, 106.81920955068509',1,'-',7.6,NULL,6,'-',15,50),(18,'Rangkapan Jaya','Jl. Keadilan, Rangkapan Jaya, Pancoran Mas','-6.399576645716109, 106.78109966114279',1,'-',8,NULL,6,'-',15,50),(19,'Cipayung','Jl. Jembatan Serong, Blok Rambutan Rt. 01/04, Cipayung','-6.419859321836586, 106.79523718542802',1,'-',6,NULL,7,'-',15,50),(20,'Sawangan','Jl. Raya Muchtar No.155, Sawangan, Sawangan Baru, Sawangan, Kota Depok, Jawa Barat 16511','-6.4050786372147535, 106.76342095231156',1,'-',6.8,NULL,8,'-',15,50),(21,'Cinangka','Jl. Pertiwi Raya Komp. Bappenas Kedaung','-6.364987270066736, 106.75920099022649',1,'-',8.4,NULL,8,'-',15,50),(22,'Pengasinan','	Komp. BSI II, Jl. Anggrek Raya, Sawangan','-6.420410755682415, 106.75766898441164',1,'-',8,NULL,8,'-',15,50),(23,'Pasir Putih','Jl. Raya Pasir Putih (Griya Sawangan Asri)','-6.425930402674807, 106.78365431674682',1,'-',9.4,NULL,8,'-',15,50),(24,'Duren Seribu','Jl. Delima No.5, Duren Seribu, Bojongsari, Kota Depok, Jawa Barat 16518','-6.4354401294217745, 106.74580301438368',1,'-',7.8,NULL,9,'-',15,50),(25,'Pondok Petir','Jl. Raya Pasir Putih (Griya Sawangan Asri)','-6.383155994553322, 106.72672272199478',1,'-',7.2,NULL,9,'-',15,50),(26,'Sukmajaya','Jl. Arjuna Raya No. 1, Mekar Jaya, Sukmajaya, Mekar Jaya, Sukmajaya, Kota Depok','-6.389000529109291, 106.83837154349844',1,'-',6.6,NULL,10,'-',15,50),(27,'Pondok Sukmajaya','Perum Pondok Sukmajaya B1 G3 RT. 02/07 Pdk Sukmajaya','-6.410472431695101, 106.8479160153389',1,'-',7.2,NULL,10,'-',15,50),(28,'Bhakti Jaya','Komplek PELNI Blok G2, Bhakti Jaya','-6.374966667559184, 106.85328249567193',1,'-',7.2,NULL,10,'-',15,50),(29,'Abdi Jaya','Jl. Kerinci Raya No. 1 Rw. 26 Abadijaya, Sukmajaya','-6.394971059876177, 106.85180452662036',1,'-',7.6,NULL,10,'https://pkmabadijaya.depok.go.id/',15,50),(30,'Villa Pertiwi','Jl. Annuriyah Blok I3 No.1, Cilodong, Sukamaju, Cilodong, Kota Depok','-6.41908611235464, 106.85111498702844',1,'-',8,NULL,11,'-',15,50),(31,'Cilodong','Komp. Asrama Kostrad, Jl. Asrama Cilodong RT. 01/01, Kalibaru, Kota Depok','-6.444588803949906, 106.83025855595281',1,'-',7.6,NULL,11,'-',15,50),(32,'Kalimulya','Jl. Raya Kalimulya, Jatimulya, Cilodong, Kota Depok','-6.445524055231252, 106.82513167709878',1,'-',8.8,NULL,11,'-',15,50),(33,'Bunda Margonda','Jl. Margonda Raya No. 28 Pondok Cina, Depok','-6.3652651217600456, 106.83444466410617',2,'RSU Bunda Margonda terletak tepat di jl. Margonda Raya No. 28, Pondok Cina, Kecamatan Beji, Kota Depok. Kami siap menerima keluhan, konsultasi, dan penanganan medis Anda serta keluarga.',7.2,NULL,1,'-',15,50),(34,'Ibu & Anak Graha Permata Ibu','	Jl. KH. M. Usman No. 168 Kukusan Beji, Depok','-6.370681315786174, 106.81341709893374',2,'Menjadi Rumah Sakit Terbaik, Modern dan mampu bersaing dalam memberikan pelayanan kesehatan di Kota Depok dan sekitarnya.',8.3,NULL,1,'http://www.grhapermataibu.com/',15,50),(36,'Meilia','Jl. Alternatif Cibubur Cileungsi Km. 1 Depok','-6.376351820435222, 106.90210262695496',2,'SERVE WITH H.E.A.R.T\n(HUMANISM, EMPATHY, AFFECTION, RESPECT, TRUST)\nMenjadi rumah sakit komunitas (Community Hospital) dan menjadi rumah sakit rujukan bagi instansi kesehatan di wilayah sekitarnya serta menjadi rumah sakit berstandar internasional yang terkemuka dan terpercaya di Indonesia.',7.6,NULL,2,'http://www.rsmeilia.co.id/',15,50),(37,'Tugu Ibu','	Jl. Raya Bogor Km. 29 Cimanggis','-6.356522869583738, 106.8603441972826',2,'Diawali pada tahun 1982 Diawali pada tahun 1982 Yayasan Pendidikan Nasional (YASPEN) yang merupakan sebuah Yayasan yang bergerak dalam bidang Sosial Pendidikan dan Pelayanan Kesehatan mendirikan sebuah fasilitas kesehtan dalam bentuk Balai Pengobatan Umum dan Rumah bersalin (RB) Tugu Ibu yang berlokasi di Jl. Raya Bogor Km. 29 Cimanggis - Depok, Jawa Barat.',5.6,NULL,2,'https://www.rstuguibu.com/',15,50),(38,'Ibu & Anak Tumbuh Kembang','Jl. Raya Bogor Km.31 No.23 Palsi Gunung Cimanggis','-6.371661647894244, 106.86137589792884',2,'RSIA Tumbuh Kembang dibawah PT. Endraz Medica bertempat di Jl. Raya Bogor Km 31 no. 23, Palsi Gunung, Cimanggis. Lokasi rumah sakit yang terletak dalam wilayah Kota Depok dan pada jalur utama penghubung antara Jakarta dan Bogor, memungkinkan RSIA Tumbuh Kembang menjangkau masyarakat di wilayah kota Depok dan Sekitarnya.',6.2,NULL,2,'http://www.rsia-tumbuhkembang.co.id/',15,50),(39,'Umum Bhayangkara Brimob','Jl. Komjen.Pol.M.Jasin Jl. Klp. Dua Raya, Pasir Gn. Sel., Kec. Cimanggis, Kota Depok','-6.35480243487301, 106.84931980160255',2,'Rumah Sakit Bhayangkara Brimob merupakan salah satu Rumah Sakit yang berada dilingkungan Mabes Polri yang ditetapkan berdasarkan Surat Keputusan Kapolri Nomor : Skep / 1549/X/2001 menjadi Rumah Sakit Bhayangkara Tingkat IV.',7.6,NULL,2,'https://rsbrimob.com/',15,50),(40,'Puri Cinere','Jl. Maribaya No.1, Pangkalan Jati, Kec. Cinere, Kota Depok','-6.321861140058976, 106.78276687545733',2,'Rumah Sakit Puri Cinere merupakan Rumah Sakit Swasta yang sudah berdiri sejak tahun 1991. Rumah Sakit Puri Cinere memiliki Visi mewujudkan rumah sakit rujukan bagi institusi kesehatan di wilayah sekitarnya. Dengan Misi memberikan pelayanan kesehatan yang terintegrasi, berkualitas tinggi dan aman, dapat memuaskan pasien dengan mempunyai fungsi sosial.\n\n',8.2,NULL,5,'http://www.rspuricinere.id/',15,50),(41,'Jantung Diagram Siloam','Jl. Cinere Raya No.19, Pangkalan Jati, Kec. Cinere, Kota Depok','-6.321845327268016, 106.78322547792077',2,'JANTUNG DIAGRAM (RSJD) berdiri pada tahun 2006 dan bergabung ke dalam Siloam Hospital Group sebagai unit yang ke 13 pada tahun 2012.',9.6,NULL,5,'-',15,50),(42,'Ibu & Anak Hermina Depok','Jl. Raya Siliwangi No. 50 Pancoran Mas','-6.399874010180734, 106.82515240355437',2,'RSU Hermina Depok – yang berdiri tahun 2000 – menjadi rumah sakit pilihan bagi warga Depok dalam hal masalah persalinan.',8,NULL,6,'https://herminahospitals.com/',15,50),(43,'Harapan Depok','Jl. Pemuda No.10 Depok','-6.402776290563599, 106.82022328104793',2,'CLOSED',0.1,NULL,6,'-',15,50),(44,'Mitra Keluarga','Jl. Margonda Raya, Depok, Kec. Pancoran Mas, Kota Depok','-6.3944719250675135, 106.82429689996883',2,'Rumah sakit umum di Depok, Jawa Barat\n',8.8,NULL,6,'mitrakeluarga.com/depok/menu-fasilitas-rs',15,50),(45,'Ibu & Anak Asy-Syifa','Jl. Cinere Raya No.48, Rangkapan Jaya Baru, Kec. Pancoran Mas, Kota Depok','-6.393777088430483, 106.77135989470162',2,'Pelayanan kesehatan kerja di Depok, Jawa Barat\n',6.2,NULL,6,'-',15,50),(46,'Umum Daerah Cibinong','Jl. KSR Dadi Kusmayadi No.27, Tengah, Kec. Cibinong, Kabupaten Bogor','-6.393777088430483, 106.77135989470162',2,'Rumah sakit pemerintah di Cibinong, Jawa Barat.',6.2,NULL,7,'http://rsudcibinong.com/',15,50),(47,'Bhakti Yudha','Jl. Raya Sawangan No.2A, Pancoran MAS, Kec. Pancoran Mas, Kota Depok','-6.397721925662495, 106.80609851484321',2,'Rumah sakit Umum Bhakti Yudha Depok terletak di Jalan Raya Sawangan No. 2A, Kelurahan Pancoran Mas, kota Depok, merupakan salah satu rumah sakit tipe C di Kota Depok. Rumah Sakit ini didirikan pada tanggal 23 Desember 1976 oleh Yayasan Bhakti Yudha yang pada awalnya adalah sebuah klinik bersalin dengan kapasitas 12 tempat tidur yang keberadaannya pada saat itu untuk mendukung proyek Perumnas di daerah Depok. Rumah sakit Bhakti Yudha memiliki area seluas 14.930 m² dengan luas bangunan 5.425 m².',6.6,NULL,8,'http://www.rsbhaktiyudha.co.id/',15,50),(48,'Permata Depok','Jl. Raya Muchtar No.22, Sawangan Baru, Kec. Sawangan, Kota Depok','-6.40170628914224, 106.77043935099388',2,'RS Permata Depok merupakan rumah sakit tipe C yang berlokasi di Sawangan, Depok. RS Permata Depok terus berkembang baik dari segi fasilitas maupun dari aspek sumber daya manusia (SDM).',4.8,NULL,8,'http://www.rspermata.co.id/',15,50),(49,'Umum Daerah Depok','Jl. Raya Muchtar No.99, Sawangan Lama, Kec. Sawangan, Kota Depok','-6.403713026218441, 106.75842454757048',2,'-',6.2,NULL,8,'http://www.rspermata.co.id/',15,50),(50,'Sentra Medika','Jl. Raya Jakarta-Bogor, Cisalak, Kec. Sukmajaya, Kota Depok','-6.390872709361996, 106.86546922801736',2,'-',7.6,NULL,10,'http://www.sentramedikahospitals.com/',15,50),(51,'Hasanah Graha Afiah','Jl. Raden Saleh No.42, Sukmajaya, Kec. Sukmajaya, Kota Depok','-6.408122538979684, 106.84068698766364',2,'-',5,NULL,10,'http://rs-hga.co.id/',15,50),(52,'Simpangan Depok','Jl. Raya Jakarta-Bogor No.36, Sukamaju, Kec. Cilodong, Kota Depok','-6.408653518998803, 106.86178645959207',2,'-',6.2,NULL,11,'-',15,50),(53,'Citra Medika Depok','Jl. Raya Kalimulya No.68, Kalimulya, Kec. Cilodong, Kota Depok','-6.427283393495669, 106.82326476571338',2,'-',7.4,NULL,11,'http://www.citramedikadepok.id/',15,50),(54,'Mudita','Jl. H. Asmawi No.65, Kota Depok, Jawa Barat 16421','-6.379466372469401, 106.81374290873829',5,'Klinik rawat jalan & Inap',7,NULL,1,'-',1,3),(55,'Bahar Medical Clinic I','Jl. Dewi Sartika No.48, Depok Jaya, Pancoran Mas, Depok','-6.399569565325284, 106.81579563550213',3,'Klinik Ibu dan Anak',6.8,'Bahar Medical Clinic I.png',6,'-',9,12),(56,'Sawangan Medika','Jl. Raya Sawangan No. 3, Mampang, Pancoran Mas, Depok.','-6.394539433278, 106.80172273878945',3,'klinik terpercaya keluarga',7,NULL,6,'-',7,12),(57,'Ananda','Jl. K.H.M. Usman No.84, Kukusan, Kecamatan Beji, Kota Depok, Jawa Barat 16425, Beji, Depok.','-6.364823384086073, 106.81537022658023',3,'Pelayanan Yang Ramah',10,'ananda.png',1,'-',5,7),(58,'dr.Fakhrurozi','Jl. Mangga Raya No.93, Perum. Depok Jaya, Pancoran Mas, Depok.','-6.396883651433907, 106.81298807285344',3,'Sehat sehati',9.2,NULL,6,'-',9,14),(59,'Pratama Pala Medika','Jl. Dahlia Raya No.1-2, Depok Jaya, Pancoran Mas, Depok','-6.3914881416841975, 106.81438395269892',3,'Klinik Utama Rawat Inap',5.6,NULL,6,'-',7,9),(61,'Adelina','Jl. Raya Tanah Baru, Tanah Baru, Beji, Depok.','-6.382392348628019, 106.80809479693077',3,'Klinik Ibu dan Anak',6.4,'adelina.png',1,'-',6,8),(62,'Bima','Jl. Nusantara Raya No. 26, Beji, Depok.','-6.39404462686829, 106.81434153444512',3,'Keamanan yang utama',5.6,'Bima.png',1,'-',5,9),(63,'Citra Ansana Medika','Jl. Nusantara Raya No.170, Beji, Depok','-6.384147947685932, 106.81446211641327',3,'klinik yang terandalkan',6.8,NULL,1,'-',9,11),(64,'Kurnianingsih','Jl. Nusantara Raya No.82, Beji, Depok.','-6.373038652985904, 106.81219305877848',3,'Klinik kepercayaan ibu',10,NULL,1,'-',8,12),(65,'Siti','Jl. Karet Hijau No.1, Beji Timur, Depok','-6.379720637692203, 106.82288256851163',3,'Mengedepankan Keamanan dan kenyamanan',6,NULL,1,'-',14,22),(66,'Nirmala','Jl. Margonda Raya No.492 A, Pondok Cina, Depok.','-6.361264025991312, 106.83372422576632',4,'Wujudkan Gigi rapi nan bersih',9,'nirmala.png',1,'-',12,15),(67,'Pertamedika','Jl. Margonda Raya, Depok','-6.3585992272482335, 106.83290738158794',3,'Menimbulkan lingkungan yang sehat',8.4,NULL,1,'-',14,13),(68,'Medical Center','Ruko Peseona Khayangan, Kav.45, Jl. Margonda Raya 9, Depok.','-6.382617237061946, 106.83019975413082',4,'Pusatnya Kesehatan keluarga',9.2,NULL,1,'-',23,20),(69,'Mitra Insani','Jl. Margonda Raya No.2, Depok','-6.387344553245405, 106.820224884291',4,'Gigi yang bersih dimulai dari sini',7.4,'minsani.png',1,'-',4,7),(70,'Depok 2000','Jl. Raya Sawangan No.16A, Mampang, Depok.','-6.37345980742687, 106.8315467462884',3,'Kebersihan yang terjaga',4.8,NULL,1,'-',2,2),(71,'Bahar Medika','Jl. Raya Sawangan No.16A, Mampang, Depok.','-6.394243102983096, 106.79694939046638',3,'Kesembuhan hanya milik Allah Taala',7.4,NULL,6,'-',17,30),(72,'Bhakti Asih','Jl. Nusantara Raya No.288/108, Depok Jaya, Pancoran Mas, Depok.','-6.386241719203608, 106.81649383113935',3,'Kepercayaan semua',9.2,'Bhakti Asih.png',6,'-',3,4),(73,'Era Medika','Ruko Sukmajaya, Jl. Tole Iskandar Raya 4, Mekar Jaya, Sukmajaya, Depok.','-6.403662541777286, 106.83890534175609',3,'Kliniknya Rakyat',9,NULL,10,'-',5,7),(74,'Naura Medika','Jl. Kemakmuran No.37 Depok II Tengah, Mekar Jaya, Depok.','-6.398684151373586, 106.83645869646026',3,'Kami bantu wujudkan kesehatan bersama',8,NULL,10,'-',6,8),(75,'Pratama dr.Amelia','Jl. Raya Pasir Putih No.1, Pasir Putih, Sawangan, Depok.','-6.410147530722701, 106.78111008111895',3,'Klinik kepercayaan ibu hamil',2,NULL,6,'-',1,1),(76,'Citra Insani','Jl. Raya Pengasinan No.5, Pengasinan, Sawangan, Depok.','-6.4246903662572095, 106.75193869646056',3,'Klinik ramah anak',4.4,NULL,6,'-',1,3),(77,'TMC','Jl. Raya Muchtar No.9A, Sawangan Baru, Sawangan, Depok.','-6.364812827821637, 106.84320306762453',3,'Klinik Multifunsional',8.4,NULL,8,'-',2,3),(78,'Tugu Sawangan','Jl. Raya Muchtar No.20, Sawangan Baru, Sawangan, Depok.','-6.402327528440852, 106.77110866762487',3,'Klinik yang lengkap akan kebutuhan pasien',9.6,NULL,8,'https://kliniktugusawangan.com/',22,30),(79,'Kartika Jaya Pradana Medical Center','Jl. Kejayaan B1 9/4, Depok.','-6.382806428913039, 106.85007675341845',3,'Klinik Yang menjadi sumber kesehatan lingkungan',8.6,NULL,10,'',14,17),(80,'Abadi Jaya','Jl. Keadilan 4, Abadijaya, Sukmajaya, Depok.','-6.389398600691716, 106.85200220000004',3,'Sumbernya Kesehatan Masyarakat',8.2,NULL,10,'-',13,15),(81,'Kartika Timur','Jl. Keadilan Raya B1 11/8, Sukmajaya, Depok.','-6.3900199543859735, 106.85185695228333',3,'Pelopor Kesehatan Lingkungan',9,NULL,10,'-',15,23),(82,'Kezia Media','Jl. Sawangan Raya 23, Depok.','-6.405873475515253, 106.74861399999999',3,'Klinik Ramah ibu dan anak',10,NULL,6,'-',7,5),(83,'Tirtahusada','Jl. Raya Parung Serab (KSU) No.7, Tirtajaya, Depok.','-6.417620540101324, 106.82657844063732',3,'Menjadikan pasien yang mandiri',6.2,NULL,10,'www.instagram.com/kpri.tirtahusadadepok',14,12),(84,'Kita','Jl. Kemang Raya 2, Depok','-6.376480371081038, 106.78974602344782',3,'Edukasi pentingnya cek kesehatan sejak dini',8.2,NULL,4,'www.instagram.com/p/BpDhc81hNn8/',8,15),(85,'Salam','Jl Sentosa Raya 18 Perumnas Depok Ii Tengah Rt 008/15 Depok','-6.414147936149561, 106.8700361975085',5,'Industri Farmasi di Tapos',4.2,NULL,10,'-',5,7),(86,'Safira','Jl Proklamasi Raya Ruko Bl A/28 Rt 002/23 Depok','-6.390881089999845, 106.85165431082748',5,'Memenuhi Kebutuhan Obat-obatan Masyarakat',10,NULL,10,'-',5,7),(87,'Juliana','Jl Nusantara Raya 33 Depok','-6.433161701503904, 106.8798532665296',5,'Menjadi Pelayanan Kesehatan bagi Masyarakat',9,NULL,3,'www.semuabis.com/juliana-apotik-021-7775105',3,7),(88,'Kasih Ibu','Ruko Depok Permai Bl A/8 Kompl Permata Depok Depok','-6.406187725666992, 106.7762951973361',5,'Menebarkan rasa kasih serta peduli Kepada Pasien',7.6,NULL,8,'-',4,9),(89,'PT Adhi Mas Raya','Jl Arif Rahman Hakim 78 Depok','-6.388497075581335, 106.81828405500404',5,'Penyuplai Obat Kualitas Tinggi di Beji',10,NULL,1,'-',5,6),(90,'Tumbuh Sehat','Jl Tole Iskandar 13 Depok','-6.403508895523706, 106.83856253966366',5,'Edukator Kesehatan Masyarakat',7.6,NULL,10,'-',3,4),(91,'Vidi','Jl Proklamasi Kompl Ruko Bl A/5 Rt 001/08 Depok','-6.391842070768617, 106.83792645767234',5,'Apotek dengan penerapan kedisiplinan, serta kebersihan di Sukmajaya',9.4,NULL,10,'-',3,6),(92,'Alam Sehat','Jl Anggrek Raya 27-28 Rt 002/04 Depok','-6.393564977481351, 106.81418278199125',5,'Kembali Kepada Alam adalah salah satu pengobatan yang alami tanpa efek samping',10,NULL,6,'-',5,8),(93,'Anugerah','Jl Keadilan Raya 4 Perumnas Depok Ii Timur Rt 011/04 Depok','-6.38730040173737, 106.85210533966354',5,'Kesehatan adalah Anugerah Tuhan yang harus dipelihara dan dijaga',10,NULL,3,'-',3,8),(94,'Asia','Jl Mi Ridwan Rais 3 Kompl Politeknik Rt 002/06 Depok','-6.397827496935797, 106.81373058199122',5,'apotek dengan pengawasan edaran obat-obatan yang ketat',10,NULL,6,'-',3,9),(95,'Bahagia Depok','Jl Bahagia Raya 13 Rt 004/07 Depok','-6.39663938917224, 106.85116242337475',5,'Kesehatan adalah sumber kebahagiaan yang tak tergantikan',2,NULL,10,'-',2,5),(96,'Roxy','Jl Nusantara Raya 50 Rt 01/013 Depok','-6.379844365346135, 106.81374943212013',5,'Menjadi Instansi yang terpercaya dalam penyediaan obat-obatan',7.8,NULL,1,'-',3,10),(97,'Canon','Jl Kemakmuran Raya 7 Perumnas Rt 001/01 Depok','-6.398601331378391, 106.8362816531552',5,'Menjadi Apotek yang terandalkan oleh Masyarakat',8.2,NULL,10,'www.honestdocs.id/apotik/canon-apotik-depok',3,6),(98,'Kartini','Jl Kartini 21-A Depok','-6.399578239223634, 106.81906671539392',5,'Menjadikan Masyarakat yang peduli akan kesehatan dan pentingnya konsultasi dini',9.6,NULL,6,'-',2,6),(99,'Era Medika','Jl Tole Iskandar 4 Depok','-6.403720279182066, 106.83894867790897',5,'Apotek dengan penyediaan alat kesehatan dasar yang lengkap',6.4,NULL,10,'-',4,7),(100,'Hade Farma','Jl Arif Rahman Hakim 4 Rt 008/19 Depok','-6.388830075708169, 106.81833062431886',5,'Apotek dengan penyediaan obat-obatan yang lengkap',7.8,NULL,1,'-',5,8),(101,'Hero','Jl Keadilan Raya Kompl Pancoran Indah Bl 13/1 Rt 002/01 Depok','-6.3904207897759795, 106.852078553122',5,'Apotek dengan pelayanan yang ramah anak ',8,NULL,10,'-',3,5),(102,'Jalan Baru','Jl Proklamasi Bl D/20 Depok','-6.3879279849265345, 106.85089714528759',5,'Menjadi Apotek dengan harga yang terjangkau dan berkualitas ',8.4,NULL,10,'-',4,8),(103,'Kimia Farma PT Persero Tbk','Jl Kejayaan Raya Bl X/6 Depok','-6.391389224069052, 106.85172919155036',5,'Penyedia Obat-obatan yang tak diragukan kualitasnya',8.2,NULL,10,'-',3,10),(104,'Maharaja','Jl Raya Muchtar Kompl Depok Maharaja Bl A-1/17-19 Depok','-6.389338272054457, 106.78532472176579',5,'Menjadi Apotek dengan pelayanan yang terbaik di Pancoran Mas',9,NULL,6,'-',1,3),(105,'Melawai','Jl Margonda Raya 192 Rt 003/08 Depok','-6.384345366347766, 106.82898885414433',5,'Apotek dengan pengawasan obat-obatan yang ketat dalam distribusinya',9.2,NULL,1,'-',3,6);
/*!40000 ALTER TABLE `faskes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_faskes`
--

DROP TABLE IF EXISTS `jenis_faskes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_faskes` (
  `id_faskes` int(11) NOT NULL AUTO_INCREMENT,
  `nama_faskes` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_faskes`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_faskes`
--

LOCK TABLES `jenis_faskes` WRITE;
/*!40000 ALTER TABLE `jenis_faskes` DISABLE KEYS */;
INSERT INTO `jenis_faskes` VALUES (1,'Puskesmas'),(2,'Rumah Sakit'),(3,'Klinik Umum'),(4,'Klinik Gigi'),(5,'Apotek');
/*!40000 ALTER TABLE `jenis_faskes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kecamatan`
--

DROP TABLE IF EXISTS `kecamatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kecamatan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kecamatan`
--

LOCK TABLES `kecamatan` WRITE;
/*!40000 ALTER TABLE `kecamatan` DISABLE KEYS */;
INSERT INTO `kecamatan` VALUES (1,'Beji'),(2,'Cimanggis'),(3,'Tapos'),(4,'Limo'),(5,'Cinere'),(6,'Pancoran Mas'),(7,'Cipayung'),(8,'Sawangan'),(9,'Bojongsari'),(10,'Sukmajaya'),(11,'Cilodong');
/*!40000 ALTER TABLE `kecamatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `isi` text CHARACTER SET utf8 DEFAULT NULL,
  `users_id` int(11) NOT NULL,
  `faskes_id` int(11) DEFAULT NULL,
  `nilai_rating_id` int(11) NOT NULL,
  PRIMARY KEY (`id_komentar`),
  KEY `users_id` (`users_id`),
  KEY `faskes_id` (`faskes_id`),
  KEY `nilai_rating_in` (`nilai_rating_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
INSERT INTO `komentar` VALUES (1,'2022-06-12','layanan nya baik',2,1,4),(2,'2022-07-07','Pelayanannya baik, petugasnya ramah',2,1,5),(3,'2022-07-07','Bagus-bagus saja',2,1,3);
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_rating`
--

DROP TABLE IF EXISTS `nilai_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_rating` (
  `id_rating` int(11) NOT NULL AUTO_INCREMENT,
  `nama_rating` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_rating`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_rating`
--

LOCK TABLES `nilai_rating` WRITE;
/*!40000 ALTER TABLE `nilai_rating` DISABLE KEYS */;
INSERT INTO `nilai_rating` VALUES (1,'Jelek'),(2,'Kurang Bagus'),(3,'Biasa Aja'),(4,'Bagus'),(5,'Sangat Bagus');
/*!40000 ALTER TABLE `nilai_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `role` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','827ccb0eea8a706c4c34a16891f84e7b','admin@gmail.com','2022-06-12 00:32:05','2022-06-12 00:32:05',1,'administrator'),(2,'aminah','90b74c589f46e8f3a484082d659308bd','aminah@gmail.com','2022-06-12 00:32:06','2022-06-12 00:32:06',1,'public'),(3,'rafi','b2f0d9e408eccecc0edb74d654d36a72','rafi123@gmail.com',NULL,NULL,1,'public');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-08 20:11:54
