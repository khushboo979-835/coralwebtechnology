<?php
// Diagnostic Errors (Hostinger ONLY)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Live Settings (Hostinger Panel as per SQL)
$servername = "localhost";
$username = "u467991428_coraluser";
$password = "Z2&wPkkIzfr"; // Hostinger database password
$dbname = "u467991428_coraldb";

try {
    // Disable mysqli exception throwing temporarily if we want to handle it manually, 
    // or catch the exception directly.
    $conn = new mysqli($servername, $username, $password, $dbname);
} catch (Exception $e) {
    // Attempt local database connection fallback
    try {
        $conn = new mysqli("localhost", "root", "", $dbname);
    } catch (Exception $ex) {
        $conn = null;
    }
}

if (!$conn || $conn->connect_error) {
    $conn = null;
}
?>