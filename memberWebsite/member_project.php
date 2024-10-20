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
        .hero-page {
            display: flex !important;
            justify-content: center !important; /* Center horizontally */
            align-items: center !important; /* Center vertically */

        }
        @media screen and (max-width: 904px) {
            .project-solo-container {
                padding-top: 0px !important;
            }
        }

    </style>

<?php require_once 'member_component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col cards w-100 projects">
            <?php 

            // Fetch the event ID from the query string (assuming URL has ?id=event_id)
            $event_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

            // Fetch event data by ID from the database
            $sql = "SELECT name, pictures, description, event_date FROM Events WHERE id = $event_id";
            $result = $conn->query($sql);

            // Check if the event was found
            if ($result->num_rows > 0) {
                $event = $result->fetch_assoc(); // Fetch event details
                ?>
                
                <div class="project-solo-container" >
                    <h1 style="font-family: 'Old Standard TT'; font-size: 4vw !important; align-items: center; color: #675031;" class="center"><?php echo $event['name']; ?></h1>
                    
                    <img style="max-height: 400px; max-width: 100%; position: relative; bottom: 70px;" src="<?php echo $event['pictures']; ?>" alt="Event Image">

                    <p style=" font-family: 'Open Sans'; font-size: 1.6vw !important; position: relative; bottom: 70px;"><?php echo $event['description']; ?></p>
                </div>

                <?php
            } else {
                // If no event is found, display a message
                echo "<p>Event not found.</p>";
            }

            // Close the connection
            $conn->close();
            ?> 
        </div>
    </div>
</body>
</html>