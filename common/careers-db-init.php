<?php
/**
 * Automated Database Initializer and Migrator for Careers Module.
 * Ensures the `careers` table exists and contains all new ATS fields safely.
 */

// Ensure database connection is active
if (!isset($conn)) {
    include_once __DIR__ . '/config.php';
}

if ($conn) {
    // 1. Create base table if it doesn't exist
    $createTableSQL = "CREATE TABLE IF NOT EXISTS careers (
        id INT AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(100),
        email VARCHAR(100),
        phone VARCHAR(15),
        gender VARCHAR(10),
        dob DATE,
        qualification VARCHAR(100),
        experience INT,
        salary VARCHAR(50),
        address TEXT,
        resume_path VARCHAR(255),
        submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";
    $conn->query($createTableSQL);

    // 2. Define the ATS fields to add dynamically
    $atsColumns = [
        'job_title' => "VARCHAR(100) DEFAULT NULL",
        'profile_image' => "VARCHAR(255) DEFAULT NULL",
        'relevant_experience' => "VARCHAR(50) DEFAULT NULL",
        'current_employer' => "VARCHAR(100) DEFAULT NULL",
        'current_salary' => "VARCHAR(50) DEFAULT NULL",
        'notice_period' => "VARCHAR(50) DEFAULT NULL",
        'current_location' => "VARCHAR(100) DEFAULT NULL",
        'preferred_location' => "VARCHAR(100) DEFAULT NULL",
        'linkedin' => "VARCHAR(255) DEFAULT NULL",
        'portfolio' => "VARCHAR(255) DEFAULT NULL",
        'website' => "VARCHAR(255) DEFAULT NULL",
        'reference' => "VARCHAR(100) DEFAULT NULL",
        'cover_letter' => "TEXT DEFAULT NULL",
        'status' => "VARCHAR(50) DEFAULT 'Screening'"
    ];

    // Get existing columns
    $existingColumns = [];
    $result = $conn->query("SHOW COLUMNS FROM careers");
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $existingColumns[] = strtolower($row['Field']);
        }
    }

    // Alter table for missing columns
    foreach ($atsColumns as $colName => $colDefinition) {
        if (!in_array(strtolower($colName), $existingColumns)) {
            $alterSQL = "ALTER TABLE careers ADD COLUMN `$colName` $colDefinition";
            $conn->query($alterSQL);
        }
    }
}
