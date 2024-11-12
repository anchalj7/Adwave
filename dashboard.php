<?php
include "sidebar.php";
include "config.php"; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .container {
            display: flex;
            min-height: 100vh;
        }
        .content {
            margin-left: 270px; 
            padding: 20px;
            width: calc(100% - 270px);
        }
        h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        .description {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .card {
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 16px;
            width: 260px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .card h3 {
            font-size: 20px;
            color: #444;
            margin: 10px 0 8px;
        }
        .card p {
          font-family: Arial, sans-serif;
          padding-bottom: 10px;
            font-size: 14px;
            color: #666;
            margin: 5px 0;
        }
        .price {
            font-size: 16px;
            font-weight: bold;
            color: #28a745;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Dashboard</h2> 
           <p class="description">Here, you can view all the posted ads.</p>

            <div class="card-container">
                <?php
                // Fetch ads data from the database
                $query = "SELECT * FROM `ads`";
                $result = mysqli_query($conn, $query);

                while ($row = mysqli_fetch_assoc($result)) {
                    $imagePath = "images/" . $row['image']; // Ensure each ad has a unique image
                    if (!file_exists($imagePath)) {
                        $imagePath = "images/default.jpg"; // Set a default image if the image doesn't exist
                    }
                ?>
                    <div class="card">
                        <img src="<?php echo $imagePath; ?>" alt="Ad Image">
                        <h3><?php echo $row['title']; ?></h3>
                        <p><?php echo $row['description']; ?></p>
                        <p>Category: <?php echo $row['category']; ?></p>
                        <p class="price">Price: $<?php echo $row['price']; ?></p>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
