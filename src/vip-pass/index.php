<?php
$currentLink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$homeLink = $currentLink . '/../../index.php';
$passwordPH = 'pizza';
$passwordEN = 'sushi';
$hashTag = '#SJLenLoveTeam';
$websiteMode = null;

if (!isset($_POST["homePassword"])) {
    header('Location: ' . $homeLink);
} else {

    if ($_POST["homePassword"] == $passwordPH) {
        //$str = file_get_contents($currentLink . "/../content/filipino.json");
        $str = file_get_contents("content/filipino.json");
        $websiteMode = "PH";
    } elseif ($_POST["homePassword"] == $passwordEN) {
        //$str = file_get_contents($currentLink . "/../content/english.json");
        $str = file_get_contents("content/english.json");
        $websiteMode = 'EN';
    }  elseif ($_POST["homePassword"] != $passwordPH || $_POST["homePassword"] != $passwordEN) {
        header('Location: ' . $homeLink);
    }
    $json = json_decode($str, true);
}

//echo '<pre>' . print_r($json, true) . '</pre>';
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

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top" style="vertical-align: middle;"><?php echo $json['menu']['title']?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about"><?php echo $json['menu']['menu1']?></a>
                </li>
                <li>
                    <a class="page-scroll" href="#services"><?php echo $json['menu']['menu2']?></a>
                </li>
                <li>
                    <a class="page-scroll" href="#surprise"><?php echo $json['menu']['menu3']?></a>
                </li>
                <li>
                    <a class="page-scroll" href="#paalala"><?php echo $json['menu']['menu4']?></a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact"><?php echo $json['menu']['menu5']?></a>
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
            <h2 id="homeHeading" class="fam"><?php echo $json['home']['message']?></h2>
            <p></p>
        </div>
    </div>
    <div class="header-bottom">
        <!--        <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>-->
        <a href="#about" class="btn btn-primary btn-xl page-scroll"><?php echo $json['home']['hashtag']?></a> <br/>
        <img class="wreath" src="img/wreath.png" height="80%" width="80%">
    </div>
</header>

