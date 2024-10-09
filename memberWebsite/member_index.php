<?php require_once 'member_controller/member_db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="member_assets/css/style.css?v=<?= filemtime('member_assets/css/style.css'); ?>" rel="stylesheet"/>  
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
    
    <!-- Google Fonts: Old Standard TT -->

</head>
<body>
    <style>
    html, body {
        overflow: hidden; /* Prevent scrolling */
}
    @media (max-width: 1378px) {
        .context{
            padding-left: 100px;
        }
    }
    @media (max-width: 1134px) {
    html, body {
        overflow: auto !important; /* Allow scrolling */
    }
}
@media (max-width: 1133px) {
    .hero-page .imgs{
        padding: 0px !important;
    }
}

    </style>
    <?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col context">
        <h3>MUNICIPALITY OF</h3>
            <h1 style="font-family: 'Old Standard TT'; font-weight: 700;">TAGOLOAN</h1>
            <p>Example: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis facilisis urna sed congue.</p>
            <a href="member_login.php" class="button">Signup/Login<br></a>
        </div>
        <div class="two-col imgs">
            <img style="height: 372px; max-width: 566px !important; position: relative; top: 25px;" src="member_assets/img/sta_cruz_image.jpg" alt="Sta Cruz">
            <h2 style="height: 80px; max-width: 566px; background-color: rgb(167, 149, 125); font-size: 48px; color: white; font-family: 'Old Standard TT' !important; font-weight:lighter; text-align:center; padding: 10px;" >BRGY. STA CRUZ</h2>
        </div>  
    </div>
</body>
</html>
