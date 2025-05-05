<?php
session_start(); //khởi tạo session
require 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirm-password']);
    $error = empty($username) || empty($email) || empty($password) || empty($confirm_password) ? "Vui lòng điền đầy đủ thông tin." :
             ($password !== $confirm_password ? "Mật khẩu xác nhận không khớp." : null);

    if (!$error) {
        try {
            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
            $stmt->execute([$username, $email]);
            if ($stmt->rowCount() > 0) {
                $error = "Tên người dùng hoặc email đã tồn tại.";
            } else {
                $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
                $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT)]);
                $_SESSION['success'] = "Đăng ký thành công! Vui lòng đăng nhập."; //Thông báo người dùng đăng ký thành công
                header('Location: ../SignInOn/login.html');
                exit;
            }
        } catch (PDOException $e) {
            $error = "Lỗi: " . $e->getMessage();
        }
    }
    $_SESSION['error'] = $error; //Lưu lỗi (trống thông tin, mật khẩu không khớp, username/email đã tồn tại, lỗi database)
    header('Location: ../SignInOn/register.html');
    exit;
}
?>