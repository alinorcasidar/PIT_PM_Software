<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $event = $_POST['event'];
    $location = $_POST['location'];

    // Validate if ID, date, event, and location are set
    if (!empty($id) && !empty($date) && !empty($event) && !empty($location)) {
        $sql = "UPDATE Reminders SET date = ?, event = ?, location = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $date, $event, $location, $id); // 's' for strings, 'i' for integer type

        if ($stmt->execute()) {
            // After successful update, redirect to the main page
            header('Location: ../planner.php');
            exit();
        } else {
            echo "Error updating reminder: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Invalid input.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
