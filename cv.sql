-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Tem 2021, 16:40:50
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cv`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `alt_kisim`
--

CREATE TABLE `alt_kisim` (
  `alt_kisim_id` int(11) NOT NULL,
  `alt_kisim_metin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `alt_kisim`
--

INSERT INTO `alt_kisim` (`alt_kisim_id`, `alt_kisim_metin`) VALUES
(2, 'Alt Kısım Metin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calismalarim`
--

CREATE TABLE `calismalarim` (
  `calismalarim_id` int(11) NOT NULL,
  `calismalarim_baslik` varchar(200) NOT NULL,
  `calismalarim_1_resim` varchar(500) NOT NULL,
  `calismalarim_1_link` varchar(500) NOT NULL,
  `calismalarim_2_resim` varchar(200) NOT NULL,
  `calismalarim_2_link` varchar(300) NOT NULL,
  `calismalarim_3_resim` varchar(500) NOT NULL,
  `calismalarim_3_link` varchar(500) NOT NULL,
  `calismalarim_4_resim` varchar(500) NOT NULL,
  `calismalarim_4_link` varchar(500) NOT NULL,
  `calismalarim_5_resim` varchar(200) NOT NULL,
  `calismalarim_5_link` varchar(200) NOT NULL,
  `calismalarim_6_resim` varchar(500) NOT NULL,
  `calismalarim_6_link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `calismalarim`
--

INSERT INTO `calismalarim` (`calismalarim_id`, `calismalarim_baslik`, `calismalarim_1_resim`, `calismalarim_1_link`, `calismalarim_2_resim`, `calismalarim_2_link`, `calismalarim_3_resim`, `calismalarim_3_link`, `calismalarim_4_resim`, `calismalarim_4_link`, `calismalarim_5_resim`, `calismalarim_5_link`, `calismalarim_6_resim`, `calismalarim_6_link`) VALUES
(21, 'Çalışmalarım Başlık', '899477calisma-1.png', 'Çalışmalarım 1 Link', '412838calisma-2.png', 'Çalışmalarım 2 Link', '221406calisma-3.png', 'Çalışmalarım 3 Link', '762051calisma-4.png', 'Çalışmalarım 4 Link', '643633calisma-5.png', 'Çalışmalarım 5 Link', '691066calisma-6.png', 'Çalışmalarım 6 Link');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `egitim_id` int(11) NOT NULL,
  `egitim_baslik` varchar(200) NOT NULL,
  `egitim_1_baslik` varchar(500) NOT NULL,
  `egitim_1_tarih` varchar(500) NOT NULL,
  `egitim_1_aciklama` varchar(500) NOT NULL,
  `egitim_2_baslik` varchar(200) NOT NULL,
  `egitim_2_tarih` varchar(200) NOT NULL,
  `egitim_2_aciklama` varchar(200) NOT NULL,
  `egitim_3_baslik` varchar(200) NOT NULL,
  `egitim_3_tarih` varchar(200) NOT NULL,
  `egitim_3_aciklama` varchar(200) NOT NULL,
  `egitim_4_baslik` varchar(200) NOT NULL,
  `egitim_4_tarih` varchar(200) NOT NULL,
  `egitim_4_aciklama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`egitim_id`, `egitim_baslik`, `egitim_1_baslik`, `egitim_1_tarih`, `egitim_1_aciklama`, `egitim_2_baslik`, `egitim_2_tarih`, `egitim_2_aciklama`, `egitim_3_baslik`, `egitim_3_tarih`, `egitim_3_aciklama`, `egitim_4_baslik`, `egitim_4_tarih`, `egitim_4_aciklama`) VALUES
(6, 'Eğitim Başlık', 'Eğitim 1 Başlık', 'Eğitim 1 Tarih', 'Eğitim 1 Açıklama', 'Eğitim 2 Başlık', 'Eğitim 2 Tarih', 'Eğitim 2 Açıklama', 'Eğitim 3 Başlık', 'Eğitim 3 Tarih', 'Eğitim 3 Açıklama', 'Eğitim 4 Başlık', 'Eğitim 4 Tarih', 'Eğitim 4 Açıklama');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `hakkimda_id` int(11) NOT NULL,
  `hakkimda_baslik` varchar(200) NOT NULL,
  `hakkimda_aciklama` varchar(500) NOT NULL,
  `hakkimda_resim` varchar(200) NOT NULL,
  `hakkimizda_bilgi_1` varchar(200) NOT NULL,
  `hakkimizda_bilgi_2` varchar(200) NOT NULL,
  `hakkimizda_bilgi_3` varchar(200) NOT NULL,
  `hakkimizda_bilgi_4` varchar(200) NOT NULL,
  `hakkimizda_bilgi_5` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`hakkimda_id`, `hakkimda_baslik`, `hakkimda_aciklama`, `hakkimda_resim`, `hakkimizda_bilgi_1`, `hakkimizda_bilgi_2`, `hakkimizda_bilgi_3`, `hakkimizda_bilgi_4`, `hakkimizda_bilgi_5`) VALUES
