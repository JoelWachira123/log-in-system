
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require 'db.php';
include 'db.php'; 

 session_start();
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
    if ($stmt->execute([$username, $email, $password])) {
        echo "Registration successful! <a href='login.html'>Login here</a>";
    } else {
        echo "Error: Could not register.";
    }
}
?>
