<?php
// Start session to manage user authentication
session_start();

// Simulated user credentials (replace with your database logic)
$validUsername = "admin";
$validPassword = "password";

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Check if credentials are valid
    if ($username == $validUsername && $password == $validPassword) {
        // Set a session variable to indicate user is logged in
        $_SESSION["loggedin"] = true;
        
        // Redirect to dashboard or any other authorized page
        header("Location: dashboard.php");
        exit();
    } else {
        $loginError = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login to Mall Management System</h1>
    <?php if (isset($loginError)) { echo "<p style='color: red;'>$loginError</p>"; } ?>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>
</body>
</html>
