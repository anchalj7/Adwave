<?php
// Database connectivity
$conn = mysqli_connect("localhost", "root", "", "adwave2");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

 
?>