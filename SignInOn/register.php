<?php
session_start();
require './connect.php'; // Chỉnh đường dẫn nếu cần

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Kiểm tra dữ liệu
    if (empty($fullname) || empty($email) || empty($password) || empty($confirmPassword)) {
        die("Vui lòng điền đầy đủ thông tin.");
    }

    if ($password !== $confirmPassword) {
        die("Mật khẩu xác nhận không khớp.");
    }

    // Kiểm tra email đã tồn tại
    $check = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        die("Email đã tồn tại!");
    }
    $check->close();

    // Mã hóa mật khẩu
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Thêm người dùng vào database
    $stmt = $conn->prepare("INSERT INTO users (fullname, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $fullname, $email, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['user_id'] = $stmt->insert_id;
        $_SESSION['fullname'] = $fullname;

        setcookie("user_id", $stmt->insert_id, time() + (86400 * 30), "/");
        setcookie("fullname", $fullname, time() + (86400 * 30), "/");

        echo "<script>alert('Đăng ký thành công!'); window.location.href = '../user/index.php';</script>";
    } else {
        echo "Đăng ký thất bại: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
