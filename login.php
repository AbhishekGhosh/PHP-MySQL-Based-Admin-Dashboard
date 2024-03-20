<?php
// Start session
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Check if user exists
if ($result->num_rows > 0) {
    // User authenticated, redirect to dashboard
    $_SESSION['username'] = $username;
    header("Location: dashboard.php");
} else {
    // Invalid credentials, redirect back to login page
    header("Location: index.php");
}

// Close database connection
$conn->close();
?>
