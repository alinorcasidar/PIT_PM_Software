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
    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
    
    <style>
        /* General styles */
        body {
            overflow-x: hidden;
        }
        .hero-page .two-col.cards.w-100.projects table {
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
            width: 100%;
            border-collapse: collapse;
        }

        .search-container {
            margin: 20px 0;
            display: flex;
            justify-content: flex-start;
        }

        .search-bar {
            width: 100%;
            max-width: 400px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s ease;
        }

        .search-bar:focus {
            border-color: #675031;
            outline: none;
        }
        .data-profiling-title {
            font-family: 'Old Standard TT' !important;
            font-size: 50px !important;
            color: #675031 !important;
            text-align: center !important; /* Center the text */
           
        }
        /* Button Styles */
        #printMemberBtn, #printAuthorizedBtn {
            border-radius: 20px;
            font-family: 'Open Sans' !important;
            color: white;
            background-color: #A7957D !important;
            font-size: clamp(1rem, 1.5vw, 15px) !important;
            transition: background-color 0.3s, transform 0.3s; /* Smooth transition */
        }

        /* Hover Effect */
        #printMemberBtn:hover, #printAuthorizedBtn:hover {
            background-color: #D6B1A0 !important; /* Lighter shade for hover */
            transform: scale(1.05); /* Slightly enlarge the button */
        }
        #closeModal {
            transition: color 0.3s;
        }

        /* Hover Effect for X Icon */
        #closeModal:hover {
            color: black; /* Change color on hover */
        }

        


        

        

        /* Responsive table styles */
        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            table caption {
                font-size: 1.3em;
            }

            table thead {
                border: none;
                clip: rect(0 0 0 0);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
            }

            table tr {
                border-bottom: 3px solid #ddd;
                display: block;
                margin-bottom: .625em;
            }

            table td {
                border-bottom: 1px solid #ddd;
                display: block;
                font-size: .8em;
                text-align: right;
                padding: 8px;
                max-width: 100% !important;
            }

            table td::before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }

            table td:last-child {
                border-bottom: 0;
            }
        }
        @media screen and (max-width: 1133px) {
            .table-container {
            max-width: 1500px !important;
            overflow-x: auto; /* Enable horizontal scroll inside container if needed */
            -webkit-overflow-scrolling: touch; /* Smooth scrolling on mobile */
        }
        .data-profiling-title{
            text-align: center !important;
        }
        
        }
        @media screen and (max-width: 1340px) {
            table{
            margin-left: 80px;
        }
        }
        @media (min-width: 1133px) and (max-width: 2000px) {
            .data-profiling-title{
                position: relative !important;
                left: 170px !important;
            }
        }
        @media (min-width: 600px) and (max-width: 744px) {
            .data-profiling-title{
                font-size: 43px !important;
            }
        }
        @media (min-width: 0px) and (max-width: 600px) {
            .data-profiling-title{
                font-size: 33px !important;
            }
            /* General styles */
body {
    overflow-x: hidden; /* Prevent horizontal scroll for the entire page */
}

.hero-page .two-col.cards.w-100.projects table {
    font-family: 'Open Sans', sans-serif;
    font-size: 15px;
    width: 100%; /* Ensure the table takes up the full container width */
    border-collapse: collapse;
    table-layout: fixed; /* Prevent the table from expanding beyond its container */
    position: relative; /* Ensure it stays within the container */
    overflow: hidden; /* Prevent scroll bars inside the table */
}

.table-container {
    overflow: hidden !important; /* Remove scroll bars in the table container */
    max-width: 100%; /* Ensure the container doesn't overflow */
    position: relative;
}

    }

    </style>
</head>
<body>

<?php require_once 'component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col cards w-100 projects">
            <h2 class="data-profiling-title">DATA PROFILING</h2>

            <div class="flex-container" style="display: flex; align-items: center; gap: 10px;">
    <!-- Print Data Button -->
    <button class="btn-print" id="printDataBtn" style="font-family: Open Sans !important; font-size: clamp(1rem, 1vw, 22px) !important; border-color: #F95454 !important; background-color: #F95454 !important; color: white; border-radius: 15px !important; padding: 5px !important; cursor: pointer;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/>
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1"/>
        </svg> 
        Print Data
    </button>
    
    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" placeholder="Search..." class="search-bar" id="searchInput" onkeyup="searchFunction()">
    </div>
