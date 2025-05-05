<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- bootstrap_css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="./assets/css/reset.css" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <title>Trang chủ</title>
  </head>

  <body>
    <!-- Header  -->
    <header>
      <div class="inner-wrap">
        <div class="header-top">
          <div class="container">
            <div class="contact-info">
              <i class="fa-solid fa-location-dot"></i>
              <span class="address"
                >210/14, Đ.Hoàng Diệu 2, P.Linh Chiểu, TP.Thủ Đức, HCM</span
              >
            </div>
            <div class="inner-service">
              <div class="inner-book-tour">
                <a href="./tour.php"><span>Xem Ngay</span></a>
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
                <a href="./tour.php">Tour</a>
                </li>
              </ul>
            </nav>
            <div class="user-menu">
              <i class="fa-solid fa-circle-user"></i>
              <div class="inner-user-auth">
                <a href="../SignInOn/login.html">
                  <i class="fa-solid fa-user"></i>
                  Đăng Nhập
                </a>
                <a href="../SignInOn/register.html">
                  <i class="fa-solid fa-user-plus"></i>
                  Đăng Ký
                </a>
                <a href="../SignInOn/logout.php">
                  <i class="fa-solid fa-user-plus"></i>
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
      <div class="slider">
        <!-- Slick Slider chỉ chứa hình ảnh -->
        <div class="item-slider">
          <div class="slide">
            <img src="../user/booking_tour/assets/image/bg2.webp" alt="Slide 1" />
          </div>
          <div class="slide">
            <img src="../user/booking_tour/assets/image/bg2.webp" alt="Slide 2" />
          </div>
          <div class="slide">
            <img src="../user/booking_tour/assets/image/bg4.jpg" alt="Slide 3" />
          </div>
        </div>

        <!-- Phần nội dung được đặt đè lên ảnh -->
        <div class="slides">
          <div class="inner-slide">
            <div class="slide-text">
              <div class="tour-item">
                <p>Tour & Travels</p>
              </div>
              <div class="inner-content">
                <h2 class="inner-title">Khám Phá vẻ đẹp thiên nhiên hùng vĩ</h2>
                <p class="inner-desc">
                  Tận hưởng vẻ đẹp thiên nhiên ban tặng cho nơi đây với sự kết
                  hợp hài hòa giữa vùng núi và sông nước xanh lam huyền bí, và
                  khám phá nhiều cảnh quan thiên nhiên tuyệt đẹp.
                </p>
              </div>
              <a href="../user/tour.php"><button class="button">Bắt Đầu Ngay</button></a>
            </div>
          </div>

          <div class="inner-slide">
            <div class="slide-text">
              <div class="tour-item">
                <p>Tour & Travels</p>
              </div>
              <div class="inner-content">
                <h2 class="inner-title">Khám Phá Nha Trang</h2>
                <p class="inner-desc">
                  Tận hưởng vẻ đẹp tuyệt vời của Nha Trang với biển xanh cát
                  trắng, những bãi biển hoang sơ và không gian yên bình.
                </p>
              </div>
              <a href="../user/tour.php"><button class="button">Tìm hiểu thêm</button></a>
            </div>
          </div>

          <div class="inner-slide">
            <div class="slide-text">
              <div class="tour-item">
                <p>Tour & Travels</p>
              </div>
              <div class="inner-content">
                <h2 class="inner-title">Khám Phá Đà Lạt</h2>
                <p class="inner-desc">
                  Đắm chìm trong không khí se lạnh, những rừng thông bạt ngàn và
                  vẻ đẹp lãng mạn của thành phố sương mù Đà Lạt.
                </p>
              </div>
              <a href="../user/tour.php"><button class="button">Khám phá ngay</button></a>
            </div>
          </div>
        </div>

        <!-- Nút điều hướng -->
        <!-- <button class="inner-prev">&lt;</button>
        <button class="inner-next">&gt;</button> -->
      </div>

      <!-- search content -->
    </div>
    <!-- End section-one -->

    <!-- section-two -->
    <div class="section-two">
      <div class="container-fluid">
        <div class="row">
          <h3 class="inner-title">Hoạt Động Phổ Biến</h3>
          <h2 class="inner-contact">Khám phá phiêu lưu</h2>
          <div class="inner-wrap">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-image">
                <img src="../user/booking_tour/assets/image/item2.jpg" alt="" />
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-image">
                <img src="../user/booking_tour/assets/image/item3.webp" alt="" />
              </div>

            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-image">
                <img src="../user/booking_tour/assets/image/item4.jpg" alt="" />
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-image">
                <img src="../user/booking_tour/assets/image/background.jpg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End section-two -->

    <!-- section-three  -->
    <div class="section-three">
      <div class="container-fluid">
        <div class="row">
          <div class="inner-wrap">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-image">
                <img src="../user/booking_tour/assets/image/three2.webp" alt="" />
                <div class="inner-item">
                  <div class="item-image">
                    <img src="../user/booking_tour/assets/image/three3.jpg" alt="" />
                  </div>
                  <div class="item-content">
                    <div class="item-boder">
                      <span class="number">18</span>
                      <p class="item-desc">Năm Kinh Nghiệm</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <h3 class="inner-title">Dịch Vụ Cao Cấp</h3>
              <h2 class="inner-contact">Du lịch tuyệt vời</h2>
              <div class="inner-list">
                <div class="inner-social">
                  <i class="fa-solid fa-square-check"></i>
                  <i class="fa-solid fa-helmet-safety"></i>
                </div>
                <div class="inner-pricing">
                  <h2 class="inner-seft">An toàn là ưu tiên</h2>
                  <p class="pricing-mess">
                    Chúng tôi hiểu rằng khi bạn tham gia một hoạt động hay trải
                    nghiệm, an toàn là yếu tố quan trọng nhất.
                  </p>
                </div>
              </div>
              <div class="inner-list">
                <div class="inner-social">
                  <i class="fa-solid fa-square-check"></i>
                  <i class="fa-solid fa-hand-holding-dollar"></i>
                </div>
                <div class="inner-pricing">
                  <h2 class="inner-seft">Giá ưu đãi và hấp dẫn</h2>
                  <p class="pricing-mess">
                    Chúng tôi hiểu rằng giá cả là một yếu tố quan trọng khi bạn
                    lựa chọn một hoạt động hay trải nghiệm.
                  </p>
                </div>
              </div>
              <div class="inner-list">
                <div class="inner-social">
                  <i class="fa-solid fa-square-check"></i>
                  <i class="fa-solid fa-plane-departure"></i>
                </div>
                <div class="inner-pricing">
                  <h2 class="inner-seft">Hướng dẫn viên đáng tin cậy</h2>
                  <p class="pricing-mess">
                    Đội ngũ người hướng dẫn của chúng tôi được chọn lọc kỹ càng
                    và có kinh nghiệm trong lĩnh vực
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end section-three  -->

    <!-- section-four -->
    <div class="section-four">
      <div class="container-fluid">
        <div class="row">
          <h4 class="title">HOẠT ĐỘNG NỘI BẬT</h4>
          <h3 class="contact">Cảm Giác Phiêu Lưu</h3>
          <div class="inner-wrap">
            <div class="list-item">
              <div
                class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 defaul change"
              >
                <div class="inner-item">
                  <i class="fa-solid fa-tent-arrow-down-to-line"></i>
                  <span>Cắm Trại</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 change">
                <div class="inner-item">
                  <i class="fa-solid fa-plane"></i>
                  <span>Du lịch mạo hiểm</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 change">
                <div class="inner-item">
                  <i class="fa-solid fa-person-hiking"></i>
                  <span>Đi bộ leo núi</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 change">
                <div class="inner-item">
                  <i class="fa-solid fa-earth-americas"></i>
                  <span>Khám phá thế giới</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 change">
                <div class="inner-item">
                  <i class="fa-solid fa-person-swimming"></i>
                  <span>Câu cá & bơi lội</span>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 change">
                <div class="inner-item">
                  <i class="fa-solid fa-person-biking"></i>
                  <span>Đạp xe leo núi</span>
                </div>
              </div>
            </div>
            <div class="wrap-content">
              <div class="content-icon">
                <i class="fa-solid fa-tent-arrows-down"></i>
              </div>
              <div class="content-desc">
                <h2>
                  Cuộc phiêu lưu thực sự và tận hưởng những chuyến đi mơ ước của
                  bạn.
                </h2>
                <p>
                  Chúng tôi đặt trái tim của mình vào việc tạo ra những trải
                  nghiệm phiêu lưu độc đáo, nơi bạn có thể tận hưởng sự kết nối
                  thân thiết với tự nhiên.
                </p>
                <div class="content-customer">
                  <h3>Khách hàng hài lòng</h3>
                  <div class="rating-customer">
                    <div class="rating-bar">
                      <div class="rating-progress" style="width: 98%"></div>
                    </div>
                    <span>98%</span>
                  </div>
                </div>
                <div class="content-positive">
                  <h3>Đánh giá tích cực</h3>
                  <div class="rating-customer">
                    <div class="rating-bar">
                      <div class="rating-progress" style="width: 95%"></div>
                    </div>
                    <span>95%</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="content-image">
              <img src="../user/booking_tour/assets/image/item1.jpg" alt="" />
            </div>
          </div>
          <div class="inner-footer">
            <i class="fa-solid fa-earth-europe"></i>
            <div class="footer-content">
              <span>Phiêu lưu độc đáo</span>
              <p>Sẵn sàng phiêu lưu và tận hưởng thiên nhiên</p>
            </div>
            <a href="#" class="footer-button">Khám phá ngay</a>
          </div>
        </div>
      </div>
    </div>
    <!-- End section-four -->

    <!-- section-five -->
    <div class="section-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="head-content">
              <span class="content-expre"> Trải Nghiệm Tuyệt Vời </span>
              <h2 class="inner-place">Các địa điểm thú vị</h2>
            </div>
          </div>

          <div class="inner-list">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 flex-box">
              <div class="list-box">
                <div class="box-image">
                  <img src="../user/booking_tour/assets/image/five_1.jpg" alt="" />
                </div>
                <div class="content-box">
                  <div class="list-icons">
                    <div class="icon-star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="icon-media">
                      <i class="fa-solid fa-camera-retro"></i>
                      <i class="fa-solid fa-video"></i>
                    </div>
                  </div>
                  <h2 class="content-title">Vịnh Ninh Vân</h2>
                  <div class="content-sub">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="sub-address">Đảo Hòn Mẹo, Tỉnh Khánh Hòa</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 flex-box">
              <div class="list-box">
                <div class="box-image">
                  <img src="../user/booking_tour/assets/image/five-2.jpg" alt="" />
                </div>
                <div class="content-box">
                  <div class="list-icons">
                    <div class="icon-star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="icon-media">
                      <i class="fa-solid fa-camera-retro"></i>
                      <i class="fa-solid fa-video"></i>
                    </div>
                  </div>
                  <h2 class="content-title">Bình minh Đà Lạt</h2>
                  <div class="content-sub">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="sub-address">CaFe săn mây Đà Lạt</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 flex-box">
              <div class="list-box">
                <div class="box-image">
                  <img src="../user/booking_tour/assets/image/five-3.jpg" alt="" />
                </div>
                <div class="content-box">
                  <div class="list-icons">
                    <div class="icon-star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="icon-media">
                      <i class="fa-solid fa-camera-retro"></i>
                      <i class="fa-solid fa-video"></i>
                    </div>
                  </div>
                  <h2 class="content-title">Ba Na Hills</h2>
                  <div class="content-sub">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="sub-address">Đà Nẵng</span>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6 flex-box">
              <div class="list-box">
                <div class="box-image">
                  <img src="../user/booking_tour/assets/image/five-4.jpg" alt="" />
                </div>
                <div class="content-box">
                  <div class="list-icons">
                    <div class="icon-star">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <div class="icon-media">
                      <i class="fa-solid fa-camera-retro"></i>
                      <i class="fa-solid fa-video"></i>
                    </div>
                  </div>
                  <h2 class="content-title">Hang sửng sốt</h2>
                  <div class="content-sub">
                    <i class="fa-solid fa-location-dot"></i>
                    <span class="sub-address">Vịnh Hạ Long</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="contact-item">
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-suitcase-rolling"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Chuyến đi tùy chỉnh</h2>
                <p class="inner-desc">
                  Có thể chọn địa điểm, thời gian và hoạt động mà bạn muốn tham
                  gia, và chúng tôi sẽ tạo ra một chuyến đi độc đáo dành riêng
                  cho bạn.
                </p>
              </div>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-user-tie"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Hướng dẫn viên chuyên nghiệp</h2>
                <p class="inner-desc">
                  Đội ngũ hướng dẫn viên của chúng tôi là những chuyên gia có
                  kiến thức sâu rộng về địa điểm du lịch và văn hóa địa phương
                </p>
              </div>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-award"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Chất dịch vụ</h2>
                <p class="inner-desc">
                  Chúng tôi luôn đảm bảo rằng mọi khía cạnh của chuyến đi đều
                  được chăm sóc tận tâm để đáp ứng sự mong đợi của bạn.
                </p>
              </div>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-earth-asia"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Địa điểm đa dạng</h2>
                <p class="inner-desc">
                  Chúng tôi cung cấp một loạt các địa điểm du lịch hấp dẫn trên
                  khắp thế giới phù hợp với sở thích và yêu cầu của mình.
                </p>
              </div>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-rocket"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Trải nghiệm độc đáo</h2>
                <p class="inner-desc">
                  Chúng tôi không chỉ đưa bạn đến những địa điểm du lịch phổ
                  biến mà còn mang đến cho bạn những trải nghiệm độc đáo và khác
                  biệt.
                </p>
              </div>
            </div>
            <div class="inner-card">
              <div class="card-icon">
                <i class="fa-solid fa-headset"></i>
              </div>
              <div class="card-content">
                <h2 class="inner-title">Hỗ trợ dịch vụ 24/7</h2>
                <p class="inner-desc">
                  Đội ngũ chăm sóc khách hàng của chúng tôi sẽ giải đáp mọi thắc
                  mắc và xử lý mọi vấn đề mà bạn có thể gặp phải.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End section-five -->

    <!-- section-six  -->
    <div class="section-six">
      <div class="inner-wrap">
        <div class="col-xl-6 flex-gird">
          <div class="inner-content">
            <div class="inner-desc">
              <h2 class="content-quesion">
                Bạn đã sẵn sàng để đi du lịch chưa ?
              </h2>
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
              <p class="card-content">Chuyến tham quan mạo hiểm</p>
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
    <!-- End section-six  -->

    <!-- section-seven  -->
    <div class="section-seven">
      <div class="container">
        <div class="header-conten">
          <span class="header-title">Khung Cảnh Tuyệt Đẹp</span>
          <h2 class="header-dest">Địa điểm nổi bật</h2>
        </div>
        <section class="travel-top">
          <div class="top-item">
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">3&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven1.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Nha Trang</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">3&nbsp; Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven2.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Đà Lạt</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">3&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven3.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Đà Nẵng</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
          </div>
        </section>
        <section class="travel-bottom">
          <div class="bottom-item">
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">1&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven4.jpeg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Hồ Chí Minh</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">2&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven5.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Hà Nội</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">2&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/seven6.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Huế</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
            <div class="item-box">
              <div class="sub-box">
                <span class="sub-content">1&nbsp;Tours</span>
              </div>
              <div class="box-image">
                <img src="../user/booking_tour/assets/image/six.jpg" alt="" />
              </div>
              <div class="box-content">
                <p class="sub-title-box">Du lịch</p>
                <h3 class="title-box">Vịnh Hạ Long</h3>
              </div>
              <a href="" class="linked"></a>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- End section-seven  -->

    <!-- section-eigth  -->
    <div class="section-eight">
      <div class="container">
        <div class="head-top">
          <span class="head-sub">Chuyến đi thú vị</span>
          <h2 class="head-title">Thành tựu đạt được</h2>
        </div>
        <section class="success-list">
          <div class="inner-wrap">
            <div class="inner-item">
              <div class="item-icon">
                <i class="fa-solid fa-person-hiking"></i>
              </div>
              <div class="item-content">
                <h4 class="content-number">3500+</h4>
                <p class="content-title">Du khách thân thiết</p>
              </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-6">
              <div class="inner-item">
                <div class="item-icon">
                  <i class="fa-solid fa-tent-arrows-down"></i>
                </div>
                <div class="item-content">
                  <h4 class="content-number">1650+</h4>
                  <p class="content-title">Tours hoạt động</p>
                </div>
              </div>
            </div>
            <div class="inner-item">
              <div class="item-icon">
                <i class="fa-solid fa-award"></i>
              </div>
              <div class="item-content">
                <h4 class="content-number">99.5%</h4>
                <p class="content-title">Đánh giá tích cực</p>
              </div>
            </div>
            <div class="inner-item">
              <div class="item-icon">
                <i
                  class="fa-solid fa-person-walking-dashed-line-arrow-right"
                ></i>
              </div>
              <div class="item-content">
                <h4 class="content-number">62+</h4>
                <p class="content-title">Chuyên viên kinh nghiệm</p>
              </div>
            </div>
          </div>
        </section>
        <section class="feedback">
          <div class="inner-wrap">
            <div class="item-content">
              <span class="sub-content">Chất lượng dịch vụ</span>
              <h3 class="content-title">Đánh giá tích cực từ khách hàng</h3>
              <p class="content-desc">
                Đánh giá tích cực từ khách hàng là động lực lớn để chúng tôi
                tiếp tục cung cấp dịch vụ du lịch tốt nhất. Chúng tôi luôn cố
                gắng không ngừng nâng cao chất lượng dịch vụ và mang đến những
                trải nghiệm tuyệt vời cho mọi khách hàng.
              </p>
            </div>
            <div class="item-image">
              <img src="../user/booking_tour/assets/image/eight.jpg" alt="" />
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- End section-eigth  -->
    <div>
      <div class="footer-container">
        <div class="footer-box empty-box"></div>

        <div class="footer-box image-box">
            <img src="assets/img1.png" alt="">
            <p>Tham gia và trải nghiệm cùng chúng tôi những vùng đất tuyệt đẹp của Việt Nam</p>
            <div class="social-icons">
                <a href=""><i class="fab fa-facebook-f"></i></a>
                <a href=""><i class="fab fa-tiktok"></i></a>
                <a href=""><i class="fab fa-youtube"></i></a>
                <a href=""><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="footer-box spacer-box"></div>

        <div class="footer-box newsletter-box">
            <p class="phone">(+84) 0989-522-125</p>
            <h2>Bản tin</h2>
            <p><a href="../LogIn/SignIn/login.html">Đăng kí</a> ngay để nhận bản tin mới nhất</p>
            <p>Chúng tôi cam kết sẽ đem đến những dịch vụ tốt nhất cho người dùng</p>
        </div>

        <div class="footer-box contact-box">
            <h3>Liên hệ</h3>
            <p class="label">Email</p>
            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a68489898d8f8881a6818b878f8ac885898b">[email&#160;protected]</a></p>

            <p class="label">Địa chỉ</p>
            <p>1073/23 Cách Mạng Tháng Tám, P.7, Quận Tân Bình, TP.HCM</p>
        </div>
    </div>
  </div>

    <!-- slick_js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="../javascript/thu_vien_jquery/jquery-3.7.1.js"></script>
    <script src="../javascript/slick_JS/slick.min.js"></script>
    <script src="../javascript/index.js"></script>
    <script>
        document.getElementById('reset-button').addEventListener('click', function() {
            document.querySelectorAll('.search-item select, .search-item input').forEach(item => {
                item.value = '';
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const searchForm = document.querySelector('.search-container form');
            if (searchForm) {
                searchForm.addEventListener('submit', function(e) {
                    e.preventDefault(); // Ngăn form submit mặc định

                    // Lấy giá trị từ form
                    const destination = document.getElementById('destination').value;
                    const tourType = document.getElementById('tour-type').value;
                    const departureDate = document.getElementById('departure-date').value;
                    const guests = document.getElementById('guests').value;

                    // Kiểm tra các trường bắt buộc
                    if (destination === '' || tourType === '' || !departureDate || guests <= 0) {
                        alert('Vui lòng điền đầy đủ thông tin!');
                        return;
                    }

                    // Ánh xạ tourType để khớp với cơ sở dữ liệu
                    const tourTypeMap = {
                        'DuLichBien': 'Nghỉ dưỡng',
                        'TPHoa': 'Khám phá',
                        'Tp': 'Văn hóa'
                    };
                    const mappedTourType = tourTypeMap[tourType] || tourType;

                    // Chuyển hướng với tham số
                    const url = `search_results.html?destination=${encodeURIComponent(destination)}&tourType=${encodeURIComponent(mappedTourType)}&departureDate=${encodeURIComponent(departureDate)}&guests=${encodeURIComponent(guests)}`;
                    window.location.href = url;
                });
            }
        });
    </script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'939d8b2eed05b0d0',t:'MTc0NjI1MjA4NS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'939da97e3cbc6761',t:'MTc0NjI1MzMyNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
    <script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'93a902595c69bd48',t:'MTc0NjM3MjMxMC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
    <script>
      function handleSearchFormSubmit(event) {
          event.preventDefault();
  
          const destination = document.getElementById('destination').value;
          const tourType = document.getElementById('tour-type').value;
          const departureDate = document.getElementById('departure-date').value;
          const guests = document.getElementById('guests').value;
  
          if (destination === '' || tourType === '' || !departureDate || guests <= 0) {
              alert('Vui lòng điền đầy đủ thông tin!');
              return;
          }
  
          const tourTypeMap = {
    'DuLichBien': 'Nghỉ dưỡng',
    'TPHoa': 'Khám phá',
    'Tp': 'Văn hóa'
};
          const mappedTourType = tourTypeMap[tourType] || tourType;
  
          const url = `search_results.html?destination=<span class="math-inline">\{encodeURIComponent\(destination\)\}&tourType\=</span>{encodeURIComponent(mappedTourType)}&departureDate=<span class="math-inline">\{encodeURIComponent\(departureDate\)\}&guests\=</span>{encodeURIComponent(guests)}`;
          window.location.href = url;
      }
  
      function handleResetButtonClick() {
          document.querySelectorAll('.search-item select, .search-item input').forEach(item => {
              item.value = '';
          });
      }
  
      const searchForm = document.querySelector('.search-container form');
      if (searchForm) {
          searchForm.addEventListener('submit', handleSearchFormSubmit);
      }
  
      const resetButton = document.getElementById('reset-button');
      if (resetButton) {
          resetButton.addEventListener('click', handleResetButtonClick);
      }
  </script>
  </body>
</html>