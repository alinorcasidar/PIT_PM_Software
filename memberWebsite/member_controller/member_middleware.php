<?php
// Start the session (make sure this is at the top of your script)
session_start();

// Define the pages that can be accessed without being logged in
$public_pages = ['member_index.php', 'member_login.php', 'member_create_account.php']; 

// Define the pages that require authentication
$protected_pages = ['member_about.php', 'member_home.php', 'member_projects.php', 'member_contact.php'];

// Get the current page
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir = dirname($_SERVER['PHP_SELF']);

// Check if the user is logged in
$is_logged_in = isset($_SESSION['user_id']);
$is_verified = isset($_SESSION['isVerified']) && $_SESSION['isVerified'];

// Function to check access permissions
function check_access() {
    global $public_pages, $protected_pages, $current_page, $is_logged_in, $is_verified;

    // If the current page is in the protected pages
    if (in_array($current_page, $protected_pages)) {
        // Check if the user is not logged in or not verified
        if (!$is_logged_in || !$is_verified) {
            // Redirect to the login page (or show an error)
            header('Location: member_login.php?error=LOGIN FIRST!"');
            exit();
        }
    }
}

// Exclude access control for scripts in component and controller folders
if (str_contains($current_dir, '/member_component') || str_contains($current_dir, '/member_controller')) {
    return; // Allow access
}

// Call the access check function
check_access();

// The rest of your code for the protected pages goes here
?>
