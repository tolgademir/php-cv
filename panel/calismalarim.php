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
        <li><a class="" href="./tecrube.php">Tecrübe</a></li>
        <li><a class="" href="./alt-kisim.php">Alt Kısım</a></li>
        <li><a class="active" href="./calismalarim.php">Çalışmalarım</a></li>
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

                            <!-- Çalışamalarım Veri Güncelleme -->
                            
                            <br>
                            <h5 class="panel">Çalışamalarım Veri Güncelleme</h5>
                            <br>
                            
                            <div class="form-group">
                                <p> Çalışmalarım Başlık </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_baslik" id="calismalarim_baslik" value="<?php echo $calismalarim["calismalarim_baslik"] ?>">
                            </div>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_1_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 1 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_1_resim" id="calismalarim_1_resim" value="<?php echo $calismalarim["calismalarim_1_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 1 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_1_link" id="calismalarim_1_link" value="<?php echo $calismalarim["calismalarim_1_link"] ?>">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_2_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 2 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_2_resim" id="calismalarim_2_resim" value="<?php echo $calismalarim["calismalarim_2_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 2 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_2_link" id="calismalarim_2_link" value="<?php echo $calismalarim["calismalarim_2_link"] ?>">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_3_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 3 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_3_resim" id="calismalarim_3_resim" value="<?php echo $calismalarim["calismalarim_3_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 3 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_3_link" id="calismalarim_3_link" value="<?php echo $calismalarim["calismalarim_3_link"] ?>">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_4_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 4 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_4_resim" id="calismalarim_4_resim" value="<?php echo $calismalarim["calismalarim_4_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 4 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_4_link" id="calismalarim_4_link" value="<?php echo $calismalarim["calismalarim_4_link"] ?>">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_5_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 5 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_5_resim" id="calismalarim_5_resim" value="<?php echo $calismalarim["calismalarim_5_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 5 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_5_link" id="calismalarim_5_link" value="<?php echo $calismalarim["calismalarim_5_link"] ?>">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_6_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 6 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_6_resim" id="calismalarim_6_resim" value="<?php echo $calismalarim["calismalarim_6_resim"] ?>">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 6 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_6_link" id="calismalarim_6_link" value="<?php echo $calismalarim["calismalarim_6_link"] ?>">
                            </div>
                            
                            <!-- Çalışamalarım Veri Güncelleme -->

                            <!-- Veri Güncelleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="calismalarim_veri_guncelleme">Güncelle</button>
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

                            <!-- Çalışmalarım Veri Ekleme -->

                            <br>
                            <h5 class="panel">Çalışmalarım Veri Ekleme</h5>
                            <br>

                            <div class="form-group">
                                <p> Çalışmalarım Başlık </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_baslik" id="calismalarim_baslik">
                            </div>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_1_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 1 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_1_resim" id="calismalarim_1_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 1 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_1_link" id="calismalarim_1_link">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_2_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 2 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_2_resim" id="calismalarim_2_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 2 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_2_link" id="calismalarim_2_link">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_3_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 3 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_3_resim" id="calismalarim_3_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 3 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_3_link" id="calismalarim_3_link">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_4_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 4 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_4_resim" id="calismalarim_4_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 4 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_4_link" id="calismalarim_4_link">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_5_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 5 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_5_resim" id="calismalarim_5_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 5 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_5_link" id="calismalarim_5_link">
                            </div>

                            <br>
                            <br>
                            <br>

                            <div class="form-group">
                                <center>
                                <img src="resimler/calismalarim/<?php echo $calismalarim["calismalarim_6_resim"] ?>" alt="" width="300" height="120">
                                </center>
                                <br>
                                <p> Çalışmalarım 6 Resim </p>
                                <input type="file" class="form-control rounded-left" name="calismalarim_6_resim" id="calismalarim_6_resim">
                            </div>

                            <div class="form-group">
                                <p> Çalışmalarım 6 Link </p>
                                <input type="text" class="form-control rounded-left" name="calismalarim_6_link" id="calismalarim_6_link">
                            </div>
                            
                            <!-- Çalışmalarım Veri Ekleme -->

                            <!-- Veri Ekleme -->

                            <br>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3" name="calismalarim_veri_ekleme">Ekle</button>
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