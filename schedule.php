<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Schedule</title>
    <link rel="stylesheet" href="style/first_page.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
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
                        <li><a href="participantRegister.php">Session Registration</a></li>
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
        

        

    
    </header>
            

        

    
    
    <div class="container">
        
        <h2>Conference Schedule</h2>
        <table>
            <thead>
                <tr>
                    <th>Time</th>
                    <th>Event</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>09:00 AM - 10:00 AM</td>
                    <td>Keynote Speech</td>
                    <td>Main Hall</td>
                </tr>
                <tr>
                    <td>10:15 AM - 12:00 PM</td>
                    <td>Research Presentations (Track A)</td>
                    <td>Room 101</td>
                </tr>
                <tr>
                    <td>10:15 AM - 12:00 PM</td>
                    <td>Research Presentations (Track B)</td>
                    <td>Room 102</td>
                </tr>
                <tr>
                    <td>12:00 PM - 01:00 PM</td>
                    <td>Lunch Break</td>
                    <td>Cafeteria</td>
                </tr>
                <tr>
                    <td>01:00 PM - 03:00 PM</td>
                    <td>Panel Discussion</td>
                    <td>Main Hall</td>
                </tr>
                <tr>
                    <td>03:15 PM - 05:00 PM</td>
                    <td>Workshops</td>
                    <td>Rooms 201-203</td>
                </tr>
            </tbody>
        </table>
    </div>
    

</body>

</html>
