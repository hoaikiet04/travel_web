<?php
session_start();
require './db_connect.php';

function restoreSessionFromCookies($conn) {
    if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'], $_COOKIE['user_id'])) {
        $stmt = $conn->prepare("SELECT id, fullname FROM users WHERE id = ? AND remember_token = ?");
        $stmt->execute([$_COOKIE['user_id'], $_COOKIE['remember_token']]);
        if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            return true;
        }
    }
    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname']);
    $password = trim($_POST['password']);
    $remember = isset($_POST['remember']);
    $error = empty($fullname) || empty($password) ? "Vui lòng điền đầy đủ thông tin." : null;

    if (!$error) {
        try {
            $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE fullname = ?");
            $stmt->execute([$fullname]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fullname'] = $user['fullname'];

                if ($remember) {
                    $token = bin2hex(random_bytes(16));
                    $expire = time() + 30 * 24 * 60 * 60;
                    $stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                    $stmt->execute([$token, $user['id']]);
                    setcookie('remember_token', $token, $expire, '/', '', true, true);
                    setcookie('user_id', $user['id'], $expire, '/', '', true, true);
                }
                header('Location: ../UI/index.php');
                exit;
            } else {
                $error = "Tên người dùng hoặc mật khẩu không đúng.";
            }
        } catch (PDOException $e) {
            $error = "Lỗi: " . $e->getMessage();
        }
    }

    $_SESSION['error'] = $error;
    header('Location: login.php');
    exit;
}

// Nếu user quay lại từ cookie
if (restoreSessionFromCookies($conn)) {
    header('Location: ../UI/index.php');
    exit;
}
?>
