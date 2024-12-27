<?php
session_start();

// Include configuration file for database connection
include("config.php");



// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Fetch session details (Assume session ID is stored in $_SESSION['sessionid'])
if (isset($_SESSION['sessionid'])) {
    $sessionid = $_SESSION['sessionid'];
    $query = mysqli_query($conn, "SELECT * FROM sessions WHERE session_id = $sessionid");

    if (!$query) {
        die("Error fetching session details: " . $conn->error);
    }
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $track_id = $_POST['track_id'];
    $session_id = $_POST['session_id'];
    $title = $conn->real_escape_string($_POST['title']);
    $speaker = $conn->real_escape_string($_POST['speaker']);
    $time = $_POST['time'];
    $venue = $conn->real_escape_string($_POST['venue']);
    $capacity = intval($_POST['capacity']);

    // Validate inputs
    if (empty($track_id) || empty($session_id) || empty($title) || empty($speaker) || empty($time) || empty($venue) || empty($capacity)) {
        echo "All fields are required!";
        exit;
    }

    // Update session details in the database
    $sql = "UPDATE sessions 
            SET 
                title = ?, 
                speaker = ?, 
                time = ?, 
                venue = ?, 
                capacity = ? 
            WHERE 
                session_id = ? AND track_id = ?";

    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }
    $stmt->bind_param("ssssiii", $title, $speaker, $time, $venue, $capacity, $session_id, $track_id);

    if ($stmt->execute()) {
        echo "Session updated successfully!";
    } else {
        echo "Error updating session: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Invalid request method.";
}

$conn->close();
?>
