-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2021 at 08:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technicax`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_resume`
--

CREATE TABLE `job_resume` (
  `id` int(222) NOT NULL,
  `career_id` varchar(222) NOT NULL,
  `job_id` varchar(222) NOT NULL,
  `job_title` varchar(222) NOT NULL,
  `ftname` varchar(222) NOT NULL,
  `ltname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `country` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `resume` varchar(222) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_resume`
--

INSERT INTO `job_resume` (`id`, `career_id`, `job_id`, `job_title`, `ftname`, `ltname`, `email`, `phone`, `country`, `state`, `resume`, `experience`, `created_at`) VALUES
(1, '2', 'TCI2021001', 'Andriod Developer', 'Ram', 'kumar', 'mallikumar1998@gmail.com', '8787878787', 'India', 'tamilnadu', 'Ramkumar-TCI2021001-19155.pdf', '', '2021-01-07 03:34:28'),
(4, '3', 'TCX22021002', 'PHP Developer', 'Arun', 'Kumar', 'aryn@gmail.com', '8787872222', 'India', 'tamilnadu', 'ArunKumar-TCX22021002-71083.pdf', '', '2021-01-07 04:51:37'),
(5, '2', 'TCI2021001', 'Andriod Developer', 'Vignesh', 'S', 'vicky@technicax.com', '8787878787', 'USA', 'LS', 'VigneshS-TCI2021001-67829.pdf', '', '2021-01-07 05:11:08'),
(6, '', '', 'Sales executive', 'Varun', 'kumar', 'kioi@gil.com', '8787872222', 'USA', 'London', 'Varunkumar-Sales executive-66371.pdf', '1', '2021-01-07 05:25:02'),
(7, '2', 'TCI2021001', 'Andriod Developer', 'Vignesh ', 'Sundar', 'vicky123@gmail.com', '9898989898', 'India', 'tamilnadu', 'Vignesh Sundar-TCI2021001-30463.pdf', '', '2021-01-08 03:59:29'),
(8, '2', 'TCI2021001', 'Andriod Developer', 'Vignesh', 'Sundar', 'gu@gii.ccc', '9898989898', 'India', 'tamilnadu', 'VigneshSundar-TCI2021001-21256.pdf', '', '2021-01-08 04:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE `tbl_careers` (
  `id` int(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `job_id` varchar(222) NOT NULL,
  `job_title` varchar(222) NOT NULL,
  `job_category` varchar(222) NOT NULL,
  `location` varchar(222) NOT NULL,
  `starting_dt` varchar(222) NOT NULL,
  `ending_dt` varchar(222) NOT NULL,
  `posted_by` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp(1) NOT NULL DEFAULT current_timestamp(1) ON UPDATE current_timestamp(1)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_careers`
--

INSERT INTO `tbl_careers` (`id`, `photo`, `job_id`, `job_title`, `job_category`, `location`, `starting_dt`, `ending_dt`, `posted_by`, `description`, `created_at`) VALUES
(2, 'careers-2.png', 'TCI2021001', 'Andriod Developer', 'Full time', 'Chennai, Tamilnadu', '2020-12-28', '2021-01-15', 'Technicax', '<p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><u style=\"background-color: rgb(255, 255, 255); font-weight: bold;\">Summary</u><br></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px; color: rgb(25, 25, 25);\">We are looking for an experienced, motivated and passionate Software Developer with MERN stack experience and in Azure. A strong, progressive and proven technical background in JavaScript and Python with solid foundation in Intellectual property (IP) development, architecture design and be able to integrate and deploy in a customer focused environment. Able to operate independently, train and lead a team with true ownership. Excellent communication and presentation skills to articulate MERN stack of technologies</p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255);\"><u style=\"\">Roles and responsibilities</u></span></p><p>*Â  Strong working knowledge and development in AX 2009 | Dynamics AX 2012 and D365</p><p>*Â  Able to manage multiple server installs from a development point and be able to perform SQL server backupsÂ  Â  Â  and restore.</p><p><u style=\"font-weight: 700; color: rgb(255, 156, 0);\">Technology</u><br></p><p><span style=\"font-weight: 700;\">*Â  HTML5, CSS/CSS3, JAVASCRIPT, ANGULAR, NODE.JS, REACT.JS,EXPRESS.JS, JSON and JAVA</span></p><p><span style=\"font-weight: 700;\">*Â  Â PYTHON â€“ DJANGO, FLASK</span></p><p><span style=\"font-weight: 700;\">*Â  Â MONGODB, SQL SERVER, AZURE, AWS</span></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700;\"><u style=\"\">Experience</u></span></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px; color: rgb(25, 25, 25);\">Four plus years of experience in custom product development using MERN stack | Python Hands on working in application development with a thorough understanding of SDLC Enterprise level large scale software implementation</p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700; background-color: rgb(255, 255, 255);\"><u>Education:</u></span></p><ul source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"color: rgb(25, 25, 25);\"><li>Bachelorâ€™s degree in engineering or equivalent</li></ul>', '2021-01-08 03:58:17.1'),
(3, 'careers-3.png', 'TCX22021002', 'PHP Developer', 'Freelance', 'USA', '2020-12-31', '2021-01-13', 'Technicax', '<p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><u style=\"font-weight: bold;\">Summary</u><br></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px; color: rgb(25, 25, 25);\">We are looking for an experienced, motivated and passionate Software Developer with MERN stack experience and in Azure. A strong, progressive and proven technical background in JavaScript and Python with solid foundation in Intellectual property (IP) development, architecture design and be able to integrate and deploy in a customer focused environment. Able to operate independently, train and lead a team with true ownership. Excellent communication and presentation skills to articulate MERN stack of technologies</p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700;\"><u>Roles and responsibilities</u></span></p><p>*Â  Strong working knowledge and development in AX 2009 | Dynamics AX 2012 and D365</p><p>*Â  Able to manage multiple server installs from a development point and be able to perform SQL server backupsÂ  Â  Â  and restore.</p><p><u style=\"font-weight: 700; color: rgb(255, 156, 0);\">Technology</u><br></p><p><span style=\"font-weight: 700;\">*Â  HTML5, CSS/CSS3, JAVASCRIPT, ANGULAR, NODE.JS, REACT.JS,EXPRESS.JS, JSON and JAVA</span></p><p><span style=\"font-weight: 700;\">*Â  Â PYTHON â€“ DJANGO, FLASK</span></p><p><span style=\"font-weight: 700;\">*Â  Â MONGODB, SQL SERVER, AZURE, AWS</span></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700;\"><u>Experience</u></span></p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px; color: rgb(25, 25, 25);\">Four plus years of experience in custom product development using MERN stack | Python Hands on working in application development with a thorough understanding of SDLC Enterprise level large scale software implementation</p><p source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"margin-bottom: 0px;\"><span style=\"font-weight: 700;\"><u>Education:</u></span></p><ul source=\"\" sans=\"\" pro\";=\"\" font-size:=\"\" 16px;\"=\"\" style=\"color: rgb(25, 25, 25);\"><li>Bachelorâ€™s degree in engineering or equivalent</li></ul>', '2021-01-07 04:09:55.2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_slug`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Microsoft dynamics', 'microsoft-dynamics', '', 'microsoft-dynamics,d365-ax,crm,business solutions', ''),
(2, 'Timinize', 'timinize', '', 'timinize,workforce,timeflow,award winning', ''),
(3, 'Redicane', 'radicane', '', 'radicane,chating system,customers', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(222) NOT NULL,
  `fullname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp(2) NOT NULL DEFAULT current_timestamp(2)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fullname`, `email`, `phone`, `subject`, `message`, `created_at`) VALUES
(1, 'Malli', 'msundaram@technicax.com', '8787872222', 'Test', 'Thank  you', '2021-01-12 03:13:14.31'),
(2, 'Vicky', 'kioi@gil.com', '9898989898', 'Test', 'AAA', '2021-01-12 03:33:54.86');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`id`, `caption`, `photo`) VALUES
(1, 'Photo 1', 'photo-1.jpg'),
(2, 'Photo 2', 'photo-2.jpg'),
(3, 'Photo 3', 'photo-3.jpg'),
(4, 'Photo 4', 'photo-4.jpg'),
(5, 'Photo 5', 'photo-5.jpg'),
(6, 'Photo 6', 'photo-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_slug` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_content` text NOT NULL,
  `post_month` varchar(222) NOT NULL,
  `post_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `total_view` int(11) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_slug`, `post_description`, `post_content`, `post_month`, `post_date`, `photo`, `category_id`, `total_view`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Define World Best IT Solution Technology', 'it-solutions-technology', 'Define World Best IT Solution TechnologyDefine World Best IT Solution TechnologyDefine World Best IT Solution TechnologyDefine World Best IT Solution TechnologyDefine World Best IT Solution TechnologyDefine World Best IT S', '<h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\"><br></h4><div><div class=\"separator\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\"><div class=\"sep-line mt-15 mb-25\" style=\"height: 1px; border-top: 1px solid rgb(241, 241, 241); position: relative; width: 1140px; border-right-color: rgb(241, 241, 241); border-bottom-color: rgb(241, 241, 241); border-left-color: rgb(241, 241, 241); margin-top: 15px !important; margin-bottom: 25px !important;\"></div></div><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Innovative solutions to move your business forward</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.it to make a type specimen book. It has survived not only five centuries.</p><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Innovative solutions to move your business forward</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><div class=\"row\" style=\"display: flex; flex-wrap: wrap; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\"><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog3.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog4.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div></div><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><blockquote style=\"margin-top: 35px; margin-bottom: 50px; border-left-width: 4px; border-left-color: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-shadow: rgba(40, 61, 88, 0.07) 0px 0px 15px 0px; padding: 32px 60px 16px 40px; position: relative; font-size: 18px; line-height: 30px; font-style: italic; color: rgb(110, 110, 110); font-family: Poppins, sans-serif;\"><p class=\"mb-20\" style=\"margin-bottom: 20px !important;\">Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim Mauris ienim id purus ort. Aene auat riss. Proin viverra. enim maurisupn est sed tincidunt placerat, ienim id purus ort</p></blockquote><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Make Yourself Accountable</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived of a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of a type and scrambled and it to make a types specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged It has survived to not only five type centuries, but also the leap into electronic typesetting, remaining centu essentially unchanged</p></div>', 'Nov - Dec - 2020', '25-12-2020', 'post-1.png', 1, 0, '', 'Microsoft dynamics, CRM, AX, Business solutions', ''),
(2, '10 PHP Frameworks You Need To Use Anywhere', 'php-frameworks-anyware', '									10 PHP Frameworks You Need To Use Anywhere10 PHP Frameworks You Need To Use Anywhere10 PHP Frameworks You Need To Use Anywhere10 PHP Frameworks You Need To Use Anywhere10 PHP Frameworks You Need To Use Anywhere Lorem Ipsum', '<h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; font-size: 24px;\"><span style=\"color: rgb(255, 156, 0);\">Innovative solutions to move your business forward</span></h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.it to make a type specimen book. It has survived not only five centuries.</p><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Innovative solutions to move your business forward</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><div class=\"row\" style=\"display: flex; flex-wrap: wrap; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\"><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog3.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog4.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div></div><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><blockquote style=\"margin-top: 35px; margin-bottom: 50px; border-left-width: 4px; border-left-color: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-shadow: rgba(40, 61, 88, 0.07) 0px 0px 15px 0px; padding: 32px 60px 16px 40px; position: relative; font-size: 18px; line-height: 30px; font-style: italic; color: rgb(110, 110, 110); font-family: Poppins, sans-serif;\"><p class=\"mb-20\" style=\"margin-bottom: 20px !important;\">Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim Mauris ienim id purus ort. Aene auat riss. Proin viverra. enim maurisupn est sed tincidunt placerat, ienim id purus ort</p></blockquote><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Make Yourself Accountable</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived of a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of a type and scrambled and it to make a types specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged It has survived to not only five type centuries, but also the leap into electronic typesetting, remaining centu essentially unchanged</p>', 'Mar - Apr - 2021', '17-03-2021', 'post-2.png', 2, 0, '', 'PHP,JAVA,SQL,React,Mongodb', ''),
(3, 'Redicane', 'radicane', '																		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to m', '<h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Innovative solutions to move your business forward</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.it to make a type specimen book. It has survived not only five centuries.</p><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s,It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Innovative business forward</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p><div class=\"row\" style=\"display: flex; flex-wrap: wrap; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\"><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog3.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div><div class=\"col-md-6\" style=\"width: 585px; flex: 0 0 50%; max-width: 50%;\"><div class=\"mb-20\" style=\"margin-bottom: 20px !important;\"><img src=\"http://localhost/Tcx_website/images/blog/blog4.png\" class=\"img-fluid\" alt=\"blog\" style=\"border-style: none; transition: all 0.5s ease-in-out 0s; max-width: 100%; height: auto;\"></div></div></div><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><blockquote style=\"margin-top: 35px; margin-bottom: 50px; border-left-width: 4px; border-left-color: initial; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; box-shadow: rgba(40, 61, 88, 0.07) 0px 0px 15px 0px; padding: 32px 60px 16px 40px; position: relative; font-size: 18px; line-height: 30px; font-style: italic; color: rgb(110, 110, 110); font-family: Poppins, sans-serif;\"><p class=\"mb-20\" style=\"margin-bottom: 20px !important;\">Donec ornare, est sed tincidunt placerat, sem mi suscipit mi, at varius enim Mauris ienim id purus ort. Aene auat riss. Proin viverra. enim maurisupn est sed tincidunt placerat, ienim id purus ort</p></blockquote><p class=\"mb-30\" style=\"color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px; margin-bottom: 30px !important;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p><h4 style=\"margin-top: 0px; margin-bottom: 15px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 30px; color: rgb(35, 35, 35); font-size: 24px;\">Make Yourself Accountable</h4><p style=\"margin-bottom: 15px; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived of a not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of a type and scrambled and it to make a types specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged It has survived to not only five type centuries, but also the leap into electronic typesetting, remaining centu essentially unchanged</p>', 'Mar - Apr - 2021', '11-04-2021', 'post-3.png', 3, 0, '', 'D365-AX,Products,Redicane,Chatting system,Sales', ''),
(4, 'Testing blog', 'php-frameworks-anyware-1', 'php-frameworks-anyware-1php-frameworks-anyware-1vvvphp-frameworks-anyware-1php-frameworks-anyware-1php-frameworks-anyware-1php-frameworks-anyware-1php-frameworks-anyware-1lphp-frameworks-anyware-1php-frameworks-anyware-1ph', '<div class=\"ttm-blog-classic-content\" style=\"padding: 45px 30px 30px; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; z-index: 1; position: relative; color: rgb(110, 110, 110); font-family: Poppins, sans-serif; font-size: 14px;\"><div class=\"entry-content\"><header class=\"entry-header\"><h2 class=\"entry-title\" style=\"margin-top: 0px; font-family: Poppins, sans-serif; font-weight: 600; line-height: 34px; color: rgb(35, 35, 35); font-size: 28px;\"><a href=\"http://localhost/Tcx_website/tcx_blog.php#\" style=\"color: rgb(35, 35, 35); outline: none medium; transition: all 0.3s ease-in-out 0s;\">10 PHP Frameworks You Need To Use Anywhere</a></h2></header><div class=\"ttm-box-desc-text\"><p style=\"margin-bottom: 15px;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industryâ€™s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p></div></div></div>', 'Jan - Feb - 2021', '12-02-2021', 'post-4.png', 3, 0, '', 'Microsoft dynamics, CRM, AX, Business solutions,timinize', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int(11) NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`subs_id`, `subs_email`, `subs_date`, `subs_date_time`, `subs_hash`, `subs_active`) VALUES
(4, 'jbbr.1990@gmail.com', '2017-08-10', '2017-08-10 02:14:23', '', 1),
(5, 'malli@gmail.com', '01-07-2021', '2021-01-07 06:40:36', '', 1),
(6, 'vicky@gmail.com', '01-08-2021', '2021-01-08 04:14:44', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `company`, `photo`, `comment`) VALUES
(1, 'John Doe', 'Managing Director', 'ABC Inc.', 'testimonial-1.png', 'Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea'),
(2, 'Dadiv Smith', 'CEO', 'SS Multimedia', 'testimonial-2.png', 'Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`) VALUES
(1, 'John Doe', 'sadmin@gmail.com', '0177777777', '81dc9bdb52d04dc20036dbd8313ed055', 'user-1.jpg', 'Super Admin', 'Active'),
(13, 'Technicax', 'admin@technicax.com', '', '827ccb0eea8a706c4c34a16891f84e7b', 'user-13.png', 'Admin', 'Active'),
(14, 'Peter Kanny', 'publisher@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055', '', 'Publisher', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `iframe_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id`, `title`, `iframe_code`) VALUES
(1, 'Video 1', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L3XAFSMdVWU\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(2, 'Video 2', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/sinQ06YzbJI\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>'),
(4, 'Video 3', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/ViZNgU-Yt-Y\" frameborder=\"0\" allow=\"autoplay; encrypted-media\" allowfullscreen></iframe>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `job_resume`
--
ALTER TABLE `job_resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_resume`
--
ALTER TABLE `job_resume`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