</div>

           <!-- Modal for Print Selection -->
            <div id="printModal" style="  display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background-color:white; padding:20px; border:1px solid #ccc; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); z-index:100;">
                <h3 style="font-size: clamp(1rem, 2vw, 22px) !important; font-family: Open Sans !important; padding-bottom: 30px !important;">Select Data to Print</h3>
                <span id="closeModal" style="cursor: pointer; color: #E4E0E1; font-size: 15px; position: absolute; top: 10px; right: 15px;" onclick="closeModal()">✖</span>
                <button id="printAuthorizedBtn" style="margin-right: 10px;">Authorized</button>
                <button id="printMemberBtn">Member</button>
            </div>



            <?php
                // Query to fetch all users from the Users table
                $sql = "SELECT id, first_name, last_name, email_address, phone_number, birthday, gender, user_type, isVerified, date_added FROM Users";
                $result = $conn->query($sql);

                // Check if there are any users in the table
                if ($result->num_rows > 0) {
                    // Start building the HTML table
                    echo '<div class="table-container">'; // Add a scrollable container
                    echo '<table border="1" id="userTable">';
                    echo '<thead>';
                    echo '<tr>';
                    echo '<th>ID</th>';
                    echo '<th>First Name</th>';
                    echo '<th>Last Name</th>';
                    echo '<th>Email Address</th>';
                    echo '<th>Phone Number</th>';
                    echo '<th>Birthday</th>';
                    echo '<th>Gender</th>';
                    echo '<th>User Type</th>';
                    echo '<th>Is Verified</th>';
                    echo '<th>Status</th>';
                    echo '<th>Date Added</th>';
                    echo '</tr>';
                    echo '</thead>';
                    echo '<tbody>';

                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td data-label="ID">' . $row['id'] . '</td>';
                        echo '<td data-label="First Name" style="max-width: 120px; overflow: hidden; white-space: normal; word-wrap: break-word;">' . $row['first_name'] . '</td>';
                        echo '<td data-label="Last Name" style="max-width: 120px; overflow: hidden; white-space: normal; word-wrap: break-word;">' . $row['last_name'] . '</td>';
                        echo '<td data-label="Email Address" style="max-width: 250px; overflow: hidden; white-space: normal; word-wrap: break-word;">' . $row['email_address'] . '</td>';
                        echo '<td data-label="Phone Number" style="max-width: 150px; overflow: hidden; white-space: normal; word-wrap: break-word;">' . $row['phone_number'] . '</td>';
                        echo '<td data-label="Birthday">' . $row['birthday'] . '</td>';
                        echo '<td data-label="Gender">' . $row['gender'] . '</td>';
                        echo '<td data-label="User Type">' . $row['user_type'] . '</td>';
                        // Create a form with an input field for updating the 'isVerified' status
                        echo '<td data-label="Is Verified">';
                        echo '<form method="POST" action="controller/update_verification.php">';
                        echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                        echo '<input type="number" name="isVerified" value="' . $row['isVerified'] . '" min="0" max="1" style="border-color: #A7957D !important;">';
                        echo '<button type="submit" style="font-family: Open Sans !important; background-color:#A7957D !important; margin-top: 5px; color: white; cursor: pointer;">Update</button>';
                        echo '</form>';
                        echo '</td>';
                        echo '<td data-label="status">' . ($row['isVerified'] == 1 ? 'Verified' : 'Not Verified') . '</td>';
                        echo '<td data-label="Date Added">' . $row['date_added'] . '</td>';
                        echo '</tr>';
                    }

                    echo '</tbody>';
                    echo '</table>';
                    echo '</div>'; // Close the scrollable container

                } else {
                    echo '<p>No users found.</p>';
                }
                ?>

        </div>
    </div>

    <script>
    // Search function to filter the table based on user input
    function searchFunction() {
        let input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toLowerCase();
        table = document.getElementById("userTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) { // Start from 1 to skip header
            tr[i].style.display = "none"; // Hide all rows initially
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = ""; // Show matching rows
                        break; // Exit the loop if a match is found
                    }
                }
            }
        }
    }

    // Show the modal when "Print Data" is clicked
    document.getElementById('printDataBtn').addEventListener('click', function() {
        document.getElementById('printModal').style.display = 'block';
    });

    // Close modal function
    function closeModal() {
        document.getElementById('printModal').style.display = 'none';
    }

    // Print authorized users
    document.getElementById('printAuthorizedBtn').addEventListener('click', function() {
        filterTable('authorized');
        printTable();
        closeModal();
    });

    // Print member users
    document.getElementById('printMemberBtn').addEventListener('click', function() {
        filterTable('member');
        printTable();
        closeModal();
    });

    // Function to filter the table based on user type and verified status
    function filterTable(type) {
        let table, tr, td, i;
        table = document.getElementById("userTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) { // Skip the header row
            tr[i].style.display = "none"; // Hide all rows initially
            td = tr[i].getElementsByTagName("td"); // Get all cells in the row

            let userType = td[7]; // User Type column (8th column)
            let status = td[9]; // Status column (10th column)

            if (userType && status) {
                if ((type === 'authorized' && userType.innerText === 'authorized' && status.innerText === 'Verified') || 
                    (type === 'member' && userType.innerText === 'member' && status.innerText === 'Verified')) {
                    tr[i].style.display = ""; // Show matching rows
                }
            }
        }
    }

