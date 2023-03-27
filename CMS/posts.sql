-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 10:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_user` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_user`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(113, 48, 'PHP', 'Edwin Diaz', 'rico', '2017-01-30', 'image_5.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'php', '', 'published', 134),
(114, 48, 'Javascript', 'Miguel', '', '2015-07-24', 'image_4.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'published', 16),
(115, 48, 'Javascript', 'Edwin Diaz', '', '2015-07-24', 'image_4.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'published', 0),
(116, 48, 'Bootstrap', 'George', '', '2015-07-24', 'image_3.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'Bootstrap', '', 'published', 4),
(118, 48, 'Javascript', 'Edwin Diaz', '', '2015-07-24', 'image_4.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'published', 4),
(119, 48, 'Javascript', 'Miguel', 'suave', '2017-07-12', 'image_2.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'draft', 1),
(121, 48, 'PHP', 'Edwin Diaz', 'suave', '2017-07-12', 'image_2.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'php', '', 'draft', 0),
(122, 48, 'Javascript', 'Miguel', 'rico', '2017-01-30', 'image_1.jpg', '<p style=\"text-align: justify; line-height: 14px; margin: 0px 0px 14px; padding: 0px; font-family: Arial, Helvetica, sans;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'draft', 0),
(135, 48, 'Javascript', 'Edwin Diaz', '', '2016-12-10', 'lambo_1.jpg', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fermentum fermentum pretium. Ut nec purus at est consequat pretium vitae at tortor. Morbi pulvinar lacinia arcu, non elementum leo commodo id. Mauris congue volutpat feugiat. Praesent quis ligula vel neque consectetur mollis. Mauris a ipsum a elit pharetra sodales vitae non diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae diam in diam malesuada gravida a sit amet arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nunc et urna eu justo ullamcorper tempus.</strong></p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>&nbsp;</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>=</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\\\\\\\\\r\\\\\\\\\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\\\\\r\\\\\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>\\\\r\\\\n</p>\r\n<p>\\r\\n</p>\r\n<p>&nbsp;</p>', 'javascript', '', 'draft', 72);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
