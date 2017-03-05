<?php
$password = 'wubwub';
echo $homeLink = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if (isset($_POST["homePassword"]) && !empty($_POST["homePassword"])) {
    if ($_POST["homePassword"] == $password) header('Location: ' . $homeLink.'/../vip-pass');
}
?>

<head>
    <link rel="stylesheet" type="text/css" href="css/main_test.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <audio controls>
        <source src="music/love-team.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</head>

<body class="centered-wrapper">
<div class="centered-content">
    <div id='home_header_text'>
        #SJLenLoveTeam
    </div>

    <form action='' method="post">
        <input type="password" placeholder="Enter Password..." name="homePassword">
        <input type="submit">
    </form>
</div>
</body>
