<?php
include "sidebar.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
<style>
    .container {
  display: flex;
  height: 100vh;
}
.content {
  margin-left: 270px; 
  font-family:tmes of roman;
  padding: 20px;
  width: calc(100% - 270px); 
  display: flex;
  flex-direction: column;
}
h2{
    font-size:38px;
}
.post{
    font-size:16px;
}
   </style>
</head>
<body>
    <div class="container"> 
<div class="content">
    <h2>Dashboard</h2> 
    <p class="post">The user can add the post, ads and can view the posts.</p>  
  </div>
</div>
</body>
</html>
   
       