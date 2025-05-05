<?php
session_start();
require './connect.php';

// Kiểm tra dữ liệu tìm kiếm từ session
if (!isset($_SESSION['search_address']) || !isset($_SESSION['search_category'])) {
    header("Location: 404.php");
    exit();
}

$address = $_SESSION['search_address'];
$categoryId = $_SESSION['search_category'];

// Truy vấn dữ liệu tour phù hợp
$sql = "SELECT 
            tours.title, 
            tours.description, 
            tours.link, 
            tours.thumbnail, 
            category.name AS category_name 
        FROM tours 
        INNER JOIN category ON tours.category_id = category.id 
        WHERE tours.address = ? AND tours.category_id = ? AND tours.deleted = 0";

$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $address, $categoryId);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả tìm kiếm</title>
    <link rel="stylesheet" href="styles.css"> <!-- Giả sử bạn có file CSS -->
</head>
<style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
      margin: 0;
    }
    header {
      text-align: center;
      margin-bottom: 30px;
    }
    header h1 {
      font-size: 36px;
      color: #333;
      margin-bottom: 10px;
    }
    .home-link {
      text-decoration: none;
      font-size: 16px;
      color: #007BFF;
    }
    .home-link:hover {
      text-decoration: underline;
    }
    .card {
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      overflow: hidden;
      margin: 20px auto;
      max-width: 800px;
      display: flex;
      flex-direction: row;
      transition: transform 0.2s ease;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .card img {
      width: 250px;
      height: auto;
      object-fit: cover;
    }
    .card-content {
      padding: 20px;
      flex: 1;
    }
    .category {
      color: #ff6f61;
      font-weight: bold;
      margin-bottom: 5px;
      text-transform: uppercase;
      font-size: 14px;
    }
    .title {
      font-size: 22px;
      margin: 0 0 10px;
    }
    .description {
      font-size: 16px;
      color: #444;
      margin-bottom: 15px;
    }
    .detail-link {
      text-decoration: none;
      background: #007BFF;
      color: white;
      padding: 10px 15px;
      border-radius: 6px;
      font-weight: bold;
      transition: background 0.3s ease;
    }
    .detail-link:hover {
      background: #0056b3;
    }
</style>
<body>
    <header>
        <h1>KẾT QUẢ TÌM KIẾM</h1>
        <a href="./index.php" class="home-link">← Về trang chủ</a>
    </header>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="card">
                <img src="../admin/assets/image/<?= htmlspecialchars($row['thumbnail']) ?>" alt="Ảnh minh họa">
                <div class="card-content">
                    <div class="category"><?= htmlspecialchars($row['category_name']) ?></div>
                    <div class="title"><?= htmlspecialchars($row['title']) ?></div>
                    <div class="description"><?= htmlspecialchars($row['description']) ?></div>
                    <a href="<?= htmlspecialchars($row['link']) ?>" class="detail-link" target="_blank">Xem chi tiết</a>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else: ?>
        <p>Không tìm thấy tour phù hợp.</p>
    <?php endif; ?>

    <?php
    $stmt->close();
    $conn->close();
    ?>
</body>
</html>
