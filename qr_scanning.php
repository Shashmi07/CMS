<?php 
   session_start();

   // Check if user is logged in
   if (!isset($_SESSION['valid'])) {
       header("Location: index.php");
   }

   // Get user details
   include("php/config.php");
   $id = $_SESSION['id'];
   $query = mysqli_query($con, "SELECT * FROM users WHERE Id = $id");

   while ($result = mysqli_fetch_assoc($query)) {
       $res_Uname = $result['Username'];
       $res_Email = $result['Email'];
       $res_Age = $result['Age'];
   }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Scanning</title>
    <script src="https://unpkg.com/html5-qrcode/minified/html5-qrcode.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        #qr-reader {
            width: 100%;
            margin: 20px 0;
        }

        .status {
            margin-top: 20px;
            padding: 10px;
            background: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .status.success {
            border-color: #28a745;
            color: #28a745;
        }

        .status.error {
            border-color: #dc3545;
            color: #dc3545;
        }

        #qrImage {
            max-width: 100%;
            margin: 20px 0;
        }

        .back-button {
        display: inline-block;
        margin-bottom: 20px;
        padding: 10px 15px;
        background-color: #007BFF;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
        transition: background-color 0.3s ease;
        }

        .back-button:hover {
        background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>QR Code Scanning</h1>
        <p>Point your camera at the QR code to check in.</p>

        <!-- QR Code Display -->
        <div id="imgBox">
            <img src="" id="qrImage" alt="QR Code">
        </div>

        <!-- QR Code Scanner -->
        <div id="qr-reader"></div>
        <div id="qr-reader-results" class="status"></div>

        <!-- Back Button -->
        <a href="javascript:history.back()" class="back-button">&larr; Back</a>
    </div>

    <script src="script/QrScript.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Generate the QR code
            GenerateQr("<?php echo $res_Uname; ?>", "<?php echo $res_Email; ?>", "<?php echo $res_Age; ?>");

            // Start QR Scanner
            const qrReader = new Html5Qrcode("qr-reader");

            function onScanSuccess(decodedText, decodedResult) {
                // Handle successful QR code scanning
                const resultsDiv = document.getElementById("qr-reader-results");
                resultsDiv.innerHTML = `Checked in successfully: <strong>${decodedText}</strong>`;
                resultsDiv.className = "status success";

                // Optionally send data to the server
                // fetch('/checkin', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({ qrCode: decodedText })
                // });
            }

            function onScanError(errorMessage) {
                // Handle scan errors
                const resultsDiv = document.getElementById("qr-reader-results");
                resultsDiv.innerHTML = `Error: ${errorMessage}`;
                resultsDiv.className = "status error";
            }

            // Start the QR scanner
            qrReader.start(
                { facingMode: "environment" }, // Use rear camera
                { fps: 10, qrbox: { width: 250, height: 250 } },
                onScanSuccess,
                onScanError
            ).catch(err => {
                document.getElementById("qr-reader-results").innerHTML = `Error initializing scanner: ${err}`;
            });
        });
    </script>
</body>

</html>
