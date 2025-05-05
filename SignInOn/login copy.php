<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./loginstyle.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="left-section">
          <div class="form-box">
            <h2 class="title">Đăng nhập</h2>
            <?php
            session_start(); //Bắt đầu phiên session
            require './db_connect.php';

            function restoreSessionFromCookies($conn) {
                if (!isset($_SESSION['user_id']) && isset($_COOKIE['remember_token'], $_COOKIE['user_id'])) { //Kiểm tra cookies tồn tại.
                    $stmt = $conn->prepare("SELECT id, fullname FROM users WHERE id = ? AND remember_token = ?");
                    $stmt->execute([$_COOKIE['user_id'], $_COOKIE['remember_token']]); //Sử dụng cookies để truy vấn database.
                    if ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $_SESSION['user_id'] = $user['id'];
                        $_SESSION['fullname'] = $user['fullname']; //Lưu ID và tên người dùng để xác thực và cá nhân hóa trải nghiệm (ví dụ: biết ai đang đăng nhập)
                        return true;
                    }
                }
                return false;
            }

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $fullname = trim($_POST['fullname']);
                $password = trim($_POST['password']);
                $remember = isset($_POST['remember']);
                $error = empty($fullname) || empty($password) ? "Vui lòng điền đầy đủ thông tin." : null;

                if (!$error) {
                    try {
                        $stmt = $conn->prepare("SELECT id, fullname, password FROM users WHERE fullname = ?");
                        $stmt->execute([$fullname]);
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);

                        if ($user && password_verify($password, $user['password'])) {
                            $_SESSION['user_id'] = $user['id'];
                            $_SESSION['fullname'] = $user['fullname'];

                            if ($remember) {
                                $token = bin2hex(random_bytes(16));
                                $expire = time() + 30 * 24 * 60 * 60;
                                $stmt = $conn->prepare("UPDATE users SET remember_token = ? WHERE id = ?");
                                $stmt->execute([$token, $user['id']]);
                                setcookie('remember_token', $token, $expire, '/', '', true, true);
                                setcookie('user_id', $user['id'], $expire, '/', '', true, true);
                            }
                            header('Location: ../UI/index.php');
                            exit;
                        } else {
                            $error = "Tên người dùng hoặc mật khẩu không đúng.";
                        }
                    } catch (PDOException $e) {
                        $error = "Lỗi: " . $e->getMessage();
                    }
                }
                $_SESSION['error'] = $error;
                header('Location: ../SignInOn/login.html');
                exit;
            }

            if (restoreSessionFromCookies($conn)) {
                header('Location: ../UI/index.php');
                exit;
            }
            ?>
            
            <form action="login.php" method="POST">
              <div class="form-group">
                <label for="fullname">Tên người dùng</label>
                <input
                  type="text"
                  id="fullname"
                  name="fullname"
                  placeholder="Nhập tên người dùng"
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
              <button type="submit" class="btn-login">Đăng nhập</button>
            </form>
            <p class="register-link">
              Chưa có tài khoản? <a href="./register.php">Đăng ký</a>
            </p>
          </div>
        </div>
        <div class="right-section"></div>
      </div>
    </div>
  </body>
</html>
