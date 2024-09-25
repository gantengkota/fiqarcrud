<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        /* General styling for the popup */
        .popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
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
        }

        .popup-content h2 {
            margin-bottom: 20px;
        }

        /* Styling for the countdown */
        .countdown {
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <!-- Popup for success message -->
    <div id="successPopup" class="popup">
        <div class="popup-content">
            <h2>Laporan Masalah Berhasil Dikirim!</h2>
            <p>Anda akan dialihkan kembali ke halaman laporan dalam <span id="countdown">3</span> detik.</p>
        </div>
    </div>

    <script>
        // Countdown function
        let countdownElement = document.getElementById('countdown');
        let countdownValue = 3;

        function updateCountdown() {
            countdownElement.textContent = countdownValue;
            if (countdownValue === 0) {
                window.location.href = 'reports.php'; // Redirect after countdown reaches 0
            } else {
                countdownValue--;
                setTimeout(updateCountdown, 1000); // Decrease countdown value every second
            }
        }

        // Start the countdown
        updateCountdown();
    </script>
</body>
</html>
