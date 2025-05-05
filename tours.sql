-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2025 lúc 12:37 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `travel_website`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `tour_type` varchar(50) NOT NULL,
  `departure_date` varchar(20) NOT NULL,
  `guests` int(11) NOT NULL DEFAULT 1,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `title`, `destination`, `tour_type`, `departure_date`, `guests`, `price`, `image`, `description`, `created_at`) VALUES
(1, 'Vịnh Ninh Vân', 'Nha Trang', 'Nghỉ dưỡng', '2025-06-01', 10, 6990000.00, '../booking_tour/assets/image/five_1.jpg', 'Khám phá vẻ đẹp hoang sơ của Vịnh Ninh Vân với biển xanh và cát trắng.', '2025-05-03 15:00:33'),
(2, 'Bình minh Đà Lạt', 'Đà Lạt', 'Khám phá', '2025-05-15', 15, 490000.00, '../booking_tour/assets/image/five-2.jpg', 'Trải nghiệm săn mây và ngắm bình minh tuyệt đẹp tại Đà Lạt.', '2025-05-03 15:00:33'),
(3, 'Ba Na Hills', 'Đà Nẵng', 'Văn hóa', '2025-07-01', 20, 1290000.00, '../booking_tour/assets/image/five-3.jpg', 'Tham quan khu du lịch nổi tiếng với cầu Vàng và làng Pháp.', '2025-05-03 15:00:33'),
(4, 'Hang Sửng Sốt', 'Vịnh Hạ Long', 'Khám phá', '2025-06-15', 12, 1190000.00, '../booking_tour/assets/image/five-4.jpg', 'Khám phá hang động tuyệt đẹp tại Vịnh Hạ Long.', '2025-05-03 15:00:33'),
(5, 'Khám phá Sài Gòn', 'Hồ Chí Minh', 'Văn hóa', '2025-07-10', 8, 2990000.00, '../booking_tour/assets/image/five-5.jpg', 'Trải nghiệm văn hóa và ẩm thực tại thành phố Hồ Chí Minh.', '2025-05-04 22:24:24');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
