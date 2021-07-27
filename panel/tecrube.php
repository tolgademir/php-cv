<?php include "islemler/db.php"; 

include 'fonksiyonlar.php';

oturumkontrol();

?>

<!doctype html>
<html lang="tr">

<head>

    <link rel="icon" href="resimler/<?php echo $yonetici_paneli['yonetici_paneli_icon'] ?>" type="image/png">

    <title> <?php echo $yonetici_paneli['yonetici_paneli_baslik'] ?> - <?php echo $yonetici_paneli['yonetici_paneli_aciklama'] ?> </title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/panel/panel.css">

    <ul>
        <li><a class="" href="./index.php">Yönetici Paneli</a></li>
        <li><a class="" href="./seo.php">Seo</a></li>
        <li><a class="" href="./ust-kisim.php">Üst Kısım</a></li>
        <li><a class="" href="./sosyal-medya.php">Sosyal Medya</a></li>
        <li><a class="" href="./hakkimda.php">Hakkımda</a></li>
        <li><a class="" href="./hizmetler.php">Hizmetler</a></li>
        <li><a class="" href="./egitim.php">Eğitim</a></li>
        <li><a class="active" href="./tecrube.php">Tecrübe</a></li>
        <li><a class="" href="./alt-kisim.php">Alt Kısım</a></li>
        <li><a class="" href="./calismalarim.php">Çalışmalarım</a></li>
        <li><a class="" href="../index.php" target="_blank">Siteyi Görüntüle</a></li>
        <li><a class="" href="islemler/cikis.php">Çıkış Yap</a></li>
    </ul>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <form action="islemler/data-update.php" method="POST" enctype="multipart/form-data" class="login-form">

                            <!-- Tecrübe Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Tecrübe Veri Güncelleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p> Tecrübe Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_baslik" id="tecrube_baslik" value="<?php echo $tecrube['tecrube_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_baslik" id="tecrube_1_baslik" value="<?php echo $tecrube['tecrube_1_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_tarih" id="tecrube_1_tarih" value="<?php echo $tecrube['tecrube_1_tarih'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_aciklama" id="tecrube_1_aciklama" value="<?php echo $tecrube['tecrube_1_aciklama'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_baslik" id="tecrube_2_baslik" value="<?php echo $tecrube['tecrube_2_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_tarih" id="tecrube_2_tarih" value="<?php echo $tecrube['tecrube_2_tarih'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_aciklama" id="tecrube_2_aciklama" value="<?php echo $tecrube['tecrube_2_aciklama'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_baslik" id="tecrube_3_baslik" value="<?php echo $tecrube['tecrube_3_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_tarih" id="tecrube_3_tarih" value="<?php echo $tecrube['tecrube_3_tarih'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_aciklama" id="tecrube_3_aciklama" value="<?php echo $tecrube['tecrube_3_aciklama'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_baslik" id="tecrube_4_baslik" value="<?php echo $tecrube['tecrube_4_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_tarih" id="tecrube_4_tarih" value="<?php echo $tecrube['tecrube_4_tarih'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_aciklama" id="tecrube_4_aciklama" value="<?php echo $tecrube['tecrube_4_aciklama'] ?>">
                            </div>


                            <!-- Tecrübe Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="tecrube_veri_guncelleme">Güncelle</button>
                            </div>

                            <!-- Veri Güncelleme -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <form action="islemler/data-update.php" method="POST" enctype="multipart/form-data" class="login-form">

                            <!-- Tecrübe Veri Ekleme -->
                            
                            <br>
                            <h5 class="panel">Tecrübe Veri Ekleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p> Tecrübe Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_baslik" id="tecrube_baslik">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_baslik" id="tecrube_1_baslik">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_tarih" id="tecrube_1_tarih">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 1 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_1_aciklama" id="tecrube_1_aciklama">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_baslik" id="tecrube_2_baslik">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_tarih" id="tecrube_2_tarih">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 2 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_2_aciklama" id="tecrube_2_aciklama">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_baslik" id="tecrube_3_baslik">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_tarih" id="tecrube_3_tarih">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 3 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_3_aciklama" id="tecrube_3_aciklama">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Başlık </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_baslik" id="tecrube_4_baslik">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Tarih </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_tarih" id="tecrube_4_tarih">
                            </div>

                            <div class="form-group">
                                <p> Tecrübe 4 Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="tecrube_4_aciklama" id="tecrube_4_aciklama">
                            </div>

                            <!-- Tecrübe Veri Ekleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="tecrube_veri_ekleme">Ekle</button>
                            </div>

                            <!-- Veri Güncelleme -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>