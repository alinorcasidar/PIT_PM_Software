<?php require_once 'controller/db.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software PIT</title>
    <link href="assets/css/style.css?v=<?= filemtime('assets/css/style.css'); ?>"rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap-icons.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Orienta' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Old+Standard+TT' rel='stylesheet'>
</head>
<body>
<?php require_once 'component/navbar.php' ?>

<div class="hero-page" style="position: relative; left: 300px !important; position: relative; bottom: 20px;">
    <div class="cards">
        <div class="card" style="width: 390px !important; max-height: 500px !important; margin-right: 30px;">
                <h2 style="font-family: 'Orienta'; font-weight: lighter; font-size: 20px;">Free Website</h2>
                <h1 style="font-family: 'Orienta'; font-weight: lighter; font-size: 30px; line-height: 8px; display: inline !important; ">P 0.00</h1><p style="font-family: 'Orienta'; font-weight: lighter; font-size: 12px; line-height: 8px; display: inline-block;">/month</p>
                <hr style="border: 1.5px solid #C9C9C9;">
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; "><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Data Profiling</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Add Projects</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 20px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Message / Email</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 30px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Print Data</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 40px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Costum Design</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px;  position: relative; bottom: 50px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Free Domain / Host</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 60px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Enhanced Security</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 70px; color: #9B9B9B;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Priority Customer Support</p>
                <a class="button" href="data_profiling.php" style="position: relative; bottom: 70px; ">Get Free</a>
            </div>
    </div>
    <div class="text-email">
    <div class="cards">
    <div class="card" style="width: 390px !important; max-height: 500px !important; margin-left: 30px !important;">
                <h2 style="font-family: 'Orienta'; font-weight: lighter; font-size: 20px;">Premium Website</h2>
                <h1 style="font-family: 'Orienta'; font-weight: lighter; font-size: 30px; line-height: 8px; display: inline !important; ">P 9,999.90</h1><p style="font-family: 'Orienta'; font-weight: lighter; font-size: 12px; line-height: 8px; display: inline-block;">/month</p>
                <hr style="border: 1.5px solid #C9C9C9;">
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; "><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Data Profiling</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Add Projects</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 20px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Message / Email</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 30px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Print Data</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 40px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Costum Design</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px;  position: relative; bottom: 50px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Free Domain / Host</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 60px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Enhanced Security</p>
                <p style="font-family: 'Orienta'; font-weight: lighter; font-size: 17px; line-height: 0px; position: relative; bottom: 70px;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425z"/>
                </svg>Priority Customer Support</p>
                <a class="button" href="ads.php" style="position: relative; bottom: 70px; ">Get Premium</a>
            </div>
        
    </div>
    </div>
    
</div>

<!-- Delete Modal -->
<div id="deleteModal" class="modal">
    <div class="modal-content">
        <p style="font-family: 'Open Sans'; text-align: center;" >Are you sure you want to delete this reminder?</p>
        <form action="controller/delete_reminder.php" method="post">
            <input  type="hidden" id="deleteId" name="id">
            <button type="submit" class="btn-delete-modal">Yes</button>
            <button type="button" class="btn-cancel-modal" onclick="closeDeleteModal()">Cancel</button>
        </form>
    </div>
</div>

<!-- Update Modal -->
<div id="updateModal" class="modal">
    <div class="modal-content">
        <h2 style="font-family: 'Open Sans'; text-align: center;">Update Reminder</h2>
        <form action="controller/update_reminder.php" method="post">
            <input type="hidden" id="updateId" name="id">
            <input style="font-family: 'Open Sans';" type="date" id="updateDate" name="date" required>
            <input style="font-family: 'Open Sans';" type="text" id="updateEvent" name="event" placeholder="Event Description" required>
            <input style="font-family: 'Open Sans';" type="text" id="updateLocation" name="location" placeholder="Location" required>
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

function openUpdateModal(id, date, event, location) {
    document.getElementById('updateId').value = id;
    document.getElementById('updateDate').value = date;
    document.getElementById('updateEvent').value = event;
    document.getElementById('updateLocation').value = location;
    document.getElementById('updateModal').style.display = 'block';
}

