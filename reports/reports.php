<?php
session_start();

// Check if the user is logged in, if not redirect them to the login page
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Masalah</title>
    <link rel="stylesheet" href="../css/style.css"> <!-- Update path to the new location -->
    <style>
        /* General popup styling */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            backdrop-filter: blur(5px); /* Blur the background */
            z-index: 9999;
        }

        .popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 300px;
            width: 100%;
            position: relative;
        }

        .popup-content h2 {
            margin-bottom: 20px;
        }

        .popup-content button {
            margin: 10px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .popup-content button:hover {
            background-color: #0056b3;
        }

        /* Form styling for issue report */
        .form-container {
            position: relative;
            margin: 50px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            z-index: 10;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container form label {
            margin-bottom: 10px;
            font-weight: bold;
        }

        .form-container form input,
        .form-container form textarea {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%;
        }

        .form-container form button {
            padding: 10px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container form button:hover {
            background-color: #218838;
        }

        /* Blurred background styling */
        .blurred-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* White background with transparency */
            backdrop-filter: blur(10px); /* Blur effect */
            z-index: 0; /* Behind the form container */
        }
    </style>
</head>
<body>
    <?php include '../includes/navbar.php'; ?> <!-- Update path to the new location -->

    <div class="blurred-background"></div> <!-- Blurred white background -->

    <div class="form-container">
        <h2>Laporan Masalah</h2>
        <form action="submit_issue.php" method="POST">
            <label for="issueTitle">Judul Masalah:</label>
            <input type="text" id="issueTitle" name="issueTitle" required>

            <label for="issueDescription">Deskripsi Masalah:</label>
            <textarea id="issueDescription" name="issueDescription" rows="5" required></textarea>

            <button type="submit">Kirim Laporan</button>
        </form>
    </div>

    <!-- Popup for logout confirmation -->
    <div id="logoutPopup" class="popup">
        <div class="popup-content">
            <h2>Yakin untuk logout?</h2>
            <button onclick="confirmLogout()">Logout dan kembali ke index.php</button>
            <button onclick="closePopup('logoutPopup')">Batal login dan tetap di dashboard</button>
        </div>
    </div>

    <script>
        function closePopup(popupId) {
            document.getElementById(popupId).style.display = 'none';
        }

        function openLogoutPopup() {
            document.getElementById('logoutPopup').style.display = 'flex';
        }

        function confirmLogout() {
            window.location.href = "logout.php";
        }
    </script>
</body>
</html>
