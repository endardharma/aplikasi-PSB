-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 01:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-psb`
--

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
-- Table structure for table `jurusan_siswas`
--

CREATE TABLE `jurusan_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurusan_siswas`
--

INSERT INTO `jurusan_siswas` (`id`, `nis`, `jurusan_id`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, '2024-02-02 11:19:38', '2024-02-02 11:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_siswas`
--

CREATE TABLE `kelas_siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelas_siswas`
--

INSERT INTO `kelas_siswas` (`id`, `nis`, `kelas_id`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 2, '2024-02-02 10:09:13', '2024-02-02 10:16:25');

-- --------------------------------------------------------

--
-- Table structure for table `masterguru`
--

CREATE TABLE `masterguru` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_guru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `status_pegawai` enum('Aktif','Non-Aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `jabatan` bigint(20) UNSIGNED DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `masterkriteria`
--

CREATE TABLE `masterkriteria` (
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot_kriteria` double(8,2) NOT NULL DEFAULT 0.00,
  `atribut_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masterkriteria`
--

INSERT INTO `masterkriteria` (`kode_kriteria`, `user_id`, `nama_kriteria`, `bobot_kriteria`, `atribut_kriteria`, `created_at`, `updated_at`) VALUES
('K01', 4, 'Nilai Raport', 30.00, 'Benefit', '2024-02-01 03:59:05', '2024-02-01 04:34:41'),
('K02', 4, 'NIlai Ketidakhadiran', 0.00, 'Cost', '2024-02-01 04:01:35', '2024-02-01 04:01:35'),
('K03', 4, 'nilai sikap', 0.00, 'Benefit', '2024-02-01 04:02:45', '2024-02-01 04:02:45'),
('K04', 4, 'Nilai Keterlambatan', 0.00, 'Benefit', '2024-02-01 04:36:09', '2024-02-01 04:36:09'),
('K05', 4, 'Nilai Prestasi', 0.00, 'Benefit', '2024-02-01 04:54:52', '2024-02-01 04:54:52'),
('K06', 4, 'Nilai Hafalan', 0.00, 'Benefit', '2024-02-01 05:12:28', '2024-02-01 05:12:28');

-- --------------------------------------------------------

--
-- Table structure for table `mastermapel`
--

CREATE TABLE `mastermapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelompok_mapel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mastersiswa`
--

CREATE TABLE `mastersiswa` (
  `nis` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nik` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mastersiswa`
--

INSERT INTO `mastersiswa` (`nis`, `user_id`, `nik`, `nisn`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `jenkel`, `agama`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `alamat`, `created_at`, `updated_at`) VALUES
('1891243512', 2, '2901872512', '1289102931', 'Eko', 'Surabaya', '2024-02-13', 'L', 'konghucu', 'Oke', 'Ika', 'PNS', 'ART', 'Manukan', '2024-01-31 13:44:54', '2024-01-31 14:44:10'),
('29849301291', 2, '0918728391', '91284712841', 'Jeje', 'Surabaya', '2024-02-17', 'P', 'konghucu', 'Budi', 'Eki', 'PNS', 'PNS', 'Jelidro', '2024-01-31 14:41:19', '2024-01-31 14:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusans`
--

CREATE TABLE `master_jurusans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_jurusans`
--

INSERT INTO `master_jurusans` (`id`, `nama_jurusan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'MIPA', 5, '2024-02-02 10:52:07', '2024-02-02 10:52:38'),
(2, 'IIS', 5, '2024-02-02 10:54:15', '2024-02-02 10:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE `master_kelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`id`, `nama_kelas`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '10 MIPA 1', 5, '2024-02-01 07:00:52', '2024-02-01 07:40:47'),
(2, '10 MIPA 2', 5, '2024-02-02 10:11:11', '2024-02-02 10:11:11');

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
(19, '2023_11_02_163459_create_roles_table', 1),
(20, '2014_10_12_000000_create_users_table', 2),
(21, '2014_10_12_100000_create_password_resets_table', 3),
(22, '2019_08_19_000000_create_failed_jobs_table', 4),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(24, '2024_01_21_220627_create_user_details_table', 6),
(25, '2023_12_23_162604_create_mastersiswa', 7),
(26, '2024_01_26_155045_create_master_kelas_table', 8),
(27, '2024_01_26_155430_create_kelas_siswas_table', 9),
(28, '2024_01_26_205602_create_master_jurusans_table', 10),
(29, '2024_01_26_213230_create_jurusan_siswas_table', 11),
(30, '2023_12_23_163401_create_masterkriteria', 12),
(31, '2024_01_26_214034_create_periode_kriterias_table', 13),
(32, '2023_12_23_161349_create_mastermapel', 14),
(33, '2024_01_18_173552_create_nilairaport', 15),
(34, '2023_12_15_183453_create_nilaiketidakhadiran', 16),
(35, '2023_12_16_073810_create_nilaisikap', 17),
(36, '2023_12_16_102907_create_nilaiprestasi', 18),
(37, '2023_12_17_160823_create_nilaiketerlambatan', 19),
(38, '2023_12_19_073308_create_nilaihafalan', 20),
(39, '2024_01_27_110326_create_nilairaport', 21),
(40, '2024_01_27_101814_create_nilai_semua_kriterias_table', 22),
(41, '2024_01_27_110726_create_nilai_akhirs_table', 23),
(42, '2024_01_29_182117_create_jurusan_siswas_table', 24),
(43, '2023_12_19_121657_create_nilaisemuamapel', 25),
(44, '2023_12_19_124357_create_nilaiakhir', 25),
(45, '2024_01_04_095541_create_masterguru', 25),
(46, '2024_02_06_121854_create_nilai_semua_kriterias', 26);

-- --------------------------------------------------------

--
-- Table structure for table `nilaiakhir`
--

CREATE TABLE `nilaiakhir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_akhir` double(8,2) NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilaihafalan`
--

CREATE TABLE `nilaihafalan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_juz` double NOT NULL,
  `makhrodul_huruf` double NOT NULL,
  `ketentuan_ilmu_tajwid` double NOT NULL,
  `irama_lagu` double NOT NULL,
  `fasokhah` double NOT NULL,
  `nilai_hafalan` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaihafalan`
--

INSERT INTO `nilaihafalan` (`id`, `nis`, `kelas_id`, `jumlah_juz`, `makhrodul_huruf`, `ketentuan_ilmu_tajwid`, `irama_lagu`, `fasokhah`, `nilai_hafalan`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 1, 20, 10, 30, 10, 71, 'ganjil', '2023', '2024-02-05 09:37:40', '2024-02-05 09:37:40'),
(2, '29849301291', 1, 2, 20, 10, 30, 10, 72, 'ganjil', '2023', '2024-02-05 09:37:40', '2024-02-05 09:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `nilaiketerlambatan`
--

CREATE TABLE `nilaiketerlambatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_keterlambatan` int(11) NOT NULL,
  `nilai_keterlambatan` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaiketerlambatan`
--

INSERT INTO `nilaiketerlambatan` (`id`, `nis`, `kelas_id`, `jumlah_keterlambatan`, `nilai_keterlambatan`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 0, 5, 'ganjil', '2023', '2024-02-05 09:30:17', '2024-02-05 09:30:17'),
(2, '29849301291', 1, 1, 4, 'ganjil', '2023', '2024-02-05 09:30:17', '2024-02-05 09:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `nilaiketidakhadiran`
--

CREATE TABLE `nilaiketidakhadiran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `izin` int(11) NOT NULL,
  `tanpa_keterangan` int(11) NOT NULL,
  `nilai_ketidakhadiran` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaiketidakhadiran`
--

INSERT INTO `nilaiketidakhadiran` (`id`, `nis`, `kelas_id`, `hadir`, `sakit`, `izin`, `tanpa_keterangan`, `nilai_ketidakhadiran`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 0, 0, 0, 0, 5, 'ganjil', '2023', '2024-02-05 07:46:06', '2024-02-05 07:46:06'),
(2, '29849301291', 1, 0, 0, 0, 0, 5, 'ganjil', '2024', '2024-02-05 07:46:06', '2024-02-05 07:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `nilaiprestasi`
--

CREATE TABLE `nilaiprestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan_prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_prestasi` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaiprestasi`
--

INSERT INTO `nilaiprestasi` (`id`, `nis`, `kelas_id`, `keterangan_prestasi`, `nilai_prestasi`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 'Tingkat International Juara 1', 12, 'ganjil', '2023', '2024-02-05 08:16:16', '2024-02-05 08:16:16'),
(2, '29849301291', 1, 'Tingkat Provinsi Juara 3', 4, 'ganjil', '2023', '2024-02-05 08:16:16', '2024-02-05 08:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `nilairaport`
--

CREATE TABLE `nilairaport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `png_pai` double NOT NULL,
  `png_ppkn` double NOT NULL,
  `png_bind` double NOT NULL,
  `png_mtk_umum` double NOT NULL,
  `png_sjr_indo` double NOT NULL,
  `png_bing` double NOT NULL,
  `png_senbud` double NOT NULL,
  `png_penjaskes` double NOT NULL,
  `png_pkwu` double NOT NULL,
  `png_bhs_daerah` double NOT NULL,
  `png_mtk_peminatan` double NOT NULL,
  `png_fisika` double NOT NULL,
  `png_kimia` double NOT NULL,
  `png_biologi` double NOT NULL,
  `png_fiqih` double NOT NULL,
  `png_bhs_arab` double NOT NULL,
  `png_conversation` double NOT NULL,
  `png_ekonomi` double NOT NULL,
  `ktr_pai` double NOT NULL,
  `ktr_ppkn` double NOT NULL,
  `ktr_bind` double NOT NULL,
  `ktr_mtk_umum` double NOT NULL,
  `ktr_sjr_indo` double NOT NULL,
  `ktr_bing` double NOT NULL,
  `ktr_senbud` double NOT NULL,
  `ktr_penjaskes` double NOT NULL,
  `ktr_pkwu` double NOT NULL,
  `ktr_bhs_daerah` double NOT NULL,
  `ktr_mtk_peminatan` double NOT NULL,
  `ktr_fisika` double NOT NULL,
  `ktr_kimia` double NOT NULL,
  `ktr_biologi` double NOT NULL,
  `ktr_fiqih` double NOT NULL,
  `ktr_bhs_arab` double NOT NULL,
  `ktr_conversation` double NOT NULL,
  `ktr_ekonomi` double NOT NULL,
  `nilai_pengetahuan` double NOT NULL,
  `nilai_keterampilan` double NOT NULL,
  `nilai_raport` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilairaport`
--

INSERT INTO `nilairaport` (`id`, `nis`, `kelas_id`, `png_pai`, `png_ppkn`, `png_bind`, `png_mtk_umum`, `png_sjr_indo`, `png_bing`, `png_senbud`, `png_penjaskes`, `png_pkwu`, `png_bhs_daerah`, `png_mtk_peminatan`, `png_fisika`, `png_kimia`, `png_biologi`, `png_fiqih`, `png_bhs_arab`, `png_conversation`, `png_ekonomi`, `ktr_pai`, `ktr_ppkn`, `ktr_bind`, `ktr_mtk_umum`, `ktr_sjr_indo`, `ktr_bing`, `ktr_senbud`, `ktr_penjaskes`, `ktr_pkwu`, `ktr_bhs_daerah`, `ktr_mtk_peminatan`, `ktr_fisika`, `ktr_kimia`, `ktr_biologi`, `ktr_fiqih`, `ktr_bhs_arab`, `ktr_conversation`, `ktr_ekonomi`, `nilai_pengetahuan`, `nilai_keterampilan`, `nilai_raport`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 90, 87, 88, 87, 84, 88, 85, 89, 86, 82, 82, 87, 88, 86, 87, 81, 88, 88, 88, 87, 88, 85, 84, 84, 88, 89, 87, 85, 80, 88, 83, 88, 84, 82, 88, 88, 86.27778, 85.8889, 86.0833, 'ganjil', '2023', '2024-02-05 12:17:22', '2024-02-05 12:17:22'),
(2, '29849301291', 1, 90, 87, 88, 87, 84, 88, 85, 89, 86, 82, 82, 87, 88, 86, 87, 81, 88, 88, 88, 87, 88, 85, 84, 84, 88, 89, 87, 85, 80, 88, 83, 88, 84, 82, 88, 88, 86.27778, 85.8889, 86.0833, 'ganjil', '2023', '2024-02-05 12:17:22', '2024-02-05 12:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `nilaisemuamapel`
--

CREATE TABLE `nilaisemuamapel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c1` double(8,2) NOT NULL,
  `c2` double(8,2) NOT NULL,
  `c3` double(8,2) NOT NULL,
  `c4` double(8,2) NOT NULL,
  `c5` double(8,2) NOT NULL,
  `c6` double(8,2) NOT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilaisikap`
--

CREATE TABLE `nilaisikap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `keterangan_sikap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_sikap` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilaisikap`
--

INSERT INTO `nilaisikap` (`id`, `nis`, `kelas_id`, `keterangan_sikap`, `nilai_sikap`, `semester`, `tahun_ajar`, `created_at`, `updated_at`) VALUES
(1, '1891243512', 1, 'Sangat Baik', 5, 'ganjil', '2023', '2024-02-05 08:05:37', '2024-02-05 08:05:37'),
(2, '29849301291', 1, 'Sangat Baik', 5, 'ganjil', '2023', '2024-02-05 08:05:37', '2024-02-05 08:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_akhirs`
--

CREATE TABLE `nilai_akhirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilai_akhir` double NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_semua_kriterias`
--

CREATE TABLE `nilai_semua_kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilairaport_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilaiketidakhadiran_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilaisikap_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilaiprestasi_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilaiketerlambatan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nilaihafalan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `periode_kriterias`
--

CREATE TABLE `periode_kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bobot_kriteria` double(8,2) NOT NULL DEFAULT 0.00,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Access Token', 'ff73f2effbcaaecaf68744e0e598d81af3dcd820273fdd38ee42a6876c53c96f', '[\"*\"]', '2024-01-30 13:18:53', NULL, '2024-01-30 09:04:35', '2024-01-30 13:18:53'),
(2, 'App\\Models\\User', 1, 'Access Token', '5074655a71c1a2d653da805acd4b650184c1e0d57996d0794e0ff7b475923607', '[\"*\"]', '2024-01-31 14:47:15', NULL, '2024-01-31 11:33:46', '2024-01-31 14:47:15'),
(3, 'App\\Models\\User', 1, 'Access Token', 'c7d9831f1c47f6f07c5cd20f82f28f6a799a6eedaa3b208b925aa4321cc519a4', '[\"*\"]', '2024-02-01 07:30:36', NULL, '2024-02-01 03:26:33', '2024-02-01 07:30:36'),
(4, 'App\\Models\\User', 1, 'Access Token', 'a6e25f4d60d3b28c8f71e10008e9d1044b00139b54c197fad87b0497f0211555', '[\"*\"]', '2024-02-01 13:39:33', NULL, '2024-02-01 07:30:52', '2024-02-01 13:39:33'),
(5, 'App\\Models\\User', 1, 'Access Token', 'ecbf1e4f80609da5f595cc5b976fc08b8273ac78afdef080a8a24413ed298c00', '[\"*\"]', NULL, NULL, '2024-02-02 08:02:23', '2024-02-02 08:02:23'),
(6, 'App\\Models\\User', 1, 'Access Token', '39bfac0f87529474e09df890993d0807b4594fe6e94ac07c248cd72e7b9435fc', '[\"*\"]', '2024-02-02 08:02:28', NULL, '2024-02-02 08:02:23', '2024-02-02 08:02:28'),
(7, 'App\\Models\\User', 1, 'Access Token', '7fb073a7a05552c636c58452447001aa13535e78bace235360b0c743b324243f', '[\"*\"]', '2024-02-02 13:28:04', NULL, '2024-02-02 08:30:07', '2024-02-02 13:28:04'),
(8, 'App\\Models\\User', 1, 'Access Token', '13ab6f8e17e04a0446fa4e2bfc818d31a5c2bfd1ebf783d470e7add9bc4d2b8a', '[\"*\"]', '2024-02-03 07:04:28', NULL, '2024-02-03 05:20:40', '2024-02-03 07:04:28'),
(9, 'App\\Models\\User', 1, 'Access Token', '042f645f6f2401a9c96ca56149a68b12e1ced22f14492d485fb39ee1f6e6ad07', '[\"*\"]', '2024-02-04 12:51:32', NULL, '2024-02-04 06:12:18', '2024-02-04 12:51:32'),
(10, 'App\\Models\\User', 1, 'Access Token', 'e482055ac70a8b091909bed6bdfac49279cee8f9d70a62d39d95a972d0830b8a', '[\"*\"]', '2024-02-05 12:17:24', NULL, '2024-02-05 07:03:43', '2024-02-05 12:17:24'),
(11, 'App\\Models\\User', 1, 'Access Token', '59018d354b9035d8f6f72de0030db9476d9ab3ee5d77767fbf945b21057207d3', '[\"*\"]', '2024-02-06 05:12:15', NULL, '2024-02-06 04:06:22', '2024-02-06 05:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Team IT', 'Hak Akses sebagai Super Admin', NULL, NULL),
(2, 'Siswa - Siswi', 'Hak Akses sebagai Siswa - Siswi', NULL, NULL),
(3, 'Guru BK', 'Hak Akses sebagai Guru BK', NULL, NULL),
(4, 'Admin Raport', 'Hak Akses sebagai Admin raport', NULL, NULL),
(5, 'Bagian Kurikulum', 'Hak Akses sebagai Bagian Kurikulum', NULL, NULL),
(6, 'Bagian Tata Usaha', 'Hak Akses sebagai Bagian Tata Usaha', NULL, NULL),
(7, 'Guru Agama', 'Hak Akses sebagai Guru Agama', NULL, NULL),
(8, 'Wali Kelas', 'Hak Akses sebagai Wali Kelas', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Team IT', 'teamit@gmail.com', '2023-11-04 03:11:44', '$2y$10$GB7lPl0ntUX9EpWd/KFxm.EDK0XOcLCmpC.pYg/yX7l2aWFBnp5HS', 1, NULL, '2023-11-04 03:11:44', '2023-11-04 03:11:44'),
(2, 'Siswa', 'siswa@gmail.com', '2023-11-04 03:11:44', '$2y$10$jot3zcdOvFGTE2gVwBtK.ONrvKOMamqSrm5FDylMFLl3MSdN9Od5G', 2, NULL, '2023-11-04 03:11:44', '2023-11-04 03:11:44'),
(3, 'Pak Wahyu', 'wahyu@gmail.com', '2024-01-30 12:42:40', '$2y$10$uv3WBqeJ1dIabRlsL9771e3iVU7tZLx5a5zchpIUXZ/N86vpmpTre', 3, NULL, '2024-01-30 12:42:40', '2024-01-31 12:26:38'),
(4, 'Pak Admin Raport', 'adminraport@gmai.com', '2024-02-01 03:51:00', '$2y$10$HPIQN0Oyku3mKtJnge7p9el2hMbzwPwhA0LFgGitgiChdEMKNMfRq', 4, NULL, '2024-02-01 03:51:01', '2024-02-01 03:51:01'),
(5, 'Pak Jaka', 'jaka@gmail.com', '2024-02-01 06:18:32', '$2y$10$JE4evK4hb9iQkeNs0rHALe582QCLKCnQ2oWvNdl7u8nri5SCXqr4a', 5, NULL, '2024-02-01 06:18:32', '2024-02-01 06:18:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `nip` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jenkel` enum('L','P') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'L',
  `tgl_lahir` date NOT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_user` enum('Aktif','Non-Aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`nip`, `user_id`, `jenkel`, `tgl_lahir`, `no_telp`, `alamat`, `status_user`, `is_active`, `created_at`, `updated_at`) VALUES
('1234567890', 1, 'P', '2000-02-05', '81345126710', 'Dk. Jelidro', 'Aktif', 1, '2023-11-04 03:11:44', '2024-01-31 14:19:11'),
('1986723451', 3, 'L', '2024-02-03', '081356712311', 'Manukam', 'Aktif', 1, '2024-01-31 12:36:59', '2024-01-31 12:36:59'),
('1987654321', 2, 'L', '2000-01-01', '081357849311', 'Dk. Manukan', 'Aktif', 1, '2023-11-04 03:11:44', '2023-11-04 03:11:44');

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
-- Indexes for table `jurusan_siswas`
--
ALTER TABLE `jurusan_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jurusan_siswas_nis_index` (`nis`),
  ADD KEY `jurusan_siswas_jurusan_id_index` (`jurusan_id`);

--
-- Indexes for table `kelas_siswas`
--
ALTER TABLE `kelas_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelas_siswas_nis_index` (`nis`),
  ADD KEY `kelas_siswas_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `masterguru`
--
ALTER TABLE `masterguru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `masterguru_jabatan_foreign` (`jabatan`);

--
-- Indexes for table `masterkriteria`
--
ALTER TABLE `masterkriteria`
  ADD PRIMARY KEY (`kode_kriteria`),
  ADD KEY `masterkriteria_user_id_index` (`user_id`);

--
-- Indexes for table `mastermapel`
--
ALTER TABLE `mastermapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mastermapel_user_id_index` (`user_id`);

--
-- Indexes for table `mastersiswa`
--
ALTER TABLE `mastersiswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `mastersiswa_nik_unique` (`nik`),
  ADD UNIQUE KEY `mastersiswa_nisn_unique` (`nisn`),
  ADD KEY `mastersiswa_user_id_index` (`user_id`);

--
-- Indexes for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_jurusans_user_id_index` (`user_id`);

--
-- Indexes for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `master_kelas_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaiakhir`
--
ALTER TABLE `nilaiakhir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaihafalan`
--
ALTER TABLE `nilaihafalan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilaihafalan_nis_index` (`nis`),
  ADD KEY `nilaihafalan_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilaiketerlambatan`
--
ALTER TABLE `nilaiketerlambatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilaiketerlambatan_nis_index` (`nis`),
  ADD KEY `nilaiketerlambatan_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilaiketidakhadiran`
--
ALTER TABLE `nilaiketidakhadiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilaiketidakhadiran_nis_index` (`nis`),
  ADD KEY `nilaiketidakhadiran_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilaiprestasi`
--
ALTER TABLE `nilaiprestasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilaiprestasi_nis_index` (`nis`),
  ADD KEY `nilaiprestasi_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilairaport`
--
ALTER TABLE `nilairaport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilairaport_nis_index` (`nis`),
  ADD KEY `nilairaport_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilaisemuamapel`
--
ALTER TABLE `nilaisemuamapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilaisikap`
--
ALTER TABLE `nilaisikap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilaisikap_nis_index` (`nis`),
  ADD KEY `nilaisikap_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilai_akhirs`
--
ALTER TABLE `nilai_akhirs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_akhirs_nis_index` (`nis`),
  ADD KEY `nilai_akhirs_kelas_id_index` (`kelas_id`);

--
-- Indexes for table `nilai_semua_kriterias`
--
ALTER TABLE `nilai_semua_kriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_semua_kriterias_nis_index` (`nis`),
  ADD KEY `nilai_semua_kriterias_nilairaport_id_index` (`nilairaport_id`),
  ADD KEY `nilai_semua_kriterias_nilaiketidakhadiran_id_index` (`nilaiketidakhadiran_id`),
  ADD KEY `nilai_semua_kriterias_nilaisikap_id_index` (`nilaisikap_id`),
  ADD KEY `nilai_semua_kriterias_nilaiprestasi_id_index` (`nilaiprestasi_id`),
  ADD KEY `nilai_semua_kriterias_nilaiketerlambatan_id_index` (`nilaiketerlambatan_id`),
  ADD KEY `nilai_semua_kriterias_nilaihafalan_id_index` (`nilaihafalan_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `periode_kriterias`
--
ALTER TABLE `periode_kriterias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periode_kriterias_kode_kriteria_index` (`kode_kriteria`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `user_details_user_id_index` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurusan_siswas`
--
ALTER TABLE `jurusan_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelas_siswas`
--
ALTER TABLE `kelas_siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `masterguru`
--
ALTER TABLE `masterguru`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mastermapel`
--
ALTER TABLE `mastermapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_kelas`
--
ALTER TABLE `master_kelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `nilaiakhir`
--
ALTER TABLE `nilaiakhir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilaihafalan`
--
ALTER TABLE `nilaihafalan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilaiketerlambatan`
--
ALTER TABLE `nilaiketerlambatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilaiketidakhadiran`
--
ALTER TABLE `nilaiketidakhadiran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilaiprestasi`
--
ALTER TABLE `nilaiprestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilairaport`
--
ALTER TABLE `nilairaport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilaisemuamapel`
--
ALTER TABLE `nilaisemuamapel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilaisikap`
--
ALTER TABLE `nilaisikap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nilai_akhirs`
--
ALTER TABLE `nilai_akhirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_semua_kriterias`
--
ALTER TABLE `nilai_semua_kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periode_kriterias`
--
ALTER TABLE `periode_kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurusan_siswas`
--
ALTER TABLE `jurusan_siswas`
  ADD CONSTRAINT `jurusan_siswas_jurusan_id_foreign` FOREIGN KEY (`jurusan_id`) REFERENCES `master_jurusans` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jurusan_siswas_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `kelas_siswas`
--
ALTER TABLE `kelas_siswas`
  ADD CONSTRAINT `kelas_siswas_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `kelas_siswas_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `masterguru`
--
ALTER TABLE `masterguru`
  ADD CONSTRAINT `masterguru_jabatan_foreign` FOREIGN KEY (`jabatan`) REFERENCES `roles` (`id`);

--
-- Constraints for table `masterkriteria`
--
ALTER TABLE `masterkriteria`
  ADD CONSTRAINT `masterkriteria_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mastermapel`
--
ALTER TABLE `mastermapel`
  ADD CONSTRAINT `mastermapel_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `mastersiswa`
--
ALTER TABLE `mastersiswa`
  ADD CONSTRAINT `mastersiswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `master_jurusans`
--
ALTER TABLE `master_jurusans`
  ADD CONSTRAINT `master_jurusans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `master_kelas`
--
ALTER TABLE `master_kelas`
  ADD CONSTRAINT `master_kelas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `nilaihafalan`
--
ALTER TABLE `nilaihafalan`
  ADD CONSTRAINT `nilaihafalan_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilaihafalan_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilaiketerlambatan`
--
ALTER TABLE `nilaiketerlambatan`
  ADD CONSTRAINT `nilaiketerlambatan_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilaiketerlambatan_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilaiketidakhadiran`
--
ALTER TABLE `nilaiketidakhadiran`
  ADD CONSTRAINT `nilaiketidakhadiran_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilaiketidakhadiran_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilaiprestasi`
--
ALTER TABLE `nilaiprestasi`
  ADD CONSTRAINT `nilaiprestasi_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilaiprestasi_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilairaport`
--
ALTER TABLE `nilairaport`
  ADD CONSTRAINT `nilairaport_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilairaport_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilaisikap`
--
ALTER TABLE `nilaisikap`
  ADD CONSTRAINT `nilaisikap_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilaisikap_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_akhirs`
--
ALTER TABLE `nilai_akhirs`
  ADD CONSTRAINT `nilai_akhirs_kelas_id_foreign` FOREIGN KEY (`kelas_id`) REFERENCES `master_kelas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_akhirs_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `nilai_semua_kriterias`
--
ALTER TABLE `nilai_semua_kriterias`
  ADD CONSTRAINT `nilai_semua_kriterias_nilaihafalan_id_foreign` FOREIGN KEY (`nilaihafalan_id`) REFERENCES `nilaihafalan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nilaiketerlambatan_id_foreign` FOREIGN KEY (`nilaiketerlambatan_id`) REFERENCES `nilaiketerlambatan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nilaiketidakhadiran_id_foreign` FOREIGN KEY (`nilaiketidakhadiran_id`) REFERENCES `nilaiketidakhadiran` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nilaiprestasi_id_foreign` FOREIGN KEY (`nilaiprestasi_id`) REFERENCES `nilaiprestasi` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nilairaport_id_foreign` FOREIGN KEY (`nilairaport_id`) REFERENCES `nilairaport` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nilaisikap_id_foreign` FOREIGN KEY (`nilaisikap_id`) REFERENCES `nilaisikap` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `nilai_semua_kriterias_nis_foreign` FOREIGN KEY (`nis`) REFERENCES `mastersiswa` (`nis`) ON DELETE CASCADE;

--
-- Constraints for table `periode_kriterias`
--
ALTER TABLE `periode_kriterias`
  ADD CONSTRAINT `periode_kriterias_kode_kriteria_foreign` FOREIGN KEY (`kode_kriteria`) REFERENCES `masterkriteria` (`kode_kriteria`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
