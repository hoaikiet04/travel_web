<?php
session_start(); // Khởi tạo phiên làm việc

// Xóa tất cả biến session
session_unset();

// Xóa cookie phiên làm việc nếu có
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hủy phiên session
session_destroy();

// Xóa các cookie tùy chỉnh
foreach (['remember_token', 'user_id'] as $cookie) {
    if (isset($_COOKIE[$cookie])) {
        setcookie($cookie, '', time() - 3600, '/');
    }
}

// Chuyển hướng đến trang đăng nhập
header('Location: ../user/index.php');
exit;
?>
