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

            <!-- Search Bar -->
            <div class="search-container">
                <input type="text" placeholder="Search..." class="search-bar" id="searchInput" onkeyup="searchFunction()">
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
                echo '<th>Date Added</th>';
                echo '</tr>';
                echo '</thead>';
                echo '<tbody>';

                // Output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td data-label="ID">' . $row['id'] . '</td>';
                    echo '<td data-label="First Name">' . $row['first_name'] . '</td>';
                    echo '<td data-label="Last Name">' . $row['last_name'] . '</td>';
                    echo '<td data-label="Email Address">' . $row['email_address'] . '</td>';
                    echo '<td data-label="Phone Number">' . $row['phone_number'] . '</td>';
                    echo '<td data-label="Birthday">' . $row['birthday'] . '</td>';
                    echo '<td data-label="Gender">' . $row['gender'] . '</td>';
                    echo '<td data-label="User Type">' . $row['user_type'] . '</td>';
                    echo '<td data-label="Is Verified">' . ($row['isVerified'] ? 'Yes' : 'No') . '</td>';
                    echo '<td data-label="Date Added">' . $row['date_added'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
                echo '</div>'; // Close the scrollable container

            } else {
                echo '<p>No users found.</p>';
            }

            // Close the connection
            $conn->close();
            ?>
        </div>
    </div>

<script>
    function searchFunction() {
        let input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toLowerCase();
        table = document.getElementById("userTable");
        tr = table.getElementsByTagName("tr");

        for (i = 1; i < tr.length; i++) {
            tr[i].style.display = "none";
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                        break;
                    }
                }
            }
        }
    }
</script>

</body>
</html>
