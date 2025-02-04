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
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #11998e, #38ef7d);
            margin: 0;
            padding: 0;
            color: white;
        }
        .header {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 1px;
        }
        .container {
            width: 90%;
            max-width: 900px;
            margin: auto;
            margin-top: 30px;
            text-align: center;
        }
        .card {
            background-color: white;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: #333;
        }
        .btn {
            background: #ff7f50;
            color: white;
            padding: 12px 18px;
            margin: 10px;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s ease;
        }
        .btn:hover {
            background: #ff5733;
        }
        .nav-bar {
            background: rgba(0, 0, 0, 0.8);
            padding: 10px;
            text-align: center;
        }
        .nav-bar a {
            color: white;
            text-decoration: none;
            margin: 15px;
            font-size: 18px;
            padding: 10px;
            transition: 0.3s;
        }
        .nav-bar a:hover {
            color: #38ef7d;
        }
        .footer {
            text-align: center;
            padding: 15px;
            margin-top: 20px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
        }
    </style>
</head>
<body>

    <div class="header">Student Portal</div>

    <div class="nav-bar">
        <a href="index.php">Home</a>
        <a href="enrollments.php">Enrollments</a>
        <a href="attendance.php">Attendance</a>
        <a href="schedule.php">Schedule</a>
        <a href="profile.php">Profile</a>
    </div>

    <div class="container">
        <div class="card">
            <h2>Welcome to the Student Portal</h2>
            <p>Manage your course enrollments, attendance, and schedules easily.</p>
            <a href="enrollments.php" class="btn">Manage Enrollments</a>
            <a href="attendance.php" class="btn">View Attendance</a>
            <a href="schedule.php" class="btn">View Schedule</a>
            <a href="profile.php" class="btn">View Profile</a>
        </div>

        <div class="card">
            <h2>Latest Announcements</h2>
            <p>📢 Exam schedules have been updated. Check the schedule for details.</p>
            <p>📢 New courses are now available for enrollment.</p>
        </div>
    </div>

    <div class="footer">
        &copy; <?php echo date("Y"); ?> Student Portal | All Rights Reserved
    </div>

</body>
</html>

