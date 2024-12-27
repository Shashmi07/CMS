<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Participant Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
    }

    .container {
      width: 90%;
      max-width: 1200px;
      margin: 20px auto;
      background: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      padding: 20px;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
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

    .sessions-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      margin-bottom: 20px;
    }

    .sessions-table thead {
      background-color: #007BFF;
      color: #fff;
    }

    .sessions-table th,
    .sessions-table td {
      padding: 12px 15px;
      border: 1px solid #ddd;
    }

    .sessions-table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .sessions-table tbody tr:hover {
      background-color: #e9f5ff;
    }

    .sessions-table th {
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .sessions-table td {
      color: #555;
    }

    .form-container {
      margin-bottom: 20px;
    }

    .form-container input,
    .form-container button {
      padding: 10px;
      margin-right: 10px;
      font-size: 16px;
    }

    .form-container input {
      width: 200px;
    }

    .form-container button {
      background-color: #28a745;
      color: white;
      border: none;
      cursor: pointer;
    }

    .form-container button:hover {
      background-color: #218838;
    }
  </style>
</head>
<body>
  <div class="container">
    <a href="javascript:history.back()" class="back-button">&larr; Back</a>
    <h1>Registered Sessions</h1>

    <!-- Form to Add New Session -->
    <div class="form-container">
      <input type="text" id="sessionName" placeholder="Session Name" required />
      <input type="date" id="sessionDate" required />
      <input type="time" id="sessionTime" required />
      <input type="text" id="sessionRoom" placeholder="Room Number" required />
      <button id="addSessionButton">Add Session</button>
    </div>

    <!-- Sessions Table -->
    <table class="sessions-table" id="sessionsTable">
      <thead>
        <tr>
          <th>Session Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Room Number</th>
        </tr>
      </thead>
      <tbody>
        <!-- Data will be dynamically inserted here -->
      </tbody>
    </table>
  </div>

  <script>
    // Sample data for registered sessions
    let registeredSessions = [
      { name: "Session 1", date: "2024-01-15", time: "10:00 AM", room: "101" },
      { name: "Session 2", date: "2024-01-16", time: "02:00 PM", room: "202" },
      { name: "Session 3", date: "2024-01-17", time: "11:30 AM", room: "303" }
    ];

    // Function to render sessions into the table
    function renderSessions() {
      const tableBody = document.querySelector("#sessionsTable tbody");
      tableBody.innerHTML = '';  // Clear the existing rows
      registeredSessions.forEach(session => {
        const row = document.createElement("tr");

        row.innerHTML = `
          <td>${session.name}</td>
          <td>${session.date}</td>
          <td>${session.time}</td>
          <td>${session.room}</td>
        `;

        tableBody.appendChild(row);
      });
    }

    // Function to add a new session
    function addNewSession() {
      const sessionName = document.querySelector("#sessionName").value;
      const sessionDate = document.querySelector("#sessionDate").value;
      const sessionTime = document.querySelector("#sessionTime").value;
      const sessionRoom = document.querySelector("#sessionRoom").value;

      if (sessionName && sessionDate && sessionTime && sessionRoom) {
        const newSession = {
          name: sessionName,
          date: sessionDate,
          time: sessionTime,
          room: sessionRoom
        };

        // Add the new session to the array and re-render the table
        registeredSessions.push(newSession);
        renderSessions();

        // Clear the form fields
        document.querySelector("#sessionName").value = '';
        document.querySelector("#sessionDate").value = '';
        document.querySelector("#sessionTime").value = '';
        document.querySelector("#sessionRoom").value = '';
      } else {
        alert("Please fill in all fields.");
      }
    }

    // Event listener for Add Session button
    document.querySelector("#addSessionButton").addEventListener("click", addNewSession);

    // Call the render function on page load
    renderSessions();
  </script>
</body>
</html>
