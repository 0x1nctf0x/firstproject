<?php
// Get the current year dynamically
$currentYear = date("Y");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Inline CSS for simplicity */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .hero {
            background: #333;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .cta-btn {
            padding: 15px 30px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            font-size: 1.2em;
            border-radius: 5px;
        }
        .cta-btn:hover {
            background-color: #218838;
        }
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Our Landing Page</h1>
        <p>Discover amazing features and get started today!</p>
        <a href="#signup" class="cta-btn">Get Started</a>
    </section>

    <!-- Footer Section -->
    <footer class="footer">
        <p>&copy; <?php echo $currentYear; ?> Your Company. All rights reserved.</p>
    </footer>

</body>
</html>
