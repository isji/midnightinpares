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

    <title>Creative - Start Bootstrap Theme</title>

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
                    <a class="page-scroll" href="#portfolio">Something</a>
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
            <img src="img/wreath2.png" height="90%" width="90%">

            <h1 id="homeHeading" class="sj">SJ</h1>
            <h1 id="homeHeading" class="len">Len </h1>
            <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>

            <p></p>

        </div>
    </div>
    <div class="header-bottom">
        <h2 id="homeHeading" class="fam">FAMILY AND FRIENDS! THIS IS IT!</h2>
        <a href="#about" class="btn btn-primary btn-xl page-scroll">Kwentong #SJLenLoveTeam</a> <br/>
        <img src="img/wreath.png" height="80%" width="80%">
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Ang aming kwento!</h2>
                <hr class="light">
                <p class="text-faded">The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the
                    lazy dog! The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the lazy
                    dog!</p>
                <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Detalye ng Kasal</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
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
                    <i class="fa fa-4x fa-calendar text-primary sr-icons"></i>
                    <!--<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>-->
                    <h3>Petsa: <b>May 26, 2017</b></h3>
                    <p class="text-muted">Ito ay araw ng Biyerness kaya't 'wag kalimutang mag-file ng leave.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-clock-o text-primary sr-icons"></i>
                    <h3>Oras: <b>4:00PM - 8:00PM</b></h3>
                    <p class="text-muted">Magsisimula ang ceremony ng eksaktong alas-4 ng hapon. Huwag male-late!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-map-marker text-primary sr-icons"></i>
                    <h3>Lugar: <b>14 Four Cafe</b></h3>
                    <p class="text-muted">144 Magnolia Lane, Barangay San Isidro, Gregoria Heights Subdivision, Taytay,
                        Rizal</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--<i class="fa fa-4x fa-heart text-primary sr-icons"></i>-->
                    <i class="fa fa-4x fa-hashtag text-primary sr-icons"></i>
                    <h3>#<b>SJLenLoveTeam</b></h3>
                    <p class="text-muted">Maari lamang gamitin ang hastag na ito sa tuwing magpo-post ng tungkol sa
                        aming kasal
                        sa mga SNS.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="no-padding" id="portfolio">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded">
                                Category
                            </div>
                            <div class="project-name">
                                Project Name
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>I-Download ang 'SOMETHING'</h2>
            <a href="file/MintWorks-RuleBook-Final.pdf" class="btn btn-default btn-xl sr-button" target="_blank">Download</a>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Contact Details!</h2>
                <hr class="primary">
                <p>The quick brown fox jumps over the lazy dog! The quick brown fox jumps over the lazy dog!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <p>(+63) 915-253-3212<br/>
                    (+63) 917-366-3908</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:sj.balatan@gmail.com">sj.balatan@gmail.com</a><br/>
                    <a href="mailto:eileenlicopit@gmail.com ">eileenlicopit@gmail.com</a></p>
            </div>
        </div>
    </div>
</section>

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