// Function to print the table
function printTable() {
    let originalContents = document.body.innerHTML;
    let printContents = '<table border="1"><thead><tr>';
    
    // Define the header without "Is Verified"
    printContents += '<th>ID</th>';
    printContents += '<th>First Name</th>';
    printContents += '<th>Last Name</th>';
    printContents += '<th>Email Address</th>';
    printContents += '<th>Phone Number</th>';
    printContents += '<th>Birthday</th>';
    printContents += '<th>Gender</th>';
    printContents += '<th>User Type</th>';
    printContents += '<th>Status</th>'; // Keep status
    printContents += '<th>Date Added</th>';
    printContents += '</tr></thead><tbody>';

    let table = document.getElementById("userTable");
    let tr = table.getElementsByTagName("tr");

    for (let i = 1; i < tr.length; i++) { // Start from 1 to skip header
        if (tr[i].style.display !== "none") { // Only include visible rows
            printContents += '<tr>';
            let td = tr[i].getElementsByTagName("td");
            
            // Add all columns except the "Is Verified" column (index 8)
            printContents += '<td>' + td[0].innerText + '</td>'; // ID
            printContents += '<td>' + td[1].innerText + '</td>'; // First Name
            printContents += '<td>' + td[2].innerText + '</td>'; // Last Name
            printContents += '<td>' + td[3].innerText + '</td>'; // Email Address
            printContents += '<td>' + td[4].innerText + '</td>'; // Phone Number
            printContents += '<td>' + td[5].innerText + '</td>'; // Birthday
            printContents += '<td>' + td[6].innerText + '</td>'; // Gender
            printContents += '<td>' + td[7].innerText + '</td>'; // User Type
            printContents += '<td>' + td[9].innerText + '</td>'; // Status
            printContents += '<td>' + td[10].innerText + '</td>'; // Date Added
            printContents += '</tr>';
        }
    }

    printContents += '</tbody></table>';
    
    document.body.innerHTML = printContents; // Set the content to print
    window.print(); // Trigger the print dialog

    // Restore original contents after printing
    document.body.innerHTML = originalContents;

    // Refresh the page after a short delay
    setTimeout(function() {
        location.reload(); // Reload the page
    }, 100); // Adjust the delay (in milliseconds) if needed
}


</script>



</body>
</html>
