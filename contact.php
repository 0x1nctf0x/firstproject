<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // In a real app, send the message to an email or store it in a database
    $confirmation_message = "Thank you for contacting us, $name. We will get back to you soon!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="contact.php" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" required></textarea>
            </div>
            <button type="submit">Send Message</button>
        </form>

        <?php if (isset($confirmation_message)): ?>
            <div class="confirmation"><?php echo $confirmation_message; ?></div>
        <?php endif; ?>

    </div>

</body>
</html>
