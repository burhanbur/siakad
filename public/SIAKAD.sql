CREATE TABLE `users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `uuid` varchar(255) UNIQUE,
  `name` varchar(255),
  `username` varchar(255) UNIQUE,
  `email` varchar(255) UNIQUE,
  `password` varchar(255),
  `email_verified_at` timestamp,
  `remember_token` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `guard_name` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `model_has_roles` (
  `role_id` int,
  `model_type` varchar(255),
  `model_id` int
);

CREATE TABLE `ref_provinces` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_cities` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `province_id` int,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_districts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `city_id` int,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_religions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_days` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_school_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_institution_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_academic_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_admninistrative_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_functional_roles` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_grade_components` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_subject_registration_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_presence_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_approval_status` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_session_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_funding_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_academic_events` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `code` varchar(255) UNIQUE,
  `name` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `ref_exam_types` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_academic_events` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `event_id` int,
  `academic_period_id` int,
  `start_date` timestamp,
  `end_date` timestamp,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_academic_periods` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `year` smallint,
  `term` smallint,
  `is_active` boolean,
  `periode` varchar(255),
  `description` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_conversion_scores` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `assessment_weight` numeric(3,2),
  `pass_flag` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_education_programs` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `code` varchar(255) UNIQUE,
  `name` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_students` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `reg_number_national` varchar(255) UNIQUE,
  `sid` varchar(255) UNIQUE,
  `name` varchar(255),
  `gender` varchar(255),
  `birth_date` date,
  `phone` varchar(255),
  `email` varchar(255),
  `address` text,
  `province_id` int,
  `city_id` int,
  `district_id` int,
  `postal_code` varchar(255),
  `school_origin` varchar(255),
  `school_type_id` int,
  `graduation_year` smallint,
  `father_name` varchar(255),
  `father_phone` varchar(255),
  `father_sid` varchar(255) UNIQUE,
  `mother_name` varchar(255),
  `mother_phone` varchar(255),
  `mother_sid` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_lectures` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `gender` varchar(255),
  `birth_date` date,
  `phone` varchar(255),
  `address` text,
  `province_id` int,
  `city_id` int,
  `district_id` int,
  `postal_code` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_institutions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `code` varchar(255) UNIQUE,
  `name` varchar(255),
  `short_name` varchar(255) UNIQUE,
  `education_program_id` int,
  `parent_id` int,
  `institution_type_id` int,
  `head_id` int,
  `accreditation` varchar(255),
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_curriculums` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `institution_id` int,
  `code` varchar(255) UNIQUE,
  `name` varchar(255),
  `total_credit` smallint,
  `mandatory_credit` smallint,
  `optional_credit` smallint,
  `start_date` date,
  `end_date` date,
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_subjects` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `code` varchar(255) UNIQUE,
  `name` varchar(255),
  `credit` smallint,
  `institution_id` int,
  `is_mandatory` boolean,
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `master_class` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `subject_curriculum_id` int,
  `curriculum_id` int,
  `academic_period_id` int,
  `institution_id` int,
  `name` varchar(255),
  `short_name` varchar(255),
  `capacity` smallint,
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_student_institutions` (
  `student_id` int,
  `institution_id` int,
  `code` varchar(255) UNIQUE,
  `enrollment_year` smallint,
  `graduation_year` smallint,
  `diploma_number` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`student_id`, `institution_id`)
);

