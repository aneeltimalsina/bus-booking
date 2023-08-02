<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sbtbsphp";

// Create connection
$db = new mysqli($servername, $username, $password, $db,3306);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
// echo "Database Connected successfully";
