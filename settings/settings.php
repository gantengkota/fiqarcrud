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
    <title>Tentang Web</title>
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
    </style>
</head>
<body>
    <?php include '../includes/navbar.php'; ?> <!-- Update path to the new location -->

    <!-- Popup for logout confirmation -->
    <div id="logoutPopup" class="popup">
        <div class="popup-content">
            <h2>Yakin untuk logout?</h2>
            <button onclick="confirmLogout()">Logout dan kembali ke index.php</button>
            <button onclick="closePopup('logoutPopup')">Batal login dan tetap di dashboard</button>
        </div>
    </div>

    <div class="dashboard">
        <h2>Tentang Website</h2>
        <div class="text-box">
            <p>Website ini memberikan informasi seputar tempat PKL untuk semua jurusan, mulai dari Otomotif hingga TKJ. Dibuat oleh [Nama Pembuat] untuk membantu mahasiswa dalam menemukan informasi yang berguna.</p>
            <p>Terima kasih telah menggunakan layanan kami!</p>
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
