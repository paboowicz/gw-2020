<!DOCTYPE html>
<html lang="pl">
<head>
    <title>Giełda Wschód 2020 </title>
    <!-- test rmpgit -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <meta name="description" content="Giełda Wschód to największa towarowo-samochodowa giełda w Polsce położona bezpośrednio przy skrzyżowaniu drogi krajowej 77 i autostrady A4 (węzeł Przemyśl). Powierzchnia Giełdy Wschód to ponad 50ha. " />

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./dist/css/slick.css">
    <link rel="stylesheet" href="./dist/css/simplelightbox.min.css">
    <link rel="stylesheet" href="./dist/css/main.min.css">
    <link rel="stylesheet" href="./dist/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="./dist/js/slick.min.js"></script>
<!--    <script src="dist/js/scripts.min.js"></script>-->
    <script src="./dist/js/simple-lightbox.min.js"></script>
    <script src="./src/js/main.js"></script>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<!--     <script src="https://cdnjs.cloudflare.com/ajax/lib/s/simplelightbox/1.11.1/simple-lightbox.js"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/1.11.1/simplelightbox.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-166457108-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-166457108-1');
    </script>



    <!--<script type="text/javascript" src="../../dist/js/script.js"></script>-->

</head>
<body>


<header class="container main-header">
    <div class="row">
        <div class="col-12 col-sm-6 col-lg-auto d-flex align-items-center justify-content-center justify-content-sm-start">
            <a href="index.php"><img src="./src/assets/img/logo.png" alt="Logo"></a>
        </div>
        <div class="col-12 col-sm-6 col-lg-auto pt-3 pt-sm-0 d-flex flex-column justify-content-center align-items-center align-content-sm-start">
            <h3 class="heading-3">1 SIERPNIA 5.00 : 14.00 <br> SKOŁOSZÓW </h3>
            <small>Pozostało <b id="counter"></b></small>
        </div>
        <div class="col-12 col-lg pt-3 pt-md-0">
            <div class="row d-flex justify-content-end">
                <div class="col-md-6 col-lg-12 col-xl-auto d-flex align-items-center justify-content-end">
                    <small class="mr-3">ORGANIZATOR:</small>
                    <img src="./src/assets/img/_update/organizator.png" alt="SAWA EXPO">
                </div>
				<div class="col-6 col-md-auto d-flex align-items-center justify-content-end">
                   <!-- <small class="mr-3">Język</small> -->
                    <select onchange="location = this.value;" class="form-control form-control-sm my-select" >
                        <option value="">PL</option>
						<!-- <option value="/ua">UA</option>  -->
                        
                    </select>
                </div>
 <!--               <div class="col-6 col-md-auto d-flex align-items-center justify-content-end"> -->
<!--                    <small class="mr-3">Język</small>-->
<!--                    <select name="lang" id="lang-select" class="form-control form-control-sm my-select">-->
<!--                        <option value="pl">PL</option>-->
<!--                        <option value="en">EN</option>-->
<!--                    </select>-->
<!--                </div>  -->
                <div class="col-6 col-md-auto d-flex align-items-center">
                    <a href="https://www.facebook.com/GieldaWschod" target="_blank" class="icon-circle mr-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.youtube.com/channel/UCuCU9C1ozVR60ASLK4T1vjw" target="_blank" class="icon-circle"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="row d-flex justify-content-end pt-3">
                <div class="col-md-6 col-lg-12 col-xl-auto d-flex align-items-center justify-content-center justify-content-sm-end">
                    <ul>
<!--                        <li>-->
<!--                            <a href="#">Aktualności</a>-->
<!--                        </li>-->
<!--                        <li>-->
<!--                            <a href="#">Dla mediów</a>-->
<!--                        </li>-->
                        <li>
                            <a href="kontakt.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-auto d-flex align-items-center justify-content-center justify-content-sm-end">
<!--                    <div class="search-input">-->
<!--                        <input type="text" placeholder="Wpisz szukaną frazę" class="form-control">-->
<!--                        <button class="button-primary"><i class="fas fa-search"></i></button>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="container-fluid main-nav">
    <section class="container">
        <div class="row">
            <div class="col">
                <ul>
                    <li><span>O GIEŁDZIE <i class="fa fa-chevron-down ml-3"></i></span>
                        <ul>
                            <li>
                                <a href="o-gieldzie.php">O GIEŁDZIE</a>
                            </li>
                            <!-- <li>
                                <a href="pismo-do-wojtow.php">PISMO DO WÓJTÓW</a>
                            </li> -->
                            <li>
                                <a href="galeria.php">GALERIA</a>
                            </li>
                            <li>
                                <a href="plakat.php">PLAKAT</a>
                            </li>
                        </ul>
                    </li>
                    <li><span>DLA SPRZEDAWCÓW <i class="fa fa-chevron-down ml-3"></i></span>
                        <ul>
                           <!--  <li>
                               <a href="zgloszenia.php">ZGŁOSZENIE</a>
                           </li> -->
                            <li>
                                <a href="regulamin.php">REGULAMIN</a>
                            </li>
                            <li>
                                <a href="cennik.php">CENNIK</a>
                            </li>
        					 <li>
                                 <a href="plan-gieldy.php">PLAN GIEŁDY</a>
                             </li>
                            <li>
                                <a href="kontakt.php">DOJAZD</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</nav>











