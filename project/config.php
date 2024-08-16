<!-- <?php

$conn = mysqli_connect('localhost','root','','shop_db') or die('connection failed');

?> -->
<?php
// Database connection parameters
$host = 'localhost';
$user = 'root';
$password = ''; // Replace 'your_password_here' with the actual password
$dbname = 'shop_db';   // Replace 'your_database_name' with the actual database name

// Create a connection
$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>