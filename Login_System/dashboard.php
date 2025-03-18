<?php
include 'includes/auth.php';
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user = getUser($_SESSION['user_id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
<div class="container">
    <h2>Welcome, <?php echo $user['username']; ?>!</h2>
    <p>Email: <?php echo $user['email']; ?></p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
