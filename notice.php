<?php require_once 'controller/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="assets/css/style.css?v=<?= filemtime('assets/css/style.css'); ?>"rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
<?php require_once 'component/navbar.php' ?>

    <div class="hero-page hero-page-notice">
        <div class="two-col cards w-100" style="padding-left: 500px;">
            <div class="card center notice">
                <h2>Notice</h2>
                <p style="font-size: 20px;">Please await approval for your account. Once your legitimacy as an official is verified, an approval notification will be sent to your email address. Please allow up to 24 hours for this process to be completed. Thank you for your patience.</p>
            </div>
        </div>
    </div>
</body>
</html>