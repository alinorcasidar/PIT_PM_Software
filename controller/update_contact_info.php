<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['contact']) && !empty($_POST['contact'])) {
        // Sanitize input
        $contact = htmlspecialchars($_POST['contact']);

        // Update contact number in the database
        $sql = "UPDATE contact_info SET contact_number = ? WHERE id = 1"; // Assuming you update the first row
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $contact);
        if ($stmt->execute()) {
            echo "New reminder added successfully.";
            header('Location: ../contact.php');
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // Sanitize input
        $email = htmlspecialchars($_POST['email']);

        // Update email address in the database
        $sql = "UPDATE contact_info SET email_address = ? WHERE id = 1"; // Assuming you update the first row
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        if ($stmt->execute()) {
            echo "New reminder added successfully.";
            header('Location: ../contact.php');
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}