CREATE TABLE `tran_lecture_educations` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `lecutre_id` int,
  `education_program_id` int,
  `institution_name` varchar(255),
  `enrollment_year` smallint,
  `diploma_number` varchar(255),
  `graduation_document` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_lecture_institutions` (
  `lecutre_id` int,
  `institution_id` int,
  `code` varchar(255) UNIQUE,
  `code_national` varchar(255) UNIQUE,
  `functional_role_id` int,
  `start_date` date,
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`lecutre_id`, `institution_id`)
);

CREATE TABLE `tran_subject_curriculums` (
  `subject_id` int,
  `curriculum_id` int,
  `semester` smallint,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`subject_id`, `curriculum_id`)
);

CREATE TABLE `tran_academic_records` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `institution_id` int,
  `academic_period_id` int,
  `academic_status_id` int,
  `administrative_status_id` int,
  `cumulative_gpa` numeric(3,2),
  `semester_gpa` numeric(3,2),
  `tuition_fee` double,
  `funding_type_id` int,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_lecture_class` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `lecutre_id` int,
  `class_id` int,
  `is_main_lecture` boolean,
  `credit` double,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_schedules` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_id` int,
  `day_id` int,
  `start` time,
  `finish` time,
  `room` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_grade_components` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_id` int,
  `grade_component_id` int,
  `grade_weight` numeric(5,2),
  `grade_max` numeric(5,2),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_student_subject_plans` (
  `academic_record_id` int,
  `class_id` int,
  `status_id` int,
  `raw_score` numeric(5,2),
  `letter_grade` varchar(255),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp(),
  PRIMARY KEY (`academic_record_id`, `class_id`)
);

CREATE TABLE `tran_session_class` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_id` int,
  `class_date` date,
  `start` time,
  `finish` time,
  `lecutre_id` int,
  `news` text,
  `discussion` text,
  `session_type_id` int,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_student_presences` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `session_id` int,
  `academic_record_id` int,
  `presence_status_id` int,
  `checkin` timestamp,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_student_grades` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_component_id` int,
  `academic_record_id` int,
  `raw_score` numeric(5,2),
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_payment_histories` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `academic_period_id` int,
  `trx_id` varchar(255) UNIQUE,
  `trx_amount` double,
  `datetime_expired` timestamp,
  `virtual_account` varchar(255),
  `reference_number` varchar(255),
  `description` text,
  `is_paid` boolean,
  `payment_amount` double,
  `datetime_paid` timestamp,
  `is_installment` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_installment_requests` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `academic_record_id` int,
  `description` longtext,
  `status` int,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_detail_installments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `installment_id` int,
  `installment_number` int,
  `trx_id` varchar(255) UNIQUE,
  `virtual_account` varchar(255),
  `amount` double,
  `payment_amount` double,
  `datetime_paid` timestamp,
  `is_active` boolean,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `tran_exam_schedules` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_id` int,
  `exam_type_id` int,
  `exam_date` date,
  `start` time,
  `finish` time,
  `room` varchar(255),
  `news` text,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `log_installment_approvals` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `installment_request_id` int,
  `approver_id` int,
  `status` int,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `log_study_plan_approvals` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `academic_record_id` int,
  `class_id` int,
  `approver_id` int,
  `status` int,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_students` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `student_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_institutions` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `institution_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_lectures` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `lecture_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_lecture_class` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `pddikti_lecture_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_curriculums` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `curriculum_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_subjects` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `subject_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

CREATE TABLE `pddikti_class` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `class_id` int,
  `pddikti_code` varchar(255) UNIQUE,
  `created_at` timestamp DEFAULT current_timestamp(),
  `updated_at` timestamp DEFAULT current_timestamp()
);

ALTER TABLE `model_has_roles` ADD FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

ALTER TABLE `model_has_roles` ADD FOREIGN KEY (`model_id`) REFERENCES `users` (`id`);

ALTER TABLE `ref_cities` ADD FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`);

ALTER TABLE `ref_districts` ADD FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`);

ALTER TABLE `master_academic_events` ADD FOREIGN KEY (`event_id`) REFERENCES `ref_academic_events` (`id`);

ALTER TABLE `master_academic_events` ADD FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

ALTER TABLE `master_students` ADD FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`);

ALTER TABLE `master_students` ADD FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`);

ALTER TABLE `master_students` ADD FOREIGN KEY (`district_id`) REFERENCES `ref_districts` (`id`);

ALTER TABLE `master_students` ADD FOREIGN KEY (`school_type_id`) REFERENCES `ref_school_types` (`id`);

ALTER TABLE `master_lectures` ADD FOREIGN KEY (`province_id`) REFERENCES `ref_provinces` (`id`);

ALTER TABLE `master_lectures` ADD FOREIGN KEY (`city_id`) REFERENCES `ref_cities` (`id`);

ALTER TABLE `master_lectures` ADD FOREIGN KEY (`district_id`) REFERENCES `ref_districts` (`id`);

ALTER TABLE `master_institutions` ADD FOREIGN KEY (`education_program_id`) REFERENCES `master_education_programs` (`id`);

ALTER TABLE `master_institutions` ADD FOREIGN KEY (`parent_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `master_institutions` ADD FOREIGN KEY (`institution_type_id`) REFERENCES `ref_institution_types` (`id`);

ALTER TABLE `master_institutions` ADD FOREIGN KEY (`head_id`) REFERENCES `users` (`id`);

ALTER TABLE `master_curriculums` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `master_subjects` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `master_class` ADD FOREIGN KEY (`subject_curriculum_id`) REFERENCES `tran_subject_curriculums` (`subject_id`);

ALTER TABLE `tran_subject_curriculums` ADD INDEX(`curriculum_id`);

ALTER TABLE `master_class` ADD FOREIGN KEY (`curriculum_id`) REFERENCES `tran_subject_curriculums` (`curriculum_id`);

ALTER TABLE `master_class` ADD FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

ALTER TABLE `master_class` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `tran_student_institutions` ADD FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`);

ALTER TABLE `tran_student_institutions` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `tran_lecture_educations` ADD FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`);

ALTER TABLE `tran_lecture_educations` ADD FOREIGN KEY (`education_program_id`) REFERENCES `master_education_programs` (`id`);

ALTER TABLE `tran_lecture_institutions` ADD FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`);

ALTER TABLE `tran_lecture_institutions` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `tran_lecture_institutions` ADD FOREIGN KEY (`functional_role_id`) REFERENCES `ref_functional_roles` (`id`);

ALTER TABLE `tran_subject_curriculums` ADD FOREIGN KEY (`subject_id`) REFERENCES `master_subjects` (`id`);

