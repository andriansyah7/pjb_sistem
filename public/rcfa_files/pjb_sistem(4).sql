-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 08:10 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjb_sistem`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecm_review`
--

CREATE TABLE `ecm_review` (
  `ecm_review_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecm_review_alasan` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecm_review`
--

INSERT INTO `ecm_review` (`ecm_review_id`, `ecp_no`, `user_nid`, `ecm_review_alasan`, `created_at`, `updated_at`) VALUES
(1, '79/ECP/22/Jun/2021', '33333333AE', 'baguss ni', '2021-06-22 09:22:44', '2021-06-22 09:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `ecp`
--

CREATE TABLE `ecp` (
  `ecp_no` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_deskripsi` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_desktambahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_alasan` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_approval_1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_approval_2` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecp_file_pendukung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `progres_id` bigint(20) UNSIGNED NOT NULL,
  `urgensi_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecp`
--

INSERT INTO `ecp` (`ecp_no`, `user_nid`, `ecp_deskripsi`, `ecp_desktambahan`, `ecp_alasan`, `ecp_approval_1`, `ecp_approval_2`, `ecp_file_pendukung`, `progres_id`, `urgensi_id`, `created_at`, `updated_at`) VALUES
('79/ECP/22/Jun/2021', '1STAFFOP', 'sva', 'vdaav', 'vadva', '8207014JA', '7906106JA', 'ecp_files/Buat Notulen.png', 10, 1, '2021-06-22 03:10:31', '2021-06-29 04:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `fungsi`
--

CREATE TABLE `fungsi` (
  `fungsi_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `fungsi_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fungsi`
--

INSERT INTO `fungsi` (`fungsi_id`, `unit_id`, `fungsi_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'System Owner Blok 1-2-5', '2021-04-22 09:48:29', '2021-04-22 09:48:29'),
(2, 1, 'System Owner Blok 3-4 & CNG', '2021-04-22 09:48:29', '2021-04-22 09:48:29'),
(3, 1, 'Technology Owner', '2021-04-22 03:35:17', '2021-04-22 03:35:17'),
(4, 1, 'Manager E & QA', '2021-04-22 17:27:48', '2021-04-22 17:27:48'),
(5, 1, 'Manajemen Mutu &  Kinerja', '2021-04-22 10:33:16', '2021-04-22 10:33:16'),
(6, 1, 'Manajemen Risiko & Kepatuhan', '2021-04-22 10:33:53', '2021-04-22 10:33:53'),
(7, 2, 'Manager Operasi', '2021-06-10 11:17:18', '2021-06-10 11:17:18'),
(8, 2, 'RENDAL OP BLOK 1-2-5', '2021-06-10 11:18:02', '2021-06-10 11:18:02');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `jabatan_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`jabatan_id`, `jabatan_name`, `created_at`, `updated_at`) VALUES
(1, 'Manager', '2021-04-13 02:56:00', '2021-04-13 02:56:00'),
(2, 'Supervisor', '2021-04-14 15:27:15', '2021-04-14 15:27:15'),
(3, 'Junior', '2021-04-14 15:27:15', '2021-04-14 15:27:15'),
(4, 'Staff', '2021-04-16 01:11:36', '2021-04-16 01:11:36'),
(5, 'General Manager', NULL, NULL),
(8, 'Asisten Engineer', '2021-06-02 06:48:53', '2021-06-02 07:39:13'),
(9, 'Engineer', '2021-06-02 07:35:56', '2021-06-02 07:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `manager_approval`
--

CREATE TABLE `manager_approval` (
  `manager_approval_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ecp_id` bigint(20) UNSIGNED NOT NULL,
  `manager_approval_alasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manager_approval`
--

INSERT INTO `manager_approval` (`manager_approval_id`, `ecp_no`, `user_nid`, `status_ecp_id`, `manager_approval_alasan`, `created_at`, `updated_at`) VALUES
(11, '79/ECP/22/Jun/2021', '7906106JA', 2, 'Bagus', '2021-06-22 03:19:07', '2021-06-22 03:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `meqa_approval`
--

CREATE TABLE `meqa_approval` (
  `meqa_approval_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv_so` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ecp_id` bigint(20) UNSIGNED NOT NULL,
  `meqa_approval_alasan` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meqa_approval`
--

INSERT INTO `meqa_approval` (`meqa_approval_id`, `ecp_no`, `user_nid`, `spv_so`, `status_ecp_id`, `meqa_approval_alasan`, `created_at`, `updated_at`) VALUES
(2, '79/ECP/22/Jun/2021', '8509053JA', '8007020JA', 2, 'ECP ok, perlu ditindaklanjuti', '2021-06-23 04:16:50', '2021-06-23 04:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `meqa_cek`
--

CREATE TABLE `meqa_cek` (
  `meqa_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ecp_id` bigint(20) UNSIGNED NOT NULL,
  `drawings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SOP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maint_manual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `predictive_maint_schedules` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preventative_maint_schedules` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MIMS_equipment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_control_system` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_process` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_13_071518_create_roles_table', 1),
(5, '2021_04_13_071534_create_jabatans_table', 1),
(6, '2021_04_13_072636_add_jabatan_id', 1),
(7, '2021_04_13_072810_add_role_id', 1),
(9, '2021_04_13_073041_create_ecp', 2),
(10, '2021_04_13_093926_add_user_nid', 2),
(12, '2021_04_15_040235_create_statusecps_table', 3),
(13, '2021_04_15_043941_add_status_ecp_id', 4),
(15, '2021_04_16_090853_create_units_table', 5),
(16, '2021_04_17_070547_add_approval', 6),
(17, '2021_04_17_104518_add_ecp_file_pendukung', 7),
(19, '2021_04_18_085323_create_spv_approval', 8),
(20, '2021_04_18_091445_create_manager_approval', 8),
(21, '2021_04_18_092302_create_notulens_table', 9),
(22, '2021_04_19_030144_add_ecp_no', 10),
(23, '2021_04_22_085926_create_fungsis_table', 11),
(24, '2021_04_22_185747_create_tindaklanjuts_table', 12),
(25, '2021_05_02_151352_create_progres_table', 13),
(26, '2021_05_06_130017_create_serp__bloks_table', 14),
(27, '2021_05_06_132312_create_serp_blok', 15),
(28, '2021_05_06_132547_create_serp_unit', 16),
(29, '2021_05_06_132818_rollback', 16),
(30, '2021_05_06_133418_create_serp__systems_table', 17),
(31, '2021_05_06_134330_create_serp__pics_table', 18),
(32, '2021_05_06_134521_create_serp_main_equipment', 19),
(33, '2021_06_10_211959_create_meqas_table', 20),
(34, '2021_06_20_145830_create_urgensis_table', 21),
(36, '2021_06_22_105239_create_e_c_m__reviews_table', 22),
(37, '2021_06_22_140943_create_meqa_approvals_table', 23),
(38, '2021_06_23_141730_create_spv_sos_table', 24);

-- --------------------------------------------------------

--
-- Table structure for table `notulen`
--

CREATE TABLE `notulen` (
  `notulen_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_pimpinan_rapat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_notulis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `notulen_waktu` time NOT NULL,
  `notulen_tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_rapat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_agenda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_peserta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_pembahasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_permasalahan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notulen_hasil_pembahasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notulen`
--

INSERT INTO `notulen` (`notulen_id`, `ecp_no`, `notulen_pimpinan_rapat`, `notulen_notulis`, `notulen_tanggal`, `notulen_waktu`, `notulen_tempat`, `notulen_rapat`, `notulen_agenda`, `notulen_peserta`, `notulen_pembahasan`, `notulen_permasalahan`, `notulen_hasil_pembahasan`, `created_at`, `updated_at`) VALUES
(8, '79/ECP/22/Jun/2021', '8007020JA', '33333333AE', '2021-06-30 17:00:00', '11:11:00', 'Kantor PJB', 'Pembahasan ECP', 'Pembahasan ECP', 'Terlampir', 'tycguvh', 'vhbkj', 'cvihbj', '2021-06-30 17:39:07', '2021-06-30 17:39:07');

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
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `progres_id` bigint(20) UNSIGNED NOT NULL,
  `progres_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `progres`
--

INSERT INTO `progres` (`progres_id`, `progres_name`, `created_at`, `updated_at`) VALUES
(1, 'Menunggu approval spv', '2021-05-02 15:22:29', '2021-05-02 15:22:29'),
(2, 'Approved by SPV, Menunggu approval manager', '2021-05-02 15:19:29', '2021-05-02 15:19:29'),
(3, 'Approved by Manager, Dalam Review Tim ECM', '2021-05-02 15:22:29', '2021-05-02 15:22:29'),
(4, 'Reviewed by Tim ECM, Menunggu approval MEQA', '2021-05-02 15:22:29', '2021-05-02 15:22:29'),
(5, 'Tindak Lanjut', '2021-05-02 15:22:29', '2021-05-02 15:22:29'),
(6, 'Rejected by SPV', '2021-05-05 03:41:48', '2021-05-05 03:41:48'),
(7, 'Rejected by Manager', '2021-05-05 03:41:48', '2021-05-05 03:41:48'),
(8, 'Approved by MEQA,Disposisikan ke SPV SO', '2021-06-10 14:58:07', '2021-06-10 14:58:07'),
(9, 'Rejected by MEQA', '2021-06-10 14:58:27', '2021-06-10 14:59:03'),
(10, 'Sign Off ECP by MEQA', '2021-06-10 19:28:11', '2021-06-10 19:28:11'),
(11, 'Reviewed by SPV SO, Didisposisikan ke STAFF SO', '2021-06-23 04:48:11', '2021-06-23 04:47:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'Super User', '2021-04-13 02:52:07', '2021-04-13 02:52:07'),
(2, 'User Manager', '2021-04-14 15:23:46', '2021-04-14 15:23:46'),
(3, 'User Supervisor', '2021-04-14 15:23:46', '2021-04-14 15:23:46'),
(4, 'Tim ECM', '2021-04-14 15:23:46', '2021-04-14 15:23:46'),
(5, 'User Staff', '2021-04-14 15:23:46', '2021-04-14 15:23:46'),
(6, 'User Supervisor SO', '2021-06-22 03:01:53', '2021-06-22 03:01:53'),
(7, 'User Manager SO', '2021-06-22 03:01:53', '2021-06-22 03:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `serp_blok`
--

CREATE TABLE `serp_blok` (
  `serp_blok_id` bigint(20) UNSIGNED NOT NULL,
  `serp_blok_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serp_blok`
--

INSERT INTO `serp_blok` (`serp_blok_id`, `serp_blok_name`, `created_at`, `updated_at`) VALUES
(1, 'Blok 1', '2021-05-06 07:20:24', '2021-05-06 07:20:24'),
(2, 'Blok 2', '2021-05-06 07:20:24', '2021-05-06 07:20:24'),
(3, 'Blok 3', '2021-05-06 07:20:24', '2021-05-06 07:20:24'),
(4, 'Blok 4', '2021-05-06 07:20:24', '2021-05-06 07:20:24'),
(5, 'Blok 5', '2021-05-06 07:20:24', '2021-05-06 07:20:24'),
(6, 'CNG', '2021-05-20 03:29:43', '2021-05-20 03:29:43'),
(7, 'Common', '2021-05-20 03:31:23', '2021-05-20 03:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `serp_main_equipment`
--

CREATE TABLE `serp_main_equipment` (
  `serp_main_equipment_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serp_system_id` bigint(20) UNSIGNED DEFAULT NULL,
  `serp_main_equipment_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PT` double DEFAULT NULL,
  `OC` double DEFAULT NULL,
  `PQ` double DEFAULT NULL,
  `SF` double DEFAULT NULL,
  `RT` double DEFAULT NULL,
  `RC` double DEFAULT NULL,
  `PE` double DEFAULT NULL,
  `SCR` double(10,2) DEFAULT NULL,
  `OCR` double DEFAULT NULL,
  `ACR` double(10,2) DEFAULT NULL,
  `AFPF` double DEFAULT NULL,
  `MPI` double(10,2) DEFAULT NULL,
  `serp_pic_id` bigint(20) UNSIGNED DEFAULT NULL,
  `serp_main_equipment_keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serp_main_equipment`
--

INSERT INTO `serp_main_equipment` (`serp_main_equipment_id`, `serp_system_id`, `serp_main_equipment_name`, `PT`, `OC`, `PQ`, `SF`, `RT`, `RC`, `PE`, `SCR`, `OCR`, `ACR`, `AFPF`, `MPI`, `serp_pic_id`, `serp_main_equipment_keterangan`, `created_at`, `updated_at`) VALUES
('MT11BAA10GA001', 1, 'GT11 IPB - GENERATOR LEADS NEUTRAL POINT', 2, 5, 3, 2, 2, 2, 2, 2.78, 6, 16.66, 2, 33.33, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAA50GA001', 1, 'GT11 IPB - GENERATOR LEADS TO CIRCUIT BREAKER', 2, 5, 3, 2, 2, 2, 2, 2.78, 6, 16.66, 2, 33.33, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAA60GA001', 1, 'GT11 IPB - MAIN TRAFO LEADS TO CIRCUIT BREAKER (udara busduct (equipment kit))', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAA70GA001', 1, 'GT11 IPB - MAIN TRAFO LEADS TO SFC', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAA80GA001', 1, 'GT11 IPB - MAIN TRAFO LEADS TO BJA', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAC20GS001', 1, 'GT11 BREAKER GENERATOR ', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 8, 347.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BAT10GT001', 1, 'GT11 GENERATOR MAIN TRANSFORMER ', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BBT10GT100    ', 1, 'GT11 UNIT AUX TRANSFORMER', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BCA10GH001', 1, 'GT11 START-UP SELECTION DEVICE (SSD) ', 10, 4, 3, 6, 4, 2, 5, 5.42, 8, 43.40, 2, 86.80, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA00GS401', 1, 'GT11 BREAKER COUPLING TO BFB', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA10GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA10', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA10GS100', 1, 'GT11 BREAKER FEED INCOMER MCC BJA', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA20GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA20', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA30GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA30', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA40GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA40', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA50GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA50', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA60GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA60', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BJA70GH001', 1, 'GT11 LOW VOLTAGE DISTR BJA70', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BPA00GH000', 1, 'GT11 STATIC FREQUENCY CONVERTER', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BRA10GH001', 1, 'GT11 LOW VOLTAGE UPS UNIT', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BRU10GH001', 1, 'GT11 CONVERTER UNIT', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BTA10GR001', 1, 'GT11 BATTERY BANK 220 VDC UNIT A', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 10, 397.71, 2, 'not yet defined', '2021-06-18 08:05:33', '2021-06-18 08:05:33'),
('MT11BTB10GR001', 1, 'GT11 BATTERY BANK 220 VDC UNIT B', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 10, 397.71, 2, 'not yet defined', '2021-06-18 08:05:33', '2021-06-18 08:05:33'),
('MT11BTL10GR001', 1, 'GT11 BATTERY CHARGER 220 VDC UNIT A', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BTM10GR001', 1, 'GT11 BATTERY CHARGER 220 VDC UNIT B', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BTQ10GU001', 1, 'GT11 DC/DC CONVERTER UNIT A', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BTR10GU001', 1, 'GT11 DC/DC CONVERTER UNIT B', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUA10GH001', 1, 'GT11 MCC FOR 220 VDC SYSTEM UNIT 1', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUB10GH001', 1, 'GT11 MCC FOR 220 VDC SYSTEM UNIT 2', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUC10GH001', 1, 'GT11 MCC FOR 220 VDC SYSTEM UNIT 3', 2, 2, 2, 4, 2, 2, 2, 2.39, 2, 4.78, 2, 9.56, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUE10GH001', 1, 'GT11 MCC FOR 24 VDC SYSTEM UNIT 1', 2, 2, 2, 4, 2, 4, 2, 2.73, 2, 5.45, 2, 10.90, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUF10GH001', 1, 'GT11 MCC FOR 24 VDC SYSTEM UNIT 2', 2, 2, 2, 4, 2, 4, 2, 2.73, 2, 5.45, 2, 10.90, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11BUG10GH001', 1, 'GT11 MCC FOR 24 VDC SYSTEM UNIT 3', 2, 2, 2, 4, 2, 4, 2, 2.73, 2, 5.45, 2, 10.90, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11CBP10GH001', 1, 'GT11 SYNCHRONATION & KWH METERING', 2, 2, 2, 2, 2, 4, 2, 2.39, 2, 4.78, 2, 9.56, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11CHA10GH001', 1, 'GT11 PROTECTION GENERATOR TRANSFORMATOR ', 2, 2, 2, 2, 2, 4, 2, 2.39, 2, 4.78, 2, 9.56, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11CUA10GH001', 1, 'GT11 STATIC EXCITATION GENERATOR', 2, 2, 2, 2, 2, 4, 2, 2.39, 2, 4.78, 2, 9.56, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11CYE10GH001', 3, 'GT11 FIRE CONTROL UNIT', 8, 6, 6, 2, 6, 2, 5, 5.41, 6, 32.47, 8, 259.76, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11HAC11AC001', 4, 'HRSG11 LP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC12AC001', 4, 'HRSG11 LP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC15AA001', 4, 'HRSG11 CONTROL VALVE LP FEED WATER', 2, 2, 2, 2, 2, 4, 2, 2.39, 2, 4.78, 2, 9.56, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC51AC001', 4, 'HRSG11 HP ECONOMIZER 5', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC52AC001', 4, 'HRSG11 HP ECONOMIZER 4', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC53AC001', 4, 'HRSG11 HP ECONOMIZER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC54AC001', 4, 'HRSG11 HP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAC55AC001', 4, 'HRSG11 HP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAD10AC001', 5, 'HRSG11 LP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAD10BB001', 5, 'HRSG11 LP DRUM', 2, 6, 2, 2, 4, 2, 1, 3.14, 4, 12.56, 8, 100.47, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAD50AC001', 5, 'HRSG11 HP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAD50BB001', 5, 'HRSG11 HP DRUM', 8, 2, 4, 2, 2, 2, 2, 3.78, 10, 37.80, 2, 75.59, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAH51AC001', 6, 'HRSG11 HP SUPER HEATER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAH52AC001', 6, 'HRSG11 HP SUPER HEATER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11HAH53AC001', 6, 'HRSG11 HP SUPER HEATER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LAB45AA052', 7, 'HRSG11 MOTOR VALVE LP FEED WATER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11LAB45AA053', 7, 'HRSG11 MOTOR VALVE LP FEED WATER BY PASS', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11LAB95AA052', 7, 'HRSG11 MOTOR VALVE HP FEED WATER', 8, 4, 4, 2, 2, 4, 2, 4.21, 6, 25.25, 8, 202.02, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11LAB95AA053', 7, 'HRSG11 MOTOR VALVE HP FEED WATER BY PASS', 8, 4, 4, 2, 2, 4, 2, 4.21, 4, 16.84, 8, 134.68, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11LAE95AA001', 7, 'HRSG11 SOV HP SPRAY WATER INJECTION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LAE95AA002', 7, 'HRSG11 CONTROL VALVE HP SPRAY WATER INJECTION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LBA10AA002', 7, 'HRSG11 LP PIP & VLV HP STEAM HEADER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LBA50AA050', 7, 'HRSG11 HP PIP & VLV HP STEAM HEADER', 8, 8, 8, 2, 6, 4, 5, 6.24, 8, 49.96, 2, 99.92, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LBA50AA202', 7, 'HRSG11 HP SIDE PIP&VLV STEAM OUTLET', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LCQ21AA001', 7, 'HRSG11 LP PIP & VLV LP MAIN STEAM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11LCQ70BB050', 7, 'HRSG11 BLOWDOWN TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HA100', 8, 'GT11 TURBINE CASING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HA300', 8, 'GT11 TURBINE VANE CARRIER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HA400', 8, 'GT11 TURBINE VANE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HA531', 8, 'GT11 STATOR HEAT SHIELD SEGMENT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HB000', 8, 'GT11 TURBINE COMPRESSOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HB100', 8, 'GT11 TURBINE ROTOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA30HB400', 8, 'GT11 TURBINE BLADE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA31AA003', 8, 'GT11 PIP & VLV TURBINE COMP DRAIN ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA80HA100', 8, 'GT11 COMPRESSOR CASING ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA80HA400', 8, 'GT11 COMPRESSOR VANE ROW ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA80HA410', 8, 'GT11 VIGV ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA80HA420', 8, 'GT11 COMPRESSOR VANE CARRIER ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA80HB400', 8, 'GT11 COMPRESSOR BLADE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA81AA011', 8, 'GT11 BLOW OFF VALVE 11', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA81AA012', 8, 'GT11 BLOW OFF VALVE 12', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA81AA021', 8, 'GT11 BLOW OFF VALVE 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA81AA031', 8, 'GT11 TURBINE & COMP PIP & BLOW OFF VLV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBA81AA0311', 8, 'GT11 BLOW OFF VALVE 3', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBB10HA001', 8, 'GT11 EXHAUST CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBB10HA002', 8, 'GT11 STACK & SILINCER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBC80HB100', 8, 'GT11 COMPRESSOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBD10HD001', 8, 'GT11 TURBINE BEARING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBD20HD001', 8, 'GT11 COMPRESSOR BEARING', 6, 2, 4, 2, 2, 4, 2, 3.46, 4, 13.86, 2, 27.71, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBH30AN000', 8, 'GT11 COOL AND SEAL COMPRESSOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBK70AE001', 8, 'GT11 HYDRAULIC JACK ROTOR BARRING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBL30AN001', 9, 'GT11 COMPRESSOR AIR INTAKE', 4, 2, 4, 2, 2, 4, 2, 3.02, 4, 12.09, 2, 24.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBL30AT001', 9, 'GT11 FILTER AIR INTAKE', 4, 2, 4, 2, 2, 4, 2, 3.02, 4, 12.09, 2, 24.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBL30BR001', 9, 'GT11 SILENCER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBM30AX010', 8, 'GT11 COMBUSTER', 8, 6, 4, 2, 8, 2, 10, 6.41, 10, 64.14, 2, 128.29, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBM31AV101', 10, 'GT11 BURNER FUEL', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN31AA001', 11, 'GT11 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MBN31AA002', 11, 'GT11 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN31AT001', 11, 'GT11 FUEL OIL FILTER 40 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN32AP001', 11, 'GT11 FUEL OIL PUMP (SKID)', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN32AT001', 11, 'GT11 FUEL OIL FILTER 20 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN33AT001', 11, 'GT11 FUEL OIL FILTER 5 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN35BB001', 11, 'GT11 FUEL OIL SUMP TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBN50AA000', 11, 'GT11 FUEL OIL DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBP01AA100', 12, 'GT11 MAIN SHUT-OFF VALVE FUEL GAS', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBP50AA000', 12, 'GT11 FUEL GAS DRAIN VALVE', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AA001', 8, 'HRSG11 PISTON DAMPER 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AA002', 8, 'HRSG11 PISTON DAMPER 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 4, 64.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AA003', 14, 'HRSG11 PISTON DAMPER 3', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AN011', 14, 'HRSG11 DIVERTER DAMPER COOLER FAN', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AN100', 14, 'HRSG11 SEAL AIR FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AN101', 14, 'HRSG11 SEAL AIR FAN 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AP011', 14, 'HRSG11 DIVERTER DAMPER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBR10AP012', 14, 'HRSG11 DIVERTER DAMPER PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBU30AT101', 15, 'GT11 TWIN NOX WATER FILTER', 4, 2, 4, 2, 2, 4, 2, 3.02, 4, 12.09, 2, 24.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBU31AA001', 15, 'GT11 MAIN SHUT-OFF VALVE NOX WATER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBU32AP001', 15, 'GT11 NOX WATER PUMP', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV10AN001', 16, 'GT11 VAPOR EXTRACTOR FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV10AN002', 16, 'GT11 VAPOR EXTRACTOR FAN 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV10BB001', 16, 'GT11 LUBE OIL TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV21AC010', 16, 'GT11 LUBE OIL COOLER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV21AP001', 16, 'GT11 MAIN LUBE OIL PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV21AP002', 16, 'GT11 MAIN LUBE OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV21AT002', 16, 'GT11 TWIN LUBE OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV22AP001', 16, 'GT11 EMERGENCY LUBE OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV50AP001', 16, 'GT11 JACKING OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBV50AP002', 16, 'GT11 JACKING OIL PUMP 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBX21AP001', 17, 'GT11 POWER OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBX21AP002', 17, 'GT11 POWER OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBX21AT010', 17, 'GT11 POWER OIL FILTER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBX22AP002', 17, 'GT11 : ROTOR BARRING MOTOR PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MBX22AP003', 17, 'GT11 : ROTOR BARRING HAND PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MKA10HA100', 18, 'GT11 GENERATOR STATOR', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKA10HB100', 18, 'GT11 GENERATOR ROTOR', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKB10GS100', 18, 'GT11 GENERATOR EXC.BREAKER (FCB)', 8, 8, 8, 2, 6, 4, 10, 7.05, 8, 56.41, 10, 564.07, 2, 'not yet defined', '2021-06-18 08:05:33', '2021-06-18 08:05:33'),
('MT11MKC50GT001', 18, 'GT11 GENERATOR EXC.BRUSH GEAR & TRANSFORMATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKF10AN001', 18, 'GT11 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKF10AN002', 18, 'GT11 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKF10AN003', 18, 'GT11 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKF10AN0033', 18, 'GT11 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MKF10AN007', 18, 'GT11 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MKF10AN012', 18, 'GT11 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MKF10AP001', 18, 'GT11 COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11MKF10AP0011', 18, 'GT11 COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11MKF10AP002', 18, 'GT11 COOLING WATER PUMP 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT11SAA10AH001', 1, 'GT11 HVAC INSTALLATION', 2, 4, 2, 2, 4, 2, 5, 3.23, 2, 6.46, 8, 51.67, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT11SGJ01KD000', 3, 'GT11 CO2 UNIT', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BAA10GA001', 19, 'GT12 IPB - GENERATOR LEADS NEUTRAL POINT', 6, 2, 4, 2, 2, 4, 2, 3.46, 4, 13.86, 2, 27.71, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BAA50GA001', 19, 'GT12 IPB - GENERATOR LEADS TO CIRCUIT BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BAA60GA001', 19, 'GT12 IPB - MAIN TRAFO LEADS TO CIRCUIT BREAKER', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BAA80GA001', 19, 'GT12 IPB - MAIN TRAFO LEADS TO BJA', 4, 2, 4, 2, 2, 4, 2, 3.02, 4, 12.09, 2, 24.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BAC20GS001', 19, 'GT12 BREAKER GENERATOR', 4, 2, 4, 2, 2, 4, 2, 3.02, 4, 12.09, 6, 72.57, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BBT10GT100', 19, 'GT12 UNIT AUX TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BBT20GT100', 19, 'GT12 STATION SERVICE TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BCA10GH001', 19, 'GT12 START-UP SELECTION DEVICE (SSD) ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA00GS401', 19, 'GT12 BREAKER COUPLING TO BFB', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA10GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA10', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA10GS100', 19, 'GT12 BREAKER FEED INCOMER MCC BJA', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA20GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA20', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA30GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA30', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA40GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA40', 4, 2, 2, 2, 2, 2, 1, 2.30, 4, 9.20, 6, 55.18, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA50GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA50', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA60GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA60', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BJA70GH001', 19, 'GT12 LOW VOLTAGE DISTR BJA70', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BPA00GH000', 19, 'GT12 STATIC FREQUENCY CONVERTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BRA10GH001', 19, 'GT12 LOW VOLTAGE UPS UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BRU10GH001', 19, 'GT12 CONVERTER UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTA10GR001', 19, 'GT12 BATTERY BANK 220 VDC UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 10, 160.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTB10GR001', 19, 'GT12 BATTERY BANK 220 VDC UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 10, 160.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTL10GR001', 19, 'GT12 BATTERY CHARGER 220 VDC UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTM10GR001', 19, 'GT12 BATTERY CHARGER 220 VDC UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTQ10GU001', 19, 'GT12 DC/DC CONVERTER UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BTR10GU001', 19, 'GT12 DC/DC CONVERTER UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUA10GH001', 19, 'GT12 MCC FOR 220 VDC SYSTEM UNIT 1', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUB10GH001', 19, 'GT12 MCC FOR 220 VDC SYSTEM UNIT 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUC10GH001', 19, 'GT12 MCC FOR 220 VDC SYSTEM UNIT 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUE10GH001', 19, 'GT12 MCC FOR 24 VDC SYSTEM UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUF10GH001', 19, 'GT12 MCC FOR 24 VDC SYSTEM UNIT 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12BUG10GH001', 19, 'GT12 MCC FOR 24 VDC SYSTEM UNIT 3', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12CBP10GH001', 19, 'GT12 SYNCHRONATION & KWH METERING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12CHA10GH001', 19, 'GT12 PROTECTION GENERATOR TRANSFORMATOR ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12CUA10GH001', 19, 'GT12 STATIC EXCITATION GENERATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12CYE10GH001', 21, 'GT12 FIRE CONTROL UNIT', 8, 6, 6, 2, 6, 2, 5, 5.41, 6, 32.47, 8, 259.76, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12HAC11AC001', 22, 'HRSG12 LP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC12AC001', 22, 'HRSG12 LP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC15AA001', 22, 'HRSG12 CONTROL VALVE LP FEED WATER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC51AC001', 22, 'HRSG12 HP ECONOMIZER 5', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC52AC001', 22, 'HRSG12 HP ECONOMIZER 4', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC53AC001', 22, 'HRSG12 HP ECONOMIZER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC54AC001', 22, 'HRSG12 HP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAC55AC001', 22, 'HRSG12 HP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAD10AC001', 23, 'HRSG12 LP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAD10BB001', 23, 'HRSG12 LP DRUM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAD50AC001', 23, 'HRSG12 HP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAD50BB001', 23, 'HRSG12 HP DRUM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAH51AC001', 24, 'HRSG12 HP SUPER HEATER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAH52AC001', 24, 'HRSG12 HP SUPER HEATER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12HAH53AC001', 24, 'HRSG12 HP SUPER HEATER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LAE95AA001', 25, 'HRSG12 SOV HP SPRAY WATER INJECTION', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LAE95AA002', 25, 'HRSG12 CONTROL VALVE HP SPRAY WATER INJECTION', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LBA10AA002', 25, 'HRSG12 LP PIP & VLV HP STEAM HEADER', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LBA50AA050', 32, 'HRSG12 HP PIP & VLV HP STEAM HEADER', 8, 6, 4, 4, 6, 2, 5, 5.30, 6, 31.83, 2, 63.66, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LBA50AA202', 25, 'HRSG12 HP SIDE PIP&VLV STEAM OUTLET', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LCQ21AA001', 25, 'HRSG12 LP PIP & VLV LP MAIN STEAM', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12LCQ70BB050', 25, 'HRSG12 BLOWDOWN TANK', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA1001', 2, 'Cooling System', 2, 3, 4, 5, 6, 7, 8, 5.39, 8, 43.08, 8, 344.65, 1, 'tes', '2021-06-18 08:05:04', '2021-06-18 08:05:04'),
('MT12MBA30HA100', 26, 'GT12 TURBINE CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HA300', 26, 'GT12 TURBINE VANE CARRIER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HA400', 26, 'GT12 TURBINE VANE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HA531', 26, 'GT12 STATOR HEAT SHIELD SEGMENT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HB000', 26, 'GT12 TURBINE COMPRESSOR', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HB100', 26, 'GT12 TURBINE ROTOR ', 8, 4, 4, 4, 2, 4, 2, 4.41, 6, 26.45, 2, 52.89, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA30HB400', 26, 'GT12 TURBINE BLADE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA31AA003', 26, ' GT12 PIP & VLV TURBINE COMP DRAIN ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA80HA100', 26, ' GT12 COMPRESSOR CASING ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA80HA400', 26, 'GT12 COMPRESSOR VANE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA80HA410', 26, 'GT12 VIGV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA80HA420', 26, 'GT12 COMPRESSOR VANE CARRIER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA80HB400', 26, 'GT12 COMPRESSOR BLADE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA81AA011', 26, 'GT12 BLOW OFF VALVE 11', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA81AA012', 26, 'GT12 BLOW OFF VALVE 12', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA81AA021', 26, 'GT12 BLOW OFF VALVE 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA81AA031', 26, 'GT12 TURBINE & COMP PIP & BLOW OFF VLV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBA81AA0313', 26, 'GT12 BLOW OFF VALVE 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBB10HA001', 26, 'GT12 EXHAUST CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBB10HA002', 26, 'GT12 STACK & SILINCER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBC80HB100', 26, 'GT12 COMPRESSOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBD10HD001', 26, 'GT12 TURBINE BEARING', 8, 6, 8, 2, 6, 4, 5, 5.92, 10, 59.16, 2, 118.32, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBD20HD001', 26, 'GT12 COMPRESSOR BEARING', 8, 4, 4, 4, 2, 4, 2, 4.41, 6, 26.45, 2, 52.89, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBH30AN000', 26, 'GT12 COOL AND SEAL COMPRESSOR ', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBK70AE001', 26, 'GT12 HYDRAULIC JACK ROTOR BARRING', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBL30AN001', 27, 'GT12 COMPRESSOR AIR INTAKE', 2, 4, 2, 2, 4, 2, 5, 3.23, 4, 12.92, 8, 103.34, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBL30AT001', 27, 'GT12 FILTER AIR INTAKE', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBL30BR001', 27, 'GT12 SILENCER AIR INTAKE', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBM30AX010', 28, 'GT12 COMBUSTER', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBM31AV101', 28, 'GT12 BURNER FUEL', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN31AA001', 29, 'GT12 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MBN31AA0011', 29, 'GT12 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 4, 67.34, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN31AT001', 29, 'GT12 FUEL OIL FILTER 40 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN32AP001', 29, 'GT12 FUEL OIL PUMP (SKID)', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN32AT001', 29, 'GT12 FUEL OIL FILTER 20 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN33AT001', 29, 'GT12 FUEL OIL FILTER 5 MICRON', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN35BB001', 29, 'GT12 FUEL OIL SUMP TANK', 8, 4, 4, 4, 2, 4, 2, 4.41, 6, 26.45, 2, 52.89, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBN50AA000', 29, 'GT12 FUEL OIL DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBP01AA100', 30, 'GT12 MAIN SHUT-OFF VALVE FUEL GAS', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBP50AA000', 30, 'GT12 FUEL GAS DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AA001', 32, 'HRSG12 PISTON DAMPER 1', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AA002', 32, 'HRSG12 PISTON DAMPER 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AA003', 32, 'HRSG12 PISTON DAMPER 3', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AN011', 32, 'HRSG12 DIVERTER DAMPER COOLER FAN', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AN100', 32, 'HRSG12 SEAL AIR FAN 1', 8, 4, 4, 4, 2, 4, 2, 4.41, 6, 26.45, 2, 52.89, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AN101', 32, 'HRSG12 SEAL AIR FAN 2', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AP011', 32, 'HRSG12 DIVERTER DAMPER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBR10AP012', 32, 'HRSG12 DIVERTER DAMPER PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBU30AT101', 33, 'GT12 TWIN NOX WATER FILTER', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBU31AA001', 33, 'GT12 MAIN SHUT-OFF VALVE NOX WATER', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBU32AP001', 33, 'GT12 NOX WATER PUMP', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV10AN001', 34, 'GT12 VAPOR EXTRACTOR FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV10AN002', 34, 'GT12 VAPOR EXTRACTOR FAN 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV10BB001', 34, 'GT12 LUBE OIL TANK', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV21AC010', 34, 'GT12 LUBE OIL COOLER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV21AP001', 34, 'GT12 MAIN LUBE OIL PUMP 1', 8, 2, 4, 4, 2, 4, 2, 4.21, 4, 16.84, 2, 33.67, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV21AP002', 34, 'GT12 MAIN LUBE OIL PUMP 2', 8, 4, 4, 4, 2, 4, 2, 4.41, 6, 26.45, 4, 105.79, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV21AT002', 34, 'GT12 TWIN LUBE OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV22AP001', 34, 'GT12 EMERGENCY LUBE OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV50AP001', 34, 'GT12 JACKING OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBV50AP002', 34, 'GT12 JACKING OIL PUMP 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBX21AP001', 35, 'GT12 POWER OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBX21AP002', 35, 'GT12 POWER OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBX21AT010', 35, 'GT12 POWER OIL FILTER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBX22AP002', 35, 'GT12 : ROTOR BARRING MOTOR PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MBX22AP003', 35, 'GT12 : ROTOR BARRING HAND PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MKA10HA100', 36, 'GT12 GENERATOR STATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKA10HB100', 36, 'GT12 GENERATOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKB10GS100', 36, 'GT12 GENERATOR EXC.BREAKER', 4, 4, 4, 4, 2, 4, 2, 3.55, 6, 21.27, 6, 127.64, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKC50GT001', 36, 'GT12 GENERATOR EXC.BRUSH GEAR & TRANSFORMATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKF10AN001', 36, 'GT12 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKF10AN0011', 36, 'GT12 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MKF10AN002', 36, 'GT12 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKF10AN0022', 36, 'GT12 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MKF10AN003', 36, 'GT12 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12MKF10AN0033', 36, 'GT12 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MKF10AP001', 36, 'GT12 COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12MKF10AP002', 36, 'GT12 COOLING WATER PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT12SAA10AH001', 19, 'GT12 HVAC INSTALLATION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT12SGJ01KD000', 21, 'GT12 CO2 UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAA10GA001', 37, 'GT13 IPB - GENERATOR LEADS NEUTRAL POINT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAA50GA001', 37, 'GT13 IPB - GENERATOR LEADS TO CIRCUIT BREAKER', 10, 2, 3, 6, 2, 2, 4, 4.97, 6, 29.83, 2, 59.66, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAA60GA001', 37, 'GT13 IPB - MAIN TRAFO LEADS TO CIRCUIT BREAKER', 10, 2, 3, 6, 2, 2, 4, 4.97, 6, 29.83, 2, 59.66, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAA70GA001', 37, 'GT13 IPB - MAIN TRAFO LEADS TO SFC', 10, 2, 3, 6, 2, 2, 4, 4.97, 6, 29.83, 2, 59.66, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAA80GA001', 37, 'GT13 IPB - MAIN TRAFO LEADS TO BJA', 10, 2, 3, 6, 2, 2, 4, 4.97, 6, 29.83, 2, 59.66, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAC20GS001', 37, 'GT13 BREAKER GENERATOR ', 10, 2, 3, 6, 2, 2, 4, 4.97, 6, 29.83, 2, 59.66, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BAT10GT001', 37, 'GT13 GENERATOR MAIN TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BBT10GT100', 37, 'GT13 UNIT AUX TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BBT20GT100', 37, 'GT13 STATION SERVICE TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BCA10GH001', 37, 'GT13 START-UP SELECTION DEVICE (SSD) ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA00GS401', 37, 'GT13 BREAKER COUPLING TO BFB', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA10GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA10', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA10GS100', 37, 'GT13 BREAKER FEED INCOMER MCC BJA', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34');
INSERT INTO `serp_main_equipment` (`serp_main_equipment_id`, `serp_system_id`, `serp_main_equipment_name`, `PT`, `OC`, `PQ`, `SF`, `RT`, `RC`, `PE`, `SCR`, `OCR`, `ACR`, `AFPF`, `MPI`, `serp_pic_id`, `serp_main_equipment_keterangan`, `created_at`, `updated_at`) VALUES
('MT13BJA20GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA20', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA30GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA30', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA40GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA40', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA50GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA50', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA60GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA60', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BJA70GH001', 37, 'GT13 LOW VOLTAGE DISTR BJA70', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BPA00GH000', 37, 'GT13 STATIC FREQUENCY CONVERTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BRA10GH001', 37, 'GT13 LOW VOLTAGE UPS UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BRU10GH001', 37, 'GT13 CONVERTER UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTA10GR001', 37, 'GT13 BATTERY BANK 220 VDC UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 10, 160.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTB10GR001', 37, 'GT13 BATTERY BANK 220 VDC UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 10, 160.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTL10GR001', 37, 'GT13 BATTERY CHARGER 220 VDC UNIT A', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTM10GR001', 37, 'GT13 BATTERY CHARGER 220 VDC UNIT B', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTQ10GU001', 37, 'GT13 DC/DC CONVERTER UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BTR10GU001', 37, 'GT13 DC/DC CONVERTER UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUA10GH001', 37, 'GT13 MCC FOR 220 VDC SYSTEM UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUB10GH001', 37, 'GT13 MCC FOR 220 VDC SYSTEM UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUC10GH001', 37, 'GT13 MCC FOR 220 VDC SYSTEM UNIT 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUE10GH001', 37, 'GT13 MCC FOR 24 VDC SYSTEM UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUF10GH001', 37, 'GT13 MCC FOR 24 VDC SYSTEM UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13BUG10GH001', 37, 'GT13 MCC FOR 24 VDC SYSTEM UNIT 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13CBP10GH001', 37, 'GT13 SYNCHRONATION & KWH METERING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13CHA10GH001', 37, 'GT13 PROTECTION GENERATOR TRANSFORMATOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 10, 40.00, 10, 400.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13CUA10GH001', 37, 'GT13 STATIC EXCITATION GENERATOR', 8, 6, 6, 2, 2, 2, 5, 4.97, 8, 39.77, 8, 318.17, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13CYE10GH001', 39, 'GT13 FIRE CONTROL UNIT', 8, 6, 6, 2, 6, 2, 5, 5.41, 6, 32.47, 8, 259.76, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13HAC11AC001', 40, 'HRSG13 LP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC12AC001', 40, 'HRSG13 LP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC15AA001', 40, 'HRSG13 CONTROL VALVE LP FEED WATER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC51AC001', 40, 'HRSG13 HP ECONOMIZER 5', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC52AC001', 40, 'HRSG13 HP ECONOMIZER 4', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC53AC001', 40, 'HRSG13 HP ECONOMIZER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC54AC001', 40, 'HRSG13 HP ECONOMIZER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAC55AC001', 40, 'HRSG13 HP ECONOMIZER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAD10AC001', 41, 'HRSG13 LP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAD10BB001', 41, 'HRSG13 LP DRUM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAD50AC001', 41, 'HRSG13 HP EVAPORATOR', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAD50BB001', 41, 'HRSG13 HP DRUM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAH51AC001', 42, 'HRSG13 HP SUPER HEATER 3', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAH52AC001', 42, 'HRSG13 HP SUPER HEATER 2', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13HAH53AC001', 42, 'HRSG13 HP SUPER HEATER 1', 8, 2, 4, 2, 4, 4, 5, 4.55, 10, 45.51, 8, 364.10, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LAB95AA052', 43, 'HRSG13 MOTOR VALVE HP FEED WATER', 8, 4, 4, 2, 4, 2, 5, 4.55, 4, 18.21, 6, 109.23, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13LAB95AA053', 43, 'HRSG13 MOTOR VALVE HP FEED WATER BY PASS', 8, 4, 4, 2, 4, 2, 5, 4.55, 4, 18.21, 6, 109.23, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13LAE95AA001', 43, 'HRSG13 SOV HP SPRAY WATER INJECTION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LAE95AA002', 43, 'HRSG13 CONTROL VALVE HP SPRAY WATER INJECTION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LBA10AA002', 43, 'HRSG13 LP PIP & VLV HP STEAM HEADER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LBA50AA050', 43, 'HRSG13 HP PIP & VLV HP STEAM HEADER', 8, 4, 4, 2, 4, 2, 5, 4.55, 4, 18.21, 6, 109.23, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LBA50AA202', 43, 'HRSG13 HP SIDE PIP&VLV STEAM OUTLET', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LCQ21AA001', 43, 'HRSG13 LP PIP & VLV LP MAIN STEAM', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13LCQ70BB050', 43, 'HRSG13 BLOWDOWN TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HA100', 44, 'GT13 TURBINE CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HA300', 44, 'GT13 TURBINE VANE CARRIER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HA400', 44, 'GT13 TURBINE VANE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HA531', 44, 'GT13 STATOR HEAT SHIELD SEGMENT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HB000', 44, 'GT13 TURBINE COMPRESSOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HB100', 44, 'GT13 TURBINE ROTOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA30HB400', 44, 'GT13 TURBINE BLADE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA31AA003', 44, 'GT13 PIP & VLV TURBINE COMP DRAIN ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA80HA100', 44, 'GT13 COMPRESSOR CASING ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA80HA400', 44, 'GT13 COMPRESSOR VANE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA80HA410', 44, 'GT13 VIGV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA80HA420', 44, 'GT13 COMPRESSOR VANE CARRIER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA80HB400', 44, 'GT13 COMPRESSOR BLADE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA81AA011', 44, 'GT13 BLOW OFF VALVE 11', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA81AA012', 44, 'GT13 BLOW OFF VALVE 12', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA81AA021', 44, 'GT13 BLOW OFF VALVE 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA81AA031', 44, 'GT13 TURBINE & COMP PIP & BLOW OFF VLV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBA81AA0313', 44, 'GT13 BLOW OFF VALVE 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBB10HA001', 44, 'GT13 EXHAUST CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBB10HA002', 44, 'GT13 STACK & SILINCER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBC80HB100', 44, 'GT13 COMPRESSOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBD10HD001', 44, 'GT13 TURBINE BEARING', 8, 2, 4, 2, 4, 4, 1, 4.16, 10, 41.58, 2, 83.15, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBD20HD001', 44, 'GT13 COMPRESSOR BEARING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBH30AN000', 44, 'GT13 COOL AND SEAL COMPRESSOR ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBK70AE001', 44, 'GT13 HYDRAULIC JACK ROTOR BARRING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBL30AN001', 45, 'GT13 COMPRESSOR AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBL30AT001', 45, 'GT13 FILTER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBL30BR001', 45, 'GT13 SILENCER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBM30AX010', 46, 'GT13 COMBUSTER', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBM31AV101', 46, 'GT13 BURNER FUEL', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN31AA001', 47, 'GT13 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MBN31AA0013', 47, 'GT13 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN31AT001', 47, 'GT13 FUEL OIL FILTER 40 MICRON', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN32AP001', 47, 'GT13 FUEL OIL PUMP (SKID)', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN32AT001', 47, 'GT13 FUEL OIL FILTER 20 MICRON', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN33AT001', 47, 'GT13 FUEL OIL FILTER 5 MICRON', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN35BB001', 47, 'GT13 FUEL OIL SUMP TANK', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBN50AA000', 47, 'GT13 FUEL OIL DRAIN VALVE', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBP01AA100', 48, 'GT13 MAIN SHUT-OFF VALVE FUEL GAS', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBP50AA000', 48, 'GT13 FUEL GAS DRAIN VALVE', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AA001', 50, 'HRSG13 PISTON DAMPER 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AA002', 50, 'HRSG13 PISTON DAMPER 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AA003', 50, 'HRSG13 PISTON DAMPER 3', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AN011', 50, 'HRSG13 DIVERTER DAMPER COOLER FAN', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AN100', 50, 'HRSG13 SEAL AIR FAN 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AN101', 50, 'HRSG13 SEAL AIR FAN 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AP011', 50, 'HRSG13 DIVERTER DAMPER PUMP 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBR10AP012', 50, 'HRSG13 DIVERTER DAMPER PUMP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 6, 117.58, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBU30AT101', 51, 'GT13 TWIN NOX WATER FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBU31AA001', 51, 'GT13 MAIN SHUT-OFF VALVE NOX WATER', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBU32AP001', 51, 'GT13 NOX WATER PUMP', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV10AN001', 52, 'GT13 VAPOR EXTRACTOR FAN 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV10AN002', 52, 'GT13 VAPOR EXTRACTOR FAN 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV10BB001', 52, 'GT13 LUBE OIL TANK', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV21AC010', 52, 'GT13 LUBE OIL COOLER', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV21AP001', 52, 'GT13 MAIN LUBE OIL PUMP 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV21AP002', 52, 'GT13 MAIN LUBE OIL PUMP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV21AT002', 52, 'GT13 TWIN LUBE OIL FILTER', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV22AP001', 52, 'GT13 EMERGENCY LUBE OIL PUMP', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV50AP001', 52, 'GT13 JACKING OIL PUMP 1 ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBV50AP002', 52, 'GT13 JACKING OIL PUMP 2 ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBX21AP001', 53, 'GT13 POWER OIL PUMP 1 ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBX21AP002', 53, 'GT13 POWER OIL PUMP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBX21AT010', 53, 'GT13 POWER OIL FILTER ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBX22AP002', 53, 'GT13 : ROTOR BARRING MOTOR PUMP ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MBX22AP003', 53, 'GT13 : ROTOR BARRING HAND PUMP ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MKA10HA100', 54, 'GT13 GENERATOR STATOR', 8, 4, 4, 6, 6, 4, 2, 5.18, 8, 41.46, 10, 414.59, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKA10HB100', 54, 'GT13 GENERATOR ROTOR', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKB10GS100', 54, 'GT13 GENERATOR EXC.BREAKER', 8, 8, 8, 2, 6, 4, 10, 7.05, 8, 56.41, 10, 564.07, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKC50GT001', 54, 'GT13 GENERATOR EXC.BRUSH GEAR & TRANSFORMATOR', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKF10AN001', 54, 'GT13 COOLER GRUP 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKF10AN0011', 54, 'GT13 COOLER GRUP 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 4, 78.38, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MKF10AN002', 54, 'GT13 COOLER GRUP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKF10AN0022', 54, 'GT13 COOLER GRUP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MKF10AN003', 54, 'GT13 COOLER GRUP 3', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13MKF10AN0033', 54, 'GT13 COOLER GRUP 3', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MKF10AP001', 54, 'GT13 COOLING WATER PUMP 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13MKF10AP002', 54, 'GT13 COOLING WATER PUMP 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT13SAA10AH001', 37, 'GT13 HVAC INSTALLATION', 2, 4, 2, 2, 4, 2, 5, 3.23, 2, 6.46, 8, 51.67, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT13SGJ01KD000', 39, 'GT13 CO2 UNIT', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14ABA10GW001', 111, 'ST14 CGIB 500kV Section 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14ABA10GW002', 111, 'ST14 CGIB 500kV Section 2 INCL HV BUSHING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14BAA01GA001', 111, 'ST14 ISOLATED PHASE BUSDUCT UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14BAT10GT000', 112, 'ST14 GENERATOR TRANSFORMERS', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14BFA00GS001', 111, 'ST14 LOW VOLTAGE 19BFA MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14CBP10GH001', 111, 'ST14 SYNCHRONATION & KWH METERING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14CHA10GH001', 111, 'ST14 PROTECTION GENERATOR TRANSFORMATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14CUA10GH001', 111, 'ST14 STATIC EXCITATION GENERATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14CYE10GH001', 111, 'ST 14 FIRE PROTECTION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA10AP001', 111, 'ST14 BASEMENT SUMP PUMP A NORTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA10AP0014', 111, 'ST14 BASEMENT SUMP PUMP A NORTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14GMA10AP002', 111, 'ST14 BASEMENT SUMP PUMP B NORTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA10AP0024', 111, 'ST14 BASEMENT SUMP PUMP B NORTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14GMA20AP001', 111, 'ST14 BASEMENT SUMP PUMP A SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA20AP0014', 111, 'ST14 BASEMENT SUMP PUMP A SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14GMA20AP002', 111, 'ST14 BASEMENT SUMP PUMP B SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA20AP0024', 111, 'ST14 BASEMENT SUMP PUMP B SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14GMA30AP001', 111, 'ST14 BASEMENT SUMP PUMP ODS SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14GMA30AP0014', 111, 'ST14 BASEMENT SUMP PUMP ODS SOUTH', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAA10BB001', 116, 'ST14 FEED WATER STORAGE TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 6, 144.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB11AA001', 116, 'ST14 FEED WATER VALVE & PIPING LP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 4, 64.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB21AA001', 116, 'ST14 FEED WATER VALVE & PIPING LP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB31AA001', 116, 'ST14 FEED WATER VALVE & PIPING LP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB51AA001', 116, 'ST14 FEED WATER VALVE & PIPING HP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB61AA001', 116, 'ST14 FEED WATER VALVE & PIPING HP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAB71AA001', 116, 'ST14 FEED WATER VALVE & PIPING HP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC10AP001', 116, 'ST14 LP FEED WTR PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC20AP001', 116, 'ST14 LP FEED WTR PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC30AP001', 116, 'ST14 LP FEED WTR PUMP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC50AP001', 116, 'ST14 HP FEED WATER PUMP 1', 8, 6, 6, 2, 4, 4, 10, 6.23, 8, 49.87, 8, 398.95, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC60AP001', 116, 'ST14 HP FEED WATER PUMP 2', 8, 6, 6, 2, 4, 4, 10, 6.23, 8, 49.87, 2, 99.74, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LAC70AP001', 116, 'ST14 HP FEED WATER PUMP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LBA10AA251', 117, 'ST14 MAIN STEAM VALVE & PIPING DRAIN LP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LBA50AA251', 116, 'ST14 MAIN STEAM VALVE & PIPING DRAIN HP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LBS50AA002', 116, 'ST14 LP PEGGING STEAM SOV OIL(DEAERATOR)', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LBS60AA001', 117, 'ST14 LP PEGGING STEAM SOV GAS (DEAERATOR)', 8, 2, 4, 2, 4, 2, 4, 4.21, 4, 16.84, 6, 101.01, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCA30AA002', 117, 'ST14 CONDENSATE VALVE & PIPING CRV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCA31AA002', 117, 'ST14 CONDENSATE VALVE & PIPING RECIRC', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCB10AP001', 117, 'ST14 CONDENSATE PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCB20AP001', 117, 'ST14 CONDENSATE PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCB30AP001', 117, 'ST14 CONDENSATE PUMP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCE12AA001', 117, 'ST14 CONDENSATE SOV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14LCE12AA002', 117, 'ST14 CONDENSATE CRV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA10HB000', 118, 'ST14 HP STEAM TURBINE ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA11AA001', 118, 'ST14 HP MSV 1 LEFT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA11AA031', 118, 'ST14 HP MCV 1 LEFT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA12AA001', 118, 'ST14 HP MSV 2 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA12AA031', 118, 'ST14 HP MCV 2 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA21AA001', 118, 'ST14 LP MSV 1 LEFT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA21AA031', 118, 'ST14 LP MCV 1 LEFT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA22AA001', 118, 'ST14 LP MSV  2 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA22AA002', 118, 'ST14 LP MSV 3 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA22AA031', 118, 'ST14 LP MCV  2 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAA22AA032', 118, 'ST14 LP MCV 3 RIGHT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAC10HB000', 118, 'ST14 LP STEAM TURBINE ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAG01AC001', 117, 'ST14 CONDENSOR', 8, 2, 4, 2, 6, 2, 4, 4.54, 6, 27.21, 2, 54.43, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAG03BB001', 117, 'ST14 HOT WELL', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAG04AC001', 117, 'ST14 FLASH BOX', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ00AP001', 117, 'ST14 AIR REMOVAL PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ00AP002', 117, 'ST14 AIR REMOVAL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ09AA002', 119, 'ST14 PIP & VLV SERVICE EJECTOR STEAM CV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ11AA001', 119, 'ST14 PIP & VLV SERVICE EJECTOR AIR SOV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ15AA010', 119, 'ST14 PIP & VLV START UP EJECTOR AIR SOV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ20BN001', 119, 'ST14 SERVICE  STEAM  EJECTOR 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ30BN001', 119, 'ST14 SERVICE  STEAM  EJECTOR 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAJ50BN001', 119, 'ST14 START  UP   EJECTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAK70AP001', 115, 'ST14 TURNING GEAR OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAL11AA211', 118, 'ST14 PIPING & VLV SOL HP START UP DRAIN', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAN10AA001', 118, 'ST14 SOV LP BY PASS ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAN10AA002', 118, 'ST14 CRV LP BY PASS ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV02AN001', 115, 'ST14 LUBE OIL VAPOR EXTRACTOR  1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV02AN002', 115, 'ST14 LUBE OIL VAPOR EXTRACTOR  2', 8, 2, 4, 2, 4, 4, 10, 5.61, 8, 44.85, 2, 89.70, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV02AP501', 115, 'ST14 LUBE OIL HYDRAULIC PUMP 1 CENTRIFUGAL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV02AP502', 115, 'ST14 LUBE OIL HYDRAULIC PUMP 2 CENTRIFUGAL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV02BB001', 115, 'ST14 LUBE OIL TANK', 8, 2, 4, 2, 6, 2, 5, 4.68, 8, 37.40, 2, 74.80, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV21AP011', 115, 'ST14 MAIN OIL PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV21AP021', 115, 'ST14 AUX  LUBE OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV21AP031', 115, 'ST14 EMERGENCY  LUBE  OIL  PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV21AT001', 115, 'ST14 MAIN LUBE OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV21AT021', 115, 'ST14 AUXILIARY OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV22AC001', 115, 'ST14 LUBE OIL COOLER 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV22AC002', 115, 'ST14 LUBE OIL COOLER 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV23AT001', 115, 'ST14 LUBE OIL FILTER', 8, 4, 6, 2, 8, 4, 6, 5.81, 10, 58.06, 2, 116.13, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV50AE001', 115, 'ST14 TURN GEAR  &  JACK  OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAV50AP001', 115, 'ST14  JACKING OIL PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAW15AA011', 118, 'ST14 GLAND STEAM WATER INJECTION CV', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAW30AN001', 118, 'ST14 GLAND STEAM EXHAUST FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAW30AN002', 118, 'ST14 GLAND STEAM EXHAUST FAN 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAX11AP001', 115, 'ST14 HYDRAULIC  PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAX11AP002', 115, 'ST14 HYDRAULIC  PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAX13AT001', 115, 'ST14 HYDRAULIC FILTER 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MAX13AT002', 115, 'ST14 HYDRAULIC FILTER 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKA10HA100', 120, 'ST14 GENERATOR STATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKA10HB000', 120, 'ST14 GENERATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKA10HB100', 120, 'ST14 GENERATOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKB10GS100', 120, 'ST14 EXCITATION BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG10BB001', 120, 'ST14 HYDROGEN PLANT (TANK H2O)', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG30AW001', 120, 'ST14 HYDROGEN PLANT (GEN)', 8, 2, 4, 2, 6, 2, 5, 4.68, 6, 28.05, 8, 224.41, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG30AW0014', 120, 'ST14 HYDROGEN PLANT,GEN', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKG31AP001', 120, 'ST14 HIDROGEN PLANT,COMPRESSOR 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG31AP0014', 120, 'ST14 HIDROGEN PLANT,COMPRESSOR 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKG31AP002', 120, 'ST14 HYDROGEN PLANT,COMPRESSOR 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG31AP0024', 120, 'ST14 HYDROGEN PLANT,COMPRESSOR 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKG62AP001', 120, 'ST14 GAS COOLING SYSTEM CO2 CIRCULATING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKG62AP0014', 120, 'ST14 GAS COOLING SYSTEM CO2 CIRCULATING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKQ11AN001', 115, 'ST14 SEAL OIL STEAM TURBINE VACUM PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKQ11AN0014', 115, 'ST14 SEAL OIL STEAM TURBINE VACUM PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKQ12AN001', 115, 'ST14 SEAL OIL STEAM TURBINE VACUM PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKQ21AN001', 115, 'ST14 SEAL OIL STEAM TRB GAS EXTRAC FAN', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKQ21AN0014', 115, 'ST14 SEAL OIL STEAM TRB GAS EXTRAC FAN', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKW21AP001', 115, 'ST14 SEAL OIL SYSTEM PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKW22AP001', 115, 'ST14 SEAL OIL SYSTEM PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKW23AP001', 115, 'ST14 EMERGENCY SEAL OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14MKY10GH001', 120, 'ST14 GENERATOR PROTECTION SYSTEM A/B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14MKY20GH001', 120, 'ST14 EXCITATION & BRUSHGEAR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT14PGC10AP001', 114, 'ST14 CLOSED COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT14PGC20AP001', 114, 'ST14 CLOSED COOLING WATER PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19BBA00GS001', 111, 'ST14 MEDIUM VOLTAGE 19BBA SWITCHGEAR 6kV UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BBB00GS001', 111, 'ST14 MEDIUM VOLTAGE 19BBB SWITCHGEAR 6kV UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BFA10GT001', 111, 'ST14 PDC TRAFO 19BFA10', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BFB20GT001', 111, 'ST14 PDC TRAFO 19BFB20', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BFC00GS001', 111, 'ST14 LOW VOLTAGE 19BFC MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BFD00GS001', 111, 'ST14 LOW VOLTAGE 19BFD MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BFT00GT001', 111, 'ST14 PDC TRAFO 19BFT UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BJA00GS001', 111, 'ST14 LOW VOLTAGE 19BJA MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BJB00GS001', 111, 'ST14 LOW VOLTAGE 19BJB MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BJC00GS001', 111, 'ST14 LOW VOLTAGE 19BJC MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BJD00GS001', 111, 'ST14 LOW VOLTAGE 19BJD MCC 400 V UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BRA10GH001', 111, 'ST14 LOW VOLTAGE UPS UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BRA20GH001', 111, 'ST14 LOW VOLTAGE UPS UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BRU10GH001', 111, 'ST14 CONVERTER UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BRU20GH001', 111, 'ST14 CONVERTER UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTA10GR001', 111, 'ST14 BATTERY BANK 220 VDC UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTA20GR001', 111, 'ST14 BATTERY BANK 220 VDC UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTA30GR001', 111, 'ST14 BATTERY BANK 24 VDC UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTA40GR001', 111, 'ST14 BATTERY BANK 24 VDC UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTL10GR001', 111, 'ST14 BATTERY CHARGER 220 VDC UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTL20GR001', 111, 'ST14 BATTERY CHARGER 220 VDC UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTL30GR001', 111, 'ST14 BATTERY CHARGER 24 VDC UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BTL40GR001', 111, 'ST14 BATTERY CHARGER 24 VDC UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BUA10GH001', 111, 'ST14 MCC FOR 220 VDC SYSTEM UNIT ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19BUA20GH001', 111, 'ST14 MCC FOR 24 VDC SYSTEM UNIT ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT19PAA01AT002', 114, 'BAR SCREEN 1 (TWS 1)', 8, 6, 4, 2, 6, 4, 5, 5.30, 6, 31.83, 8, 254.64, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAA02AT002', 114, 'BAR SCREEN 2 (TWS 2)', 8, 6, 4, 2, 6, 4, 5, 5.30, 6, 31.83, 8, 254.64, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAA03AT001', 114, 'TRASHRACK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAB01AA001', 114, 'DISCHARGE VALVE MCW 1', 8, 2, 4, 2, 4, 4, 10, 5.61, 10, 56.06, 2, 112.12, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAB02AA001', 114, 'DISCHARGE VALVE MCW 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAB06AP001', 114, 'MAIN COOLING SEAL & FLUSH PUMP1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PAB06AP002', 114, 'MAIN COOLING SEAL & FLUSH PUMP2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PGC10AP001', 114, 'MAIN COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 2, 5, 4.16, 10, 41.58, 10, 415.76, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PGC20AP001', 114, 'MAIN COOLING WATER PUMP 2', 8, 2, 4, 2, 2, 2, 5, 4.16, 10, 41.58, 4, 166.30, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PGD10AC001', 114, 'HEAT EXCHANGER (CCW) 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PGD20AC001', 114, 'HEAT EXCHANGER (CCW) 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PGF10BB001', 114, 'CLOSED COOLING WATER TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PUG10AT001', 114, 'DEBRIS FILTER 1', 8, 6, 4, 2, 6, 4, 5, 5.30, 4, 21.22, 4, 84.88, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT19PUG10AT002', 114, 'DEBRIS FILTER 2', 8, 6, 4, 2, 6, 4, 5, 5.30, 4, 21.22, 4, 84.88, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21BAA10GA001', 55, 'GT21 IPB - GENERATOR LEADS NEUTRAL POINT', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAA50GA001', 55, 'GT21 IPB - GENERATOR LEADS TO CIRCUIT BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAA60GA001', 55, 'GT21 IPB - MAIN TRAFO LEADS TO CIRCUIT BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAA70GA001', 55, 'GT21 IPB - MAIN TRAFO LEADS TO SFC', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAA80GA001', 55, 'GT21 IPB - MAIN TRAFO LEADS TO BJA', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAC20GS001', 55, 'GT21 BREAKER GENERATOR ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 4, 78.38, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BAT10GT001', 55, 'GT21 GENERATOR MAIN TRANSFORMER ', 8, 4, 4, 6, 4, 2, 5, 5.03, 8, 40.23, 8, 321.82, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BBT10GT100', 55, 'GT21 UNIT AUX TRANSFORMER ', 8, 4, 4, 6, 4, 2, 5, 5.03, 6, 30.17, 6, 181.03, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34');
INSERT INTO `serp_main_equipment` (`serp_main_equipment_id`, `serp_system_id`, `serp_main_equipment_name`, `PT`, `OC`, `PQ`, `SF`, `RT`, `RC`, `PE`, `SCR`, `OCR`, `ACR`, `AFPF`, `MPI`, `serp_pic_id`, `serp_main_equipment_keterangan`, `created_at`, `updated_at`) VALUES
('MT21BCA10GH001', 55, 'GT21 START-UP SELECTION DEVICE (SSD) ', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA00GS401', 55, 'GT21 BREAKER COUPLING TO BFB', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA10GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA10', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA10GS100', 55, 'GT21 BREAKER FEED INCOMER MCC BJA', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA20GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA20', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA30GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA30', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA40GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA40', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA50GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA50', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA60GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA60', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BJA70GH001', 55, 'GT21 LOW VOLTAGE DISTR BJA70', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BPA00GH000', 55, 'GT21 STATIC FREQUENCY CONVERTER', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 10, 195.96, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BRA10GH001', 55, 'GT21 LOW VOLTAGE UPS UNIT', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BRU10GH001', 55, 'GT21 CONVERTER UNIT', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTA10GR001', 55, 'GT21 BATTERY BANK 220 VDC UNIT A', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTB10GR001', 55, 'GT21 BATTERY BANK 220 VDC UNIT B', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTL10GR001', 55, 'GT21 BATTERY CHARGER 220 VDC UNIT A', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 8, 156.77, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTM10GR001', 55, 'GT21 BATTERY CHARGER 220 VDC UNIT B', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTQ10GU001', 55, 'GT21 DC/DC CONVERTER UNIT A', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BTR10GU001', 55, 'GT21 DC/DC CONVERTER UNIT B', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUA10GH001', 55, 'GT21 MCC FOR 220 VDC SYSTEM UNIT 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUB10GH001', 55, 'GT21 MCC FOR 220 VDC SYSTEM UNIT 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUC10GH001', 55, 'GT21 MCC FOR 220 VDC SYSTEM UNIT 3', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUE10GH001', 55, 'GT21 MCC FOR 24 VDC SYSTEM UNIT 1', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUF10GH001', 55, 'GT21 MCC FOR 24 VDC SYSTEM UNIT 2', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21BUG10GH001', 55, 'GT21 MCC FOR 24 VDC SYSTEM UNIT 3', 8, 4, 4, 6, 4, 4, 2, 4.90, 4, 19.60, 2, 39.19, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21CBP10GH001', 55, 'GT21 SYNCHRONATION & KWH METERING', 4, 2, 4, 6, 4, 2, 5, 4.09, 4, 16.35, 6, 98.12, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21CHA10GH001', 55, 'GT21 PROTECTION GENERATOR TRANSFORMATOR', 10, 8, 8, 6, 4, 2, 5, 6.64, 10, 66.44, 8, 531.52, 2, 'AFPF baru diubah tgl 18 juni 2021', '2021-06-18 08:07:54', '2021-06-18 08:07:54'),
('MT21CUA10GH001', 55, 'GT21 STATIC EXCITATION GENERATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21CYE10GH001', 57, 'GT21 FIRE CONTROL UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MBA30HA100', 62, 'GT21 TURBINE CASING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBA30HA300', 62, 'GT21 TURBINE VANE CARRIER', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBA30HA400', 62, 'GT21 TURBINE VANE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA30HA531', 62, 'GT21 STATOR HEAT SHIELD SEGMENT', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA30HB000', 62, 'GT21 TURBINE COMPRESSOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA30HB100', 62, 'GT21 TURBINE ROTOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA30HB400', 62, 'GT21 TURBINE BLADE ROW', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA31AA003', 62, ' GT21 PIP & VLV TURBINE COMP DRAIN ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA80HA100', 62, ' GT21 COMPRESSOR CASING ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA80HA400', 62, 'GT21 COMPRESSOR VANE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA80HA410', 62, 'GT21 VIGV ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA80HA420', 62, 'GT21 COMPRESSOR VANE CARRIER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA80HB400', 62, 'GT21 COMPRESSOR BLADE ROW ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA81AA011', 62, 'GT21 BLOW OFF VALVE 11', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBA81AA012', 62, 'GT21 BLOW OFF VALVE 12', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBA81AA021', 62, 'GT21 BLOW OFF VALVE 2 ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBA81AA031', 62, 'GT21 TURBINE & COMP PIP & BLOW OFF VLV ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBA81AA0313', 62, 'GT21 BLOW OFF VALVE 3', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBB10HA001', 62, 'GT21 EXHAUST CASING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBB10HA002', 62, 'GT21 STACK & SILINCER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBC80HB100', 62, 'GT21 COMPRESSOR ROTOR', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBD10HD001', 62, 'GT21 TURBINE BEARING', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBD20HD001', 62, 'GT21 COMPRESSOR BEARING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBH30AN000', 62, 'GT21 COOL AND SEAL COMPRESSOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBK70AE001', 62, 'GT21 HYDRAULIC JACK ROTOR BARRING', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBL30AN001', 63, 'GT21 COMPRESSOR AIR INTAKE', 8, 2, 4, 2, 2, 2, 5, 4.16, 4, 16.63, 2, 33.26, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBL30AT001', 63, 'GT21 FILTER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBL30BR001', 63, 'GT21 SILENCER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBM30AX010', 64, 'GT21 COMBUSTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBM31AV101', 64, 'GT21 BURNER FUEL', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN31AA001', 65, 'GT21 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN31AT001', 65, 'GT21 FUEL OIL FILTER 40 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN32AP001', 65, 'GT21 FUEL OIL PUMP (SKID)', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN32AT001', 65, 'GT21 FUEL OIL FILTER 20 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN33AT001', 65, 'GT21 FUEL OIL FILTER 5 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN35BB001', 65, 'GT21 FUEL OIL SUMP TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBN50AA000', 65, 'GT21 FUEL OIL DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBP01AA100', 66, 'GT21 MAIN SHUT-OFF VALVE FUEL GAS', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBP50AA000', 66, 'GT21 FUEL GAS DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBU30AT101', 69, 'GT21 TWIN NOX WATER FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBU31AA001', 69, 'GT21 MAIN SHUT-OFF VALVE NOX WATER', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBU32AP001', 69, 'GT21 NOX WATER PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 4, 64.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV10AN001', 70, 'GT21 VAPOR EXTRACTOR FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV10AN002', 70, 'GT21 VAPOR EXTRACTOR FAN 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV10BB001', 70, 'GT21 LUBE OIL TANK', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBV21AC010', 70, 'GT21 LUBE OIL COOLER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV21AP001', 70, 'GT21 MAIN LUBE OIL PUMP 1', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBV21AP002', 70, 'GT21 MAIN LUBE OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV21AT002', 70, 'GT21 TWIN LUBE OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV22AP001', 70, 'GT21 EMERGENCY LUBE OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV50AP001', 70, 'GT21 JACKING OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBV50AP002', 70, 'GT21 JACKING OIL PUMP 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBX21AP001', 71, 'GT21 POWER OIL PUMP 1 ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBX21AP002', 71, 'GT21 POWER OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBX21AT010', 71, 'GT21 POWER OIL FILTER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MBX22AP002', 71, 'GT21 : ROTOR BARRING MOTOR PUMP ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MBX22AP003', 71, 'GT21 : ROTOR BARRING HAND PUMP ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MKA10HA100', 72, 'GT21 GENERATOR STATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKA10HB100', 72, 'GT21 GENERATOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKB10GS100', 72, 'GT21 GENERATOR EXC.BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKC50GT001', 72, 'GT21 GENERATOR EXC.BRUSH GEAR & TRANSFORMATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKF10AN001', 72, 'GT21 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKF10AN0011', 72, 'GT21 COOLER GRUP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MKF10AN002', 72, 'GT21 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKF10AN0022', 72, 'GT21 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MKF10AN003', 72, 'GT21 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21MKF10AN0033', 62, 'GT21 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 4, 64.00, 1, 'not yet defined', '2021-06-18 08:25:24', '2021-06-18 08:25:24'),
('MT21MKF10AP001', 72, 'GT21 COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21MKF10AP002', 72, 'GT21 COOLING WATER PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT21SAA10AH001', 55, 'GT21 HVAC INSTALLATION', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT21SGJ01KD000', 57, 'GT21 CO2 UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BAA10GA001', 137, 'GT22 IPB - GENERATOR LEADS NEUTRAL POINT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BAA50GA001', 137, 'GT22 IPB - GENERATOR LEADS TO CIRCUIT BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BAA60GA001', 137, 'GT22 IPB - MAIN TRAFO LEADS TO CIRCUIT BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BAA80GA001', 137, 'GT22 IPB - MAIN TRAFO LEADS TO BJA', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BAC20GS001', 137, 'GT22 BREAKER GENERATOR ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BBT10GT100', 137, 'GT22 UNIT AUX TRANSFORMER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BCA10GH001', 137, 'GT22 START-UP SELECTION DEVICE (SSD) ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA00GS401', 137, 'GT22 BREAKER COUPLING TO BFB', 6, 4, 6, 2, 6, 2, 1, 4.36, 6, 26.15, 8, 209.23, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA10GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA10', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA10GS100', 137, 'GT22 BREAKER FEED INCOMER MCC BJA', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA20GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA20', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA30GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA30', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA40GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA40', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA50GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA50', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA60GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA60', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BJA70GH001', 137, 'GT22 LOW VOLTAGE DISTR BJA70', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BPA00GH000', 137, 'GT22 STATIC FREQUENCY CONVERTER', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BRA10GH001', 137, 'GT22 LOW VOLTAGE UPS UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BRU10GH001', 137, 'GT22 CONVERTER UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTA10GR001', 137, 'GT22 BATTERY BANK 220 VDC UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTB10GR001', 137, 'GT22 BATTERY BANK 220 VDC UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTL10GR001', 137, 'GT22 BATTERY CHARGER 220 VDC UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 6, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTM10GR001', 137, 'GT22 BATTERY CHARGER 220 VDC UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTQ10GU001', 137, 'GT22 DC/DC CONVERTER UNIT A', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BTR10GU001', 137, 'GT22 DC/DC CONVERTER UNIT B', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 4, 96.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUA10GH001', 137, 'GT22 MCC FOR 220 VDC SYSTEM UNIT 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUB10GH001', 137, 'GT22 MCC FOR 220 VDC SYSTEM UNIT 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUC10GH001', 137, 'GT22 MCC FOR 220 VDC SYSTEM UNIT 3', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUE10GH001', 137, 'GT22 MCC FOR 24 VDC SYSTEM UNIT 1', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUF10GH001', 137, 'GT22 MCC FOR 24 VDC SYSTEM UNIT 2', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22BUG10GH001', 137, 'GT22 MCC FOR 24 VDC SYSTEM UNIT 3', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22CBP10GH001', 137, 'GT22 SYNCHRONATION & KWH METERING', 4, 2, 4, 6, 4, 2, 5, 4.09, 4, 16.35, 6, 98.12, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22CHA10GH001', 137, 'GT22 PROTECTION GENERATOR TRANSFORMATOR ', 10, 8, 8, 6, 8, 2, 5, 7.14, 10, 71.41, 10, 714.14, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22CUA10GH001', 137, 'GT22 STATIC EXCITATION GENERATOR', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22CYE10GH001', 139, 'GT22 FIRE CONTROL UNIT', 8, 2, 4, 6, 2, 4, 2, 4.54, 6, 27.21, 2, 54.43, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MBA30HA100', 144, 'GT22 TURBINE CASING', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HA300', 144, 'GT22 TURBINE VANE CARRIER', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HA400', 144, 'GT22 TURBINE VANE ROW', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HA531', 144, 'GT22 STATOR HEAT SHIELD SEGMENT', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HB000', 144, 'GT22 TURBINE COMPRESSOR', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HB100', 144, 'GT22 TURBINE ROTOR ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA30HB400', 144, 'GT22 TURBINE BLADE ROW', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA31AA003', 144, ' GT22 PIP & VLV TURBINE COMP DRAIN ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA80HA100', 144, ' GT22 COMPRESSOR CASING ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA80HA400', 144, 'GT22 COMPRESSOR VANE ROW ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA80HA410', 144, 'GT22 VIGV ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA80HA420', 144, 'GT22 COMPRESSOR VANE CARRIER ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA80HB400', 144, 'GT22 COMPRESSOR BLADE ROW ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA81AA011', 144, 'GT22 BLOW OFF VALVE 11', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA81AA012', 144, 'GT22 BLOW OFF VALVE 12', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA81AA021', 144, 'GT22 BLOW OFF VALVE 2 ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA81AA031', 144, 'GT22 TURBINE & COMP PIP & BLOW OFF VLV ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBA81AA0313', 144, 'GT22 BLOW OFF VALVE 3', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBB10HA001', 144, 'GT22 EXHAUST CASING', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBB10HA002', 144, 'GT22 STACK & SILINCER', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBC80HB100', 144, 'GT22 COMPRESSOR ROTOR', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBD10HD001', 144, 'GT22 TURBINE BEARING', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBD20HD001', 144, 'GT22 COMPRESSOR BEARING', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBH30AN000', 144, 'GT22 COOL AND SEAL COMPRESSOR ', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBK70AE001', 144, 'GT22 HYDRAULIC JACK ROTOR BARRING', 10, 2, 3, 6, 2, 2, 4, 4.97, 8, 39.77, 2, 79.54, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBL30AN001', 145, 'GT22 COMPRESSOR AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBL30AT001', 145, 'GT22 FILTER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBL30BR001', 145, 'GT22 SILENCER AIR INTAKE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBM30AX010', 146, 'GT22 COMBUSTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBM31AV101', 146, 'GT22 BURNER FUEL', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN31AA001', 147, 'GT22 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MBN31AA0011', 147, 'GT22 MOV FUEL OIL MAIN SHUT-OFF VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 6, 24.00, 2, 48.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN31AT001', 147, 'GT22 FUEL OIL FILTER 40 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN32AP001', 147, 'GT22 FUEL OIL PUMP (SKID)', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN32AT001', 147, 'GT22 FUEL OIL FILTER 20 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN33AT001', 147, 'GT22 FUEL OIL FILTER 5 MICRON', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN35BB001', 147, 'GT22 FUEL OIL SUMP TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBN50AA000', 147, 'GT22 FUEL OIL DRAIN VALVE', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBP01AA100', 148, 'GT22 MAIN SHUT-OFF VALVE FUEL GAS', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBP50AA000', 148, 'GT22 FUEL GAS DRAIN VALVE', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBU30AT101', 151, 'GT22 TWIN NOX WATER FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBU31AA001', 151, 'GT22 MAIN SHUT-OFF VALVE NOX WATER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBU32AP001', 151, 'GT22 NOX WATER PUMP', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV10AN001', 152, 'GT22 VAPOR EXTRACTOR FAN 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV10AN002', 152, 'GT22 VAPOR EXTRACTOR FAN 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV10BB001', 152, 'GT22 LUBE OIL TANK', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV21AC010', 152, 'GT22 LUBE OIL COOLER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV21AP001', 152, 'GT22 MAIN LUBE OIL PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV21AP002', 152, 'GT22 MAIN LUBE OIL PUMP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV21AT002', 152, 'GT22 TWIN LUBE OIL FILTER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV22AP001', 152, 'GT22 EMERGENCY LUBE OIL PUMP', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV50AP001', 152, 'GT22 JACKING OIL PUMP 1 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBV50AP002', 152, 'GT22 JACKING OIL PUMP 2 ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBX21AP001', 153, 'GT22 POWER OIL PUMP 1 ', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBX21AP002', 153, 'GT22 POWER OIL PUMP 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBX21AT010', 153, 'GT22 POWER OIL FILTER ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBX22AP002', 153, 'GT22 : ROTOR BARRING MOTOR PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MBX22AP003', 153, 'GT22 : ROTOR BARRING HAND PUMP ', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MKA10HA100', 154, 'GT22 GENERATOR STATOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKA10HB100', 154, 'GT22 GENERATOR ROTOR', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKB10GS100', 154, 'GT22 GENERATOR EXC.BREAKER', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKC50GT001', 154, 'GT22 GENERATOR EXC.BRUSH GEAR & TRANSFORMATOR', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKF10AN001', 154, 'GT22 COOLER GRUP 1', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKF10AN0011', 154, 'GT22 COOLER GRUP 1', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MKF10AN002', 154, 'GT22 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKF10AN0022', 154, 'GT22 COOLER GRUP 2', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MKF10AN003', 154, 'GT22 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22MKF10AN0033', 154, 'GT22 COOLER GRUP 3', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MKF10AP001', 154, 'GT22 COOLING WATER PUMP 1', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22MKF10AP002', 154, 'GT22 COOLING WATER PUMP 2', 2, 2, 2, 2, 2, 2, 2, 2.00, 2, 4.00, 2, 8.00, 1, 'not yet defined', '2021-06-18 08:25:25', '2021-06-18 08:25:25'),
('MT22SAA10AH001', 137, 'GT22 HVAC INSTALLATION', 2, 4, 2, 2, 4, 2, 5, 3.23, 2, 6.46, 8, 51.67, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34'),
('MT22SGJ01KD000', 139, 'GT22 CO2 UNIT', 8, 2, 4, 2, 2, 4, 2, 4.00, 4, 16.00, 2, 32.00, 2, 'not yet defined', '2021-06-18 08:05:34', '2021-06-18 08:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `serp_pic`
--

CREATE TABLE `serp_pic` (
  `serp_pic_id` bigint(20) UNSIGNED NOT NULL,
  `serp_pic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serp_pic`
--

INSERT INTO `serp_pic` (`serp_pic_id`, `serp_pic_name`, `created_at`, `updated_at`) VALUES
(1, 'Mekanik 1-2', '2021-05-07 04:33:32', '2021-05-20 03:44:09'),
(2, 'Listrik 1-2', '2021-05-07 04:39:04', '2021-05-20 03:43:57'),
(3, 'Konin 1-2', '2021-05-07 04:39:35', '2021-05-20 03:43:44'),
(4, 'Sarana', '2021-05-07 04:39:56', '2021-05-07 04:39:56'),
(5, 'Listrik 3-4', '2021-05-20 03:44:42', '2021-05-20 03:44:42'),
(6, 'Mekanik 3-4', '2021-05-20 03:45:13', '2021-05-20 03:45:13'),
(7, 'Konin 3-4', '2021-05-20 03:45:32', '2021-05-20 03:45:32'),
(8, 'Konin 5', '2021-05-20 03:45:53', '2021-05-20 03:45:53'),
(9, 'Mekanik 5', '2021-05-20 03:46:08', '2021-05-20 03:46:08'),
(10, 'Listrik Blok 5', '2021-05-20 03:46:36', '2021-05-20 03:46:36'),
(11, 'CNG', '2021-05-21 08:15:24', '2021-05-21 08:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `serp_system`
--

CREATE TABLE `serp_system` (
  `serp_system_id` bigint(20) UNSIGNED NOT NULL,
  `serp_unit_id` bigint(20) UNSIGNED NOT NULL,
  `serp_system_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serp_system`
--

INSERT INTO `serp_system` (`serp_system_id`, `serp_unit_id`, `serp_system_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(2, 1, 'CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(3, 1, 'FIRE PROTECTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(4, 1, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(5, 1, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(6, 1, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(7, 1, 'FEEDWATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(8, 1, 'GAS TURBIN SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(9, 1, 'AIR INTAKE GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(10, 1, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(11, 1, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(12, 1, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(13, 1, 'IGNITION FUEL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(14, 1, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(15, 1, 'NOX REDUCER GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(16, 1, 'LUBRICANT GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(17, 1, 'NON-ELECTRICAL CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(18, 1, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(19, 2, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(20, 2, 'CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(21, 2, 'FIRE PROTECTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(22, 2, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(23, 2, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(24, 2, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(25, 2, 'FEEDWATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(26, 2, 'GAS TURBIN SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(27, 2, 'AIR INTAKE GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(28, 2, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(29, 2, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(30, 2, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(31, 2, 'IGNITION FUEL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(32, 2, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(33, 2, 'NOX REDUCER GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(34, 2, 'LUBRICANT GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(35, 2, 'NON-ELECTRICAL CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(36, 2, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(37, 3, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(38, 3, 'CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(39, 3, 'FIRE PROTECTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(40, 3, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(41, 3, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(42, 3, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(43, 3, 'FEEDWATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(44, 3, 'GAS TURBIN SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(45, 3, 'AIR INTAKE GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(46, 3, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(47, 3, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(48, 3, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(49, 3, 'IGNITION FUEL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(50, 3, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(51, 3, 'NOX REDUCER GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(52, 3, 'LUBRICANT GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(53, 3, 'NON-ELECTRICAL CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(54, 3, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(55, 6, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(56, 6, 'CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(57, 6, 'FIRE PROTECTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(58, 6, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(59, 6, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(60, 6, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(61, 6, 'FEEDWATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(62, 6, 'GAS TURBIN SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(63, 6, 'AIR INTAKE GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(64, 6, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(65, 6, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(66, 6, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(67, 6, 'IGNITION FUEL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(68, 6, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(69, 6, 'NOX REDUCER GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(70, 6, 'LUBRICANT GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(71, 6, 'NON-ELECTRICAL CONTROL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(72, 6, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(73, 20, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(74, 20, 'DISTRIBUTION&DC SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(75, 20, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(76, 20, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(77, 20, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(78, 20, 'BLOWDOWN HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(79, 20, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(80, 20, 'FEED WATER ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(81, 20, 'CHEMICAL INJECTION ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(82, 20, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(83, 20, 'TURBINE GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(84, 20, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(85, 20, 'COMPRESSOR GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(86, 20, 'CEMS SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(87, 20, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(88, 20, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(89, 20, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(90, 20, 'NOX WATER GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(91, 20, 'LUBE OIL GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(92, 20, 'COOLING GT SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(93, 20, 'OVERHEAD CRANE SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(94, 21, 'ELECTRICAL ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(95, 21, 'GENERATOR ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(96, 21, 'TRAFO ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(97, 21, 'DISTRIBUTION&DC SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(98, 21, 'FEED WATER ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(99, 21, 'CONDENSOR ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(100, 21, 'DRAIN&VENTING ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(101, 21, 'CHEMICAL INJECTION ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(102, 21, 'STEAM TURBINE ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(103, 21, 'TURBINE ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(104, 21, 'COOLING ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(105, 21, 'AIR REMOVAL ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(106, 21, 'STARTING ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(107, 21, 'LUBRICANT ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(108, 21, 'GLAND STEAM ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(109, 21, 'HYDRAULIC ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(110, 21, 'OVERHEAD CRANE SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(111, 4, 'ELECTRICAL ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(112, 4, 'TRAFO ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(113, 4, 'HYDRAULIC & CONTROL ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(114, 4, 'COOLING WATER SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(115, 4, 'LUBE OIL ST SYSTEM', '2021-05-27 15:59:47', '2021-05-27 15:59:47'),
(116, 4, 'FEEDWATER ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(117, 4, 'CONDENSATE ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(118, 4, 'STEAM TURBIN SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(119, 4, 'VACUUM ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(120, 4, 'GENERATOR ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(121, 22, 'DISTRIBUTION&DC SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(122, 22, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(123, 22, 'TRAFO ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(124, 22, 'HVAC & LIGHTING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(125, 22, 'EDG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(126, 22, 'MAIN COOLING WATER SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(127, 22, 'FUEL OIL FORWADING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(128, 22, 'FUEL GAS SUPPLY SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(129, 22, 'DEMINERALIZED PLAN SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(130, 22, 'DESALINATION PLANT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(131, 22, 'WWSP SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(132, 22, 'CHLORINATION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(133, 22, 'WATER SAMPLE ST SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(134, 22, 'POTABLE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(135, 22, 'AIR INSTRUMENT & SERVICE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(136, 22, 'OVERHEAD CRANE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(137, 7, 'ELECTRICAL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(138, 7, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(139, 7, 'FIRE PROTECTION GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(140, 7, 'ECONOMIZER HRSG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(141, 7, 'EVAPORATOR HRSG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(142, 7, 'SUPERHEATER HRSG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(143, 7, 'FEEDWATER HRSG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(144, 7, 'GAS TURBIN SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(145, 7, 'AIR INTAKE GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(146, 7, 'COMBUSTION GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(147, 7, 'FUEL OIL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(148, 7, 'FUEL GAS GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(149, 7, 'IGNITION FUEL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(150, 7, 'DIVERTER DAMPER HRSG SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(151, 7, 'NOX REDUCER GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(152, 7, 'LUBRICANT GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(153, 7, 'NON-ELECTRICAL CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(154, 7, 'GENERATOR GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(155, 10, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(156, 10, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(157, 10, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(158, 10, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(159, 10, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(160, 10, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(161, 10, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(162, 10, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(163, 10, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(164, 10, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(165, 11, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(166, 11, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(167, 11, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(168, 11, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(169, 11, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(170, 11, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(171, 11, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(172, 11, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(173, 11, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(174, 11, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(175, 12, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(176, 12, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(177, 12, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(178, 12, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(179, 12, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(180, 12, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(181, 12, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(182, 12, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(183, 12, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(184, 12, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(185, 15, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(186, 15, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(187, 15, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(188, 15, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(189, 15, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(190, 15, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(191, 15, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(192, 15, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(193, 15, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(194, 15, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(195, 16, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(196, 16, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(197, 16, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(198, 16, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(199, 16, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(200, 16, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(201, 16, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(202, 16, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(203, 16, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(204, 16, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(205, 17, 'AIR INTAKE SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(206, 17, 'FUEL GAS SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(207, 17, 'FUEL OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(208, 17, 'COMPRESSOR SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(209, 17, 'LUBE OIL SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(210, 17, 'CONTROL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(211, 17, 'COOLING SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(212, 17, 'ELECTRICAL GT SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(213, 17, 'FIRE PROTECTION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48'),
(214, 17, 'IGNITION SYSTEM', '2021-05-27 15:59:48', '2021-05-27 15:59:48');

-- --------------------------------------------------------

--
-- Table structure for table `serp_unit`
--

CREATE TABLE `serp_unit` (
  `serp_unit_id` bigint(20) UNSIGNED NOT NULL,
  `serp_blok_id` bigint(20) UNSIGNED NOT NULL,
  `serp_unit_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `serp_unit`
--

INSERT INTO `serp_unit` (`serp_unit_id`, `serp_blok_id`, `serp_unit_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'GT 1.1', '2021-05-06 08:57:46', '2021-05-06 08:57:46'),
(2, 1, 'GT 1.2', '2021-05-07 02:29:23', '2021-05-07 02:52:12'),
(3, 1, 'GT 1.3', '2021-05-20 03:32:06', '2021-05-20 03:33:42'),
(4, 1, 'ST 1.4', '2021-05-20 03:32:40', '2021-05-20 03:32:40'),
(5, 1, 'BOP 1-2', '2021-05-20 03:34:22', '2021-05-20 03:34:58'),
(6, 2, 'GT 2.1', '2021-05-20 03:35:22', '2021-05-20 03:35:22'),
(7, 2, 'GT 2.2', '2021-05-20 03:35:55', '2021-05-20 03:35:55'),
(10, 3, 'GT 3.1', '2021-05-20 03:38:35', '2021-05-20 03:38:35'),
(11, 3, 'GT 3.2', '2021-05-20 03:38:50', '2021-05-20 03:38:50'),
(12, 3, 'GT 3.3', '2021-05-20 03:39:06', '2021-05-20 03:39:06'),
(15, 4, 'GT 4.1', '2021-05-20 03:39:27', '2021-05-20 03:39:27'),
(16, 4, 'GT 4.2', '2021-05-20 03:39:44', '2021-05-20 03:39:44'),
(17, 4, 'GT 4.3', '2021-05-20 03:40:02', '2021-05-20 03:40:02'),
(20, 5, 'GT 5.1', '2021-05-20 03:40:29', '2021-05-20 03:40:29'),
(21, 5, 'ST 5.8', '2021-05-20 03:40:44', '2021-05-20 03:40:44'),
(22, 5, 'BOP 5', '2021-05-20 03:41:25', '2021-05-20 03:41:25');

-- --------------------------------------------------------

--
-- Table structure for table `spv_approval`
--

CREATE TABLE `spv_approval` (
  `spv_approval_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_ecp_id` bigint(20) UNSIGNED NOT NULL,
  `spv_approval_alasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spv_approval`
--

INSERT INTO `spv_approval` (`spv_approval_id`, `ecp_no`, `user_nid`, `status_ecp_id`, `spv_approval_alasan`, `created_at`, `updated_at`) VALUES
(19, '79/ECP/22/Jun/2021', '8207014JA', 2, 'good', '2021-06-22 03:12:04', '2021-06-22 03:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `spv_so`
--

CREATE TABLE `spv_so` (
  `spv_so_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_nid` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_so` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spv_so_review` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spv_so`
--

INSERT INTO `spv_so` (`spv_so_id`, `ecp_no`, `user_nid`, `staff_so`, `spv_so_review`, `created_at`, `updated_at`) VALUES
(1, '79/ECP/22/Jun/2021', '8007020JA', '8506040JA', 'kerjakan', '2021-06-23 07:41:00', '2021-06-23 07:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `status_ecp`
--

CREATE TABLE `status_ecp` (
  `status_ecp_id` bigint(20) UNSIGNED NOT NULL,
  `status_ecp_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_ecp`
--

INSERT INTO `status_ecp` (`status_ecp_id`, `status_ecp_name`, `created_at`, `updated_at`) VALUES
(1, 'Revised', '2021-04-15 04:44:14', '2021-04-15 04:44:14'),
(2, 'Approved', '2021-04-15 04:44:14', '2021-04-15 04:44:14'),
(3, 'Rejected', '2021-04-15 04:44:14', '2021-04-15 04:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `tindaklanjut`
--

CREATE TABLE `tindaklanjut` (
  `tindaklanjut_id` int(10) UNSIGNED NOT NULL,
  `ecp_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindaklanjut_notulis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindaklanjut_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tindaklanjut_file_terkait` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tindaklanjut`
--

INSERT INTO `tindaklanjut` (`tindaklanjut_id`, `ecp_no`, `tindaklanjut_notulis`, `tindaklanjut_deskripsi`, `tindaklanjut_file_terkait`, `created_at`, `updated_at`) VALUES
(11, '79/ECP/22/Jun/2021', '33333333AE', 'wafsghfdgh', 'tindaklanjut_files/serp.png', '2021-06-23 09:18:42', '2021-06-23'),
(13, '79/ECP/22/Jun/2021', '33333333AE', 'xfycghj', 'tindaklanjut_files/Screenshot_2.png', '2021-06-30 17:43:53', '2021-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `unit_name` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `unit_name`, `created_at`, `updated_at`) VALUES
(1, 'Engineering & Quality Assurance', '2021-04-22 09:45:02', '2021-04-22 09:45:02'),
(2, 'Operasi', '2021-04-22 09:45:02', '2021-04-22 09:45:02'),
(3, 'Pemeliharaan', '2021-04-22 09:45:02', '2021-04-22 09:45:02'),
(4, 'Keuangan & Administrasi', '2021-04-22 09:45:02', '2021-04-22 09:45:02'),
(5, 'Logistik', '2021-04-22 09:45:02', '2021-04-22 09:45:02'),
(6, 'CNG & Bahan Bakar', '2021-04-22 09:45:02', '2021-04-22 09:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `urgensi`
--

CREATE TABLE `urgensi` (
  `urgensi_id` bigint(20) UNSIGNED NOT NULL,
  `urgensi_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `urgensi`
--

INSERT INTO `urgensi` (`urgensi_id`, `urgensi_name`, `created_at`, `updated_at`) VALUES
(1, 'Low', '2021-06-20 08:05:37', '2021-06-20 08:05:37'),
(2, 'Medium', '2021-06-20 08:05:37', '2021-06-20 08:05:37'),
(3, 'High', '2021-06-20 08:06:25', '2021-06-20 08:06:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_nid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `fungsi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_nid`, `user_name`, `jabatan_id`, `unit_id`, `fungsi_id`, `role_id`, `user_email`, `password`, `created_at`, `updated_at`) VALUES
('11111111ST', 'STAFF 1 SO Blok 3 4', 4, 1, 2, 5, 'staff1@gmail.com', '$2y$10$falV8Ir6H4y6rpRhkWkieuWyS0fC2B0j72RsIc/JiqULqeINDuwTS', '2021-04-22 11:06:50', '2021-04-22 11:06:50'),
('11223344AA', 'Andriansyah', 1, 1, 1, 1, 'andrian7@gmail.com', '$2y$10$CqAS2en/fEhQAifRA1oAVeNjg2MEI19d0soOYCvrsbR6WLyouvjBa', '2021-04-22 03:12:37', '2021-06-02 07:40:57'),
('1STAFFOP', 'STAFF RENDAL OP', 4, 2, 8, 5, NULL, '$2y$10$J2mXUOCUhVwbVF1KVUOLG.73idnOnzDJYLfz0v.m4Q6IVNxtSrxqW', '2021-06-10 11:22:29', '2021-06-10 11:22:29'),
('22222222ST', 'STAFF SO Blok 125', 4, 1, 1, 5, 'staff2@gmail.com', '$2y$10$oFsi6qPJBZBrlI8etUB1bOQh0Uhh6lcZmd1Rcn6UaMinAO7faZuDS', '2021-04-22 11:08:08', '2021-04-22 11:08:08'),
('33333333AE', 'ADMIN ENG 1', 3, 1, 1, 4, 'admin@gmail.com', '$2y$10$N3YJJ7UCnzKOlLCTclLjs.SJvIeMUNmBWO2e2c62poRojmcNTXgai', '2021-04-22 11:00:47', '2021-06-21 05:21:29'),
('7493284K3', 'Ateng Sobari', 9, 1, 1, 5, NULL, '$2y$10$sfl2Q/OSZL8gaJ/cnbJQLOvLzILcaiNG6I9nFK3ujEQ.VqLM7cNgK', '2021-06-02 07:02:10', '2021-06-02 07:40:26'),
('7493284K3ADM', 'Ateng Sobari', 9, 1, 1, 4, NULL, '$2y$10$kad7rGX1A46m.htSbbQgz.NUe9itf8Ozb3bVZli3d082Pg5tkFHum', '2021-06-02 06:52:36', '2021-06-02 07:38:29'),
('7906106JA', 'TRENINDYA GUNAWAN', 1, 2, 7, 2, NULL, '$2y$10$GHhaiWIVmt5lEij53HUZguyPKog.SCm/0moypRFOLWooIUp4qnf4e', '2021-06-10 11:19:43', '2021-06-10 11:19:43'),
('8007020JA', 'BAROKAH SUTATRI', 2, 1, 2, 3, 'barokah@gmail.com', '$2y$10$KMYzUiq.YVP/c.Rf32f.D.C/Ahdt0jZ.nR0othDWoyeKM5BggtFQ.', '2021-04-22 10:29:51', '2021-04-22 10:29:51'),
('8207014JA', 'MUCHLISIN', 2, 2, 8, 3, NULL, '$2y$10$lMg/YhhRoIQNqCC4VyK4QOk4h7U8L2Lqjd5NkQsW/McHMFMLyDfrW', '2021-06-10 11:20:22', '2021-06-10 11:20:22'),
('8308062JA', 'YULI FITRIANINGRUM', 2, 1, 6, 3, 'yuli@gmail.com', '$2y$10$rSeYWlo/AD9FYLNXWuLBF.DdChqhjHZYwXp/azcIGIra6YSSsmXuy', '2021-04-22 10:37:05', '2021-04-22 10:37:05'),
('8308099JA', 'ARIF CATUR PRASETYO', 2, 1, 1, 3, 'arif@gmail.com', '$2y$10$we2xHF2bRgF7vgzoONGAHueI1qKNLIilMVoVD1Eldakl8LwTOAf0y', '2021-04-22 10:22:31', '2021-04-22 10:22:31'),
('8506040JA', 'Eko Supriyanto', 8, 1, 2, 5, NULL, '$2y$10$TvrvfPsH572KC7PUo5IWMOsusur.NhEg1eTGzXsuyFrmjvrWLgqOS', '2021-06-02 07:46:00', '2021-06-03 02:23:19'),
('8506040JAADM', 'Eko Supriyanto', 8, 1, 2, 4, NULL, '$2y$10$OJcA/3UFJbVqY9BoR7BnFO.Jpzq1JH3vNh1PiUpR772eFUcqXeNT.', '2021-06-02 07:47:00', '2021-06-03 02:22:42'),
('8509053JA', 'VERRY MARDIANANTA ARSANA', 1, 1, 4, 2, 'verry@gmail.com', '$2y$10$Vu.UVZGC4YCwVzrsvQM4m.b.lJ4Xqy.LwYnealWrM1GjGqA2RS3b6', '2021-04-22 10:25:23', '2021-04-22 10:25:23'),
('8609069JA', 'Taufik Hidayat Jomantara', 8, 1, 1, 5, NULL, '$2y$10$5ZwsujntURJ84ly7JQJgke9iDtBQuF5GNsL11Fdms0LDUhOqXIaKe', '2021-06-02 07:44:58', '2021-06-02 07:44:58'),
('8609069JAADM', 'Taufik Hidayat Jomantara', 8, 1, 1, 4, NULL, '$2y$10$ti3m6KQkRFotDBoxttbZ..FQbcPFGd6kf0u/UkXl6lna5KwPvpVqe', '2021-06-02 07:43:53', '2021-06-02 07:43:53'),
('8610102JA', 'IMAN FIRMANSYAH', 2, 1, 3, 3, 'iman@gmail.com', '$2y$10$Q7lf0rr/GcBwBICTi2qnDeMBQbUrKwADRCWElcLfZwEJgAewYwInW', '2021-04-22 10:31:46', '2021-04-22 10:31:46'),
('8711044JA', 'Rahmat Alqadri', 8, 1, 1, 5, NULL, '$2y$10$8iyOa/3lCA8zfH/1b.D3p.alQX2YRYEuSufjm4/OXoUcy83WR1KZ6', '2021-06-02 07:47:35', '2021-06-02 07:47:35'),
('8711044JAADM', 'Rahmat Alqadri', 8, 1, 1, 4, NULL, '$2y$10$07TGvEme/z2BlkgxV38bMeDmFf/kwKa7hQZ9Z/i79y69iAfEniEYW', '2021-06-02 07:46:08', '2021-06-02 07:46:08'),
('8711053JA', 'Muhammad Faishol Arif', 8, 1, 2, 5, NULL, '$2y$10$Uoii4VvsyacIzQBsL/mKlOS8F1f5pQ7NG9pKXj565igFoOFfzb/ce', '2021-06-02 07:46:00', '2021-06-03 02:23:42'),
('8711053JAADM', 'Muhammad Faishol Arif', 8, 1, 2, 4, NULL, '$2y$10$ril1a1IAnUNFtm5jwefIOuC3/z8z82V6WC2ulFuozHXkQE0S.6Hfy', '2021-06-02 07:47:00', '2021-06-03 02:23:58'),
('8714118ZJY', 'Diah Wulandari', 8, 1, 1, 5, NULL, '$2y$10$oY77xRVW.msEead3.q/6genn56f8YTi2aUyz5F9Cx/ToGe4mbxisC', '2021-06-02 07:47:00', '2021-06-03 02:24:47'),
('8714118ZJYADM', 'Diah Wulandari', 8, 1, 1, 4, NULL, '$2y$10$GEnw/hT379ld2N1t1C.h6.FQ2ErbK9kSu21vPdSTRokn5kNXXLL3e', '2021-06-02 07:46:00', '2021-06-03 02:24:28'),
('8914113ZJY', 'Tri Yudho Hariyo Pamungkas', 8, 1, 1, 5, NULL, '$2y$10$QbZAsOZQo9Uh4dNVcQ9zPeqLLQTNk58KS1TFksJu/SRZrUqMwx0By', '2021-06-02 07:46:00', '2021-06-03 02:53:13'),
('8914113ZJYADM', 'Tri Yudho Hariyo Pamungkas', 8, 1, 1, 4, NULL, '$2y$10$yIJihnlEwPwKTY.W3J5eDuBqMAsHgxxHV.ua31fg/D/n2twQx6p9O', '2021-06-02 07:47:00', '2021-06-03 02:52:26'),
('8914121ZJY', 'Adimas Adrian Abimanyu', 8, 1, 1, 5, NULL, '$2y$10$Zkv/XM0DPWK.gpLGC9lvpOrCNHpoZvqRb64ipC9gPT1xAV42325p.', '2021-06-02 07:47:00', '2021-06-03 02:26:24'),
('8914121ZJYADM', 'Adimas Adrian Abimanyu', 8, 1, 1, 4, NULL, '$2y$10$1Nk4qEIuZ6aeUqQCLgeTnOjVZJ58GZypFRkbJrxq6FpcjSQWK3mT.', '2021-06-02 07:46:00', '2021-06-03 02:26:07'),
('8914124ZJY', 'Hendra Gunawan Susanto', 8, 1, 2, 5, NULL, '$2y$10$u1S24b485VcfGAmyf07ikOu57YaJZiNnYFdVMBoTteRQwmISz6UlC', '2021-06-02 07:47:00', '2021-06-03 02:27:09'),
('8914124ZJYADM', 'Hendra Gunawan Susanto', 8, 1, 2, 4, NULL, '$2y$10$kZ2IOmF.V0QOLRrZAc7YueLSreDQo6G/fEOQL/grdEE7MoZWyQQ4S', '2021-06-02 07:46:00', '2021-06-03 02:26:55'),
('8914136ZJY', 'Tito Karosekali', 8, 1, 2, 5, NULL, '$2y$10$Fc9Uyj3aLN4Z8ijAgV/ZOevBK8N8fU8XhEfqp.GR5U5ITSpQ7zoYC', '2021-06-02 07:47:00', '2021-06-03 02:27:51'),
('8914136ZJYADM', 'Tito Karosekali', 8, 1, 2, 4, NULL, '$2y$10$nohW5aAn9fTqawMJ8NtdLO0GXvQ9ZTygsB4mRnFkAJsb75jn.yOv6', '2021-06-02 07:46:00', '2021-06-03 02:27:35'),
('8915093ZJY', 'I KOMANG ARTHA WINADI', 2, 1, 5, 3, 'komang@gmail.com', '$2y$10$1uNPDU43acKhUGcGhqw5z.Cq6B6UigfRdO6HjHRi6KT7tbuc4cajy', '2021-04-22 10:36:12', '2021-04-22 10:36:12'),
('9011190JA', 'Anwar Gojali', 8, 1, 2, 5, NULL, '$2y$10$w8LZdKbqKJ9csc2AzmcZpeuao.8NHTHZcD6FlUMgDoS3WSyueTQRq', '2021-06-02 07:47:00', '2021-06-03 02:28:29'),
('9011190JAADM', 'Anwar Gojali', 8, 1, 2, 4, NULL, '$2y$10$hkmD0/A5lQ.pXr.II6gkLOxez9YbZGTUcyVN36s.YcDYHPB8I7Nq2', '2021-06-02 07:46:00', '2021-06-03 02:28:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecm_review`
--
ALTER TABLE `ecm_review`
  ADD PRIMARY KEY (`ecm_review_id`),
  ADD KEY `ecm_review_ecp_no_foreign` (`ecp_no`),
  ADD KEY `ecm_review_user_nid_foreign` (`user_nid`);

--
-- Indexes for table `ecp`
--
ALTER TABLE `ecp`
  ADD PRIMARY KEY (`ecp_no`),
  ADD KEY `ecp_user_nid_foreign` (`user_nid`),
  ADD KEY `ecp_approval_1_foreign` (`ecp_approval_1`),
  ADD KEY `ecp_approval_2_foreign` (`ecp_approval_2`),
  ADD KEY `progres_id_foreign` (`progres_id`),
  ADD KEY `urgensi_id_foreign` (`urgensi_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD PRIMARY KEY (`fungsi_id`),
  ADD KEY `fungsi_unit_id_foreign` (`unit_id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indexes for table `manager_approval`
--
ALTER TABLE `manager_approval`
  ADD PRIMARY KEY (`manager_approval_id`),
  ADD KEY `manager_approval_user_nid_foreign` (`user_nid`),
  ADD KEY `manager_approval_ecp_no_foreign` (`ecp_no`),
  ADD KEY `manager_approval_status_ecp_id_foreign` (`status_ecp_id`);

--
-- Indexes for table `meqa_approval`
--
ALTER TABLE `meqa_approval`
  ADD PRIMARY KEY (`meqa_approval_id`),
  ADD KEY `meqa_approval_ecp_no_foreign` (`ecp_no`),
  ADD KEY `meqa_approval_spv_so_foreign` (`spv_so`),
  ADD KEY `meqa_approval_status_ecp_id_foreign` (`status_ecp_id`),
  ADD KEY `meqa_approval_user_nid_foreign` (`user_nid`);

--
-- Indexes for table `meqa_cek`
--
ALTER TABLE `meqa_cek`
  ADD PRIMARY KEY (`meqa_id`),
  ADD KEY `meqa_cek_ecp_no_foreign` (`ecp_no`),
  ADD KEY `meqa_cek_status_ecp_id_foreign` (`status_ecp_id`),
  ADD KEY `meqa_cek_user_nid_foreign` (`user_nid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notulen`
--
ALTER TABLE `notulen`
  ADD PRIMARY KEY (`notulen_id`),
  ADD KEY `notulen_ecp_no_foreign` (`ecp_no`),
  ADD KEY `notulen_notulen_notulis_foreign` (`notulen_notulis`),
  ADD KEY `notulen_notulen_pimpinan_rapat_foreign` (`notulen_pimpinan_rapat`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`progres_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `serp_blok`
--
ALTER TABLE `serp_blok`
  ADD PRIMARY KEY (`serp_blok_id`);

--
-- Indexes for table `serp_main_equipment`
--
ALTER TABLE `serp_main_equipment`
  ADD PRIMARY KEY (`serp_main_equipment_id`),
  ADD KEY `serp_main_equipment_serp_system_id_foreign` (`serp_system_id`),
  ADD KEY `serp_main_equipment_serp_pic_id_foreign` (`serp_pic_id`);

--
-- Indexes for table `serp_pic`
--
ALTER TABLE `serp_pic`
  ADD PRIMARY KEY (`serp_pic_id`);

--
-- Indexes for table `serp_system`
--
ALTER TABLE `serp_system`
  ADD PRIMARY KEY (`serp_system_id`),
  ADD KEY `serp_system_serp_unit_id_foreign` (`serp_unit_id`);

--
-- Indexes for table `serp_unit`
--
ALTER TABLE `serp_unit`
  ADD PRIMARY KEY (`serp_unit_id`),
  ADD KEY `serp_unit_serp_blok_id_foreign` (`serp_blok_id`);

--
-- Indexes for table `spv_approval`
--
ALTER TABLE `spv_approval`
  ADD PRIMARY KEY (`spv_approval_id`),
  ADD KEY `spv_approval_user_nid_foreign` (`user_nid`),
  ADD KEY `spv_approval_ecp_no_foreign` (`ecp_no`),
  ADD KEY `spv_approval_status_ecp_id_foreign` (`status_ecp_id`);

--
-- Indexes for table `spv_so`
--
ALTER TABLE `spv_so`
  ADD PRIMARY KEY (`spv_so_id`),
  ADD KEY `spv_so_ecp_no_foreign` (`ecp_no`),
  ADD KEY `spv_so_staff_so_foreign` (`staff_so`),
  ADD KEY `spv_so_user_nid_foreign` (`user_nid`);

--
-- Indexes for table `status_ecp`
--
ALTER TABLE `status_ecp`
  ADD PRIMARY KEY (`status_ecp_id`);

--
-- Indexes for table `tindaklanjut`
--
ALTER TABLE `tindaklanjut`
  ADD PRIMARY KEY (`tindaklanjut_id`),
  ADD KEY `tindaklanjut_ecp_no_foreign` (`ecp_no`),
  ADD KEY `tindaklanjut_tindaklanjut_notulis_foreign` (`tindaklanjut_notulis`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `urgensi`
--
ALTER TABLE `urgensi`
  ADD PRIMARY KEY (`urgensi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_nid`),
  ADD KEY `user_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `user_role_id_foreign` (`role_id`),
  ADD KEY `user_unit_id_foreign` (`unit_id`),
  ADD KEY `user_fungsi_id_foreign` (`fungsi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecm_review`
--
ALTER TABLE `ecm_review`
  MODIFY `ecm_review_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fungsi`
--
ALTER TABLE `fungsi`
  MODIFY `fungsi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `jabatan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manager_approval`
--
ALTER TABLE `manager_approval`
  MODIFY `manager_approval_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `meqa_approval`
--
ALTER TABLE `meqa_approval`
  MODIFY `meqa_approval_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meqa_cek`
--
ALTER TABLE `meqa_cek`
  MODIFY `meqa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `notulen`
--
ALTER TABLE `notulen`
  MODIFY `notulen_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `progres_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `serp_blok`
--
ALTER TABLE `serp_blok`
  MODIFY `serp_blok_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `serp_pic`
--
ALTER TABLE `serp_pic`
  MODIFY `serp_pic_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `serp_system`
--
ALTER TABLE `serp_system`
  MODIFY `serp_system_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `serp_unit`
--
ALTER TABLE `serp_unit`
  MODIFY `serp_unit_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `spv_approval`
--
ALTER TABLE `spv_approval`
  MODIFY `spv_approval_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `spv_so`
--
ALTER TABLE `spv_so`
  MODIFY `spv_so_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_ecp`
--
ALTER TABLE `status_ecp`
  MODIFY `status_ecp_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tindaklanjut`
--
ALTER TABLE `tindaklanjut`
  MODIFY `tindaklanjut_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `urgensi`
--
ALTER TABLE `urgensi`
  MODIFY `urgensi_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ecm_review`
--
ALTER TABLE `ecm_review`
  ADD CONSTRAINT `ecm_review_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`),
  ADD CONSTRAINT `ecm_review_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`);

--
-- Constraints for table `ecp`
--
ALTER TABLE `ecp`
  ADD CONSTRAINT `ecp_approval_1_foreign` FOREIGN KEY (`ecp_approval_1`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ecp_approval_2_foreign` FOREIGN KEY (`ecp_approval_2`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ecp_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `progres_id_foreign` FOREIGN KEY (`progres_id`) REFERENCES `progres` (`progres_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `urgensi_id_foreign` FOREIGN KEY (`urgensi_id`) REFERENCES `urgensi` (`urgensi_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fungsi`
--
ALTER TABLE `fungsi`
  ADD CONSTRAINT `fungsi_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`);

--
-- Constraints for table `manager_approval`
--
ALTER TABLE `manager_approval`
  ADD CONSTRAINT `manager_approval_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manager_approval_status_ecp_id_foreign` FOREIGN KEY (`status_ecp_id`) REFERENCES `status_ecp` (`status_ecp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `manager_approval_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meqa_approval`
--
ALTER TABLE `meqa_approval`
  ADD CONSTRAINT `meqa_approval_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meqa_approval_spv_so_foreign` FOREIGN KEY (`spv_so`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meqa_approval_status_ecp_id_foreign` FOREIGN KEY (`status_ecp_id`) REFERENCES `status_ecp` (`status_ecp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meqa_approval_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `meqa_cek`
--
ALTER TABLE `meqa_cek`
  ADD CONSTRAINT `meqa_cek_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meqa_cek_status_ecp_id_foreign` FOREIGN KEY (`status_ecp_id`) REFERENCES `status_ecp` (`status_ecp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meqa_cek_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notulen`
--
ALTER TABLE `notulen`
  ADD CONSTRAINT `notulen_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notulen_notulen_notulis_foreign` FOREIGN KEY (`notulen_notulis`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notulen_notulen_pimpinan_rapat_foreign` FOREIGN KEY (`notulen_pimpinan_rapat`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `serp_main_equipment`
--
ALTER TABLE `serp_main_equipment`
  ADD CONSTRAINT `serp_main_equipment_serp_pic_id_foreign` FOREIGN KEY (`serp_pic_id`) REFERENCES `serp_pic` (`serp_pic_id`),
  ADD CONSTRAINT `serp_main_equipment_serp_system_id_foreign` FOREIGN KEY (`serp_system_id`) REFERENCES `serp_system` (`serp_system_id`);

--
-- Constraints for table `serp_system`
--
ALTER TABLE `serp_system`
  ADD CONSTRAINT `serp_system_serp_unit_id_foreign` FOREIGN KEY (`serp_unit_id`) REFERENCES `serp_unit` (`serp_unit_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `serp_unit`
--
ALTER TABLE `serp_unit`
  ADD CONSTRAINT `serp_unit_serp_blok_id_foreign` FOREIGN KEY (`serp_blok_id`) REFERENCES `serp_blok` (`serp_blok_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spv_approval`
--
ALTER TABLE `spv_approval`
  ADD CONSTRAINT `spv_approval_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spv_approval_status_ecp_id_foreign` FOREIGN KEY (`status_ecp_id`) REFERENCES `status_ecp` (`status_ecp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spv_approval_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `spv_so`
--
ALTER TABLE `spv_so`
  ADD CONSTRAINT `spv_so_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spv_so_staff_so_foreign` FOREIGN KEY (`staff_so`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spv_so_user_nid_foreign` FOREIGN KEY (`user_nid`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tindaklanjut`
--
ALTER TABLE `tindaklanjut`
  ADD CONSTRAINT `tindaklanjut_ecp_no_foreign` FOREIGN KEY (`ecp_no`) REFERENCES `ecp` (`ecp_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tindaklanjut_tindaklanjut_notulis_foreign` FOREIGN KEY (`tindaklanjut_notulis`) REFERENCES `user` (`user_nid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_fungsi_id_foreign` FOREIGN KEY (`fungsi_id`) REFERENCES `fungsi` (`fungsi_id`),
  ADD CONSTRAINT `user_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`jabatan_id`),
  ADD CONSTRAINT `user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`),
  ADD CONSTRAINT `user_unit_id_foreign` FOREIGN KEY (`unit_id`) REFERENCES `unit` (`unit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
