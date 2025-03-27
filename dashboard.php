<?php
// Start the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// User info (in a real app, fetch from the database)
$username = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="dashboard-container">
        <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
        <p>This is your dashboard. Here you can view your profile, settings, and more.</p>
        <a href="logout.php">Logout</a>
    </div>

</body>
</html>
