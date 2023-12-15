<?php
include('connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO signup (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        $to = 'pandureddypatterns@gmail.com';
        $subject = 'New User Registration';
        $message = "A new user has registered:\n\nUsername: $username";

        echo 'signup successfull!';
        // Additional headers
        // header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
