<?php include "islemler/db.php"; ?>

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
        <li><a class="active" href="./hakkimda.php">Hakkımda</a></li>
        <li><a class="" href="./hizmetler.php">Hizmetler</a></li>
        <li><a class="" href="./egitim.php">Eğitim</a></li>
        <li><a class="" href="./tecrube.php">Tecrübe</a></li>
        <li><a class="" href="./alt-kisim.php">Alt Kısım</a></li>
        <li><a class="" href="../index.php" target="_blank">Siteyi Görüntüle</a></li>
    </ul>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <form action="islemler/data-update.php" method="POST" enctype="multipart/form-data" class="login-form">

                            <!-- Hakkımda Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Hakkımda Veri Güncelleme</h5>
                            <br>
                            
                            <div class="form-group">
                                <center>
                                <img src="resimler/<?php echo $hakkimda['hakkimda_resim'] ?>" alt="" width="100" height="100">
                                </center>
                                <br>
                                <p> Hakkımzıda Resim</p>
                                <input type="file" class="form-control rounded-left" name="hakkimda_resim" id="hakkimda_resim" value="<?php echo $hakkimda['hakkimda_resim'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda Başlık </p>
                                <input type="text" class="form-control rounded-left" name="hakkimda_baslik" id="hakkimda_baslik" value="<?php echo $hakkimda['hakkimda_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="hakkimda_aciklama" id="hakkimda_aciklama" value="<?php echo $hakkimda['hakkimda_aciklama'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 1. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_1" id="hakkimizda_bilgi_1" value="<?php echo $hakkimda['hakkimizda_bilgi_1'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 2. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_2" id="hakkimizda_bilgi_2" value="<?php echo $hakkimda['hakkimizda_bilgi_2'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 3. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_3" id="hakkimizda_bilgi_3" value="<?php echo $hakkimda['hakkimizda_bilgi_3'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 4. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_4" id="hakkimizda_bilgi_4" value="<?php echo $hakkimda['hakkimizda_bilgi_4'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 5. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_5" id="hakkimizda_bilgi_5" value="<?php echo $hakkimda['hakkimizda_bilgi_5'] ?>">
                            </div>

                            <!-- Hakkımda Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="hakkimda_veri_guncelleme">Güncelle</button>
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

                            <!-- Hakkımda Veri Ekleme -->

                            <br>
                            <h5 class="panel">Hakkımda Veri Ekleme</h5>
                            <br>

                            <div class="form-group">
                                <center>
                                    <img src="resimler/<?php echo $hakkimda['hakkimda_resim'] ?>" alt="" width="100" height="100">
                                </center>
                                <br>
                                <p> Hakkımızda Resim </p>
                                <input type="file" class="form-control rounded-left" name="hakkimda_resim" id="hakkimda_resim">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda Başlık </p>
                                <input type="text" class="form-control rounded-left" name="hakkimda_baslik" id="hakkimda_baslik">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="hakkimda_aciklama" id="hakkimda_aciklama">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 1. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_1" id="hakkimizda_bilgi_1">
                            </div>
                            
                            <div class="form-group">
                                <p> Hakkımda 2. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_2" id="hakkimizda_bilgi_2">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 3. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_3" id="hakkimizda_bilgi_3">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 4. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_4" id="hakkimizda_bilgi_4">
                            </div>

                            <div class="form-group">
                                <p> Hakkımda 5. Bilgi </p>
                                <input type="text" class="form-control rounded-left" name="hakkimizda_bilgi_5" id="hakkimizda_bilgi_5">
                            </div>

                            <!-- Hakkımda Veri Ekleme -->

                            <!-- Veri Ekleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="hakkimda_veri_ekleme">Ekle</button>
                            </div>

                            <!-- Veri Ekleme -->
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