(20, 'Hakkımda Başlık', 'Hakkımda Açıklama', '830864hakkimizda-icon.png', 'Hakkımda 1. Bilgi', 'Hakkımda 2. Bilgi', 'Hakkımda 3. Bilgi', 'Hakkımda 4. Bilgi', 'Hakkımda 5. Bilgi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmetler_id` int(11) NOT NULL,
  `hizmetler_baslik` varchar(200) NOT NULL,
  `hizmetler_baslik_1` varchar(200) NOT NULL,
  `hizmetler_baslik_2` varchar(200) NOT NULL,
  `hizmetler_baslik_3` varchar(200) NOT NULL,
  `hizmetler_baslik_4` varchar(200) NOT NULL,
  `hizmetler_aciklama_1` varchar(500) NOT NULL,
  `hizmetler_aciklama_2` varchar(500) NOT NULL,
  `hizmetler_aciklama_3` varchar(500) NOT NULL,
  `hizmetler_aciklama_4` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmetler_id`, `hizmetler_baslik`, `hizmetler_baslik_1`, `hizmetler_baslik_2`, `hizmetler_baslik_3`, `hizmetler_baslik_4`, `hizmetler_aciklama_1`, `hizmetler_aciklama_2`, `hizmetler_aciklama_3`, `hizmetler_aciklama_4`) VALUES
(6, 'Hizmetler Başlık', 'Hizmetler Başlık 1', 'Hizmetler Başlık 2', 'Hizmetler Başlık 3', 'Hizmetler Başlık 4', 'Hizmetler Açıklama 1', 'Hizmetler Açıklama 2', 'Hizmetler Açıklama 3', 'Hizmetler Açıklama 4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `kul_id` int(11) NOT NULL,
  `kul_isim` varchar(200) NOT NULL,
  `kul_mail` varchar(200) NOT NULL,
  `kul_sifre` varchar(100) NOT NULL,
  `kul_telefon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`kul_id`, `kul_isim`, `kul_mail`, `kul_sifre`, `kul_telefon`) VALUES
