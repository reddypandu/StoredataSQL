<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM signup WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            header("Location: home.html");
            exit();
        } else {
            echo "Incorrect password. Please try again.";
        }
    } else {
        echo "User not found. Please sign up.";
    }
}

$conn->close();
