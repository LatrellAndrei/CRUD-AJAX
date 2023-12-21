<?php
include 'config.php';

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $expiry = $_POST['expiry'];
    $inventory = $_POST['inventory'];

    // Check if the 'image' key exists in $_FILES
    if (isset($_FILES['image'])) {
        $img_loc = $_FILES['image']['tmp_name'];
        $img_name = $_FILES['image']['name'];
        move_uploaded_file($img_loc, 'uploadImage/' . $img_name);

        // Insert data into the database
        $query = "UPDATE `tblcard` SET `name`= '$name', `unit`='$unit', `price`='$price', `expiry`='$expiry', `inventory`='$inventory', `image`='$img_name' WHERE id = '$id'";

        // Execute the query
        $result = mysqli_query($con, $query);

        // Check if the update was successful
        if ($result) {
            $response = ['status' => 'success', 'message' => 'Data updated successfully'];
        } else {
            $response = ['status' => 'error', 'message' => 'Error updating data: ' . mysqli_error($con)];
        }

        // Return a JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
