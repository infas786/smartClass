<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'smartrecord';

$conn = new mysqli($servername, $username, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Redirect based on session

if (!isset($_SESSION['user_id'])) {
    echo '<script>window.location.href = "signIn.php";</script>';
} 




?>