<!-- About Section -->
<section class="section-kwento" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-header header-kwento"><?php echo $json['kwento']['header']?></h2>
                <h3 class="section-subheader subheader-kwento text"><?php echo $json['kwento']['message']?></h3>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['1_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['1_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['1_len']?></p>
                                <p class="text"><b>SJ:</b> <?php echo $json['kwento']['1_sj']?></p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['2_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['2_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b> <?php echo $json['kwento']['2_sj']?>
                                </p>
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['2_len']?></p>
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['2_axel']?></p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['3_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['3_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b>  <?php echo $json['kwento']['3_sj']?></p>
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['3_len']?></p>
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['3_axel']?></p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['4_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['4_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['4_len_1']?> </p>
                                <p class="text"><b>SJ:</b> <?php echo $json['kwento']['4_sj']?></p>
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['4_len_2']?> </p>
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['4_axel']?> </p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['5_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['5_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ:</b>  <?php echo $json['kwento']['5_sj']?></p>
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['5_len']?> </p>
                              <p class="text"><b>Axel:</b> <?php echo $json['kwento']['5_axel']?> </p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['6_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['6_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['6_axel_1']?></p>
                                <p class="text"><b>SJ:</b> <?php echo $json['kwento']['6_sj']?></p>
                                <p class="text"><b>Len:</b> <?php echo $json['kwento']['6_len']?></p>
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['6_axel_2']?></p>
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
                                <h4 class="timeline-header"><?php echo $json['kwento']['7_date']?></h4>
                                <h4 class="timeline-subheader"><?php echo $json['kwento']['7_title']?></h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text"><b>SJ and Len:</b> <?php echo $json['kwento']['7_sjlen']?></p>
                                <p class="text"><b>Axel:</b> <?php echo $json['kwento']['7_axel']?></p>
                            </div>
                        </div>
                    </li>
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
                <h2 class="section-header header-impormasyon"><?php echo $json['impormasyon']['header']?></h2>
                <h3 class="section-subheader subheader-impormasyon text"><?php echo $json['impormasyon']['message']?></h3>
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
                    <h3><?php echo $json['impormasyon']['date_header']?>: <b><?php echo $json['impormasyon']['date']?></b></h3>
                    <p class="text">
                        <mark><?php echo $json['impormasyon']['date_notes']?></mark>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-clock-o icon-impormasyon sr-icons"></i>
                    <h3><?php echo $json['impormasyon']['time_header']?>: <b><?php echo $json['impormasyon']['time']?></b></h3>
                    <p class="text">
                        <mark><?php echo $json['impormasyon']['time_notes']?></mark>
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-map-marker icon-impormasyon sr-icons"></i>
                    <h3><?php echo $json['impormasyon']['place_header']?>: <b><?php echo $json['impormasyon']['place']?></b></h3>
                    <p class="text">
                        <mark><?php echo $json['impormasyon']['place_notes']?> </mark>
                    </p>
                    <mark>
                    <a href="#" data-toggle="modal" data-target="#map" class="paalala-content">
                        <b><?php echo $json['impormasyon']['place_map']?></b>
                    </a>
                    </mark>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-heart text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-hashtag icon-impormasyon sr-icons"></i>
                    <h3><b><?php echo $hashTag ?></b></h3>
                    <!--                    <p class="text-muted"></p>-->
                    <p class="text">
                        <mark><?php echo $json['impormasyon']['hashtag_notes']?> </mark>
                    </p>
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
            <h2 class="section-header header-suprise"><?php echo $json['sorpresa']['header']?></h2>
            <h3 class="section-subheader subheader-surprise text"><?php echo $json['sorpresa']['message']?></h3>
            <!--            <a href="file/MintWorks-RuleBook-Final.pdf" class="btn btn-default btn-xl sr-button" target="_blank">Download</a>-->
            <br/>
            <a href="img/axel-ig.jpg" class="btn btn-default btn-xl sr-button" target="_blank"><?php echo $json['sorpresa']['button']?></a>
        </div>
    </div>
</aside>

<section class="section-paalala" id="paalala">
    <div class="container-fluid text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-header"><?php echo $json['paalala']['header']?></h2>
                <div class="subheader-paalala"
                <p><?php echo $json['paalala']['header_notes']?></p>
            </div>
            <hr class="paalala">
        </div>
        <div class="col-lg-2 col-lg-offset-2 text-center">
            <a href="#" data-toggle="modal" data-target="#kasuotanModal">
                <i class="fa fa-black-tie icon-paalala fa-5x sr-contact"></i>
            </a>
            <div class="paalala-category"><?php echo $json['paalala']['kasuotan_title']?></div>
            <div class="paalala-content">
                <p class="text"><?php echo $json['paalala']['kasuotan_notes']?></p>
            </div>
        </div>
        <div class="col-lg-2 text-center">
            <a href="#" data-toggle="modal" data-target="#regaloModal">
                <i class="fa fa-gift icon-paalala fa-5x sr-contact"></i>
            </a>
            <div class="paalala-category"><?php echo $json['paalala']['reagalo_title']?></div>
            <div class="paalala-content">
                <p class="text"> <?php echo $json['paalala']['regalo_notes']?> </p>
            </div>
        </div>
        <div class="col-lg-2 text-center">
            <a href="#" data-toggle="modal" data-target="#faqModal">
                <i class="fa fa-question-circle icon-paalala fa-5x sr-contact"></i>
            </a>
            <div class="paalala-category"><?php echo $json['paalala']['faqs_title']?></div>
            <div class="paalala-content">
                <p class="text"><?php echo $json['paalala']['faqs_notes']?></p>
            </div>
        </div>
        <div class="col-lg-2 text-center">
            <a href="#" data-toggle="modal" data-target="#reminderModal">
                <i class="fa fa-info-circle icon-paalala fa-5x sr-contact"></i>
            </a>
            <div class="paalala-category"><?php echo $json['paalala']['reminders_title']?></div>
            <div class="paalala-content">
                <p class="text"><?php echo $json['paalala']['reminders_notes']?></p>
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
                    <?php echo $json['paalala_kasuotan']['header']?>
                </div>
                <div class="modal-body">
                    <?php echo $json['paalala_kasuotan']['notes']?>
                </div>

                <!-- main slider carousel -->
                <div class="row">
                    <div class="col-md-12" id="slider">

                        <div class="col-md-12" id="carousel-bounding-box">
                            <div id="myCarousel" class="carousel slide">
                                <!-- main slider carousel items -->
                                <div class="carousel-inner">
                                    <div class="active item something" data-slide-number="0">
                                        <img src="img/kasuotan/M1.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="1">
                                        <img src="img/kasuotan/M2.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="2">
                                        <img src="img/kasuotan/M3.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="3">
                                        <img src="img/kasuotan/M4.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="4">
                                        <img src="img/kasuotan/F1.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="5">
                                        <img src="img/kasuotan/F2.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="6">
                                        <img src="img/kasuotan/F3.jpg" class="img-responsive center-block">
                                    </div>
                                    <div class="item" data-slide-number="7">
                                        <img src="img/kasuotan/F4.jpg" class="img-responsive center-block">
                                    </div>
                                </div>
                                <!-- main slider carousel nav controls --> <a class="carousel-control left"
                                                                              href="#myCarousel" data-slide="prev"><b><<<</b></a>

                                <a class="carousel-control right" href="#myCarousel" data-slide="next"><b>>>></b></a>
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
                    <?php echo $json['paalala_regalo']['header']?>
                </div>
                <div class="modal-body">
                    <?php echo $json['paalala_regalo']['notes']?>
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
                    <?php echo $json['paalala_faqs']['header']?>
                </div>
                <div class="modal-body">
                    <div class="panel-group" id="faq">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#one">
                                        <?php echo $json['paalala_faqs']['1Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="one" class="panel-collapse collapse">
                                <!--                            <div id="one" class="panel-collapse collapse in">-->
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['1A']?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#two">
                                        <?php echo $json['paalala_faqs']['2Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="two" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['2A']?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#three">
                                        <?php echo $json['paalala_faqs']['3Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="three" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['3A']?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#four">
                                        <?php echo $json['paalala_faqs']['4Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="four" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['4A']?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#five">
                                        <?php echo $json['paalala_faqs']['5Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="five" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['5A']?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#faq" href="#six">
                                        <?php echo $json['paalala_faqs']['6Q']?>
                                    </a>
                                </h4>
                            </div>
                            <div id="six" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <?php echo $json['paalala_faqs']['6A']?>
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

    <!-- MODAL REMINDERs -->
    <div class="modal fade" id="reminderModal" role="dialog">
        <div class="modal-dialog modal-m">
            <div class="modal-content impormasyon-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <i class="fa fa-info-circle icon-paalala fa-2x sr-contact"></i>
                    <?php echo $json['paalala_reminders']['header']?>
                </div>
                <div class="modal-body">
                    <ol>
                        <li>
                            <?php echo $json['paalala_reminders']['1']?>
                        </li>
                        <li>
                            <?php echo $json['paalala_reminders']['2']?>
                        </li>
                        <li>
                            <?php echo $json['paalala_reminders']['3']?>
                        </li>
                        <li>
                            <?php echo $json['paalala_reminders']['4']?>
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
</section>


<aside class="bg-dark" id="contact">
    <div class="container">

        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h3 class="section-header-tawag"><?php echo $json['contact']['header']?></h3>
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

<div class="row col-md-6 col-md-offset-3 col-xs-12">
    <audio controls autoplay>
        <source src="file/love-team.mp3" type="audio/ogg"/>
        <source src="file/love-team.mp3" type="audio/mpeg"/>
        An html5-capable browser is required to play this audio.
    </audio>
</div>
