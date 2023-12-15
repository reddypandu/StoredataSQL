<?php
include('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];

$sql = "INSERT INTO Register (name, email,number) VALUES ('$name', '$email','$number')";

if ($conn->query($sql) === TRUE) {
    echo "Thank You For Registering..!!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
