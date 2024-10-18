<?php require_once 'member_controller/member_db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="member_assets/css/style.css?v=<?= filemtime('member_assets/css/style.css'); ?>" rel="stylesheet"/>  
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
<style>
    html, body {
        overflow-x: hidden; /* Disable horizontal scrolling */
    }
    .logo {
        display: flex; /* Use flexbox for inline layout */
        justify-content: center; /* Center items horizontally */
        align-items: center; /* Align items vertically, if needed */
        margin: 20px 0; /* Optional: Add some margin for spacing */
    }
    .logo img {
        max-width: 100%; /* Ensure images are responsive */
        height: auto; /* Maintain aspect ratio */
        margin: 0 10px; /* Optional: Add spacing between images */
    }
    .img-1 {
        display: block; /* Block display to ensure it takes full width */
        max-width: 300px !important;
        height: auto !important; /* Maintain aspect ratio */
    }
    .img-2 {
        max-width: 320px !important;
        height: auto !important; /* Maintain aspect ratio */
    }
    .img-3 {
        max-width: 250px !important;
        height: auto !important; /* Maintain aspect ratio */
    }
    .mission-vision-text{
        font-size: 55px !important;
        margin: auto !important;
        text-align: center !important;
        color: #675031  !important;
        font-family: 'Old Standard TT' !important;
        font-weight: lighter !important;
    }
    .about-text{
        font-size: 30px !important;
        margin: auto !important;
        text-align: center !important;
        color: #737373  !important;
        font-family: 'Open Sans' !important;
        font-weight: lighter !important;
        
        margin-right: 380px !important;
        padding-top: 20px !important;
    }
    .context h2{
        font-size: 40px !important;
        color: red !important;
        text-align: center !important;
        position: relative;
        bottom: 70px !important;
    }
    .context h3{
        font-size: 30px !important;
        padding-bottom: 35px !important;
        padding-left: 20px !important;
        margin-top: 0px !important;
    }
    .context p{
        font-size: 26px !important;
        position: relative;
        bottom: 80px !important;
        line-height: 40px !important;
        width: 99% !important;
        font-style: italic !important;
        font-family: 'Open Sans' !important;
    }
    .context-mission{
        position: relative;
        top: 90px !important;
    }
    .context-mission h1{
        font-size: 55px !important;
    }
    .context-mission h2{
        font-size: 40px !important;
        color: red !important;
        text-align: center !important;
        position: relative;
        bottom: 70px !important;
    }
    .context-mission h3{
        font-size: 30px !important;
        padding-bottom: 35px !important;
        padding-left: 20px !important;
        margin-top: 0px !important;
    }
    .context-mission p{
        font-size: 26px !important;
        position: relative;
        bottom: 80px !important;
        line-height: 40px !important;
        width: 99% !important;
        font-style: italic !important;
        font-family: 'Open Sans' !important;
    }
    .context{
        padding-left: 50px !important;
    }
</style>


<?php require_once 'member_component/navbar.php' ?>
        <div class="logo">
            <img class="img-1" src="member_assets/img/mis-or.png" alt="">
            <img class="img-2" src="member_assets/img/tagoloan.png" alt="">
            <img class="img-3" src="member_assets/img/stana.png" alt="logo">
        </div>
        <h3 class="about-text">ABOUT</h3>
        <h1 class="mission-vision-text">VISION & MISSION</h1>
    <div class="hero-page">
        <div class="two-col context">
            <h2>VISION</h2>
            <p>The Sangguniang Kabataan envisions active, supportive and participative role in all government efforts, programs, projects and other initiatives that ultimately lead the SK and other youth organizations to achieve truly free, just, democratic, progressive, effective and most of all, God-abiding and morally upright sector in the Philippine society.</p>
        </div>
        <div class="two-col context-mission">
            <h2>MISSION</h2>
            <p>The Sangguniang Kabataan, a dynamic portion of our population and a vital sector, assumes a role in national development and governance to formulate strategies to lead, protect, support and enhance the social, political, economic, cultural, intellectual, moral, spiritual and physical development of the Filipino youth.</p>
            <p>The Sangguniang Kabataan alsoi maintains the role of an active governent's partner in providing services that would uplift the general welfare of the youth guided by pro-people and pro-God values.</p>
        </div>
        </div>  
    </div>
</body>
</html>