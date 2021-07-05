<?php

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

?>