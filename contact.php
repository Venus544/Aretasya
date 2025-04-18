<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['contact-name'] ?? '');
    $email = trim($_POST['contact-email'] ?? '');
    $message = trim($_POST['contact-message'] ?? '');

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    if (empty($errors)) {
        // Here you can add code to save contact message to a database or send an email

        $success_message = "Thank you, $name! Your message has been received.";
    }
}
?>

<?php include 'header.php'; ?>

<section id="contact-response">
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="index.php#contact">Go back to contact form</a>
        </div>
    <?php elseif (!empty($success_message)): ?>
        <div style="color: green;">
            <p><?= htmlspecialchars($success_message) ?></p>
            <a href="index.php">Return to homepage</a>
        </div>
    <?php else: ?>
        <p>No contact data received.</p>
        <a href="index.php#contact">Go back to contact form</a>
    <?php endif; ?>
</section>

<?php include 'footer.php'; ?>
