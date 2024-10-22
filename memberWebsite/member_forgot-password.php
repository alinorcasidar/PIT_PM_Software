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
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
<style>
        @media (min-width: 820px)  and (max-width: 1133px) {
            .hero-page{
                position: relative  !important;
                right: 100px !important;
            }
            .card{
                width: 500px !important;
        }
        }
        @media (min-width: 578px)  and (max-width: 820px) {
            .hero-page{
                position: relative  !important;
                right: 200px !important;
            }
            .card{
                width: 500px !important;
        }
        }
        @media (min-width: 488px)  and (max-width: 578px) {
            .hero-page{
                position: relative  !important;
                right: 320px !important;
            }
            .card{
                width: 500px !important;
        }
        }
        @media (min-width: 385px)  and (max-width: 488px) {
            .hero-page{
                position: relative  !important;
                right: 320px !important;
            }
            .card{
                width: 300px !important;
        }
        .card p{
            font-size: 15px !important;
        }
        .card h2{
            font-size: 18px !important;
        }
        }
        @media (min-width: 0px)  and (max-width: 385px) {
            .hero-page{
                position: relative  !important;
                right: 350px !important;
            }
            .card{
                width: 300px !important;
        }
        .card p{
            font-size: 15px !important;
        }
        .card h2{
            font-size: 18px !important;
        }
        }
        
    </style>
<?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col cards w-100" style="padding-left: 500px;">
            <div class="card center notice">
                <h2>Forgot Password</h2>
                <p style="font-size: 20px;">If you forgot your password, please contact our admin immediately at <strong>brgytagoloan123@gmail.com</strong>. For verification purposes, kindly send your email address, birthdate, a picture of yourself holding your ID, and the front and back of your ID. This is intended for security purposes only, and will not be used for any other purpose, thank you.</p>
            </div>
        </div>
    </div>
</body>
</html>