<?php
session_start();
require('config.php');

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Tambahkan ini di awal file PHP Anda untuk menangkap semua error
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Mendapatkan jurusan dari query string atau default ke 'bp'
$jurusan = isset($_POST['jurusan']) ? $_POST['jurusan'] : 'bp';

// Menentukan tabel berdasarkan jurusan
$tabel_jurusan = 'tempat_pkl_' . strtolower($jurusan);

// Menambah data tempat PKL
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $no = $_POST['no'];
    $nama_tempat = $_POST['nama_tempat'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];

    $query = "INSERT INTO $tabel_jurusan (No, Nama_Tempat, Alamat, Nomor_Telepon, Email) 
              VALUES ('$no', '$nama_tempat', '$alamat', '$nomor_telepon', '$email')";

    if (mysqli_query($conn, $query)) {
        echo "<p style='color: green;'>Data berhasil ditambahkan!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Tempat PKL</title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Tempat PKL</h2>

        <form action="" method="POST">
            <label>Nomor: </label>
            <input type="number" name="no" required><br>

            <label>Pilih Jurusan: </label>
            <select name="jurusan" required>
                <option value="bp">BP</option>
                <option value="dpib">DPIB</option>
                <option value="kp">KP</option>
                <option value="te">TE</option>
                <option value="tj">TJ</option>
                <option value="tkr">TKR</option>
                <option value="tl">TL</option>
                <option value="tp">TP</option>
            </select><br>
            
            <label>Nama Tempat: </label>
            <input type="text" name="nama_tempat" required><br>
            
            <label>Alamat: </label>
            <input type="text" name="alamat" required><br>
            
            <label>Nomor Telepon: </label>
            <input type="text" name="nomor_telepon" required><br>
            
            <label>Email: </label>
            <input type="email" name="email" required><br>

            <button type="submit">Tambah Data</button>
        </form>

        <div class="button-container">
            <form action="edittabel.php" method="GET">
                <input type="hidden" name="jurusan" value="<?php echo isset($_POST['jurusan']) ? $_POST['jurusan'] : 'bp'; ?>">
                <button type="submit">Edit Tabel</button>
            </form>
            
            <a href="logout.php">
                <button>Logout</button>
            </a>
        </div>
    </div>
</body>
</html>