ALTER TABLE `tran_subject_curriculums` ADD FOREIGN KEY (`curriculum_id`) REFERENCES `master_curriculums` (`id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`student_id`) REFERENCES `tran_student_institutions` (`student_id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`institution_id`) REFERENCES `tran_student_institutions` (`institution_id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`academic_status_id`) REFERENCES `ref_academic_status` (`id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`administrative_status_id`) REFERENCES `ref_admninistrative_status` (`id`);

ALTER TABLE `tran_academic_records` ADD FOREIGN KEY (`funding_type_id`) REFERENCES `ref_funding_types` (`id`);

ALTER TABLE `tran_lecture_class` ADD FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`);

ALTER TABLE `tran_lecture_class` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_schedules` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_schedules` ADD FOREIGN KEY (`day_id`) REFERENCES `ref_days` (`id`);

ALTER TABLE `tran_grade_components` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_grade_components` ADD FOREIGN KEY (`grade_component_id`) REFERENCES `ref_grade_components` (`id`);

ALTER TABLE `tran_student_subject_plans` ADD FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`);

ALTER TABLE `tran_student_subject_plans` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_student_subject_plans` ADD FOREIGN KEY (`status_id`) REFERENCES `ref_subject_registration_status` (`id`);

ALTER TABLE `tran_session_class` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_session_class` ADD FOREIGN KEY (`lecutre_id`) REFERENCES `master_lectures` (`id`);

ALTER TABLE `tran_session_class` ADD FOREIGN KEY (`session_type_id`) REFERENCES `ref_session_types` (`id`);

ALTER TABLE `tran_student_presences` ADD FOREIGN KEY (`session_id`) REFERENCES `tran_session_class` (`id`);

ALTER TABLE `tran_student_presences` ADD FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`);

ALTER TABLE `tran_student_presences` ADD FOREIGN KEY (`presence_status_id`) REFERENCES `ref_presence_status` (`id`);

ALTER TABLE `tran_student_grades` ADD FOREIGN KEY (`class_component_id`) REFERENCES `tran_grade_components` (`id`);

ALTER TABLE `tran_student_grades` ADD FOREIGN KEY (`academic_record_id`) REFERENCES `tran_academic_records` (`id`);

ALTER TABLE `tran_payment_histories` ADD FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`);

ALTER TABLE `tran_payment_histories` ADD FOREIGN KEY (`academic_period_id`) REFERENCES `master_academic_periods` (`id`);

ALTER TABLE `tran_installment_requests` ADD FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`);

ALTER TABLE `tran_installment_requests` ADD FOREIGN KEY (`academic_record_id`) REFERENCES `master_academic_periods` (`id`);

ALTER TABLE `tran_installment_requests` ADD FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

ALTER TABLE `tran_detail_installments` ADD FOREIGN KEY (`installment_id`) REFERENCES `tran_installment_requests` (`id`);

ALTER TABLE `tran_exam_schedules` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);

ALTER TABLE `tran_exam_schedules` ADD FOREIGN KEY (`exam_type_id`) REFERENCES `ref_exam_types` (`id`);

ALTER TABLE `log_installment_approvals` ADD FOREIGN KEY (`installment_request_id`) REFERENCES `tran_installment_requests` (`id`);

ALTER TABLE `log_installment_approvals` ADD FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`);

ALTER TABLE `log_installment_approvals` ADD FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

ALTER TABLE `log_study_plan_approvals` ADD FOREIGN KEY (`academic_record_id`) REFERENCES `tran_student_subject_plans` (`academic_record_id`);

ALTER TABLE `log_study_plan_approvals` ADD FOREIGN KEY (`class_id`) REFERENCES `tran_student_subject_plans` (`class_id`);

ALTER TABLE `log_study_plan_approvals` ADD FOREIGN KEY (`approver_id`) REFERENCES `users` (`id`);

ALTER TABLE `log_study_plan_approvals` ADD FOREIGN KEY (`status`) REFERENCES `ref_approval_status` (`id`);

ALTER TABLE `pddikti_students` ADD FOREIGN KEY (`student_id`) REFERENCES `master_students` (`id`);

ALTER TABLE `pddikti_institutions` ADD FOREIGN KEY (`institution_id`) REFERENCES `master_institutions` (`id`);

ALTER TABLE `pddikti_lectures` ADD FOREIGN KEY (`lecture_id`) REFERENCES `master_lectures` (`id`);

ALTER TABLE `pddikti_lecture_class` ADD FOREIGN KEY (`pddikti_lecture_id`) REFERENCES `pddikti_lectures` (`id`);

ALTER TABLE `pddikti_curriculums` ADD FOREIGN KEY (`curriculum_id`) REFERENCES `master_curriculums` (`id`);

ALTER TABLE `pddikti_subjects` ADD FOREIGN KEY (`subject_id`) REFERENCES `master_subjects` (`id`);

ALTER TABLE `pddikti_class` ADD FOREIGN KEY (`class_id`) REFERENCES `master_class` (`id`);
