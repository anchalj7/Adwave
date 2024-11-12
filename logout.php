<?php
// Start the session to access session variables
session_start();

// Destroy the session to log the user out
session_unset();
session_destroy();

// Redirect to login page
header("Location: login.php");
exit;
?>
