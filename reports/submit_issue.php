<?php
session_start();

// Check if the user is logged in, if not redirect them to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Include database connection file
include '../includes/db_connect.php'; // Make sure to update the path to your database connection file

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $issueTitle = mysqli_real_escape_string($conn, $_POST['issueTitle']);
    $issueDescription = mysqli_real_escape_string($conn, $_POST['issueDescription']);
    $username = $_SESSION['username'];

    // Insert the issue report into the database
    $sql = "INSERT INTO issue_reports (username, title, description, created_at) 
            VALUES ('$username', '$issueTitle', '$issueDescription', NOW())";

    if (mysqli_query($conn, $sql)) {
        // Redirect to a confirmation or success page
        header("Location: success.php");
        exit();
    } else {
        // Handle errors
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
