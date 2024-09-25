<?php
$server = "localhost";
$user = "root"; // Replace with your MySQL username
$pass = ""; // Replace with your MySQL password
$database = "vkar_project"; // Replace with your database name

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
