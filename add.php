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
    $product =$_POST['product'];
    $num_prod =$_POST['num_prod'];
    $type =$_POST['type'];

$query = "INSERT INTO inventory (product, num_prod, type) VALUES ('$product', '$num_prod', '$type')";
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