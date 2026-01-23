<?php
$host = "localhost";
$user = "eric_admin";
$pass = "Password123!";
$dbname = "business_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
