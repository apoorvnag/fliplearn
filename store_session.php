<?php


$a = session_create_id();

session_start();
session_regenerate_id();
$sessionId = session_id();


$servername = "localhost:3306";
$username = "tripoto_admin";
$password = "tripoto123";
$schema = "apn";

// Create connection
$conn = new mysqli($servername, $username, $password, $schema);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully</br>";

$stmt = mysqli_stmt_init($conn);

$sql = "INSERT INTO sessions (code)
VALUES ('{$a}')";

if ($conn->query($sql) === TRUE) {
    echo "Session is saved";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

session_destroy();