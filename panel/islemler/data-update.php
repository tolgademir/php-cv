<?php

include "db.php";

// PANEL

if (isset($_POST['yonetici_paneli'])) {
	$sorgu=$db->prepare("UPDATE yonetici_paneli SET 
		yonetici_paneli_baslik=:yonetici_paneli_baslik,
		yonetici_paneli_aciklama=:yonetici_paneli_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'yonetici_paneli_baslik' => $_POST['yonetici_paneli_baslik'],
		'yonetici_paneli_aciklama' => $_POST['yonetici_paneli_aciklama'],
	));

	if ($_FILES['yonetici_paneli_icon']['error']=="0") {
		$gecici_isim=$_FILES['yonetici_paneli_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['yonetici_paneli_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE yonetici_paneli SET 
			yonetici_paneli_icon=:yonetici_paneli_icon
			");
	
		$sonuc=$sorgu->execute(array(
			'yonetici_paneli_icon' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../index.php?durum=yonetici-islem-basarili");
	} else {
		header("location:../index.php?durum=yonetici-islem-basarisiz");
	}
	exit;

}

// PANEL

// SEO VERİ GÜNCELLEME

if (isset($_POST['seo'])) {
	$sorgu=$db->prepare("UPDATE seo SET 
		seo_baslik=:seo_baslik,
		seo_aciklama=:seo_aciklama,
		seo_anahtar_1=:seo_anahtar_1,
		seo_anahtar_2=:seo_anahtar_2,
		seo_anahtar_3=:seo_anahtar_3
		");

	$sonuc=$sorgu->execute(array(
		'seo_baslik' => $_POST['seo_baslik'],
		'seo_aciklama' => $_POST['seo_aciklama'],
		'seo_anahtar_1' => $_POST['seo_anahtar_1'],
		'seo_anahtar_2' => $_POST['seo_anahtar_2'],
		'seo_anahtar_3' => $_POST['seo_anahtar_3'],
	));

	if ($_FILES['seo_icon']['error']=="0") { 
		$gecici_isim=$_FILES['seo_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['seo_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE seo SET 
			seo_icon=:seo_icon
			");
	
		$sonuc=$sorgu->execute(array(
			'seo_icon' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../seo-veri-guncelle.php?durum=seo-islem-basarili");
	} else {
		header("location:../seo-veri-guncelle.php?durum=seo-islem-basarisiz");
	}
	exit;

}

// SEO VERİ GÜNCELLEME

// SEO VERİ EKLEME

if (isset($_POST['seoveriekle'])) {
	$sorgu=$db->prepare("INSERT INTO seo SET
		seo_baslik=:seo_baslik,
		seo_aciklama=:seo_aciklama,
		seo_anahtar_1=:seo_anahtar_1,
		seo_anahtar_2=:seo_anahtar_2,
		seo_anahtar_3=:seo_anahtar_3
		");

	$sonuc=$sorgu->execute(array(
		'seo_baslik' => $_POST['seo_baslik'],
		'seo_aciklama' => $_POST['seo_aciklama'],
		'seo_anahtar_1' => $_POST['seo_anahtar_1'],
		'seo_anahtar_2' => $_POST['seo_anahtar_2'],
		'seo_anahtar_3' => $_POST['seo_anahtar_3'],
	));

	if ($_FILES['seo_icon']['error']=="0") { 
		$gecici_isim=$_FILES['seo_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['seo_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	
		$sorgu=$db->prepare("INSERT INTO seo SET
			seo_icon=:seo_icon
			");
	
		$sonuc=$sorgu->execute(array(
			'seo_icon' => $dosya_ismi,
		));
	}
		
	if ($sonuc) {
		header("location:../seo-veri-ekle.php?durum=seo-islem-basarili");
	} else {
		header("location:../seo-veri-ekle.php?durum=seo-islem-basarisiz");
	}
	exit;
	
}

// SEO VERİ EKLEME

?>