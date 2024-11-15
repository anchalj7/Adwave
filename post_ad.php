<?php
include('config.php');

if (!isset($_COOKIE['user_id'])) {
    header("Location: login.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $category = $_POST['category'];
    $user_id = $_COOKIE['user_id'];

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img_name = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $new_name = rand() . $img_name;

        move_uploaded_file($tmp, "images/" . $new_name);

        $query = "INSERT INTO `ads` (`title`, `description`, `price`, `image`, `category`,`user_id`) 
                  VALUES ('$title', '$description', '$price', '$new_name', '$category','$user_id')";

        if (mysqli_query($conn, $query)) {
            echo "<p class='success-message'>Ad posted successfully!</p>";
        } else {
            echo "<p class='error-message'>Database error: " . mysqli_error($conn) . "</p>";
        }
    } else {
        echo "<p class='error-message'>Please upload an image.</p>";
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
    <link href="assets/css/shared.css" rel="stylesheet">
</head>
<body>

<?php include "sidebar.php" ?>

<div class="container">
   <div class="content">
   <h2>Post a New Ad</h2>
   
    <form action="post_ad.php" method="POST" enctype="multipart/form-data">
        <label for="title">Ad Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="category">Category:</label>
        <select id="category" name="category" required>
            <option value="item">Item</option>
            <option value="service">Service</option>
            <option value="job">Job</option>
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
