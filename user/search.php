<?php
session_start();
require './connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $address = trim($_POST['address']);
    $tourType = $_POST['tourType'];

    // Kiểm tra dữ liệu đầu vào
    if (empty($address) || empty($tourType)) {
        header("Location: 404.php");
        exit();
    }

    // Chuẩn bị truy vấn tìm tour phù hợp
    $stmt = $conn->prepare("SELECT id FROM tours WHERE address = ? AND category_id = ? AND deleted = 0");
    $stmt->bind_param("si", $address, $tourType);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        // Có tour phù hợp
        $_SESSION['search_address'] = $address;
        $_SESSION['search_category'] = $tourType;
        header("Location: ./search_result.php");
    } else {
        // Không có tour phù hợp
        header("Location: ./404.php");
    }
 
    $stmt->close();
    $conn->close();
}
?>
