<?php
// Diagnostic Errors (Hostinger ONLY)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Live Settings (Hostinger Panel as per SQL)
$servername = "localhost";
$username = "u467991428_coraluser";
$password = "Z2&wPkkIzfr"; // Hostinger database password
$dbname = "u467991428_coraldb";

$conn = new mysqli($servername, $username, $password, $dbname,);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>