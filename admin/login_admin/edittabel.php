<?php
session_start();
require('config.php');

// Cek apakah admin sudah login
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

// Mendapatkan jurusan dari query string atau default ke 'bp'
$jurusan = isset($_GET['jurusan']) ? $_GET['jurusan'] : 'bp';

// Menentukan tabel berdasarkan jurusan
$tabel_jurusan = 'tempat_pkl_' . strtolower($jurusan);

// Mengedit data tempat PKL
if (isset($_POST['edit'])) {
    $no = $_POST['no'];
    $nama_tempat = $_POST['nama_tempat'];
    $alamat = $_POST['alamat'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];

    $query = "UPDATE $tabel_jurusan SET 
              Nama_Tempat='$nama_tempat', 
              Alamat='$alamat', 
              Nomor_Telepon='$nomor_telepon', 
              Email='$email' 
              WHERE No='$no'";

    if (mysqli_query($conn, $query)) {
        echo "<p style='color: green;'>Data berhasil diperbarui!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}

// Menghapus data tempat PKL
if (isset($_POST['delete'])) {
    $no = $_POST['no'];

    $query = "DELETE FROM $tabel_jurusan WHERE No='$no'";
    if (mysqli_query($conn, $query)) {
        echo "<p style='color: green;'>Data berhasil dihapus!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
    }
}

// Menampilkan data berdasarkan jurusan
$query = "SELECT * FROM $tabel_jurusan";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit dan Hapus Data Tempat PKL <?php echo strtoupper($jurusan); ?></title>
    <link rel="stylesheet" href="style_admin.css">
</head>
<body>
    <div class="container">
        <h2>Edit dan Hapus Data Tempat PKL Jurusan <?php echo strtoupper($jurusan); ?></h2>

        <!-- Dropdown untuk memilih jurusan dan tombol kembali ke dashboard -->
        <form method="GET" style="margin-bottom: 20px; display: inline-block;">
            <label>Pilih Jurusan: </label>
            <select name="jurusan" onchange="this.form.submit()">
                <option value="bp" <?php echo ($jurusan == 'bp') ? 'selected' : ''; ?>>BP</option>
                <option value="dpib" <?php echo ($jurusan == 'dpib') ? 'selected' : ''; ?>>DPIB</option>
                <option value="kp" <?php echo ($jurusan == 'kp') ? 'selected' : ''; ?>>KP</option>
                <option value="te" <?php echo ($jurusan == 'te') ? 'selected' : ''; ?>>TE</option>
                <option value="tj" <?php echo ($jurusan == 'tj') ? 'selected' : ''; ?>>TJ</option>
                <option value="tkr" <?php echo ($jurusan == 'tkr') ? 'selected' : ''; ?>>TKR</option>
                <option value="tl" <?php echo ($jurusan == 'tl') ? 'selected' : ''; ?>>TL</option>
                <option value="tp" <?php echo ($jurusan == 'tp') ? 'selected' : ''; ?>>TP</option>
            </select>
        </form>

        <!-- Tombol kembali ke dashboard -->
        <form action="dashboard.php" method="GET" style="display: inline-block; margin-left: 10px;">
            <button type="submit">Kembali ke Dashboard</button>
        </form>

        <table>
            <tr>
                <th>No</th>
                <th>Nama Tempat</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['No']; ?></td>
                <td><?php echo $row['Nama_Tempat']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['Nomor_Telepon']; ?></td>
                <td><?php echo $row['Email']; ?></td>
                <td>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="no" value="<?php echo $row['No']; ?>">
                        <input type="text" name="nama_tempat" placeholder="Nama Tempat" value="<?php echo $row['Nama_Tempat']; ?>" required>
                        <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $row['Alamat']; ?>" required>
                        <input type="text" name="nomor_telepon" placeholder="Nomor Telepon" value="<?php echo $row['Nomor_Telepon']; ?>" required>
                        <input type="email" name="email" placeholder="Email" value="<?php echo $row['Email']; ?>" required>
                        <button type="submit" name="edit">Edit</button>
                    </form>
                    <form method="POST" style="display:inline;">
                        <input type="hidden" name="no" value="<?php echo $row['No']; ?>">
                        <button type="submit" name="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
