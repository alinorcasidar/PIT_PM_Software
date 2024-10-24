<?php require_once 'controller/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="assets/css/style.css?v=<?= filemtime('assets/css/style.css'); ?>"rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
<style>
        html, body {
            overflow: hidden; /* Prevent scrolling */
        }
        .error-message {
            color: red;             /* Text color */
            font-size: 14px;       /* Smaller font size */
            line-height: 0px !important;
            position: relative !important;
            bottom: 8px !important;
            left: 10px !important;
            font-family: 'Open Sans' !important;
        }
        .hero-page .cards .card input {
            display: block;
            padding: 13px 24px;
            border-radius: 8px;
            background-color: rgba(0, 0, 0, 0.073);
            color: black;
            border: 0;
            font-size: 16px;
            margin: 20px 0 !important; 
            width: 100%;   
            border: 2px solid transparent; 
            outline: 0;
        }


        @media (max-width: 585px) {
            .fname{
                width: 95px !important;
                font-size: 8px !important;
                padding-left: 0px !important;
                padding: 0% !important;
                margin: 0px !important;
                position: relative !important;
                bottom: 20px !important;
            }
            .gender{
                width: 95px !important;
                font-size: 8px !important;
                position: relative !important;
                bottom: 20px !important;
                right: 10px !important;
            }
            .bday{
                width: 95px !important;
                font-size: 8px !important;
                position: relative !important;
                bottom: 20px !important;
            }
            .lname{
                width: 95px !important;
                font-size: 8px !important;
                position: relative !important;
                bottom: 20px !important;
                right: 10px !important;
            }
            .email, .password, .phone{
                font-size: 8px !important;
            }
            .email{
                position: relative !important;
                bottom: 35px !important;
            }
            .create-title, .button{
                font-size: 15px !important;
            }
            .hero-page .card, .cards{
                height: 30px !important;
            }
            input, .password, .email, .bday, .gender, .phone{
                margin-top: 8px !important;
            }
            .phone{
                position: relative;
                bottom: 67px;
            }
            .password{
                position: relative;
                bottom: 81px;
            }
            .bday, .gender{
                position: relative  !important;
                bottom: 95px !important;
            }
            .button{
                position: relative;
                bottom: 125px !important;
                width: 195px !important;
            }

            input, .fname, .lname, .email, .password, .phone, .bday, .gender {
                padding: 10px 15px !important; /* 10px top and bottom, 15px left and right */
            }
            .hero-page, .cards   {
            position: relative;
            right: 50px !important;
            max-width: none !important;
            width: 530px !important;
        }
        .email, .password, .phone{  
            width: 195px !important;
        }
        .cards{
            max-width: 279px !important;  

        }
        .error-message{
                font-size: 7px !important;
                position: relative !important;
                bottom: 55px !important;
                padding-top: 10px !important;
            }
        }
        @media (min-width: 585px) and (max-width: 625px) {
            .fname, .lname, .bday,.gender{
                width: 115px !important;
                font-size: 10px !important;
            }
            .email{
                position: relative !important;
                bottom: 15px !important;
            }
            .cards{
                max-width: 320px !important;
            }
            .email, .password, .phone{
                font-size: 10px !important;
            }
            .create-title, .button{
                font-size: 20px !important;
            }
            .hero-page .card, .cards{
                height: 400px !important;
            }
            input, .password, .email, .bday, .gender, .phone{
                margin-top: 8px !important;
            }
            .phone{
                position: relative;
                bottom: 50px !important;
            }
            .bday, .gender{
                position: relative;
                bottom: 80px;
            }.password{
                position: relative;
                bottom: 65px !important;
            }
            .button{
                position: relative;
                bottom: 110px !important;
            }
            .card{
                height: 440px !important;
            }
            input, .fname, .lname, .email, .password, .phone, .bday, .gender {
                padding: 10px 15px !important; /* 10px top and bottom, 15px left and right */
            }
            .error-message{
                font-size: 9px !important;
                position: relative !important;
                bottom: 38px !important;
                padding-top: 10px !important;
            }

        }
        @media (min-width: 625px) and (max-width: 665px) {
            .fname, .lname, .bday,.gender{
                width: 135px !important;
                font-size: 12px !important;
            }
            .cards{
                max-width: 359px !important;
            }
            .email, .password, .phone{
                font-size: 12px !important;
            }
            .create-title, .button{
                font-size: 20px !important;
            }
            .hero-page, .card, .cards{
                height: 500px !important;
                margin-bottom: 0px !important;
            }
            input, .password, .email, .bday, .gender, .phone{
                margin-top: 8px !important;
            }
            .email{
                position: relative;
                bottom: 13px;
                max-width: 100% !important;
            }
            .phone{
                position: relative;
                bottom: 42px;
            }
            .password, .bday, .gender, .button{
                position: relative;
                bottom: 55px;
            }
            .button{
                position: relative;
                bottom: 40px !important;
            }
            .card{
                height: 440px !important;
            }
            .bday, .gender{
                position: relative;
                bottom: 67px !important;
            }
            .error-message{
                font-size: 10px !important;
                position: relative !important;
                bottom: 35px !important;
                padding-top: 10px !important;
            }
            .button{
                position: relative !important;
                bottom: 100px !important
            }
        }
        @media (min-width: 665px) and (max-width: 705px) {
            .fname, .lname, .bday,.gender{
                width: 155px !important;
                font-size: 15px !important;
            }
            .email, .password, .phone{
                font-size: 15px !important;
            }
            .cards{
                max-width: 400px !important;
            }
        }
        @media (min-width: 705px) and (max-width: 726px) {
            .fname, .lname, .bday,.gender{
                width: 175px !important;
            }
        }
        @media (min-width: 726px) and (max-width: 755px) {
            .fname, .lname, .bday,.gender{
                width: 185px !important;
            }
            .cards{
                max-width: 460px !important;
            }
            
        }
        @media (min-width: 0px) and (max-width: 1253px) {
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
        @media (min-width: 1199px) and (max-width: 1295px) {
        .context{
            padding-left: 70px;
        }
    }
        @media (min-width: 1295px) and (max-width: 1378px) {
        .context{
            padding-left: 50px;
        }
        .form-group {
    margin-bottom: 15px; /* Space between form elements */
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px; /* Space between input and error message */
}


    }
    </style>
<?php require_once 'component/navbar.php' ?>

<div class="hero-page" style="max-height: 50px !important">
        <div class="two-col context">
            <h3>Municipality of</h3>
            <h1>TAGOLOAN</h1>
        </div>
        <div class="two-col cards" >
            <div style="max-width: 460px !important; max-height: 550px !important" class="card">
            <form action="controller/register.php" method="post">
                    <h2 class="create-title" style="text-align:center; font-family: 'Open Sans';">CREATE ACCOUNT</h2>
                    <!-- First Name -->
                    <input class="fname" style="max-width: 200px !important; display: inline !important;" type="text" id="first_name" name="first_name" placeholder="First Name" required><input class="lname" style="max-width: 200px !important; display: inline !important; margin-left: 14px !important; " type="text" id="last_name" name="last_name" placeholder="Last Name" required>
                    <div style="position: relative; bottom: 20px;">
                        <div class="form-group">
                            <!-- Email Address -->
                            <input class="email" type="email" id="email_address" name="email_address" placeholder="Email Address" required>
                            <?php if(isset($_GET['error']) && !empty($_GET['error'])): ?>
                                <div class="error-message">
                                    <?= htmlspecialchars($_GET['error']); ?>
                                </div>
                            <?php endif; ?> 
                        </div>
                        <!-- Phone Number -->
                        <input class="phone" type="tel" id="phone_number" name="phone_number" placeholder="Phone Number">

                        <!-- Password -->
                        <input class="password" type="password" id="password" name="password" placeholder="Password" required>
                        <div style="position: relative !important; bottom: 20px !important; ">
                        <!-- Birthday -->
                        <input class="bday" style="max-width: 200px !important; display: inline !important" type="date" id="birthday" name="birthday"><select class="gender" style="max-width: 200px !important; display: inline !important ; margin-left: 14px;" id="gender" name="gender"><option value="male">Male</option><option value="female">Female</option><option value="other">Other</option></select>
                        <input style="position: relative; bottom: 20px;" type="submit" class="button" value="Create Account">
                        </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>