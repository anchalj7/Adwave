<?php
include 'config.php'; 
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $query = "SELECT * FROM users WHERE email = '$email'";  
    $result = $conn->query($query);
    if ($result && $result->num_rows > 0) { 
        $user = $result->fetch_assoc();       
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid credentials";
        }
    } else {
        echo "Error: User not found";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/register.css">
</head>
<body class="align">
  <div class="grid align__item">
    <div class="register">
      <svg xmlns="http://www.w3.org/2000/svg" class="site__logo" width="56" height="84" viewBox="77.7 214.9 274.7 412"><defs><linearGradient id="a" x1="0%" y1="0%" y2="0%"><stop offset="0%" stop-color="#8ceabb"/><stop offset="100%" stop-color="#378f7b"/></linearGradient></defs><path fill="url(#a)" d="M215 214.9c-83.6 123.5-137.3 200.8-137.3 275.9 0 75.2 61.4 136.1 137.3 136.1s137.3-60.9 137.3-136.1c0-75.1-53.7-152.4-137.3-275.9z"/></svg>
      <h2>Login</h2>
      <form action="dashboard.php" method="post" class="form">
        <div class="form__field">
          <input type="email" placeholder="info@mailaddress.com" name="email"  readonly onfocus="this.removeAttribute('readonly')" autocomplete="off">
        </div>
        <div class="form__field">
          <input type="password" placeholder="password" name="password" autocomplete="off">
        </div>
        <div class="form__field">
          <input type="submit" value="Login">
        </div>
      </form>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
    </div>
  </div>
</body>
</html>


