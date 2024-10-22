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
            body {
                overflow-x: hidden !important; /* Prevent horizontal scroll for the entire page */
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
                overflow-y: auto !important; /* Allow scrolling */
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

        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            width: 300px;
                }

            .modal-content {
                text-align: center;
            }

        .btn-update-modal, .btn-cancel-modal {
            padding: 6px 12px;
            font-size: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            text-decoration: none;
            width: 80px;/
        }
        .btn-update, .btn-update-modal {
            background-color: #28a745;
            color: white;
            cursor: pointer;
        }

        .btn-delete:hover, .btn-delete-modal:hover {
            background-color: #c82333;
        }

        .btn-update:hover, .btn-update-modal:hover {
            background-color: #218838;
        }

        .btn-cancel, .btn-cancel-modal {
            background-color: #6c757d;
            color: white;
        }

        .btn-cancel, .btn-cancel-modal:hover {
            background-color: #5a6268;

        }
        input{
            padding: 10px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

           
    </style>
    <?php require_once 'component/navbar.php' ?>

    <div class="hero-page contact">
        <div class="two-col imgs">
            <img style="position: relative; right:240px; width: 702px !important; height:490px;" src="assets/img/contact_page.png" alt="Sta Cruz">
        </div>
        <div class="two-col context" style="position: relative; right: 50px !important; width: 500px;" >
            <h3>CONTACT</h3>
            <h1 class="brgy-name" style=" position: relative !important; bottom: 10px !important; font-family: 'Old Standard TT'; font-weight: lighter !important; font-size: 64px; width: 700px;">BRGY. STA CRUZ</h1>
            <div class="brgy-contact" style="background-color: #A7957D; width: 1000px; height: 200px; position: relative; right: 38px">
            <a href="#!" class="button" id="addContactBtn" onclick="openUpdateModal('contact')"><span class="icon" style=" margin-right: 3px ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
                    </svg>
                </span> ADD CONTACT</a><br>
                <a href="#!" class="button" id="addEmailBtn" onclick="openUpdateModal('email')"><span class="icon" style="vertical-align: middle; margin-right: 3px; border-color: #F5EDED !important; ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                </span>ADD EMAIL</a>
            </div>
        </div>
    </div>
    <div id="contactModal" class="modal">
    <div class="modal-content">
        <h2 style="font-family: 'Open Sans'; text-align: center;">Update Contact</h2>
        <form action="controller/update_contact_info.php" method="post">
            <input style="font-family: 'Open Sans';" type="text" id="updateContactNumber" name="contact" placeholder="Contact Number">
            <button type="submit" class="btn-update-modal" >Update</button>
            <button type="button" class="btn-cancel-modal" onclick="closeContactModal()">Cancel</button>
        </form>
    </div>
</div>

<div id="emailModal" class="modal">
    <div class="modal-content">
        <h2 style="font-family: 'Open Sans'; text-align: center;">Update Email</h2>
        <form action="controller/update_contact_info.php" method="post">
            <input style="font-family: 'Open Sans';" type="text" id="updateEmailAddress" name="email" placeholder="Email Address">
            <button type="submit" class="btn-update-modal">Update</button>
            <button type="button" class="btn-cancel-modal" onclick="closeEmailModal()">Cancel</button>
        </form>
    </div>
</div>

<script>
    function openUpdateModal(type) {
        // Determine which modal to open based on type
        if (type === 'contact') {
            document.getElementById('contactModal').style.display = 'block';
        } else if (type === 'email') {
            document.getElementById('emailModal').style.display = 'block';
        }
    }

    function closeContactModal() {
        // Close all modals
        document.getElementById('contactModal').style.display = 'none';
        document.getElementById('emailModal').style.display = 'none';
    }
    function closeEmailModal() {
        // Close all modals
        document.getElementById('contactModal').style.display = 'none';
        document.getElementById('emailModal').style.display = 'none';
    }

    // Close modal when clicking outside the content
    window.onclick = function(event) {
        if (event.target === document.getElementById('contactModal')) {
            document.getElementById('contactModal').style.display = 'none';
        }
        if (event.target === document.getElementById('emailModal')) {
            document.getElementById('emailModal').style.display = 'none';
        }
    }
</script>


</body>
</html>