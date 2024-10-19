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
                $sql = "SELECT id, name, pictures,description, event_date FROM Events";
                $result = $conn->query($sql);

                // Check if any results were returned
                if ($result->num_rows > 0) {
                    // Loop through each event and display it
                    // Loop through eaAch event and display it
                    while ($row = $result->fetch_assoc()) {
                        // HTML structure for displaying each event
                        echo '
                        <div class="grid-container">
                            <div class="greyed" style="height: 90%;">
                                <img src="memberWebsite/' . $row['pictures'] . '" alt="Image" style="width: 300px; height: 200px; object-fit: cover;">
                                <h3 style="font-family: Open Sans; font-size: 24px;">' . $row['event_date'] . '</h3>
                                <div style="display: flex; justify-content: space-around; margin-top: 10px;">
                                    <button class="btn-update" onclick="openUpdateModal(' . $row['id'] . ', \'' . htmlspecialchars($row['name'], ENT_QUOTES) . '\', \'' . htmlspecialchars($row['pictures'], ENT_QUOTES) . '\', \'' . htmlspecialchars($row['description'], ENT_QUOTES) . '\', \'' . htmlspecialchars($row['event_date'], ENT_QUOTES) . '\')">Update</button>
                                    <button class="btn-delete" onclick="openDeleteModal(' . $row['id'] . ')">Delete</button>
                                </div>
                            </div>
                            <a></a>
                            <h3  onclick="location=\'project.php?id=' . $row['id'] . '\'" style="cursor: pointer !important; font-family: Open Sans; font-size: 21px; color: #444444; position: relative; bottom: 10px; font-style: italic;">' . $row['name'] . '</h3>
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
    <!-- Delete Modal -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <p style="font-family: Arial;">Are you sure you want to delete this reminder?</p>
        <form action="controller/delete_event.php" method="post">
            <input  type="hidden" id="deleteId" name="id">
            <button type="submit" class="btn-delete-modal">Yes</button>
            <button type="button" class="btn-cancel-modal" onclick="closeDeleteModal()">Cancel</button>
        </form>
    </div>
</div>

<!-- Update Modal -->
<div id="updateModal" class="modal">
    <div class="modal-content">
        <h2 style="font-family: 'Open Sans'; text-align: center;">Update Event</h2>
        <form action="memberWebsite/member_controller/update_event.php" method="post" enctype="multipart/form-data">
            <input type="hidden" id="updateId" name="id">
            <input type="hidden" id="existing_pictures" name="existing_pictures"> <!-- Hidden field added -->

            <label for="updateDate">Event Date:</label>
            <input style="font-family: 'Open Sans';" type="date" id="updateDate" name="event_date" required>

            <label for="updateName">Event Name:</label>
            <input style="font-family: 'Open Sans';" type="text" id="updateName" name="name" placeholder="Event Name" required>

            <label for="updateDescription">Description:</label>
            <input style="font-family: 'Open Sans';" type="text" id="updateDescription" name="description" placeholder="Event Description" required>

            <label for="existingPicture">Current Picture:</label>
            <img id="existingPicture" src="" alt="Event Picture" style="max-width: 100px; display: block; margin-bottom: 10px;">

            <label for="updatePicture">Upload New Picture:</label>
            <input style="font-family: 'Open Sans';" type="file" id="updatePicture" name="pictures" accept="image/*">

            <button type="submit" class="btn-update-modal">Update</button>
            <button type="button" class="btn-cancel-modal" onclick="closeUpdateModal()">Cancel</button>
        </form>
    </div>
</div>


<!-- JavaScript for Modal Handling -->
<script>
    function openDeleteModal(id) {
    document.getElementById('deleteId').value = id;
    document.getElementById('deleteModal').style.display = 'block';
}    

function closeDeleteModal() {
    document.getElementById('deleteModal').style.display = 'none';
}
function openUpdateModal(id, name, picture, description, eventDate) {
    // Set the values in the modal fields
    document.getElementById('updateId').value = id;
    document.getElementById('updateName').value = name;
    document.getElementById('existing_pictures').value = picture; // Set the hidden field value
    document.getElementById('updateDescription').value = description;
    document.getElementById('updateDate').value = eventDate;

    // Set the image source for the current picture
    const existingPicture = document.getElementById('existingPicture');
    existingPicture.src = 'memberWebsite/' + picture; // Adjust the path as necessary

    // Open the modal
    const modal = document.getElementById('updateModal');
    modal.style.display = 'block';
}

// Function to close the modal
function closeUpdateModal() {
    const modal = document.getElementById('updateModal');
    modal.style.display = 'none';
}

</script>

    <style>
        /* Button Design */
        .btn-delete, .btn-update, .btn-cancel, .btn-cancel-modal, .btn-update-modal, .btn-delete-modal {
            padding: 6px 12px;
            font-size: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            text-decoration: none;
            width: 80px;
            
        }

        .btn-delete,.btn-delete-modal, .btn-cancel-modal {
            background-color: #dc3545;
            color: white;
            cursor: pointer;
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


        input, button {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"].button {
            background-color: #007bff;
            color: white;
        }

        input[type="submit"].button:hover {
            background-color: #0056b3;
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
