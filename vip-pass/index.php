<?php
$currentLink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$homeLink = $currentLink . '/../../index.php';
$password = 'siopao';

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

<div class="row col-md-6 col-md-offset-3 col-xs-12">
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Example: Audio with no additional data ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <audio controls autoplay>
        <source src="file/love-team.mp3" type="audio/ogg"/>
        <source src="file/love-team.mp3" type="audio/mpeg"/>
        An html5-capable browser is required to play this audio.
    </audio>
</div>

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
                    <a class="page-scroll" href="#something">Something</a>
                </li>
                <li>
                    <a class="page-scroll" href="#paalala">Paalala</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
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
            <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>
            <p></p>
        </div>
    </div>
    <div class="header-bottom">
<!--        <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>-->
        <a href="#about" class="btn btn-primary btn-xl page-scroll">Kwentong #SJLenLoveTeam</a> <br/>
        <img src="img/wreath.png" height="80%" width="80%">
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
                <h2 class="section-heading">Ang Aming Kwento</h2>
                <h3 class="section-subheading text-muted">"Ang tanging pag-asa ko ay nasa tambalang ito."</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>October 2011</h4>
                                <h4 class="subheading">Chances for everyone, everywhere.</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Len:</b>  Nagkakilala kami sa isang maliit na opisina sa may Kalayaan Ave., QC. First job ko 'yun. First legit job naman ni SJ with TIN and all. Haha!</p>
                                <p class="text"><b>SJ:</b>  Thank you, RareJob!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/2.JPG" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>February 2012</h4>
                                <h4 class="subheading">UP Fair</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><b>SJ:</b> Nagpapapansin na si Len nang panahong 'to. Feeling ko talaga.</p>
                                <p class="text-muted"><b>Len:</b> Nagpapapansin na talaga si SJ 'nung time na 'to. Ginalingan sa UP fair perya. In fairness...</p>
                                <p class="text-muted"><b>Axel:</b> Arteee! Arf!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2013</h4>
                                <h4 class="subheading">Chinatown Date</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">  Binondo trip! Wala akong kasama kaya inaya ko si Len. *wink*</p>
                                <p class="text-muted">Len: Binondo trip! Wala naman akong gagawin sa bahay so sumama na lang ako kay SJ. *wink*</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/5.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>May 2013</h4>
                                <h4 class="subheading">Issues</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Len: Ano na kaya nangyari 'dun. Hindi na nagre-reply sa mga texts ko. Hmp. </p>
                                <p class="text-muted"><b>SJ:</b>  Teka, ready na ba ako sa commitment? Ready na ba ako financially, emotionally, at spiritually? </p>
                                <p class="text-muted">Len: Hmmmm. Kailangan kong i-guard ang heart ko. Ang labo na eh. Hindi kami pero parang kami. </p>
                                <p class="text-muted">Axel: At nag-pray sila separately... Arf! </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/6.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>March 2014</h4>
                                <h4 class="subheading">Love Team (It's Official)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><b>SJ:</b>  Sabi ni Lord at ni parents, "Lez do diz!" Kaya nilatag ko kay Len ang intentions at mga plano ko para sa amin. Like a real man!</p>
                                <p class="text-muted">Len: Sabi ni Lord, "OK!" Keri naman 'yung sinabi ni SJ pero magpakilala muna siya sa parents ko!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/7.JPG" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>December 2015</h4>
                                <h4 class="subheading">Oh my Gulay!</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><b>Axel:</b> Isang gabi sa Session Road...</p>
                                <p class="text-muted"><b>SJ:</b> Luluhod pa ba ako? Hehe.</p>
                                <p class="text-muted"><b>Len:</b> Hindi na. Yes na!</p>
                                <p class="text-muted"><b>Axel:</b> At sila ay na-engage nang gabing iyon. Arf!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="img/timeline/8.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>May 26, 2017</h4>
                                <h4 class="subheading">Ang Pag-iisang Dibdib!</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted"><b>SJ and Len:</b> THIS IS IT!!!</p>
                                <p class="text-muted"><b>Axel:</b> Arf!</p>
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
</section>


<section id="services" class="section-impormasyon">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Mahalagang Impormasyon</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-calendar icon-impormasyon sr-icons"></i>
                    <!--<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>-->
                    <h3>Petsa: <b>May 26, 2017</b></h3>
                    <p class="text">Ito ay araw ng Biyerness kaya't 'wag kalimutang mag-file ng leave.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-clock-o icon-impormasyon sr-icons"></i>
                    <h3>Oras: <b>4:00PM - 8:00PM</b></h3>
                    <p class="text">Magsisimula ang ceremony ng eksaktong alas-4 ng hapon. Huwag male-late!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-map-marker icon-impormasyon sr-icons"></i>
                    <h3>Lugar: <b>14 Four Cafe</b></h3>
                    <p class="text">144 Magnolia Lane, Barangay San Isidro, Gregoria Heights Subdivision, Taytay,
                        Rizal</p>
                    <a href="#" data-toggle="modal" data-target="#map">(I-click para sa mapa)</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-heart text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-hashtag icon-impormasyon sr-icons"></i>
                    <h3>#<b>SJLenLoveTeam</b></h3>
<!--                    <p class="text-muted"></p>-->
                    <p class="text">Maari lamang gamitin ang hastag na ito sa tuwing magpo-post ng tungkol sa
                        aming kasal
                        sa mga SNS.</p>
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
            </div>
        </div>
    </div>

</section>

<aside class="bg-dark" id="something">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>I-Download ang 'SOMETHING'</h2>
            <!--            <a href="file/MintWorks-RuleBook-Final.pdf" class="btn btn-default btn-xl sr-button" target="_blank">Download</a>-->
            <a href="img/axel-ig.JPG" class="btn btn-default btn-xl sr-button" target="_blank">Download</a>
        </div>
    </div>
</aside>

<section class="section-paalala" id="paalala">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Mga ilang PAALALA</h2>
<!--                <hr class="primary">-->
                <p>I-click ang ICONs para sa karagdagang detalye</p>
                <hr class="paalala">
            </div>
            <div class="col-lg-2 col-lg-offset-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#kasuotanModal"><i class="fa fa-black-tie icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">KASUOTAN</div>
                <div class="paalala-kasuotan-content">
                <p class="text-muted">"Bohemian" o "Boho" ang nais sana naming tema ng kasuotan ng mga bisita.</p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#kasuotanModal">Kasuotan</button>-->
                </div>
            </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#regaloModal"><i class="fa fa-gift icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">REGALO </div>
                <p class="text-muted">
                    Ang pinakamagandang regalo ay ang iyong pagdalo. Char!
                </p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#regaloModal">Regalo</button>-->

            </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#faqModal"><i class="fa fa-question-circle icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">FAQs</div>
                <p class="text-muted">"Huwag mahihiyang magtanong, kung may..." </p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#faqModal">FAQs</button>-->
            </div>
            <div class="col-lg-2 text-center">
<!--                <hr class="paalala">-->
                <a data-toggle="modal" data-target="#reminderModal"><i class="fa fa-info-circle icon-paalala fa-5x sr-contact"></i></a>
                <div class="paalala-category">REMINDERS</div>
                <p class="text-muted">"_____"</p>
<!--                <button type="button" class="btn btn-default btn-l sr-button" data-toggle="modal" data-target="#reminderModal">Reminders</button>-->
            </div>
        </div>
    </div>

    <!-- MODAL KASUOTAN -->
    <div class="modal fade" id="kasuotanModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-black-tie icon-paalala fa-2x sr-contact"></i>
                    KASUOTAN
                </div>
                <div class="modal-body">
                    Ang Boho-style na pananamit ay binubuo ng dalawang mahalagang katangian - stylish at komportableng suotin. Sa madaling salita, halos huling linggo ng summer ang araw ng aming kasal kaya't kung maaari ay presko ang inyong damit sa araw na iyon. Ito ang ilang mga larawan ng mga Boho-style outfits na pwede niyong gayahin at gawing peg para sa inyong magiging damit. Maligayang pagmi-mix and match!
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

    <!-- MODAL REGALO -->
    <div class="modal fade" id="regaloModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-gift icon-paalala fa-2x sr-contact"></i>
                    REGALO
                </div>
                <div class="modal-body">
                    Hindi required magbigay ng regalo. Kung gusto mo talaga kaming regaluhan, no judging naman kung ano ang nais mong ibigay. Tandaan na ang pinakamahalagang bagay para sa amin ay ang pagdalo mo sa aming munting pagdiriwang. Yeheees!
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
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-info-circle icon-paalala fa-2x sr-contact"></i>
                    REMINDERS
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            Siguraduhing suot niyo ang inyong all-access pass sa araw ng aming kasal. Para feel na feels! Please!
                        </li>
                        <li>
                            Ang password ng aming blog-style wedding invitation ay for your eyes only. Paki-blur na lang ang parte ng website at password kung nais niyong mag-post ng inyong VIP pass sa inyong SNS. Sikat!
                        </li>
                        <li>
                            Upang maiwasang mapuno ang ating allotted parking lot, kung maari sana ay gawin niyong option ang mag-car pool imbes na hiwa-hiwalay ang paggamit ng sasakyan papunta sa venue. Kung kailangan niyo talaga magdala ng sariling sasakyan, siyempre OK lang naman din.
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
            <div class="modal-content">
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

                    <!-- MODAL KASUOTAN -->
                    <div class="modal fade" id="kasuotanModal" role="dialog">
                        <div class="modal-dialog modal-m">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <i class="fa fa-black-tie icon-paalala fa-2x sr-contact"></i>
                                    KASUOTAN
                                </div>
                                <div class="modal-body">
                                    Ang Boho-style na pananamit ay binubuo ng dalawang mahalagang katangian - stylish at komportableng suotin. Sa madaling salita, halos huling linggo ng summer ang araw ng aming kasal kaya't kung maaari ay presko ang inyong damit sa araw na iyon. Ito ang ilang mga larawan ng mga Boho-style outfits na pwede niyong gayahin at gawing peg para sa inyong magiging damit. Maligayang pagmi-mix and match!
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

                    <!-- MODAL REGALO -->
                    <div class="modal fade" id="regaloModal" role="dialog">
                        <div class="modal-dialog modal-m">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <i class="fa fa-gift icon-paalala fa-2x sr-contact"></i>
                                    REGALO
                                </div>
                                <div class="modal-body">
                                    Hindi required magbigay ng regalo. Kung gusto mo talaga kaming regaluhan, no judging naman kung ano ang nais mong ibigay. Tandaan na ang pinakamahalagang bagay para sa amin ay ang pagdalo mo sa aming munting pagdiriwang. Yeheees!
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
                <h2 class="section-heading">Contact Details!</h2>
                <hr class="primary">
                <p>The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the lazy dog!</p>
            </div>
            <div class="col-lg-2 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>0915-253-3212<br/>
                    0917-366-3908</p>
            </div>
            <div class="col-lg-2 text-center">
                <i class="fa fa-facebook-square fa-3x sr-contact"></i>
                <p><a href="https://www.facebook.com/sj.balatan">sj.balatan</a><br/>
                    <a href="https://www.facebook.com/eileen.licopit ">eileen.licopit</a></p>
            </div>
            <div class="col-lg-2 text-center">
                <i class="fa fa-instagram fa-3x sr-contact"></i>
                <p><a href="https://www.instagram.com/__isji">__isji</a><br/>
                    <a href="https://www.instagram.com/lenlicopss/ ">lenlicopss</a></p>
            </div>
            <div class="col-lg-2 text-center">
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
