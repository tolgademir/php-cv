<?php

include "db.php";

// YÖNETİCİ PANELİ // YÖNETİCİ PANELİ 

// YÖNETİCİ PANELİ VERİ GÜNCELLEME // YÖNETİCİ PANELİ VERİ GÜNCELLEME

if (isset($_POST['yonetici_paneli_veri_guncelleme'])) {
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
		header("location:../index.php?durum=yonetici-paneli-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../index.php?durum=yonetici-paneli-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// YÖNETİCİ PANELİ VERİ GÜNCELLEME // YÖNETİCİ PANELİ VERİ GÜNCELLEME

// YÖNETİCİ PANELİ VERİ GÜNCELLEME // YÖNETİCİ PANELİ VERİ EKLEME

if (isset($_POST['yonetici_paneli_veri_ekleme'])) {
	if ($_FILES['yonetici_paneli_icon']['error']=="0") {
		$gecici_isim=$_FILES['yonetici_paneli_icon']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['yonetici_paneli_icon']['name'];
		move_uploaded_file($gecici_isim,"../resimler/$dosya_ismi"); 
	}

	$sorgu=$db->prepare("INSERT INTO yonetici_paneli SET 
		yonetici_paneli_baslik=:yonetici_paneli_baslik,
		yonetici_paneli_aciklama=:yonetici_paneli_aciklama,
		yonetici_paneli_icon=:yonetici_paneli_icon
		");

	$sonuc=$sorgu->execute(array(
		'yonetici_paneli_baslik' => $_POST['yonetici_paneli_baslik'],
		'yonetici_paneli_aciklama' => $_POST['yonetici_paneli_aciklama'],
		'yonetici_paneli_icon' => $dosya_ismi
	));

	if ($sonuc) {
		header("location:../index.php?durum=yonetici-paneli-veri-ekleme-islemi-basarili");
	} else {
		header("location:../index.php?durum=yonetici-paneli-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// YÖNETİCİ PANELİ VERİ GÜNCELLEME // YÖNETİCİ PANELİ VERİ EKLEME

// YÖNETİCİ PANELİ // YÖNETİCİ PANELİ 



// SEO // SEO

// SEO VERİ GÜNCELLEME // SEO VERİ GÜNCELLEME

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
		header("location:../seo.php?durum=seo-veri-guncelleme-basarili");
	} else {
		header("location:../seo.php?durum=seo-veri-guncelleme-basarisiz");
	}
	exit;

}

// SEO VERİ GÜNCELLEME // SEO VERİ GÜNCELLEME

// SEO VERİ EKLEME // SEO VERİ EKLEME

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

// SEO VERİ EKLEME // SEO VERİ EKLEME

// SEO // SEO


// ÜST KISIM // ÜST KISIM

// ÜST KISIM VERİ GÜNCELLEME // ÜST KISIM VERİ GÜNCELLEME

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

// ÜST KISIM VERİ GÜNCELLEME // ÜST KISIM VERİ GÜNCELLEME

// ÜST KISIM VERİ EKLEME // ÜST KISIM VERİ EKLEME

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

// ÜST KISIM VERİ EKLEME // ÜST KISIM VERİ EKLEME

// ÜST KISIM // ÜST KISIM


// SOSYAL MEDYA // SOSYAL MEDYA

// SOSYAL MEDYA VERİ GÜNCELLEME // SOSYAL MEDYA VERİ GÜNCELLEME

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

// SOSYAL MEDYA VERİ GÜNCELLEME // SOSYAL MEDYA VERİ GÜNCELLEME

// SOSYAL MEDYA VERİ EKLEME // SOSYAL MEDYA VERİ EKLEME

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

// SOSYAL MEDYA VERİ EKLEME // SOSYAL MEDYA VERİ EKLEME

// SOSYAL MEDYA // SOSYAL MEDYA


// HAKKIMDA // HAKKIMDA

// HAKKIMDA VERİ GÜNCELLEME // HAKKIMDA VERİ GÜNCELLEME

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

// HAKKIMDA VERİ GÜNCELLEME // HAKKIMDA VERİ GÜNCELLEME

// HAKKIMDA VERİ EKLEME // HAKKIMDA VERİ EKLEME

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
		'hakkimda_resim' => $dosya_ismi,
	));
	
	if ($sonuc) {
		header("location:../hakkimda.php?durum=hakkimda-veri-ekleme-basarili");
	} else {
		header("location:../hakkimda.php?durum=hakkimda-veri-ekleme-basarisiz");
	}
	exit;
	
}

// HAKKIMDA VERİ EKLEME // HAKKIMDA VERİ EKLEME

// HAKKIMDA // HAKKIMDA


// HİZMETLER // HİZMETLER

// HİZMETLER VERİ GÜNCELLEME // HİZMETLER VERİ GÜNCELLEME

if (isset($_POST['hizmetler_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE hizmetler SET 
		hizmetler_baslik=:hizmetler_baslik,
		hizmetler_baslik_1=:hizmetler_baslik_1,
		hizmetler_baslik_2=:hizmetler_baslik_2,
		hizmetler_baslik_3=:hizmetler_baslik_3,
		hizmetler_baslik_4=:hizmetler_baslik_4,
		hizmetler_aciklama_1=:hizmetler_aciklama_1,
		hizmetler_aciklama_2=:hizmetler_aciklama_2,
		hizmetler_aciklama_3=:hizmetler_aciklama_3,
		hizmetler_aciklama_4=:hizmetler_aciklama_4
		");

	$sonuc=$sorgu->execute(array(
		'hizmetler_baslik' => $_POST['hizmetler_baslik'],
		'hizmetler_baslik_1' => $_POST['hizmetler_baslik_1'],
		'hizmetler_baslik_2' => $_POST['hizmetler_baslik_2'],
		'hizmetler_baslik_3' => $_POST['hizmetler_baslik_3'],
		'hizmetler_baslik_4' => $_POST['hizmetler_baslik_4'],
		'hizmetler_aciklama_1' => $_POST['hizmetler_aciklama_1'],
		'hizmetler_aciklama_2' => $_POST['hizmetler_aciklama_2'],
		'hizmetler_aciklama_3' => $_POST['hizmetler_aciklama_3'],
		'hizmetler_aciklama_4' => $_POST['hizmetler_aciklama_4'],
	));

	if ($sonuc) {
		header("location:../hizmetler.php?durum=hizmetler-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../hizmetler.php?durum=hizmetler-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// HİZMETLER VERİ GÜNCELLEME // HİZMETLER VERİ GÜNCELLEME

// HİZMETLER VERİ EKLEME // HİZMETLER VERİ EKLEME

if (isset($_POST['hizmetler_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO hizmetler SET
		hizmetler_baslik=:hizmetler_baslik,
		hizmetler_baslik_1=:hizmetler_baslik_1,
		hizmetler_baslik_2=:hizmetler_baslik_2,
		hizmetler_baslik_3=:hizmetler_baslik_3,
		hizmetler_baslik_4=:hizmetler_baslik_4,
		hizmetler_aciklama_1=:hizmetler_aciklama_1,
		hizmetler_aciklama_2=:hizmetler_aciklama_2,
		hizmetler_aciklama_3=:hizmetler_aciklama_3,
		hizmetler_aciklama_4=:hizmetler_aciklama_4
		");

	$sonuc=$sorgu->execute(array(
		'hizmetler_baslik' => $_POST['hizmetler_baslik'],
		'hizmetler_baslik_1' => $_POST['hizmetler_baslik_1'],
		'hizmetler_baslik_2' => $_POST['hizmetler_baslik_2'],
		'hizmetler_baslik_3' => $_POST['hizmetler_baslik_3'],
		'hizmetler_baslik_4' => $_POST['hizmetler_baslik_4'],
		'hizmetler_aciklama_1' => $_POST['hizmetler_aciklama_1'],
		'hizmetler_aciklama_2' => $_POST['hizmetler_aciklama_2'],
		'hizmetler_aciklama_3' => $_POST['hizmetler_aciklama_3'],
		'hizmetler_aciklama_4' => $_POST['hizmetler_aciklama_4'],
	));

	if ($sonuc) {
		header("location:../hizmetler.php?durum=hizmetler-veri-ekleme-islemi-basarili");
	} else {
		header("location:../hizmetler.php?durum=hizmetler-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// HİZMETLER VERİ EKLEME // HİZMETLER VERİ EKLEME

// HİZMETLER // HİZMETLER


// EĞİTİM // EĞİTİM

// EĞİTİM VERİ GÜNCELLEME // EĞİTİM VERİ GÜNCELLEME

if (isset($_POST['egitim_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE egitim SET
	    egitim_baslik=:egitim_baslik,
		egitim_1_baslik=:egitim_1_baslik,
		egitim_1_tarih=:egitim_1_tarih,
		egitim_1_aciklama=:egitim_1_aciklama,
		egitim_2_baslik=:egitim_2_baslik,
		egitim_2_tarih=:egitim_2_tarih,
		egitim_2_aciklama=:egitim_2_aciklama,
		egitim_3_baslik=:egitim_3_baslik,
		egitim_3_tarih=:egitim_3_tarih,
		egitim_3_aciklama=:egitim_3_aciklama,
		egitim_4_baslik=:egitim_4_baslik,
		egitim_4_tarih=:egitim_4_tarih,
		egitim_4_aciklama=:egitim_4_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'egitim_baslik' => $_POST['egitim_baslik'],
		'egitim_1_baslik' => $_POST['egitim_1_baslik'],
		'egitim_1_tarih' => $_POST['egitim_1_tarih'],
		'egitim_1_aciklama' => $_POST['egitim_1_aciklama'],
		'egitim_2_baslik' => $_POST['egitim_2_baslik'],
		'egitim_2_tarih' => $_POST['egitim_2_tarih'],
		'egitim_2_aciklama' => $_POST['egitim_2_aciklama'],
		'egitim_3_baslik' => $_POST['egitim_3_baslik'],
		'egitim_3_tarih' => $_POST['egitim_3_tarih'],
		'egitim_3_aciklama' => $_POST['egitim_3_aciklama'],
		'egitim_4_baslik' => $_POST['egitim_4_baslik'],
		'egitim_4_tarih' => $_POST['egitim_4_tarih'],
		'egitim_4_aciklama' => $_POST['egitim_4_aciklama'],
	));

	if ($sonuc) {
		header("location:../egitim.php?durum=egitim-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../egitim.php?durum=egitim-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// EĞİTİM VERİ GÜNCELLEME // EĞİTİM VERİ GÜNCELLEME

// EĞİTİM VERİ EKLEME // EĞİTİM VERİ EKLEME

if (isset($_POST['egitim_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO egitim SET
	    egitim_baslik=:egitim_baslik,
		egitim_1_baslik=:egitim_1_baslik,
		egitim_1_tarih=:egitim_1_tarih,
		egitim_1_aciklama=:egitim_1_aciklama,
		egitim_2_baslik=:egitim_2_baslik,
		egitim_2_tarih=:egitim_2_tarih,
		egitim_2_aciklama=:egitim_2_aciklama,
		egitim_3_baslik=:egitim_3_baslik,
		egitim_3_tarih=:egitim_3_tarih,
		egitim_3_aciklama=:egitim_3_aciklama,
		egitim_4_baslik=:egitim_4_baslik,
		egitim_4_tarih=:egitim_4_tarih,
		egitim_4_aciklama=:egitim_4_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'egitim_baslik' => $_POST['egitim_baslik'],
		'egitim_1_baslik' => $_POST['egitim_1_baslik'],
		'egitim_1_tarih' => $_POST['egitim_1_tarih'],
		'egitim_1_aciklama' => $_POST['egitim_1_aciklama'],
		'egitim_2_baslik' => $_POST['egitim_2_baslik'],
		'egitim_2_tarih' => $_POST['egitim_2_tarih'],
		'egitim_2_aciklama' => $_POST['egitim_2_aciklama'],
		'egitim_3_baslik' => $_POST['egitim_3_baslik'],
		'egitim_3_tarih' => $_POST['egitim_3_tarih'],
		'egitim_3_aciklama' => $_POST['egitim_3_aciklama'],
		'egitim_4_baslik' => $_POST['egitim_4_baslik'],
		'egitim_4_tarih' => $_POST['egitim_4_tarih'],
		'egitim_4_aciklama' => $_POST['egitim_4_aciklama'],
	));

	if ($sonuc) {
		header("location:../egitim.php?durum=egitim-veri-ekleme-islemi-basarili");
	} else {
		header("location:../egitim.php?durum=egitim-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// EĞİTİM VERİ EKLEME // EĞİTİM VERİ EKLEME

// EĞİTİM // EĞİTİM


// TECRÜBE // TECRÜBE

// TECRÜBE VERİ GÜNCELLEME // TECRÜBE VERİ GÜNCELLEME

if (isset($_POST['tecrube_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE tecrube SET
	    tecrube_baslik=:tecrube_baslik,
		tecrube_1_baslik=:tecrube_1_baslik,
		tecrube_1_tarih=:tecrube_1_tarih,
		tecrube_1_aciklama=:tecrube_1_aciklama,
		tecrube_2_baslik=:tecrube_2_baslik,
		tecrube_2_tarih=:tecrube_2_tarih,
		tecrube_2_aciklama=:tecrube_2_aciklama,
		tecrube_3_baslik=:tecrube_3_baslik,
		tecrube_3_tarih=:tecrube_3_tarih,
		tecrube_3_aciklama=:tecrube_3_aciklama,
		tecrube_4_baslik=:tecrube_4_baslik,
		tecrube_4_tarih=:tecrube_4_tarih,
		tecrube_4_aciklama=:tecrube_4_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'tecrube_baslik' => $_POST['tecrube_baslik'],
		'tecrube_1_baslik' => $_POST['tecrube_1_baslik'],
		'tecrube_1_tarih' => $_POST['tecrube_1_tarih'],
		'tecrube_1_aciklama' => $_POST['tecrube_1_aciklama'],
		'tecrube_2_baslik' => $_POST['tecrube_2_baslik'],
		'tecrube_2_tarih' => $_POST['tecrube_2_tarih'],
		'tecrube_2_aciklama' => $_POST['tecrube_2_aciklama'],
		'tecrube_3_baslik' => $_POST['tecrube_3_baslik'],
		'tecrube_3_tarih' => $_POST['tecrube_3_tarih'],
		'tecrube_3_aciklama' => $_POST['tecrube_3_aciklama'],
		'tecrube_4_baslik' => $_POST['tecrube_4_baslik'],
		'tecrube_4_tarih' => $_POST['tecrube_4_tarih'],
		'tecrube_4_aciklama' => $_POST['tecrube_4_aciklama'],
	));

	if ($sonuc) {
		header("location:../tecrube.php?durum=tecrube-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../tecrube.php?durum=tecrube-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// TECRÜBE VERİ GÜNCELLEME // TECRÜBE VERİ GÜNCELLEME

// TECRÜBE VERİ EKLEME // TECRÜBE VERİ EKLEME

if (isset($_POST['tecrube_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO tecrube SET
	    tecrube_baslik=:tecrube_baslik,
		tecrube_1_baslik=:tecrube_1_baslik,
		tecrube_1_tarih=:tecrube_1_tarih,
		tecrube_1_aciklama=:tecrube_1_aciklama,
		tecrube_2_baslik=:tecrube_2_baslik,
		tecrube_2_tarih=:tecrube_2_tarih,
		tecrube_2_aciklama=:tecrube_2_aciklama,
		tecrube_3_baslik=:tecrube_3_baslik,
		tecrube_3_tarih=:tecrube_3_tarih,
		tecrube_3_aciklama=:tecrube_3_aciklama,
		tecrube_4_baslik=:tecrube_4_baslik,
		tecrube_4_tarih=:tecrube_4_tarih,
		tecrube_4_aciklama=:tecrube_4_aciklama
		");

	$sonuc=$sorgu->execute(array(
		'tecrube_baslik' => $_POST['tecrube_baslik'],
		'tecrube_1_baslik' => $_POST['tecrube_1_baslik'],
		'tecrube_1_tarih' => $_POST['tecrube_1_tarih'],
		'tecrube_1_aciklama' => $_POST['tecrube_1_aciklama'],
		'tecrube_2_baslik' => $_POST['tecrube_2_baslik'],
		'tecrube_2_tarih' => $_POST['tecrube_2_tarih'],
		'tecrube_2_aciklama' => $_POST['tecrube_2_aciklama'],
		'tecrube_3_baslik' => $_POST['tecrube_3_baslik'],
		'tecrube_3_tarih' => $_POST['tecrube_3_tarih'],
		'tecrube_3_aciklama' => $_POST['tecrube_3_aciklama'],
		'tecrube_4_baslik' => $_POST['tecrube_4_baslik'],
		'tecrube_4_tarih' => $_POST['tecrube_4_tarih'],
		'tecrube_4_aciklama' => $_POST['tecrube_4_aciklama'],
	));

	if ($sonuc) {
		header("location:../tecrube.php?durum=tecrube-veri-ekleme-islemi-basarili");
	} else {
		header("location:../tecrube.php?durum=tecrube-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// TECRÜBE VERİ EKLEME // TECRÜBE VERİ EKLEME

// TECRÜBE // TECRÜBE


// ALT KISIM // ALT KISIM 

// ALT KISIM VERİ GÜNCELLEME // ALT KISIM VERİ GÜNCELLEME

if (isset($_POST['alt_kisim_metin_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE alt_kisim SET
	    alt_kisim_metin=:alt_kisim_metin
		");

	$sonuc=$sorgu->execute(array(
		'alt_kisim_metin' => $_POST['alt_kisim_metin'],
	));

	if ($sonuc) {
		header("location:../alt-kisim.php?durum=alt-kisim-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../alt-kisim.php?durum=alt-kisim-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// ALT KISIM VERİ GÜNCELLEME // ALT KISIM VERİ GÜNCELLEME

// ALT KISIM VERİ EKLEME // ALT KISIM VERİ EKLEME

if (isset($_POST['alt_kisim_metin_veri_ekleme'])) {
	$sorgu=$db->prepare("INSERT INTO alt_kisim SET
	    alt_kisim_metin=:alt_kisim_metin
		");

	$sonuc=$sorgu->execute(array(
		'alt_kisim_metin' => $_POST['alt_kisim_metin'],
	));

	if ($sonuc) {
		header("location:../alt-kisim.php?durum=alt-kisim-veri-ekleme-islemi-basarili");
	} else {
		header("location:../alt-kisim.php?durum=alt-kisim-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// ALT KISIM VERİ EKLEME // ALT KISIM VERİ EKLEME

// ALT KISIM  // ALT KISIM 


// ÇALIŞMALARIM // ÇALIŞMALARIM

// ÇALIŞMALARIM VERİ GÜNCELLEME // ÇALIŞMALARIM VERİ GÜNCELLEME

if (isset($_POST['calismalarim_veri_guncelleme'])) {
	$sorgu=$db->prepare("UPDATE calismalarim SET 
		calismalarim_baslik=:calismalarim_baslik,
		calismalarim_1_link=:calismalarim_1_link,
		calismalarim_2_link=:calismalarim_2_link,
		calismalarim_3_link=:calismalarim_3_link,
		calismalarim_4_link=:calismalarim_4_link,
		calismalarim_5_link=:calismalarim_5_link,
		calismalarim_6_link=:calismalarim_6_link
		");

	$sonuc=$sorgu->execute(array(
		'calismalarim_baslik' => $_POST['calismalarim_baslik'],
		'calismalarim_1_link' => $_POST['calismalarim_1_link'],
		'calismalarim_2_link' => $_POST['calismalarim_2_link'],
		'calismalarim_3_link' => $_POST['calismalarim_3_link'],
		'calismalarim_4_link' => $_POST['calismalarim_4_link'],
		'calismalarim_5_link' => $_POST['calismalarim_5_link'],
		'calismalarim_6_link' => $_POST['calismalarim_6_link'],
	));

	if ($_FILES['calismalarim_1_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_1_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_1_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_1_resim=:calismalarim_1_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_1_resim' => $dosya_ismi,
		));
	}

	if ($_FILES['calismalarim_2_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_2_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_2_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_2_resim=:calismalarim_2_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_2_resim' => $dosya_ismi,
		));
	}

	if ($_FILES['calismalarim_3_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_3_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_3_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_3_resim=:calismalarim_3_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_3_resim' => $dosya_ismi,
		));
	}

	if ($_FILES['calismalarim_4_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_4_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_4_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_4_resim=:calismalarim_4_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_4_resim' => $dosya_ismi,
		));
	}

	if ($_FILES['calismalarim_5_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_5_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_5_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_5_resim=:calismalarim_5_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_5_resim' => $dosya_ismi,
		));
	}

	if ($_FILES['calismalarim_6_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_6_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_6_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	
		$sorgu=$db->prepare("UPDATE calismalarim SET 
			calismalarim_6_resim=:calismalarim_6_resim
			");
	
		$sonuc=$sorgu->execute(array(
			'calismalarim_6_resim' => $dosya_ismi,
		));
	}

	if ($sonuc) {
		header("location:../calismalarim.php?durum=calismalarim-veri-guncelleme-islemi-basarili");
	} else {
		header("location:../calismalarim.php?durum=calismalarim-veri-guncelleme-islemi-basarisiz");
	}
	exit;

}

// ÇALIŞMALARIM VERİ GÜNCELLEME // ÇALIŞMALARIM VERİ GÜNCELLEME

// ÇALIŞMALARIM VERİ EKLEME // ÇALIŞMALARIM VERİ EKLEME

if (isset($_POST['calismalarim_veri_ekleme'])) {
	if ($_FILES['calismalarim_1_resim']['error']=="0") { 
		$gecici_isim=$_FILES['calismalarim_1_resim']['tmp_name'];
		$dosya_ismi=rand(100000,999999).$_FILES['calismalarim_1_resim']['name'];
		move_uploaded_file($gecici_isim,"../resimler/calismalarim/$dosya_ismi");
	}
	if ($_FILES['calismalarim_2_resim']['error']=="0") { 
		$gecici_isim2=$_FILES['calismalarim_2_resim']['tmp_name'];
		$dosya_ismi2=rand(100000,999999).$_FILES['calismalarim_2_resim']['name'];
		move_uploaded_file($gecici_isim2,"../resimler/calismalarim/$dosya_ismi2");
	}
	if ($_FILES['calismalarim_3_resim']['error']=="0") { 
		$gecici_isim3=$_FILES['calismalarim_3_resim']['tmp_name'];
		$dosya_ismi3=rand(100000,999999).$_FILES['calismalarim_3_resim']['name'];
		move_uploaded_file($gecici_isim3,"../resimler/calismalarim/$dosya_ismi3");
	}
	if ($_FILES['calismalarim_4_resim']['error']=="0") { 
		$gecici_isim4=$_FILES['calismalarim_4_resim']['tmp_name'];
		$dosya_ismi4=rand(100000,999999).$_FILES['calismalarim_4_resim']['name'];
		move_uploaded_file($gecici_isim4,"../resimler/calismalarim/$dosya_ismi4");
	}
	if ($_FILES['calismalarim_5_resim']['error']=="0") { 
		$gecici_isim5=$_FILES['calismalarim_5_resim']['tmp_name'];
		$dosya_ismi5=rand(100000,999999).$_FILES['calismalarim_5_resim']['name'];
		move_uploaded_file($gecici_isim5,"../resimler/calismalarim/$dosya_ismi5");
	}
	if ($_FILES['calismalarim_6_resim']['error']=="0") { 
		$gecici_isim6=$_FILES['calismalarim_6_resim']['tmp_name'];
		$dosya_ismi6=rand(100000,999999).$_FILES['calismalarim_6_resim']['name'];
		move_uploaded_file($gecici_isim6,"../resimler/calismalarim/$dosya_ismi6");
	}

	$sorgu=$db->prepare("INSERT INTO calismalarim SET
		calismalarim_baslik=:calismalarim_baslik,
		calismalarim_1_link=:calismalarim_1_link,
		calismalarim_1_resim=:calismalarim_1_resim,
	    calismalarim_2_resim=:calismalarim_2_resim,
		calismalarim_2_link=:calismalarim_2_link,
		calismalarim_3_resim=:calismalarim_3_resim,
		calismalarim_3_link=:calismalarim_3_link,
		calismalarim_4_resim=:calismalarim_4_resim,
		calismalarim_4_link=:calismalarim_4_link,
		calismalarim_5_resim=:calismalarim_5_resim,
		calismalarim_5_link=:calismalarim_5_link,
		calismalarim_6_resim=:calismalarim_6_resim,
		calismalarim_6_link=:calismalarim_6_link
		");

	$sonuc=$sorgu->execute(array(
		'calismalarim_baslik' => $_POST['calismalarim_baslik'],
		'calismalarim_1_link' => $_POST['calismalarim_1_link'],
		'calismalarim_2_link' => $_POST['calismalarim_2_link'],
		'calismalarim_3_link' => $_POST['calismalarim_3_link'],
		'calismalarim_4_link' => $_POST['calismalarim_4_link'],
		'calismalarim_5_link' => $_POST['calismalarim_5_link'],
		'calismalarim_6_link' => $_POST['calismalarim_6_link'],
		'calismalarim_1_resim' => $dosya_ismi,
	    'calismalarim_2_resim' => $dosya_ismi2,
		'calismalarim_3_resim' => $dosya_ismi3,
		'calismalarim_4_resim' => $dosya_ismi4,
		'calismalarim_5_resim' => $dosya_ismi5,
		'calismalarim_6_resim' => $dosya_ismi6
	));

	if ($sonuc) {
		header("location:../calismalarim.php?durum=calismalarim-veri-ekleme-islemi-basarili");
	} else {
		header("location:../calismalarim.php?durum=calismalarim-veri-ekleme-islemi-basarisiz");
	}
	exit;

}

// ÇALIŞMALARIM VERİ EKLEME // ÇALIŞMALARIM VERİ EKLEME

// ÇALIŞMALARIM // ÇALIŞMALARIM

?>