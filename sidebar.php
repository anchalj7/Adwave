<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  font-family: 'Roboto';
  margin: 0;
  height: 100vh;
}
p{
    font-family:cursive;
    font-size:24px;
}
aside {
  color: #fff;
  width: 250px;
  padding-left: 20px;
  background-image: linear-gradient(30deg, #0048bd, #44a7fd);
  border-top-right-radius: 80px;
  position: fixed; 
  height: 100%;
}

aside a {
  font-size: 16px;
  font-family: 'Times of Roman';  
  color: #fff;
  display: block;
  padding: 12px;
  padding-left: 30px;
  text-decoration: none;
  -webkit-tap-highlight-color:transparent;
}

aside a:hover {
  color: #3f5efb;
  background: #fff;
  outline: none;
  position: relative;
  background-color: #fff;
  border-top-left-radius: 20px;
  border-bottom-left-radius: 20px;
}
    </style>
</head>
<body>   
<aside>
  <p> Adwave </p>
  <a href="dashboard.php">Dashboard</a>
  <a href="post_ad.php"> Add Ads</a>
  <a href="view_ad.php">View Ads</a>
  <a href="logout.php">Logout</a>
</aside>
</body>
</html>r