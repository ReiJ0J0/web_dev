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

    
    $id= $_GET['id'];



$query = "DELETE FROM `inventory` WHERE id = 1,2 ";
$result = mysqli_query($conn, $query);

if ($result) {
    // Sign in successful
    header('location: inventory.php? msg:New Record Deleted sucessfully! ');;
} else {
    // Sign in failed
    echo "Sign in failed: " . mysqli_error($conn);
}



mysqli_close($conn);



?>