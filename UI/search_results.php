<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
        color: #007bff;
      }
      .home-link:hover {
        text-decoration: underline;
      }
      .card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
        background: #007bff;
        color: white;
        padding: 10px 15px;
        border-radius: 6px;
        font-weight: bold;
        transition: background 0.3s ease;
      }
      .detail-link:hover {
        background: #0056b3;
      }
      .no-results {
        text-align: center;
        background: white;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        color: #e74c3c;
        font-size: 1.2rem;
        max-width: 800px;
        margin: 20px auto;
      }
      .no-results i {
        font-size: 2rem;
        margin-bottom: 10px;
      }
      .no-image {
        width: 250px;
        height: 100%;
        background: #f0f0f0;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #999;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>KẾT QUẢ TÌM KIẾM</h1>
      <a href="./index.php" class="home-link">← Về trang chủ</a>
    </header>

    <div class="row" id="tour-results"></div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script>
      $(document).ready(function () {
        const params = new URLSearchParams(window.location.search);
        let destination = params.get("destination") || "";
        let tourType = params.get("tourType") || "";
        const departureDate = params.get("departureDate") || "";
        const guests = parseInt(params.get("guests")) || 0;

        console.log("Original Params from URL:", {
          destination,
          tourType,
          departureDate,
          guests,
        });

        const destinationMap = {
          NhaTrang: "Nha Trang",
          DaNang: "Đà Nẵng",
          DaLat: "Đà Lạt",
          VinhHaLong: "Vịnh Hạ Long",
          HCM: "Hồ Chí Minh",
        };
        const tourTypeMap = {
          DuLichBien: "Nghỉ dưỡng",
          TPHoa: "Khám phá",
          Tp: "Văn hóa",
        };

        destination = destinationMap[destination] || destination;
        tourType = tourTypeMap[tourType] || tourType;

        console.log("Mapped Params:", {
          destination,
          tourType,
          departureDate,
          guests,
        });

        const apiUrl =
          "http://localhost/WebDevelopFinal/WebDevelop/UI/get_tours.php";

        const fullUrl = `${apiUrl}?destination=${encodeURIComponent(
          destination
        )}&tourType=${encodeURIComponent(
          tourType
        )}&departureDate=${departureDate}&guests=${guests}`;
        console.log("Full AJAX URL:", fullUrl);

        if (destination && tourType && departureDate) {
          console.log("Sending AJAX request to:", apiUrl);
          $.ajax({
            url: apiUrl,
            method: "GET",
            data: { destination, tourType, departureDate, guests },
            dataType: "json",
            success: function (response) {
              console.log("Response:", response);
              displayTours(response);
            },
            error: function (xhr, status, error) {
              console.error(
                "AJAX Error:",
                status,
                error,
                xhr.status,
                xhr.responseText
              );
              let errorMessage =
                "Không thể kết nối đến server. Mã lỗi: " + xhr.status;
              if (xhr.status === 0) {
                errorMessage +=
                  " (Có thể do CORS hoặc trình duyệt chặn request)";
              } else if (xhr.status === 404) {
                errorMessage += " (File get_tours.php không tồn tại)";
              } else if (xhr.status === 500) {
                errorMessage += " (Lỗi server, kiểm tra debug.log)";
              }
              displayTours([], errorMessage);
            },
          });
        } else {
          displayTours([], "Thiếu thông tin tìm kiếm");
        }

        function displayTours(tours, errorMessage) {
          const $results = $("#tour-results");
          $results.empty();

          if (!tours || tours.length === 0) {
            let message =
              errorMessage ||
              "Không tìm thấy tour phù hợp với lựa chọn của bạn.";
            $results.append(`
            <div class="no-results">
              <i class="fas fa-exclamation-triangle"></i>
              <p>${message}</p>
            </div>
          `);
            return;
          }

          tours.forEach((tour) => {
            let imageSrc = tour.image || "../assets/admin/image/default.jpg";
            let imageElement = `<img src="${imageSrc}" alt="${tour.title}" onerror="this.onerror=null; this.src='../assets/admin/image/default.jpg';">`;
            if (!tour.image) {
              imageElement = `<div class="no-image">Hình ảnh không có</div>`;
            }

            $results.append(`
            <div class="card">
              ${imageElement}
              <div class="card-content">
                <div class="category">Du lịch</div>
                <div class="title">${tour.title}</div>
                <div class="description">${
                  tour.description || "Mô tả tour chưa có."
                }</div>
                <a href="https://example.com/${tour.destination
                  .toLowerCase()
                  .replace(
                    " ",
                    "-"
                  )}" class="detail-link" target="_blank">Xem chi tiết</a>
              </div>
            </div>
          `);
          });
        }
      });
    </script>
    <script>
      (function () {
        function c() {
          var b = a.contentDocument || a.contentWindow.document;
          if (b) {
            var d = b.createElement("script");
            d.innerHTML =
              "window.__CF$cv$params={r:'93ab58ab1a90b02d',t:'MTc0NjM5NjgxNy4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";
            b.getElementsByTagName("head")[0].appendChild(d);
          }
        }
        if (document.body) {
          var a = document.createElement("iframe");
          a.height = 1;
          a.width = 1;
          a.style.position = "absolute";
          a.style.top = 0;
          a.style.left = 0;
          a.style.border = "none";
          a.style.visibility = "hidden";
          document.body.appendChild(a);
          if ("loading" !== document.readyState) c();
          else if (window.addEventListener)
            document.addEventListener("DOMContentLoaded", c);
          else {
            var e = document.onreadystatechange || function () {};
            document.onreadystatechange = function (b) {
              e(b);
              "loading" !== document.readyState &&
                ((document.onreadystatechange = e), c());
            };
          }
        }
      })();
    </script>
  </body>
</html>
