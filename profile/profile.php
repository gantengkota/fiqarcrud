<!DOCTYPE html>
<html lang="en">
<head>
    <title>INFO PKL SKAGATA</title>
    <link rel="icon" type="image/x-icon" href="../images/ambatukam.jpeg">    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/profile.css"> <!-- Update path to the new location -->
    <style>
        /* Profile box styling */
        .profile-box {
            width: 200px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            margin: 10px;
            cursor: pointer;
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .profile-box:hover {
            transform: scale(1.05);
        }

        .founder-photo {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .profile-box h2 {
            margin: 10px 0;
            padding: 0 10px;
            font-size: 16px;
            line-height: 1.2;
        }

        .profile-box p {
            padding: 0 10px 10px;
            margin: 0;
            font-size: 14px;
            color: #666;
        }

        .profile-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        /* Text box styling */
        .text-box {
            padding: 20px;
            margin: 20px auto;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 80%;
        }
    </style>
</head>
<body>
    <?php include '../includes/navbar.php'; ?> <!-- Update path to the new location -->

    <div class="dashboard">
        <div class="text-box">
            <h1>Pilihan Jurusan</h1>
            <p>Pilihlah sesuai jurusan kalian</p>
        </div>

        <div class="profile-container">
            <!-- Profile Box 1 -->
            <a href="bp.php" class="profile-box">
                <h2>Broadcasting & Perfilman</h2>
            </a>
            <!-- Profile Box 2 -->
            <a href="tj.php" class="profile-box">
                <h2>Teknik Komputer Jaringan & Telekomunikasi</h2>
            </a>
            <!-- Profile Box 3 -->
            <a href="dpib.php" class="profile-box">
                <h2>Desain Permodelan & Informasi Bangunan</h2>
                
            </a>
            <!-- Profile Box 4 -->
            <a href="kp.php" class="profile-box">
                <h2>Teknik Konstruksi & Perumahan</h2>
            </a>
            <!-- Profile Box 5 -->
            <a href="tl.php" class="profile-box">
               <h2>Teknik Instalasi Tenaga Listrik</h2>
            </a>
            <!-- Profile Box 6 -->
            <a href="tp.php" class="profile-box">
                <h2>Teknik Pemesinan</h2>
            </a>
            <!-- Profile Box 7 -->
            <a href="tkr.php" class="profile-box">
                <h2>Teknik Kendaraan Ringan</h2>
            </a>
            <!-- Profile Box 8 -->
            <a href="te.php" class="profile-box">
                <h2>Teknik Elektronika Industri</h2>
            </a>
        </div>
    </div>
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

</body>
</html>
