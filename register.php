<?php
session_start();

function redirect_with_notice(string $message): never {
    $_SESSION['notice'] = $message;
    header('Location: index.php#membership');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$name = trim($_POST['full_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$game = trim($_POST['game'] ?? '');
$message = trim($_POST['message'] ?? '');
$consent = isset($_POST['consent']);

if ($name === '' || mb_strlen($name) > 100 || !filter_var($email, FILTER_VALIDATE_EMAIL)
    || mb_strlen($email) > 150 || mb_strlen($phone) > 30 || mb_strlen($message) > 1000
    || !in_array($game, ['Snooker', 'Pool', 'Both'], true) || !$consent) {
    redirect_with_notice('Please check your details and complete all required fields.');
}

try {
    require __DIR__ . '/config.php';
    $stmt = $pdo->prepare('INSERT INTO enquiries (full_name, email, phone, preferred_game, message) VALUES (:name, :email, :phone, :game, :message)');
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone !== '' ? $phone : null,
        ':game' => $game,
        ':message' => $message !== '' ? $message : null,
    ]);
    redirect_with_notice('Thank you, ' . $name . '! Your enquiry has been saved successfully.');
} catch (PDOException $e) {
    error_log('HIT Club enquiry database error: ' . $e->getMessage());
    redirect_with_notice('The enquiry could not be saved. Check the database setup in README.md and try again.');
}
