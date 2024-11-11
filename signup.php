<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body class="align">
  <div class="grid align__item">
    <div class="register">
      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" height="84" viewBox="77.7 214.9 274.7 412"><defs><linearGradient id="a" x1="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="#8ceabb"/><stop offset="100%" stop-color="#378f7b"/></linearGradient></defs><path fill="url(#a)" d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z"/></svg>
      <h2>Sign Up</h2>
      <form action="" method="post" class="form">
        
        <div class="form__field">
          <input type="text" placeholder="UserName" name="name">
        </div>
        <div class="form__field">
          <input type="email" placeholder="info@mailaddress.com" name="email">
        </div>
        <div class="form__field">
          <input type="password" placeholder="password" name="password">
        </div>
        <div class="form__field">
          <input type="submit" value="Sign Up" name="signup">
        </div>
      </form>
      <p>Already have an accout? <a href="login.php">Signup</a></p>
    </div>
  </div>
</body>
</html>
<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "INSERT INTO users (username, email, password_hash) VALUES ('$username', '$email', '$password')";

    if ($conn->query($query) === TRUE) {    
        header("Location: login.php");
        exit(); 
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>