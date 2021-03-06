<?php

session_start();

$host="localhost";

$veritabani_ismi="cv";

$kullanici_adi="root";

$sifre="";

try 
{
	$db = new PDO("mysql:host=$host; dbname=$veritabani_ismi; charset=utf8", $kullanici_adi,$sifre);
      
} 
catch (PDOException $e) {
	echo $e->getmessage();
      
}

$sorgu=$db->prepare("SELECT * FROM yonetici_paneli");
$sorgu->execute();
$yonetici_paneli=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM seo");
$sorgu->execute();
$seo=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM ust_kisim");
$sorgu->execute();
$ust_kisim=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM sosyal_medya");
$sorgu->execute();
$sosyal_medya=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM hakkimda");
$sorgu->execute();
$hakkimda=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM hizmetler");
$sorgu->execute();
$hizmetler=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM egitim");
$sorgu->execute();
$egitim=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM tecrube");
$sorgu->execute();
$tecrube=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM alt_kisim");
$sorgu->execute();
$alt_kisim=$sorgu->fetch(PDO::FETCH_ASSOC);

$sorgu=$db->prepare("SELECT * FROM calismalarim");
$sorgu->execute();
$calismalarim=$sorgu->fetch(PDO::FETCH_ASSOC);

?>