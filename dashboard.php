<?php
// Start session to check if user is logged in
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mall Management Dashboard</title>
</head>
<body>
    <h1>Welcome to the Mall Management Dashboard</h1>
    <p>Hello, <?php echo $_SESSION["username"]; ?>! You are now logged in.</p>
    
    <h2>Dashboard Content</h2>
    <!-- Place your dashboard content here -->
    
    <a href="logout.php">Logout</a>
</body>
</html>
