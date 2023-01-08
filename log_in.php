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

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM sign_in WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    // Login successful
    session_start();
    $_SESSION['username'] = $username;
    header('location: index.html');
  } else {
    // Login failed
    header('location: login.html');
  }

mysqli_close($conn);


?>