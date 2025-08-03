<?php

$servername = "localhost";
$username = "your_username";  // Change this
$password = "your_password";  // Change this
$db = "your_database_name";   // Change this

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?> 