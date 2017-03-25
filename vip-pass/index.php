<?php
$currentLink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$homeLink = $currentLink . '/../../index.php';
$password = 'axel';

$hashTag = '#SJLenLoveTeam';

if (!isset($_POST["homePassword"])) {
    header('Location: ' . $homeLink);
} else {
    if ($_POST["homePassword"] != $password) {
        header('Location: ' . $homeLink);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SJ + Len</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
          rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <!--<link href="css/creative.min.css" rel="stylesheet">-->
    <link href="css/creative.css" rel="stylesheet">

    <!-- Bootstrap 3 player -->
    <link href="css/bootstrap3_player.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<!--<div class="row col-md-6 col-md-offset-3 col-xs-12">-->
<!--
<!--    <audio controls autoplay>-->
<!--        <source src="file/love-team.mp3" type="audio/ogg"/>-->
<!--        <source src="file/love-team.mp3" type="audio/mpeg"/>-->
<!--        An html5-capable browser is required to play this audio.-->
<!--    </audio>-->
<!--</div>-->

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Ang Pag-iisang Dibdib</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">Kwento</a>
                </li>
                <li>
                    <a class="page-scroll" href="#services">Impormasyon</a>
                </li>
                <li>
                    <a class="page-scroll" href="#surprise">Sorpresa</a>
                </li>
                <li>
                    <a class="page-scroll" href="#paalala">Paalala</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
<!--            <img src="img/wreath3.png" height="90%" width="90%">-->

            <h1 id="homeHeading" class="sj">SJ</h1>
            <h1 id="homeHeading" class="len">Len </h1>
<!--            <h2 id="homeHeading" class="fam">Family and friends, this is it.</h2>-->
            <h2 id="homeHeading" class="fam">"Sa mundong pabago-bago, pag-ibig ko ay totoo."</h2>
            <p></p>
        </div>
    </div>
    <div class="header-bottom">
<!--        <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>-->
        <a href="#about" class="btn btn-primary btn-xl page-scroll">Kwentong <?php echo $hashTag?></a> <br/>
        <img class="wreath" src="img/wreath.png" height="80%" width="80%">
    </div>
</header>

<!--<section class="section-kwento" id="about">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-lg-8 col-lg-offset-2 text-center">-->
<!--                <h2 class="section-heading">Ang aming kwento!</h2>-->
<!--                <p>The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the-->
<!--                    lazy dog! The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the lazy-->
<!--                    dog!</p>-->
<!--                <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Detalye ng Kasal</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!-- About Section -->
<section class="section-kwento" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-header header-kwento">Ang Aming Kwento</h2>
                <h3 class="section-subheader subheader-kwento text">"Ang tanging pag-asa ko ay nasa tambalang ito."</h3>
                <hr class="header-kwento">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento1">
                                <img class="img-circle img-responsive" src="img/timeline/1.jpg" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">October 2011</h4>
                                <h4 class="timeline-subheader">Chances for everyone, everywhere.</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Len:</b>  Nagkakilala kami sa isang maliit na opisina sa may Kalayaan Ave., QC. First job ko 'yun. First legit job naman ni SJ with TIN and all. Haha!</p>
                                <p class="text"><b>SJ:</b>  Thank you, RareJob!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento2">
                                <img class="img-circle img-responsive" src="img/timeline/2.JPG" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">February 2012</h4>
                                <h4 class="timeline-subheader">UP Fair</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b> Nagpapapansin na si Len nang panahong 'to. Feeling ko talaga.</p>
                                <p class="text"><b>Len:</b> Nagpapapansin na talaga si SJ 'nung time na 'to. Ginalingan sa UP fair perya. In fairness...</p>
                                <p class="text"><b>Axel:</b> Arteee! Arf!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento4">
                                <img class="img-circle img-responsive" src="img/timeline/4.jpg" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">March 2013</h4>
                                <h4 class="timeline-subheader">Chinatown Date</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b>  Binondo trip! Wala akong kasama kaya inaya ko si Len. *wink*</p>
                                <p class="text"><b>Len:</b> Binondo trip! Wala naman akong gagawin sa bahay so sumama na lang ako kay SJ. *wink*</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento5">
                                <img class="img-circle img-responsive" src="img/timeline/5.jpg" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">May 2013</h4>
                                <h4 class="timeline-subheader">Issues</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Len:</b> Ano na kaya nangyari 'dun. Hindi na nagre-reply sa mga texts ko. Hmp. </p>
                                <p class="text"><b>SJ:</b>  Teka, ready na ba ako sa commitment? Ready na ba ako financially, emotionally, at spiritually? </p>
                                <p class="text"><b>Len:</b> Hmmmm. Kailangan kong i-guard ang heart ko. Ang labo na eh. Hindi kami pero parang kami. </p>
                                <p class="text"><b>Axel:</b> At nag-pray sila separately... Arf! </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento6">
                                <img class="img-circle img-responsive" src="img/timeline/6.jpg" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">March 2014</h4>
                                <h4 class="timeline-subheader">Love Team (It's official.)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b>  Sabi ni Lord at ni parents, "Lez do diz!" Kaya nilatag ko kay Len ang intentions at mga plano ko para sa amin. Like a real man!</p>
                                <p class="text"><b>Len:</b> Sabi ni Lord, "OK!" Keri naman 'yung sinabi ni SJ pero magpakilala muna siya sa parents ko!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento7">
                                <img class="img-circle img-responsive" src="img/timeline/7.JPG" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">December 2015</h4>
                                <h4 class="timeline-subheader">Oh my Gulay!</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Axel:</b> Isang gabi sa Session Road...</p>
                                <p class="text"><b>SJ:</b> Luluhod pa ba ako? Hehe.</p>
                                <p class="text"><b>Len:</b> Hindi na. Yes na!</p>
                                <p class="text"><b>Axel:</b> At sila ay na-engage nang gabing iyon. Arf!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <a href="#" data-toggle="modal" data-target="#kwento8">
                                <img class="img-circle img-responsive" src="img/timeline/8.jpg" alt="">
                            </a>
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-header">May 26, 2017</h4>
                                <h4 class="timeline-subheader">Ang Pag-iisang Dibdib!</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ and Len:</b> THIS IS IT!!!</p>
                                <p class="text"><b>Axel:</b> Arf!</p>
                            </div>
                        </div>
                    </li>
<!--                    <li class="timeline-inverted">-->
<!--                        <div class="timeline-image">-->
<!--                            <h4>READY NA-->
<!--                                <br>PARA SA-->
<!--                                <br>2017!</h4>-->
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>

<!--    MODAL KWENTO-->
    <div id="kwento1" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/1.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento2" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/2.JPG" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento3" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/3.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento4" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/4.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento5" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/5.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento6" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/6.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento7" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/7.JPG" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div id="kwento8" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/timeline/8.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


</section>


<section id="services" class="section-impormasyon">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-header header-impormasyon">Mahalagang Impormasyon</h2>
                <h3 class="section-subheader subheader-impormasyon text">"Sagutin mo lang ako aking sinta'y walang humpay na ligaya."</h3>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container impormasyon-content">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-calendar icon-impormasyon sr-icons"></i>
                    <!--<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>-->
                    <h3>Petsa: <b>May 26, 2017</b></h3>
                    <p class="text"><mark>Ito ay araw ng Biyerness kaya't 'wag kalimutang mag-file ng leave.</mark></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-clock-o icon-impormasyon sr-icons"></i>
                    <h3>Oras: <b>4:00PM - 8:00PM</b></h3>
                    <p class="text"><mark>Magsisimula ang ceremony ng eksaktong alas-4 ng hapon. Huwag male-late!</mark></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-map-marker icon-impormasyon sr-icons"></i>
                    <h3>Lugar: <b>14 Four Cafe</b></h3>
                    <p class="text"><mark>144 Magnolia Lane, Barangay San Isidro, Gregoria Heights Subdivision, Taytay,
                        Rizal</mark></p>
                    <a href="#" data-toggle="modal" data-target="#map" class="paalala-content">(I-click para sa mapa)</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-heart text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-hashtag icon-impormasyon sr-icons"></i>
                    <h3><b><?php echo $hashTag?></b></h3>
<!--                    <p class="text-muted"></p>-->
                    <p class="text"><mark>Maari lamang gamitin ang hastag na ito sa tuwing magpo-post ng tungkol sa
                        aming kasal
                        sa mga SNS.</mark></p>
                </div>
            </div>
        </div>
    </div>

    <div id="map" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="img/map.jpg" class="img-responsive">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</section>

<aside class="bg-dark" id="surprise">
    <div class="container text-center">
        <div class="call-to-action">
            <h2 class="section-header header-suprise">Break ka muna</h2>
            <h3 class="section-subheader subheader-surprise text">"Ang sarap maligaw sa ating kwentuhan."</h3>
            <!--            <a href="file/MintWorks-RuleBook-Final.pdf" class="btn btn-default btn-xl sr-button" target="_blank">Download</a>-->
            <br/>
            <a href="img/axel-ig.jpg" class="btn btn-default btn-xl sr-button" target="_blank">Surprise me</a>
        </div>
    </div>
</aside>

<section class="section-paalala" id="paalala">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-header">Mga PAALALA</h2>
<!--                <hr class="primary">-->
                <div class="subheader-paalala"
                    <p>I-click ang <b><i>ICONS</i></b> para sa karagdagang detalye</p>
                </div>
                <hr class="paalala">
            </div>
            <div class="col-lg-2 col-lg-offset-2 text-center">
<!--                <hr class="paalala">-->
                <a href="#" data-toggle="modal" data-target="#kasuotanModal">
                    <i class="fa fa-black-tie icon-paalala fa-5x sr-contact"></i>
                </a>
<!--                <a href="#" data-toggle="modal" data-target="#kwento2">-->
<!--                    <img class="img-circle img-responsive" src="img/timeline/2.JPG" alt="">-->
<!--                </a>-->
                <div class="paalala-category">KASUOTAN</div>
                <div class="paalala-content">
                <p class="text">"Bohemian" o "Boho" ang tema ng aming kasal.</p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#kasuotanModal">Kasuotan</button>-->
                </div>
            </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#regaloModal"><i class="fa fa-gift icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">REGALO </div>
                <div class="paalala-content">
                <p class="text">
                    Ang pinakamagandang regalo ay ang iyong pagdalo. Char!
                </p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#regaloModal">Regalo</button>-->
                </div>
            </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#faqModal"><i class="fa fa-question-circle icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">FAQs</div>
                <div class="paalala-content">
                <p class="text">"Huwag mahihiyang magtanong, kung may..." </p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#faqModal">FAQs</button>-->
                </div>
                </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#reminderModal"><i class="fa fa-info-circle icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">REMINDERS</div>
                <div class="paalala-content">
                <p class="text">Bawal ang makakalimutin.</p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#reminderModal">Reminders</button>-->
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL KASUOTAN -->
    <div class="modal fade" id="kasuotanModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content impormasyon-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-black-tie icon-paalala fa-2x sr-contact"></i>
                    KASUOTAN
                </div>
                <div class="modal-body">
                    Ang Boho-style na pananamit ay binubuo ng dalawang mahalagang katangian - stylish at komportableng suotin. Sa madaling salita, halos huling linggo ng summer ang araw ng aming kasal kaya't kung maaari ay presko ang inyong damit sa araw na iyon. Ito ang ilang mga larawan ng mga Boho-style outfits na pwede niyong gayahin at gawing peg para sa inyong magiging damit. Maligayang pagmi-mix and match!
                </div>



<!--
<!--                <div class="col-md-12 hidden-sm hidden-xs" id="slider-thumbs">-->
<!---->
<!--
<!--                    <ul class="list-inline">-->
<!--                        <li> <a id="carousel-selector-0" class="selected">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=one" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-1">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=two" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-2">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=three" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-3">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=four" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-4">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=five" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-5">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=six" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-6">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=seven" class="img-responsive">-->
<!--                            </a></li>-->
<!--                        <li> <a id="carousel-selector-7">-->
<!--                                <img src="http://placehold.it/80x60&amp;text=eight" class="img-responsive">-->
<!--                            </a></li>-->
<!--                    </ul>-->
<!---->
<!--                </div>-->


                <!-- main slider carousel -->
                <div class="row">
                    <div class="col-md-12" id="slider">

                        <div class="col-md-12" id="carousel-bounding-box">
                            <div id="myCarousel" class="carousel slide">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item center-block" data-slide-number="0">
                                        <img src="img/kasuotan/M1.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="1">
                                        <img src="img/kasuotan/M2.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="2">
                                        <img src="img/kasuotan/M3.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="3">
                                        <img src="img/kasuotan/M4.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="4">
                                        <img src="img/kasuotan/F1.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="5">
                                        <img src="img/kasuotan/F2.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="6">
                                        <img src="img/kasuotan/F3.jpg" class="img-responsive">
                                    </div>
                                    <div class="item" data-slide-number="7">
                                        <img src="img/kasuotan/F4.jpg" class="img-responsive">
                                    </div>
                                </div>
                                <!-- main slider carousel nav controls --> <a class="carousel-control left" href="#myCarousel" data-slide="prev">‹</a>

                                <a class="carousel-control right" href="#myCarousel" data-slide="next">›</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--/main slider carousel-->

                <div class="modal-wreath">
                    <img src="img/wreath.png" height="25%" width="25%" align="center">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL REGALO -->
    <div class="modal fade" id="regaloModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content impormasyon-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-gift icon-paalala fa-2x sr-contact"></i>
                    REGALO
                </div>
                <div class="modal-body">
                    Hindi required magbigay ng regalo. Kung gusto mo talaga kaming regaluhan, no judging naman kung ano ang nais mong ibigay. Cash man o gamit ay maa-appreciate namin. Tandaan na ang pinakamahalagang bagay para sa amin ay ang pagdalo mo sa aming munting pagdiriwang. Yeheees!
                </div>
                <div class="modal-wreath">
                    <img src="img/wreath.png" height="25%" width="25%" align="center">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL REMINDERs -->
    <div class="modal fade" id="reminderModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content impormasyon-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-info-circle icon-paalala fa-2x sr-contact"></i>
                    REMINDERS
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            Siguraduhing suot niyo ang inyong all-access pass sa araw ng aming kasal. Para feel na feels! Please! <br/>
                        </li>
                        <li>
                            Ang password ng aming blog-style wedding invitation ay for your eyes only. Paki-blur na lang ang parte ng website at password kung nais niyong mag-post ng inyong VIP pass sa inyong SNS. Sikat!
                        </li>
                        <li>
                            Upang maiwasang mapuno ang ating allotted parking lot, kung maari sana ay gawin niyong option ang mag-car pool imbes na hiwa-hiwalay ang paggamit ng sasakyan papunta sa venue. Kung kailangan niyo talaga magdala ng sariling sasakyan, siyempre OK lang naman din.
                        </li>
                        <li>
                            Prayers for sunshine!
                        </li>
                    </ol>
                </div>
                <div class="modal-wreath">
                    <img src="img/wreath.png" height="25%" width="25%" align="center">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL FAQs -->
    <div class="modal fade" id="faqModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content impormasyon-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-info-circle icon-paalala fa-2x sr-contact"></i>
                    FAQs
                </div>
                <div class="modal-body">
                    <div class="panel-group" id="faq">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#one">
                                        May reception ba? Iisa lang kasi 'yung nakalagay na venue.
                                    </a>
                                </h4>
                            </div>
                            <div id="one" class="panel-collapse collapse">
<!--                            <div id="one" class="panel-collapse collapse in">-->
                                <div class="panel-body">
                                    Ang ceremony at salusalo ay parehong gaganapin sa iisang lugar. Hindi na natin kailangang lumipat ng venue para sa kainan pagkatapos ng ceremony. Chibugan na agad pagkatapos ng I do's!
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#two">
                                        Pwede bang mag-Uber papunta sa venue?
                                    </a>
                                </h4>
                            </div>
                            <div id="two" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Pwedeng-pwede! Na-try na namin ito gawin once kaya medyo sure naman kami na pwede rin kayo mag-Uber papunta sa venue. Hindi lang namin sure kung pwede ang GrabCar or GrabTaxi. Hehe. Sorry, biased. :)
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#three">
                                        Mayroon bang parking lot sa venue?
                                    </a>
                                </h4>
                            </div>
                            <div id="three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Mayroon! According sa isang staff ng venue, pwedeng mag-park ng maximum of 20 cars sa palibot ng lugar.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#four">
                                        Hanggang ano'ng oras ang reception?
                                    </a>
                                </h4>
                            </div>
                            <div id="four" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Hanggang 8:00PM ang aming booking sa venue.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#five">
                                        Pwede bang umuwi nang mas maaga?
                                    </a>
                                </h4>
                            </div>
                            <div id="five" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Oo naman. No hard feelings naman, friend, kung kailangan mong umuwi nang maaga.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#six">
                                        Pwede bang magdala ng plus 1?
                                    </a>
                                </h4>
                            </div>
                            <div id="six" class="panel-collapse collapse">
                                <div class="panel-body">
                                    Sana maintidihan niyo na kung sino lang ang nakatanggap ng imbitasyon ay siya lamang ang maaring dumalo. Gusto man namin kayong magsama ng ibang kaibigan o kakilala, ikinalulungkot namin na baka hindi na tayo magkasya sa venue. Hugs!
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-wreath">
                        <img src="img/wreath.png" height="25%" width="25%" align="center">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!--<section class="no-padding" id="portfolio">-->
<!--    <div class="container-fluid">-->
<!--        <div class="row no-gutter popup-gallery">-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--            <div class="col-lg-4 col-sm-6">-->
<!--                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">-->
<!--                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">-->
<!--                    <div class="portfolio-box-caption">-->
<!--                        <div class="portfolio-box-caption-content">-->
<!--                            <div class="project-category text-faded">-->
<!--                                Category-->
<!--                            </div>-->
<!--                            <div class="project-name">-->
<!--                                Project Name-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



<aside class="bg-dark" id="contact">
    <div class="container">

            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3 class="section-header-tawag">Tawag. PM. Email.</h3>
                <hr class="primary">
<!--                <p>The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the lazy dog!</p>-->
            </div>
            <div class="col-lg-2 col-lg-offset-2 text-center impormasyon-content">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>0915-253-3212<br/>
                    0917-366-3908</p>
            </div>
            <div class="col-lg-2 text-center impormasyon-content">
                <i class="fa fa-facebook-square fa-3x sr-contact"></i>
                <p><a href="https://www.facebook.com/sj.balatan">sj.balatan</a><br/>
                    <a href="https://www.facebook.com/eileen.licopit ">eileen.licopit</a></p>
            </div>
            <div class="col-lg-2 text-center impormasyon-content">
                <i class="fa fa-instagram fa-3x sr-contact"></i>
                <p><a href="https://www.instagram.com/__isji">__isji</a><br/>
                    <a href="https://www.instagram.com/lenlicopss/ ">lenlicopss</a></p>
            </div>
            <div class="col-lg-2 text-center impormasyon-content">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:sj.balatan@gmail.com">sj.balatan@gmail.com</a><br/>
                    <a href="mailto:eileenlicopit@gmail.com ">eileenlicopit@gmail.com</a></p>
            </div>

    </div>
</aside>

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="js/creative.min.js"></script>

<!-- Bootstrap 3 player -->
<script src="js/bootstrap3_player.js"></script>

</body>

</html>
