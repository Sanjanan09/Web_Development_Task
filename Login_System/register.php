<?php
include 'includes/auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (registerUser($username, $email, $password)) {
        header("Location: index.php?message=Registration Successful");
    } else {
        echo "Error: Registration Failed!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <h2>Create Account</h2>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <p id="strengthMessage">Strength: </p>
        <button type="submit">Register</button>
        <p>Already have an account? <a href="index.php">Login</a></p>
    </form>
</div>
<script src="assets/js/script.js"></script>
</body>
</html>
