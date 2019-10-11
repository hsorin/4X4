-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 30, 2018 at 09:59 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_trips`
--

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
CREATE TABLE IF NOT EXISTS `trips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_name` varchar(60) NOT NULL,
  `trip_date` date NOT NULL,
  `trip_points` text NOT NULL,
  `trip_photo` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_name`, `trip_date`, `trip_points`, `trip_photo`) VALUES
(1, 'משדה בוקר לאשלים', '2017-10-21', 'מסלול אתגרי הכולל את מעלה בוקר אבל בכיוון הפוך. מסלול מדברי יפה אבל עדיין עדיף הכוון המקורי. חידוש מהפכני צירוף הרחפן של נועם', 'https://photos.app.goo.gl/Nf2VeB2ggUZ3uwxV2'),
(2, 'מאנדרטת הצנחנים לחולות פלמחים', '2017-11-25', 'מסלול במרכז הגוש האורבני של הארץ. לאורך נחל גמליאל ונחל שורק עם הרבה משחקי בוץ ואפילו שקיעות', 'https://photos.app.goo.gl/9oDmugc3bnAawZRr2'),
(3, 'בית שאן גילבוע', '2017-01-15', 'חוגלה, תליםת תאונה בגלבוע', 'https://goo.gl/photos/DSYuoET1RFkJtveM7'),
(5, ' רמת חובב לנחל באר-שבע', '2017-02-05', 'נחלים דרומות לבאר שבע', 'https://goo.gl/photos/boyDKUx2jXJ53gMk7'),
(6, 'רמות מנשה', '2017-03-04', 'חגיגת פריחה', 'https://goo.gl/photos/dMYBryhz7ktkqaDv6'),
(7, 'פארק יער בן-שמן', '2017-03-28', '\"יסיבוב ממצוקי שילת תצפיות ביער מנשה וסיום ביער לח', 'https://goo.gl/photos/bch4g8kEnfyr8B22A'),
(8, 'גליל עליון מערבי ממערת קשת לחניתה ועוד', '2017-12-16', 'מסלול מקסים ביופיו עם נופים מרהיבים. כולל את מעלה הצינור שהרוב מעדיפים לדלג על חלקו או כולו. החסרון הגדול, הפקקים בדרך הביתה', 'https://photos.app.goo.gl/TVBstRrftP5iKosj2'),
(9, 'בקעת הירדן', '2018-01-13', 'כל ירידה לבקעת הירדן מזכירה לנו כמה יפה חבל ארץ זה. התחלנו בתצפית למזר סינט ג\'יורג\'י לפני הכניסה למצפה יריחו. דלגנו לשמורת הטבע נחל מכוך וחצינו את נחל מכוך. משם עלינו את העליה היפה מהבקעה לכוכב השחר. תמונות נוספות מזוג שהצטרף אלינו יש ', 'https://photos.app.goo.gl/MHmiD5uv0FObC4AV2'),
(10, 'נחל פרס', '2018-02-13', '>טיול במסלול של נחל פרס רק הפוך, בירידה. התחלנו בבקעת צבאיים והעליות בגבעות הר קומות. ירידה במקביל למשואה הפוספטים לגבי פרס היפים. יציאה דרך הר יהל לערד עם תצפיות נוף.', 'https://photos.app.goo.gl/1Aqoo1HfxWC6MKMg2'),
(11, 'טיול בסביבת נחל צין', '2018-03-24', '>ביום קריר עם רוחות מקפיאים התחלנו דרך נחל חצץ. משם דרומה דרך נקודות האכלת נשרים לתוך נחל צין. עצירות בפינות חמד של עין זיק ועין זרחן. דורון האמיץ היחידי שנכנס למים.', 'https://photos.app.goo.gl/OrEtHKmsiZcIcexF2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
