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
$fname = $_POST['fname'];
$username = $_POST['username'];
$password = $_POST['password'];
$age = $_POST['age'];


// Insert the new user into the database
$query = "INSERT INTO sign_in (fname, username, password, age) VALUES ('$fname','$username', '$password', '$age')";
$result = mysqli_query($conn, $query);

if ($result) {
    // Sign in successful
    echo '<p>Successfull log In</p>';
} else {
    // Sign in failed
    echo "Sign in failed: " . mysqli_error($conn);
}



mysqli_close($conn);



?>