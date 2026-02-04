
--
-- Database: `youtube`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_submission`
--

DROP TABLE IF EXISTS `form_submission`;
CREATE TABLE IF NOT EXISTS `form_submission` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

