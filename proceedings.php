<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conference Proceedings</title>
    <link rel="stylesheet" href="style/first_page.css">
    <style>
        /* Base styling */
body {
    font-family: Arial, sans-serif;
}

header {
    background-color: #333;
    color: #fff;
    padding: 1em 0;
    text-align: center;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: center;
    background-color: #444;
}

nav ul li {
    position: relative;
    margin: 0;
}

nav ul li a {
    text-decoration: none;
    color: black;
    padding: 0.8em 1.2em;
    display: block;
}

nav ul li a:hover {
    background-color: #555;
}

/* Dropdown menu styling */
.dropdown {
    display: none;
    position: absolute;
    background-color: #444;
    list-style: none;
    padding: 0;
    margin: 0;
    min-width: 160px;
    z-index: 10;
}

.dropdown li a {
    padding: 0.8em 1.2em;
    display: block;
}

nav ul li:hover .dropdown {
    display: block;
}

nav ul li:hover a {
    background-color: #555;
}

/* Responsive Design */
@media (max-width: 768px) {
    nav ul {
        flex-direction: column;
    }
    
    nav ul li {
        width: 100%;
    }
    
    .dropdown {
        position: static;
    }

   
}

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
            padding: 10px;
            background: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 2px;
        }
        a {
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
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
        
        <h2>Conference Proceedings</h2>
        <p>Explore the published research papers from the conference. Click on the title to download the full paper.</p>
        <ul>
            <li>
                <strong>Paper 1:</strong> <a href="https://www.researchgate.net/publication/347127624_Artificial_intelligence_innovation_in_education_A_twenty-year_data-driven_historical_analysis" target="_blank">Innovations in Artificial Intelligence</a> <br>
                <small>Author: Dr. Jane Doe | Track: AI Research</small>
            </li>
            <li>
                <strong>Paper 2:</strong> <a href="https://www.researchgate.net/publication/378897850_Advancements_in_Quantum_Computing-Viewpoint_Building_Adoption_and_Competency_in_Industry" target="_blank">Advancements in Quantum Computing</a> <br>
                <small>Author: Prof. John Smith | Track: Quantum Computing</small>
            </li>
            <li>
                <strong>Paper 3:</strong> <a href="https://www.crbgroup.com/insights/sustainable-energy-solutions" target="_blank">Sustainable Energy Solutions</a> <br>
                <small>Author: Dr. Emily White | Track: Environmental Studies</small>
            </li>
        </ul>
    </div>
</body>

</html>
