<?php
setcookie('user_id', '', time(), "/");
// Redirect to login page
header("Location: login.php");
exit;
?>
