<?php
$servername = "db4free.net";
$username = "panduranga";
$password = "Pandu@123";
$dbname = "pandureddy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
