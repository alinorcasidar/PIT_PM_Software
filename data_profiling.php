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
    <link href='https://fonts.googleapis.com/css?family=Old Standard TT' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Blinker' rel='stylesheet'>
    <style>
        /* New CSS for table font */
        .hero-page .two-col.cards.w-100.projects table {
            font-family: 'Open Sans', sans-serif; /* Change to your desired font */
            font-size: 15px; /* Adjust font size as needed */
        }

        .search-container {
            margin: 20px 0; /* Space above and below the search bar */
            display: flex; /* Use flexbox for centering */
            justify-content: flex-start; /* Align items to the left */
        }

        .search-bar {
            width: 100%; /* Full width */
            max-width: 400px; /* Maximum width */
            padding: 10px; /* Padding inside the input */
            border: 1px solid #ccc; /* Border color */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
            transition: border-color 0.3s ease; /* Smooth transition for focus */
        }

        .search-bar:focus {
            border-color: #675031; /* Border color on focus */
            outline: none; /* Remove default outline */
        }
    </style>
</head>
<body>

<?php require_once 'component/navbar.php' ?>

    <div class="hero-page">
        <div class="two-col cards w-100 projects">
            <h2 class="data-profiling-title" style="font-family: 'Old Standard TT'; font-size: 50px; align-items: center; margin-left: 250px; color: #675031;">DATA PROFILING</h2>

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
                echo '<table border="1" id="userTable">';
                echo '<thead>';
                echo '<tr>';
                echo '<th style="min-width: 100px; overflow-x: auto; white-space: nowrap;">ID</th>';
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
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['first_name'] . '</td>';
                    echo '<td>' . $row['last_name'] . '</td>';
                    echo '<td>' . $row['email_address'] . '</td>';
                    echo '<td>' . $row['phone_number'] . '</td>';
                    echo '<td>' . $row['birthday'] . '</td>';
                    echo '<td>' . $row['gender'] . '</td>';
                    echo '<td>' . $row['user_type'] . '</td>';
                    echo '<td>' . ($row['isVerified'] ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . $row['date_added'] . '</td>';
                    echo '</tr>';
                }

                echo '</tbody>';
                echo '</table>';
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
        // Declare variables
        let input, filter, table, tr, td, i, j, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toLowerCase();
        table = document.getElementById("userTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those that don't match the search query
        for (i = 1; i < tr.length; i++) { // Start from 1 to skip header
            tr[i].style.display = "none"; // Initially hide row
            // Loop through all cells in the row
            td = tr[i].getElementsByTagName("td");
            for (j = 0; j < td.length; j++) {
                if (td[j]) {
                    txtValue = td[j].textContent || td[j].innerText;
                    if (txtValue.toLowerCase().indexOf(filter) > -1) {
                        tr[i].style.display = ""; // Show row if match found
                        break; // Stop the loop
                    }
                }
            }
        }
    }
</script>

</body>
</html>
