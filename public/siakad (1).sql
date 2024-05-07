-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2024 at 11:39 PM
-- Server version: 8.3.0
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_installment_approvals`
--

CREATE TABLE `log_installment_approvals` (
  `id` int NOT NULL,
  `installment_request_id` int DEFAULT NULL,
  `approver_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_study_plan_approvals`
--

CREATE TABLE `log_study_plan_approvals` (
  `id` int NOT NULL,
  `academic_record_id` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `approver_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_academic_events`
--

CREATE TABLE `master_academic_events` (
  `id` int NOT NULL,
  `event_id` int DEFAULT NULL,
  `academic_period_id` int DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_academic_periods`
--

CREATE TABLE `master_academic_periods` (
  `id` int NOT NULL,
  `year` smallint DEFAULT NULL,
  `term` smallint DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_class`
--

CREATE TABLE `master_class` (
  `id` int NOT NULL,
  `subject_curriculum_id` int DEFAULT NULL,
  `curriculum_id` int DEFAULT NULL,
  `academic_period_id` int DEFAULT NULL,
  `institution_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `capacity` smallint DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_conversion_scores`
--

CREATE TABLE `master_conversion_scores` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `assessment_weight` decimal(3,2) DEFAULT NULL,
  `pass_flag` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_curriculums`
--

CREATE TABLE `master_curriculums` (
  `id` int NOT NULL,
  `institution_id` int DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `total_credit` smallint DEFAULT NULL,
  `mandatory_credit` smallint DEFAULT NULL,
  `optional_credit` smallint DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_education_programs`
--

CREATE TABLE `master_education_programs` (
  `id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_graduate_students`
--

CREATE TABLE `master_graduate_students` (
  `id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `academic_period_id` int DEFAULT NULL,
  `status_id` int DEFAULT NULL,
  `graduation_year` smallint DEFAULT NULL,
  `diploma_number` varchar(255) DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `sk_number` varchar(255) DEFAULT NULL,
  `sk_date` date DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_institutions`
--

CREATE TABLE `master_institutions` (
  `id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `short_name` varchar(255) DEFAULT NULL,
  `education_program_id` int DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `institution_type_id` int DEFAULT NULL,
  `head_id` int DEFAULT NULL,
  `accreditation` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_lectures`
--

CREATE TABLE `master_lectures` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text,
  `province_id` int DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  `district_id` int DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_students`
--

CREATE TABLE `master_students` (
  `id` int NOT NULL,
  `reg_number_national` varchar(255) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` text,
  `province_id` int DEFAULT NULL,
  `city_id` int DEFAULT NULL,
  `district_id` int DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `school_origin` varchar(255) DEFAULT NULL,
  `school_type_id` int DEFAULT NULL,
  `graduation_year` smallint DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `father_phone` varchar(255) DEFAULT NULL,
  `father_sid` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `mother_sid` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_subjects`
--

CREATE TABLE `master_subjects` (
  `id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `credit` smallint DEFAULT NULL,
  `institution_id` int DEFAULT NULL,
  `is_mandatory` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_19_000000_create_failed_jobs_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2024_04_28_135540_create_permission_tables', 1),
(4, '2024_05_07_231127_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution_id` int DEFAULT NULL,
  `model_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_class`
--

CREATE TABLE `pddikti_class` (
  `id` int NOT NULL,
  `class_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_curriculums`
--

CREATE TABLE `pddikti_curriculums` (
  `id` int NOT NULL,
  `curriculum_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_institutions`
--

CREATE TABLE `pddikti_institutions` (
  `id` int NOT NULL,
  `institution_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_lectures`
--

CREATE TABLE `pddikti_lectures` (
  `id` int NOT NULL,
  `lecture_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_lecture_class`
--

CREATE TABLE `pddikti_lecture_class` (
  `id` int NOT NULL,
  `pddikti_lecture_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_students`
--

CREATE TABLE `pddikti_students` (
  `id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pddikti_subjects`
--

CREATE TABLE `pddikti_subjects` (
  `id` int NOT NULL,
  `subject_id` int DEFAULT NULL,
  `pddikti_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_academic_events`
--

CREATE TABLE `ref_academic_events` (
  `id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_academic_status`
--

CREATE TABLE `ref_academic_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_administrative_status`
--

CREATE TABLE `ref_administrative_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_approval_status`
--

CREATE TABLE `ref_approval_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_cities`
--

CREATE TABLE `ref_cities` (
  `id` int NOT NULL,
  `province_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_days`
--

CREATE TABLE `ref_days` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_districts`
--

CREATE TABLE `ref_districts` (
  `id` int NOT NULL,
  `city_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_exam_types`
--

CREATE TABLE `ref_exam_types` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_exit_status`
--

CREATE TABLE `ref_exit_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_functional_roles`
--

CREATE TABLE `ref_functional_roles` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_funding_types`
--

CREATE TABLE `ref_funding_types` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_grade_components`
--

CREATE TABLE `ref_grade_components` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_institution_types`
--

CREATE TABLE `ref_institution_types` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_presence_status`
--

CREATE TABLE `ref_presence_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_provinces`
--

CREATE TABLE `ref_provinces` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_religions`
--

CREATE TABLE `ref_religions` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_school_types`
--

CREATE TABLE `ref_school_types` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_session_types`
--

CREATE TABLE `ref_session_types` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ref_subject_registration_status`
--

CREATE TABLE `ref_subject_registration_status` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_academic_records`
--

CREATE TABLE `tran_academic_records` (
  `id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `institution_id` int DEFAULT NULL,
  `academic_period_id` int DEFAULT NULL,
  `academic_status_id` int DEFAULT NULL,
  `administrative_status_id` int DEFAULT NULL,
  `cumulative_gpa` decimal(3,2) DEFAULT NULL,
  `semester_gpa` decimal(3,2) DEFAULT NULL,
  `tuition_fee` double DEFAULT NULL,
  `funding_type_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_detail_installments`
--

CREATE TABLE `tran_detail_installments` (
  `id` int NOT NULL,
  `installment_id` int DEFAULT NULL,
  `installment_number` int DEFAULT NULL,
  `trx_id` varchar(255) DEFAULT NULL,
  `virtual_account` varchar(255) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `payment_amount` double DEFAULT NULL,
  `datetime_paid` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_exam_schedules`
--

CREATE TABLE `tran_exam_schedules` (
  `id` int NOT NULL,
  `class_id` int DEFAULT NULL,
  `exam_type_id` int DEFAULT NULL,
  `exam_date` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `news` text,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_grade_components`
--

CREATE TABLE `tran_grade_components` (
  `id` int NOT NULL,
  `class_id` int DEFAULT NULL,
  `grade_component_id` int DEFAULT NULL,
  `grade_weight` decimal(5,2) DEFAULT NULL,
  `grade_max` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_installment_requests`
--

CREATE TABLE `tran_installment_requests` (
  `id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `academic_record_id` int DEFAULT NULL,
  `description` longtext,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_lecture_class`
--

CREATE TABLE `tran_lecture_class` (
  `id` int NOT NULL,
  `lecutre_id` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `is_main_lecture` tinyint(1) DEFAULT NULL,
  `credit` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_lecture_educations`
--

CREATE TABLE `tran_lecture_educations` (
  `id` int NOT NULL,
  `lecutre_id` int DEFAULT NULL,
  `education_program_id` int DEFAULT NULL,
  `institution_name` varchar(255) DEFAULT NULL,
  `enrollment_year` smallint DEFAULT NULL,
  `diploma_number` varchar(255) DEFAULT NULL,
  `graduation_document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_lecture_institutions`
--

CREATE TABLE `tran_lecture_institutions` (
  `lecutre_id` int NOT NULL,
  `institution_id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `code_national` varchar(255) DEFAULT NULL,
  `functional_role_id` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_payment_histories`
--

CREATE TABLE `tran_payment_histories` (
  `id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `academic_period_id` int DEFAULT NULL,
  `trx_id` varchar(255) DEFAULT NULL,
  `trx_amount` double DEFAULT NULL,
  `datetime_expired` timestamp NULL DEFAULT NULL,
  `virtual_account` varchar(255) DEFAULT NULL,
  `reference_number` varchar(255) DEFAULT NULL,
  `description` text,
  `is_paid` tinyint(1) DEFAULT NULL,
  `payment_amount` double DEFAULT NULL,
  `datetime_paid` timestamp NULL DEFAULT NULL,
  `is_installment` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_schedules`
--

CREATE TABLE `tran_schedules` (
  `id` int NOT NULL,
  `class_id` int DEFAULT NULL,
  `day_id` int DEFAULT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL,
  `room` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_session_class`
--

CREATE TABLE `tran_session_class` (
  `id` int NOT NULL,
  `class_id` int DEFAULT NULL,
  `class_date` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL,
  `lecutre_id` int DEFAULT NULL,
  `news` text,
  `discussion` text,
  `session_type_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_student_grades`
--

CREATE TABLE `tran_student_grades` (
  `id` int NOT NULL,
  `class_component_id` int DEFAULT NULL,
  `academic_record_id` int DEFAULT NULL,
  `raw_score` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_student_institutions`
--

CREATE TABLE `tran_student_institutions` (
  `student_id` int NOT NULL,
  `institution_id` int NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `entry_year` smallint DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_student_presences`
--

CREATE TABLE `tran_student_presences` (
  `id` int NOT NULL,
  `session_id` int DEFAULT NULL,
  `academic_record_id` int DEFAULT NULL,
  `presence_status_id` int DEFAULT NULL,
  `checkin` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_student_subject_plans`
--

CREATE TABLE `tran_student_subject_plans` (
  `academic_record_id` int NOT NULL,
  `class_id` int NOT NULL,
  `status_id` int DEFAULT NULL,
  `raw_score` decimal(5,2) DEFAULT NULL,
  `letter_grade` varchar(255) DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tran_subject_curriculums`
--

CREATE TABLE `tran_subject_curriculums` (
  `subject_id` int NOT NULL,
  `curriculum_id` int NOT NULL,
  `semester` smallint DEFAULT NULL,
  `created_by` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT (now()),
  `updated_at` timestamp NULL DEFAULT (now())
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `log_installment_approvals`
--
ALTER TABLE `log_installment_approvals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `installment_request_id` (`installment_request_id`),
  ADD KEY `approver_id` (`approver_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `log_study_plan_approvals`
--
ALTER TABLE `log_study_plan_approvals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academic_record_id` (`academic_record_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `approver_id` (`approver_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `master_academic_events`
--
ALTER TABLE `master_academic_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_id` (`event_id`),
  ADD KEY `academic_period_id` (`academic_period_id`);

--
-- Indexes for table `master_academic_periods`
--
ALTER TABLE `master_academic_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_class`
--
ALTER TABLE `master_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_curriculum_id` (`subject_curriculum_id`),
  ADD KEY `curriculum_id` (`curriculum_id`),
  ADD KEY `academic_period_id` (`academic_period_id`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `master_conversion_scores`
--
ALTER TABLE `master_conversion_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_curriculums`
--
ALTER TABLE `master_curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `master_education_programs`
--
ALTER TABLE `master_education_programs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `master_graduate_students`
--
ALTER TABLE `master_graduate_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `academic_period_id` (`academic_period_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `master_institutions`
--
ALTER TABLE `master_institutions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `short_name` (`short_name`),
  ADD KEY `education_program_id` (`education_program_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `institution_type_id` (`institution_type_id`),
  ADD KEY `head_id` (`head_id`);

--
-- Indexes for table `master_lectures`
--
ALTER TABLE `master_lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `master_students`
--
ALTER TABLE `master_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_number_national` (`reg_number_national`),
  ADD UNIQUE KEY `sid` (`sid`),
  ADD UNIQUE KEY `father_sid` (`father_sid`),
  ADD UNIQUE KEY `mother_sid` (`mother_sid`),
  ADD KEY `province_id` (`province_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `district_id` (`district_id`),
  ADD KEY `school_type_id` (`school_type_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `master_subjects`
--
ALTER TABLE `master_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `pddikti_class`
--
ALTER TABLE `pddikti_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `pddikti_curriculums`
--
ALTER TABLE `pddikti_curriculums`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `curriculum_id` (`curriculum_id`);

--
-- Indexes for table `pddikti_institutions`
--
ALTER TABLE `pddikti_institutions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `pddikti_lectures`
--
ALTER TABLE `pddikti_lectures`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `lecture_id` (`lecture_id`);

--
-- Indexes for table `pddikti_lecture_class`
--
ALTER TABLE `pddikti_lecture_class`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `pddikti_lecture_id` (`pddikti_lecture_id`);

--
-- Indexes for table `pddikti_students`
--
ALTER TABLE `pddikti_students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `pddikti_subjects`
--
ALTER TABLE `pddikti_subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pddikti_code` (`pddikti_code`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ref_academic_events`
--
ALTER TABLE `ref_academic_events`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `ref_academic_status`
--
ALTER TABLE `ref_academic_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_administrative_status`
--
ALTER TABLE `ref_administrative_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_approval_status`
--
ALTER TABLE `ref_approval_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_cities`
--
ALTER TABLE `ref_cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `ref_days`
--
ALTER TABLE `ref_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_districts`
--
ALTER TABLE `ref_districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `city_id` (`city_id`);

--
-- Indexes for table `ref_exam_types`
--
ALTER TABLE `ref_exam_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_exit_status`
--
ALTER TABLE `ref_exit_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_functional_roles`
--
ALTER TABLE `ref_functional_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_funding_types`
--
ALTER TABLE `ref_funding_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_grade_components`
--
ALTER TABLE `ref_grade_components`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_institution_types`
--
ALTER TABLE `ref_institution_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_presence_status`
--
ALTER TABLE `ref_presence_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_provinces`
--
ALTER TABLE `ref_provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_religions`
--
ALTER TABLE `ref_religions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_school_types`
--
ALTER TABLE `ref_school_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_session_types`
--
ALTER TABLE `ref_session_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ref_subject_registration_status`
--
ALTER TABLE `ref_subject_registration_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `tran_academic_records`
--
ALTER TABLE `tran_academic_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `academic_period_id` (`academic_period_id`),
  ADD KEY `academic_status_id` (`academic_status_id`),
  ADD KEY `administrative_status_id` (`administrative_status_id`),
  ADD KEY `funding_type_id` (`funding_type_id`);

--
-- Indexes for table `tran_detail_installments`
--
ALTER TABLE `tran_detail_installments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trx_id` (`trx_id`),
  ADD KEY `installment_id` (`installment_id`);

--
-- Indexes for table `tran_exam_schedules`
--
ALTER TABLE `tran_exam_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `exam_type_id` (`exam_type_id`);

--
-- Indexes for table `tran_grade_components`
--
ALTER TABLE `tran_grade_components`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `grade_component_id` (`grade_component_id`);

--
-- Indexes for table `tran_installment_requests`
--
ALTER TABLE `tran_installment_requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `academic_record_id` (`academic_record_id`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `tran_lecture_class`
--
ALTER TABLE `tran_lecture_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecutre_id` (`lecutre_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `tran_lecture_educations`
--
ALTER TABLE `tran_lecture_educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecutre_id` (`lecutre_id`),
  ADD KEY `education_program_id` (`education_program_id`);

--
-- Indexes for table `tran_lecture_institutions`
--
ALTER TABLE `tran_lecture_institutions`
  ADD PRIMARY KEY (`lecutre_id`,`institution_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD UNIQUE KEY `code_national` (`code_national`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `functional_role_id` (`functional_role_id`);

--
-- Indexes for table `tran_payment_histories`
--
ALTER TABLE `tran_payment_histories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `trx_id` (`trx_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `academic_period_id` (`academic_period_id`);

--
-- Indexes for table `tran_schedules`
--
ALTER TABLE `tran_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `day_id` (`day_id`);

--
-- Indexes for table `tran_session_class`
--
ALTER TABLE `tran_session_class`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `lecutre_id` (`lecutre_id`),
  ADD KEY `session_type_id` (`session_type_id`);

--
-- Indexes for table `tran_student_grades`
--
ALTER TABLE `tran_student_grades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_component_id` (`class_component_id`),
  ADD KEY `academic_record_id` (`academic_record_id`);

--
-- Indexes for table `tran_student_institutions`
--
ALTER TABLE `tran_student_institutions`
  ADD PRIMARY KEY (`student_id`,`institution_id`),
  ADD UNIQUE KEY `code` (`code`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tran_student_presences`
--
ALTER TABLE `tran_student_presences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `academic_record_id` (`academic_record_id`),
  ADD KEY `presence_status_id` (`presence_status_id`);

--
-- Indexes for table `tran_student_subject_plans`
--
ALTER TABLE `tran_student_subject_plans`
  ADD PRIMARY KEY (`academic_record_id`,`class_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `tran_subject_curriculums`
--
ALTER TABLE `tran_subject_curriculums`
  ADD PRIMARY KEY (`subject_id`,`curriculum_id`),
  ADD KEY `idx_curriculum_id` (`curriculum_id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_installment_approvals`
--
ALTER TABLE `log_installment_approvals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_study_plan_approvals`
--
ALTER TABLE `log_study_plan_approvals`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_academic_events`
--
ALTER TABLE `master_academic_events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_academic_periods`
--
ALTER TABLE `master_academic_periods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_class`
--
ALTER TABLE `master_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_conversion_scores`
--
ALTER TABLE `master_conversion_scores`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_curriculums`
--
ALTER TABLE `master_curriculums`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_education_programs`
--
ALTER TABLE `master_education_programs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_graduate_students`
--
ALTER TABLE `master_graduate_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_institutions`
--
ALTER TABLE `master_institutions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_lectures`
--
ALTER TABLE `master_lectures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_students`
--
ALTER TABLE `master_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_subjects`
--
ALTER TABLE `master_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pddikti_class`
--
ALTER TABLE `pddikti_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_curriculums`
--
ALTER TABLE `pddikti_curriculums`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_institutions`
--
ALTER TABLE `pddikti_institutions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_lectures`
--
ALTER TABLE `pddikti_lectures`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_lecture_class`
--
ALTER TABLE `pddikti_lecture_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_students`
--
ALTER TABLE `pddikti_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pddikti_subjects`
--
ALTER TABLE `pddikti_subjects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_academic_events`
--
ALTER TABLE `ref_academic_events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_academic_status`
--
ALTER TABLE `ref_academic_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_administrative_status`
--
ALTER TABLE `ref_administrative_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_approval_status`
--
ALTER TABLE `ref_approval_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_cities`
--
ALTER TABLE `ref_cities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_days`
--
ALTER TABLE `ref_days`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_districts`
--
ALTER TABLE `ref_districts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_exam_types`
--
ALTER TABLE `ref_exam_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_exit_status`
--
ALTER TABLE `ref_exit_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_functional_roles`
--
ALTER TABLE `ref_functional_roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_funding_types`
--
ALTER TABLE `ref_funding_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_grade_components`
--
ALTER TABLE `ref_grade_components`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_institution_types`
--
ALTER TABLE `ref_institution_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_presence_status`
--
ALTER TABLE `ref_presence_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_provinces`
--
ALTER TABLE `ref_provinces`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_religions`
--
ALTER TABLE `ref_religions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_school_types`
--
ALTER TABLE `ref_school_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_session_types`
--
ALTER TABLE `ref_session_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ref_subject_registration_status`
--
ALTER TABLE `ref_subject_registration_status`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_academic_records`
--
ALTER TABLE `tran_academic_records`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_detail_installments`
--
ALTER TABLE `tran_detail_installments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_exam_schedules`
--
ALTER TABLE `tran_exam_schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_grade_components`
--
ALTER TABLE `tran_grade_components`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_installment_requests`
--
ALTER TABLE `tran_installment_requests`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_lecture_class`
--
ALTER TABLE `tran_lecture_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_lecture_educations`
--
ALTER TABLE `tran_lecture_educations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_payment_histories`
--
ALTER TABLE `tran_payment_histories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_schedules`
--
ALTER TABLE `tran_schedules`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_session_class`
--
ALTER TABLE `tran_session_class`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_student_grades`
--
ALTER TABLE `tran_student_grades`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tran_student_presences`
--
ALTER TABLE `tran_student_presences`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_installment_approvals`
--
ALTER TABLE `log_installment_approvals`
  ADD CONSTRAINT `log_installment_approvals_ibfk_1` FOREIGN KEY (`installment_request_id`) REFERENCES `tran_installment_requests` (`id`),
  ADD CONSTRAINT `log_installment_approvals_ibfk_2` FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_installment_approvals_ibfk_3` FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

--
-- Constraints for table `log_study_plan_approvals`
--
ALTER TABLE `log_study_plan_approvals`
  ADD CONSTRAINT `log_study_plan_approvals_ibfk_1` FOREIGN KEY (`academic_record_id`) REFERENCES `tran_student_subject_plans` (`academic_record_id`),
  ADD CONSTRAINT `log_study_plan_approvals_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `tran_student_subject_plans` (`class_id`),
  ADD CONSTRAINT `log_study_plan_approvals_ibfk_3` FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `log_study_plan_approvals_ibfk_4` FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

--
-- Constraints for table `master_academic_events`
--
ALTER TABLE `master_academic_events`
  ADD CONSTRAINT `master_academic_events_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `ref_academic_events` (`id`),
  ADD CONSTRAINT `master_academic_events_ibfk_2` FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

--
-- Constraints for table `master_class`
--
ALTER TABLE `master_class`
  ADD CONSTRAINT `master_class_ibfk_1` FOREIGN KEY (`subject_curriculum_id`) REFERENCES `tran_subject_curriculums` (`subject_id`),
  ADD CONSTRAINT `master_class_ibfk_2` FOREIGN KEY (`curriculum_id`) REFERENCES `tran_subject_curriculums` (`curriculum_id`),
  ADD CONSTRAINT `master_class_ibfk_3` FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`),
  ADD CONSTRAINT `master_class_ibfk_4` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`),
  ADD CONSTRAINT `master_class_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `master_class_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_curriculums`
--
ALTER TABLE `master_curriculums`
  ADD CONSTRAINT `master_curriculums_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

--
-- Constraints for table `master_graduate_students`
--
ALTER TABLE `master_graduate_students`
  ADD CONSTRAINT `master_graduate_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`),
  ADD CONSTRAINT `master_graduate_students_ibfk_2` FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`),
  ADD CONSTRAINT `master_graduate_students_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `ref_exit_status` (`id`),
  ADD CONSTRAINT `master_graduate_students_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `master_graduate_students_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_institutions`
--
ALTER TABLE `master_institutions`
  ADD CONSTRAINT `master_institutions_ibfk_1` FOREIGN KEY (`education_program_id`) REFERENCES `master_education_programs` (`id`),
  ADD CONSTRAINT `master_institutions_ibfk_2` FOREIGN KEY (`parent_id`) REFERENCES `master_institutions` (`id`),
  ADD CONSTRAINT `master_institutions_ibfk_3` FOREIGN KEY (`institution_type_id`) REFERENCES `ref_institution_types` (`id`),
  ADD CONSTRAINT `master_institutions_ibfk_4` FOREIGN KEY (`head_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_lectures`
--
ALTER TABLE `master_lectures`
  ADD CONSTRAINT `master_lectures_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`),
  ADD CONSTRAINT `master_lectures_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`),
  ADD CONSTRAINT `master_lectures_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `ref_districts` (`id`),
  ADD CONSTRAINT `master_lectures_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `master_lectures_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_students`
--
ALTER TABLE `master_students`
  ADD CONSTRAINT `master_students_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`),
  ADD CONSTRAINT `master_students_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`),
  ADD CONSTRAINT `master_students_ibfk_3` FOREIGN KEY (`district_id`) REFERENCES `ref_districts` (`id`),
  ADD CONSTRAINT `master_students_ibfk_4` FOREIGN KEY (`school_type_id`) REFERENCES `ref_school_types` (`id`),
  ADD CONSTRAINT `master_students_ibfk_5` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `master_students_ibfk_6` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `master_subjects`
--
ALTER TABLE `master_subjects`
  ADD CONSTRAINT `master_subjects_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pddikti_class`
--
ALTER TABLE `pddikti_class`
  ADD CONSTRAINT `pddikti_class_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

--
-- Constraints for table `pddikti_curriculums`
--
ALTER TABLE `pddikti_curriculums`
  ADD CONSTRAINT `pddikti_curriculums_ibfk_1` FOREIGN KEY (`curriculum_id`) REFERENCES `master_curriculums` (`id`);

--
-- Constraints for table `pddikti_institutions`
--
ALTER TABLE `pddikti_institutions`
  ADD CONSTRAINT `pddikti_institutions_ibfk_1` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

--
-- Constraints for table `pddikti_lectures`
--
ALTER TABLE `pddikti_lectures`
  ADD CONSTRAINT `pddikti_lectures_ibfk_1` FOREIGN KEY (`lecture_id`) REFERENCES `master_lectures` (`id`);

--
-- Constraints for table `pddikti_lecture_class`
--
ALTER TABLE `pddikti_lecture_class`
  ADD CONSTRAINT `pddikti_lecture_class_ibfk_1` FOREIGN KEY (`pddikti_lecture_id`) REFERENCES `pddikti_lectures` (`id`);

--
-- Constraints for table `pddikti_students`
--
ALTER TABLE `pddikti_students`
  ADD CONSTRAINT `pddikti_students_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`);

--
-- Constraints for table `pddikti_subjects`
--
ALTER TABLE `pddikti_subjects`
  ADD CONSTRAINT `pddikti_subjects_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `master_subjects` (`id`);

--
-- Constraints for table `ref_cities`
--
ALTER TABLE `ref_cities`
  ADD CONSTRAINT `ref_cities_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`);

--
-- Constraints for table `ref_districts`
--
ALTER TABLE `ref_districts`
  ADD CONSTRAINT `ref_districts_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tran_academic_records`
--
ALTER TABLE `tran_academic_records`
  ADD CONSTRAINT `tran_academic_records_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `tran_student_institutions` (`student_id`),
  ADD CONSTRAINT `tran_academic_records_ibfk_2` FOREIGN KEY (`institution_id`) REFERENCES `tran_student_institutions` (`institution_id`),
  ADD CONSTRAINT `tran_academic_records_ibfk_3` FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`),
  ADD CONSTRAINT `tran_academic_records_ibfk_4` FOREIGN KEY (`academic_status_id`) REFERENCES `ref_academic_status` (`id`),
  ADD CONSTRAINT `tran_academic_records_ibfk_5` FOREIGN KEY (`administrative_status_id`) REFERENCES `ref_administrative_status` (`id`),
  ADD CONSTRAINT `tran_academic_records_ibfk_6` FOREIGN KEY (`funding_type_id`) REFERENCES `ref_funding_types` (`id`);

--
-- Constraints for table `tran_detail_installments`
--
ALTER TABLE `tran_detail_installments`
  ADD CONSTRAINT `tran_detail_installments_ibfk_1` FOREIGN KEY (`installment_id`) REFERENCES `tran_installment_requests` (`id`);

--
-- Constraints for table `tran_exam_schedules`
--
ALTER TABLE `tran_exam_schedules`
  ADD CONSTRAINT `tran_exam_schedules_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`),
  ADD CONSTRAINT `tran_exam_schedules_ibfk_2` FOREIGN KEY (`exam_type_id`) REFERENCES `ref_exam_types` (`id`);

--
-- Constraints for table `tran_grade_components`
--
ALTER TABLE `tran_grade_components`
  ADD CONSTRAINT `tran_grade_components_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`),
  ADD CONSTRAINT `tran_grade_components_ibfk_2` FOREIGN KEY (`grade_component_id`) REFERENCES `ref_grade_components` (`id`);

--
-- Constraints for table `tran_installment_requests`
--
ALTER TABLE `tran_installment_requests`
  ADD CONSTRAINT `tran_installment_requests_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`),
  ADD CONSTRAINT `tran_installment_requests_ibfk_2` FOREIGN KEY (`academic_record_id`) REFERENCES `master_academic_periods` (`id`),
  ADD CONSTRAINT `tran_installment_requests_ibfk_3` FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

--
-- Constraints for table `tran_lecture_class`
--
ALTER TABLE `tran_lecture_class`
  ADD CONSTRAINT `tran_lecture_class_ibfk_1` FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`),
  ADD CONSTRAINT `tran_lecture_class_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

--
-- Constraints for table `tran_lecture_educations`
--
ALTER TABLE `tran_lecture_educations`
  ADD CONSTRAINT `tran_lecture_educations_ibfk_1` FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`),
  ADD CONSTRAINT `tran_lecture_educations_ibfk_2` FOREIGN KEY (`education_program_id`) REFERENCES `master_education_programs` (`id`);

--
-- Constraints for table `tran_lecture_institutions`
--
ALTER TABLE `tran_lecture_institutions`
  ADD CONSTRAINT `tran_lecture_institutions_ibfk_1` FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`),
  ADD CONSTRAINT `tran_lecture_institutions_ibfk_2` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`),
  ADD CONSTRAINT `tran_lecture_institutions_ibfk_3` FOREIGN KEY (`functional_role_id`) REFERENCES `ref_functional_roles` (`id`);

--
-- Constraints for table `tran_payment_histories`
--
ALTER TABLE `tran_payment_histories`
  ADD CONSTRAINT `tran_payment_histories_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`),
  ADD CONSTRAINT `tran_payment_histories_ibfk_2` FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

--
-- Constraints for table `tran_schedules`
--
ALTER TABLE `tran_schedules`
  ADD CONSTRAINT `tran_schedules_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`),
  ADD CONSTRAINT `tran_schedules_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `ref_days` (`id`);

--
-- Constraints for table `tran_session_class`
--
ALTER TABLE `tran_session_class`
  ADD CONSTRAINT `tran_session_class_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`),
  ADD CONSTRAINT `tran_session_class_ibfk_2` FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`),
  ADD CONSTRAINT `tran_session_class_ibfk_3` FOREIGN KEY (`session_type_id`) REFERENCES `ref_session_types` (`id`);

--
-- Constraints for table `tran_student_grades`
--
ALTER TABLE `tran_student_grades`
  ADD CONSTRAINT `tran_student_grades_ibfk_1` FOREIGN KEY (`class_component_id`) REFERENCES `tran_grade_components` (`id`),
  ADD CONSTRAINT `tran_student_grades_ibfk_2` FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`);

--
-- Constraints for table `tran_student_institutions`
--
ALTER TABLE `tran_student_institutions`
  ADD CONSTRAINT `tran_student_institutions_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`),
  ADD CONSTRAINT `tran_student_institutions_ibfk_2` FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`),
  ADD CONSTRAINT `tran_student_institutions_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tran_student_institutions_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `tran_student_presences`
--
ALTER TABLE `tran_student_presences`
  ADD CONSTRAINT `tran_student_presences_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `tran_session_class` (`id`),
  ADD CONSTRAINT `tran_student_presences_ibfk_2` FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`),
  ADD CONSTRAINT `tran_student_presences_ibfk_3` FOREIGN KEY (`presence_status_id`) REFERENCES `ref_presence_status` (`id`);

--
-- Constraints for table `tran_student_subject_plans`
--
ALTER TABLE `tran_student_subject_plans`
  ADD CONSTRAINT `tran_student_subject_plans_ibfk_1` FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`),
  ADD CONSTRAINT `tran_student_subject_plans_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`),
  ADD CONSTRAINT `tran_student_subject_plans_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `ref_subject_registration_status` (`id`),
  ADD CONSTRAINT `tran_student_subject_plans_ibfk_4` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tran_student_subject_plans_ibfk_5` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);

--
-- Constraints for table `tran_subject_curriculums`
--
ALTER TABLE `tran_subject_curriculums`
  ADD CONSTRAINT `tran_subject_curriculums_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `master_subjects` (`id`),
  ADD CONSTRAINT `tran_subject_curriculums_ibfk_2` FOREIGN KEY (`curriculum_id`) REFERENCES `master_curriculums` (`id`),
  ADD CONSTRAINT `tran_subject_curriculums_ibfk_3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tran_subject_curriculums_ibfk_4` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
