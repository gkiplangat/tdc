<?php
$servername = "localhost"; //server name
$username = "root"; //database username
$password = ""; //database password
$dbname = "tdc_vehicles"; //database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
