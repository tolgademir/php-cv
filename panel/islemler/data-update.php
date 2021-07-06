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

// SEO

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
		header("location:../seo.php?durum=seo-islem-basarili");
	} else {
		header("location:../seo.php?durum=seo-islem-basarisiz");
	}
	exit;

}

// SEO VERİ GÜNCELLEME

// SEO VERİ EKLEME

if (isset($_POST['seoveriekle'])) {
	if ($_FILES['seo_icon']['error']=="0") { 
		$gecici_isim=$_FILES['seo_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['seo_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	}
	
	$sorgu=$db->prepare("INSERT INTO seo SET
		seo_baslik=:seo_baslik,
		seo_aciklama=:seo_aciklama,
		seo_anahtar_1=:seo_anahtar_1,
		seo_anahtar_2=:seo_anahtar_2,
		seo_anahtar_3=:seo_anahtar_3,
		seo_icon=:seo_icon
		");

	$sonuc=$sorgu->execute(array(
		'seo_baslik' => $_POST['seo_baslik'],
		'seo_aciklama' => $_POST['seo_aciklama'],
		'seo_anahtar_1' => $_POST['seo_anahtar_1'],
		'seo_anahtar_2' => $_POST['seo_anahtar_2'],
		'seo_anahtar_3' => $_POST['seo_anahtar_3'],
		'seo_icon' => $dosya_ismi
	));
	
	if ($sonuc) {
		header("location:../seo.php?durum=seo-islem-basarili");
	} else {
		header("location:../seo.php?durum=seo-islem-basarisiz");
	}
	exit;
	
}

// SEO VERİ EKLEME

// SEO


// ÜST KISIM

// ÜST KISIM VERİ GÜNCELLEME

if (isset($_POST['ust_kisim_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE ust_kisim SET 
		ust_kisim_baslik=:ust_kisim_baslik,
		ust_kisim_aciklama=:ust_kisim_aciklama,
		ust_kisim_buton_yazisi=:ust_kisim_buton_yazisi,
		ust_kisim_buton_linki=:ust_kisim_buton_linki
		");

	$sonuc=$sorgu->execute(array(
		'ust_kisim_baslik' => $_POST['ust_kisim_baslik'],
		'ust_kisim_aciklama' => $_POST['ust_kisim_aciklama'],
		'ust_kisim_buton_yazisi' => $_POST['ust_kisim_buton_yazisi'],
		'ust_kisim_buton_linki' => $_POST['ust_kisim_buton_linki'],
	));

	if ($sonuc) {
		header("location:../ust-kisim.php?durum=ust-kisim-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../ust-kisim.php?durum=ust-kisim-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// ÜST KISIM VERİ GÜNCELLEME

// ÜST KISIM VERİ EKLEME

if (isset($_POST['ust_kisim_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO ust_kisim SET
		ust_kisim_baslik=:ust_kisim_baslik,
		ust_kisim_aciklama=:ust_kisim_aciklama,
		ust_kisim_buton_yazisi=:ust_kisim_buton_yazisi,
		ust_kisim_buton_linki=:ust_kisim_buton_linki
		");

	$sonuc=$sorgu->execute(array(
		'ust_kisim_baslik' => $_POST['ust_kisim_baslik'],
		'ust_kisim_aciklama' => $_POST['ust_kisim_aciklama'],
		'ust_kisim_buton_yazisi' => $_POST['ust_kisim_buton_yazisi'],
		'ust_kisim_buton_linki' => $_POST['ust_kisim_buton_linki'],
	));

	if ($sonuc) {
		header("location:../ust-kisim.php?durum=ust-kisim-veri-ekleme-islemi-basarili");
	} else {
		header("location:../ust-kisim.php?durum=ust-kisim-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// ÜST KISIM VERİ EKLEME

// ÜST KISIM

// SOSYAL MEDYA

// SOSYAL MEDYA VERİ GÜNCELLEME

if (isset($_POST['sosyal_medya_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE sosyal_medya SET 
		facebook=:facebook,
		twitter=:twitter,
		instagram=:instagram,
		linkedin=:linkedin
		");

	$sonuc=$sorgu->execute(array(
		'facebook' => $_POST['facebook'],
		'twitter' => $_POST['twitter'],
		'instagram' => $_POST['instagram'],
		'linkedin' => $_POST['linkedin'],
	));

	if ($sonuc) {
		header("location:../sosyal-medya.php?durum=sosyal-medya-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../sosyal-medya.php?durum=sosyal-medya-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// SOSYAL MEDYA VERİ GÜNCELLEME

// SOSYAL MEDYA VERİ EKLEME

if (isset($_POST['sosyal_medya_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO sosyal_medya SET
		facebook=:facebook,
		twitter=:twitter,
		instagram=:instagram,
		linkedin=:linkedin
		");

	$sonuc=$sorgu->execute(array(
		'facebook' => $_POST['facebook'],
		'twitter' => $_POST['twitter'],
		'instagram' => $_POST['instagram'],
		'linkedin' => $_POST['linkedin'],
	));

	if ($sonuc) {
		header("location:../sosyal-medya.php?durum=sosyal-medya-veri-ekleme-islemi-basarili");
	} else {
		header("location:../sosyal-medya.php?durum=sosyal-medya-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// SOSYAL MEDYA VERİ EKLEME

// SOSYAL MEDYA

// HAKKIMDA

// HAKKIMDA VERİ GÜNCELLEME

if (isset($_POST['hakkimda_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE hakkimda SET 
		hakkimda_baslik=:hakkimda_baslik,
		hakkimda_aciklama=:hakkimda_aciklama,
		hakkimizda_bilgi_1=:hakkimizda_bilgi_1,
		hakkimizda_bilgi_2=:hakkimizda_bilgi_2,
		hakkimizda_bilgi_3=:hakkimizda_bilgi_3,
		hakkimizda_bilgi_4=:hakkimizda_bilgi_4,
		hakkimizda_bilgi_5=:hakkimizda_bilgi_5
		");

	$sonuc=$sorgu->execute(array(
		'hakkimda_baslik' => $_POST['hakkimda_baslik'],
		'hakkimda_aciklama' => $_POST['hakkimda_aciklama'],
		'hakkimizda_bilgi_1' => $_POST['hakkimizda_bilgi_1'],
		'hakkimizda_bilgi_2' => $_POST['hakkimizda_bilgi_2'],
		'hakkimizda_bilgi_3' => $_POST['hakkimizda_bilgi_3'],
		'hakkimizda_bilgi_4' => $_POST['hakkimizda_bilgi_4'],
		'hakkimizda_bilgi_5' => $_POST['hakkimizda_bilgi_5'],
	));

	if ($_FILES['hakkimda_resim']['error']=="0") { 
		$gecici_isim=$_FILES['hakkimda_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['hakkimda_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE hakkimda SET 
			hakkimda_resim=:hakkimda_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'hakkimda_resim' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../hakkimda.php?durum=hakkimda-veri-guncelleme-basarili");
	} else {
		header("location:../hakkimda.php?durum=hakkimda-veri-guncelleme-basarisiz");
	}
	exit;

}

// HAKKIMDA VERİ GÜNCELLEME

// HAKKIMDA VERİ EKLEME

if (isset($_POST['hakkimda_veri_ekleme'])) {
	if ($_FILES['hakkimda_resim']['error']=="0") { 
		$gecici_isim=$_FILES['hakkimda_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['hakkimda_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi");
	}
	
	$sorgu=$db->prepare("INSERT INTO hakkimda SET
		hakkimda_baslik=:hakkimda_baslik,
		hakkimda_aciklama=:hakkimda_aciklama,
		hakkimda_resim=:hakkimda_resim,
		hakkimizda_bilgi_1=:hakkimizda_bilgi_1,
		hakkimizda_bilgi_2=:hakkimizda_bilgi_2,
		hakkimizda_bilgi_3=:hakkimizda_bilgi_3,
		hakkimizda_bilgi_4=:hakkimizda_bilgi_4,
		hakkimizda_bilgi_5=:hakkimizda_bilgi_5
		");

	$sonuc=$sorgu->execute(array(
		'hakkimda_baslik' => $_POST['hakkimda_baslik'],
		'hakkimda_aciklama' => $_POST['hakkimda_aciklama'],
		'hakkimizda_bilgi_1' => $_POST['hakkimizda_bilgi_1'],
		'hakkimizda_bilgi_2' => $_POST['hakkimizda_bilgi_2'],
		'hakkimizda_bilgi_3' => $_POST['hakkimizda_bilgi_3'],
		'hakkimizda_bilgi_4' => $_POST['hakkimizda_bilgi_4'],
		'hakkimizda_bilgi_5' => $_POST['hakkimizda_bilgi_5'],
		'hakkimda_resim' => $dosya_ismi
	));
	
	if ($sonuc) {
		header("location:../hakkimda.php?durum=hakkimda-veri-ekleme-basarili");
	} else {
		header("location:../hakkimda.php?durum=hakkimda-veri-ekleme-basarisiz");
	}
	exit;
	
}

// HAKKIMDA VERİ EKLEME

// HAKKIMDA

// HİZMETLER

// HİZMETLER VERİ GÜNCELLEME

if (isset($_POST['hizmetler_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE hizmetler SET 
		hizmetler_baslik=:hizmetler_baslik
		");

	$sonuc=$sorgu->execute(array(
		'hizmetler_baslik' => $_POST['hizmetler_baslik'],
	));

	if ($sonuc) {
		header("location:../hizmetler.php?durum=hizmetler-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../hizmetler.php?durum=hizmetler-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// HİZMETLER VERİ GÜNCELLEME

// HİZMETLER VERİ EKLEME

if (isset($_POST['hizmetler_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO hizmetler SET
		hizmetler_baslik=:hizmetler_baslik
		");

	$sonuc=$sorgu->execute(array(
		'hizmetler_baslik' => $_POST['hizmetler_baslik'],
	));

	if ($sonuc) {
		header("location:../hizmetler.php?durum=hizmetler-veri-ekleme-islemi-basarili");
	} else {
		header("location:../hizmetler.php?durum=hizmetler-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// HİZMETLER VERİ EKLEME

// HİZMETLER

?>