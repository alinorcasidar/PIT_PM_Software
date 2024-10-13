<?php
require_once 'db.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user ID and the new verification status
    $id = $conn->real_escape_string($_POST['id']);
    $isVerified = $conn->real_escape_string($_POST['isVerified']); // Get the new isVerified value

    // Update the isVerified status in the database
    $sql = "UPDATE users SET isVerified = '$isVerified' WHERE id = '$id'";

    // Execute the query and check for success
    if ($conn->query($sql) === TRUE) {
        echo "Verification status updated successfully";
        header('Location: ../data_profiling.php'); // Redirect back to the page where the table is displayed
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
