-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table atldb.employee
DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `user_id` varchar(15) NOT NULL,
  `password` varchar(64) DEFAULT NULL,
  `create_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `full_name` varchar(64) DEFAULT NULL,
  `job` varchar(32) DEFAULT NULL,
  `email` varchar(32) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `authority` tinyint(4) DEFAULT '2',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table atldb.employee: ~2 rows (approximately)
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`user_id`, `password`, `create_date`, `last_login`, `full_name`, `job`, `email`, `phone`, `authority`) VALUES
	('admin', 'admin', '2018-09-11 21:52:30', '2018-09-11 21:52:31', 'Administrator', 'Admin', 'admin@atl.com', '1234', 1),
	('arunee', '1010', '2018-09-11 21:53:13', '2018-09-12 00:25:31', 'อรุณี เมธาสิงห์', '	เจ้าหน้าที่วิเคราะห์และทดสอบ', '	Ar_boombim@hotmail.com', '08-0730-6509', 2);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;

-- Dumping structure for table atldb.menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(30) DEFAULT NULL,
  `menu_text` varchar(60) DEFAULT NULL,
  `menu_link` varchar(60) DEFAULT NULL,
  `always_show` bit(1) DEFAULT b'1',
  `show_on_session` bit(1) DEFAULT b'0',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table atldb.menu: ~12 rows (approximately)
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`menu_id`, `group_name`, `menu_text`, `menu_link`, `always_show`, `show_on_session`) VALUES
	(1, 'main', 'หน้าแรก', 'page/main_page', b'1', b'0'),
	(2, 'main', 'เกี่ยวกับองค์กร', 'page/about', b'1', b'0'),
	(3, 'main', 'บุคลากร', 'page/staff', b'1', b'0'),
	(4, 'main', 'ขั้นตอนการให้บริการ', 'page/service_step', b'1', b'0'),
	(5, 'main', 'อัตราการให้บริการ', 'page/rate', b'1', b'0'),
	(6, 'main', 'วิธีการชำระเงิน', 'page/payment', b'1', b'0'),
	(7, 'main', 'ติดต่อเรา', 'page/contact_us', b'1', b'0'),
	(8, 'main', 'เข้าสู่ระบบ', 'page/staff_login', b'0', b'0'),
	(9, 'staff', 'หน้าแรก', 'staff/main', b'1', b'0'),
	(10, 'staff', 'คำขอรับบริการ', 'staff/service', b'1', b'0'),
	(11, 'staff', 'ออกจากระบบ', 'logout', b'0', b'1'),
	(12, 'main', 'ออกจากระบบ', 'logout', b'0', b'1');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for procedure atldb.sp_getMenu
DROP PROCEDURE IF EXISTS `sp_getMenu`;
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_getMenu`(
	IN `p_groupName` VARCHAR(50),
	IN `p_login` BIT
)
BEGIN 
 IF p_login = 1 THEN
  SELECT * FROM menu WHERE  menu.group_name = p_groupName AND ( menu.always_show = 1 OR menu.show_on_session = 1)  ;
 ELSE
  SELECT * FROM menu WHERE  menu.group_name = p_groupName AND ( menu.always_show = 1 OR menu.show_on_session = 0)  ;
 END IF;
END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
