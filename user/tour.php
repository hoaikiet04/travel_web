<?php
session_start();
require './connect.php';

if (!isset($_SESSION['user_id'])) {
    echo "<script>
        alert('Bạn cần đăng nhập để truy cập trang này!');
        window.location.href = '../SignInOn/login.php';
    </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Khám phá</title>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- Custom CSS with versioning to prevent cache -->
  <link rel="stylesheet" href="./assets/css/reset.css?v=<?= time(); ?>" />
  <link rel="stylesheet" href="./assets/css/tour_styles.css?v=<?= time(); ?>" />
</head>

<body>

    <!-- Header  -->
    <header>
        <div class="inner-wrap">
          <div class="header-top">
            <div class="container">
              <div class="contact-info">
                <i class="fa-solid fa-door-open"></i>
                <span class="address">
                  <?php
                  if (isset($_SESSION['fullname'])) {
                      echo "Xin chào, " . htmlspecialchars($_SESSION['fullname']) . " !!!";
                  } else {
                      echo "Xin chào !!!";
                  }
                  ?>
                </span>
              </div>
              <div class="inner-service">
                <div class="inner-book-tour">
                  
                </div>
                <div class="inner-social-icon">
                  <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                  </a>
                  <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="header-main">
            <div class="inner-logo">
              <a href="#">VietTourism</a>
            </div>
            <div class="inner-social">
              <nav class="inner-menu">
                <ul>
                  <li><a href="./index.php">Trang chủ</a></li>
                  <li><a href="./about.php">Giới Thiệu</a></li>
                  <li class="dropdown">
                    <a href="#!">Khám phá</a>
                  </li>
                </ul>
              </nav>
              <div class="user-menu">
                <i class="fa-solid fa-circle-user"></i>
                <div class="inner-user-auth">
                  <a href="../SignInOn/login.php">
                    <i class="fa-solid fa-user"></i>
                    Đăng Nhập
                  </a>
                  <a href="../SignInOn/register.html">
                    <i class="fa-solid fa-user-plus"></i>
                    Đăng Ký
                  </a>
                  <a href="../SignInOn/logout.php">
                  <i class="fa-solid fa-right-from-bracket"></i>
                  Đăng xuất
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- end Header  -->
  
      <!-- section-one -->
      <div class="section-one">
      <div class="slideshow-container">
        <div class="slide fade">
              <img src="../admin/assets/image/banner.jpg" alt="BaNahill">
          </div>
          <div class="slide fade">
              <img src="../admin/assets/image/bg-banner2.jpg" alt="">
          </div>
          <div class="slide fade">
              <img src="../admin/assets/image/danang.jpg" alt="">
          </div>
      </div>
    </div>
      <!-- End section-one -->

    <div class="container">
        <div id="notification" class="notification">
            <i class="fa-solid fa-window-restore notification-icon"></i>
            <div class="notification-body">
              <strong class="notification-title">
                Dễ dàng khám phá các địa điểm bạn muốn trên VietTourism
              </strong>
              <p class="notification-text">
                <a href="#" onclick="handleLogin()">Đăng nhập</a> vào tài khoản VietTourism hoặc <br>
                <a href="#" onclick="handleRegister()">Đăng ký</a> để xem các địa điểm hấp dẫn hiện tại và trước đây của bạn.
              </p>
            </div>
            <button class="close-btn" onclick="closeNotification()">×</button>
          </div>

        <h1 class="inner-title">
            Khám phá các địa điểm du lịch
        </h1>
        <form id="tourForm" action="search.php" method="POST">
            <div class="form-group">
                <label for="address">Địa Điểm</label>
                <input type="text" name="address" id="address" placeholder="Nhập địa điểm du lịch" required>
            </div>


            <?php
            require './connect.php'; // Đảm bảo đã kết nối CSDL

            // Truy vấn bảng category
            $sql = "SELECT id, name FROM category";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                echo '<div class="form-group">';
                echo '<label for="tourType">Loại Tour</label>';
                echo '<select name="tourType" id="tourType" class="custom-select">';
                echo '<option value="">Chọn loại tour</option>';
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['name']) . '</option>';
                }
                echo '</select>';
                echo '</div>';
            } else {
                echo '<p class="no-data">Không có dữ liệu loại tour.</p>';
            }
            ?>

            <div class="button-group">
                <button type="submit" class="search-btn">Tìm kiếm</button>
                <button type="button" onclick="location.reload()" class="btn-refresh reset-btn">Reset</button>
            </div>
        </form>
    </div>
    <footer>
    <div class="footer-container">
        <div class="footer-box empty-box"></div>
        <div class="footer-box image-box">
            <h3>GVHD: <br> Trần Anh Quân</h3>
            <h3>Nhóm 7</h3>
            <div class="social-icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-tiktok"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="footer-box spacer-box"></div>

        <div class="footer-box newsletter-box">
            <p><a href="../SignInOn/register.html">Đăng kí</a> ngay để nhận bản tin mới nhất</p>
            <p>Chúng tôi cam kết sẽ đem đến những dịch vụ tốt nhất cho người dùng</p>
        </div>

        <div class="footer-box contact-box">
            <h3>Liên hệ</h3>
            <p class="label">Email</p>
            <p>sinhvien@ut.edu.vn</p>
            <p class="label">Địa chỉ</p>
            <p>Trường Đại học <br> Giao Thông Vận Tải Thành phố Hồ Chí Minh</p>
        </div>
    </div>
    </footer>
    <script src="./assets/javascript/tour.js"></script>
</body>
</html>