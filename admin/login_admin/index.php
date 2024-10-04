<?php
session_start();
require('config.php');

$message = ''; // Variable to store any messages

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // Cek apakah username dan password valid
    $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['admin'] = $username;
        $message = "Login berhasil!"; // Success message
        echo "<script>
            alert('$message');
            setTimeout(function() {
                window.location.href = 'dashboard.php';
            }, 2000);
        </script>";
        exit(); // Stop further execution
    } else {
        $message = "Username atau password salah!"; // Error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Admin</title>
    <link rel="stylesheet" href="../css/styleadmin.css">
</head>
<body>
    <form action="" method="POST">
        <label>Username: </label>
        <input type="text" name="username" required>
        <br>
        <label>Password: </label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>

    <!-- Button for going back to dashboard, positioned below the login button -->
    <form action="dashboard.php" method="GET">
        <button type="submit" style="margin-top: 10px;">Kembali ke Dashboard</button>
    </form>
    
    <!-- Display popup message -->
    <?php if ($message): ?>
        <script>
            alert("<?php echo $message; ?>");
        </script>
    <?php endif; ?>
</body>
</html>
