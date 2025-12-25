<?php
session_start();
require_once '../config/database.php';

$error = "";

if (isset($_POST['login'])) {

    // Sanitize inputs
    $email = htmlspecialchars(trim($_POST['email']));
    $password = trim($_POST['password']);

    if (empty($email) || empty($password)) {
        $error = "Please fill in all fields";
    } else {

        $db = DatabasePDO::getInstance();

        // Fetch user by email
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $db->query($sql, [$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && ($password == $user['password'])) {

            // ✅ Save session
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['full_name'];
            $_SESSION['email']   = $user['email'];
            $_SESSION['role']    = $user['role'];

            // ✅ After successful login → update last_login
            $userId = $user['id'];
            $sql = "UPDATE users SET last_login = NOW() WHERE id = ?";
            $db->query($sql, [$userId]);

            // Redirect
            if ($user['role'] === 'admin') {
                header("Location: ../admin.php");
            } else {
                header("Location: ../welcome.php");
            }
            exit;
        } else {
            $error = "Invalid email or password";
        }
    }
}
