<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Research Conference</title>
    <link rel="stylesheet" href="style/first_page.css">
</head>
<body>
    <header>
        <h1>International Research Conference</h1>
        <nav>
            <ul>
                <!-- Common Features -->
                <li><a href="homePage.php">Home</a> </li>
                <li><a href="schedule.php">Schedule</a></li> <!-- This links to the schedule page -->
                <li><a href="proceedings.php">Proceedings</a></li>
        
                <!-- Participant Section -->
                <li>
                    <a href="#">Participants</a>
                    <ul class="dropdown">
                        <li><a href="participantRegister.php">Session Registeration</a></li>
                        <li><a href="participant_dashboard.php">Dashboard</a></li>
                        <li><a href="feedbackform.html">Give Feedback</a></li>
                        
                    </ul>
                </li>
        
                <!-- Admin Section -->
                <li>
                    <a href="#">Admin</a>
                    <ul class="dropdown">
                        <li><a href="admin_dashboard.php">Dashboard</a></li>
                        
                    </ul>
                </li>
        
                <!-- In-Room Features -->
                <li>
                    <a href="#">In-Room</a>
                    <ul class="dropdown">
                        <li><a href="qr_scanning.php">QR Check-In</a></li>
                        <li><a href="addsession.php">Session Updates</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <!-- Add your image here -->
        <img src="https://cloudwalkerbusiness.com/blogs/wp-content/uploads/2022/02/Conference-Room-Technology-Trends-In-2022-banner-1-1.jpg" 
        alt="Conference Banner Placeholder" 
     style="width:100%; height: 500px;; margin-top:20px;">
    </header>

    <!-- Back Button -->
    <div style="text-align: center; margin: 20px 0;">
        <button onclick="history.back()" style="padding: 10px 20px; background-color: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
            Back
        </button>
    </div>

    <div class="panel-footer text-center">
        <small>&copy; 2024 International Research Conference. All Rights Reserved</small>
</div>
</body>
</html>
