<?php
session_start();
require('../admin/login_admin/config.php');

// Cek apakah pengguna sudah login, jika tidak arahkan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Mengambil data untuk jurusan BP dari tabel tempat_pkl_bp
$query = "SELECT * FROM tempat_pkl_tkr"; // Update the query to the new table
$result = mysqli_query($conn, $query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Tempat PKL TKR</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        /* Table styling */
        .info-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .info-table th, .info-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .info-table th {
            background-color: #007bff;
            color: white;
        }

        .info-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .info-table tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <?php include '../includes/navbar.php'; ?>

    <div class="dashboard">
        <h2>Kendaraan Ringan</h2>
        <div class="text-box">
            <p>Berikut adalah tempat PKL untuk jurusan Teknik Kendaraan Ringan</p>
        </div>

        <!-- Table for displaying information -->
        <table class="info-table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Tempat</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Mengambil data dari query dan menampilkan di tabel
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['No'] . "</td>";
                    echo "<td>" . $row['Nama_Tempat'] . "</td>";
                    echo "<td>" . $row['Alamat'] . "</td>";
                    echo "<td>" . $row['Nomor_Telepon'] . "</td>";
                    echo "<td>" . $row['Email'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function confirmLogout() {
            window.location.href = "logout.php";
        }
    </script>
</body>
</html>
