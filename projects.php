<?php require_once 'controller/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="assets/css/style.css?v=<?= filemtime('assets/css/style.css'); ?>" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
</head>
<body>  

<?php require_once 'component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col cards w-100 projects" style="width: 2500px;">
            <h2 class="data-profiling-title" style="font-family: 'Old Standard TT'; font-size: 50px; margin-left: 20px; color: #675031;">PREVIOUS PROJECTS</h2>
            
            <div class="project-grid">
            <?php 

                // Query to fetch events data from the database
                $sql = "SELECT id, name, pictures, event_date FROM Events";
                $result = $conn->query($sql);

                // Check if any results were returned
                if ($result->num_rows > 0) {
                    // Loop through each event and display it
                    while ($row = $result->fetch_assoc()) {
                        // HTML structure for displaying each event
                        echo '
                        <div onclick="location=\'project.php?id=' . $row['id'] . '\'" class="grid-container" style="margin-bottom: 20px;  transition: transform 0.3s ease; cursor: pointer; max-width: 300px;" onmouseover="this.style.transform=\'scale(1.1)\'" onmouseout="this.style.transform=\'scale(1)\'">
                        <div class="greyed" style="height: 90%;">
                            <img src="' . $row['pictures'] . '" alt="Image" style="width: 300px; height: 200px; object-fit: cover;">
                            <h3 style="font-family: Open Sans; font-size: 24px;">' . $row['event_date'] . '</h3>
                        </div>
                        <h3 style="font-family: Open Sans; font-size: 21px; color: #444444; position: relative; bottom: 10px; font-style: italic;">' . $row['name'] . '</h3>
                        </div>';
                    }
                } else {
                    // If no events found
                    echo '<p>No events found.</p>';
                }

                // Close the connection
                $conn->close();
                ?>
                <div class="grid-container" style="position: relative; transition: transform 0.3s ease; cursor: pointer;">
                    <div onclick="location='add_project.php'" style="height: 100%; padding-top: 50px">
                    <svg style="width:100px;height:200px; color: #444444 !important;" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                    </svg> 
                    <h3 style="position:relative; color: #444444; font-family: 'Open Sans';">Add new Project</h3>
                </div>
            </div>
        </div>
    </div>

    <style>


        

@media (min-width: 1px) and (max-width: 421px) {
            .project-grid {
                max-width: 270px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
                margin-bottom: 0; /* Reset margin */
                
                
            }
            .greyed {
                height: 350px !important;
                width: 250px !important;
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
                position: static   !important; /* Reset position */
                transition: none !important; /* Disable transition */
                cursor: default !important; /* Change cursor */
                max-width: none !important; /* Remove max-width restriction */
                transform: scale(1) !important; /* Ensure scale is 1 */
                display: grid;
                
            }
        }
        @media (min-width: 421px) and (max-width: 471px) {
            .project-grid {
                max-width: 270px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
                margin-bottom: 0; /* Reset margin */
                display: flex;
                flex-wrap: wrap; /* Allow wrapping */
                gap: 110px; /* Decrease space between the items */
                justify-content: flex-start;
                
            }
            .greyed {
                height: 350px !important;
                width: 250px !important;
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
                position: static   !important; /* Reset position */
                transition: none !important; /* Disable transition */
                cursor: default !important; /* Change cursor */
                max-width: none !important; /* Remove max-width restriction */
                transform: scale(1) !important; /* Ensure scale is 1 */
                display: grid;
                
            }
        }
        @media (min-width: 471px) and (max-width: 576px) {
            .project-grid {
                max-width: 400px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
                margin-bottom: 0; /* Reset margin */
                display: flex;
                flex-wrap: wrap; /* Allow wrapping */
                gap: 40px; /* Decrease space between the items */
                justify-content: flex-start;
                
            }
            .greyed {
                height: 350px !important;
                width: 250px !important;
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
                position: static   !important; /* Reset position */
                transition: none !important; /* Disable transition */
                cursor: default !important; /* Change cursor */
                max-width: none !important; /* Remove max-width restriction */
                transform: scale(1) !important; /* Ensure scale is 1 */
                display: grid;
                
            }
        }
        @media (min-width: 576px) and (max-width: 650px) {
            .project-grid {
                max-width: 500px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
                margin-bottom: 0; /* Reset margin */    
                
            }
            .greyed {
                height: 350px !important;
                width: 250px !important;
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
                position: static   !important; /* Reset position */
                transition: none !important; /* Disable transition */
                cursor: default !important; /* Change cursor */
                max-width: none !important; /* Remove max-width restriction */
                transform: scale(1) !important; /* Ensure scale is 1 */
                display: grid;
                
            }
        }
        @media (min-width: 650px) and (max-width: 692px) {
            .project-grid {
                max-width: 580px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
                margin-bottom: 0; /* Reset margin */    
                
            }
            .greyed {
                height: 350px !important;
                width: 250px !important;
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
                position: static   !important; /* Reset position */
                transition: none !important; /* Disable transition */
                cursor: default !important; /* Change cursor */
                max-width: none !important; /* Remove max-width restriction */
                transform: scale(1) !important; /* Ensure scale is 1 */
                display: grid;
                
            }

            .data-profiling-title {
                font-size: 30px !important; /* Adjust title size */
                margin-left: 0 !important; /* Center title */
            }
        }
        @media (min-width: 692px) and (max-width: 740px) {
            .project-grid {
                width: 620px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
            }

            .data-profiling-title {
                font-size: 30px !important; /* Adjust title size */
                margin-left: 0 !important; /* Center title */
            }
        }
        @media (min-width: 740px) and (max-width: 800px) {
            .project-grid {
                width: 670px !important; /* Full width */
                flex-wrap: nowrap !important; /* Prevent wrapping */
                overflow-x: auto !important; /* Enable horizontal scroll */
            }

            .grid-container {
                margin-right: 20px; /* Add margin between items */
                flex: 0 0 auto; /* Prevent flex items from shrinking */
            }

            .data-profiling-title {
                font-size: 30px !important; /* Adjust title size */
                margin-left: 0 !important; /* Center title */
            }
        }
        @media (max-width: 425px) {
            .data-profiling-title{
                font-size: 25px !important;
            }
        }
        @media (min-width: 425px) and (max-width: 545px) {
            .data-profiling-title{
                font-size: 25px !important;
            }
        }
        @media (min-width: 545px) and (max-width: 912px) {
            .data-profiling-title{
                font-size: 30px !important;
                width: 100% !important;
            }
        }

    </style>
</body>
</html>
