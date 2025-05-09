<?php
$email_from_cookie = isset($_COOKIE['email']) ? $_COOKIE['email'] : '';
?>
<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../user/assets/css/loginstyle.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="left-section">
          <div class="form-box">
            <h2 class="title">Đăng nhập</h2>
            <form action="login_cookie.php" method="POST">
              <div class="form-group">
                <label for="email">Địa chỉ Email</label>
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Nhập địa chỉ email"
                  value="<?php echo htmlspecialchars($email_from_cookie); ?>"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Nhập mật khẩu"
                  required
                />
              </div>
              <div class="form-group">
                <label>
                  <input type="checkbox" name="remember_me" /> Ghi nhớ đăng nhập
                </label>
              </div>
              <button type="submit" class="btn-login">Đăng nhập</button>
            </form>
            <p class="register-link">
              Chưa có tài khoản? <a href="./register.html">Đăng ký</a>
            </p>
          </div>
        </div>
        <div class="right-section"></div>
      </div>
    </div>
  </body>
</html>
