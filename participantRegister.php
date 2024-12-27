<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session Registration</title>
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

    .participants-table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      margin-bottom: 20px;
    }

    .participants-table thead {
      background-color: #007BFF;
      color: #fff;
    }

    .participants-table th,
    .participants-table td {
      padding: 12px 15px;
      border: 1px solid #ddd;
    }

    .participants-table tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .participants-table tbody tr:hover {
      background-color: #e9f5ff;
    }

    .participants-table th {
      text-transform: uppercase;
      letter-spacing: 0.03em;
    }

    .participants-table td {
      color: #555;
    }

    .form-container {
      background-color: #f9f9f9;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
    }

    .form-container h2 {
      margin-bottom: 15px;
      color: #007BFF;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    .form-group input,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      font-size: 14px;
    }

    .form-group input:focus,
    .form-group select:focus {
      outline: none;
      border-color: #007BFF;
    }

    .form-group button {
      padding: 10px 20px;
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    .form-group button:hover {
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
    <h1>Session Registration</h1>

    <!-- Participants Table -->
    <table class="participants-table">
      <thead>
        <tr>
          <th>Participant ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Organization</th>
          <th>Sessions Registered</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Shashmi Amadi</td>
          <td>amadi@gmail.com</td>
          <td>ITUM,IT Department</td>
          <td>Session 2, Session 3</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sethmi Prasadi</td>
          <td>prasadi@gmail.com</td>
          <td>SUSL</td>
          <td>Session 1,Session 2,Session 3</td>
        </tr>
      </tbody>
    </table>

    <!-- Registration Form -->
    <div class="form-container">
      <h2>Register New Participant</h2>
      <form id="registrationForm">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" placeholder="Enter participant name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" placeholder="Enter participant email" required>
        </div>
        <div class="form-group">
          <label for="organization">Organization:</label>
          <input type="text" id="organization" name="organization" placeholder="Enter organization name" required>
        </div>
        <div class="form-group">
          <label for="sessions">Sessions Registered:</label>
          <input type="text" id="sessions" name="sessions" placeholder="Enter sessions (e.g., Session 1, Session 3)" required>
        </div>
        <div class="form-group">
          <button type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.getElementById('registrationForm').addEventListener('submit', function (e) {
      e.preventDefault();

      // Retrieve form data
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const organization = document.getElementById('organization').value;
      const sessions = document.getElementById('sessions').value;

      // Add a new row to the participants table
      const table = document.querySelector('.participants-table tbody');
      const newRow = table.insertRow();
      const idCell = newRow.insertCell(0);
      const nameCell = newRow.insertCell(1);
      const emailCell = newRow.insertCell(2);
      const orgCell = newRow.insertCell(3);
      const sessionsCell = newRow.insertCell(4);

      idCell.textContent = table.rows.length;
      nameCell.textContent = name;
      emailCell.textContent = email;
      orgCell.textContent = organization;
      sessionsCell.textContent = sessions;

      // Reset form
      this.reset();
    });
  </script>
</body>
</html>
