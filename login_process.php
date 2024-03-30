<?php
session_start();
require('utils/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username_or_email = $_POST['username_or_email'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = "SELECT * FROM users WHERE name='$username_or_email' OR email='$username_or_email'";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if ($password === $user['password']) {
            $_SESSION['login'] = $user['name'];
            header("Location: Account.php");
            exit;
        }
    }

    $_SESSION['login_error'] = 'Неправильне ім\'я, email або пароль.';
    header("Location: Account.php");
    exit;
} else {
    header("Location: Account.php");
    exit;
}
?>
