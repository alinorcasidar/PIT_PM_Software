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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet'>
</head>
<body>
<!-- CSS for Modern Look -->
<style>
    .hero-page{
        position: relative;
        bottom: 50px !important;
    }
    html, body {
        overflow: hidden; /* Prevent scrolling */
    }

/* Reminder Item Design */
.reminder-item {
    border: 1px solid rgba(0, 0, 0, 0.1);
    margin: 10px 10px;
    border-radius: 8px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}
.context {
    position:  relative !important;
    top: 30px !important;  
}
 .reminder-location, .reminder-event, .reminder-date {
    padding-left: 15px !important;
    font-family: 'Open Sans';
 }

.reminder-item:hover {
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.2);
}

.reminder-content {
    justify-content: space-between;
    width: 100%;
    align-items: center;
}
.reminder-details div {
    line-height: 2; /* Adjust as needed */
}

.reminder-details {
    font-family: 'Open Sans', sans-serif;
    gap: 8px;
}
.welcome-intro{
    font-size: 24px !important;
    color: 444444 !important;
    font-family: 'Open Sans' !important;
    font-style: italic !important;
    width: 550px !important;
}
.welcome{
    max-width: 500px !important;
    height: 60px !important;
    background-color: #A7957D;
}
.welcome-p{
    color: white !important;
    font-family: 'Open Sans' !important;
    font-style: italic !important;
    font-size: 36px !important;
    text-align: center !important;
    padding-top: 5px !important;
}
.introducing{
    font-family: 'Old Standard TT' !important;
    font-weight: lighter !important;
    font-size: 64px !important;
    color: #675031 !important;
    position: relative !important;
    top: 35px !important;

}
.content h3{
    font-family: 'Open Sans' !important;
    font-style: italic !important;
    font-size: 28px !important;
    color: #737373 !important;

    position: relative !important;
    top: 78px !important;
    font-weight: lighter !important;
}


/* Media query for responsiveness */
@media (max-width: 448px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 100px !important;
    }

    h2 {
        font-size: 20px !important; /* Adjust font size for smaller screens */
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 50px !important;
    }
    .btn-update, .btn-delete{
        font-size: 7px !important;
        width: 50px !important;
        height: 20px !important;
    }
    .reminder-location, .reminder-event, .reminder-date {
        font-size: 14px !important;
    }
    .reminder-actions{
        
        padding-left: 10px !important;
    }
    .card {
        width: 250px !important; 
        height: 280px !important;

    }

    .card h2{
        font-size: 17px !important;
    }
    
}
@media (min-width: 448px) and (max-width: 544px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 100px !important;
    }

    h2 {
        font-size: 20px !important; /* Adjust font size for smaller screens */
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 50px !important;
    }

    .reminder-location, .reminder-event, .reminder-date {
        font-size: 14px !important;
    }
    .card {
        width: 300px !important; 
        position: relative !important;

    }

    
}
@media (min-width: 545px) and (max-width: 768px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 200px !important;
    }

    h2 {
        font-size: 20px !important; /* Adjust font size for smaller screens */
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 150px !important;
    }
}@media (max-width: 1134px) {
    
    
    @media (max-width: 1134px) {
    html, body {
        overflow: auto; /* Allow scrolling */
        padding-bottom: 200px !important;
    }
    body {
        overflow-x: hidden;
    }

    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
    }

    .content {
        margin: 0 auto !important; /* Center the content div */
        width: 90% !important; /* Optional: Make it responsive */
        max-width: 1134px  !important; /* Limit the maximum width */
        position: relative !important;
        left: 220px !important;
        text-align: center !important;
        position: relative !important;
        bottom: 50px !important;
    }

    }
    .introducing{
        position: relative;
        right: 190px !important;
        width: 90% !important; /* Optional: Make it responsive */
        max-width: 1134px  !important; /* Limit the maximum width */

    }
    .content h3 {
        text-align: center;      /* Center the text inside the h3 */
        font-size: 28px !important; /* Ensure the font size is responsive */
        position: relative !important;
        right: 400px !important;
        max-width: 800px !important;
        margin: auto !important;
    }
    .welcome{
        max-width: 550px !important;
        margin-right: 30px !important;
        text-align: center !important;
        margin: auto !important;
        position: relative !important;
        right: 200px !important;
        
    }
    .content p{
        width: 100% !important; /* Optional: Make it responsive */
        max-width: 600px  !important; /* Limit the maximum width */
        text-align: center !important;
        margin: auto !important;
        position: relative !important;
        right: 200px !important;
        
    }
    .context{
        margin: auto !important;
        align-items: center !important;
        padding-left: 0px !important;
        position: relative !important;
        left: 20px !important;
    }
    .rem-cont{
        margin: 0 auto !important;
    }


}
@media screen and (max-width: 634px) {
    .introducing{
        font-size: 55px !important;
    }
    .content h3{
        font-size: 23px !important;
        padding-left: 75px !important;

    }
    .content p{
        font-size: 21px !important;
    }
    .welcome-p{
        font-size: 25px !important;
        position: relative !important;
        top: 7px !important;
    }
}
@media screen and (max-width: 634px) {
    .introducing{
        font-size: 45px !important;
    }
    .content h3{
        font-size: 17px !important;
        padding-left: 105px !important;
        padding-bottom: 5px !important;

    }
    .content p{
        font-size: 17px !important;
    }
    .welcome-p{
        font-size: 22px !important;
        position: relative !important;
        top: 4px !important;
    }
    .welcome{
        max-height: 50px !important;
    }
}
@media screen and (max-width: 454px) {
    .introducing{
        font-size: 35px !important;
        padding-bottom: 10px !important;
    }
    .content h3{
        font-size: 14px !important;
        padding-left: 185px !important;
        padding-bottom: 20px !important;

    }
    .content p{
        font-size: 14px !important;
    }
    .welcome-p{
        font-size: 15px !important;
        position: relative !important;
        top: 2px !important;
    }
    .welcome{
        max-height: 35px !important;
    }
    .content{
        padding-right: 40px !important;
    }
}
@media screen and (max-width: 375px) {
    .introducing{
        font-size: 25px !important;
        padding-bottom: 15px !important;
    }
    .content h3{
        font-size: 11px !important;
        padding-left: 245px !important;
        padding-bottom: 25px !important;

    }
    .content p{
        font-size: 12px !important;
    }
    .welcome-p{
        font-size: 11px !important;
        position: relative !important;
        top: 1px !important;
    }
    .welcome{
        max-height: 27px !important;
    }
    .content{
        padding-right: 40px !important;
    }
}

