<?php
include 'config.php';
echo $id = $_GET['id'];
mysqli_query($con, "DELETE FROM `tblcard` WHERE id = $id");

header('location: index.php');
