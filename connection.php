<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// Set UTF-8 encoding
$con->set_charset("utf8");
?>
