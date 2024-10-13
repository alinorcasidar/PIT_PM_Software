<?php require_once 'member_controller/member_db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="member_assets/css/style.css?v=<?= filemtime('member_assets/css/style.css'); ?>" rel="stylesheet"/>  
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
</head>
<body>
    <style>
        html, body {
            overflow: hidden; /* Prevent scrolling */
        }
        .button{
            position: relative;
            top: 30px;
            background-color: #ebdfd4 !important;
            color: black !important;
            font-family: 'Open Sans' !important;
            font-size: 18px !important;
            font-weight: bold !important;
            width: 280px !important;
        }
        .context .button{
            margin-left: 50px !important;
        }
        .contact_number{
            position: relative !important;
            top: 130px !important;
            
        }
        
        @media (min-width: 1474px) and (max-width: 1554px) {
            .imgs img{
                margin-left: 30px !important;
            }
            .context{
                margin-left: 30px !important;
            }

        }
        @media (min-width: 1406px) and (max-width: 1474px) {
            .imgs img{
                margin-left: 60px !important;
            }
            .context{
                margin-left: 60px !important;
            }

        }
        @media (min-width: 1339px) and (max-width: 1406px) {
            .imgs img{
                margin-left: 90px !important;
            }
            .context{
                margin-left: 90px !important;
            }

        }
        @media (min-width: 1134px) and (max-width: 1339px) {
            .hero-page {
                flex-direction: column; /* Stack content vertically */
                text-align: center;     /* Center text in smaller screens */
                padding: 20px;          /* Add some padding for smaller screens */
            }
            
            .imgs img {
                margin-left: 120px !important;
            }
            .brgy-contact{
                background-color: rgba(167, 149, 125, 0) !important; 
                position: relative !important;
                right: 220px !important;
                bottom: 80px !important;
            }
            .context{
                position: relative !important;
                bottom: 70px !important;
            }
            .context h1{
                position: relative !important;
                right: 60px !important;
            }
            .context h3{
                position: relative !important;
                right: 140px !important;
            }
            .button{
               background-color: #A7957D !important; 
               color: white !important;
            }
            html, body {
                overflow: auto !important; /* Allow scrolling */
            }
        }

        @media (max-width: 1134px) {
            .imgs img {
                display: block;      /* Ensure the image is treated as a block element */
                margin: 0 auto !important; /* Automatically center the image horizontally */
                position: relative;  /* Retain the relative position if needed */
                right: 50px !important; /* Reset the right property if set */
                max-width: 100% !important; /* Limit the maximum width to 100% */
                
            }
            .hero-page {
                flex-direction: column; /* Stack content vertically */
                text-align: center;     /* Center text in smaller screens */
            }

            .brgy-contact{
                background-color: rgba(167, 149, 125, 0) !important; 
                position: relative !important;
                right: 220px !important;
                bottom: 80px !important;
            }
            .context{
                position: relative !important;
                bottom: 70px !important;
            }
            .context h1{
                position: relative !important;
                right: 60px !important;
            }
            .context h3{
                position: relative !important;
                right: 140px !important;
            }
            .button{
               background-color: #A7957D !important; 
               color: white !important;
            }
            html, body {
                overflow: auto !important; /* Allow scrolling */
            }
        }
        @media (min-width: 0px) and (max-width: 589px) {
            .context h1{
                font-size: 50px !important;
            }
            .context h3{
                font-size: 25px !important;
                margin-left: 90px !important;
                padding-bottom: 10px !important;
            }
        }
        @media (min-width: 493px) and (max-width: 589px) {
            .context h1{
                font-size: 40px !important;
            }
            .context h3{
                font-size: 15px !important;
                margin-left: 130px !important;
                padding-bottom: 20px !important;
            }
            .button{
                height: 40px !important;
                font-size: 15px !important;
            }
            .imgs img{
                width: 300px !important;
                height: 300px !important;
            }
        }
        @media (min-width: 441px) and (max-width: 493px) {
            .context h1{
                font-size: 40px !important;
            }
            .context h3{
                font-size: 15px !important;
                margin-left: 130px !important;
                padding-bottom: 20px !important;
            }
            .button{
                height: 40px !important;
                font-size: 15px !important;
                
            }
            .bi-telephone, .bi-envelope{
                width: 12px !important;
                height: 12px !important;
            }
            .imgs img{
                width: 300px !important;
                height: 300px !important;
                position: relative;
                right: 70px !important;
            }
            .context h1{
                position: relative !important;
                right: 100px !important;
                padding-bottom: 20px !important;
            }
            .context h3{
                position: relative !important;
                right: 180px !important;
            }
            .context .button{
                position: relative !important;
                right: 30px !important;
                margin-bottom: 0px !important;
            }
            
        }
        @media (min-width: 395px) and (max-width: 441px) {
            .context h1{
                font-size: 40px !important;
            }
            .context h3{
                font-size: 15px !important;
                margin-left: 130px !important;
                padding-bottom: 20px !important;
            }
            .button{
                height: 40px !important;
                font-size: 15px !important;
                
            }
            .bi-telephone, .bi-envelope{
                width: 12px !important;
                height: 12px !important;
            }
            .imgs img{
                width: 300px !important;
                height: 300px !important;
                position: relative;
                right: 90px !important;
            }
            .context h1{
                position: relative !important;
                right: 110px !important;
                padding-bottom: 20px !important;
            }
            .context h3{
                position: relative !important;
                right: 190px !important;
            }
            .context .button{
                position: relative !important;
                right: 40px !important;
                margin-bottom: 0px !important;
            }
            
        }
        @media (min-width: 0px) and (max-width: 395px) {
            .context h1{
                font-size: 35px !important;
            }
            .context h3{
                font-size: 14px !important;
                margin-left: 130px !important;
                padding-bottom: 23px !important;
            }
            .button{
                height: 35px !important;
                font-size: 13px !important;
                width: 200px !important;
                padding: 0px !important;
                padding-top: 8px !important;
                
            }
            .bi-telephone, .bi-envelope{
                width: 12px !important;
                height: 12px !important;
            }
            .imgs img{
                width: 250px !important;
                height: 250px !important;
                position: relative !important;
                right: 110px !important;
            }
            .context h1{
                position: relative !important;
                right: 130px !important;
                padding-bottom: 20px !important;
            }
            .context h3{
                position: relative !important;
                right: 190px !important;
            }
            .context .button{
                position: relative !important;
                right: 50px !important;
                margin-bottom: 0px !important;
            }
            
        }
           
    </style>
    <?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page contact">
        <div class="two-col imgs">
        <img style="position: relative; right:240px; width: 702px !important; height:490px;" src="member_assets/img/contact_page.png" alt="Sta Cruz">
        </div>
        <div class="two-col context" style="position: relative; right: 50px !important; width: 500px;" >
            <h3>CONTACT</h3>
            <h1 class="brgy-name" style=" position: relative !important; bottom: 10px !important; font-family: 'Old Standard TT'; font-weight: lighter !important; font-size: 64px; width: 700px;">BRGY. STA CRUZ</h1>
            <div class="brgy-contact" style="background-color: #A7957D; width: 1000px; height: 200px; position: relative; right: 38px">
                <?php
                    // Fetch contact and email from the database
                    $sql = "SELECT contact_number, email_address FROM contact_info WHERE id = 1"; // Assuming you want to display the first row
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $contact = $row['contact_number'];
                        $email = $row['email_address'];
                    } else {
                        $contact = 'No contact number available';
                        $email = 'No email address available';
                    }
                ?>
                <p style="font-size: 25px; font-weight: bold; font-family: 'Open Sans'; color: white; position: relative; top: 15px; left: 90px;">Contact:</p>
                <p style="font-size: 25px; font-weight: bold; font-family: 'Open Sans'; color: white; position: relative; top: 10px; left: 120px;" class="contact-number">
                    <i  class="fas fa-phone-alt" style="margin-right: 10px; color:black;"></i>
                    <?= $contact ?>
                </p>
                <p style="font-size: 25px; font-weight: bold; font-family: 'Open Sans'; color: white; position: relative; bottom:  0px; left: 120px;" class="email_address">
                    <i class="fas fa-envelope" style="margin-right: 10px; color:black;"></i>
                    <?= $email ?>
                </p>

            </div>
        </div>
    </div>
</body>
</html>