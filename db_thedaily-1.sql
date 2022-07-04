-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 04:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_thedaily`
--

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int(10) UNSIGNED NOT NULL,
  `hoten` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `hoten`, `email`, `matkhau`) VALUES
(1, 'tuananh', 'tuananh@gmail.com', '123'),
(2, '1951060523', 'tuananh1@gmail.com', '1951060523'),
(3, '1951060523', 'tuananh2@gmail.com', '1951060523'),
(4, '1951060523', 'tuanan3@gmail.com', '1951060523'),
(5, '1951060523', 'tuanan4@gmail.com', '1951060523'),
(6, '1951060523', 'tuanan123h@gmail.com', '1951060523'),
(9, '1951060523', 'tuanh12a12001@gmail.com', '1951060523'),
(10, '1', 'tuananh123@gmail.com', '1951060523'),
(11, '1951060523', 'tua23nh12a12001@gmail.com', '19510605231'),
(12, 'Nguyễn Phương', 'nguyenphuong@gmail.com', '123456789'),
(13, 'Nguyễn Đông', 'nguyendong@gmail.com', '123456789'),
(14, 'daocho', 'daocho@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(150) NOT NULL,
  `soluong` int(10) UNSIGNED NOT NULL,
  `giaban` float NOT NULL,
  `mota` varchar(255) NOT NULL,
  `anhsanpham` varchar(500) NOT NULL,
  `sodienthoailienhe` varchar(15) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `id_nguoidung` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `soluong`, `giaban`, `mota`, `anhsanpham`, `sodienthoailienhe`, `diachi`, `id_nguoidung`) VALUES
(17, 'Đèn chùm cũ', 2, 200000, 'Thanh lý đèn chùm xuất sứ pháp, chất liệu sứ, đã sử dụng được 3 tháng vẫn còn sử dụng rất tốt', 'z3238395492160_1b02f09fe20a15e34e0182a6b780e2f8 (1).jpg', '0963002876', 'Hà Nội', 1),
(18, 'TAI NGHE KHÔNG D Y', 3, 650000, 'ai nghe không dây sony WI-C400 đồ được tặng nên ít sử dụng. Còn nguyên hộp, và các đệm cao su nhét tai thay thế còn mới nguyên chưa thay.', 'z3238395491246_c2f75aa0fdd93fa62a38b6fe4ba8b5e9.jpg', '0379452201', 'Hưng yên', 1),
(19, 'Loa Bluetooth JBL PLL5  ', 1, 280000, '- Công suất: 20W RMS - Tần số: 65Hz- 20kHz - Độ nhạy >80dB - Kháng nước chuẩn IPX7 - Công nghệ loại bỏ tiếng vang SoundClear Echo và lọc tiếng ồn', 'z3238395491868_2074211e6f153434893f9c6aadacb833.jpg', '090763926', 'Đà nẵng', 1),
(20, 'Áo len cotton ', 1, 250000, 'Chị mình mua đi công tác và du lịch ở xứ lạnh nên ít dùng, cần pass lại cho bạn nào thích. Áo này hot 1 thời, của hãng Canifa, hình như bán theo mùa nên trước đây web có đăng mà giờ tìm ko thấy. Áo này mua mới 500-600k, cotton len cầm nặng tay chứ ko nhẹ ', 'z3238395492177_ae123d902345759ccf6340d7987c3ebd.jpg', '0936524271', 'Hải Phòng', 1),
(21, 'Gấu bông', 2, 100000, 'Hiện tại đang cần pass 1 vài gấu bông mua nhưng không sử dụng nhiều nữa. Giá học sinh, có fix cho bạn nào nhanh gọn lẹ. Chất liệu mềm mịn ôm rất thích', 'z3238395478813_976f1ebf84eb221241159d145730794c.jpg', '0947732482', 'Hưng Yên', 1),
(22, 'Thanh lý đầm tiệc', 1, 199000, 'Chất liệu thoáng mát, thiết kế đơn giản phù hợp cho những ai ko thích quá cầu kỳ. Mình cao 1m54, nặng 48-50kg, nên đồ mình thanh lý cho các bạn có thông số tương đương như mình nhé. Giá mình mua mới là 600k, hàng shop thiết kế nên ko sợ đụng hàng, đã sử d', 'z3238395473555_ea4f57dc121d8d99a4a573a2a76426b2.jpg', '0947732482', 'Quảng Ngãi', 1),
(23, 'Thanh lý ghế cafe', 1, 500000, 'Chất liệu: Nỉ và gỗ sồi tự nhiên. Kiểu dáng: Thanh mảnh, gọn gàng, chắc chắn. Màu sắc: Ghi xám. Tình trạng sản phẩm: Mới 99% sử dụng rất ít. Sản phẩm không lỗi.', '273965232_940592056622821_1882283973949854683_n.png', '033235443', 'TP Hà Nội', 1),
(24, 'Thanh lý máy giặt ', 1, 4999000, 'Máy giặt electrolux 9kg đáp ứng tốt nhu cầu giặt giũ của gia đình trên 6 thành viên, Máy với tông màu trắng trung tính, thuộc kiểu máy giặt cửa trước, mang phong cách đẳng cấp châu  u, không chỉ thể hiện được vẻ đẹp sang trọng mà còn hứa hẹn sẽ làm cho ng', '274660116_649636083031472_6927422097673434634_n.png', '033232332', 'TP Hải Phòng', 1),
(25, 'BMW R1250 GSA 2020', 1, 150000000, 'Để đáp ứng và thỏa niềm đam mê cho những khách hàng nào mong muốn sở hữu một phương tiện mà điều kiện kinh tế thu nhập thấp. BMW R1250 GSA đang bán chạy nhất hiện nay, nhập khẩu từ Campuchia, còn mới 99% Trở Lên, xe nguyên bản (Bao giấy tờ đi đường).', 'z3238462401620_ae797a4a3d29fd2d09fcab3c07fd9e2b.jpg', '0931623297', 'TP Hà Nội', 1),
(26, 'Surface Laptop Go ', 1, 12000000, 'Surface Laptop Go là một phiên bản Surface Laptop 3 thu nhỏ. Nó vẫn được làm bằng nhôm các màu Ice Blue, Sandstone hay Platinum, đồng thời tích hợp các cổng tương tự như Surface Connect, USB-C và USB-A', 'z3238462355181_91b91bb5ec7e5ea304747c7bdd511e4b.jpg', '0800100876', 'TP HCM', 1),
(27, 'SH125i Mầu Tím Than', 1, 77000000, 'Cần tiền mua ô tô nên mình bán xe Honda SH125 Cbs của vợ . Xe mầu xanh thím than, chính chủ. Xe mình dán nilon từ lúc mới mua nên xe còn rất mới. Xe còn Nguyên cả tem sườn thể thao chính hãng từ lúc mới mua, ai mua về bóc nilon ra thì như xe mới trong cửa', 'z3238462401617_19a6fd9856223b9f41b96a6b9aa46f6e.jpg', '0948532953', 'TP Hà Nội', 1),
(28, 'Điện thoại 67 gold ', 1, 2600000, 'Điện thoại luôn là món đồ được rất nhiều người quan tâm, chính vì thế để đáp ứng được người tiêu dùng lựa chọn và sử dụng những chiếc điện thoại tốt nhất, uy tín nhất và chất lượng nhất. Do đó chúng tôi sẽ giới thiệu đến bạn chiếc điện thoại Nokia 6700 cl', 'z3238462383123_bfb151b8c38630a1894d138cd4a61d6c.jpg', '0901 247 247', 'Hòa Bình', 1),
(29, 'DirtyCoins Big', 1, 650000, '-Chất liệu: 100% polyester. -Khóa kéo dọc thân. - Cổ đứng. - Dáng oversize. - Bề mặt chống thấm nước - Có túi hai bên. - Bo gân cổ tay và gấu áo', '259252202_721822132528872_1827921297639885871_n.png', '0947732482', 'TP Hà Nội', 1),
(30, 'Quạt điều hòa GPAC', 1, 990000, 'Quạt điều hòa GPAC-N22R Goldsun hay còn gọi là máy làm mát không khí  được thiết kế hiện đại, kiểu dáng thời trang, màu sắc trẻ trung sang trọng, tô điểm không gian nhà bạn. Máy với cơ chế làm mát bằng hơi nước, hạ nhiệt độ phòng nhanh chóng xuống ngay từ', '274475712_218498967135347_9045184617071138119_n.png', '0332323221', 'TP Vĩnh Phúc', 1),
(31, 'Bình nóng lạnh 32l', 1, 800000, 'Hiện nay, duy nhất trên thị trường chỉ có bình nước nóng KANGAROO có ruột bình được tráng bằng một lớp kim cương nhân tạo chống ăn mòn, bền vĩnh cửu và an toàn tuyệt đối. Thanh nhiệt của bình nóng lạnh Kangaroo Kg60 sử dụng Inox 816, bảo hành vĩnh viễn, c', '274651866_2020316161461187_8791023390113684874_n.png', '0379452201', 'Hà Tây', 1),
(32, 'Giường gấp', 1, 4999000, 'Giường gấp đa năng thông minh là sản phẩm nội thất hữu ích, đặc biết đối với những gia đình có diện tích phòng ngủ nhỏ. Không chỉ giúp bạn giải phóng không gian mà còn tích hợp nhiều tính năng vượt trội để đảm bảo cuộc sống ', '274581691_437599514786845_5290247151847155857_n.png', '0379452201', 'TP Hà Nội ', 1),
(33, 'Nikon D5100+Tamron AF', 1, 3000000, 'Máy này em vẫn chụp bình thường, ngoại hình khá, ống kính mốc, em mua máy này vì tưởng máy kia chết. Màn hình máy bị gạch đen nhưng không ảnh hưởng đến ảnh xuất ra. Ống kính em mang đi vệ sinh nhưng thợ bảo nếu vệ sinh thì rất tốn mà lại không hiệu quả nê', 'z3238462383130_e95397443fa949670b21184a83c7dc24.jpg', '0321311312', 'TP Hà Nội', 1),
(34, 'Máy chơi game PS4 Pro', 1, 6700000, 'Mình có con ps4 pro mã CUH 7218B, bản 1 Tb do không có thời gian chơi, cần bán lại cho anh em đam mê game Tình trang em nó: - Máy zin nguyên tem Void Zin chưa bung mở sửa chữa - Vừa hết bảo hành tháng 1 - Máy kèm 1 tay zin theo máy - Có nhiều game: mortal', 'z3238462383126_4369345a16237622522bd67648d10ff4.jpg', '0800100876', 'TP HCM', 1),
(35, 'Marhen.J Túi đeo vai', 1, 2980000, 'Marhen.J là thương hiệu túi xách đến từ Hàn Quốc với phong cách đường phố thành thị, nơi sở hữu nhiều mẫu thiết kế hiện đại và tinh tế giúp bạn tự tin tỏa sáng mỗi ngày. Túi có ngăn để chai nước, ngăn để điện thoại bên ngoài.', '259797357_358962939277554_6321253586259732404_n.png', '0379452201', 'TP Hà Nội', 1),
(36, 'Đầm hoa size M', 1, 89000, 'Đầm hoa nhí đỏ Chất lượng tốt Miễn phí vận chuyển', '273758701_347755193930361_3064754635798800991_n.png', '0379452201', 'Hà Tây', 1),
(37, 'Đầm dáng ôm', 1, 89000, 'Size M Miễn phí vận chuyển toàn quốc', '273939315_695608341885417_7027439778597909883_n.png', '0947732482', 'Hưng Yên', 1),
(38, 'KỆ SIÊU THỊ GIá Rẻ', 1, 850000, 'Nhà hàng, cửa tiệm, quán ăn,…của bạn đang rất cần 1 chiếc kệ để đồ đạc thật gọn gàng, ngăn nắp và tiện lợi, đưng ngại ngần nhấc máy gọi cho chúng tôi.', '274912265_495107665551489_4179740729334180565_n.png', '033232323', 'TP HCM ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`),
  ADD KEY `id_nguoidung` (`id_nguoidung`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `id_nguoidung` FOREIGN KEY (`id_nguoidung`) REFERENCES `nguoidung` (`id_nguoidung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
