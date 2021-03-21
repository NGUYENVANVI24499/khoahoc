-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 21, 2021 lúc 04:56 AM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `khoahoc.sql`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `id_workschedule` int(11) NOT NULL,
  `id_lecturers` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `attendance`
--

INSERT INTO `attendance` (`id`, `id_workschedule`, `id_lecturers`, `status`, `note`, `created_at`, `update_at`) VALUES
(48, 35, 9, 1, '', '2021-03-07 14:28:07', '2021-03-07 14:28:07'),
(49, 35, 10, 1, '', '2021-03-07 14:28:07', '2021-03-07 14:28:07'),
(50, 35, 11, 1, '', '2021-03-07 14:28:07', '2021-03-07 14:28:07'),
(51, 35, 12, 1, '', '2021-03-07 14:28:07', '2021-03-07 14:28:07'),
(52, 35, 13, 1, '', '2021-03-07 14:28:07', '2021-03-07 14:28:07'),
(53, 36, 9, 0, '', '2021-03-12 23:21:11', '2021-03-12 23:21:11'),
(54, 36, 10, 1, '', '2021-03-12 23:21:11', '2021-03-12 23:21:11'),
(55, 36, 11, 1, '', '2021-03-12 23:21:11', '2021-03-12 23:21:11'),
(56, 38, 11, 1, 'di trể', '2021-03-20 17:56:29', '2021-03-20 18:25:06'),
(57, 38, 12, 0, '', '2021-03-20 17:56:29', '2021-03-20 18:25:06'),
(58, 38, 13, 1, '', '2021-03-20 17:56:29', '2021-03-20 18:25:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `element`
--

CREATE TABLE `element` (
  `id` int(11) NOT NULL,
  `id_workschedule` int(11) NOT NULL,
  `id_lecturers` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `element`
--

INSERT INTO `element` (`id`, `id_workschedule`, `id_lecturers`, `created_at`, `update_at`) VALUES
(78, 25, 9, '2021-03-07 01:34:42', '2021-03-07 01:34:42'),
(79, 25, 10, '2021-03-07 01:34:42', '2021-03-07 01:34:42'),
(80, 25, 11, '2021-03-07 01:34:42', '2021-03-07 01:34:42'),
(81, 25, 12, '2021-03-07 01:34:42', '2021-03-07 01:34:42'),
(82, 26, 10, '2021-03-07 01:35:39', '2021-03-07 01:35:39'),
(83, 26, 11, '2021-03-07 01:35:39', '2021-03-07 01:35:39'),
(84, 26, 12, '2021-03-07 01:35:39', '2021-03-07 01:35:39'),
(85, 27, 12, '2021-03-07 01:36:34', '2021-03-07 01:36:34'),
(86, 28, 10, '2021-03-07 01:37:30', '2021-03-07 01:37:30'),
(87, 28, 11, '2021-03-07 01:37:30', '2021-03-07 01:37:30'),
(88, 29, 9, '2021-03-07 01:38:18', '2021-03-07 01:38:18'),
(89, 29, 10, '2021-03-07 01:38:18', '2021-03-07 01:38:18'),
(90, 30, 9, '2021-03-07 01:40:57', '2021-03-07 01:40:57'),
(91, 30, 11, '2021-03-07 01:40:57', '2021-03-07 01:40:57'),
(92, 30, 12, '2021-03-07 01:40:57', '2021-03-07 01:40:57'),
(93, 31, 10, '2021-03-07 01:44:19', '2021-03-07 01:44:19'),
(94, 31, 11, '2021-03-07 01:44:19', '2021-03-07 01:44:19'),
(95, 32, 11, '2021-03-07 01:52:42', '2021-03-07 01:52:42'),
(96, 32, 12, '2021-03-07 01:52:42', '2021-03-07 01:52:42'),
(97, 32, 13, '2021-03-07 01:52:42', '2021-03-07 01:52:42'),
(98, 33, 10, '2021-03-07 02:21:05', '2021-03-07 02:21:05'),
(99, 33, 11, '2021-03-07 02:21:05', '2021-03-07 02:21:05'),
(100, 34, 10, '2021-03-07 02:24:21', '2021-03-07 02:24:21'),
(101, 34, 11, '2021-03-07 02:24:21', '2021-03-07 02:24:21'),
(102, 35, 9, '2021-03-07 14:27:55', '2021-03-07 14:27:55'),
(103, 35, 10, '2021-03-07 14:27:55', '2021-03-07 14:27:55'),
(104, 35, 11, '2021-03-07 14:27:55', '2021-03-07 14:27:55'),
(105, 35, 12, '2021-03-07 14:27:55', '2021-03-07 14:27:55'),
(106, 35, 13, '2021-03-07 14:27:55', '2021-03-07 14:27:55'),
(107, 36, 9, '2021-03-12 23:20:12', '2021-03-12 23:20:12'),
(108, 36, 10, '2021-03-12 23:20:12', '2021-03-12 23:20:12'),
(109, 36, 11, '2021-03-12 23:20:12', '2021-03-12 23:20:12'),
(110, 37, 9, '2021-03-18 23:36:24', '2021-03-18 23:36:24'),
(111, 37, 10, '2021-03-18 23:36:24', '2021-03-18 23:36:24'),
(112, 37, 11, '2021-03-18 23:36:24', '2021-03-18 23:36:24'),
(113, 37, 12, '2021-03-18 23:36:24', '2021-03-18 23:36:24'),
(114, 38, 11, '2021-03-18 23:37:05', '2021-03-18 23:37:05'),
(115, 38, 12, '2021-03-18 23:37:05', '2021-03-18 23:37:05'),
(116, 38, 13, '2021-03-18 23:37:05', '2021-03-18 23:37:05'),
(117, 39, 10, '2021-03-18 23:38:18', '2021-03-18 23:38:18'),
(118, 39, 11, '2021-03-18 23:38:18', '2021-03-18 23:38:18'),
(119, 39, 13, '2021-03-18 23:38:18', '2021-03-18 23:38:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lecturers`
--

CREATE TABLE `lecturers` (
  `id_lecturers` int(11) NOT NULL,
  `name_gv` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lecturers`
--

INSERT INTO `lecturers` (`id_lecturers`, `name_gv`) VALUES
(9, 'hS. Bùi Thanh Khiết'),
(10, 'ThS. Trần Văn Tài'),
(11, 'ThS. Hồ Đắc Hưng'),
(12, 'Trần Thị Như Quỳnh'),
(13, 'Trần minh trí');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_08_141112_laratrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$ociTuDCnsuPcZQcr4VZ.AOntRpXmWCEdeqXsMC6PmcY/ccjsa4XPi', '2021-03-08 17:31:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(5, 'profile-read', 'Read Profile', 'Read Profile', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(6, 'profile-update', 'Update Profile', 'Update Profile', '2021-03-08 07:42:51', '2021-03-08 07:42:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', 'Admin', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(2, 'secretary', 'Secretary', 'Secretary', '2021-03-08 07:42:51', '2021-03-08 07:42:51'),
(3, 'user', 'User', 'User', '2021-03-08 07:42:51', '2021-03-08 07:42:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\Models\\User'),
(2, 2, 'App\\Models\\User'),
(3, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$ggn0nbzOHd1uWLvSGQNSWOIImXIvkc.J7sU/A/MIYI5gFa8yJb4TO', 'Jbsy2Cj2pGWbQUZwOm7nM4nOrbKy3yCrPhb9snP5vTD14B6f1BAETfiUzZ9L', '2021-03-08 07:55:25', '2021-03-08 07:55:25'),
(2, 'secretary1', 'secretary1@gmail.com', NULL, '$2y$10$0WJzxqMh/un.KidlV4ZrkOXKie4utWdYCgphUe4rv2Xavx3WTFYge', NULL, '2021-03-08 08:15:02', '2021-03-08 08:15:02'),
(3, 'user1', 'vanvi24499@gmail.com', NULL, '$2y$10$xyqGzmtBV1uwlRlH7cpv6ORL441HhYROOuPJvNlfk/5.WtGDXsCkK', 'cL56F2jf8BFvOfcyOC4Un1cgwiKBfAcpK4y87Fm9jjGRAx5IpT5KXmMgypx5', '2021-03-08 08:15:36', '2021-03-08 08:15:36'),
(4, 'văn vĩ nguyễn', 'vanvinguyenfc1@gmail.com', NULL, '$2y$10$B8.KTTz4195Pmg7oFFp/PO./39EqCqFSoopM2iowZpPypKOLXt2c6', NULL, '2021-03-08 19:30:12', '2021-03-08 19:30:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `week`
--

CREATE TABLE `week` (
  `id_week` int(11) NOT NULL,
  `name_week` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `week`
--

INSERT INTO `week` (`id_week`, `name_week`) VALUES
(1, 'LỊCH CÔNG TÁC TUẦN 1'),
(2, 'LỊCH CÔNG TÁC TUẦN 2'),
(3, 'LỊCH CÔNG TÁC TUẦN 3'),
(4, 'LỊCH CÔNG TÁC TUẦN 4'),
(5, 'LỊCH CÔNG TÁC TUẦN 5'),
(6, 'LỊCH CÔNG TÁC TUẦN 6'),
(7, 'LỊCH CÔNG TÁC TUẦN 7'),
(8, 'LỊCH CÔNG TÁC TUẦN 8');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `workschedule`
--

CREATE TABLE `workschedule` (
  `id_workschedule` int(11) NOT NULL,
  `id_week` int(11) NOT NULL,
  `id_worktype` int(11) NOT NULL,
  `time` time NOT NULL,
  `date_begin` date NOT NULL,
  `date_finish` date NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `place` text COLLATE utf8_unicode_ci NOT NULL,
  `note` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `workschedule`
--

INSERT INTO `workschedule` (`id_workschedule`, `id_week`, `id_worktype`, `time`, `date_begin`, `date_finish`, `content`, `place`, `note`) VALUES
(25, 1, 2, '08:32:00', '2021-03-08', '2021-03-09', '124567', '12345', NULL),
(26, 1, 4, '09:32:00', '2021-03-09', '2021-03-10', 'asfgsh', 'asdfg', NULL),
(27, 1, 5, '00:32:00', '2021-03-10', '2021-03-11', 'abc', 'asdfg', NULL),
(28, 1, 1, '09:41:00', '2021-03-08', '2021-03-08', 'i', 'i', NULL),
(29, 1, 2, '13:37:00', '2021-03-08', '2021-03-09', 'dd', 'dd', NULL),
(30, 1, 3, '04:40:00', '2021-03-08', '2021-03-08', 'cc', 'cc', NULL),
(31, 1, 2, '07:44:00', '2021-03-08', '2021-03-10', 'gg', 'sd', NULL),
(32, 1, 3, '22:54:00', '2021-03-08', '2021-03-09', 'abcdqe', 'ad', 'đi sớm'),
(33, 1, 3, '11:23:00', '2021-03-10', '2021-03-11', '<h2 style=\"font-style:italic;\"><u>tuần c&ocirc;ng t&aacute;c</u></h2>\r\n\r\n<h1><cite>fff&nbsp;&nbsp;</cite></h1>', 'dãy b2', 'd'),
(34, 1, 2, '01:26:00', '2021-03-09', '2021-03-09', '<p>fff</p>', 'g', NULL),
(35, 2, 2, '22:27:00', '2021-03-07', '2021-03-07', 'f', 'cc', 'd'),
(36, 8, 3, '15:19:00', '2021-03-13', '2021-03-16', 'Phó Hiệu trưởng Hoàng Trọng Quyền dự “Lễ ký kết tài trợ Dự án nghiên cứu Khoa học và Công nghệ năm 2020” do Quỹ Đổi mới sáng tạo Vingroup (VINIF) tài trợ (2 ngày 12, 13/10/2020)', 'asdfg', 'mới'),
(37, 8, 2, '14:36:00', '2021-03-19', '2021-03-20', 'Lớp bồi dưỡng kiến thức quốc phòng và an ninh cho đối tượng 3, khóa 54 năm 2020', 'dãy b2', NULL),
(38, 8, 4, '05:39:00', '2021-03-19', '2021-03-21', 'Lãnh đạo Trường dự tập huấn sử dụng phân hệ ứng dụng di động của Phần mềm Quản lý văn bản', 'dãy b3', NULL),
(39, 8, 2, '13:37:00', '2021-03-15', '2021-03-17', 'Hội nghị lãnh đạo mở rộng giới thiệu người ứng cử đại biểu HĐND tỉnh', 'dãy b2', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `workschedule_type`
--

CREATE TABLE `workschedule_type` (
  `id_worktype` int(11) NOT NULL,
  `name_workschedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `workschedule_type`
--

INSERT INTO `workschedule_type` (`id_worktype`, `name_workschedule`) VALUES
(1, 'Công tác đào tạo'),
(2, 'Công tác nghiên cứu khoa học'),
(3, 'công tác đoàn hội'),
(4, 'công tác thực tập'),
(5, 'công tác phòng chống tội'),
(6, 'công tác phòng chống tội phạm');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_workschedule` (`id_workschedule`),
  ADD KEY `id_lecturers` (`id_lecturers`);

--
-- Chỉ mục cho bảng `element`
--
ALTER TABLE `element`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lecturers` (`id_lecturers`),
  ADD KEY `id_workschedule` (`id_workschedule`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id_lecturers`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`id_week`);

--
-- Chỉ mục cho bảng `workschedule`
--
ALTER TABLE `workschedule`
  ADD PRIMARY KEY (`id_workschedule`),
  ADD KEY `id_week` (`id_week`),
  ADD KEY `id_worktype` (`id_worktype`);

--
-- Chỉ mục cho bảng `workschedule_type`
--
ALTER TABLE `workschedule_type`
  ADD PRIMARY KEY (`id_worktype`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT cho bảng `element`
--
ALTER TABLE `element`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id_lecturers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `week`
--
ALTER TABLE `week`
  MODIFY `id_week` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `workschedule`
--
ALTER TABLE `workschedule`
  MODIFY `id_workschedule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `workschedule_type`
--
ALTER TABLE `workschedule_type`
  MODIFY `id_worktype` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`id_workschedule`) REFERENCES `workschedule` (`id_workschedule`),
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`id_lecturers`) REFERENCES `lecturers` (`id_lecturers`);

--
-- Các ràng buộc cho bảng `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `element_ibfk_2` FOREIGN KEY (`id_lecturers`) REFERENCES `lecturers` (`id_lecturers`),
  ADD CONSTRAINT `element_ibfk_3` FOREIGN KEY (`id_workschedule`) REFERENCES `workschedule` (`id_workschedule`);

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `workschedule`
--
ALTER TABLE `workschedule`
  ADD CONSTRAINT `workschedule_ibfk_1` FOREIGN KEY (`id_week`) REFERENCES `week` (`id_week`),
  ADD CONSTRAINT `workschedule_ibfk_2` FOREIGN KEY (`id_worktype`) REFERENCES `workschedule_type` (`id_worktype`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
