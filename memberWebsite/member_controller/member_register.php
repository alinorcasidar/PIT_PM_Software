<?php
require_once 'member_db.php'; // Ensure this points correctly to your db.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate user inputs
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email_address = trim($_POST['email_address']);
    $phone_number = trim($_POST['phone_number']);
    $password = trim($_POST['password']);
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    // Set default values for user_type and isVerified
    $user_type = 'authorized'; // Set user type to authorized
    $isVerified = 0; 

    // Check if email already exists
    $checkEmailQuery = "SELECT email_address FROM Users WHERE email_address = ?";
    $stmt = $conn->prepare($checkEmailQuery);
    $stmt->bind_param("s", $email_address);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Email already exists, redirect with error
        header("Location: ../member_create_account.php?error=" . urlencode("Email already exists."));
        exit();
    } else {
        // Proceed with registration
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

        $insertQuery = "INSERT INTO Users (first_name, last_name, email_address, phone_number, password, birthday, gender) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("sssssss", $first_name, $last_name, $email_address, $phone_number, $hashed_password, $birthday, $gender);

        if ($stmt->execute()) {
            // Registration successful, redirect to a success page
            header('Location: ../member_login.php?success');
            exit();
        } else {
            // Registration failed, redirect with error
            header("Location: ../member_create_account.php?error=" . urlencode("Registration failed. Please try again."));
            exit();
        }
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    // Not a POST request, redirect to registration page
    header("Location: ../registration_page.php");
    exit();
}
?>
