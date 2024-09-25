<nav class="navbar">
    <ul>
        <li><a href="../login/dashboard.php" class="nav-link" aria-label="Dashboard">Dashboard</a></li>
        <li><a href="../profile/profile.php" class="nav-link" aria-label="Profile">Jurusan</a></li>
        <li><a href="../reports/reports.php" class="nav-link" aria-label="Reports">Laporan Masalah dan Bug</a></li>
        <li><a href="#" class="nav-link" aria-label="Logout" onclick="openLogoutPopup()">Logout</a></li>
    </ul>
</nav>

<!-- Popup for logout confirmation -->
<div id="logoutPopup" class="popup">
    <div class="popup-content">
        <h2>Yakin untuk logout?</h2>
        <button onclick="confirmLogout()">Yakin</button>
        <button onclick="closePopup('logoutPopup')">Nggak dulu ah</button>
    </div>
</div>

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

<script>
    function openLogoutPopup() {
        document.getElementById('logoutPopup').style.display = 'flex';
    }

    function closePopup(popupId) {
        document.getElementById(popupId).style.display = 'none';
    }

    function confirmLogout() {
        window.location.href = "../login/logout.php";
    }
</script>
