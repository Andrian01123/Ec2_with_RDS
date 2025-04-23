<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


$host = 'database-1.c38kuy62qmhp.ap-southeast-1.rds.amazonaws.com';
$db = 'database-1';
$user = 'admin';  // or your RDS username
$pass = 'Billion.0513';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Record added successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
