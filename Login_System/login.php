<?php
include 'includes/auth.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    if (loginUser($username, $password)) {
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>
