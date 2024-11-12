<?php
// Database connectivity
$conn = mysqli_connect("localhost", "root", "", "adwave");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

 
?>