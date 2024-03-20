<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .welcome {
            text-align: center;
            margin-bottom: 20px;
        }
        .logout {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="welcome">Welcome, <?php echo $_SESSION['username']; ?>!</h2>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
        <!-- Dashboard content goes here -->
    </div>
</body>
</html>
