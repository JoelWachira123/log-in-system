<?php
$host = 'sql313.infinityfree.com';  // database host name
$dbname = 'if0_38411266_secure_login';  // database name
$user = 'if0_38411266';  // MySQL username
$pass = 'cnoJSX48oK6A6';  // MySQL password

try {
    // Create a new PDO instance (connect to MySQL)
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Set error mode to exception (for debugging)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Display error if the connection fails
    die("Database connection failed: " . $e->getMessage());
}
?>
