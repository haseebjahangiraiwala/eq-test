<?php
// db.php
$DB_HOST = 'localhost';
$DB_NAME = 'dbsy6mm0kzokxu';
$DB_USER = 'uulevslgtrnau';
$DB_PASS = 'ld4dy42tkorz';
$DSN = "mysql:host=$DB_HOST;dbname=$DB_NAME;charset=utf8mb4";
 
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
 
try {
    $pdo = new PDO($DSN, $DB_USER, $DB_PASS, $options);
} catch (Exception $e) {
    // Friendly message for development - adjust in production
    echo "Database connection failed: " . htmlspecialchars($e->getMessage());
    exit;
}
 
