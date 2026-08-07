<?php
// Dynamic Base URL Detection
if (isset($_SERVER['HTTP_HOST'])) {
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? "https://" : "http://";
    $host = $_SERVER['HTTP_HOST'];
    
    if (strpos($host, 'localhost') !== false || $host === '127.0.0.1' || strpos($host, '192.168.') !== false) {
        // Local dev environment
        $script_name = $_SERVER['SCRIPT_NAME'] ?? '';
        $dir = str_replace('\\', '/', dirname($script_name));
        $parts = explode('/', trim($dir, '/'));
        
        // Find if running in a subdirectory
        $subfolder = '/';
        if (!empty($parts[0]) && !in_array($parts[0], ['services', 'common', 'admin', 'blogs', 'courses'])) {
            $subfolder = '/' . $parts[0] . '/';
        }
        $base_url = $protocol . $host . $subfolder;
    } else {
        // Live production URL - use detected host so pages work on staging/temp hosts
        $base_url = $protocol . $host . '/';
    }
} else {
    $base_url = 'http://localhost/';
}

$base_path = $_SERVER['DOCUMENT_ROOT'] . "/";

define('APP_VERSION', '1.0.4');

// Databases connection centralized in admin folder
include_once __DIR__ . '/../admin/common/config.php';

// Load dynamic service/location data from the Google Sheet export.
$serviceDataPath = __DIR__ . '/service-data.php';
if (file_exists($serviceDataPath)) {
    include_once $serviceDataPath;
}
?>