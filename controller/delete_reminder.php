<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];

    // Validate if ID is set
    if (!empty($id)) {
        $sql = "DELETE FROM Reminders WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id); // 'i' for integer type

        if ($stmt->execute()) {
            // After successful deletion, redirect to the main page
            header('Location: ../planner.php');
            exit();
        } else {
            echo "Error deleting reminder: " . $conn->error;
        }
        $stmt->close();
    } else {
        echo "Invalid reminder ID.";
    }
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
