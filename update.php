<?php
// signin.php

// Connect to the database
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'test';
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $submit = $_POST['submit'];
    $id = $_POST['id'];
    $product =$_POST['product'];
    $num_prod =$_POST['num_prod'];
    $type =$_POST['type'];

$query = "  UPDATE `inventory` SET `id`='$id',`product`='$product',`num_prod`='$num_prod',`type`='$type' WHERE 1 ;
$result = mysqli_query($conn, $query);

if ($result) {
    // Sign in successful
    header('location: inventory.php? msg:New Record Inserted sucessfully! ');;
} else {
    // Sign in failed
    echo "Sign in failed: " . mysqli_error($conn);
}



mysqli_close($conn);



?>