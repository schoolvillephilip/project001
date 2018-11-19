-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 07:45 PM
-- Server version: 5.7.11
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onitshamarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(55) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL COMMENT 'Refrence Id from Brand Table',
  `model` varchar(255) NOT NULL,
  `main_colour` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `youtube_id` varchar(255) NOT NULL,
  `in_the_box` text NOT NULL,
  `highlights` text NOT NULL,
  `product_line` varchar(255) NOT NULL,
  `colour_family` varchar(255) NOT NULL,
  `main_material` varchar(255) NOT NULL,
  `dimensions` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `attributes` text NOT NULL,
  `product_warranty` text NOT NULL,
  `warranty_type` varchar(255) NOT NULL,
  `warranty_address` text NOT NULL,
  `certifications` varchar(255) NOT NULL,
  `product_status` varchar(255) NOT NULL,
  `report` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `seller_id`, `category_id`, `sku`, `product_name`, `brand_name`, `model`, `main_colour`, `product_description`, `youtube_id`, `in_the_box`, `highlights`, `product_line`, `colour_family`, `main_material`, `dimensions`, `weight`, `attributes`, `product_warranty`, `warranty_type`, `warranty_address`, `certifications`, `product_status`, `report`, `views`, `created_on`) VALUES
(1, 1, 6, 'X5PJUH', 'Samsung Galaxy S9 - BLACK (Dual Sim) - Official Warranty', 'Samsung', 'S9', 'Black', 'Display: 5.8&rdquo;, Quad HD+ sAMOLED\r\nSingle Sim Option\r\nCamera Main: Super Speed Dual Pixel 12 MP OIS (F1.5/F2.4)\r\nCamera Front: 8MP AF (F1.7)\r\nProcessor: 10nm, Octa-core (2.7GHz Quad + 1.7GHz Quad)\r\nMemory: 4GB RAM and 64GB Internal storage, External Memory: MicroSD&trade; up to 400 GB\r\nBattery: 3000mAh\r\nSecurity: Intelligent Scan (Iris + Face), Fingerprint Scanner, Water and Dust Resistance: IP68 (1.5 m &amp; 30 min)\r\n\r\n', '', '', '', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'silicon', '1260', '300', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#039;Content here, content here&#039;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#039;lorem ipsum&#039; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\n', '["Repair by vendor"]', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n', '["Eco Friendly","FSC - Forest Stewardship Council"]', 'approved', 0, 45, '2018-10-02 11:34:56'),
(2, 1, 6, 'BYZZSP', 'Samsung Galaxy J6 - Purple', 'Samsung', 'samsung j6', 'Purple', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"3000mAh ","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"5.9 inches","Colour":"Black"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["Repair by vendor"]', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'approved', 0, 7, '2018-10-03 10:46:58'),
(3, 1, 6, '31WUJE', 'Nokia - 2 - 5&quot; - 1GB RAM, 8GB ROM - Android 7.0 8MP + 5MP - White', 'Nokia', 'Nokia2', 'Grey', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', 'Fouani Nigeria, Trendy Woman Ltd, SEOLAK', '["Green"]', 'plume', '1260', '1000', '{"Sim-Type":"Single SIM","OS-Type":"Android OS","Battery-Capacity":"5000mAh","Internal-Memory":"128 MB","Sceen-Size":"6.4 inches","Colour":"Yellow"}', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#039;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#039;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '["FSC - Forest Stewardship Council","Organic"]', 'approved', 0, 3, '2018-10-03 11:28:34'),
(4, 3, 6, '871436', 'JY', 'Android', '8S', 'black', 'Jy Phones are excelllent and sleek phones for your needs. Get a color that you love ranging from red, black, green and pink for ladies. Start buying today', '', '1 phone\r\n1 charger\r\n1 screen guard\r\n1 ear phone\r\n1 power bank\r\n', 'Jy Phones are excelllent and sleek phones for your needs. Get a color that you love', 'Jay Technology', '["green","black","red","pink"]', 'metal', '12 x 3 x 90', '20', '{"Sim-Type":"Nano SIM","OS-Type":"Android OS","Battery-Capacity":"4000mAh","Internal-Memory":"64 GB","RAM":"4 GB","Sceen-Size":"5.2 inches","Colour":"Black"}', 'This product contains a one year warranty', '["Service Center","Repair by vendor","Replacement by vendor"]', 'Service Center Address: 20b Caro Road, Ikeja. Lagos | Repair by Vendor Address: 5 Paris Street, Yaba. Lagos.', '["AFRDI Leather","ASTM Certified","Eco Friendly"]', 'approved', 0, 306, '2018-10-30 10:14:59'),
(5, 3, 6, '921784', 'Huawei P20 Lite ANE-LX3 32GB + 4GB Dual SIM LTE Factory Unlocked Smartphone (Klein Blue)', 'others', 'P20 Lite', 'black', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n\r\nBody &amp; Soul\r\nThe HUAWEI P20 lite takes colour to a higher level. Delve deeper into Klein Blue, a radiant shade that incorporates a nanometer-level light dazzle texture. Available too in deepest Midnight Black to contrast against the vibrancy of the Full HD screen, refined classic Platinum Gold and Sakura Pink with its rich pearlescent tone.\r\n\r\nSee is Believing\r\nThe HUAWEI P20 lite features a 2280 x 1080 FHD+ screen with 96% NTSC super high-colour gamut. That means everything you see on this screen is as rich and vibrant and detailed as it can be, from your own photographs to the latest boxset.\r\n\r\nFront and Centre\r\nThe HUAWEI P20 lite has a new higher definition, wider angle, front camera. 16 megapixels with a pixel size of 1.0 &mu;m and a FOV wide angle of 78&deg;, this camera is made for snapping friends, family and social-media-worthy selfies. With a F2.0 wide aperture and a 3D retouching feature that uses intelligent recognition and facial mapping to adjust lighting and shadow, you can count on terrific portraits and close-ups too.\r\n\r\nDual-Lens Camera\r\nThe HUAWEI P20 lite&rsquo;s dual-lens rear camera ticks all the boxes and then some. The state-of-the-art 16 MP lens with a pixel size of 1.12 &mu;m and F2.2 aperture is designed to capture more light and read depth perception, allowing you to take sharp, swift snaps when you need them. Partnered with a 2 MP professional Bokeh lens &ndash; as well as 5P + 3P lenses for the subject and background &ndash; it takes stunning shots while bringing some real definition to the mix.', '', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n\r\nBody &amp; Soul\r\nThe HUAWEI P20 lite takes colour to a higher level. Delve deeper into Klein Blue, a radiant shade that incorporates a nanometer-level light dazzle texture. Available too in deepest Midnight Black to contrast against the vibrancy of the Full HD screen, refined classic Platinum Gold and Sakura Pink with its rich pearlescent tone.\r\n\r\nSee is Believing\r\nThe HUAWEI P20 lite features a 2280 x 1080 FHD+ screen with 96% NTSC super high-colour gamut. That means everything you see on this screen is as rich and vibrant and detailed as it can be, from your own photographs to the latest boxset.\r\n\r\nFront and Centre\r\nThe HUAWEI P20 lite has a new higher definition, wider angle, front camera. 16 megapixels with a pixel size of 1.0 &mu;m and a FOV wide angle of 78&deg;, this camera is made for snapping friends, family and social-media-worthy selfies. With a F2.0 wide aperture and a 3D retouching feature that uses intelligent recognition and facial mapping to adjust lighting and shadow, you can count on terrific portraits and close-ups too.\r\n\r\nDual-Lens Camera\r\nThe HUAWEI P20 lite&rsquo;s dual-lens rear camera ticks all the boxes and then some. The state-of-the-art 16 MP lens with a pixel size of 1.12 &mu;m and F2.2 aperture is designed to capture more light and read depth perception, allowing you to take sharp, swift snaps when you need them. Partnered with a 2 MP professional Bokeh lens &ndash; as well as 5P + 3P lenses for the subject and background &ndash; it takes stunning shots while bringing some real definition to the mix.', 'The Best Just Got Better\r\nLose yourself in your screen with new generation HUAWEI FullView Display. Designed for life on the go with no compromises, the HUAWEI P20 lite sports a sleek compact frame that&rsquo;s almost entirely dedicated to its 5.84-inch Full HD screen.re level, as it comes with the latest Android 8.0 Oreo.\r\n', 'Mobiles International LLC', '["green","yellow","black","pink","purple"]', 'leather', '5.8 x 2.8 x 0.3 inches', '12.3 ounces', '{"Sim-Type":"Dual SIM","OS-Type":"Android OS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"Above 256 GB","RAM":"1.5 GB","Sceen-Size":"6.1 inches","Colour":"Red"}', 'For warranty information about this product, please click here', '["Repair by vendor"]', 'M&B', '["ASTM Certified","Eco Friendly"]', 'approved', 0, 0, '2018-11-08 01:27:51'),
(6, 3, 6, '192457', 'Apple iPhone 8 4.7&quot;, 64 GB, Fully Unlocked, Gold', 'others', 'A1863-64-Gold', 'black', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n12MP camera with Optical image stabilization and Six?element lens\r\n4K video recording at 24 fps, 30 fps, or 60 fps\r\nAll new glass design with A color?matched, aerospace?grade aluminum band', '', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n12MP camera with Optical image stabilization and Six?element lens\r\n4K video recording at 24 fps, 30 fps, or 60 fps\r\nAll new glass design with A color?matched, aerospace?grade aluminum band', '4.7-Inch (diagonal) widescreen LCD multi-touch display with IPS technology and Retina HD display\r\nSplash, water, and dust resistant\r\n', 'MSFTStore', '["yellow","black","red"]', 'metal', '5.5 x 0.3 x 2.6', '5.3', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"3450mAh","Internal-Memory":"4 GB","RAM":"6 GB","Sceen-Size":"5.7 inches","Colour":"Black"}', ' For warranty information about this product, please click here', '["Service Center","Repair by vendor","Replacement by vendor"]', 'MSFT Drive', '["AFRDI Leather","AFRDI - Australian Furnishing Research & Development Institute","ASTM Certified","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade","GECA Good Environmental Choice Australia","Organic"]', 'approved', 0, 0, '2018-11-08 10:57:34'),
(7, 3, 6, '354186', 'Huawei Nova 3i 4GB+128GB 6.3 Inch Android 8.1 Kirin 710 Octa Core 4G Smartphone - Purple (1 Unit Per Customer)', 'others', '3i', 'black', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.\r\n4. Photography Modes: AI beauty, large aperture, painter mode, dynamic photos, professional mode, video, 3D dynamic panorama, HDR, night scene, panoramic photo, streamer shutter (include busy traffic, light painting graffiti, silk water, star track), time-lapse photography, slow motion, continuous shooting, filter, beauty video, timed photo, voice-activated photo, smile capture, turn off screen flash snapshot, watermark, document correction.\r\n5. Built in 3340mAh battery, the battery will make the phone last for several days in normal use.\r\n6. Android 8.1 operation system, EMUI 8.2 interface.', '', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.', 'Feature\r\n1. Kirin 710 Octa Core, 4 x Cortex A73 2.2GHz + 4 x Cortex A53 1.7GHz CPU, combine with 4GB RAM + 128GB ROM, high performance, run fast and fluently.\r\n2. 6.3 inch full capacitive screen, 409PPI 2340x1080 pixel screen, multi-touch, high clear and vivid color.\r\n3. Equipped with 4 cameras, 216MP RGB + 2MP RGB AF dual rear cameras and 24.0MP RGB +2.0MP RGB FF dual front cameras. You can capture wonderful moment with ease, and take high quality pictures.', 'HSP International Company', '["green","yellow","black","red","pink","purple"]', 'metal', '157.6*75.2*7.6', '169', '{"Sim-Type":"Nano SIM","OS-Type":"Android OS","Battery-Capacity":"4000mAh","Internal-Memory":"256 GB","RAM":"6 GB","Sceen-Size":"6.1 inches","Colour":"Blue"}', 'Insurance against screen (30% of the cost) and liquid damage (40% of the cost)', '["Service Center","Repair by vendor","Replacement by vendor"]', 'HSP International Company', '["AFRDI Leather","AFRDI - Australian Furnishing Research & Development Institute","ASTM Certified","Australian Made","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade","GECA Good Environmental Choice Australia","Organic","PEFC -Programme for t', 'approved', 0, 0, '2018-11-09 09:08:27'),
(8, 3, 4, '635492', 'Apple IPhone X 5.8-Inches Super AMOLED (3GB RAM, 256GB ROM) IOS 11.1.1, (12MP + 12MP) + 7MP 4G LTE Smartphone - Silver + Tempered Glass', 'others', 'Iphone X', 'black', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', '', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', 'A groundbreaking iOS for an iPhone that&#039;s truly breathtaking. \r\n\r\n \r\n\r\nSpecifications\r\n\r\nCapacity\r\n\r\n GB\r\n\r\nSize &amp; Weight\r\n\r\nHeight: 5.65 inches (143.6 mm)\r\nWidth: 2.79 inches (70.9 mm)\r\nDepth: 0.30 inch (7.7 mm)\r\nWeight: 6.14 ounces (174 grams)\r\n', 'DALINESHOP4PHONE', '["yellow","black","red","pink"]', 'metal', '167.6*65.2*7.6', '150', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"Above 256 GB","RAM":"16 GB","Sceen-Size":"6.1 inches","Colour":"Black"}', 'Service is provided by AXA Mansard Insurance\r\nLimited to repair/replacements of 1 screen AND 1 liquid damage in 365 days', '["Repair by vendor","Replacement by vendor"]', '20b Caro Road, Ikeja. Lagos ', '["ASTM Certified","Australian Made","Eco Friendly","FSC - Forest Stewardship Council","Fair Trade"]', 'approved', 0, 0, '2018-11-09 09:16:45'),
(9, 3, 4, '597361', 'Iphone 8', 'Apple', 'Iphone 8', 'black', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', 'Iphone Widgets Technology', '["green","black","red"]', 'metal', '12 x 3 x 90', '120', '{"Sim-Type":"Nano SIM","OS-Type":"iOS","Battery-Capacity":"5000mAh - 8000mAh","Internal-Memory":"128 GB","Sceen-Size":"6.1 inches","Colour":"Black"}', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '["Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi delectus, doloribus facere vel velit vero. Accusantium ad blanditiis facere harum iste! Corporis dignissimos eum exercitationem labore molestiae numquam tempora.', '["AFRDI Leather","ASTM Certified"]', 'approved', 0, 0, '2018-11-12 17:36:31'),
(10, 3, 4, '918237', 'jsjsjsjs', 'Apple', 'jjh', 'red', 'jh', '', '', '', 'ouu', '["pink"]', 'synthetic', 'jji', '774', '[]', '', '', '', '', 'approved', 0, 0, '2018-11-13 22:55:02'),
(11, 3, 8, '286539', 'Apple Watch', 'Apple', 'Miranda', 'black', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', 'Miranda', '["black","red"]', 'metal', '12 x 32 x10', '20', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '["Service Center","Repair by vendor","Replacement by vendor"]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consectetur eius eveniet illo quas quasi quia soluta tempora? Doloremque ducimus eos impedit porro quia ratione sed soluta voluptas! A, libero?', '["Eco Friendly","Fair Trade","GECA Good Environmental Choice Australia"]', 'approved', 0, 0, '2018-11-14 10:27:31'),
(12, 3, 6, '481653', 'Hisense 32-Inch 32N2176H Full HD LED TV', 'others', 'Hicense', 'black', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', '', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', '12 Months Warranty\r\nScreen Size: 32&quot; \r\nScreen Type: LED\r\nScreen Resolution: Full HD 1920 x 1080 pixels\r\nConnectivity: HDMI: 2, USB: Yes x2, AV Input (Audio &amp; Video)', 'PhilTech Technologies', '["black"]', 'metal', '13 X 45 X 30', '1000', '[]', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '["Eco Friendly"]', 'approved', 0, 0, '2018-11-17 21:04:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `brand_name_2` (`brand_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name` (`product_name`);
ALTER TABLE `products` ADD FULLTEXT KEY `product_name_2` (`product_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
