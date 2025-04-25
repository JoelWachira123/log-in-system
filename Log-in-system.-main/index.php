<?php
session_start(); // Start the session
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Welcome to My Website</h2>

    <?php
    // Check if the user is logged in
    if (isset($_SESSION['user_id'])) {
        echo "<p>You are logged in as User ID: " . $_SESSION['user_id'] . "</p>";
        echo '<a href="logout.php">Logout</a>';
    } else {
    ?>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="register.php">Register here</a></p>
    <?php
    }
    ?>
</body>
</html>
