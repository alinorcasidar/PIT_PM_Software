<?php require_once 'member_controller/member_db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="member_assets/css/style.css?v=<?= filemtime('member_assets/css/style.css'); ?>" rel="stylesheet"/> 
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet"><link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
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
    html, body {
        overflow-x: hidden !important;
        padding-bottom: 170px !important;
    }

}
@media (max-width: 1133px) {
    .hero-page {
        
        text-align: center; /* Center text alignment for small screens */
    }

    .two-col {
        margin: 0px 0; /* Add spacing between the stacked elements */
    }

    .imgs img {
        width: 100%; /* Ensure images take full width on smaller screens */

    }

    .imgs {
        display: flex;
        flex-direction: column;
        align-items: center; /* Center all children horizontally */
    }

    .imgs h2 {
        font-size: 36px; /* Adjust font size for smaller screens */
        text-align: center; /* Center text within the h2 */
        width: 100%; /* Ensure the h2 takes full width */
        max-width: 566px; /* If needed, limit the width */
        margin: 40px 0; /* Add some spacing */
        margin-right: 70px;
    }
    .context{
        position: relative !important;
        right: 10px !important;
    }
}
@media (min-width: 548px) and (max-width: 692px) {
    h1{
        font-size: 80px !important;
    }
    h3{
        font-size: 34px !important;
        position: relative !important;
        top: 15px !important;
    }
}
@media (min-width: 498px) and (max-width: 548px) {
    h1{
        font-size: 70px !important;
    }
    h3{
        font-size: 25px !important;
        position: relative !important;
        top: 15px !important;
    }
}
@media (min-width: 423px) and (max-width: 498px) {
    h1{
        font-size: 60px !important;
    }
    h3{
        font-size: 25px !important;
        position: relative !important;
        top: 9px !important;
    }
    h2{
        font-size: 40px !important;
        height: 70px !important;
    }
    .context{
        position: relative !important;
        right: 30px !important;
    }
}
@media (min-width: 0px) and (max-width: 423px) {
    h1{
        font-size: 50px !important;
    }
    h3{
        font-size: 20px !important;
        position: relative !important;
        top: 1px !important;
    }
    h2{
        font-size: 35px !important;
        height: 60px !important;
    }
    .context{
        position: relative !important;
        right: 30px !important;
    }
    }
    @media (min-width: 0px) and (max-width: 1134px) {
        img{
            position: relative;
            right: 35px !important;
        }
    }


    </style>
    <?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col context">
        <h3>MUNICIPALITY OF</h3>
            <h1 style="font-family: 'Old Standard TT'; font-weight: 700;">TAGOLOAN</h1>
            <p>Example: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque venenatis facilisis urna sed congue.</p>
            <a href="member_login.php" class="button">Signup/Login<br> 
            <span>  </span></a>
        </div>
        <div class="two-col imgs">
            <img class="img-1" style="height: 372px; max-width: 566px !important; position: relative; top: 25px;" src="member_assets/img/sta_cruz_image.jpg" alt="Sta Cruz">
            <h2 style="height: 80px; max-width: 566px; background-color: rgb(167, 149, 125); font-size: 48px; color: white; font-family: 'Old Standard TT' !important; font-weight:lighter; text-align:center; padding: 10px;" >BRGY. STA CRUZ</h2>
        </div>  
    </div>
</body>
</html>
