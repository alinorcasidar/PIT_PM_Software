<?php
require_once 'member_db.php'; // Include the database connection

// Enable error reporting for debugging (disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve and sanitize form data
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $event_name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $event_description = isset($_POST['description']) ? trim($_POST['description']) : '';
    $event_date = isset($_POST['event_date']) ? trim($_POST['event_date']) : '';

    // Validate required fields
    if ($id <= 0 || empty($event_name) || empty($event_description) || empty($event_date)) {
        echo "Invalid form data.";
        exit;
    }

    // Initialize image path variable
    $image_path = isset($_POST['existing_pictures']) ? trim($_POST['existing_pictures']) : '';

    // Check if a new image is uploaded
    if (isset($_FILES['pictures']) && $_FILES['pictures']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = "../member_assets/img/"; // Use absolute path
        $original_file_name = basename($_FILES['pictures']['name']);
        $imageFileType = strtolower(pathinfo($original_file_name, PATHINFO_EXTENSION));

        // Generate a unique file name to prevent overwriting
        $unique_file_name = uniqid('event_', true) . '.' . $imageFileType;
        $file_path = $upload_dir . $unique_file_name;

        // Check if the uploaded file is a valid image
        $check = getimagesize($_FILES['pictures']['tmp_name']);
        if ($check === false) {
            echo "File is not an image.";
            exit;
        }

        // Check file size (limit to 2MB)
        if ($_FILES['pictures']['size'] > 2000000) {
            echo "Sorry, your file is too large.";
            exit;
        }

        // Allow only specific file formats
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            exit;
        }

        // Move the uploaded file to the destination directory
        if (move_uploaded_file($_FILES['pictures']['tmp_name'], $file_path)) {
            // Use relative path for database storage
            $image_path = "member_assets/img/" . $unique_file_name;
            echo "File uploaded to: " . $image_path . "<br>"; // Debugging output
        } else {
            echo "Error uploading the new image.";
            exit;
        }
    } 

    // Prepare the SQL query to update the event
    $sql = "UPDATE Events SET name = ?, description = ?, event_date = ?, pictures = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Bind the parameters and execute the query
        $stmt->bind_param("ssssi", $event_name, $event_description, $event_date, $image_path, $id);
        
        if ($stmt->execute()) {
            echo "Event updated successfully.<br>";
            header("Location: ../../projects.php?success=1"); // Redirect to projects page after update
            exit;
        } else {
            echo "Error updating event: " . htmlspecialchars($stmt->error);
        }

        $stmt->close();
    } else {
        echo "Error preparing the update statement: " . htmlspecialchars($conn->error);
    }

    $conn->close();
}
?>
