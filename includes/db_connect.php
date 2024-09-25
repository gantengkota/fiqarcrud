<?php
$servername = "localhost"; // Database server address
$username = "root";        // Database username
$password = "";            // Database password
$dbname = "vkar_project"; // Database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
