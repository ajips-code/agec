-- Membuat tabel admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id_pk` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pk`)
);

-- Menambahkan data ke tabel admin
INSERT INTO `admin` (`username`, `password`) VALUES
  ('admin', 'admin');

-- Membuat tabel album
CREATE TABLE IF NOT EXISTS `album` (
  `id_pk` int NOT NULL AUTO_INCREMENT,
  `albumname` varchar(100) NOT NULL,
  `albumcaption` varchar(255) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_pk`)
);

-- Membuat tabel contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Membuat tabel employee
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel employee
INSERT INTO `employee` (`name`, `designation`, `contactnumber`, `email`, `picture`) VALUES
  ('Chika Okeke', 'Marketing Director', '0822112121313', 'chika@agec.com', 'IMG_7750-removebg-preview.png'),
  ('Chika Okeke', 'Marketing Director', '0822112121313', 'chika@agec.com', 'student.jpg');

-- Membuat tabel feedback
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel feedback
INSERT INTO `feedback` (`name`, `email`, `occupation`, `message`, `picture`, `datetime`) VALUES
  ('aji', 'adji@gmail.com', 'no', 'no', '1701065094278 (1).jpeg', '2024-05-15 05:00:19');

-- Membuat tabel form2_courses
CREATE TABLE IF NOT EXISTS `form2_courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `selectedUniversity` varchar(255) NOT NULL,
  `selectedQualification` varchar(255) NOT NULL,
  `selectedCourse` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form2_courses
INSERT INTO `form2_courses` (`fullname`, `email`, `message`, `selectedUniversity`, `selectedQualification`, `selectedCourse`, `created_at`) VALUES
  ('test', 'test@gmail.com', 'test', 'Harvard', 'Medicine', 'NEET SS', '2024-06-01 11:38:39'),
  ('test', 'test@gmail.com', 'test', 'Harvard', 'Medicine', 'NEET SS', '2024-06-01 11:39:00');

-- Membuat tabel form2_internship
CREATE TABLE IF NOT EXISTS `form2_internship` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `selectedCountry` varchar(100) NOT NULL,
  `selectedIndustry` varchar(100) NOT NULL,
  `selectedQualification` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form2_internship
INSERT INTO `form2_internship` (`fullname`, `email`, `message`, `selectedCountry`, `selectedIndustry`, `selectedQualification`, `created_at`) VALUES
  ('aji', 'asa@gmail.com', 'asa', 'Australia', 'Engineering', 'Certificate II in Automotive Servicing Technology - AUR20520', '2024-05-18 10:33:01'),
  ('hai', 'hai@gmail.com', 'hay', 'Australia', 'Engineering', 'Certificate I in Construction - CPC10111', '2024-05-18 11:37:59'),
  ('asa', 'asas@gmail.com', 'sda', 'Germany', 'Civil Construction', 'Certificate II in Construction Pathways - CPC20220', '2024-05-18 12:58:32'),
  ('aji', 'aji@gmail.com', 'ah', 'Germany', 'Agriculture', 'Certificate III in Agriculture (AHC30116)', '2024-05-18 18:23:07'),
  ('aji', 'aji@gmail.com', 'test', 'Australia', 'Civil Construction', 'Bachelor of Civil Engineering', '2024-05-18 18:49:51'),
  ('aji', 'aji@gmail.com', 'aji\r\n', 'Australia', 'Agriculture', 'Production', '2024-05-23 07:16:46'),
  ('test', 'test@gmail.com', 'hai', 'Germany', 'Agriculture', 'Production', '2024-05-31 05:18:17'),
  ('test', 'tesat@gmail.com', 'Adji', 'Germany', 'Automotive', 'Vehicle Design and Manufacturing', '2024-06-01 05:02:05'),
  ('test', 'tesat@gmail.com', 'Adji', 'Germany', 'Automotive', 'Vehicle Design and Manufacturing', '2024-06-01 05:12:19'),
  ('ad', 'as@gmail.com', 'ssa', 'Australia', 'Information Technology', 'Not sure yet?', '2024-06-01 06:16:37'),
  ('test', 'test@gmail.com', 'aji', 'Australia', 'Hair & Beauty', 'Certificate II in Salon Assistant – SHB20216', '2024-06-01 06:18:06'),
  ('test', 'test@gmail.com', 'aji', 'Australia', 'Hair & Beauty', 'Certificate II in Salon Assistant – SHB20216', '2024-06-01 06:20:43'),
  ('ets', 'tes@gmail.com', 'teasa', 'Australia', 'Automotive', 'Vehicle Design and Manufacturing', '2024-06-01 06:32:31');

-- Membuat tabel form2_jobs
CREATE TABLE IF NOT EXISTS `form2_jobs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `selectedCountry` varchar(255) NOT NULL,
  `selectedIndustry` varchar(255) NOT NULL,
  `selectedQualification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form2_jobs
INSERT INTO `form2_jobs` (`fullname`, `email`, `message`, `selectedCountry`, `selectedIndustry`, `selectedQualification`, `created_at`) VALUES
  ('test', 'test@gmail.com', 'etsa', 'Singapore', 'Retail Services', 'Retail Manager', '2024-06-01 07:33:19'),
  ('test', 'test@gmail.com', 'etsa', 'Singapore', 'Retail Services', 'Retail Manager', '2024-06-01 07:34:30'),
  ('test', 'test@gmail.com', 'etsa', 'Singapore', 'Retail Services', 'Retail Manager', '2024-06-01 07:34:31'),
  ('test', 'test@gmail.com', 'etsa', 'Singapore', 'Retail Services', 'Retail Manager', '2024-06-01 07:34:34'),
  ('test', 'test@gmail.com', 'etsa', 'Singapore', 'Retail Services', 'Retail Manager', '2024-06-01 07:38:56');

-- Membuat tabel form2_rpl_certification
CREATE TABLE IF NOT EXISTS `form2_rpl_certification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `selectedCountry` varchar(255) NOT NULL,
  `selectedIndustry` varchar(255) NOT NULL,
  `selectedQualification` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form2_rpl_certification
INSERT INTO `form2_rpl_certification` (`fullname`, `email`, `message`, `selectedCountry`, `selectedIndustry`, `selectedQualification`, `created_at`) VALUES
  ('test', 'test@gmail.com', 'rtes', 'Australia', 'Horticulture & Land Management', 'Certificate III in Horticulture – AHC30722', '2024-06-01 06:21:03'),
  ('test', 'test@gmail.com', 'rtes', 'Australia', 'Horticulture & Land Management', 'Certificate III in Horticulture – AHC30722', '2024-06-01 06:21:10'),
  ('test2', 'test2@gmail.com', 'testtttt', 'Australia', 'Disability', 'Not sure yet?', '2024-06-01 06:31:50');

-- Membuat tabel form_elicos
CREATE TABLE IF NOT EXISTS `form_elicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `intake` varchar(50) NOT NULL,
  `english_level` varchar(50) NOT NULL,
  `test_type` varchar(50) NOT NULL,
  `test_score` decimal(4,2) DEFAULT NULL,
  `state` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `sure_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text,
  `id_card_path` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Membuat tabel form_germany_programme
CREATE TABLE IF NOT EXISTS `form_germany_programme` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `language_level` varchar(255) NOT NULL,
  `country_origin` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `sure_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text,
  `resume_filename` varchar(255) DEFAULT NULL,
  `id_card1_filename` varchar(255) DEFAULT NULL,
  `id_card2_filename` varchar(255) DEFAULT NULL,
  `id_card3_filename` varchar(255) DEFAULT NULL,
  `id_card_other_filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form_germany_programme
INSERT INTO `form_germany_programme` (`program`, `qualification`, `language_level`, `country_origin`, `first_name`, `sure_name`, `email`, `country_code`, `phone`, `message`, `resume_filename`, `id_card1_filename`, `id_card2_filename`, `id_card3_filename`, `id_card_other_filename`, `created_at`) VALUES
  ('STUDIUM AN HOCHSCHULEN UND UNIVERSITAT', 'Bachelor of Science', 'A2', 'test', 'ajia', 'test', 'adji@gmail.com', '93', '082247896376', 'rsr', '', '', '', '', '', '2024-06-02 12:40:26');

-- Membuat tabel form_internship
CREATE TABLE IF NOT EXISTS `form_internship` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `sure_name` varchar(255) NOT NULL,
  `student_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `student_doc_path` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form_internship
INSERT INTO `form_internship` (`country`, `industry`, `qualification`, `first_name`, `sure_name`, `student_number`, `email`, `phone`, `message`, `student_doc_path`, `resume_path`, `created_at`) VALUES
  ('Australia', 'Education', 'Child Care', 'test', 'test', '2198219', 'muhammadadji1710@gmail.com', '0192821983', 'test', '../uploads/Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '../uploads/Profile Ir. Nana Saragih.pdf', '2024-06-01 06:44:18'),
  ('Australia', 'Automotive', 'Vehicle Design and Manufacturing', '', '', '', '', '', '', '../uploads/Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '../uploads/Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '2024-06-02 03:54:34');

-- Membuat tabel form_job
CREATE TABLE IF NOT EXISTS `form_job` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country_code` varchar(10) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `message` text,
  `student_doc_path` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form_job
INSERT INTO `form_job` (`country`, `industry`, `qualification`, `first_name`, `last_name`, `email`, `country_code`, `phone`, `message`, `student_doc_path`, `resume_path`, `created_at`) VALUES
  ('Australia', 'Agriculture', 'Production', 'null', 'null', 'null', NULL, 'null', 'null', NULL, NULL, '2024-06-02 08:43:15'),
  ('Aruba', 'Agriculture', 'Production', 'ajia', 'ew', 'as@gmail.com', '', '0822', 'wq', NULL, '../uploads/Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '2024-06-02 08:52:29'),
  ('Aruba', 'Agriculture', 'Farming', 'aji', 'ew', 'aduha@gmail.com', '+44', '0192821983', 'saa', '../uploads/Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '../uploads/440751036_122116775342271192_8519800860579082067_n.jpg', '2024-06-02 08:57:41');

-- Membuat tabel form_rpl_certification
CREATE TABLE IF NOT EXISTS `form_rpl_certification` (
  `id` int NOT NULL AUTO_INCREMENT,
  `industry` varchar(255) NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience_years` int NOT NULL,
  `work_location` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `sure_name` varchar(255) NOT NULL,
  `usi_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text,
  `visa_doc_filename` varchar(255) NOT NULL,
  `resume_filename` varchar(255) NOT NULL,
  `id_card1_filename` varchar(255) DEFAULT NULL,
  `id_card2_filename` varchar(255) DEFAULT NULL,
  `id_card3_filename` varchar(255) DEFAULT NULL,
  `id_card4_filename` varchar(255) DEFAULT NULL,
  `id_card_other_filename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel form_rpl_certification
INSERT INTO `form_rpl_certification` (`industry`, `qualification`, `experience_years`, `work_location`, `state`, `first_name`, `sure_name`, `usi_number`, `email`, `country_code`, `phone`, `message`, `visa_doc_filename`, `resume_filename`, `id_card1_filename`, `id_card2_filename`, `id_card3_filename`, `id_card4_filename`, `id_card_other_filename`) VALUES
  ('Civil Construction', 'Not sure yet?', 1, 'Australia', 'QLD', 'test', 'test', '21311', 'adji@gmail.com', '49', '0192821983', 'ers', 'Profile Bu Nana Saragih - fix.pdf', 'Profile Bu Nana Saragih - fix2.pdf', '297314306_10160367847658559_6675300679309529994_n-removebg-preview.png', '', '', '', ''),
  ('Information Technology', 'Not sure yet?', 0, 'Australia', 'NT', 'test', 'test', 'eer', 'adji@gmail.com', '355', '23231', 'ere', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '', '', '', '', ''),
  ('Commercial Cookery & Hospitality', 'Certificate III in Commercial Cookery – SIT30821', 3, 'Australia', 'QLD', 'test', 'test', '13891321', 'adji@gmail.com', '61', '082247896376', 'rewsa', 'Profile Ir. Nana Saragih.pdf', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '', '', '', '', ''),
  ('Retail Services', 'Not sure yet?', 1, 'Australia', 'QLD', 'aji', 'test', 'asdasd', 'adji@gmail.com', '54', '082247896376', 'tes', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', '', '', '', '', ''),
  ('Transport & Logistics', 'Not sure yet?', 0, 'None', 'VIC', 'tess', 'test', '343434', '4554', '61', '082247896376', '343', 'Putih Minimalis Sederhana Profesional Administrasi Perkantoran Resume.pdf', 'Senior_Business_Strategist_Resume.docx', '', '', '', '', '');

-- Membuat tabel images
CREATE TABLE IF NOT EXISTS `images` (
  `id_pk` int NOT NULL AUTO_INCREMENT,
  `album_id` int DEFAULT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pk`),
  KEY `album_id` (`album_id`),
  CONSTRAINT `images_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `album` (`id_pk`)
);

-- Membuat tabel index_service
CREATE TABLE IF NOT EXISTS `index_service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `selectedCountry` varchar(255) NOT NULL,
  `selectedService` varchar(255) NOT NULL,
  `selectedNationality` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Menambahkan data ke tabel index_service
INSERT INTO `index_service` (`fullname`, `email`, `message`, `selectedCountry`, `selectedService`, `selectedNationality`, `created_at`) VALUES
  ('aji', 'aji@gmail.com', 'aji', 'Germany', 'RPL Certification', 'Brazilian', '2024-05-21 06:37:32'),
  ('aji', 'aji@gmail.com', 'aji', 'Germany', 'RPL Certification', 'Brazilian', '2024-05-21 06:38:36'),
  ('aji', 'aji@gmail.com', 'aisa', 'Australia', 'Jobs', 'Brazilian', '2024-05-21 07:10:57');

-- Membuat tabel study_visa_form
CREATE TABLE IF NOT EXISTS `study_visa_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `nationalitycountry` varchar(100) NOT NULL,
  `visaCountry` varchar(100) NOT NULL,
  `visaType` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `student_doc_path` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);

-- Membuat tabel training_visa_form
CREATE TABLE IF NOT EXISTS `training_visa_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) NOT NULL,
  `nationalitycountry` varchar(100) NOT NULL,
  `visaCountry` varchar(100) NOT NULL,
  `visaType` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `student_doc_path` varchar(255) DEFAULT NULL,
  `resume_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