function closeUpdateModal() {
    document.getElementById('updateModal').style.display = 'none';
}
</script>

<!-- CSS for Modern Look -->
<style>
.hero-page{
padding-top: 30px;
}
html, body {
    overflow: hidden; /* Prevent scrolling */
}
.card-text {
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    background-color: #fff;

}
.hero-page .cards .card-text input[type="submit"] {
    background-color: #A7957D;
    color: white !important;
    font-family: 'Open Sans' !important;
    font-weight: bold !important;
    font-size: 20px !important;
}

.hero-page .cards .card-text select {
    display: block;
    padding: 13px 24px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, 0.073);
    color: var(--color);
    border: 0;
    font-size: 16px;
    margin: 20px 0;
    width: 100%;   
    border: 2px solid transparent; 
    outline: 0;
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

.reminder-actions {
    display: flex;
    gap: 10px;
    padding: 10px 10px 0px 70px;
    margin-top: 10px;
    position: relative;
    left: 20px;
}

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

.btn-delete, .btn-delete-modal {
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


/* Base styles for the card */
.card {
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    border-radius: 8px;
    background-color: #fff;
}
.hero-page .cards .card-text input {
    display: block;
    padding: 13px 24px;
    border-radius: 8px;
    background-color: rgba(0, 0, 0, 0.073);
    color: black;
    border: 0;
    font-size: 16px;
    margin: 10px 0;
    width: 100%;   
    border: 2px solid transparent; 
    outline: 0;
}

/* Media query for responsiveness */
@media (max-width: 448px) {
    .card, .card-text {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 100px !important;
    }
    .text-email {
        position: relative !important;
        right: 175px !important;

    }
    .card-text {
        width: 250px !important; /* Make the card take 90% width of the container */
        height: 320px !important;
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
    input{
        font-size: 12px !important;
        height: 40px !important;
        margin: 0px 0px 10px !important;
    }
    .button{
        font-size: 15px !important;
        height: 30px !important;
        padding-top: 5px !important;
    }
    .card h2{
        font-size: 17px !important;
    }
    
}
@media (min-width: 448px) and (max-width: 544px) {
    .card, .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 100px !important;
    }
    .text-email {
        position: relative !important;
        right: 195px !important;

    }
    .card-text {
        width: 290px !important; /* Make the card take 90% width of the container */
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
    .card {
        width: 300px !important; 
        position: relative !important;

    }
    input{
        font-size: 12px !important;
    }
    .button{
        font-size: 15px !important;
        height: 40px !important;
        position: relative;
    }
    
}
@media (min-width: 545px) and (max-width: 768px) {
    .card {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 200px !important;
    }
    .text-email {
        position: relative !important;
        right: 95px !important;

    }

    h2 {
        font-size: 20px !important; /* Adjust font size for smaller screens */
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 150px !important;
    }
}@media (min-width: 917px) and (max-width: 1134px) {
    .card, .card-text {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 400px !important;
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 350px !important;
    }
}@media (min-width: 768px) and (max-width: 917px) {
    .card, .card-text {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 300px !important;
    }
    .rem-cont {
        width: 90% !important; /* Make the card take 90% width of the container */
        margin-left: 250px !important;
    }
}
@media (max-width: 1006px) {
    .card-text{
        position: relative !important;
        left: 90% !important;
        bottom : 20% !important;
    }
    .card{
        margin-bottom: 5% !important;
    }
    
}
@media (max-width: 917px) {
    .card-text{
        position: relative !important;
        left: 56% !important;


    }
    .card{
        margin-bottom: 5% !important;
        margin-right: 200px !important;
    }
    
}
@media (max-width: 1134px) {
    html, body {
        overflow: auto; /* Allow scrolling */
        padding-bottom: 200px !important;
    }
}
@media (max-width: 544px) {
    .hero-page{
        margin-left: 50px !important;
    }
}
</style>
</body>
</html>
