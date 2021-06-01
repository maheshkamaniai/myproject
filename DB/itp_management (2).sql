-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2021 at 07:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itp_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2021_03_07_044705_create_tbl_project_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(10) NOT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `company_email` varchar(50) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `isdelete` tinyint(2) DEFAULT 0,
  `created_by` int(10) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(10) DEFAULT NULL,
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `company_name`, `company_email`, `company_address`, `isdelete`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'abc', 'meetkamani0@gmail.com', 'rajkot', 1, 3, '2021-02-28 04:44:37', NULL, '2021-03-21 11:53:34'),
(2, 'abc', 'meetkamani0@gmail.com', 'rajkot', 1, 3, '2021-02-28 04:52:29', NULL, '2021-03-21 11:52:06'),
(3, 'abc', 'meetkamani95@gmail.com', 'rajkot', 1, 3, '2021-02-28 04:55:31', 3, '2021-03-19 21:22:23'),
(5, 'test', 'admin@gmail.com', 'x', 0, 1, '2021-05-29 14:05:27', NULL, '2021-05-29 07:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_person`
--

CREATE TABLE `tbl_client_person` (
  `id` int(10) NOT NULL,
  `client_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `status` int(5) DEFAULT 0,
  `isdelete` tinyint(2) DEFAULT 0,
  `created_by` int(10) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(10) DEFAULT NULL,
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client_person`
--

INSERT INTO `tbl_client_person` (`id`, `client_id`, `name`, `email`, `mobile`, `status`, `isdelete`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 3, 'meet', 'meetkamani95@gmail.com', '9898705943', 1, 0, NULL, '2021-02-28 08:36:01', NULL, '2021-02-28 15:28:17'),
(2, 3, 'meet kamani', 'meetkamani95@gmail.com', '9898705943', 0, 0, NULL, '2021-02-28 08:36:22', NULL, '2021-02-28 15:28:17'),
(3, 3, 'meet kamani', 'meetkamani95@gmail.com', '9898705943', 1, 0, NULL, '2021-02-28 08:36:36', NULL, '2021-02-28 14:06:36'),
(4, 3, 'meet kamani', 'meetkamani95@gmail.com', '9898705943', 1, 0, NULL, '2021-02-28 08:38:54', NULL, '2021-02-28 14:08:54'),
(5, 1, 'meet kamani', 'meetkamani95@gmail.com', '9898705943', 1, 0, NULL, '2021-03-17 08:24:40', NULL, '2021-03-17 13:54:52'),
(6, 1, 'ramesh sharma', 'meetkamani95@gmail.com', '08282828282', 0, 0, NULL, '2021-03-17 08:24:52', NULL, '2021-03-17 13:54:52'),
(7, 5, 'test', 'admin@gmail.com', '22', 1, 0, NULL, '2021-05-29 14:05:38', NULL, '2021-05-29 07:05:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_module`
--

CREATE TABLE `tbl_module` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_module`
--

INSERT INTO `tbl_module` (`id`, `reference_id`, `name`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'NTD', 'Need To Develop\r\n', 0, '2021-03-09 17:26:47', '2021-03-09 17:26:47'),
(2, 'IND', 'In Devlopment\r\n', 0, '2021-03-09 17:26:47', '2021-03-09 17:26:47'),
(3, 'NTT', 'Need To Test\r\n', 0, '2021-03-09 17:28:11', '2021-03-09 17:28:11'),
(4, 'UNT', 'Under Testing\r\n', 0, '2021-03-09 17:28:11', '2021-03-09 17:28:11'),
(5, 'UTP', 'Upload To Production\r\n', 0, '2021-03-09 17:30:21', '2021-03-09 17:30:21'),
(6, 'PRT', 'Production Testing\r\n', 0, '2021-03-09 17:30:21', '2021-03-09 17:30:21'),
(7, 'DEP', 'Deployed\r\n', 0, '2021-03-09 17:31:30', '2021-03-09 17:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(10) UNSIGNED NOT NULL,
  `technology_used` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_status` int(11) NOT NULL,
  `project_title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `project_logo` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_start_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `project_deliverable_day` int(11) DEFAULT NULL,
  `project_end_date` date DEFAULT NULL,
  `project_document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_module` int(11) DEFAULT NULL,
  `isdelete` tinyint(4) DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `task_stetas` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `technology_used`, `team_member_id`, `project_status`, `project_title`, `client_id`, `project_logo`, `project_description`, `project_start_date`, `project_deliverable_day`, `project_end_date`, `project_document`, `total_module`, `isdelete`, `created_by`, `updated_by`, `created_at`, `updated_at`, `task_stetas`) VALUES
(1, '1,2', '1,2', 1, 'sujata', 1, '1615103871.png', 'sujata is management system', '2021-03-09 16:01:00', 30, NULL, '', NULL, 1, NULL, NULL, NULL, NULL, 0),
(4, 'Laravel,Angular', '1,2', 3, 'online kirana', 1, '1615105258.png', 'ecommers side', '2021-05-31 12:46:43', 30, NULL, '16151052581.pdf,16151052582.pdf,16151052583.pdf,', NULL, 0, NULL, NULL, NULL, NULL, 1),
(5, 'Laravel,Angular', '1', 2, 'ajay metal', 5, '1615112907.jpg', 'ajay metal project', '2021-03-12 08:00:00', 10, NULL, '16151129081.pdf,16151129082.pdf,16151129083.pdf,', NULL, 0, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_module`
--

CREATE TABLE `tbl_project_module` (
  `id` int(10) NOT NULL,
  `project_id` int(10) DEFAULT NULL,
  `module_name` varchar(55) DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `module_description` varchar(155) DEFAULT NULL,
  `module_document` text DEFAULT NULL,
  `isdelete` tinyint(2) DEFAULT 0,
  `created_by` int(10) DEFAULT NULL,
  `created_on` timestamp NULL DEFAULT current_timestamp(),
  `updated_by` int(10) DEFAULT NULL,
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project_module`
--

INSERT INTO `tbl_project_module` (`id`, `project_id`, `module_name`, `status`, `module_description`, `module_document`, `isdelete`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 4, 'HRMS', 0, 'user module', '16153948141.pdf,16153948142.pdf,16153948143.pdf,', 0, NULL, '2021-03-10 16:46:54', NULL, '2021-05-29 23:40:22'),
(2, 4, 'Project Management', 0, 'project management', '', 0, NULL, '2021-05-30 07:10:59', NULL, '2021-05-30 00:10:59'),
(3, 5, NULL, 0, NULL, '', 1, NULL, '2021-05-31 07:21:49', NULL, '2021-05-31 00:21:57'),
(4, 5, NULL, 0, NULL, '', 1, NULL, '2021-05-31 07:21:52', NULL, '2021-05-31 00:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project_task`
--

CREATE TABLE `tbl_project_task` (
  `id` int(10) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `module_id` int(10) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `status` int(10) DEFAULT 0,
  `created_by` int(10) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_by` int(10) DEFAULT NULL,
  `updated_on` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `isdelete` tinyint(2) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_project_task`
--

INSERT INTO `tbl_project_task` (`id`, `title`, `module_id`, `sdate`, `edate`, `status`, `created_by`, `created_on`, `updated_by`, `updated_on`, `isdelete`) VALUES
(1, 'user', 1, '2021-03-18', '2021-03-20', 0, NULL, '2021-03-17 04:55:20', NULL, '2021-05-30 01:45:09', 0),
(2, 'Roale', 1, '2021-03-18', '2021-03-20', 0, NULL, '2021-03-17 06:01:46', NULL, '2021-05-30 00:00:41', 0),
(3, 'add project', 2, '2021-05-24', '2021-05-30', 0, NULL, '2021-05-30 07:11:39', NULL, '2021-05-30 00:11:39', 0),
(4, 'task', 2, '2021-05-19', '2021-05-24', 1, NULL, '2021-05-30 07:11:57', NULL, '2021-05-30 01:45:22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subtask`
--

CREATE TABLE `tbl_subtask` (
  `id` int(11) NOT NULL,
  `mid` int(11) DEFAULT NULL,
  `taskname` varchar(155) DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `isdelete` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subtask`
--

INSERT INTO `tbl_subtask` (`id`, `mid`, `taskname`, `status`, `isdelete`) VALUES
(1, 1, 'user', 0, 0),
(2, 1, 'Roale', 0, 0),
(3, 2, 'add project', 1, 0),
(4, 2, 'task', 0, 0),
(5, 1, 'mmm', 0, 0),
(6, 1, 'mmm', 0, 0),
(7, 1, 'mm', 0, 0),
(8, 1, 'mm', 0, 0),
(9, 1, 'mm', 0, 0),
(10, 1, 'm', 0, 0),
(11, 2, '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tasklist`
--

CREATE TABLE `tbl_tasklist` (
  `id` int(10) UNSIGNED NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `mid` int(11) DEFAULT NULL,
  `task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `module` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_tasklist`
--

INSERT INTO `tbl_tasklist` (`id`, `pid`, `mid`, `task`, `created_at`, `updated_at`, `module`) VALUES
(1, 4, 1, 'HRMS', '2021-05-30 09:43:11', '2021-05-30 09:43:11', 1),
(2, 4, 1, 'Project Management', '2021-05-30 09:43:11', '2021-05-30 09:43:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teammember`
--

CREATE TABLE `tbl_teammember` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `Roal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teammember`
--

INSERT INTO `tbl_teammember` (`id`, `name`, `dob`, `gender`, `phone`, `email`, `isdelete`, `created_by`, `img`, `Roal`) VALUES
(1, 'test55', '9/10/1922', 0, '9724855506', 'admin@gmail.com', 0, 1, '1622470105.png', 1),
(2, 'test2', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(3, 'test2', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(4, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622470118.jpg', 0),
(5, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(6, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(7, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(8, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(9, 'test', '9/10/1922', 0, '11', 'admin@gmail.com', 0, 1, '1622291215.png', 0),
(10, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 0, 1, '1622291266.jpg', 0),
(11, 'test', '9/10/1922', 1, '9724855506', 'admin@gmail.com', 1, 1, '1622291312.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `roal`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$zzZx86vC1.sGX69xESswIutSt9OcLRWMGPh/UGvaXnkZcjmPcx7Ue', 'VJmV3nLfgnxjvYd2j2fRh3Ij0OAdSaFjN0V3cZsdobcCZ1YC0LDKjU1LjVTp', '2021-03-07 01:59:50', '2021-03-07 01:59:50', NULL, 0),
(2, 'test@gmail.com', 'admin14@gmail.com', '$2y$10$XmFPb9OduDPBkL9YavS8..DPfiunJUq1mXKDz.O0YSnl.53vOpB7O', 'qqW74AZoSjccEVkV4yTteREpqzw2PZJDDi69Ppn3m15jRj8OYrigjruXYCZy', '2021-05-31 12:06:09', '2021-05-31 12:06:09', NULL, 0),
(3, 'test1', 'test22@gmail.com', '$2y$10$yS0ILjxYSGUkpj3zLZYy1.6Lzp1j4sHhRaNN.P7gYtuoXPq3YNXZO', '0S2Y049C9ZzeQt8v3jIrSLR9ufPtXGLKnvWh59MqsoRVAGv3hKM9pGVaMKzB', '2021-05-31 12:11:39', '2021-05-31 12:11:39', NULL, 0),
(4, 'GIC INDUSTRIAL COMPONENTS 2', 'admin2@gmail.com', '$2y$10$YDvF/VdThnCYth7i.rbZ/OY3rT2sfQhb3F1ryX8BX3k3KpNLHdbQ2', NULL, '2021-05-31 12:20:14', '2021-05-31 12:20:14', '1622445211.png', 0),
(5, 'test100', 'admin100@gmail.com', '$2y$10$FMVQ8PrKcw97nZh661nVGuoLqSkmpUGTjHrfsw.7leO1xWQBNps1S', 'H8M4hPi1ACI53Eep3bbHAdqy30FqQJMZeFl3tqSHWhXvYvxZ2tXz2rD0bii6', '2021-06-01 12:02:30', '2021-06-01 12:02:30', '1622523750.jpg', 0),
(6, 'test200', 'admin200@gmail.com', '$2y$10$i5vksQHs.BifpgQpwaVmnuHXW84wkdegwyI2vEgmiIqewpLBagE8S', NULL, '2021-06-01 12:03:21', '2021-06-01 12:03:21', '1622523800.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client_person`
--
ALTER TABLE `tbl_client_person`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_module`
--
ALTER TABLE `tbl_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_module`
--
ALTER TABLE `tbl_project_module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project_task`
--
ALTER TABLE `tbl_project_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subtask`
--
ALTER TABLE `tbl_subtask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tasklist`
--
ALTER TABLE `tbl_tasklist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teammember`
--
ALTER TABLE `tbl_teammember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_client_person`
--
ALTER TABLE `tbl_client_person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_module`
--
ALTER TABLE `tbl_module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_project_module`
--
ALTER TABLE `tbl_project_module`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_project_task`
--
ALTER TABLE `tbl_project_task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subtask`
--
ALTER TABLE `tbl_subtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_tasklist`
--
ALTER TABLE `tbl_tasklist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_teammember`
--
ALTER TABLE `tbl_teammember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
