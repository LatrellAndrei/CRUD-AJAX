<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="./formUpdate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<?php
include 'config.php';
$id = $_GET['id'];
$Record = mysqli_query($con, "SELECT * FROM `tblcard` WHERE id = $id");
$data = mysqli_fetch_array($Record);
?>

<body>
    <div class="container">
        <div class="main">
            <h2 class="text-center">Update Product</h2>
            <form action="update1.php" method="POST" enctype="multipart/form-data" onsubmit="updateRecord(
                '<?php echo $data['id']; ?>',
                '<?php echo $data['name']; ?>',
                '<?php echo $data['unit']; ?>',
                '<?php echo $data['price']; ?>',
                '<?php echo $data['expiry']; ?>',
                '<?php echo $data['inventory']; ?>',
                '<?php echo $data['image']; ?>'
                ); return false;">

                <label for="name">Name: </label>
                <input type="text" value="<?php echo $data['name'] ?>" name="name">

                <label for="unit">Unit: </label>
                <input type="text" value="<?php echo $data['unit'] ?>" name="unit">

                <label for="price">Price: </label>
                <input type="text" value="<?php echo $data['price'] ?>" name="price" step="0.01" required>

                <label for="expiry">Date of Expiry: </label>
                <input type="date" value="<?php echo $data['expiry'] ?>" name="expiry" required>

                <label for="inventory">Available Inventory: </label>
                <input type="number" value="<?php echo $data['inventory'] ?>" name="inventory" required>

                <label for="image">Image: </label>
                <input type="file" name="image" value="<?php echo $data['image'] ?>">
                <img src="uploadImage/<?php echo $data['image']; ?>" alt="Product Image">

                <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                <button type="submit" class="" name="update">Update</button>
            </form>
        </div>

        <div class="go-back-link">
            <a href="index.php" class="btn btn-secondary m-3">Go back to Index</a>
        </div>
    </div>
</body>

</html>