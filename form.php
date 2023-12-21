<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Form</title>
    <link rel="stylesheet" href="formUpdate.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="main">
            <h2 class="text-center">Add Product</h2>
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="unit">Unit:</label>
                    <input type="text" name="unit" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" class="form-control" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="expiry">Date of Expiry:</label>
                    <input type="date" name="expiry" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="inventory">Available Inventory:</label>
                    <input type="number" name="inventory" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <button type="submit" name="upload" class='btn btn-primary btn-block'>Upload</button>
            </form>
        </div>

        <div class="text-center go-back-link">
            <a href="index.php" class="btn btn-secondary m-3">Go back to Index</a>
        </div>
    </div>
</body>

</html>