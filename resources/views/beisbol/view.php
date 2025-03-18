<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Sportz &mdash; Colorlib Sports Team Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="<?php asset('vendor/sport/fonts/icomoon/style.css'); ?>">

    <link rel="stylesheet" href="<?php asset('vendor/sport/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('vendor/sport/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php asset('vendor/sport/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?php asset('vendor/sport/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php asset('vendor/sport/css/owl.theme.default.min.css'); ?>">


    <link rel="stylesheet" href="<?php asset('vendor/sport/css/aos.css'); ?>">

    <link rel="stylesheet" href="<?php asset('vendor/sport/css/style.css'); ?>">

      <style>
          body {
              margin: 0;
          }

          .banner {
              background-image: url("<?php asset('img/banner.jpg'); ?>");
              padding: 250px 200px;
              background-repeat: no-repeat;
              background-size: cover;
          }


          @media (max-width: 480px) {
              .banner {
                  background-image: url("<?php asset('img/banner_2.jpg'); ?>");
                  padding: 130px 40px;
                  background-repeat: no-repeat;
                  background-size: cover;
                  font-size: 1.2rem;
              }
          }

      </style>
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="<?php asset('img/logo_plantilla.png'); ?>" alt="Image"></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body">

      </div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
      <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3">
              <a href="#" class="text-secondary px-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-twitter"></span></a>
              <a href="#" class="text-secondary px-2"><span class="icon-linkedin"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+1 232 3532 321</span></a></div>
            </div>
          </div>
        </div>
      </div>
      <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          <div class="site-logo">
            <a href="index.html"><img src="<?php asset('img/logo_plantilla.png'); ?>" alt="" width="128" height="113"></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <!--<li class="has-children active">
              <a href="index.html">Home</a>
              <ul class="dropdown arrow-top">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
                <li class="has-children">
                  <a href="#">Sub Menu</a>
                  <ul class="dropdown">
                    <li><a href="#">Menu One</a></li>
                    <li><a href="#">Menu Two</a></li>
                    <li><a href="#">Menu Three</a></li>
                  </ul>
                </li>
              </ul>
            </li>
           <li class="has-children">
              <a href="news.html">News</a>
              <ul class="dropdown arrow-top">
                <li><a href="#">Menu One</a></li>
                <li><a href="#">Menu Two</a></li>
                <li><a href="#">Menu Three</a></li>
              </ul>
            </li>
            <li><a href="matches.html">Matches</a></li>
            <li><a href="team.html">Team</a></li>-->
            <li><a href="about.html">Sobre Nosotros</a></li>
            <li><a href="contact.html">Contactanos</a></li>
          </ul>
        </div>
      </nav>
    </header>



      <div class="banner">

          <div class="card" style="background-color: rgba(255, 255, 255, 0.8); border: 1px solid rgba(0, 0, 0, 0.1); width: 65%">
              <div class="card-body">
                  <h1 class="card-title fw-bold">¡Partidos en vivo!</h1>
                  <p class="card-text fw-bold h5">Vive la experiencia como si estuvieses en el estadio.</p>
              </div>
          </div>

      </div>




    <div class="site-blocks-vs site-section bg-light">
      <div class="container">

          <div class="border mb-3 rounded d-block d-lg-flex align-items-center p-3 next-match">

              <div class="mr-auto order-md-1 w-60 text-center text-lg-left mb-3 mb-lg-0">
                  <strong>Cuenta Regresiva</strong>
                  <div id="date-countdown"><span class="countdown-block"><!--<span class="label">00</span> Semanas </span>--><span class="countdown-block"><span class="label">00</span> Días </span><span class="countdown-block"><span class="label">00</span> Horas </span><span class="countdown-block"><span class="label">00</span> min </span><span class="countdown-block"><span class="label">00</span> Segundos</span></div>
              </div>

              <div class="ml-auto pr-4 order-md-2">
                  <div class="h5 text-black text-uppercase text-center text-lg-left">
                      <div class="d-block d-md-inline-block mb-3 mb-lg-0">
                          <img src="<?php asset('vendor/sport/images/img_1_sq.jpg'); ?>" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">magallanes</span>
                      </div>
                      <span class="text-muted mx-3 text-normal mb-3 mb-lg-0 d-block d-md-inline ">vs</span>
                      <div class="d-block d-md-inline-block">
                          <img src="<?php asset('vendor/sport/images/img_3_sq.jpg'); ?>" alt="Image" class="mr-3 image"><span class="d-block d-md-inline-block ml-0 ml-md-3 ml-lg-0">leones</span>
                      </div>
                  </div>
              </div>


          </div>


          <a href="https://www.youtube.com/watch?v=f1jWJHFgYGk" class="play-button popup-vimeo">
            <div class="bg-image overlay-success rounded mb-5" style="background-image: url('<?php asset('img/beisbol_2.jpg'); ?>');" data-stellar-background-ratio="0.5">


                    <div class="row align-items-center">
                        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

                            <div class="text-center text-lg-left">
                                <div class="d-block d-lg-flex align-items-center">
                                    <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                                        <img src="<?php asset('vendor/sport/images/img_1_sq.jpg'); ?>" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="text">
                                        <h3 class="h5 mb-0 text-black text-uppercase">Magallanes</h3>
                                        <span class="text-uppercase small country text-black">Local</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
                            <div class="d-inline-block">
                                <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Liga Venezolana de Béisbol Profesional</small></p>
                                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">VS</span></div>
                                <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">10 de septiembre / 7:30 pm</small></p>
                                <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">Estadio: José Bernardo Pérez</small></p>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-4 text-center text-lg-right">
                            <div class="">
                                <div class="d-block d-lg-flex align-items-center">
                                    <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                                        <img src="<?php asset('vendor/sport/images/img_4_sq.jpg'); ?>" alt="Image" class="img-fluid">
                                    </div>
                                    <div class="text order-1">
                                        <h3 class="h5 mb-0 text-black text-uppercase">Leones</h3>
                                        <span class="text-uppercase small country text-black">Visitante</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>



            </div>
          </a>

        <div class="row">
          <div class="col-md-12">

            <h2 class="h6 text-uppercase text-black font-weight-bold mb-3">Calendario</h2>
            <div class="site-block-tab">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Próximos partidos</a>
                </li>
               <!-- <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Match 2</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Match 3</a>
                </li>-->
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                  <div class="row align-items-center">
                    <div class="col-md-12">


                        <a href="https://www.youtube.com/watch?v=f1jWJHFgYGk" class="play-button popup-vimeo">
                            <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="<?php asset('vendor/sport/images/img_1_sq.jpg'); ?>" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Navegantes del magallanes</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                              <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">VS</span></div><br>
                              <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-none d-md-block">10 de septiembre / 7:30 pm</small></p>
                              <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-md-none">10-sep</small></p>
                          </div>
                        </div>

                        <div class="col-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="<?php asset('vendor/sport/images/img_4_sq.jpg'); ?>" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Leones del caracas</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                        </a>

                      <!-- END row -->

                        <a id="popover_beisbol" tabindex="0" role="button" data-placement="top" data-toggle="popover" data-trigger="focus" title="El evento no ha iniciado." data-content="Este evento estara disponible en la fecha prevista.">
                            <div  class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">

                                <div class="col-4 col-lg-4 mb-4 mb-lg-0">

                                    <div class="text-center text-lg-left">
                                        <div class="d-block d-lg-flex align-items-center">
                                            <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                                <img src="<?php asset('vendor/sport/images/img_1_sq.jpg'); ?>" alt="Image" class="img-fluid">
                                            </div>
                                            <div class="text">
                                                <h3 class="h5 mb-0 text-black">Patriots</h3>
                                                <span class="text-uppercase small country">Brazil</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-4 col-lg-4 text-center mb-4 mb-lg-0">
                                    <div class="d-inline-block">
                                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">VS</span></div>
                                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-none d-md-block">10 de septiembre / 7:30 pm</small></p>
                                        <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-md-none">10-sep</small></p>
                                    </div>
                                </div>

                                <div class="col-4 col-lg-4 text-center text-lg-right">
                                    <div class="">
                                        <div class="d-block d-lg-flex align-items-center">
                                            <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                                <img src="<?php asset('vendor/sport/images/img_4_sq.jpg'); ?>" alt="Image" class="img-fluid">
                                            </div>
                                            <div class="text order-1 w-100">
                                                <h3 class="h5 mb-0 text-black">Cowboys</h3>
                                                <span class="text-uppercase small country">London</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>



                      <!-- END row -->

                      <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                        <div class="col-4 col-lg-4 mb-4 mb-lg-0">

                          <div class="text-center text-lg-left">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                                <img src="<?php asset('vendor/sport/images/img_1_sq.jpg'); ?>" alt="Image" class="img-fluid">
                              </div>
                              <div class="text">
                                <h3 class="h5 mb-0 text-black">Raiders</h3>
                                <span class="text-uppercase small country">Brazil</span>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="col-4 col-lg-4 text-center mb-4 mb-lg-0">
                          <div class="d-inline-block">
                            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">VS</span></div>
                              <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-none d-md-block">10 de septiembre / 7:30 pm</small></p>
                              <p class="mb-0"><small class="text-uppercase text-black font-weight-bold d-md-none">10-sep</small></p>
                          </div>
                        </div>

                        <div class="col-4 col-lg-4 text-center text-lg-right">
                          <div class="">
                            <div class="d-block d-lg-flex align-items-center">
                              <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                                <img src="<?php asset('vendor/sport/images/img_4_sq.jpg'); ?>" alt="Image" class="img-fluid">
                              </div>
                              <div class="text order-1 w-100">
                                <h3 class="h5 mb-0 text-black">Chiefs</h3>
                                <span class="text-uppercase small country">London</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- END row -->

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    





    <footer class="site-footer border-top">
        <p class="text-center">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <?= date('Y') ?> | <?= env('APP_NAME') ?>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>

    </footer>
  </div>

  <script src="<?php asset('vendor/sport/js/jquery-3.3.1.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/jquery-migrate-3.0.1.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/jquery-ui.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/popper.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/owl.carousel.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/jquery.stellar.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/jquery.countdown.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="<?php asset('vendor/sport/js/aos.js'); ?>"></script>

  <script src="<?php asset('vendor/sport/js/main.js', true); ?>"></script>
    
  </body>
</html>