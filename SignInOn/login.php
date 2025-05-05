<?php
session_start();
$error = $_SESSION['error'] ?? '';
unset($_SESSION['error']);
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="loginstyle.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="left-section">
          <div class="form-box">
            <h2 class="title">Đăng nhập</h2>

            <?php if (!empty($error)): ?>
              <div class="error-message"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form action="./handle_login.php" method="POST">
              <div class="form-group">
                <label for="fullname">Tên người dùng</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nhập tên người dùng" required />
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required />
              </div>
              <div class="form-group">
                <label><input type="checkbox" name="remember" /> Ghi nhớ đăng nhập</label>
              </div>
              <button type="submit" class="btn-login">Đăng nhập</button>
            </form>

            <p class="register-link">
              Chưa có tài khoản? <a href="register.html">Đăng ký</a>
            </p>
          </div>
        </div>
        <div class="right-section"></div>
      </div>
    </div>
  </body>
</html>
