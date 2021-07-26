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
        <li><a class="active" href="./sosyal-medya.php">Sosyal Medya</a></li>
        <li><a class="" href="./hakkimda.php">Hakkımda</a></li>
        <li><a class="" href="./hizmetler.php">Hizmetler</a></li>
        <li><a class="" href="./egitim.php">Eğitim</a></li>
        <li><a class="" href="./tecrube.php">Tecrübe</a></li>
        <li><a class="" href="./alt-kisim.php">Alt Kısım</a></li>
        <li><a class="" href="./calismalarim.php">Çalışmalarım</a></li>
        <li><a class="" href="./iletisim.php">İletişim</a></li>
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

                            <!-- Sosyal Medya Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Sosyal Medya Veri Güncelleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p>Facebook</p>
                                <input type="text" class="form-control rounded-left" name="facebook" id="facebook" value="<?php echo $sosyal_medya["facebook"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Twitter </p>
                                <input type="text" class="form-control rounded-left" name="twitter" id="twitter" value="<?php echo $sosyal_medya["twitter"] ?>">
                            </div>

                            <div class="form-group">
                                <p> İnstagram </p>
                                <input type="text" class="form-control rounded-left" name="instagram" id="instagram" value="<?php echo $sosyal_medya["instagram"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Linkedin </p>
                                <input type="text" class="form-control rounded-left" name="linkedin" id="linkedin" value="<?php echo $sosyal_medya["linkedin"] ?>">
                            </div>

                            <!-- Sosyal Medya Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="sosyal_medya_veri_guncelleme">Güncelle</button>
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

                            <!-- Sosyal Medya Veri Ekleme -->
                            
                            <br>
                            <h5 class="panel">Sosyal Medya Veri Ekleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p>Facebook</p>
                                <input type="text" class="form-control rounded-left" name="facebook" id="facebook">
                            </div>

                            <div class="form-group">
                                <p> Twitter </p>
                                <input type="text" class="form-control rounded-left" name="twitter" id="twitter">
                            </div>

                            <div class="form-group">
                                <p> İnstagram </p>
                                <input type="text" class="form-control rounded-left" name="instagram" id="instagram">
                            </div>

                            <div class="form-group">
                                <p> Linkedin </p>
                                <input type="text" class="form-control rounded-left" name="linkedin" id="linkedin">
                            </div>

                            <!-- Sosyal Medya Veri Ekleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="sosyal_medya_veri_ekleme">Ekle</button>
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