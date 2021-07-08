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
        <li><a class="" href="./hakkimda.php">Hakkımda</a></li>
        <li><a class="active" href="./hizmetler.php">Hizmetler</a></li>
        <li><a class="" href="./egitim.php">Eğitim</a></li>
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

                            <!-- Hizmetler Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Hizmetler Veri Güncelleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p>Hizmetler Başlık</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik" id="hizmetler_baslik" value="<?php echo $hizmetler["hizmetler_baslik"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 1</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_1" id="hizmetler_baslik_1" value="<?php echo $hizmetler["hizmetler_baslik_1"] ?>">
                            </div>
                            
                            <div class="form-group">
                                <p>Hizmetler Başlık 2</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_2" id="hizmetler_baslik_2" value="<?php echo $hizmetler["hizmetler_baslik_2"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 3</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_3" id="hizmetler_baslik_3" value="<?php echo $hizmetler["hizmetler_baslik_3"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 4</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_4" id="hizmetler_baslik_4" value="<?php echo $hizmetler["hizmetler_baslik_4"] ?>">
                            </div>
                            
                            <div class="form-group">
                                <p>Hizmetler Açıklama 1</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_1" id="hizmetler_aciklama_1" value="<?php echo $hizmetler["hizmetler_aciklama_1"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 2</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_2" id="hizmetler_aciklama_2" value="<?php echo $hizmetler["hizmetler_aciklama_2"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 3</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_3" id="hizmetler_aciklama_3" value="<?php echo $hizmetler["hizmetler_aciklama_3"] ?>">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 4</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_4" id="hizmetler_aciklama_4" value="<?php echo $hizmetler["hizmetler_aciklama_4"] ?>">
                            </div>

                            <!-- Hizmetler Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="hizmetler_veri_guncelleme">Güncelle</button>
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

                            <!-- Hizmetler Veri Ekleme -->
                            
                            <br>
                            <h5 class="panel">Hizmetler Veri Ekleme</h5>
                            <br>
                        
                            <div class="form-group">
                                <p>Hizmetler Başlık</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik" id="hizmetler_baslik">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 1</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_1" id="hizmetler_baslik_1">
                            </div>
                            
                            <div class="form-group">
                                <p>Hizmetler Başlık 2</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_2" id="hizmetler_baslik_2">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 3</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_3" id="hizmetler_baslik_3">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Başlık 4</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_baslik_4" id="hizmetler_baslik_4">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 1</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_1" id="hizmetler_aciklama_1">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 2</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_2" id="hizmetler_aciklama_2">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 3</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_3" id="hizmetler_aciklama_3">
                            </div>

                            <div class="form-group">
                                <p>Hizmetler Açıklama 4</p>
                                <input type="text" class="form-control rounded-left" name="hizmetler_aciklama_4" id="hizmetler_aciklama_4">
                            </div>

                            <!-- Hizmetler Veri Ekleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="hizmetler_veri_ekleme">Ekle</button>
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