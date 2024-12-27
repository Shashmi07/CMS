<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .card {
            margin: 10px 0;
            padding: 15px;
            background: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card h2 {
            margin: 0;
            font-size: 1.5em;
            color: #007BFF;
        }
        .card p {
            margin: 5px 0;
        }
        .card a {
            padding: 10px 15px;
            color: #fff;
            background-color: #007BFF;
            text-decoration: none;
            border-radius: 5px;
        }
        .card a:hover {
            background-color: #0056b3;
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
        <a href="javascript:history.back()" class="back-button">&larr; Back</a>
        <h1>Admin Dashboard</h1>

        <!-- Manage Participants -->
        <div class="card">
            <div>
                <h2>Manage Participants</h2>
                <p>View, edit, or remove participants from the conference.</p>
            </div>
            <a href="participantRegister.php">Manage</a>
        </div>


         <!-- Session Updates -->
         <div class="card">
            <div>
                <h2>Session Updates</h2>
                <p>Update information for ongoing sessions.</p>
            </div>
            <a href="addsession.php">Update</a>
        </div>

        

       

        <!-- Feedback -->
        <div class="card">
            <div>
                <h2>View Feedback</h2>
                <p>Read feedback submitted by participants.</p>
            </div>
            <a href="viewfeedbackform.html">View</a>
        </div>

       
    </div>
</body>

</html>
