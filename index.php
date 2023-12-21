<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Read Update Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="ajax.js"></script>
</head>

<body>
    <div class="container">
        <div class="main">
            <a href="form.php" class="btn btn-primary m-3 text-lg font-weight-bold">Create a Product</a>
        </div>
        <!-- Display table -->
        <table class="table   table-bordered table-hover">
            <thead>
                <tr class="table-primary">
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    <th scope="col">Expiry</th>
                    <th scope="col">Inventory</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'config.php';
                $pic =  mysqli_query($con, "SELECT * FROM `tblcard`");
                while ($row = mysqli_fetch_array($pic)) {
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[name]</td>
                        <td>$row[unit]</td>
                        <td>$row[price]</td>
                        <td>$row[expiry]</td>
                        <td>$row[inventory]</td>
                        <td><img src='uploadImage/$row[image]' alt='Product Image' style='max-width: 100px;'></td>
                        <td>
                            <a href='update.php?id=$row[id]' class='btn btn-primary text-lg font-weight-bold '>Update</a>
                            <a href='delete.php?id=$row[id]' class='btn btn-danger text-lg font-weight-bold'>Delete</a>
                        </td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>