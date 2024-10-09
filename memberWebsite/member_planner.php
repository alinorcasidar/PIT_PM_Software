<?php require_once 'member_controller/member_db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="member_assets/css/style.css?v=<?= filemtime('member_assets/css/style.css'); ?>" rel="stylesheet"/>  
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet'>
</head>
<body>
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
                                // Buttons for update and delete
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
</div>

<!-- CSS for Modern Look -->
<style>
.hero-page{
padding-top: 30px;
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
 .reminder-location, .reminder-event, .reminder-date {
    padding-left: 15px !important;
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
    .btn-update, .btn-delete{
        font-size: 10px !important;
        width: 55px !important;
        height: 24px !important;
    }
    .reminder-location, .reminder-event, .reminder-date {
        font-size: 14px !important;
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
}@media (min-width: 917px) and (max-width: 1134px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 400px !important;
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 350px !important;
    }
}@media (min-width: 768px) and (max-width: 917px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 300px !important;
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 250px !important;
    }
}
@media (max-width: 1134px) {
    html, body {
        overflow: auto; /* Allow scrolling */
    }
}
</style>
</body>
</html>
