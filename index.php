<?php
$currentLink = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
$vipLink = $currentLink.'/../vip-pass/index.php';
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/main_test.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body class="centered-wrapper">
<div class="centered-content">
    <div id='home_header_text'>
        #SJLenLoveTeam
    </div>

    <form action='<?php echo $vipLink ?>' method="post">
        <input type="password" placeholder="Enter Password..." name="homePassword">
        <input type="submit">
    </form>
</div>
</body>
