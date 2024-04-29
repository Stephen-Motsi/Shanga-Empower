<?php
// Replace these credentials with your cPanel database information
$hostname = 'localhost'; // The hostname for the database (often 'localhost')
$username = 'shangaem'; // Your cPanel database username
$password = 'd116M(@dIlY1Jo'; // Your cPanel database password
$database = 'shangaem_cartwo.db'; // Your cPanel database name

// Establish a connection to the database
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check the connection
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// If the connection is successful, you can perform database operations using this $conn variable.
// For example, you can run SQL queries or interact with the database tables.

// Close the database connection when you're done
// mysqli_close($conn);
?>