</style>

<?php require_once 'member_component/navbar.php' ?>

<div class="hero-page">
    <div class="two-col context">
        <div class="rem-cont">
            <div class="reminder-container">
                <div class="reminder-lists">
                    <ul>
                        <?php
                        // Fetch reminders from the database
                        $sql = "SELECT id, date, event, location FROM Reminders ORDER BY date DESC";
                        $result = $conn->query($sql);

                        // Check if there are results and display them
                        if ($result->num_rows > 0) {
                            // Output data for each row
                            while ($row = $result->fetch_assoc()) {
                                echo "<li class='reminder-item'>";
                                echo "<div class='reminder-content'>";
                                echo "<div class='reminder-details'>";
                                echo "<div class='reminder-date'><strong>Date:</strong> " . date("M d, Y", strtotime($row['date'])) . "</div>";
                                echo "<div class='reminder-event'><strong>Program:</strong> " . htmlspecialchars($row['event']) . "</div>";
                                echo "<div class='reminder-location'><strong>Location:</strong> " . htmlspecialchars($row['location']) . "</div>";
                                echo "</div>";

                                echo "</div>";
                                echo "</li>";
                            }
                        } else {
                            echo "<li>No reminders found.</li>";
                        }
                        $conn->close();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="two-col content" style="position: relative; right: 50px !important; width: 500px;" >
                <h3>HOME</h3>
                
                <h1 class="introducing" style=" position: relative !important; bottom: 10px !important; font-family: 'Old Standard TT'; font-weight: lighter !important; font-size: 64px; width: 700px;">INTRODUCING</h1>
                <p style="font-style: normal !important; " class="welcome-intro">Welcome to our website dedicated to youth data profiling in Baranggay Sta. Cruz, Tagoloan, Misamis Oriental! Our platform serves as a comprehensive tool for gathering, organizing, and analyzing crucial data pertaining to the youth demographic in this community.</p>
                <div class="welcome">
                <h2 class="welcome-p">WELCOME!</h2>
                </div>
        </div>
    </div>
</div>




</body>
</html>