(1, 'Türker Tolga Demir', 'tolga@tekohaber.com', '202cb962ac59075b964b07152d234b70', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seo`
--

CREATE TABLE `seo` (
  `seo_id` int(11) NOT NULL,
  `seo_icon` varchar(200) NOT NULL,
  `seo_baslik` varchar(200) NOT NULL,
  `seo_aciklama` varchar(200) NOT NULL,
  `seo_anahtar_1` varchar(200) NOT NULL,
  `seo_anahtar_2` varchar(200) NOT NULL,
  `seo_anahtar_3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `seo`
--

INSERT INTO `seo` (`seo_id`, `seo_icon`, `seo_baslik`, `seo_aciklama`, `seo_anahtar_1`, `seo_anahtar_2`, `seo_anahtar_3`) VALUES
(59, '609569site-icon.png', 'Seo Başlık', 'Seo Açıklama', 'Seo Anahtar Kelime 1', 'Seo Anahtar Kelime 2', 'Seo Anahtar Kelime 3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sosyal_medya`
--

CREATE TABLE `sosyal_medya` (
  `sosyal_medya_id` int(11) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `linkedin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `sosyal_medya`
--

INSERT INTO `sosyal_medya` (`sosyal_medya_id`, `facebook`, `twitter`, `instagram`, `linkedin`) VALUES
(2, 'Facebook', 'Twitter', 'İnstagram', 'Linkedin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tecrube`
--

CREATE TABLE `tecrube` (
  `tecrube_id` int(11) NOT NULL,
  `tecrube_baslik` varchar(200) NOT NULL,
  `tecrube_1_baslik` varchar(300) NOT NULL,
  `tecrube_1_tarih` varchar(300) NOT NULL,
  `tecrube_1_aciklama` varchar(300) NOT NULL,
  `tecrube_2_baslik` varchar(300) NOT NULL,
  `tecrube_2_tarih` varchar(300) NOT NULL,
  `tecrube_2_aciklama` varchar(300) NOT NULL,
  `tecrube_3_baslik` varchar(300) NOT NULL,
  `tecrube_3_tarih` varchar(300) NOT NULL,
  `tecrube_3_aciklama` varchar(300) NOT NULL,
  `tecrube_4_baslik` varchar(300) NOT NULL,
  `tecrube_4_tarih` varchar(300) NOT NULL,
  `tecrube_4_aciklama` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `tecrube`
--

INSERT INTO `tecrube` (`tecrube_id`, `tecrube_baslik`, `tecrube_1_baslik`, `tecrube_1_tarih`, `tecrube_1_aciklama`, `tecrube_2_baslik`, `tecrube_2_tarih`, `tecrube_2_aciklama`, `tecrube_3_baslik`, `tecrube_3_tarih`, `tecrube_3_aciklama`, `tecrube_4_baslik`, `tecrube_4_tarih`, `tecrube_4_aciklama`) VALUES
(3, 'Tecrübe Başlık', 'Tecrübe 1 Başlık', 'Tecrübe 1 Tarih', 'Tecrübe 1 Açıklama', 'Tecrübe 2 Başlık', 'Tecrübe 2 Tarih', 'Tecrübe 2 Açıklama', 'Tecrübe 3 Başlık', 'Tecrübe 3 Tarih', 'Tecrübe 3 Açıklama', 'Tecrübe 4 Başlık', 'Tecrübe 4 Tarih', 'Tecrübe 4 Açıklama');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ust_kisim`
--

CREATE TABLE `ust_kisim` (
  `ust_kisim_id` int(11) NOT NULL,
  `ust_kisim_baslik` varchar(200) NOT NULL,
  `ust_kisim_aciklama` varchar(500) NOT NULL,
  `ust_kisim_buton_yazisi` varchar(500) NOT NULL,
  `ust_kisim_buton_linki` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ust_kisim`
--

INSERT INTO `ust_kisim` (`ust_kisim_id`, `ust_kisim_baslik`, `ust_kisim_aciklama`, `ust_kisim_buton_yazisi`, `ust_kisim_buton_linki`) VALUES
(4, 'Üst Kısım Başlık', 'Üst Kısım Açıklama', 'Üst Kısım Buton Yazısı', 'Üst Kısım Buton Linki');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici_paneli`
--

CREATE TABLE `yonetici_paneli` (
  `yonetici_paneli_id` int(11) NOT NULL,
  `yonetici_paneli_icon` varchar(200) NOT NULL,
  `yonetici_paneli_baslik` varchar(200) NOT NULL,
  `yonetici_paneli_aciklama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `yonetici_paneli`
--

INSERT INTO `yonetici_paneli` (`yonetici_paneli_id`, `yonetici_paneli_icon`, `yonetici_paneli_baslik`, `yonetici_paneli_aciklama`) VALUES
(5, '491011transparan-icon.png', 'Yönetici Paneli Başlık', 'Yönetici Paneli Açıklama');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `alt_kisim`
--
ALTER TABLE `alt_kisim`
  ADD PRIMARY KEY (`alt_kisim_id`);

--
-- Tablo için indeksler `calismalarim`
--
ALTER TABLE `calismalarim`
  ADD PRIMARY KEY (`calismalarim_id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`egitim_id`);

--
-- Tablo için indeksler `hakkimda`
--
ALTER TABLE `hakkimda`
  ADD PRIMARY KEY (`hakkimda_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmetler_id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`kul_id`);

--
-- Tablo için indeksler `seo`
--
ALTER TABLE `seo`
  ADD PRIMARY KEY (`seo_id`);

--
-- Tablo için indeksler `sosyal_medya`
--
ALTER TABLE `sosyal_medya`
  ADD PRIMARY KEY (`sosyal_medya_id`);

--
-- Tablo için indeksler `tecrube`
--
ALTER TABLE `tecrube`
  ADD PRIMARY KEY (`tecrube_id`);

--
-- Tablo için indeksler `ust_kisim`
--
ALTER TABLE `ust_kisim`
  ADD PRIMARY KEY (`ust_kisim_id`);

--
-- Tablo için indeksler `yonetici_paneli`
--
ALTER TABLE `yonetici_paneli`
  ADD PRIMARY KEY (`yonetici_paneli_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `alt_kisim`
--
ALTER TABLE `alt_kisim`
  MODIFY `alt_kisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `calismalarim`
--
ALTER TABLE `calismalarim`
  MODIFY `calismalarim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `egitim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimda`
--
ALTER TABLE `hakkimda`
  MODIFY `hakkimda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmetler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `kul_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `seo`
--
ALTER TABLE `seo`
  MODIFY `seo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `sosyal_medya`
--
ALTER TABLE `sosyal_medya`
  MODIFY `sosyal_medya_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `tecrube`
--
ALTER TABLE `tecrube`
  MODIFY `tecrube_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `ust_kisim`
--
ALTER TABLE `ust_kisim`
  MODIFY `ust_kisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `yonetici_paneli`
--
ALTER TABLE `yonetici_paneli`
  MODIFY `yonetici_paneli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
