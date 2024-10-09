<?php
require_once 'member_db.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $email_address = $conn->real_escape_string($_POST['email_address']);
    $password = $conn->real_escape_string($_POST['password']);

    // Query to fetch user data by email address
    $sql = "SELECT * FROM Users WHERE email_address = '$email_address'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, now verify password
        $user = $result->fetch_assoc();
        
        // Check user type
        if ($user['user_type'] !== 'authorized' && $user['user_type'] !== 'member') {
            // User type is neither authorized nor member, deny login
            echo "Access denied! Only authorized users or members can log in.";
            header('Location: ../login.php?error=Access Denied! Only authorized users or members can log in.');
            exit();
        }

        // Verify password
        if (password_verify($password, $user['password'])) {
            // Successful login, set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['first_name'] = $user['first_name'];
            $_SESSION['last_name'] = $user['last_name'];
            $_SESSION['email_address'] = $user['email_address'];
            $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['isVerified'] = $user['isVerified'];

            // Redirect to dashboard or home page
            echo "Login successful! Welcome " . $_SESSION['first_name'];
            header("Location: ../member_planner.php"); //pwede palitan to ng HOMEPAGE
            exit();
        } else {
            // Incorrect password
            echo "Invalid password!";
            header('Location: ../member_login.php?error=Invalid Password!');
            exit();
        }
    } else {
        // No user found with that email address
        echo "No user found with this email address!";
        header('Location: ../member_login.php?error=No user found with this email address');
        exit();
    }
}

// Close the connection
$conn->close();
?>
