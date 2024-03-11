<?php
define('DB_Server', 'localhost');
define('DB_Username', 'root');
define('DB_Password', '');
define('DB_Name', 'loginsys');

// Try to connect to the database
$conn = mysqli_connect(DB_Server, DB_Username, DB_Password, DB_Name);

// Check the connection
if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}
?>