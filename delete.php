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


if (isset($_GET['Delete'])) {
    // Get the delete id
    $id = $_GET['Delete'];

    // Delete the record
    $sql = "DELETE FROM inventory WHERE id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    // Redirect to the index page
    header("Location: index.php");
    exit();
}



?>