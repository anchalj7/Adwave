<?php
session_start(); 
include "sidebar.php"; 
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $category = $_POST['category'];



    $query = "INSERT INTO `ads` (`title`, `description`, `price`, `image`, `category`) 
              VALUES ('$title', '$description', '$price', '$image', '$category')";

    if (mysqli_query($conn, $query)) {
        echo "<p class='success-message'>Ad posted successfully!</p>";
    } else {
        echo "<p class='error-message'>Error: " . mysqli_error($conn) . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Ad</title>
    <link rel="stylesheet" href="assets/css/post.css">
</head>
<body>
<div class="container">
   <div class="content">
   <h2>Post a New Ad</h2>
    <form action="post_ad.php" method="POST">
        <label for="title">Ad Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="1">Electronics</option>
            <option value="2">Furniture</option>
            <option value="3">Clothing</option>
            <option value="4">Books</option>
            <option value="5">Real Estate</option>
            <option value="6">Jobs</option>
        </select>

        <label for="price">Price:</label>
        <input type="number" id="price" name="price" required>

        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>

        <button type="submit" name="submit">Post Ad</button>
    </form> 
   </div>
</div>
</body>
</html>
