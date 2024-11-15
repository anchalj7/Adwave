<?php
include 'config.php';

if (!isset($_COOKIE['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/view.css" rel="stylesheet">
    <link href="assets/css/shared.css" rel="stylesheet">

</head>
<body>
<?php include "sidebar.php" ?>
<div class="container">
    <div class="content">
    <h1>View ads</h1>
    <table>
        <tr>
        <th>S.N.</th>
        <th>Title</th>
        <th>Description</th>
        <th>Category</th>
        <th>Price</th>
        <th>Image</th>
        <th>Created_At</th>
        </tr>
        <?php
        $query = "SELECT * FROM `ads`";
        $result = mysqli_query($conn, $query);
        $id = 1;

        // Loop through all rows
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['category']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td>
                <img src="images/<?php echo $row['image']; ?>" style="width: 100px; height: 100px;">
            </td>
            <td><?php echo $row['created_at']; ?></td>
        </tr>
        <?php
        $id++;
        }
        ?>
      
    </table>
    </div>
    </div>
</body>
</html>