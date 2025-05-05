-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 05, 2025 lúc 06:54 AM
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
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `detail_id` int(11) NOT NULL,
  `num` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Nghỉ dưỡng'),
(2, 'Khám phá'),
(3, 'Văn hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject_name` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedback`
--

INSERT INTO `feedback` (`id`, `fullname`, `email`, `phone_number`, `subject_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Võ Thiên Bảo', 'thienbao.vo@gmail.com', '0901122334', 'Trải nghiệm tour Đà Lạt', 'Chuyến đi rất tuyệt vời, dịch vụ tốt, hướng dẫn viên thân thiện và nhiệt tình.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(2, 'Ngô Hải Yến', 'haiyen.ngo@gmail.com', '0912233445', 'Dịch vụ đặt tour', 'Giao diện dễ sử dụng, đặt tour nhanh chóng và tiện lợi, mình rất hài lòng.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(3, 'Đặng Quang Huy', 'quanghuy.dang@gmail.com', '0988776655', 'Đội ngũ hỗ trợ', 'Nhân viên hỗ trợ nhiệt tình, phản hồi nhanh, cảm giác được quan tâm chu đáo.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(4, 'Bùi Minh Châu', 'minhchau.bui@gmail.com', '0977332211', 'Tour miền Tây', 'Hành trình rất thú vị, đồ ăn ngon, lịch trình hợp lý, đáng trải nghiệm.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(5, 'Trịnh Ngọc Lan', 'ngoclan.trinh@gmail.com', '0966888777', 'Hệ thống thanh toán', 'Thanh toán nhanh, dễ dàng, không gặp lỗi, hệ thống hoạt động mượt mà.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(6, 'Lý Quốc Hưng', 'quochung.ly@gmail.com', '0933667788', 'Tour Nha Trang', 'Phong cảnh đẹp, biển xanh trong, rất thích hợp cho nghỉ dưỡng cùng gia đình.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(7, 'Tạ Bảo Ngọc', 'baongoc.ta@gmail.com', '0911223344', 'Giao diện website', 'Website thiết kế bắt mắt, thông tin rõ ràng, dễ tìm kiếm các tour yêu thích.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(8, 'Hồ Anh Dũng', 'anhdung.ho@gmail.com', '0944556677', 'Chất lượng dịch vụ', 'Mình rất hài lòng với chất lượng dịch vụ, nhân viên chuyên nghiệp và vui vẻ.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(9, 'Phan Thị Kim Oanh', 'kimoanh.phan@gmail.com', '0900998877', 'Tour Phú Quốc', 'Tour tổ chức tốt, đảo đẹp, di chuyển thuận tiện, mọi thứ rất hợp lý.', '2025-05-05 01:36:45', '2025-05-05 01:36:45'),
(10, 'Cao Thanh Tùng', 'thanhtung.cao@gmail.com', '0977996655', 'Tư vấn khách hàng', 'Bạn tư vấn rất dễ thương, hỗ trợ chi tiết, cảm giác rất yên tâm khi đặt tour.', '2025-05-05 01:36:45', '2025-05-05 01:36:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`id`, `category_id`, `title`, `thumbnail`, `link`, `description`, `address`, `created_at`, `updated_at`, `deleted`) VALUES
(7, 1, 'Tour Đà Nẵng - Biển Mỹ Khê', 'danang.jpg', 'https://vi.wikipedia.org/wiki/B%C3%A3i_bi%E1%BB%83n_M%E1%BB%B9_Kh%C3%AA', 'Thư giãn tại bãi biển Mỹ Khê nổi tiếng và tham quan bán đảo Sơn Trà.', 'Đà Nẵng', '2025-05-03 09:13:48', '2025-05-05 03:11:02', 0),
(8, 1, 'Du lịch Nha Trang ', 'nhatrang.jpg', 'https://vi.wikipedia.org/wiki/Nha_Trang', 'Tham quan Vinpearl, tắm biển và thưởng thức hải sản tươi sống.', 'Nha Trang, Khánh Hòa', '2025-05-03 09:13:48', '2025-05-05 03:11:42', 0),
(9, 1, 'Khu nghỉ dưỡng Tam Đảo ', 'tamdao.jpg', 'https://vi.wikipedia.org/wiki/Khu_du_l%E1%BB%8Bch_Tam_%C4%90%E1%BA%A3o', 'Trải nghiệm không khí mát mẻ và dịch vụ spa tại resort đồi núi.', 'Tam Đảo, Vĩnh Phúc', '2025-05-03 09:13:48', '2025-05-05 03:12:21', 0),
(10, 1, 'Kỳ nghỉ dưỡng Đà Lạt ', 'dalatresort.jpg', 'https://vi.wikipedia.org/wiki/%C4%90%C3%A0_L%E1%BA%A1t', 'Resort view thung lũng, có bữa sáng và hồ bơi nước ấm.', 'Đà Lạt, Lâm Đồng', '2025-05-03 09:13:48', '2025-05-05 03:12:50', 0),
(11, 1, 'Tour đảo Nam Du', 'namdu.jpg', 'https://vi.wikipedia.org/wiki/Qu%E1%BA%A7n_%C4%91%E1%BA%A3o_Nam_Du', 'Khám phá biển hoang sơ, lặn ngắm san hô và cắm trại trên đảo.', 'Kiên Giang', '2025-05-03 09:13:48', '2025-05-05 03:13:14', 0),
(12, 2, 'Trekking Tà Năng - Phan Dũng', 'tanang.jpg', 'https://vi.wikipedia.org/wiki/T%C3%A0_N%C4%83ng', 'Hành trình leo núi, cắm trại giữa rừng và ngắm bình minh trên đỉnh.', 'Lâm Đồng - Bình Thuận', '2025-05-03 09:13:48', '2025-05-05 03:13:42', 0),
(13, 2, 'Leo núi Bà Đen', 'baden.jpg', 'https://vi.wikipedia.org/wiki/N%C3%BAi_B%C3%A0_%C4%90en', 'Chinh phục nóc nhà Nam Bộ và thưởng ngoạn cáp treo hiện đại.', 'Tây Ninh', '2025-05-03 09:13:48', '2025-05-05 03:14:11', 0),
(14, 2, 'Thám hiểm động Thiên Đường', 'thienduong.jpg', 'https://vi.wikipedia.org/wiki/%C4%90%E1%BB%99ng_Thi%C3%AAn_%C4%90%C6%B0%E1%BB%9Dng', 'Khám phá vẻ đẹp kỳ ảo của hang động tại Phong Nha.', 'Quảng Bình', '2025-05-03 09:13:48', '2025-05-05 03:14:38', 0),
(15, 2, 'Tour rừng tràm Trà Sư', 'trasu.jpg', 'https://vi.wikipedia.org/wiki/R%E1%BB%ABng_tr%C3%A0m_Tr%C3%A0_S%C6%B0', 'Đi thuyền xuyên rừng, ngắm cảnh thiên nhiên sinh thái độc đáo.', 'An Giang', '2025-05-03 09:13:48', '2025-05-05 03:15:03', 0),
(16, 2, 'Khám phá hồ Ba Bể', 'babe.jpg', 'https://vi.wikipedia.org/wiki/H%E1%BB%93_Ba_B%E1%BB%83', 'Trải nghiệm chèo thuyền và khám phá núi rừng nguyên sinh Bắc Kạn.', 'Bắc Kạn', '2025-05-03 09:13:48', '2025-05-05 03:15:29', 0),
(17, 3, 'Tour Hà Nội – Văn Miếu – Lăng Bác', 'hanoi.jpg', 'https://vi.wikipedia.org/wiki/L%C4%83ng_Ch%E1%BB%A7_t%E1%BB%8Bch_H%E1%BB%93_Ch%C3%AD_Minh', 'Khám phá Thủ đô với các công trình lịch sử và văn hóa tiêu biểu.', 'Hà Nội', '2025-05-03 09:13:48', '2025-05-05 03:16:21', 0),
(18, 3, 'Tham quan thành nhà Hồ', 'thanhnhaho.jpg', 'https://vi.wikipedia.org/wiki/Th%C3%A0nh_nh%C3%A0_H%E1%BB%93', 'Di sản văn hóa thế giới với kiến trúc đá độc đáo thời Trần.', 'Thanh Hóa', '2025-05-03 09:13:48', '2025-05-05 03:16:45', 0),
(19, 3, 'Lễ hội Gióng – Sóc Sơn', 'giong.jpg', 'https://vi.wikipedia.org/wiki/H%E1%BB%99i_Gi%C3%B3ng', 'Trải nghiệm lễ hội truyền thống tưởng nhớ Thánh Gióng.', 'Hà Nội', '2025-05-03 09:13:48', '2025-05-05 03:17:07', 0),
(20, 3, 'Lễ hội hoa Đà Lạt', 'hoadalat.jpg', 'https://vi.wikipedia.org/wiki/Festival_Hoa_%C4%90%C3%A0_L%E1%BA%A1t', 'Ngắm hoa rực rỡ và các hoạt động nghệ thuật sôi động.', 'Đà Lạt, Lâm Đồng', '2025-05-03 09:13:48', '2025-05-05 03:17:33', 0),
(21, 3, 'Di tích Mỹ Sơn – Quảng Nam', 'myson.jpg', 'https://vi.wikipedia.org/wiki/Th%C3%A1nh_%C4%91%E1%BB%8Ba_M%E1%BB%B9_S%C6%A1n', 'Tham quan đền tháp Chăm cổ kính – di sản văn hóa UNESCO.', 'Duy Xuyên, Quảng Nam', '2025-05-03 09:13:48', '2025-05-05 03:18:04', 0),
(25, 1, 'Resort biển Phú Quốc ', 'phuquocresort.jpg', 'https://en.wikipedia.org/wiki/Ph%C3%BA_Qu%E1%BB%91c', 'Tận hưởng kỳ nghỉ dưỡng sang trọng tại resort ven biển với dịch vụ cao cấp.', 'Phú Quốc, Kiên Giang', '2025-05-05 02:11:20', '2025-05-05 03:18:46', 0),
(26, 1, 'Kỳ nghỉ tại Six Senses Ninh Vân Bay', 'ninhvanbay.jpg', 'https://www.traveloka.com/vi-vn/explore/destination/vinh-ninh-van-acc/192765', 'Resort biệt lập giữa thiên nhiên hoang sơ, lý tưởng để thư giãn và phục hồi năng lượng.', 'Nha Trang, Khánh Hòa', '2025-05-05 02:11:20', '2025-05-05 03:19:26', 0),
(27, 1, 'Vinpearl Resort Hạ Long', 'vinhalong.jpg', 'https://vi.wikipedia.org/wiki/V%E1%BB%8Bnh_H%E1%BA%A1_Long', 'Thư giãn tại resort nằm trên đảo riêng biệt giữa vịnh biển Hạ Long.', 'Hạ Long, Quảng Ninh', '2025-05-05 02:11:20', '2025-05-05 03:20:37', 0),
(28, 1, 'Ana Mandara Villas Đà Lạt', 'anamandara.jpg', 'https://www.traveloka.com/vi-vn/hotel/vietnam/ana-mandara-villas-dalat-resort--spa-1000000325613', 'Trải nghiệm phong cách nghỉ dưỡng kiểu Pháp giữa rừng thông lãng mạn.', 'Đà Lạt, Lâm Đồng', '2025-05-05 02:11:20', '2025-05-05 03:21:21', 0),
(29, 1, 'Fusion Maia Đà Nẵng', 'fusionmaia.jpg', 'https://maiadanang.fusionresorts.com/vi/trang-chu/', 'Resort kết hợp nghỉ dưỡng và chăm sóc sức khỏe với spa trọn gói.', 'Đà Nẵng', '2025-05-05 02:11:20', '2025-05-05 03:22:36', 0),
(30, 1, 'Khu du lịch Bình Quới', 'binhquoi.jpg', 'https://binhquoi.vn/', 'Không gian làng quê miền Tây giữa lòng thành phố.', 'Bình Thạnh, TP.HCM', '2025-05-05 02:11:20', '2025-05-05 03:23:21', 0),
(31, 1, 'Resort Hồ Tràm', 'hotram.jpg', 'https://vi.wikipedia.org/wiki/H%E1%BB%93_Tr%C3%A0m', 'Nghỉ dưỡng tại bãi biển Hồ Tràm hoang sơ, yên tĩnh.', 'Bà Rịa - Vũng Tàu', '2025-05-05 02:11:20', '2025-05-05 03:23:44', 0),
(32, 2, 'Khám phá Cù Lao Chàm', 'culaocam.jpg', 'https://vi.wikipedia.org/wiki/C%C3%B9_lao_Ch%C3%A0m', 'Lặn ngắm san hô và khám phá cuộc sống ngư dân đảo.', 'Hội An, Quảng Nam', '2025-05-05 02:11:20', '2025-05-05 03:24:07', 0),
(33, 2, 'Tour khám phá thác Bản Giốc', 'bangioc.jpg', 'https://vi.wikipedia.org/wiki/Th%C3%A1c_B%E1%BA%A3n_Gi%E1%BB%91c', 'Tham quan một trong những thác nước đẹp nhất Việt Nam.', 'Cao Bằng', '2025-05-05 02:11:20', '2025-05-05 03:24:36', 0),
(34, 2, 'Thám hiểm rừng quốc gia Cát Tiên', 'cattien.jpg', 'https://vi.wikipedia.org/wiki/V%C6%B0%E1%BB%9Dn_qu%E1%BB%91c_gia_C%C3%A1t_Ti%C3%AAn', 'Khám phá hệ sinh thái rừng nguyên sinh và các loài động vật quý hiếm.', 'Đồng Nai', '2025-05-05 02:11:20', '2025-05-05 03:25:00', 0),
(35, 2, 'Du ngoạn Mù Cang Chải mùa lúa chín', 'mucangchai.jpg', NULL, 'Chiêm ngưỡng ruộng bậc thang vàng óng tuyệt đẹp.', 'Yên Bái', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(36, 2, 'Hành trình chinh phục đỉnh Fansipan', 'fansipan.jpg', NULL, 'Leo núi hoặc đi cáp treo lên nóc nhà Đông Dương.', 'Lào Cai', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(37, 3, 'Khám phá cố đô Huế', 'hue.jpg', NULL, 'Thăm Đại Nội, lăng tẩm vua chúa và trải nghiệm văn hóa cung đình.', 'Huế, Thừa Thiên Huế', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(38, 3, 'Tham quan phố cổ Hội An', 'hoian.jpg', NULL, 'Dạo chơi phố cổ đèn lồng, thưởng thức đặc sản và tìm hiểu di sản UNESCO.', 'Hội An, Quảng Nam', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(39, 3, 'Lễ hội chùa Hương', 'chuahuong.jpg', NULL, 'Hành hương, lễ Phật và du thuyền qua suối Yến.', 'Mỹ Đức, Hà Nội', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(40, 3, 'Trải nghiệm chợ nổi Cái Răng', 'cairang.jpg', NULL, 'Khám phá nét văn hóa miền Tây sông nước.', 'Cần Thơ', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(41, 3, 'Tham quan Văn miếu Trấn Biên', 'tranbien.jpg', NULL, 'Di tích văn hóa lâu đời, biểu tượng truyền thống hiếu học.', 'Biên Hòa, Đồng Nai', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(42, 3, 'Lễ hội Kate của người Chăm', 'kate.jpg', NULL, 'Tìm hiểu văn hóa dân tộc Chăm tại tháp Pô Nagar.', 'Ninh Thuận', '2025-05-05 02:11:20', '2025-05-05 02:11:20', 0),
(43, 1, 'Khu du lịch sinh thái Làng Bè', 'langbe.jpg', NULL, 'Thư giãn trong khung cảnh miền quê sông nước, thưởng thức đặc sản cá lóc nướng trui.', 'Cái Bè, Tiền Giang', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(44, 1, 'Khu nghỉ dưỡng Cồn Phụng', 'conphung.jpg', NULL, 'Trải nghiệm không gian xanh ven sông Tiền, thưởng thức kẹo dừa và đờn ca tài tử.', 'Bến Tre', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(45, 1, 'Khu du lịch sinh thái Mỹ Khánh', 'mykhanh.jpg', NULL, 'Nơi lý tưởng để thư giãn cuối tuần với hồ bơi, vườn trái cây và dịch vụ nghỉ dưỡng.', 'Phong Điền, Cần Thơ', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(46, 1, 'Nghỉ dưỡng tại khu du lịch Tân Lộc', 'tanloc.jpg', NULL, 'Trải nghiệm nhà cổ và cuộc sống miền Tây xưa.', 'Thốt Nốt, Cần Thơ', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(47, 1, 'Homestay Cù Lao Tân Qui', 'tanqui.jpg', NULL, 'Nghỉ ngơi tại homestay giữa cù lao xanh mát và tham quan vườn cây trái.', 'Trà Vinh', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(48, 1, 'Khu nghỉ dưỡng Măng Đen', 'mangden.jpg', NULL, 'Không khí mát lạnh, hồ nước và rừng thông lý tưởng để nghỉ dưỡng.', 'Kon Tum', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(49, 2, 'Khám phá rừng tràm U Minh Hạ', 'uminhha.jpg', NULL, 'Trải nghiệm rừng ngập mặn nguyên sinh và hệ sinh thái đa dạng.', 'Cà Mau', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(50, 2, 'Tham quan rừng ngập mặn Năm Căn', 'namcan.jpg', NULL, 'Đi xuồng máy xuyên rừng và tìm hiểu hệ động thực vật rừng mặn.', 'Cà Mau', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(51, 2, 'Chèo xuồng ở Cồn Sơn', 'conson.jpg', NULL, 'Tìm hiểu làng bè nuôi cá và thưởng thức bánh dân gian.', 'Cần Thơ', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(52, 2, 'Khám phá cồn Chim', 'conchim.jpg', NULL, 'Đi xe đạp xuyên đồng lúa, bắt cá, làm bánh cùng người dân địa phương.', 'Trà Vinh', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(53, 2, 'Lặn bắt sò huyết ở Gành Hào', 'ganhhao.jpg', NULL, 'Trải nghiệm làm ngư dân và ăn hải sản tươi sống.', 'Bạc Liêu', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(54, 2, 'Khám phá núi Cấm', 'nuicam.jpg', NULL, 'Leo núi, tham quan chùa và chiêm ngưỡng tượng Phật lớn.', 'An Giang', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(55, 2, 'Trải nghiệm mùa nước nổi ở Đồng Tháp Mười', 'nuocnoi.jpg', NULL, 'Đi xuồng qua rừng tràm, bắt cá và ngắm hoa sen nở.', 'Đồng Tháp', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(56, 3, 'Tham quan chùa Dơi', 'chuadoi.jpg', NULL, 'Ngôi chùa Khmer cổ kính, nơi trú ngụ của hàng nghìn con dơi.', 'Sóc Trăng', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(57, 3, 'Lễ hội Nghinh Ông Cần Giờ', 'nghinhong.jpg', NULL, 'Lễ hội truyền thống tôn vinh nghề biển và cầu ngư may mắn.', 'TP.HCM', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(58, 3, 'Tham quan chùa Hang', 'chuahang.jpg', NULL, 'Ngôi chùa nằm bên bờ biển với tượng Quan Âm quay ra khơi.', 'Trà Vinh', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(59, 3, 'Khám phá Làng hoa Sa Đéc', 'langhoa.jpg', NULL, 'Làng nghề truyền thống với hàng ngàn loài hoa rực rỡ quanh năm.', 'Sa Đéc, Đồng Tháp', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(60, 3, 'Tham quan nhà Công tử Bạc Liêu', 'congtubaclieu.jpg', NULL, 'Ngôi biệt thự cổ phản ánh lối sống xa hoa một thời.', 'Bạc Liêu', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(61, 3, 'Lễ hội Ok Om Bok', 'okom.jpg', NULL, 'Lễ hội cúng trăng đặc sắc của người Khmer Nam Bộ.', 'Trà Vinh', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(62, 3, 'Tìm hiểu chợ nổi Ngã Năm', 'nganam.jpg', NULL, 'Chợ nổi tấp nập nơi giao thoa 5 con sông – nét văn hóa sông nước độc đáo.', 'Sóc Trăng', '2025-05-05 02:26:41', '2025-05-05 02:26:41', 0),
(63, 3, 'Trà Vinh xứ sở dừa sáp', 'hoaikiet.jpg', NULL, 'Trà Vinh xứ sở dừa sáp', 'Trà Vinh', '2025-05-05 07:19:59', '2025-05-05 07:19:59', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) DEFAULT 0,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`, `created_at`, `updated_at`, `deleted`) VALUES
(2, 'Trần Khánh Linh', 'khanhlinh.tran@gmail.com', '123456', 0, '2025-05-04 19:12:04', '2025-05-04 21:14:50', 1),
(3, 'Lê Gia Huy', 'giahuy.le@gmail.com', '123456', 0, '2025-05-04 19:12:04', '2025-05-04 19:37:18', 1),
(4, 'Phạm Thùy Dương', 'thuyduong.pham@gmail.com', '123456', 0, '2025-05-04 19:12:04', '2025-05-04 19:42:09', 1),
(5, 'Đỗ Minh Anh', 'minhanh.do@gmail.com', '123456', 0, '2025-05-04 19:12:04', '2025-05-04 19:32:58', 1),
(8, 'Lê Hoàng Anh', 'hoanganhle@gmail.com', 'anhhoangle', 0, '2025-05-05 00:08:22', '2025-05-05 01:05:25', 1),
(9, 'Phạm Ngọc Bích', 'bichpham@gmail.com', 'bichmatkhau', 0, '2025-05-05 00:08:22', '2025-05-05 00:56:24', 1),
(10, 'Đỗ Thanh Tùng', 'thanhtungdo@gmail.com', 'tungpass123', 0, '2025-05-05 00:08:22', '2025-05-05 00:14:42', 1),
(11, 'Võ Thiên Bảo', 'thienbao.vo@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(12, 'Ngô Hải Yến', 'haiyen.ngo@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(13, 'Đặng Quang Huy', 'quanghuy.dang@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(14, 'Bùi Minh Châu', 'minhchau.bui@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(15, 'Trịnh Ngọc Lan', 'ngoclan.trinh@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(16, 'Lý Quốc Hưng', 'quochung.ly@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(18, 'Hồ Anh Dũng', 'anhdung.ho@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(19, 'Phan Thị Kim Oanh', 'kimoanh.phan@gmail.com', '123456', 0, '2025-05-05 01:25:54', '2025-05-05 01:25:54', 0),
(21, 'Phạm Hoài Kiệt', 'phamkiet22114@gmail.com', '$2y$10$5VzRS3Zs9spiDuj7ZS7KP.YsbxnjB9Rw9A1dQj3GfX7f8HtAkjmgK', 0, '2025-05-05 10:20:53', '2025-05-05 10:20:53', 0),
(22, 'Admin', 'admin@gmail.com', '$2y$10$5VzRS3Zs9spiDuj7ZS7KP.YsbxnjB9Rw9A1dQj3GfX7f8HtAkjmgK', 1, '2025-05-05 10:49:53', '2025-05-05 10:50:40', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `detail_id` (`detail_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`detail_id`) REFERENCES `tours` (`id`);

--
-- Các ràng buộc cho bảng `tours`
--
ALTER TABLE `tours`
  ADD CONSTRAINT `tours_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
