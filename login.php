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
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
</head>
<body>
    <style>
        html, body {
            overflow: hidden; /* Prevent scrolling */
        }
        @media (min-width: 0px) and (max-width: 1189px) {
        .context{
            display: none !important; /* This will hide the entire .context content */
            visibility: hidden !important; /* Ensure content is not visible */
        }
        .two-col{
            width: 100% !important;
            align-items: center !important;
            margin-left: 250px!important;
        }
    }
        @media (min-width: 1189px) and (max-width: 1295px) {
        .context{
            padding-left: 80px;
        }
    }
        @media (min-width: 1295px) and (max-width: 1378px) {
        .context{
            padding-left: 50px;
        }
    }
    </style>
<?php require_once 'component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col context">
            <h3>Municipality of</h3>
            <h1>TAGOLOAN</h1>
        </div>
        <div class="two-col cards">
            <div class="card">
                <h2 style="text-align:center; font-family: 'Open Sans';">PLEASE LOGIN</h2>
                <?php if(isset($_GET['error']) && !empty($_GET['error'])): ?>
                <div class="error">
                    <?= $_GET['error'] ?>
                </div>
                <?php endif; ?>
                <form action="controller/login.php" method="post">
                    <input type="text" name="email_address" placeholder="Email Address" >
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" class="button" value="Log In" style="font-size: 23px; font-weight: bold; font-family: 'Open Sans';" ;>
                    
                </form>
                <a class="forgot-password" href="#!" style="margin-left: 110px; font-family:'Blinker'; font-size:18px; color: black; transition: color 0.1s; position: relative; bottom: 10px;" onmousedown="this.style.color='gray';" onmouseup="this.style.color='black';" onmouseleave="this.style.color='black';">Forgot password?</a>
                <a style="font-family:'Blinker'; font-weight:bold; font-size:23px; position: relative; bottom: 10px;" href="create_account.php" class="button">Create new Account</a>
            </div>
        </div>
    </div>
</body>
</html>