<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your_username');  // Change this
define('DB_PASSWORD', 'your_password');  // Change this
define('DB_DATABASE', 'your_database_name');  // Change this
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// ... rest of your config code ...
?> 