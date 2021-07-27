<?php include "panel/islemler/db.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Seo -->
    <title> <?php echo $seo['seo_baslik'] ?> - <?php echo $seo['seo_aciklama'] ?></title> 
    <meta name="description" content=" <?php echo $seo['seo_aciklama'] ?> "/>
    <meta name="keywords" content="<?php echo $seo['seo_anahtar_1'] ?>, <?php echo $seo['seo_anahtar_2'] ?>, <?php echo $seo['seo_anahtar_3'] ?>"/>
    <link rel="icon" href="panel/resimler/<?php echo $seo["seo_icon"] ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome.min.css">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/simple-line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/menu_sideslide.css">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slide-style.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="assets/img/logo.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Ana Sayfa
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  Hakkımda
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Hizmetler
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                  Eğitim ve Tecrübe
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  Çalışmalarım
                </a>
              </li>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
          <li>
            <a href="#home">Ana Sayfa</a>
          </li>
          <li>
            <a href="#about">Hakkımda</a>
          </li>
          <li>
            <a href="#services">Hizmetler</a>
          </li>
          <li>
            <a href="#resume">Eğitim ve Tecrübe</a>
          </li>
          <li>
            <a href="#portfolio">Çalışmalarım</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
       <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s"> <?php echo $ust_kisim["ust_kisim_baslik"] ?> </h2>
                <p class="script-font wow fadeInUp" data-wow-delay="0.6s"> <?php echo $ust_kisim["ust_kisim_aciklama"] ?> </p>
                <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="<?php echo $sosyal_medya["facebook"] ?>"> <i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="<?php echo $sosyal_medya["twitter"] ?>"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="<?php echo $sosyal_medya["instagram"] ?>"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="<?php echo $sosyal_medya["linkedin"] ?>"><i class="icon-social-linkedin"></i></a>
                  </li>
                </ul>

                <div class="header-button wow fadeInUp" data-wow-delay="1s">
                  <a href="<?php echo $ust_kisim['ust_kisim_buton_linki'] ?>" class="btn btn-common"> <?php echo $ust_kisim['ust_kisim_buton_yazisi'] ?> </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              <img class="img-fluid" src="panel/resimler/<?php echo $hakkimda['hakkimda_resim'] ?>" alt="">
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <h3> <?php echo $hakkimda['hakkimda_baslik'] ?> </h3>
              <p> <?php echo $hakkimda['hakkimda_aciklama'] ?> </p>
              <div class="about-profile">
                <ul class="admin-profile">
                  <li><span class="pro-title"> Bilgi 1 </span> <span class="pro-detail"> <?php echo $hakkimda["hakkimizda_bilgi_1"]?> </span></li>
                  <li><span class="pro-title"> Bilgi 2 </span> <span class="pro-detail"> <?php echo $hakkimda["hakkimizda_bilgi_2"]?> </span></li>
                  <li><span class="pro-title"> Bilgi 3 </span> <span class="pro-detail"> <?php echo $hakkimda["hakkimizda_bilgi_3"]?> </span></li>
                  <li><span class="pro-title"> Bilgi 4 </span> <span class="pro-detail"> <?php echo $hakkimda["hakkimizda_bilgi_4"]?> </span></li>
                  <li><span class="pro-title"> Bilgi 5 </span> <span class="pro-detail"> <?php echo $hakkimda["hakkimizda_bilgi_5"]?> </span></li>
                </ul>
              </div>
              <a href="#" class="btn btn-common"><i class="icon-paper-clip"></i> CV İndir</a>
              <!-- <a href="#" class="btn btn-danger"><i class="icon-speech"></i> Benimle iletişime geç!</a> --> 
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

     <!-- Services Section Start -->
     <section id="services" class="services section-padding">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s"> <?php echo $hizmetler["hizmetler_baslik"] ?> </h2>
      <div class="container">
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon">
                <i class="icon-user"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> <?php echo $hizmetler["hizmetler_baslik_1"] ?> </a></h3>
                <p> <?php echo $hizmetler["hizmetler_aciklama_1"] ?> </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="icon-layers"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> <?php echo $hizmetler["hizmetler_baslik_2"] ?> </a></h3>
                <p> <?php echo $hizmetler["hizmetler_aciklama_2"] ?> </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon">
                <i class="icon-briefcase"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> <?php echo $hizmetler["hizmetler_baslik_3"] ?> </a></h3>
                <p> <?php echo $hizmetler["hizmetler_aciklama_3"] ?> </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-3 col-xs-12">
            <div class="services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="icon-diamond"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> <?php echo $hizmetler["hizmetler_baslik_4"] ?> </a></h3>
                <p> <?php echo $hizmetler["hizmetler_aciklama_4"] ?> </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              <ul class="timeline">
                <li>
                  <i class="icon-graduation"></i>
                  <h2 class="timelin-title"><?php echo $egitim["egitim_baslik"]?></h2>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $egitim["egitim_1_baslik"]?></h3>
                    <span><?php echo $egitim["egitim_1_tarih"]?></span>
                    <p class="line-text"><?php echo $egitim["egitim_1_aciklama"]?></p>
                  </div>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $egitim["egitim_2_baslik"]?></h3>
                    <span><?php echo $egitim["egitim_2_tarih"]?></span>
                    <p class="line-text"><?php echo $egitim["egitim_2_aciklama"]?></p>
                  </div>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $egitim["egitim_3_baslik"]?></h3>
                    <span><?php echo $egitim["egitim_3_tarih"]?></span>
                    <p class="line-text"><?php echo $egitim["egitim_3_aciklama"]?></p>
                  </div>
                </li>
                
                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $egitim["egitim_4_baslik"]?></h3>
                    <span><?php echo $egitim["egitim_4_tarih"]?></span>
                    <p class="line-text"><?php echo $egitim["egitim_4_aciklama"]?></p>
                  </div>
                </li>

              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timelin-title"> <?php echo $tecrube["tecrube_baslik"] ?> </h2>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $tecrube["tecrube_1_baslik"]?></h3>
                    <span><?php echo $tecrube["tecrube_1_tarih"]?></span>
                    <p class="line-text"><?php echo $tecrube["tecrube_1_aciklama"]?></p>
                  </div>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $tecrube["tecrube_2_baslik"]?></h3>
                    <span><?php echo $tecrube["tecrube_2_tarih"]?></span>
                    <p class="line-text"><?php echo $tecrube["tecrube_2_aciklama"]?></p>
                  </div>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $tecrube["tecrube_3_baslik"]?></h3>
                    <span><?php echo $tecrube["tecrube_3_tarih"]?></span>
                    <p class="line-text"><?php echo $tecrube["tecrube_3_aciklama"]?></p>
                  </div>
                </li>

                <li>
                  <div class="content-text">
                    <h3 class="line-title"><?php echo $tecrube["tecrube_4_baslik"]?></h3>
                    <span><?php echo $tecrube["tecrube_4_tarih"]?></span>
                    <p class="line-text"><?php echo $tecrube["tecrube_4_aciklama"]?></p>
                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Resume Section End -->

     <!-- Portfolio Section -->
     <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">        
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s"> <?php echo $calismalarim["calismalarim_baslik"] ?> </h2>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                Tümü
              </a>
              <a class="filter btn btn-common" data-filter=".projeler">
                Projeler
              </a>
              <a class="filter btn btn-common" data-filter=".kurumsal-websiteler">
                Kurumsal Projeler 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix kurumsal-websiteler">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_1_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_1_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_1_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix kurumsal-websiteler">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_2_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_2_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_2_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix kurumsal-websiteler">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_3_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_3_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_3_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix projeler">
              <div class="portfolio-item">
                <div class="shot-item">
                <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_4_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_4_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_4_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix projeler">
              <div class="portfolio-item">
                <div class="shot-item">
                <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_5_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_5_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_5_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix projeler">
              <div class="portfolio-item">
                <div class="shot-item">
                <img src="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_6_resim"] ?>" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="panel/resimler/calismalarim/<?php echo $calismalarim["calismalarim_6_resim"] ?>">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="<?php echo $calismalarim["calismalarim_6_link"] ?>">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>

          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 
    
    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <ul class="social-icon">
                <li>
                  <a class="facebook" href="<?php echo $sosyal_medya["facebook"] ?>"> <i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="<?php echo $sosyal_medya["twitter"] ?>"><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="<?php echo $sosyal_medya["instagram"] ?>"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="linkedin" href="<?php echo $sosyal_medya["linkedin"] ?>"><i class="icon-social-linkedin"></i></a>
                </li>
              </ul>
              <p> <?php echo $alt_kisim["alt_kisim_metin"] ?> </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>  
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/map.js"></script>
      
  </body>
</html>
