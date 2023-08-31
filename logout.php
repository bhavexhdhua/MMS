<?php
// Start session to clear user data
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: login.html");
exit();
?>
