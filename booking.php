<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $session_type = trim($_POST['session-type'] ?? '');
    $preferred_time = trim($_POST['preferred-time'] ?? '');

    $errors = [];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }
    if (empty($phone) || !preg_match('/^\d{10}$/', $phone)) {
        $errors[] = "Valid 10-digit phone number is required.";
    }
    if (empty($session_type)) {
        $errors[] = "Session type is required.";
    }
    if (empty($preferred_time)) {
        $errors[] = "Preferred timing is required.";
    }

    if (empty($errors)) {
        // Here you can add code to save booking data to a database or send an email

        $success_message = "Thank you, $name! Your booking for $session_type session at $preferred_time has been received.";
    }
}
?>

<?php include 'header.php'; ?>

<section id="booking-response">
    <?php if (!empty($errors)): ?>
        <div style="color: red;">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="index.php#booking">Go back to booking form</a>
        </div>
    <?php elseif (!empty($success_message)): ?>
        <div style="color: green;">
            <p><?= htmlspecialchars($success_message) ?></p>
            <a href="index.php">Return to homepage</a>
        </div>
    <?php else: ?>
        <p>No booking data received.</p>
        <a href="index.php#booking">Go back to booking form</a>
    <?php endif; ?>
</section>

<?php include 'footer.php'; ?>
