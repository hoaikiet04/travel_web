<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kết quả tìm kiếm</title>
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
</head>
<body>

  <header>
    <h1>KẾT QUẢ TÌM KIẾM</h1>
    <a href="./index.php" class="home-link">← Về trang chủ</a>
  </header>

  <div class="card">
    <img src="../assets/admin/image/bangioc.jpg" alt="Ảnh minh họa">
    <div class="card-content">
      <div class="category">Du lịch</div>
      <div class="title">Khám phá Đà Lạt mộng mơ</div>
      <div class="description">Trải nghiệm không khí se lạnh, đồi thông và những quán cà phê mộng mơ tại thành phố ngàn hoa.</div>
      <a href="https://example.com/da-lat" class="detail-link" target="_blank">Xem chi tiết</a>
    </div>
  </div>

</body>
</html>
