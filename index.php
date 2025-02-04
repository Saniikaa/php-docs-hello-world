<?php
// Database configuration
$server = getenv("DB_SERVER") ?: "localhost";
$username = getenv("DB_USERNAME") ?: "root";
$password = getenv("DB_PASSWORD") ?: "";
$database = getenv("DB_DATABASE") ?: "elearning";

// Connect to database
$conn = new mysqli($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table if not exists
$conn->query("CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(255) NOT NULL
)");

// Insert sample data if table is empty
$conn->query("INSERT INTO courses (course_name) SELECT 'Mathematics' WHERE NOT EXISTS (SELECT * FROM courses LIMIT 1)");
$conn->query("INSERT INTO courses (course_name) SELECT 'Physics' WHERE NOT EXISTS (SELECT * FROM courses WHERE course_name = 'Physics')");
$conn->query("INSERT INTO courses (course_name) SELECT 'Computer Science' WHERE NOT EXISTS (SELECT * FROM courses WHERE course_name = 'Computer Science')");

// Fetch courses
$result = $conn->query("SELECT * FROM courses");
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
            background-color: #f4f4f4;
            text-align: center;
            margin: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #fff;
            margin: 5px auto;
            padding: 10px;
            width: 50%;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>Welcome to the Student Portal</h1>
    <h2>Available Courses</h2>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li><?php echo htmlspecialchars($row['course_name']); ?></li>
        <?php endwhile; ?>
    </ul>
</body>
</html>

<?php
$conn->close();
?>
