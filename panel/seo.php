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
        <li><a class="active" href="./seo.php">Seo</a></li>
        <li><a class="" href="./ust-kisim.php">Üst Kısım</a></li>
        <li><a class="" href="./sosyal-medya.php">Sosyal Medya</a></li>
        <li><a class="" href="./hakkimda.php">Hakkımda</a></li>
        <li><a class="" href="./hizmetler.php">Hizmetler</a></li>
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

                            <!-- Seo Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Seo Veri Güncelleme</h5>
                            <br>
                            
                            <div class="form-group">
                                <center>
                                <img src="resimler/<?php echo $seo['seo_icon'] ?>" alt="" width="100" height="100">
                                </center>
                                <br>
                                <p> Seo İcon </p>
                                <input type="file" class="form-control rounded-left" name="seo_icon" id="seo_icon" value="<?php echo $seo['seo_icon'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Seo Başlık </p>
                                <input type="text" class="form-control rounded-left" name="seo_baslik" id="seo_baslik" value="<?php echo $seo['seo_baslik'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Seo Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="seo_aciklama" id="seo_aciklama" value="<?php echo $seo['seo_aciklama'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 1 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_1" id="seo_anahtar_1" value="<?php echo $seo['seo_anahtar_1'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 2 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_2" id="seo_anahtar_2" value="<?php echo $seo['seo_anahtar_2'] ?>">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 3 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_3" id="seo_anahtar_3" value="<?php echo $seo['seo_anahtar_3'] ?>">
                            </div>

                            <!-- Seo Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="seo">Güncelle</button>
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

                            <!-- Seo Veri Ekleme -->

                            <br>
                            <h5 class="panel">Seo Veri Ekleme</h5>
                            <br>

                            <div class="form-group">
                                <center>
                                    <img src="resimler/<?php echo $seo['seo_icon'] ?>" alt="" width="100" height="100">
                                </center>
                                <br>
                                <p> Seo İcon </p>
                                <input type="file" class="form-control rounded-left" name="seo_icon" id="seo_icon">
                            </div>

                            <div class="form-group">
                                <p> Seo Başlık </p>
                                <input type="text" class="form-control rounded-left" name="seo_baslik" id="seo_baslik">
                            </div>

                            <div class="form-group">
                                <p> Seo Açıklama </p>
                                <input type="text" class="form-control rounded-left" name="seo_aciklama" id="seo_aciklama">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 1 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_1" id="seo_anahtar_1">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 2 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_2" id="seo_anahtar_2">
                            </div>

                            <div class="form-group">
                                <p> Seo Anahtar Kelime 3 </p>
                                <input type="text" class="form-control rounded-left" name="seo_anahtar_3" id="seo_anahtar_3">
                            </div>

                            <!-- Seo Veri Ekleme -->

                            <!-- Veri Ekleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="seoveriekle">Ekle</button>
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