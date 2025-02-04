<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8f5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 24px;
        }
        .container {
            width: 80%;
            margin: auto;
            margin-top: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn {
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="header">Student Portal</div>

    <div class="container">
        <div class="card">
            <h2>Welcome to the Student Portal</h2>
            <p>Manage your course enrollments, attendance, and schedules easily.</p>
            <a href="enrollments.php" class="btn">Manage Enrollments</a>
            <a href="attendance.php" class="btn">View Attendance</a>
            <a href="schedule.php" class="btn">View Schedule</a>
        </div>
    </div>

</body>
</html>
