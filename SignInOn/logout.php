<?php
session_start(); //khởi tạotạo
session_unset(); //xóa tất cả biến session
session_destroy(); //hủy phiên session
foreach (['remember_token', 'user_id'] as $cookie) {
    if (isset($_COOKIE[$cookie])) setcookie($cookie, '', time() - 3600, '/'); //Xóa cookies remember_token và user_id
}
header('Location: ../SignInOn/login.html');
exit;
?>