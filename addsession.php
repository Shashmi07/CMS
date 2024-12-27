<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Session</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        input[type="datetime-local"] {
            font-size: 14px;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background: #45a049;
        }
        .preview {
            margin-top: 20px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px dashed #ddd;
            border-radius: 5px;
        }
        .preview h4 {
            margin: 0 0 10px;
            font-size: 16px;
            color: #333;
        }
        .preview p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
    </style>
    <script>
        function updatePreview() {
            const title = document.getElementById('session-title').value;
            const speaker = document.getElementById('session-speaker').value;
            const time = document.getElementById('session-time').value;
            const venue = document.getElementById('session-venue').value;

            document.getElementById('preview-title').innerText = title || "Session Title";
            document.getElementById('preview-speaker').innerText = speaker ? `Speaker: ${speaker}` : "Speaker: TBD";
            document.getElementById('preview-time').innerText = time ? `Time: ${time}` : "Time: TBD";
            document.getElementById('preview-venue').innerText = venue ? `Venue: ${venue}` : "Venue: TBD";
        }
    </script>
</head>
<body>
    <div class="form-container">
        <h2>Update Session</h2>
        <form method="POST" action="update_session.php">
            <div class="form-group">
                <label for="track-id">Track</label>
                <select id="track-id" name="track_id" required>
                    <option value="">Select Track</option>
                    <!-- Dynamically populated options -->
                    <option value="1">Track 1: AI and Machine Learning</option>
                    <option value="2">Track 2: Data Science</option>
                </select>
            </div>
            <div class="form-group">
                <label for="session-id">Session</label>
                <select id="session-id" name="session_id" required>
                    <option value="">Select Session</option>
                    <!-- Dynamically populated options -->
                    <option value="101">Introduction to AI</option>
                    <option value="102">Deep Learning Techniques</option>
                </select>
            </div>
            <div class="form-group">
                <label for="session-title">Session Title</label>
                <input type="text" id="session-title" name="title" placeholder="Enter session title" oninput="updatePreview()" required />
            </div>
            <div class="form-group">
                <label for="session-speaker">Speaker</label>
                <input type="text" id="session-speaker" name="speaker" placeholder="Enter speaker name" oninput="updatePreview()" required />
            </div>
            <div class="form-group">
                <label for="session-time">Date & Time</label>
                <input type="datetime-local" id="session-time" name="time" oninput="updatePreview()" required />
            </div>
            <div class="form-group">
                <label for="session-venue">Venue</label>
                <input type="text" id="session-venue" name="venue" placeholder="Enter venue" oninput="updatePreview()" required />
            </div>
            <div class="form-group">
                <label for="session-capacity">Capacity</label>
                <input type="number" id="session-capacity" name="capacity" placeholder="Enter session capacity" min="1" required />
            </div>
            <button type="submit">Update Session</button>
        </form>

        
    </div>
</body>
</html>
