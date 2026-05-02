<?php
require_once __DIR__ . '/includes/init.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . url('contact.php'));
    exit;
}

if (!isset($_POST['csrf_token']) || !verifyCSRFToken($_POST['csrf_token'])) {
    $_SESSION['inquiry_error'] = 'Invalid CSRF token.';
    header('Location: ' . url('contact.php'));
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '') {
    $errors[] = 'Name is required';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Valid email is required';
}
if ($message === '') {
    $errors[] = 'Message is required';
}

if ($errors === []) {
    global $pdo;
    $stmt = $pdo->prepare('INSERT INTO inquiries (name, email, subject, message) VALUES (?, ?, ?, ?)');
    $stmt->execute([$name, $email, $subject, $message]);

    $to = 'info@dreamshots.com';
    $safeSubject = str_replace(["\r", "\n"], '', $subject ?: 'Contact Inquiry');
    $headers = "From: noreply@dreamshots.com\r\nReply-To: " . filter_var($email, FILTER_SANITIZE_EMAIL);
    $fullMessage = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    @mail($to, $safeSubject, $fullMessage, $headers);

    $_SESSION['inquiry_success'] = "Your message has been sent. We'll get back to you soon!";
} else {
    $_SESSION['inquiry_error'] = implode('<br>', $errors);
}

header('Location: ' . url('contact.php'));
exit;
