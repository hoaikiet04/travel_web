<?php
require './connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['send_feedback'])) {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone_number']);
    $subject = trim($_POST['subject_name']);
    $content = trim($_POST['content']);

    if (empty($fullname) || empty($subject) || empty($content)) {
        echo "<script>alert('Vui lòng điền đầy đủ thông tin bắt buộc!');</script>";
    } else {
        $stmt = $conn->prepare("INSERT INTO feedback (fullname, email, phone_number, subject_name, content) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fullname, $email, $phone, $subject, $content);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "<script>alert('Cảm ơn bạn đã đánh giá!');</script>";
        } else {
            echo "<script>alert('Có lỗi xảy ra, vui lòng thử lại.');</script>";
        }

        $stmt->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="./assets/css/reset.css?v=<?= time(); ?>" />
    <link rel="stylesheet" href="./assets/css/pa_style.css?v=<?= time(); ?>" />
    <title>Thông tin về chúng tôi</title>
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
                session_start();
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
                  <button id="feedbackBtn" class="feedback-button">Đánh giá</button>
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


            <!-- FORM FEEDBACK ẨN -->
            <div class="feedback-popup" id="feedbackPopup">
            <form action="" method="POST" class="feedback-form">
              <h3>Gửi đánh giá</h3>
              <input type="text" name="fullname" placeholder="Họ và tên" required>
              <input type="email" name="email" placeholder="Email">
              <input type="text" name="phone_number" placeholder="Số điện thoại">
              <input type="text" name="subject_name" placeholder="Chủ đề" required>
              <textarea name="content" placeholder="Nội dung đánh giá" required></textarea>
              <div class="btn-group">
                <button type="submit" name="send_feedback">Gửi</button>
                <button type="button" id="closeFeedback">Hủy</button>
              </div>
            </form>

            </div>
            <script>
            document.getElementById("feedbackBtn").addEventListener("click", function () {
              document.getElementById("feedbackPopup").style.display = "flex";
            });

            document.getElementById("closeFeedback").addEventListener("click", function () {
              document.getElementById("feedbackPopup").style.display = "none";
            });
            </script>
          </div>
        </div>
        <div class="header-main">
          <div class="inner-logo">
            <a href="#!">VietTourism</a>
          </div>
          <div class="inner-social">
            <nav class="inner-menu">
              <ul>
                <li><a href="./index.php">Trang chủ</a></li>
                <li><a href="./about.php">Giới Thiệu</a></li>
                <li class="dropdown">
                  <a href="./tour.php">Khám phá</a>
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

    <!-- section-two -->
    <section class="about-section">
        <div class="content-wrapper">
            <!-- Cột trái: Tiêu đề, mô tả, nút -->
            <div class="left-section">
                <div class="small-heading">Du lịch chuyên nghiệp</div>
                <h1 class="main-heading">Những chuyến đi <br>đáng nhớ và trọn vẹn</h1>
                <p class="description">
                    Chúng tôi tận dụng sự giàu kinh nghiệm và hiểu biết sâu sắc về ngành du lịch giới thiệu các bạn những trải nghiệm du lịch độc đáo, phù hợp với mọi sở thích và ngân sách.
                </p>
                <div class="contact-area">
                  <a href="./tour.php" class="explore-link">Tìm hiểu</a> 
                </div>
                
            </div>
            <!-- Cột phải: 4 khối nội dung -->
            <div class="right-section">
                <div class="features-grid">
                    <div class="feature-item">
                        <div class="icon-circle">
                            <!-- Placeholder cho icon Cắm trại -->
                            <i class="fas fa-campground"></i>
                        </div>
                        <h5>Cắm trại</h5>
                        <p>Tận hưởng đêm trời, ngọn lửa trại và thiên nhiên kỳ diệu dưới bầu trời đầy sao. Tận hưởng cuộc sống đơn giản với hoạt động cắm trại.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon-circle">
                            <!-- Placeholder cho icon Đạp xe leo núi -->
                            <i class="fas fa-bicycle"></i>
                        </div>
                        <h5>Đạp xe leo núi</h5>
                        <p>Chỉ trong 1 ngày bạn có thể hoàn thành một cuộc phieu lưu đầy hấp dẫn và thú vị trên những con đường gồ ghề và leo dốc.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon-circle">
                            <!-- Placeholder cho icon Leo núi mạo hiểm -->
                            <i class="fa-solid fa-person-hiking"></i>
                        </div>
                        <h5>Leo núi mạo hiểm</h5>
                        <p>Khám phá những thách thức tuyệt vời với khí leo núi và trải nghiệm những khoảnh khắc đầy hứng khởi trên những đỉnh núi cao.</p>
                    </div>
                    <div class="feature-item">
                        <div class="icon-circle">
                            <!-- Placeholder cho icon Câu cá & bơi lội -->
                            <i class="fas fa-fish"></i>
                        </div>
                        <h5>Câu cá & bơi lội</h5>
                        <p>Hòa mình vào nước và thử thách với hoạt động bơi lội hoặc thư giãn với câu cá trong không gian tự nhiên tươi đẹp.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back to Top -->
        <a href="#" class="scroll-top">
            <svg viewBox="0 0 24 24" fill="white">
                <path d="M12 5l-7 7h5v7h4v-7h5l-7-7z"/>
            </svg>
        </a>
    </section>
    <!-- End section-two -->

    <!-- section-six  -->
    <div class="section-six">
      <div class="inner-wrap">
        <div class="col-xl-6 flex-gird">
          <div class="inner-content">
            <div class="inner-desc">
              <h2 class="content-quesion">
                Bạn đã sẵn sàng để đi du lịch chưa ?
              </h2>
              <p class="content-title">
                Sẵn sàng du lịch <br> với cuộc phiêu lưu thực sự
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-6 flex-gird">
          <div class="contact-item">
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-hippo"></i>
              </div>
              <p class="card-content">Chuyến tham quan động vật hoang dã</p>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-parachute-box"></i>
              </div>
              <p class="card-content">Trải nghiệm nhảy dù</p>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-map-location-dot"></i>
              </div>
              <p class="card-content">Tham quan mạo hiểm</p>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-wind"></i>
              </div>
              <p class="card-content">Dù lượn thú vị</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
    <!-- end section-six  -->

    <!-- guides-section  -->
    <section class="guides-section">
      <div class="content-wrapper">
          <h2 class="section-title">Hướng dẫn viên giàu kinh nghiệm</h2>
          <p class="section-description">
              Đội ngũ hướng dẫn viên của chúng tôi có nhiều năm kinh nghiệm, am hiểu sâu sắc về các điểm đến và luôn sẵn sàng mang đến cho bạn những trải nghiệm tuyệt vời nhất.
          </p>
          <div class="guides-container">
              <div class="guide-card">
                  <div class="card-image">
                    <img src="../admin/assets/image/team-2.jpg" alt="Guide 1">
                  </div>
                 <div class="card-about">
                  <h3>Nguyễn Thùy Tiên</h3>
                  <div class="experience">
                    <i class="fa-solid fa-briefcase"></i>
                    <span><strong> 10 năm</strong> kinh nghiệm</span>
                  </div>
                  <p>Chuyên gia về các tour miền núi phía Bắc, am hiểu văn hóa địa phương và yêu thiên nhiên.</p>
                 </div>
              </div>
              <div class="guide-card">
                  <div class="card-image">
                   <img src="../admin/assets/image/team-3.jpg" alt="Guide 1">
                  </div>
                 <div class="card-about">
                  <h3>Phương Mỹ Chi</h3>
                  <div class="experience">
                    <i class="fa-solid fa-briefcase"></i>
                    <span><strong>8 năm</strong> kinh nghiệm</span>
                  </div>
                  <p>Hướng dẫn viên nhiệt tình, chuyên dẫn các tour biển đảo và hoạt động khám phá dưới nước.</p>
                 </div>
              </div>
              <div class="guide-card">
                <div class="card-image">
                 <img src="../admin/assets/image/team-4.jpg" alt="Guide 1">
                </div>
                  <div class="card-about">
                    <h3>Quang Hùng</h3>
                  <div class="experience">
                    <i class="fa-solid fa-briefcase"></i>
                    <span><strong> 12 năm</strong> kinh nghiệm</span>
                  </div>
                  <p>Chuyên về các tour văn hóa và lịch sử, mang đến những câu chuyện thú vị về điểm đến.</p>
                  </div>
              </div>
              <div class="guide-card">
                <div class="card-image">
                  <img src="../admin/assets/image/team-6.jpg" alt="Guide 1">
                </div>
                  <div class="card-about">
                    <h3>Noo Phước Thịnh</h3>
                  <div class="experience">
                    <i class="fa-solid fa-briefcase"></i>
                    <span><strong> 12 năm</strong> kinh nghiệm</span>
                  </div>
                  <p>Chuyên về các tour văn hóa và lịch sử, mang đến những câu chuyện thú vị về điểm đến.</p>
                  </div>
              </div>
              <div class="guide-card">
                <div class="card-image">
                  <img src="../admin/assets/image/team-7.jpg" alt="Guide 1">
                </div>
                  <div class="card-about">
                    <h3>Anh Tú</h3>
                  <div class="experience">
                    <i class="fa-solid fa-briefcase"></i>
                    <span><strong> 12 năm</strong> kinh nghiệm</span>
                  </div>
                  <p>Chuyên về các tour văn hóa và lịch sử, mang đến những câu chuyện thú vị về điểm đến.</p>
                  </div>
              </div>
          </div>
      </div>
  </section>

  <!-- Phần Đánh giá tích cực của khách hàng (Slide đặc biệt) -->
  <section class="reviews-section">
      <div class="content-wrapper">
          <h2 class="section-title">Đánh giá tích cực của khách hàng</h2>
          <p class="section-description">
              Hàng ngàn khách hàng đã có những trải nghiệm tuyệt vời cùng chúng tôi. Dưới đây là một số phản hồi từ họ.
          </p>
          <?php
            // Kết nối đến cơ sở dữ liệu
            require './connect.php';
            $sql = "SELECT fullname, subject_name, content FROM feedback ORDER BY created_at DESC LIMIT 10";
            $result = $conn->query($sql);
          ?>

          <div class="reviews-slider">
              <div class="slides-wrapper">
                  <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="review-slide">
                    <div class="review-header">
                      <div class="reviewer-info">
                      <h4><?= htmlspecialchars($row['fullname']) ?></h4>
                      <div class="stars">★★★★★</div>
                    </div>
                  </div>
                <p><strong><?= htmlspecialchars($row['subject_name']) ?>:</strong> <br> <?= nl2br(htmlspecialchars($row['content'])) ?></p>
              </div>
            <?php endwhile; ?>
          </div>

    <div class="nav-buttons">
        <div class="nav-button prev-button">❮</div>
        <div class="nav-button next-button">❯</div>
    </div>
</div>

      </div>
  </section>
    <!-- end guides-section  -->

    <script src="./assets/javascript/pa_javas.js"></script>
  </body>
</html>
