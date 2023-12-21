<?php

// Include db connection
include 'config.php';

if (isset($_POST['upload'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $unit = mysqli_real_escape_string($con, $_POST['unit']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $expiry = mysqli_real_escape_string($con, $_POST['expiry']);
    $inventory = mysqli_real_escape_string($con, $_POST['inventory']);

    // Check if the 'image' key exists in $_FILES
    if (isset($_FILES['image'])) {
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];

        // Validate and move uploaded file
        $upload_dir = 'uploadImage/';
        $target_path = $upload_dir . basename($img_name);

        if (move_uploaded_file($img_loc, $target_path)) {
            // Insert data into the database
            $query = "INSERT INTO `tblcard` (`name`, `unit`, `price`, `expiry`, `inventory`, `image`) VALUES ('$name', '$unit', '$price', '$expiry', '$inventory', '$img_name')";

            // Execute the query
            mysqli_query($con, $query);

            // Check if the insertion was successful
            if (mysqli_affected_rows($con) > 0) {
                // Redirect to index.php
                header("Location: index.php");
                exit(); // Make sure to exit after header() to prevent further execution
            } else {
                echo "Error: " . mysqli_error($con);
            }
        } else {
            echo "Error uploading file.";
        }
    }
}
