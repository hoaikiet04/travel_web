<?php
session_start();
require './connect.php'; // Kết nối CSDL

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin!'); window.location.href='/login.php';</script>";
        exit;
    }

    // Tìm theo email
    $stmt = $conn->prepare("SELECT id, fullname, password, role FROM users WHERE email = ? AND deleted = 0");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $fullname, $hashed_password, $role);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            // Thiết lập SESSION
            $_SESSION['user_id'] = $id;
            $_SESSION['fullname'] = $fullname;
            $_SESSION['role'] = $role;

            // Thiết lập COOKIE (30 ngày)
            setcookie("user_id", $id, time() + (86400 * 30), "/");
            setcookie("fullname", $fullname, time() + (86400 * 30), "/");

            // Nếu người dùng tích “Ghi nhớ đăng nhập”
            if (isset($_POST['remember_me'])) {
                setcookie("email", $email, time() + (86400 * 30), "/"); 
            }

            // Điều hướng
            if ($role == 1) {
                header("Location: ../admin/index.php");
            } else {
                header("Location: ../user/index.php");
            }
            exit;
        } else {
            echo "<script>alert('Sai mật khẩu!'); window.location.href='/login.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Email không tồn tại. Vui lòng đăng ký.'); window.location.href='./register.html';</script>";
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>
