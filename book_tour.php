<?php
session_start(); //khởi tạo session
require 'db_connect.php';

require 'login.php';

if (!isset($_SESSION['user_id']) && !restoreSessionFromCookies($conn)) { //Kiểm tra xem người dùng đã đăng nhập và dùng cookies để ggọi hàm kiểm tra cookies để khôi phục session
    header('Location: ../SignInOn/login.html');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $destination = trim($_POST['destination']);
    $tour_type = trim($_POST['tour-type']);
    $departure_date = trim($_POST['departure-date']);
    $guests = (int)trim($_POST['guests']);
    $user_id = $_SESSION['user_id'];

    if (empty($destination) || empty($tour_type) || empty($departure_date) || $guests <= 0) {
        echo "Vui lòng điền đầy đủ thông tin.";
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO bookings (user_id, destination, tour_type, departure_date, guests) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([$user_id, $destination, $tour_type, $departure_date, $guests]);
        echo "Tìm kiếm thành công! <a href='../UI/index.html'>Quay lại trang chủ</a>";
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
?>