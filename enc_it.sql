-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2020 at 05:06 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enc_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `catatan`
--

CREATE TABLE IF NOT EXISTS `catatan` (
`id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `user` int(11) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catatan`
--

INSERT INTO `catatan` (`id`, `isi`, `user`, `tanggal`) VALUES
(1, 'test', 2, '2020-10-30 11:41:42'),
(2, 'tolong compile Ieu ieu ju', 8, '2020-10-30 11:42:06'),
(3, 'okee', 6, '2020-11-02 13:42:23'),
(4, 'okk', 1, '2020-11-02 13:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_it`
--

CREATE TABLE IF NOT EXISTS `dokumen_it` (
`id_dokumen` int(10) NOT NULL,
  `nm_dokumen` varchar(100) NOT NULL,
  `diupload_oleh` varchar(30) NOT NULL,
  `waktu_diupload` datetime NOT NULL,
  `dirubah_oleh` varchar(30) NOT NULL,
  `waktu_dirubah` datetime NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_it`
--

INSERT INTO `dokumen_it` (`id_dokumen`, `nm_dokumen`, `diupload_oleh`, `waktu_diupload`, `dirubah_oleh`, `waktu_dirubah`, `file`) VALUES
(1, 'Manual book IT, pdf', 'Ari Pratama Kusumah', '2020-11-24 14:57:27', 'E Hodijeh', '2020-11-25 13:23:22', 'COUNTER_REGISTER.ppt'),
(2, 'Manual Book sistem PMS', 'Ari Pratama Kusumah', '2020-11-24 14:59:14', 'E Hodijeh', '2020-11-25 13:23:51', 'DRAFT SURAT PERJANJIAN KONTRAK KERJA_OLD.pdf'),
(4, 'nyobain rubah', 'E Hodijeh', '2020-11-25 13:15:41', 'E Hodijeh', '2020-11-25 13:24:29', 'AhmadJuantoro_171011400142_Pert5-3-converted-compressed.pdf'),
(5, 'tester', 'E Hodijeh', '2020-11-25 13:26:11', 'E Hodijeh', '2020-11-25 13:26:11', 'export-to-excel.xls');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_it`
--

CREATE TABLE IF NOT EXISTS `laporan_it` (
`id_laporan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `pic` int(11) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `direct_request` varchar(30) DEFAULT NULL,
  `permasalahan` text,
  `perbaikan` text,
  `sparepart` varchar(100) DEFAULT NULL,
  `harga_sparepart` float DEFAULT NULL,
  `jenis` varchar(8) NOT NULL,
  `keterangan` text,
  `file` varchar(100) DEFAULT NULL,
  `dibuat_oleh` varchar(40) DEFAULT NULL,
  `dibuat_pada` datetime DEFAULT NULL,
  `dirubah_oleh` varchar(40) DEFAULT NULL,
  `dirubah_pada` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=478 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan_it`
--

INSERT INTO `laporan_it` (`id_laporan`, `tanggal`, `pic`, `lokasi`, `user`, `direct_request`, `permasalahan`, `perbaikan`, `sparepart`, `harga_sparepart`, `jenis`, `keterangan`, `file`, `dibuat_oleh`, `dibuat_pada`, `dirubah_oleh`, `dirubah_pada`) VALUES
(1, '2020-07-01', 2, 'GS', 'gress', 'Personal', 'PC gress tidak bisa print di printer epson 405 user zili', 'Sharing printer dari printer zili', ' -', 0, '', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(2, '2020-07-01', 2, 'HW', 'Pajak', 'Personal', 'tidak ada jaringan internet & telpon setelah pembongkaran ruangan', 'penarikan & krimping kabel baru untuk jaringan & kabel telpon', 'RG 45, RG 11, terminal telpon', 0, 'Software', 'Done', 'Aden.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(3, '2020-07-06', 2, 'KJ5', 'PLB', 'Personal', 'Internet loss', 'setting router PLB, online cctv camera', '-', 0, '', 'Done', 'WhatsApp Image 2020-07-06 at 3.14.31 PM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(4, '2020-07-09', 2, 'KJ4', 'Roni KJ 4', 'Personal', 'PC error', 'Upgrade Memory PC Pak Roni pakai Memory Exs KJ4', 'memory ex. KJ4', 0, '', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(5, '2020-07-09', 2, 'KJ12', 'Dadan', 'Personal', 'trouble windows error', 'iinstall windows 7', 'software windows 7', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(6, '2020-07-09', 2, 'KJ5', 'PLB', 'Personal', 'setting cctv', 'setting cctv online via aplikasi', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(7, '2020-07-22', 2, 'KJ4', 'Rini', 'Personal', 'PC error', 'Backup data, Instalasi windows 7, Instalasi driver printer L300', 'software windows 7, driver printer l300', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(8, '2020-07-22', 2, 'KJ12', 'kJ1', 'Personal', 'internet trouble, tidak terkoneksi', 'Restart Router', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(9, '2020-07-25', 2, 'KJ4', 'Server Kj4', 'Personal', 'Visit Indihome dan pengecekan internet KJ4 ruang server', 'Restart router Office KJ4', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(10, '2020-08-05', 2, 'KJ5', 'Mekanik shop', 'Personal', 'internet loss', 'visit indihome pengecekan fiber optik yg terputus & penarikan kabel baru ', 'kabel FO (indihome)', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(11, '2020-08-06', 2, 'KJ5', 'PLB', 'Personal', 'panel box cctv PLB Area Open yard 10.000 KJ5 jatuh ', 'Perbaikan panel box cctv PLB Area Open yard 10.000 KJ5 jatuh ', '-', 0, '', 'done', 'WhatsApp Image 2020-08-07 at 4.44.51 PM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(12, '2020-08-10', 2, 'KJ5', 'PLB', 'Personal', 'kabel camera terputus', 'Penggantian kabel protektor pleksibel camera cctv area Open yard PLB', 'kabel protector fleksibel camera cctv', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(13, '2020-07-01', 8, 'HW', 'Sigit sayogyo', 'Personal', 'laptop error', 'Scan and regenerator hdd pak Sigit sayogya', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(14, '2020-07-07', 8, 'HW', 'Andrianto', 'Personal', 'excel bermasalah (error)', 'Setting excel ', ' - ', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(15, '2020-07-07', 8, 'KJ4', 'KJ4', 'Personal', 'system', 'create tombol edit di checker', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(16, '2020-08-05', 8, 'HW', 'eka', 'Personal', 'tidak bisa print', 'Sharing printer acc ke mba eka', '-', 0, '', 'done', 'WhatsApp Image 2020-08-05 at 9.36.04 AM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(17, '2020-08-06', 8, 'HW', 'AR', 'Personal', 'tidak bisa print & Scan', 'Setup PC printer dan scanner AR', '-', 0, '', 'done', 'WhatsApp Image 2020-08-06 at 11.16.26 AM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(18, '2020-08-07', 8, 'PCI', 'Petrochina', 'Personal', 'Acces control rusak sudah tidak bisa di gunakan', 'Penggantian tombol acces control petrochina 6 unit', 'Acces control', 0, '', 'done', 'WhatsApp Image 2020-08-07 at 4.10.26 PM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(19, '2020-08-10', 8, 'HW', 'AR', 'Personal', 'source code', 'perubahan tarif kegiatan pada system AR , revisi tampilan berdasarkan client yang di pilih', '-', 0, '', 'done', 'WhatsApp Image 2020-08-10 at 4.05.00 PM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(20, '2020-07-01', 6, 'JGC', 'Alvino', 'Personal', 'tidak bisa convert pdf', 'Instal nitro pro pdf & do pdf di laptop pak alvino', '- ', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(21, '2020-07-01', 6, 'HW', 'Andri', 'Personal', 'laptop error', 'Backup data laptop pak andri', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(22, '2020-07-02', 6, 'JGC', 'Alvino', 'Personal', 'email Alvino minta password terus', 'case email done', '-', 0, '', 'done', 'WhatsApp Image 2020-07-02 at 3.06.38 PM.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(23, '2020-07-02', 6, 'HW', 'yosef', 'Personal', 'tidak bisa convert pdf', 'Instal office 2010 & nitro pro pdf dilaptop pak yosep', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(24, '2020-07-03', 6, 'JGC', 'PEIP', 'Personal', 'license expired antivirus KIS sonia, alvino, geno', 'input license KIS sonia, alvino, geno (1Z9VM-KEBA6-YS85D-1FS8Z)', 'software KIS ', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(25, '2020-07-03', 6, 'JGC', 'Dadang', 'Personal', 'tidak bisa print', 'Sharing printer dr laptop sonia ke printer pak dadang', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(26, '2020-07-03', 6, 'JGC', 'Willz cafe', 'Personal', 'jaringan lemot', 'Penggantian switch di willz cafe', 'switch', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(27, '2020-07-06', 6, 'HW', 'Jamal HRD', 'Personal', 'permintaan instal microsoft visio', 'Instal microsoft Visio dilaptop pak jamal', '-', 0, '', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(28, '2020-08-10', 7, 'HW', 'ekatama', 'Personal', 'migrasi email ekatamatrans.com dr idwebhost ke Gsuite ', 'Setting DNS, MX Record & TXT', ' - ', 0, 'Software', 'Done', '20200908144307.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(29, '2020-08-18', 8, 'JGC', 'jgc', 'Personal', 'untuk kebutuhan security', 'pemasangan ssl di jgcdrivingrange', ' -', 0, 'Software', 'done', '20200908144800.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(30, '2020-08-25', 8, 'HW', 'AR', 'Personal', 'System AR', 'Develope list job system ar', ' -', 0, 'Software', 'done', '20200908144924.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(31, '2020-09-07', 8, 'JGC', 'jgc', 'Personal', 'pembuatan absen kewaspadaan covid 19', 'setting with google form', ' -', 0, 'Software', 'done', '20200908145615.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(32, '2020-07-06', 6, 'HW', 'HRD', 'Personal', 'Trouble printer hp laserjet p1102w hrd', 'pengecekan unit ', ' - ', 0, 'Hardware', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(33, '2020-07-08', 6, 'KJ4', 'Anang', 'Personal', 'windows error', 'Instal ulang windows & aplikasi pendukung di laptop pak Anang mekanik', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(34, '2020-07-09', 6, 'HW', 'Tax', 'Personal', 'Trouble printer tax Epson L220', 'pengecekan & Maintennace unit ', ' - ', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(35, '2020-07-16', 6, 'JGC', 'albert', 'Personal', 'instal espt', 'Instal aplikasi espt PPh 23 dan PPh 4 ayat 2 di PC albert', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(36, '2020-07-16', 6, 'JGC', 'jgc', 'Personal', 'PC error', 'Setting startup & defrag by system di PC albert jgc', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(37, '2020-07-16', 6, 'JGC', 'sigit peip', 'Personal', 'tidak connect printer', 'Instalasi printer Canon PIXMA MP460 di laptop pak Sigit peip', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(38, '2020-07-16', 6, 'JGC', 'Dadang ', 'Personal', 'tidak bisa print', 'Sharing ke printer pak Dadang Canon MX320 dr PC ibu ayu', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(39, '2020-07-17', 6, 'JGC', 'PMS', 'Personal', 'Pemasangan antivirus di PC Server PMS jgc', 'input kode aktivasi lisence', 'Anti virus KIS', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(40, '2020-07-17', 6, 'JGC', 'Geno', 'Personal', 'tidak bisa print', 'Instal printer Epson L200 di PC gheno', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(41, '2020-07-24', 6, 'JGC', 'server jgc', 'Personal', 'cek database rhaptor', 'backup database rhaptor', ' -', 0, 'Software', 'done', '20200908155718.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(42, '2020-07-27', 6, 'HW', 'accounting', 'Personal', 'tinta printer habis', 'Pengisian tinta & head cleaning di printer accounting epson L365', 'tinta epson', 0, 'Hardware', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(43, '2020-08-03', 6, 'HW', 'retno', 'Personal', 'tidak bisa print', 'Instal dan setting printer Epson LX310 di PC Retno acc', ' -', 0, 'Software', 'done', '20200908160104.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(44, '2020-08-04', 6, 'HW', 'ismy', 'Personal', 'tidak bisa remote anydesk', 'Setting anydesk di lapSetting anydesk di laptop apple macOS ismi kasirtop apple macOS ismi kasir', ' -', 0, 'Software', 'done', '20200908160544.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(45, '2020-08-05', 6, 'HW', 'tyrsa', 'Personal', 'pdf', 'Instal dopdf di PC Tyrsa hrd', ' -', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(46, '2020-08-05', 6, 'HW', 'kapal MA 32', 'Personal', 'email tidak bisa send email', 'Remot laptop kapal MA32 trouble not send email', ' - ', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(47, '2020-09-08', 8, 'HW', 'HW', 'Personal', 'pengecekan internet lokal', 'cek bandwith internet hw lokal', NULL, 0, 'Software', 'done', '20200915085010.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(48, '2020-09-08', 8, 'KJ4', 'Operational KJ', 'Personal', 'system operational KJ', 'perubahan tallysheet job order vessel , penambahan kolom dimensi', ' -', 0, 'Software', 'pending', '20200915085851.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(49, '2020-09-08', 1, 'KJ4', 'Operational KJ', 'Personal', 'system operational KJ', 'penambahan logo dan package pada tallysheet loading of loading truck', ' - ', 0, 'Software', 'Pending', '20200915090350.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(50, '2020-09-08', 8, 'KJ4', 'Operational KJ', 'Personal', 'system operational KJ', 'regulasi finish job order truck di ata jam 15:00', ' -', 0, 'Software', 'pending', '20200915090527.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(51, '2020-09-09', 8, 'HW', 'Gress', 'Personal', 'Abbs error', 'sesetting abss di komputer grace', ' -', 0, 'Software', 'done', '20200915090850.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(52, '2020-09-09', 7, 'KJ4', 'Anang', 'Personal', 'Edit password email anang mujito (Karyawan Resign)', 'edit passwword by admin console', ' -', 0, 'Software', 'done', '20200915091223.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(53, '2020-09-14', 8, 'KJ4', 'Operational KJ', 'Personal', 'system operational KJ', 'Penambahan kolom client pada laporan prioder job order truck dan memunculkan tanggal yang sudah di cari', ' - ', 0, 'Software', 'pending', '20200915094738.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(54, '2020-08-06', 6, 'JGC', 'Geno, alvino, sonia', 'Personal', 'antivirus Expired', 'input kode license antivirus (1Z9VM-KEBA6-YS85D-1FS8Z)', 'Kaspersky internet security', 0, 'Software', 'done', '20200915100700.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(55, '2020-08-07', 6, 'JGC', 'BOD', 'Personal', 'penarikan kabel baru', 'Perapihan kabel diruang pak Indra', 'kabel lan', 0, 'Hardware', 'done', '20200915104004.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(56, '2020-08-07', 6, 'HW', 'yudi , triyatno', 'Personal', 'tidak bisa print', 'Sharing printer Epson L350 dr lapto pak Yudi ke printer triyatno', ' - ', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(57, '2020-08-07', 6, 'JGC', 'geno ', 'Personal', 'Trouble printer gheno cannot sharing printer', 'sharing printer geno', ' -', 0, 'Software', 'done', '20200915104257.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(58, '2020-08-10', 6, 'KJ4', 'sugeng', 'Personal', 'windows error', 'Instal ulang win7 laptop pak Sugeng kj4', ' -', 0, 'Software', 'done', '20200915104702.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(59, '2020-08-10', 6, 'GS', 'triyatno', 'Personal', 'PC error ', 'Penggantian LanCard di PC triyatno', 'Lancard', 0, 'Hardware', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(60, '2020-08-12', 6, 'HW', 'yuli', 'Personal', 'Troubel scan printer Epson L566 Bu Yuli', 'maintenance printer ', ' - ', 0, 'Hardware', 'done', '20200915105535.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(61, '2020-08-12', 6, 'HW', 'kasir', 'Personal', 'perpindahan lokasi pc kasir', 'Reposisi lokasi PC di kasir', ' -', 0, 'Software', 'Done', '20200915132928.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(62, '2020-08-12', 1, 'GS', 'tri hrd', 'Personal', 'windows error', 'Instal aplikasi pendukung untuk laptop Bu Tri hrd', ' -', 0, 'Software', 'done', '20200915133204.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(63, '2020-08-12', 6, 'HW', 'tri HRD', 'Personal', 'windows error', 'Instal aplikasi pendukung untuk laptop Bu Tri hrd', ' -', 0, 'Software', 'Done', '20200918130128.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(64, '2020-08-14', 6, 'HW', 'Kasir', 'Personal', 'Trouble not connection di all PC kasir', 'pengecekan jaringan ', ' - ', 0, 'Software', 'Done', '20200918130515.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(65, '2020-08-14', 6, 'HW', 'lia hrd', 'Personal', 'Error Adobe PDF tidak bisa di access di PC Lia hrd', 'install ulang adobe pdf', ' - ', 0, 'Software', 'done', '20200918130808.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(66, '2020-08-14', 1, 'GS', 'PEIP', 'Personal', 'tidak bisa connect printer', 'Sharing printer & maping data scan di all device peip', '-', 0, 'Software', 'done', '20200918131712.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(67, '2020-08-19', 6, 'HW', 'AR', 'Personal', 'tidak bisa print', 'Reset printer Epson L365 divisi AR karna blinkink', '-', 0, 'Hardware', 'Done', '20200918132634.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(68, '2020-08-19', 6, 'HW', 'Gress', 'Personal', 'Backup data Grace untuk perpindahan device PC', 'Backup data Grace untuk perpindahan device PC', '-', 0, 'Software', 'Done', '20200918132841.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(69, '2020-08-31', 6, 'HW', 'Zili', 'Personal', 'Trouble sdrive not connection di laptop zili', 'setting sdrive di laptop zili', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(70, '2020-08-31', 1, 'GS', 'Faseh', 'Personal', 'tidak bisa print', 'Instal printer Epson lx-310 di PC faseh acc', '- ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(71, '2020-08-31', 1, 'GS', 'santika', 'Personal', 'tidak bisa print ke tempat faseh', 'Sharing printer dr PC Santika ke printer faseh', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(72, '2020-08-31', 6, 'HW', 'yuni', 'Personal', 'windows error', 'Instal ulang PC Yuni kasir', ' - ', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(73, '2020-08-31', 1, 'GS', 'Ari', 'Personal', 'permintaan MR untuk monitor Ari KAsir', 'Penggantian monitor baru di Ari kasir', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(74, '2020-08-31', 6, 'HW', 'ABSS', 'Personal', 'Trouble database abss PT ekanuri', 'pengecekan database ABSS', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(75, '2020-09-01', 3, 'HW', 'Friska', 'Personal', 'permintaan instal dopdf', 'Instal dopdf di laptop Friska AR', ' -', 0, 'Software', 'Done', '20200918144932.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(76, '2020-09-01', 6, 'HW', 'Ali', 'Personal', 'Koneksi Jaringan', 'Instalasi koneksi jaringan baru untuk Ali acc', 'Kabel Lan, RG 45', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(77, '2020-09-01', 6, 'JGC', 'Jeremy', 'Personal', 'Antivirus bermasalah', 'Renewall antivirus di PC jeremy Peip by remot', ' -', 0, 'Software', 'Done', '20200918145247.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(78, '2020-09-01', 6, 'HW', 'Rizka', 'Personal', 'PC Sering restart', 'Penggantian kipas di PC Rizka AR', 'Kipas', 0, 'Hardware', 'done', '20200918145413.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(79, '2020-09-01', 6, 'HW', 'Icha Kasir', 'Personal', 'Trouble outbox don''t send di outlook Icha kasir', 'pengecekan email', ' -', 0, 'Software', 'Done', '20200918145605.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(80, '2020-09-01', 6, 'HW', 'kasir', 'Personal', 'Trouble Paperjam di printer Epson L220 kasir', 'maintenance printer ', ' - ', 0, 'Hardware', 'Done', '20200918145720.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(81, '2020-09-01', 6, 'HW', 'ariyani', 'Personal', 'Hasil print terpotong di printer Epson lx300+II kasir', 'perbaikan mesin ', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(82, '2020-09-01', 6, 'HW', 'Friska AR', 'Personal', 'Windows error, PC mati2 trs', 'Instalasi win7 dan backup data di PC Rizka AR', ' -', 0, 'Software', 'Done', '20200921093011.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(83, '2020-09-04', 6, 'HW', 'yuni', 'Personal', 'Trouble instalasi aplikasi abss di PC mba yuni kasir', 'pengecekan by system', ' -', 0, 'Software', 'Done', '20200921093557.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(84, '2020-09-08', 6, 'HW', 'PEIP', 'Personal', 'Pengecekan data upload untuk thender premier oil PT PEIP', 'Pengecekan data upload untuk thender premier oil PT PEIP', ' -', 0, 'Software', 'Done', '20200921093818.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(85, '2020-09-08', 6, 'HW', 'Bu etty', 'Personal', 'laptop error', 'Defrag & setting startup dilaptop Bu etty', ' -', 0, 'Software', 'Done', '20200921094000.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(86, '2020-09-09', 6, 'HW', 'Diah', 'Personal', 'pc lemot teridentifikasi virus', 'Scan antivirus di PC Diah kasir', ' -', 0, 'Software', NULL, '20200921094138.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(87, '2020-09-09', 6, 'GS', 'Puji Agency', 'Personal', 'Email masuk Spam ', 'Remot laptop mba puji trouble send to email spam', ' -', 0, 'Software', 'Done', '20200921094256.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(88, '2020-09-17', 6, 'GS', 'topan agency', 'Personal', 'Trouble excel', 'Trouble data Excel tidak bisa di open di PC pak topan agency by remot', ' - ', 0, 'Software', 'Done', '20200921103052.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(89, '2020-09-17', 6, 'GS', 'topan agency', 'Personal', 'sdrive bermasalah', 'Transfer data sdrive ke PC pak topan agency by remot', ' - ', 0, 'Software', 'Done', '20200921103328.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(90, '2020-09-18', 1, 'JGC', 'BOD', 'Personal', 'Router ', 'Pengecekan router di ruang meeting batz vip', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(91, '2020-09-18', 6, 'JGC', 'BOD', 'Personal', ' - ', 'Pemasangan kabel HDMI & kabel extender USB diruang Pak Indra jgc', 'HDMI, Extender ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(92, '2020-09-10', 8, 'HW', 'Gress', 'Personal', 'ABSS Error', 'setting abss di komputer grace', ' - ', 0, 'Software', 'Done', '20200922091211.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(93, '2020-09-17', 8, 'KJ4', 'Operational KJ', 'Personal', 'system operational KJ', 'Pembuatan table reject stevedoring, lo truck, stacking, internal moving', ' - ', 0, 'Software', 'Done', '20200922092836.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(94, '2020-09-18', 8, 'HW', 'Ali', 'Personal', 'tidak ada jaringan internet', 'Setting lan ali acc', '-', 0, 'Software', 'Done', '20200922093110.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(95, '2020-09-18', 8, 'HW', 'Santika', 'Personal', 'tidak ada jaringan internet', 'Setting lan santika di hw', ' - ', 0, 'Software', 'Done', '20200922093230.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(96, '2020-09-18', 8, 'HW', 'HW', 'Personal', ' -', 'Configurasi ip publik server aplikasi web', ' -', 0, 'Software', 'Done', '20200922093332.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(97, '2020-08-27', 2, 'KJ12', 'Timin', 'Personal', 'storage device full', 'Menghapus Email masuk dari tahun terdahulu', ' -', 0, 'Software', 'Done', '20200922100351.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(98, '2020-08-27', 2, 'KJ4', 'KJ4', 'Personal', 'Pengecekan NS', 'Pengecekan NS cctv area Welding Shoop KJ4', ' - ', 0, 'Hardware', 'Done', '20200922100537.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(99, '2020-09-02', 2, 'KJ12', 'Irnanto', 'Personal', 'PC Sering mati', 'Defrag PC Irnanto KJ1 Trouble sering mati', ' -', 0, 'Software', 'Done', '20201012114821.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(100, '2020-09-02', 2, 'KJ4', 'KJ', 'Personal', 'NS Error', 'Konfigurasi NS cctv area Welding Shoop', ' - ', 0, 'Hardware', 'Done', '20200922145033.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(101, '2020-03-02', 2, 'KJ4', 'Malik', 'Personal', 'tidak bisa print Epson L220', 'Sh6ng printer Epson', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(102, '2020-03-02', 6, 'HW', 'Andrianto', 'Personal', 'Permintaan install Aplikasi ABSS', 'Instal Aplikasi ABSS laptop Andrianto', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(103, '2020-03-02', 4, 'KJ5', 'KJ5', 'Personal', 'Pen6kan kabel NS', 'Pen6kan Kabel NS', 'Kabel NS', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(104, '2020-03-02', 8, 'HW', 'Etty', 'Personal', 'Error print PPH 21', 'Install & Configurasi crystal report', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(105, '2020-03-02', 6, 'HW', 'Andrianto', 'Personal', 'Connect printer laptop andrianto', 'Sh6ng printer L220di  PC Dhika', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(106, '2020-03-02', 6, 'GS', 'Acconting GS', 'Personal', 'Permintaan install Aplikasi ABSS', 'Install & Setting Aplikasi ABSS', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(107, '2020-03-02', 6, 'HW', 'Acc HW', 'Personal', 'Error Office ', 'Setting Activasi Office 2010', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(108, '2020-03-03', 6, 'HW', 'Tri', 'Personal', 'tidak bisa print & copy mesin foto copy lt.2', 'Setting mesin foto copy konica minolta ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(109, '2020-03-03', 6, 'JGC', 'Pak Indra', 'Personal', 'Koneksi J6ngan', 'Setting internet & speedtest koneksi internet by extender', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(110, '2020-03-03', 4, 'KJ4', 'KJ4', 'Personal', 'kabel kamera CCTV berantakan', 'Perapihan Kabel Kamera CCTV ', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(111, '2020-03-04', 6, 'HW', 'Andrianto', 'Personal', 'Tdak bisa print', 'Setting & Connect printer', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(112, '2020-03-04', 4, 'KJ5', 'KJ5 ', 'Personal', 'Camera CCTV', 'Perbaikan View CCTV camera 15 ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(113, '2020-03-05', 4, 'KJ12', 'Indri', 'Personal', 'printer rusak', 'Pengecekan & Pemasangan Printer ', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(114, '2020-03-05', 4, 'KJ12', 'Zulfahri', 'Personal', 'Office bermasalah', 'Activasi Office ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(115, '2020-03-05', 6, 'GS', 'Firman', 'Personal', 'Laptop tidak Connect Printer', 'Sh6ng Printer', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(116, '2020-03-05', 6, 'GS', 'Firman', 'Personal', 'Tidak bisa internet', 'Speedtest koneksi Internet', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(117, '2020-03-05', 4, 'KJ4', 'Sugeng', 'Personal', 'office error', 'Aktivasi Office', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(118, '2020-03-06', 6, 'GS', 'Andrianto', 'Personal', '', 'Mapping access database abss peip di laptop pak andri', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(119, '2020-03-10', 6, 'JGC', 'Pak Indra', 'Personal', 'Pengecekan Internet', 'Speedtest koneksi internet by extender ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(120, '2020-03-10', 4, 'KJ', '', 'Personal', 'camera cctv offline', 'Pengecekan adaptor camera cctv di area barcode kabel power ', '', 0, 'Hardware', '', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(121, '2020-03-10', 2, 'KJ5', 'Tomi', 'Personal', '', 'Pemindahan meja kerja team OPS KJ5 d6 ruang Tomi ke ruang Tengah OPS', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(122, '2020-03-10', 7, 'HW', 'Timin', 'Personal', 'permintaan email Timin untuk admin login user WMS KJ5', 'Create email teguh@ekanuri.com by admin console', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(123, '2020-03-10', 6, 'JGC', 'Pak Indra', 'Personal', 'Permintaan pemasangan kabel HDMI ruangan Pak Indra JGC', 'Pembelian kabel hdmi untuk ruang pak indra plus pemasangan Dan setting HDMI', 'Kabel HDMI', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(124, '2020-03-11', 4, 'KJ4', 'Lastono', 'Personal', 'office error', 'Update office 2007 ke 2010 serta aktivation ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(125, '2020-03-11', 3, 'GS', '', 'Personal', '', 'Invite PT ekatama trans logistik di Google', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(126, '2020-03-11', 4, 'KJ4', 'Rini', 'Personal', 'Kebel berantakan ', 'Perapian kabel', '', 0, 'Hardware', '', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(127, '2020-03-11', 3, 'HW', 'friska', 'Personal', '', 'Instal Nitro Pro 7', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(128, '2020-03-11', 3, 'HW', 'All user', 'Personal', 'toner mesin foto copy habis', 'Pengisinan toner & Maintenance Foto Copy', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(129, '2020-03-11', 6, 'JGC', 'Pak Indra', 'Personal', '', 'Pemasangan keyboard dan mouse di ruang pak indra', 'Keyboard & Mouse', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(130, '2020-03-12', 4, 'KJ12', 'Ria', 'Personal', 'Printer Ria kasir tdk bisa scan', 'Pengecekan & perbaikan printer ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(131, '2020-03-12', 6, 'KCI', 'Arul ', 'Personal', 'antivirus update', 'Remot pc arul cirebon plus transfer data antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(132, '2020-03-13', 3, 'HW', 'Abss KCI', 'Personal', 'ABSS KCI lemot', 'pengecekan PC untuk ABSS KCI', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(133, '2020-03-16', 6, 'JGC', 'Kasir', 'Personal', 'Trouble aplikasi raptor di kasir', 'pengecekan server raptor di office', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(134, '2020-03-16', 6, 'JGC', 'Driving', 'Personal', '', 'Instalasi camera cctv', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(135, '2020-03-16', 6, 'JGC', 'Dadang', 'Personal', 'Trouble PC stuck windows', 'Pengecekan windows', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(136, '2020-03-17', 7, 'HW', 'Andrianto', 'Personal', 'Permintaan email kasir 6yani, request pak andri', 'create email 6yani@ekanuri.com by admin console', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(137, '2020-03-18', 6, 'JGC', 'Counter Ball', 'Personal', 'tidak bisa print di counter ball', 'Setting printer counter ball', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(138, '2020-03-18', 8, 'HW', '', 'Personal', '', 'Verifikasi po kasir', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(139, '2020-03-18', 6, 'JGC', 'Pak Indra', 'Personal', '', 'Instalasi kabel j6ngan untuk ruang pak indra', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(140, '2020-03-20', 4, 'KJ12', 'Fikri ', 'Personal', 'Jarigan Internet Lemot', 'Pengecekan wifi', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(141, '2020-03-20', 4, 'KJ12', 'Iwan, Jekta', 'Personal', 'Notification antivirus', 'Update antivirus ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(142, '2020-03-20', 4, 'KJ4', 'Punto', 'Personal', 'Pemindahan pc pak punto di ruang gedung biru ke ruang scurity pos 1', 'Pemindahan pc pak punto', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(143, '2020-03-20', 5, 'Hw', 'Riska', 'Personal', 'casing PC Meleduk (terbakar)', 'Pergantian Power Supply', 'Power Supply', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(144, '2020-03-23', 4, 'KJ4', 'Server', 'Personal', 'Perapihan kabel ', 'Krimping kabel cctv di ruang server office', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(145, '2020-03-23', 4, 'Kj4', 'Faisal', 'Personal', 'printer', 'Instal driver printer di pc faisal ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(146, '2020-03-23', 5, 'HW', 'Finance', 'Personal', 'sytem finance', 'Penambahan kategori supplier dan filter supplier pada bidding item MR', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(147, '2020-03-24', 6, 'HW', 'Kasir', 'Personal', 'Migrasi printer', 'Pemindahan posisi printer diruang kasir', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(148, '2020-03-24', 6, 'HW', 'Accounting ', 'Personal', 'Error Office ', 'Activasi office 2010 dilaptop mba eka acc', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(149, '2020-03-24', 6, 'HW', 'Patra & Etty', 'Personal', 'Notification antivirus', 'Scan Kaspersky Tax', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(150, '2020-03-24', 3, 'HW', 'Friska', 'Personal', 'Notification antivirus', 'Scan Kaspersky PC AR - Friska', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(151, '2020-03-24', 5, 'HW', 'Eka', 'Personal', 'Error Office ', 'Install office di laptop ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(152, '2020-03-24', 6, 'GS', 'Dwi', 'Personal', 'Permintaan Instal ABSS ', 'Instal aplikasi abss & setting anydesk di pc mba dwi acc gs', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(153, '2020-03-26', 4, 'KJ5', '', 'Personal', 'Maintenance', 'Pengecekan internet di pc pak timin kj5 dan restart switch di ruang kj5 Mi', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(154, '2020-03-26', 4, 'KJ5', '', 'Personal', 'Maintenance', 'Pengecekan cctv KJ5 kj5 dan pengecekan switch', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(155, '2020-03-26', 2, 'HW', 'Etty', 'Personal', 'Virus ', 'Pengecekan PC Accounting Bu Etty & Scan HDD internal Accounting Bu Etty', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(156, '2020-03-26', 2, 'HW', 'Foto Copy', 'Personal', 'Maintenance', 'Pengecekan pack counter mesin foto copy Lt.2  & lt.3', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(157, '2020-03-27', 5, 'HW', 'Tyrsa', 'Personal', 'Blank Antivirus ', 'Scan & clean antivirus bu tyrsa hrd. Tadi blank lg stelah didelete virusnya', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(158, '2020-03-27', 3, 'HW', 'Didin', 'Personal', 'virus ', 'Scan HDD PC pak Didin', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(159, '2020-03-28', 6, 'JGC', 'Server', 'Personal', 'trouble server raptor', 'pengecekan by remote anydesk', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(160, '2020-03-29', 6, 'HW', 'Santika', 'Personal', 'ABBS ', 'Remot laptop santika transfer data abss dan sdrive, serta instal aplikasi tersebut', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(161, '2020-03-29', 4, 'KJ5', 'KJ5', 'Personal', '', 'Pembersihan ruang server perbaikan plapon  di KJ5 kj5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(162, '2020-03-30', 6, 'HW', 'friska', 'Personal', 'Virus ', 'Scan PC AR Friska', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(163, '2020-03-30', 3, 'JGC', 'server', 'Personal', '', 'Pengecekan server PEIP', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(164, '2020-03-31', 6, 'Hw', 'Patra  ', 'Personal', 'virus notification', 'Scan virus di pc patra', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(165, '2020-03-31', 4, 'KJ5', 'Teguh ', 'Personal', 'Tidak bisa buka email', 'Pengecekan internet  ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(166, '2020-03-31', 2, 'Kj4', 'Bambang ', 'Personal', 'tinta habis', 'Pengisian tinta  Epson Balck 664 Printer L1300 Bambang Ekajaya di Office Lt3 KJ4', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(167, '2020-04-01', 3, 'HW', 'Friska', 'Personal', 'PC Blank / error', 'Scan Antivirus', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(168, '2020-04-01', 3, 'HW', 'Patra', 'Personal', 'PC Blank / error', 'Scan Antivirus', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(169, '2020-04-01', 3, 'HW', 'Ajeng', 'Personal', 'Laptop Muncul Windows License will Expire soon', 'Activasi windows', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(170, '2020-04-02', 6, 'HW', 'Abss', 'Personal', 'Database abss pt ekanuri crase tidak bisa di access', 'Pengecekan ABSS', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(171, '2020-04-02', 2, 'HW', 'tyrsa', 'Personal', 'PC Sering restart karena virus', 'Scan & run update Antivirus ', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(172, '2020-04-03', 5, 'HW', 'Server ABSS ', 'Personal', 'PC Trouble', 'Pemasangan pc server abss & myob pt ekanuri', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(173, '2020-04-03', 4, 'HW', 'All', 'Personal', 'tidak bisa print mesin foto copy', 'Pengecekan mesin foto copy dengan pak bisri', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(174, '2020-04-03', 5, 'HW', 'Tyrsa', 'Personal', 'PC Sering restart karena virus', 'Scan & Update antivirus', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(175, '2020-04-06', 4, 'KJ4', 'Jetty ', 'Personal', '', 'Pengantian power listrik dan pemasangan t-dos,di area jety dan crew change', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(176, '2020-04-07', 4, 'KJ12', 'Start Energy', 'Personal', '', 'Pemasangan t-dus dan pengecekan kamera cctv di area start energi kj1', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(177, '2020-04-07', 6, 'HW', 'Ayu', 'Personal', 'network tidak terbaca ', 'Maping personalcloud divisi finance di pc mba ayu kasir', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(178, '2020-04-07', 6, 'HW', 'Gress', 'Personal', 'PC Blank / error', 'Scan antivirus di pc grace', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(179, '2020-04-07', 6, 'HW', 'Lastono', 'Personal', 'PC Blank / error', 'Scan antivirus di pc pak lastono kj4', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(180, '2020-04-07', 4, 'KJ5', 'Udiono', 'Personal', '', 'Pemindahan pc pak udiono ke tempat pak fahri', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(181, '2020-04-07', 6, 'KJ4', 'sugeng', 'Personal', 'Error Office', 'Activasi office 2010 di laptop pak sugeng', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(182, '2020-04-08', 5, 'HS', 'server  ', 'Personal', 'j6ngan lambat', 'Cek switch & access point lt 2&3', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(183, '2020-04-08', 2, 'GS', 'Finance', 'Personal', 'j6ngan ', 'Pengecekan ruang GS Lt 4 belum ada akses internet baru instalasi kabel', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(184, '2020-04-08', 5, 'HW', 'Gress /Zili', 'Personal', 'WFH', 'Copy data d6 pc ke laptop gress & Zili', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(185, '2020-04-08', 5, 'KJ12', 'Ayu', 'Personal', 'Connect printer', 'Setting printer & copy file dilaptop bu ayu', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(186, '2020-04-09', 4, 'GS', 'Finance', 'Personal', 'J6ngan baru', 'Tes coneksi internet ruang meeting lantai 4 sudah bisa', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(187, '2020-04-09', 2, 'KJ4', 'Rini', 'Personal', 'Trouble antivirus', 'Scan & update Antivirus', ' - ', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(188, '2020-04-11', 2, 'KJ4', 'Umar ', 'Personal', 'playback cctv', 'Vidio Call bersma Pak Umar HRD ,Play Back Rekaman cctv area Barcode Lt1 KJ4', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(189, '2020-04-13', 5, 'GS', 'Wawan', 'Personal', 'PC Blank / error', 'Scan antivirus dipc pak wawan agency', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(190, '2020-04-13', 5, 'GS', 'Yuso', 'Personal', 'Printer Error', 'Seting Printer bang yuso, kdang bisa kadang error', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(191, '2020-04-13', 5, 'HW', 'tyrsa', 'Personal', 'migrasi PC', 'Pasang pc & printer bu tyrsa', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(192, '2020-04-13', 7, 'HW', '', 'Personal', 'email Spam', 'Pengecekan & setting by admin console', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(193, '2020-04-14', 2, 'KJ4', 'Printer', 'Personal', 'Toner mesin foto copy KJ4 habis', 'Pengisian toner Mesin foto copy', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(194, '2020-04-14', 2, 'HW', 'Hw', 'Personal', 'J6ngan lambat', 'Restar router Agency GS Lt 2', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(195, '2020-04-14', 2, 'HW', 'Diah', 'Personal', 'Trouble personal cloud PC Diah kasir', 'maping personal cloud', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(196, '2020-04-14', 2, 'KJ4', 'cctv', 'Personal', '', 'Upload rekaman cctv barcode Lt1 ke Google Drive PHE', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(197, '2020-04-14', 2, 'KJ4', 'CCTV', 'Personal', '', 'Playback rekaman cctv barcode Lt1 KJ4 bersama personil PHE Pak Topan', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(198, '2020-04-14', 7, 'GS', 'HW', 'Personal', 'J6ngan lambat', 'Reset router/ switch di ruang agency lt. 2', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(199, '2020-04-14', 7, 'HW', 'Diah / Icha ', 'Personal', 'install aplikasi untuk remote', 'Install aplikasi anydesk PC diah & icha kasir', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(200, '2020-04-14', 7, 'HW', '', 'Personal', '', 'Pengecekan pembayaran mitranet backbone', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(201, '2020-04-14', 7, 'HW', 'diah', 'Personal', 'koneksi on /off', 'Pengecekan kabel lan PC diah krn koneksi on / off', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(202, '2020-04-14', 7, 'HW', 'Icha', 'Personal', 'password email lupa', 'Reset password email icha@ekanuri.com', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(203, '2020-04-15', 2, 'KJ5', 'Anang', 'Personal', 'Laptop  ', 'Perbaikan laptop mekanik shop', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(204, '2020-04-15', 6, 'JGC', '', 'Personal', '', 'Transfer data sdrive ke pc kapal GNA', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(205, '2020-04-15', 8, 'HW', 'andri', 'Personal', '', 'Install antivirus dan aktivasi laptop pak andri', ' - ', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(206, '2020-04-15', 8, 'HW', 'Ismy', 'Personal', 'j6ngan', 'Perbaikan troubleshoot j6ngan ismi diah', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(207, '2020-04-15', 3, 'HW', '', 'Personal', '', ' instal driver SQL server', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(208, '2020-04-15', 3, 'HW', 'tyrsa', 'Personal', 'connect printer', 'Install hp desktjet ink advantage 2060 untuk PC Bu Tyrsa request Bu Lia', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(209, '2020-04-15', 2, 'KJ12', 'Ayu', 'Personal', 'pemindahan PC', 'Pemasangan PC Bu Ayu di ruang meeting KJ1 Dn internet nya sudah Up', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(210, '2020-04-16', 5, 'KJ12', 'iwan', 'Personal', 'Virus', 'update & scan antivirus kaspersky', ' - ', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(211, '2020-04-16', 4, 'HW  ', 'kasir', 'Personal', 'tidak bisa print (error)', 'Pengecekan printer kasir  (karna di dalam printer ada binder clips)', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(212, '2020-04-17', 5, 'KJ12', 'Indri', 'Personal', 'Virus di pc bu indri kj1', 'quarantine, update & scan kaspersky', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(213, '2020-04-21', 6, 'Hw', 'Faseh ', 'Personal', 'Trouble cannot access email', '', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(214, '2020-04-21', 4, 'HW', '', 'Personal', '', 'Pemindahan barang bekas pc dan printer', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(215, '2020-04-21', 6, 'HW', 'Ali', 'Personal', 'Error Office', 'Activasi office 2010 ', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(216, '2020-04-21', 5, 'HW', 'Santika', 'Personal', 'tidak bisa save data', 'Repair pc mba santika', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(217, '2020-04-21', 4, 'HW', 'Sigit ', 'Personal', 'tdk bisa masuk windows', 'Activasi windows', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(218, '2020-04-21', 6, 'GS', 'Dwi', 'Personal', 'Pindah lokasi database pt perkasa ke pc mba dwi gs', 'Setting Data base ABSS', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(219, '2020-04-22', 8, 'HW', 'Retno', 'Personal', 'error printer', 'Repair printer accounting Retno', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(220, '2020-04-22', 2, 'KJ12', 'Andri Gunawan', 'Personal', 'browser firefox', 'Instalasi Firefox & Google Chrome di PC Andri Gunawan KJ2', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(221, '2020-04-22', 4, 'HW', 'Sigit ', 'Personal', 'windows error', 'Instal windows laptop,backup data, punya pak sigit ekajaya', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23');
INSERT INTO `laporan_it` (`id_laporan`, `tanggal`, `pic`, `lokasi`, `user`, `direct_request`, `permasalahan`, `perbaikan`, `sparepart`, `harga_sparepart`, `jenis`, `keterangan`, `file`, `dibuat_oleh`, `dibuat_pada`, `dirubah_oleh`, `dirubah_pada`) VALUES
(222, '2020-04-22', 2, 'KJ12', 'CCTV', 'Personal', '', 'Pengecekan switch Extender cctv  di pos security KJ2', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(223, '2020-04-22', 2, 'KJ12', 'CCTV', 'Personal', '', 'Pengecekan switch Extender di ruangan Medco KJ2', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(224, '2020-04-22', 2, 'KJ4', 'Rini', 'Personal', 'virus notification', 'Pengecekan, update & scan anti virus ', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(225, '2020-04-23', 4, 'KJ4', 'Rini', 'Personal', 'Office error', 'Activation office ', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(226, '2020-04-23', 4, 'KJ5', '', 'Personal', 'J6ngan lambat', 'Pengecekan internet by speedtest', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(227, '2020-04-23', 6, 'JGC', 'Ayu', 'Personal', '', 'Instal wireless adapter', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(228, '2020-04-23', 6, 'JGC', 'Server', 'Personal', 'virus notification', 'Scan antivirus di PC server pms jgc', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(229, '2020-04-24', 3, 'HW', 'Friska', 'Personal', '', 'Setting Printer wifi laptop Friska', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(230, '2020-04-27', 2, 'KJ4', 'Ade Miharja', 'Personal', 'virus notification', 'Scan virus di PC Ade Miharja KJ4', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(231, '2020-04-27', 2, 'KJ4', 'Rini', 'Personal', 'virus notification', 'Scan virus di PC & Laptop Rini', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(232, '2020-04-27', 2, 'KJ4', 'Didik', 'Personal', 'Zoom Meeting', 'Instal Aplikasi Zoom meeting di Laptop HSE Didik KJ4', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(233, '2020-04-27', 6, 'HW', 'Faisal', 'Personal', '', ' Remot PC Faisal purchasing install nitro pdf & transfer data nitro pdf', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(234, '2020-04-27', 2, 'KJ4', 'Dudi Qudsi', 'Personal', 'virus notification', 'Scan virus di PC Pak Dudy Kudsi KJ4', ' - ', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(235, '2020-04-28', 6, 'JGC', 'Server', 'Personal', 'virus notification', 'Scan antivirus di PC server pms', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(236, '2020-04-28', 2, 'KJ4', 'Rini', 'Personal', 'virus notification', 'Running scan virus PC Rini HSE KJ4', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(237, '2020-04-28', 4, 'KJ12', 'Udin ', 'Personal', 'Kabel Baru', 'Pemasangan kabel lan dan krimping di pc pak udin kj1', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(238, '2020-04-28', 6, 'HW', 'Accounting', 'Personal', 'ABSS', 'Upgrade dan aktivasi sn abss PT raptor dan PT ekanuri anugrah', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(239, '2020-04-29', 6, 'HW', 'Rian', 'Personal', 'ABSS', 'Instal aplikasi abss & maping data kci di laptop Rian anggaran', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(240, '2020-04-29', 6, 'HW', 'Gress / Ajeng', 'Personal', 'ABSS', 'Instal abss & maping data PT ekanuri, Peip,ekajaya di laptop grace, ajeng anggaran.', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(241, '2020-04-29', 6, 'HW', 'gress', 'Personal', 'Sdrive', 'Instal aplikasi sdrive di laptop Grace anggaran', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(242, '2020-04-29', 3, 'HW', 'Zili', 'Personal', 'ABSS', 'install ABSS di laptop zili', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(243, '2020-04-29', 2, 'KJ5 ', 'CCTV', 'Personal', '', 'Monitoring CCTV KJ5 KJ5', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(244, '2020-04-30', 8, 'HW', 'server', 'Personal', '', 'Maintenance server PC myob', ' -', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(245, '2020-04-30', 8, 'HW', 'Ismi', 'Personal', 'kabel kendor', 'Penggantian kabel d6 switch ismi', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(246, '2020-04-30', 4, 'KJ12', 'CCTV', 'Personal', 'trouble CCTV', 'Maintanance kamera cctv di area star energi kj1,pengantian bnc,pemasangan adaptor', 'BNC & Ada[ptor', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(247, '2020-04-30', 4, 'KJ4', 'Bagus', 'Personal', 'laptop tdk connect printer', 'Pengecekan laptop hse pak  bagus Laptop sudah bisa print kembali', ' - ', 0, 'Sofware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(248, '2020-05-03', 6, 'GS', 'Dwi', 'Personal', 'Start up windows lambat', 'Setting starup & defrag laptop mba Dwi acc', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(249, '2020-05-04', 4, 'KJ4', 'Punto ', 'Personal', 'Kabel Baru', 'Pen6kan kabel internet dan krimping office lantai 3 di ruangan pak punto', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(250, '2020-05-04', 6, 'GS', 'Wali', 'Personal', 'Start up windows lambat', 'Setting starup & defrag system laptop pak wali', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(251, '2020-05-04', 6, 'JGC', 'Geno', 'Personal', '', 'Transfer data nitro pdf & Install nitro pdf', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(252, '2020-05-04', 6, 'GS', 'Firman & femi', 'Personal', 'Instal microsoft office', 'Instal Visio 2007 di laptop pak firman & Femi agency', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(253, '2020-05-04', 4, 'KJ5', '', 'Personal', 'Listrik mati (Powerr off)', 'Pengecekan CCTV dikarenakan listrik mati', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(254, '2020-05-04', 4, 'KJ4', 'Rini', 'Personal', 'Notification kaspersky', 'Scan & Update antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(255, '2020-05-05', 8, '', '', 'Personal', 'Repair Error', '', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(256, '2020-05-05', 5, 'GS', 'Dika', 'Personal', '', 'Uninstall apple software update, big fish game manager,  iTunes di pc mba dhika', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(257, '2020-05-05', 5, 'GS', 'Accounting', 'Personal', 'Sh6ng folder tidak bisa di akses', 'Restart pc servermyob PT ekanuri', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(258, '2020-05-05', 5, 'GS', 'Accounting', 'Personal', 'Backup ', 'Remote pc servermyob', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(259, '2020-05-08', 5, 'GS', 'Accounting', 'Personal', '', 'Install google chrome di pc mas ryan / mas ali', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(260, '2020-05-08', 5, 'GS', 'Ricky', 'Personal', 'PC sreing Restart', 'Maintenance & bersihkan Ram PC Ricky', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(261, '2020-05-11', 4, 'KJ5', '', 'Personal', '', 'Pengecekan internet dengan speedtest area KJ5 mekanik', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(262, '2020-05-12', 5, 'GS', 'Nara', 'Personal', 'tidak connect printer & j6ngan lemot', 'Setting printer pc mba nara dan koneksi internet', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(263, '2020-05-12', 5, 'GS', '', 'Personal', '', 'Delete Antivirus, clean & Setting printer', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(264, '2020-05-12', 2, 'KJ4', 'Rini', 'Personal', 'Notification kaspersky', 'Scan virus PC Rini', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(265, '2020-05-12', 2, 'KJ5', 'Kris Karang Timur', 'Personal', '', 'Instal internet Explorer 11 di Laptop Asus Kris Karang timur', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(266, '2020-05-12', 5, 'GS', 'Didin', 'Personal', 'Tinta Printer Epson L365 habis', 'Pengisian tinta printer & Head cleaning di pc pak didin', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(267, '2020-05-13', 4, 'KJ4', '', 'Personal', 'Arus Listrik Off', 'Pengecekan panel box di area junk', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(268, '2020-05-13', 4, 'KJ4', 'Pak Tono', 'Personal', 'Maintenance Laptop', 'Pengecekan internet dan antivirus di laptop pak tono', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(269, '2020-05-13', 4, 'KJ5', '', 'Personal', '', 'Panel box cctv di area pintu gerbang KJ5 kj5', '', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(270, '2020-05-14', 2, 'KJ5', 'Ops', 'Personal', 'Muncul Aktivasi Office', 'Pengecekan office 2010 Laptop Asus baru OPS MI', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(271, '2020-05-14', 2, 'KJ5', '', 'Personal', 'Power listrik area gudang MI mati', 'Pengecekan power Listrik camera cctv area gudang MI mati', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(272, '2020-05-14', 5, 'GS', 'Yuso', 'Personal', 'Office error', 'Uninstall office & reinstall office 2010, Back up Microsoft outlook', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(273, '2020-05-14', 2, 'KJ5', '', 'Personal', '', 'Partisi Hardisk Laptop baru Asus HSE KJ5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(274, '2020-05-14', 8, 'GS', 'Accounting', 'Personal', '', 'Create user abss ena dan rhaptor', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(275, '2020-05-14', 2, 'KJ5', '', 'Personal', 'J6ngan', 'Speed tes internet Gedung MI', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(276, '2020-05-15', 8, 'HW', 'Yosef', 'Personal', '', 'Setting Microsoft team pak yosef', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(277, '2020-05-15', 6, 'GS', 'Zili', 'Personal', 'Offive error', 'Activasi office 2010 di laptop anggaran', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(278, '2020-05-16', 6, 'GS', 'Friska', 'Personal', 'Connect printer ', 'Instal & setting printer Epson LX310 di laptop Friska AR via remot anydesk', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(279, '2020-05-18', 5, 'GS', 'Femi', 'Personal', 'Connect printer ', 'Setting printer d6 pc mba femi ke printer yuso-pc & topan-pc', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(280, '2020-05-18', 2, 'KJ5', 'KJ5', 'Personal', 'trouble printer', 'Pengecekan & Setting Printer', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(281, '2020-05-19', 4, 'KJ5', 'H6s', 'Personal', 'Mesin Foto Copy', 'Pengecekan mesin foto copy di kj5 KJ5 dan pengecekan laptop hse h6s', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(282, '2020-05-19', 2, 'KJ5', '', 'Personal', '', 'Pengecekan Pita mesin Printer Barcode GC420t  MI KJ5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(283, '2020-05-19', 4, 'KJ4', 'Pos 8', 'Personal', '', 'Pemasangan camera cctv Pos8 KJ4B', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(284, '2020-05-19', 6, 'GS', 'Icha', 'Personal', 'Connect printer ', 'Sh6ng printer dr pc Riska ke printer ibu Icha', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(285, '2020-05-19', 6, 'JGC', 'Ayu', 'Personal', 'Trouble tidak bisa buka link web ip2p Pertamina di PC ibu ayu JGC (remot by anydesk)', 'Remote by anydesk', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(286, '2020-05-20', 2, 'KJ12', 'Egi', 'Personal', 'Tidak ada tampilan di monitor', 'Perbaikan, Pengecekan & Maintenance', 'Fan hatsing dan Mainboard', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(287, '2020-05-20', 8, 'GS', 'Kasir', 'Personal', 'Printer rusak', 'Kalibrasi printer kasir', ' -', 0, 'Hardware', 'Pending harus ke service center, sementara service center tutup (PSBB Covid-19)', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(288, '2020-05-20', 8, 'GS', 'Dika', 'Personal', '', 'Sh6ng printer PC Dhika kasir', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(289, '2020-05-20', 8, 'GS', 'Accounting', 'Personal', 'ABSS', 'Backup all database abss (ALL PT ENC Group)', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(290, '2020-05-26', 4, 'KJ4', 'Office ', 'Personal', 'J6ngan Internet tidak terkoneksi', 'Pengecekan wifi di lt. 2 & 3 di office kj4', '  -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(291, '2020-05-26', 4, 'KJ5', 'Mekanik', 'Personal', 'Connect printer ', 'Sh6ng printer pc aditya ke pc pak rahmat kj5 mekanik shop', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(292, '2020-05-26', 4, 'KJ5', '', 'Personal', 'J6ngan Internet tidak terkoneksi', 'Pengecekan wifi di KJ5 kj5', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(293, '2020-05-26', 6, 'GS', 'Nara', 'Personal', 'Crash data file di FDD Nara agency', 'pengecekan & perbaikan ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(294, '2020-05-26', 6, 'GS', 'Wawan', 'Personal', 'Troubleshoot di PC pak Wawan agency', 'pengecekan & perbaikan ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(295, '2020-05-26', 4, 'KJ5', 'Frans', 'Personal', 'Print ', 'Pengecekan print kertas di pc frans KJ5 kj5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(296, '2020-05-26', 4, 'KJ5', 'Fikri', 'Personal', 'Notification kaspersky', 'updtae & scan Antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(297, '2020-05-26', 4, 'KJ5', 'dandy', 'Personal', 'Exp. Antivirus', 'Antivirus di pc dandy sudah habis masa aktif di KJ5 kj5', 'License ', 0, 'Software', 'Pending  ', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(298, '2020-05-26', 6, 'GS', 'Ali', 'Personal', 'Notification kaspersky', 'Scan Antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(299, '2020-05-26', 4, 'KJ5', '', 'Personal', '', 'Pengecekan  switch server di area yard 10000 KJ5 kj5', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(300, '2020-05-26', 6, 'GS', 'Wawan', 'Personal', 'Notification kaspersky', 'Scan Antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(301, '2020-05-26', 6, 'GS', 'Yuso & Nara', 'Personal', '', 'Sh6ng printer ke yusho dr pc pak Wawan agency', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(302, '2020-05-27', 8, 'GS', 'Wisnu', 'Personal', 'Office error', 'Aktivasi office pak Wisnu eks pak eko', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(303, '2020-05-27', 5, 'GS', 'Triyatno', 'Personal', '', 'Install driver printer lq-310 di laptopnya pak yudi, untuk dipake pak tri', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(304, '2020-05-27', 5, 'HW', 'All', 'Personal', '', 'On server web di hw & restart personalcloud', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(305, '2020-05-28', 4, 'KJ4', 'Lastono', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instal microsoft visio di pc pak lastono kj4', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(306, '2020-05-28', 6, 'MA35', '', 'Personal', '', 'Setting email kapal MA35 by remot Anydesk', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(307, '2020-06-02', 4, 'KJ12', 'All User KJ1', 'Personal', 'Pengecekan mesin foto copy kertas nyangkut', 'Maintenance & Perbaikan Mesin Foto Copy', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(308, '2020-06-02', 4, 'KJ4', 'Turmudi', 'Personal', 'Printer & windows bermasalah ', 'Setting printer & Activate windows 10 ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(309, '2020-06-02', 4, 'KJ4', 'Rini', 'Personal', 'connect printer', 'Connect & Sh6ng printer di laptop pak didik ke pc rini hse', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(310, '2020-06-02', 4, 'KJ5', 'H6s', 'Personal', '', 'Pengecekan microsoft point ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(311, '2020-06-02', 6, 'GS', 'Ali', 'Personal', '', 'Instal nitro pro pdf ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(312, '2020-06-02', 6, 'GS', 'Yuso', 'Personal', 'Hasil Print Tidak bagus', 'Head cleaning di printer Epson L365', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(313, '2020-06-02', 6, 'JGC', '', 'Personal', 'Software bea cukai baru', 'Instal aplikasi & setting aplikasi BC PIB di PC khusus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(314, '2020-06-02', 2, 'KJ4', '', 'Personal', 'Cartridge black error', 'Pengecekan Printer HP Ink Tank 315 HSE KJ4', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(315, '2020-06-03', 8, 'GS', 'Ekatama', 'Personal', '', 'Aktifasi modul PEB ekatama trans', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(316, '2020-06-03', 8, 'GS', 'Zili', 'Personal', 'Software ABSS', 'Setting ABSS ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(317, '2020-06-03', 6, 'MA32', 'PEIP', 'Personal', 'Setting Email', 'Setting email kapal MA32 By Remot Anydesk', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(318, '2020-06-03', 8, 'GS', 'Acc', 'Personal', 'printer error', 'Perbaikan printer accounting', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(319, '2020-06-03', 5, 'GS', 'Pak Indra', 'Personal', 'Pembelian speaker & Webcam baru', 'Test speaker & webcam', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(320, '2020-06-03', 2, 'KJ4', 'Eman ', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instal Office Visio ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(321, '2020-06-03', 2, 'KJ4', 'Ade Miharja', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instal Office Visio ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(322, '2020-06-03', 2, 'KJ12', 'Jekta', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instalasi Office Visio  & Head Cleaning printer L360', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(323, '2020-06-04', 4, 'KJ5', 'Anang Mujito', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instal microsoft visio, Activasi Windows & pengecekan antivirus', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(324, '2020-06-04', 6, 'JGC', 'Sigit Parluk', 'Personal', 'Setting outlook', 'Instal office Outlook & setting email pak Sigit Parluk di laptop baru, Update firefoxs & setting bookmark PT karyatara', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(325, '2020-06-04', 5, 'JGC', 'Sonia', 'Personal', 'Setting Software', 'Install winrarr, nitro, autocadd & Antivirus  di laptop mba sonia', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(326, '2020-06-04', 2, 'GS', 'Putri', 'Personal', 'Pembuatan jobdesk & struktur organisasi (Software)', 'Instal Office Visio ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(327, '2020-06-05', 6, 'MA35', 'Kapal MA 35', 'Personal', '', 'Defrag system Kapal MA35 by remot anydesk', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(328, '2020-06-08', 5, 'GS', 'Yuso', 'Personal', 'Tidak bisa print ', 'Sh6ng & Connect Printer Maya ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(329, '2020-06-08', 5, 'GS', 'Acc & Tax', 'Personal', 'Tinta printer habis', 'Pengisian tinta printer & Head Cleaning', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(330, '2020-06-08', 5, 'GS', 'Friska', 'Personal', 'Tidak bisa scan', 'Install driver scaner ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(331, '2020-06-09', 5, 'HW', 'Hw', 'Personal', '', 'control ahli pest maintenance ', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(332, '2020-06-09', 5, 'GS', 'Etty', 'Personal', '', 'Install driver printer & scanner epson l220 ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(333, '2020-06-09', 5, 'GS', 'Reza', 'Personal', 'belum ada driver printer & scanner pada laptop sehingga tidak bisa print / scan', 'Install driver printer epson L220', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(334, '2020-06-12', 5, 'JGC', 'Server Peip', 'Personal', 'pc server peip lemot sehingga database lama diakses', 'performance pc server peip menurun temperatur dibawah 10%', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(335, '2020-06-08', 6, 'JGC', 'Server PMS', 'Personal', 'PC Server sebelumnya trouble ', 'Pemasangan PC server pms yg terkena virus di jgc', 'pergantian hardisk Internal', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(336, '2020-06-08', 6, 'JGC', 'Sonia', 'Personal', 'Instal Aplikasi PMS', 'Penyerahan laptop Sonia jgc yg sudah di instal aplikasi', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(337, '2020-06-08', 6, 'JGC', 'Alia', 'Personal', 'Charger terbakar & rusak', 'Pemasangan & pengecekan charger baru Alia jgc..( charger yg lama terbakar )', 'Pergantain charger baru', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(338, '2020-06-08', 6, 'JGC', 'Kasir Bola', 'Personal', 'Troubleshoot PC Rhapsodi', 'Troubleshoot PC rhapsodi penggantian keyboard yg bermasalah', 'Pergantian Keyboard Bekas ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(339, '2020-06-08', 6, 'JGC', 'R. VIP', 'Personal', '', 'Pengecekan & setting bluetooth Jabra 810 diruang meeting VIP', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(340, '2020-06-09', 6, 'JGC', 'Sonia', 'Personal', '', 'Setting email outlook @ekanuri.com dilaptop baru Sonia jgc', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(341, '2020-06-10', 6, 'KJ4', 'Ade', 'Personal', 'sering muncul notification ', 'Scan & Update antivirus ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(342, '2020-06-10', 8, 'GS', 'Ricky', 'Personal', 'Pc sering restart', 'pengecekan hardware ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(343, '2020-06-10', 8, 'GS', 'IT', 'Personal', 'System Finance', 'Create Modul Petty cash', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(344, '2020-06-08', 2, 'KJ4', 'Timin', 'Personal', 'PC Trouble', 'Perbaikan & Pengecekan hardware', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(345, '2020-06-08', 2, 'Kj4', 'Timin', 'Personal', 'Install ulang', 'Instal windows 7 & Instal Office 2007', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(346, '2020-06-10', 2, 'KJ4', 'Rini', 'Personal', 'Error Office 2010 PC Rini HSE KJ4', 'Aktifasi Office 2010 PC Rini HSE KJ4 succses', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(347, '2020-06-10', 2, 'Kj5', 'H6s', 'Personal', 'Error office 2010', 'pengecekan office 2010', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(348, '2020-06-08', 4, 'Kj5', '', 'Personal', 'panel box rusak', 'Perbaikan panel box cctv di area kj5', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(349, '2020-06-08', 4, 'Kj5', 'Rahmat', 'Personal', 'permintaan instal office viso', 'Instal office visio di pc pak rahmat mekanik kj5', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(350, '2020-06-08', 4, 'Kj5', 'Anang', 'Personal', 'Notification antivirus', 'Update & Scan antivirus di laptop pak anang mekanik kj5', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(351, '2020-06-08', 4, 'KJ4', 'Rini', 'Personal', 'Printer tidak bisa digunakan', 'Pengecekan printer power of ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(352, '2020-06-09', 4, 'KJ5', 'Petrogas', 'Personal', 'PC kantor petrogas kena air', 'Pengecekan pc di kantor petrogas di karenakan ke air', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(353, '2020-06-09', 4, 'KJ12', 'CCTV', 'Personal', '', 'Reboot CCTV KJ1', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(354, '2020-06-09', 4, 'KJ12', 'Roni, Indri, Ria', 'Personal', 'Tinta printer habis', 'Pengisian tinta printer & Head Cleaning', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(355, '2020-06-09', 4, 'KJ12', 'Lastono', 'Personal', ' tidak bisa buka foto di pc', 'Setting folder options ', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(356, '2020-06-09', 4, 'KJ5', 'Area Junk', 'Personal', '', 'Perbaikan power supply cctv di area junk kj5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(357, '2020-06-12', 3, 'HW', 'IT', 'Personal', NULL, 'Pembuatan Google form report harian', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(358, '2020-06-15', 2, 'PLMS', '', 'Personal', '', 'Perbaikan & pengecekan CCTV Pulomas', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(359, '2020-06-16', 7, 'HW', 'Yudi & Triyatno', 'Personal', 'Antivirus expired', 'Activation Kode, update & Scan Kaspersky ( XB5CW-YB8B4-92VU9-WU9RN ) Expired 16 Juni 2021', ' License KIS', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(360, '2020-06-17', 2, 'HW', 'Finance', 'Personal', 'Migrasi Perpindahan divisi Finance ', 'Pen6kan Kabel internet, Extention', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(361, '2020-06-18', 5, 'HW', 'Yuli', 'Personal', 'Migarsi perpindahan Yuli halim', 'Pemasangan Kabel power PC & printer, serta setting Printer ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(362, '2020-06-18', 5, 'HW', 'Pak Indra', 'Personal', 'Pemasangan TV', 'Pemasangan TV Decorder & printer (Fax)', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(363, '2020-06-18', 2, 'KJ5', 'Fahri', 'Personal', 'trouble tinta warna tidak nyata', 'Head Cleaning printer epson L3110', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(364, '2020-06-18', 2, 'HW', 'Pak Indra', 'Personal', 'Tv kabel tidak aktif', 'Restart Modem ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(365, '2020-06-19', 6, 'JGC', 'dadang', 'Personal', 'Tidk bisa print', 'Sh6ng Printer dadang', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(366, '2020-06-19', 2, 'HW', 'Finance', 'Personal', 'Migrasi Perpindahan divisi Finance ', 'Pen6kan Kabel internet, Extention', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(367, '2020-06-22', 6, 'GS', 'Firmansyah', 'Personal', '', 'Activasi office 2010 di Laptop Pak firmansyah Agency', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(368, '2020-06-22', 6, 'GS', 'Firmansyah', 'Personal', 'Setting outlook baru', 'Setting email firmansyah di outlook', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(369, '2020-06-23', 2, 'HW', 'lt.3', 'Personal', '', 'Pemasangan cctv Area Finance lt 3, area Yuli ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(370, '2020-06-23', 2, 'HW', 'Kasir  ', 'Personal', 'Tinta bocor', 'Pengurasan busa Printer L220 Kasir , Pembersihan bantalan busa Printer Epson L220 Kasir', 'Service center', 0, 'Hardware', 'Pending toko masih tutup', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(371, '2020-06-24', 5, 'HW', 'HRD', 'Personal', 'Tidak bisa print ', 'Resetter printer epson l385 hrd', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(372, '2020-06-24', 6, 'JGC', 'Pak Indra', 'Personal', 'Pemasangan baru ', 'Pemasangan cam Jabra diruang pak indra', 'Cam Jabra', 0, 'Hardware', 'Pending, Kabel Belum rapih', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(373, '2020-06-24', 6, 'JGC', 'Office', 'Personal', 'Trouble printer jgc', 'Maintenance ', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(374, '2020-06-24', 6, 'JGC', 'Wilda / alya', 'Personal', 'Printer error', 'Bongkar mesin fotocopy JGC', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(375, '2020-06-24', 6, 'HW', 'Andrianto', 'Personal', 'Laptop Error', ' - ', ' -', 0, 'Software', 'Pending', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(376, '2020-06-25', 2, 'JGC', 'Driving', 'Personal', 'Camera off', 'Perbaikan camera cctv JGC driving', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(377, '2020-06-25', 6, 'HW', 'Acc', 'Personal', '', 'Back up database Rhaptor', ' ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(378, '2020-06-25', 6, 'HW', 'Andrianto', 'Personal', '', 'Back up data, Scan HDD', ' -', 0, 'Software', 'Pending', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(379, '2020-06-25', 6, 'JGC', 'Pak Indra', 'Personal', '', 'Perapihan kabel & pemasangan cam zabra', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(380, '2020-06-25', 8, 'HW', 'Yuli', 'Personal', '', 'Isi Ulang tinta printer', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(381, '2020-06-25', 8, 'GS', 'Ali', 'Personal', 'Permintaan reset password email ali alatas', 'Reset password ', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(382, '2020-06-26', 8, 'Hw', 'ID Colo', 'Personal', 'tidak bisa log in server media permana melalui telkomsel', 'konfirmasi dengan support media permana by chat wa', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(383, '2020-06-26', 2, 'PLMS', '', 'Personal', 'Listrik Off, CCTV, Monitor mati', 'Pemasangan power supply & UPS', 'Power Supply, UPS', 0, 'Hardware', 'Pending, korslet listrik', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(384, '2020-06-28', 6, 'HW', 'Tax', 'Personal', 'Laporan SPT', 'Upload, scan laporan SPT', ' -', 0, 'Software', 'Pending di lanjut senin', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(385, '2020-06-28', 3, 'HW', 'Tax', 'Personal', 'Laporan SPT', 'Upload, scan laporan SPT', ' -', 0, 'Software', 'Pending di lanjut senin', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(386, '2020-06-30', 7, 'HW', 'Yudi & Triyatno', 'Personal', 'Antivirus expired', 'Activation Kode, update & Scan Kaspersky ( XB5CW-YB8B4-92VU9-WU9RN ) Expired 16 Juni 2021', ' License KIS', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(387, '2020-09-29', 1, 'KCI', 'arul ', 'Personal', 'Print miror', 'seting grafic printer', NULL, 0, 'Hardware', 'head printer lemah', '20201001211008.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(388, '2020-09-30', 1, 'KCI', 'Arul', 'Personal', 'Email Bouncing', 'Clear Trush email ', NULL, 0, 'Software', 'Penambahan storage email Housting dan penguna via web di setting pada outlook (agar di web dapat di kosongkan', '20201001213252.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(389, '2020-10-01', 8, 'GS', 'Ekatama', 'Personal', 'Hdd Badsector', 'pergantian hardisk', 'hardisk', 0, 'Hardware', 'hdd bad sector', '20201001213649.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(390, '2020-10-05', 7, 'HW', 'Ali ', 'Personal', 'Permintaan email account karyawan baru ', 'create email adibtya@ekanuri.com by admin console', ' - ', 0, 'Software', 'done', '20201006085712.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(391, '2020-10-05', 7, 'PLMS', 'BOD', 'Personal', 'permintaan penambhan channel sport & soccer decorder 2 (MNC Vision) lokasi menteng', 'konfirmasi CS untuk penambahan id : 301010949731 a/n Wildan (Menteng) ', ' - ', 0, 'Software', 'Done', '20201006090438.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(392, '2020-09-05', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'pemasangan pipa', 'Pemasangan pipa paralon camera cctv gudang Exs Kondur KJ5', 'pipa paralon', 0, 'Hardware', 'Done', '20201013102450.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(393, '2020-09-05', 1, 'GS', 'Kondur KJ5', 'Personal', 'Penarikan kabel', 'Penarikan kabel cctv gudang Exs Kondur KJ5', 'Kabel CCTV', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(394, '2020-09-05', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Penarikan kabel', 'Penarikan kabel cctv gudang Exs Kondur KJ5', 'Kabel CCTV', 0, 'Hardware', 'Done', '20201013103724.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(395, '2020-09-05', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'pemasangan camera', 'Pemasangan cctv camera gudang Exs Kondur KJ5', 'Camera CCTV', 0, 'Hardware', 'Done', '20201013103903.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(396, '2020-09-08', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Penariakn kabel ', 'Penarikan kabel cctv area Open yard Exs Kondur KJ5', 'Kabel CCTV', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(397, '2020-09-08', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Penarikan kabel', 'Penarikan kabel cctv gudang Exs Kondur KJ5 camera ke 6', 'Kabel CCTV', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(398, '2020-09-08', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Penarikan kabel', 'Penarikan kabel cctv gudang Exs Kondur KJ5 camera ke 6', 'Kabel CCTV', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(399, '2020-09-08', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'instalasi kabel camera', 'Krimping kabel camera cctv area office Exs Kondur KJ5', 'RG 45', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(400, '2020-09-09', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Power listrik ', 'Pemasangan power listrik cctv area office Exs Kondur KJ5', 'kabel listrik', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(401, '2020-09-10', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Pemasangan switch POE', 'Pemasangan switch POE area belakng office Exs Kondur', 'Switch', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(402, '2020-09-10', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'pembuatan angkur', 'Pembuatan angkur tiang camera cctv area Open yard Exs Kondur', ' - ', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(403, '2020-09-10', 2, 'KJ5', 'Kondur KJ5', 'Personal', ' - ', 'Penggalian lubang untuk tiang camera cctv area Open yard Exs Kondur KJ5', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(404, '2020-09-10', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'instalasi kabel', 'Krimping camera cctv area gudang Exs Kondur KJ5', 'RG 45', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(405, '2020-10-16', 2, 'KJ5', 'Kondur KJ5', 'Personal', 'Penarikan kabel', 'Penarikan kabel line telepon office Exs MI Swaco KJ5', 'kabel line tlp', 0, 'Hardware', 'Done', '20201013112618.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(406, '2020-10-17', 2, 'GS', 'GS', 'Personal', 'Penarikan kabel', 'Penarikan kabel Internet dari ruang server Agency ke server Graha Segara', 'Kabel Internet', 0, 'Hardware', 'Done', '20201013112911.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(407, '2020-10-18', 2, 'KJ4', 'KJ4', 'Personal', 'NS Error', 'Pengecekan NS area Genset KJ4', ' -', 0, 'Hardware', 'Done', '20201013113036.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(408, '2020-09-23', 2, 'KJ4', 'KJ4', 'Personal', 'NS error', 'Krimping ulang kabel NS area Genset KJ4', ' -', 0, 'Hardware', 'Done', '20201013113240.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(409, '2020-10-01', 2, 'KJ4', 'KJ4', 'Personal', ' -', 'Pemasangan alat pengukur suhu tubuh di Pos 1 Security KJ4', 'unit alat pengukur suhu tubuh', 0, 'Hardware', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(410, '2020-10-01', 2, 'KJ4', 'KJ4 & KJ5', 'Personal', ' -', 'Restart router PLB KJ5, Restart NS server 2 cctv KJ4', ' - ', 0, 'Software', 'Done', '20201013113532.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(411, '2020-10-15', 2, 'KJ4', 'KJ4', 'Personal', 'wind indikator', 'Pelepasan unit Win Indikator di atas Officie KJ4', 'wind indicator', 0, 'Hardware', 'Done', '20201013131447.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(412, '2020-10-08', 2, 'KJ4', 'KJ4', 'Personal', ' NS', 'Pemasangan NS server 3 camera cctv area KJ4', 'NS', 0, 'Hardware', 'Done', '20201013132030.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(413, '2020-10-08', 2, 'KJ5', ' KJ5', 'Personal', ' -', 'Pengecatan panel box cctv PLB KJ5', ' -', 0, 'Hardware', 'Done', '20201013145427.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(414, '2019-11-21', 8, 'KCI', 'kci', 'Personal', 'trouble pada sistem os', 'install ulang operating sistem windows 7 untuk admin kci cirebon', '-', 0, 'Software', 'done', '20201014091604.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(415, '2019-11-21', 8, 'KCI', 'kci', 'Personal', 'cloning komputer timbangan', 'cloning komputer timbangan', '-', 0, 'Software', '-', '20201014094751.jpg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(416, '2019-11-21', 8, 'KCI', 'kci', 'Personal', 'migrasi data', 'migrasi data ', '-', 0, 'Software', 'done', '20201014095821.jpg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(417, '2019-11-21', 8, 'KCI', 'kci', 'Personal', 'perbaikan koneksi jaringan lan', 'instalasi switch hub 100/1000', 'Switch', 0, 'Hardware', 'done', '20201014100008.jpg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(418, '2019-11-21', 8, 'KCI', 'kci', 'Personal', 'maintenance koneksi', 'seting komfigurasi router', 'router', 0, 'Hardware', 'done', '20201014100124.jpg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(419, '2019-10-24', 1, 'KCI', 'Nurdin', 'Personal', 'send and recive slow', 'port lan card', 'switch', 0, 'Network', NULL, '20201014110809.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(420, '2020-07-01', 4, 'KJ12', 'roni', 'Personal', 'tidak bisa print', 'Shering printer pc pak egi ke printer pak roni kj1', ' -', 0, 'Software', 'done', '20201015111009.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(421, '2020-07-01', 4, 'KJ12', 'roni', 'Personal', 'tidak bisa print', 'Shering printer pc pak egi ke printer pak roni kj1', ' -', 0, 'Software', 'Done', '20201015111120.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(422, '2020-07-08', 4, 'KJ4', 'Lastono', 'Personal', 'pc pak lastono di kj4 sering restart', 'Perbaikan pc pak lastono di kj4 sering restart', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(423, '2020-07-09', 4, 'KJ4', 'lastono', 'Personal', ' -', 'Perbaikan printer  dan pembersihan  head di ruang pak lastono', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(424, '2020-07-09', 4, 'KJ4', 'lastono', 'Personal', ' -', 'Backup data hardisk pak lastono', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(425, '2020-07-22', 4, 'KJ12', 'kj2', 'Personal', ' -', 'Pengisian tinta printer dan head cleaning di ruang resiping petrogas kj2', 'tinta printer', 100000, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(426, '2020-07-24', 4, 'KJ4', 'Irnanto', 'Personal', ' - ', 'Perbaikan pc dan instal windows di ruang pak irnanto kj1', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(427, '2020-07-30', 4, 'JGC', 'BOD', 'Personal', ' -', 'Penarikan dan instal kabel coaxial di ruang server ke ruang pak indra JGC Rawamangun', 'Kabel', 0, 'Hardware', 'Done', '20201015115005.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(428, '2020-07-30', 4, 'JGC', 'BOD', 'Personal', ' -', 'Pengantian DVR di ruang server JGC Rawamangun', ' DVR', 0, 'Hardware', 'Done', '20201015121018.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(429, '2020-10-07', 1, 'KJ4', 'KJ4', 'Personal', ' -', 'Pengecekan switch poe camera cctv dan krimping ulang', ' -', 0, 'Hardware', 'Done', '20201015133644.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(430, '2020-07-02', 3, 'GS', 'GS', 'Personal', ' -', 'setting aplikasi PIB Beacukai', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(431, '2020-07-02', 3, 'GS', 'Yuso', 'Personal', ' - ', 'Setting printer PC Wawan ke PC Yuso', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(432, '2020-07-02', 3, 'HW', 'IT', 'Personal', ' - ', 'Pembuatan aspek dampak dan Hiradc Departemen IT', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(433, '2020-07-02', 3, 'GS', 'firman', 'Personal', ' -', 'Setting Printer Laptop Pak Firman ke PC Yuso', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(434, '2020-07-03', 3, 'KJ4', 'HSE', 'Personal', ' - ', 'Coaching Aspek Dampak dan Hiradisi ISO - HSE', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(435, '2020-07-03', 3, 'KJ4', 'punto', 'Personal', ' - ', 'Setting jaringan internet untuk PC Pak Punto KJ4 karena pindah Meja', ' -', 0, 'Network', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(436, '2020-07-06', 3, 'HW', 'Ali', 'Personal', ' troubleshoot ABSS KCI', 'Troubleshooting PC Ali, tidak bisa buka ABSS KCI', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(437, '2020-07-06', 3, 'GS', 'Femi', 'Personal', ' -', 'Setting Printer Laptop Mbak Femi d ruang Billing', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(438, '2020-07-06', 3, 'HW', 'Ali', 'Personal', ' -', 'Troubleshooting PC Ali, tidak bisa buka ABSS KCI', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(439, '2020-07-06', 3, 'KJ4', 'Mekanik', 'Personal', ' -', 'Cek posisi Acces Point dan PC untuk pembuatan Flowchart - Mekanik Room', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(440, '2020-07-07', 3, 'KJ4', 'Anang', 'Personal', ' Laptop error', 'Cek Laptop Pak Anang Mekanik', ' - ', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(441, '2020-07-09', 3, 'GS', 'Agency', 'Personal', ' KIS', 'Pengecekan Licence Antivirus PC Agency', ' -', 0, 'Software', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(442, '2020-07-10', 3, 'HW', 'Tax', 'Personal', 'printer tinta bocor', 'Bongkar printer Epson L220 punya Tax', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(443, '2020-07-16', 3, 'GS', 'dedy', 'Personal', ' -', 'Bersihin mouse pak Dedy agency', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(444, '2020-07-16', 3, 'GS', 'dedy', 'Personal', ' -', 'Bersihin mouse pak Dedy agency', ' -', 0, 'Hardware', 'Done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(445, '2020-05-25', 3, 'JGC', 'Gheno / Jeremy', 'Personal', 'OS Windows 7 Pro 64 Bit Corupt', 'Instal Ulang OS Windows 7 Pro 64 Bit', NULL, 0, 'Hardware', 'Tindakan yang dilakukan adalah Perawatan dan selesai dikerjakan / diterima user tgl 8-6-2020', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23');
INSERT INTO `laporan_it` (`id_laporan`, `tanggal`, `pic`, `lokasi`, `user`, `direct_request`, `permasalahan`, `perbaikan`, `sparepart`, `harga_sparepart`, `jenis`, `keterangan`, `file`, `dibuat_oleh`, `dibuat_pada`, `dirubah_oleh`, `dirubah_pada`) VALUES
(446, '2020-08-25', 8, 'HW', 'Finance AR', 'Personal', '-', 'System Finance AR', NULL, 0, 'Software', 'Pembuatan View Summary Invoce Loading Vessel', '20201026100739.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(447, '2020-08-27', 8, 'HW', 'HRD', 'Personal', 'Belum ada log aktivitas karywan enc ', 'Pembuatan Googel Docs', NULL, 0, 'Software', 'Pembuatan log aktivitas karyawan dengan menggunakan Googel Docs', '20201026101224.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(448, '2020-08-30', 8, 'KJ4', 'Operasional KJ', 'Personal', 'Kebutuhan Report', 'Pembuatan tallysheet di system operasional', NULL, 0, 'Software', 'Pembuatan tallysheet loading offloading truck', '20201026101537.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(449, '2020-08-31', 8, 'HW', 'Operasional KJ', 'Personal', 'Add cargo lo truck belum di buat validasi', 'Pembuatan validasi pada add cargo lo truck ', NULL, 0, 'Software', 'Pembuatan validasi pada add cargo lo truck di system operasional', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(450, '2020-08-31', 8, 'HW', 'Operasional KJ', 'Personal', 'Pak Tono request lo truck dan stacking bisa di close di atas jam 15:00 wib', 'Pembuatan logika kondisi di system jika kurang dari jam 15 pekerjaan belum bisa di close jika lebih baru bisa ', NULL, 0, 'Software', 'Pembuatan logika kondisi di system jika kurang dari jam 15 pekerjaan belum bisa di close jika lebih baru bisa ', '20201026102233.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(451, '2020-08-31', 8, 'HW', 'Operasional KJ', 'Personal', 'Internet Slow', 'Cek internet dan Setting Konfigurasi Miktrotik', NULL, 0, 'Network', 'Cek internet dan Setting Konfigurasi Miktrotik', '20201026102520.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(452, '2020-10-21', 8, 'KJ4', 'Operasional KJ', 'Personal', 'Link Redirect tambah cargo tidak ke link sebelum nya', 'perubahan link pada id jobroder dengan di enkrip ke dalam base64_encode', NULL, 0, 'Software', 'perubahan link pada id jobroder dengan di enkrip ke dalam base64_encode', '20201026103159.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(453, '2020-10-22', 8, 'KJ4', 'Operasional KJ', 'Personal', 'Konflik pada java script ', 'Perbaikan pada setiap component ajax', NULL, 0, 'Software', 'Perbaikan pada setiap component ajax ', '20201026103534.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(454, '2020-10-22', 8, 'KJ4', 'Operasional KJ', 'Personal', 'Kebutuhan cheker pada proses lotruck', 'Penambahan fitur edit cargo di lo truck', NULL, 0, 'Software', 'Penambahan fitur edit cargo di lo truck System Operasional', '20201026103714.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(455, '2020-10-22', 8, 'KJ4', 'Operasional KJ', 'Personal', 'Kebutuhan checker pada saat lo truck', 'Penambahan fitur hapus untuk mengakomodir cargo yang tidak ada', NULL, 0, 'Software', 'Penambahan fitur hapus untuk mengakomodir cargo yang tidak ada', '20201026103933.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(456, '2020-10-22', 8, 'GS', 'Dedy Agency', 'Personal', 'Printer belum di sharing', 'Add Sharing printer menggunakan protcol ip address', NULL, 0, 'Network', 'Add Sharing printer menggunakan protcol ip address', '20201026104051.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(457, '2020-11-02', 8, 'HW', 'Operasional KJ4', 'Personal', 'User meminta agar master data jenis barang kj4 berbeda dengan kj1', 'Rubah dalam query jenis barang', NULL, 0, 'Software', 'Merubah kondisi master data jenis barang sesuai area', '20201102164939.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(458, '2020-11-02', 8, 'HW', 'Operasional KJ4', 'Personal', 'Perbaikan Fitur', 'Membuat select option jenis barang menggunakan select2 agar mempermudah user', NULL, 0, 'Software', 'Membuat select option jenis barang menggunakan select2 agar mempermudah user', '20201102165321.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(459, '2020-11-02', 8, 'HW', 'Finance AR', 'Personal', 'Loading dan offloading terpisah pada summary invoice System AR', 'Penggabungan loading offloading menjadi 1 di System AR', NULL, 0, 'Software', 'Penggabungan loading offloading menjadi 1 di System AR', '20201102165809.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(460, '2020-11-02', 8, 'HW', 'SERVER', 'Personal', 'Server Offline', 'Menghidupkan server system aplikasi', NULL, 0, 'Software', 'Menghidupkan server system aplikasi', '20201102170015.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(461, '2020-11-03', 7, 'KJ5', 'Mustopa HSE', 'Personal', 'HSE Ekajaya Mustopa Simanjutak belum punya email', 'Create email atas nama Mustopa Simanjuntak HSE Ekajaya', '-', 0, 'Software', 'Done', '20201103164137.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(462, '2020-11-03', 7, 'KJ5', 'Anang Mujito', 'Personal', 'Junk Email My Outlook Data File Anang Mujito - Product Activation Failed', 'Back Up Email Anang Mujito', '-', 0, 'Software', 'Done', '20201103163543.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(463, '2020-11-03', 8, 'KJ5', 'Zilli Budgeting ', 'Personal', 'Tidak Bisa Ngeprint dari Laptop ke Printer Ajeng', 'Sharing Printer dari Laptop Zilly ke Printer Ajeng', '-', 0, 'Software', 'Done', '20201103164006.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(464, '2020-11-03', 7, 'KJ5', 'BOD', 'Personal', NULL, 'pengajuan pembayaran : Firstmedia ( SS, Pulomas ), Transvision ( SS, JGC), Remala ( Ekajaya, Ekanuri), Morina Pest : ( Ekanuri HW, Ekajaya JGC, Ekanuri KJ), CV Karya Mandiri ; ( KJ2, KJ4, HW lt.2, HW lt.3, PLB ), Google :  ( ekanuri.com )', '-', 0, 'Network', 'On Progres', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(465, '2020-11-03', 3, 'KJ5', 'Retno Acc', 'Personal', 'Troubleshot ABSS ', 'Restart ulang PC ', '-', 0, 'Software', 'Done', '20201103170344.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(466, '2020-11-03', 3, 'KJ5', 'Arifin Purchasing', 'Personal', 'Troubleshot Printer PC Arifin', 'Coneksi Ulang Printer dari PC Arifin ke PC Tri', '-', 0, 'Software', 'Done', '20201103170608.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(467, '2020-10-26', 5, 'GS', 'Wawan agency', 'Personal', 'Gabisa konek ke koneksi bea cukai', 'Remote pak wawan, agar bisa koneksi ke bea cukai', '-', 0, 'Software', 'Done', '20201104082211.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(468, '2020-11-02', 5, 'GS', 'Dedy agency', 'Personal', 'Pc dibawa ke mi ganti hardisk dan install ulang', 'Pemasangan pc pak dedy agency', '-', 0, 'Hardware', 'Done', '20201104084339.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(469, '2020-11-02', 5, 'GS', 'Yuso', 'Personal', 'Gabisa print ke printer bu puji', 'Connect printer dari pc yuso ke printer bu puji', '-', 0, 'Hardware', 'Done', '20201104085544.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(470, '2020-11-02', 5, 'GS', 'Wisnu agency', 'Personal', 'Pengecekan printer epson l100 & epson l110', 'Untuk yg l100 dicek tintanya yg abis, epson l110 ngga bisa nyala', '-', 0, 'Hardware', 'Done', '20201104084844.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(471, '2020-11-04', 5, 'HW', 'sistem hse', 'Personal', 'buat akses permision di folder dokumen sistem enc-doc', 'buat akses permision di folder dokumen sistem enc-doc', '-', 0, 'Software', 'done', '20201104103555.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(472, '2020-11-04', 4, 'KJ12', 'KJ2', 'Personal', 'Permintaan Pengecekan CCTV', 'Pengecekan CCTV KJ2', NULL, 0, 'Network', 'Done', '20201105133155.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(473, '2020-11-06', 2, 'KJ4', 'KJ4', 'Personal', 'Permintaan Pak Tono untuk cek kondisi ruangan ex Procuetment di gedung Biru KJ4', 'Speed tes Internet Gedung Biru KJ4', '-', 0, 'Network', 'On Progres', '20201106142914.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(474, '2020-11-06', 2, 'KJ4', 'KJ4', 'Personal', 'Permintaan Pak Tono cek kondisi ruangan ex procuetmen di gedung Biru KJ4', 'Pengecekan internet di gedung biru', '-', 0, 'Network', 'On Progres', '20201106144101.jpeg', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(475, '2020-11-09', 5, 'KJ12', 'nurdiansah', 'Personal', 'kesalahan input pada checker, waktu di sistem enc ops pada job order truck JT00088 tidak sesuai', 'merubah waktu disistem enc ops menjadi 5 menit pada jo truck JT00088', '-', 0, 'Software', 'done', '20201109204601.png', 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(476, '2020-11-09', 5, 'KJ12', 'Pak Iwan KJ2', 'Personal', 'bahasa keyboard tidak sesuai di tab, sehinggal error pada saat input jo truck di sistem ops', 'merubah bahasa keyboard di tab menjadi english US', '-', 0, 'Software', 'done', NULL, 'Sistem', '2020-11-23 13:24:23', 'Sistem', '2020-11-23 13:24:23'),
(477, '2020-11-25', 3, 'KJ5', 'test', 'Google Form', 'test', 'test', '-', 0, 'Software', 'test', '20201125164109.png', 'Agus Cholida', '2020-11-25 16:41:10', 'Agus Cholida', '2020-11-25 16:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `user_aktif` bit(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`, `jabatan`, `user_aktif`) VALUES
(1, 'Abdul Rozak', 'rozak', '3a37583cbdc41fae0168b7d1d84de109', 1, 'Head IT', b'1'),
(2, 'Ade Nurjaya', 'aden', '3a37583cbdc41fae0168b7d1d84de109', 3, 'Staff IT', b'1'),
(3, 'Agus Cholida', 'agus.cholida', '3a37583cbdc41fae0168b7d1d84de109', 2, 'Staff IT', b'1'),
(4, 'Agus Priyanto', 'agus.priyanto', '3a37583cbdc41fae0168b7d1d84de109', 3, 'Staff IT', b'1'),
(5, 'Ahmad Juantoro', 'juan', '3a37583cbdc41fae0168b7d1d84de109', 3, 'Staff IT', b'1'),
(6, 'Ari Pratama Kusumah', 'ari', '3a37583cbdc41fae0168b7d1d84de109', 3, 'Staff IT', b'1'),
(7, 'E Hodijeh', 'hodijeh', '3a37583cbdc41fae0168b7d1d84de109', 2, 'Staff IT', b'1'),
(8, 'Nurdiansah', 'nurdiansah', '3a37583cbdc41fae0168b7d1d84de109', 3, 'Staff IT', b'1'),
(10, 'Testing', 'Test', 'd41d8cd98f00b204e9800998ecf8427e', 1, 'Sistem', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `kd_lokasi` char(10) NOT NULL,
  `nm_lokasi` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`kd_lokasi`, `nm_lokasi`, `alamat`, `telepon`) VALUES
('HW', 'Hayam Wuruk', 'JL.Hayam Wuruk No.2XX, Jakarta Pusat', 213459888),
('GS', 'Graha Segara', 'Jl. Timor Raya No. 1 Koja, Tanjung Priok, Jakarta 14310', 2143904906),
('KJ12', 'Kalijapat 1&2', 'Jl. Ketel Uap I No. 1 Jakarta Utara DKI Jakarta', 2143902157),
('KJ4', 'Kalijapat 4', 'Jl. Ketel Uap I No. 1 Jakarta Utara DKI Jakarta', 2143902157),
('KJ5', 'Kalijapat 5', 'Jl. Ketel Uap I No. 1 Jakarta Utara DKI Jakarta', 2143902157),
('JGC', 'Jakarta Golf Club', 'Jl. Rawa Mangun Muka Raya No.1, RT.10/RW.13, Rawamangun, Kec. Pulo Gadung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220', 214754732),
('PCI', 'Petrochina', 'Menara Kuningan', 0),
('KCI', 'Karyatara Cemara Indah', 'Cirebon', 0),
('BOD', 'BOD', '-', 0),
('MA32', 'Kapal MA32', '-', 0),
('MA35', 'Kapal MA35', '-', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ms_level`
--

CREATE TABLE IF NOT EXISTS `ms_level` (
`id_level` int(11) NOT NULL,
  `nama_level` varchar(40) NOT NULL,
  `warna` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_level`
--

INSERT INTO `ms_level` (`id_level`, `nama_level`, `warna`) VALUES
(1, 'Plat Merah', 'danger'),
(2, 'Plat Hitam', 'secondary'),
(3, 'Plat Kuning', 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `ms_status`
--

CREATE TABLE IF NOT EXISTS `ms_status` (
`no` int(11) NOT NULL,
  `kode_status` char(5) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `warna` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_status`
--

INSERT INTO `ms_status` (`no`, `kode_status`, `nama_status`, `warna`, `keterangan`) VALUES
(1, 'NW', 'New', 'success', 'Pengajuan baru dibuat'),
(2, 'RL', 'Release', 'warning', 'Menunggu Approval'),
(3, 'AP', 'Approve', 'primary', 'Pengajuan sudah di Approve, dan bisa diproses'),
(4, 'CL', 'Close', 'secondary', 'Pengajuan sudah selesai'),
(5, 'RJ', 'Reject', 'danger', 'Pengajuan di Reject');

-- --------------------------------------------------------

--
-- Table structure for table `pc_laptop`
--

CREATE TABLE IF NOT EXISTS `pc_laptop` (
  `id_perangkat` char(10) NOT NULL,
  `user` varchar(40) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `lokasi` char(10) NOT NULL,
  `jenis_perangkat` varchar(10) NOT NULL,
  `spesifikasi_monitor` varchar(30) DEFAULT NULL,
  `merk` varchar(100) DEFAULT NULL,
  `spesifikasi` varchar(200) DEFAULT NULL,
  `unit_bisnis` varchar(50) DEFAULT NULL,
  `antivirus` char(25) DEFAULT NULL,
  `expired_antivirus` date DEFAULT NULL,
  `anydesk` int(11) DEFAULT NULL,
  `password_anydesk` varchar(30) DEFAULT NULL,
  `tanda_terima` varchar(100) DEFAULT NULL,
  `dibuat_oleh` varchar(40) DEFAULT NULL,
  `dibuat_pada` datetime DEFAULT NULL,
  `dirubah_oleh` varchar(40) DEFAULT NULL,
  `dirubah_pada` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc_laptop`
--

INSERT INTO `pc_laptop` (`id_perangkat`, `user`, `email`, `lokasi`, `jenis_perangkat`, `spesifikasi_monitor`, `merk`, `spesifikasi`, `unit_bisnis`, `antivirus`, `expired_antivirus`, `anydesk`, `password_anydesk`, `tanda_terima`, `dibuat_oleh`, `dibuat_pada`, `dirubah_oleh`, `dirubah_pada`) VALUES
('PC0001', 'Rozak ', 'rozak@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', NULL, 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0002', 'Admin IT', 'admin.it@ekanuri.com', 'HW', 'Komputer', '-', NULL, 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', 'DQ59B-WTHSY-JWDTW-XCNUY', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0003', 'Aden', 'ade.nurjaya@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', 'ada', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0004', 'Nurdiansah', 'nurdiansah@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0005', 'Agus', 'helpdesk@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0006', 'Ari ', 'ari.pratama@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0007', 'Wayanto', NULL, 'HW', 'Komputer', '-', 'ASUS ', 'Windows 7 32 bit, Core I3-2370M, 2 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0008', 'Nasrul', 'nasrul@ekanuri.com', 'HW', 'Laptop', '-', 'ASUS(P5KPL-AMSE)', 'Windows 7 32 bit, INTEL CORE 2 (Duo E7500), 1 GB (DDR3)', 'Ekajaya', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0009', 'Bambang (Putra)', NULL, 'HW', 'Komputer', '-', 'ASUS (P5LD2-X)', 'Windows 7 ultimate 64 bit, INTEL CORE 2 (Duo E7200), 2 GB (DDR2)', 'Ekajaya', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0010', 'Sigit', 'sigit.sayogyo@ekanuri.com', 'HW', 'Laptop', '-', 'ASUS (K45A)', 'Windows 7 ultimate 64 bit, INTEL CORE I3 (2370M), 4 GB (DDR3)', 'Ekajaya', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0011', 'Andriansyah', NULL, 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0012', 'lukman', NULL, 'HW', 'Komputer', '-', 'ASUS (P5GC-MX)', 'Windows 7 ultimate 64 bit, INTEL PENTIUM E2160, 2 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0013', 'Hendry', 'hendri@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (641T-M16)', 'Windows 7 ultimate 64 bit, INTEL CORE 2 (E6600), 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0014', 'Yudi  ', 'yudi.wahyudi@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', 'XB5CW-YB8B4-92VU9-WU9RN', '2021-06-16', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0015', 'Benny', NULL, 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0016', 'TRI Purchasing', 'triyatno@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 PRO 64 bit, AMD A6-6400K, 8 GB (DDR3)', 'Ekanuri', 'XB5CW-YB8B4-92VU9-WU9RN', '2021-06-16', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0017', 'ARIFIN', 'arifin@ekanuri.com', 'HW', 'Komputer', '-', 'ASUS (P5G41T-M)', 'Windows xp sp 2, INTEL CORE 2 E6300, 4 GB (DDR3)', 'Ekanuri', 'DQ59B-WTHSY-JWDTW-XCNUY', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0018', 'Faisal', 'faisal.azhary@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', '1YERA-C1WYQ-Y21XV-Z5MMJ', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0019', 'Apiko', 'apiko@eaknuri.com', 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', '1YERA-C1WYQ-Y21XV-Z5MMJ', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0020', 'Bu Nunu', 'nunu@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0021', 'Yosef', 'yosef@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0022', 'Ayu PEIP', 'ayu.wulandevi@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0023', 'R. Sek Lt.2', NULL, 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0024', 'Batubara', 'batubara@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', 'QU1AB-BJZ7M-HEQHF-4Q3YN', '2021-02-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0025', 'Jamal', 'jamal@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', 'QU1AB-BJZ7M-HEQHF-4Q3YN', '2021-02-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0026', 'Tyrsa', 'tyras@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 pro  64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', 'QU1AB-BJZ7M-HEQHF-4Q3YN', '2021-02-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0027', 'Putri Ex.Arya', 'cut.putrie@ekanuri.com', 'HW', 'Komputer', '-', 'ASUS (H61M-C)', 'Windows 7 ultimate 64 bit, CORE I7-3370, 4 GB (DDR3)', 'Ekanuri', 'FHR6H-RK3XW-EBH3Q-8DHUJ', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0028', 'Tri', 'tri@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', 'DQ59B-WTHSY-JWDTW-XCNUY', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0029', 'Lia Ex.Rani', 'novi.auliya@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 ultimate 64 bit, AMD A4-6300, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0030', 'Erlangga', NULL, 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0031', 'HRD Laptop ', NULL, 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0032', 'Server', NULL, 'HW', 'Komputer', '-', 'GIGABITE (H61M)', 'Windows 7 ultimate 64 bit, INTEL CORE I3, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0033', 'Yuli ', 'yuli.halim@ekanuri.com', 'HW', 'Komputer', '-', NULL, 'Windows Ori non CPU, 4GB', 'Ekanuri', '1YERA-C1WYQ-Y21XV-Z5MMJ', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0034', 'Zili', 'zhili@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0035', 'Ajeng ', 'ajeng@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7, AMD A6 6400K, 4 GB (DDR3)', 'Ekanuri', '1FR9V-T5VKU-99RKN-MWB49', '2021-08-17', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0036', 'Grace ', 'gresia.natalia@ekanuri.com', 'HW', 'Komputer', '-', NULL, 'Windows 10 Original, Core i5, 4GB', 'Ekanuri', '1FR9V-T5VKU-99RKN-MWB49', '2021-08-17', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0037', 'Adriansyah', 'adriansyah@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0038', 'Finance ', NULL, 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', ', AMD A6 6400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0039', 'Santika (Ex Fadli)', 'santika@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (A68F2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0040', 'Retno Ex.Lena', 'retno.agustiningsih@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (G41T-M1G)', 'Windows 7 ultimate 64 bit, INTEL CORE 2 E6700, 4 GB (DDR3)', 'Ekanuri', 'FHR6H-RK3XW-EBH3Q-8DHUJ', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0041', 'Faseh', 'faseh@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 home 64 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', 'FHR6H-RK3XW-EBH3Q-8DHUJ', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0042', 'Ali Ex.Syamsudin ', 'ali.adha@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 ultimate 64 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0043', 'Eka  ', 'ekafitra@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (H61H2-MV)', 'Windows 7 ultimate 64 bit, INTEL PENTIUM 62030, 4 GB (DDR3)', 'Ekanuri', 'FHR6H-RK3XW-EBH3Q-8DHUJ', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0044', 'Upi', NULL, 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0045', 'Ex Anto', NULL, 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 32 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0046', 'Titin', 'titin@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0047', 'Ricky Ex. Kristin ', 'ricky@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (641T-M16)', 'Windows 7 ultimate 64 bit, INTEL CORE DUO (E4500), 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0048', 'Didin  ', 'komarudin@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 PRO 64 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0049', 'Reza', 'etty@ekanuri.com', 'HW', 'Komputer', '-', 'ECS (a68f2p-m4)', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', '1YQ3Z-CVXRX-TXJFW-KYX32', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0050', 'Etty', NULL, 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', 'FHW9Y-ZVGAR-WNEWR-FP86M', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0051', 'Patra', 'patra@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 ultimate 64 bit, AMD A6-7400K, 4 GB (DDR3)', 'Ekanuri', '1YQ3Z-CVXRX-TXJFW-KYX32', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0052', 'Riska Ex Adhi', 'riska@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows xp, AMD A4-6300, 4 GB (DDR3)', 'Ekanuri', '1YQ3Z-CVXRX-TXJFW-KYX3', '2021-07-02', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0053', 'Andrianto', 'andrianto@ekanuri.com', 'HW', 'Laptop', '-', NULL, NULL, 'Ekanuri', 'XB5CW-YB8B4-92VU9-WU9RN', '2021-06-16', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0054', 'Ismi', 'ismy.rinjany@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 PRO 64 bit, AMD A6-6400K, 4 GB (DDR3)', 'Ekanuri', 'FD1NS-DHA8F-7GQN4-ENX36', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0055', 'Dhika', 'dhika@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows xp sp 3, AMD A6-6300, 4 GB (DDR3)', 'Ekanuri', 'FD1NS-DHA8F-7GQN4-ENX36', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0056', 'Ayu  ', NULL, 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 32 bit, AMD A6 7400K, 4 GB (DDR3)', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0057', 'Icha ', 'icha@ekanuri.com', 'HW', 'Komputer', '-', 'BIOSTAR A58ML2', 'Windows 7 ultimate 64 bit, AMD A6 6400K, 4 GB (DDR3)', 'Ekanuri', 'FD1NS-DHA8F-7GQN4-ENX36', '2021-08-25', 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0058', 'Diah', 'diah.suriani@ekanuri.com', 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0059', 'Purchasing (yudi)', 'yudi.wahyudi@ekanuri.com', 'HW', 'Komputer', '-', NULL, 'Windows 10 Original, Core i5, 4GB', 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0060', 'Server Myob', NULL, 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06'),
('PC0061', 'PC Ex Lena', NULL, 'HW', 'Komputer', '-', NULL, NULL, 'Ekanuri', NULL, NULL, 0, '-', '', 'Sistem', '2020-11-23 13:40:06', 'Sistem', '2020-11-23 13:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `spt_lembur`
--

CREATE TABLE IF NOT EXISTS `spt_lembur` (
`id_sptlembur` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jabatan` varchar(30) DEFAULT NULL,
  `perintah_oleh` varchar(40) DEFAULT NULL,
  `nama_tugas` text,
  `kendaraan` varchar(50) DEFAULT NULL,
  `tempat_berangkat` varchar(50) DEFAULT NULL,
  `tempat_transit` varchar(50) DEFAULT NULL,
  `tempat_tujuan` varchar(50) NOT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `jam_berangkat` time DEFAULT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `jam_kembali` time DEFAULT NULL,
  `lama_tugas` text,
  `keterangan_lain` text,
  `status` char(5) DEFAULT NULL,
  `keterangan_reject` text
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spt_lembur`
--

INSERT INTO `spt_lembur` (`id_sptlembur`, `nama`, `jabatan`, `perintah_oleh`, `nama_tugas`, `kendaraan`, `tempat_berangkat`, `tempat_transit`, `tempat_tujuan`, `tgl_berangkat`, `jam_berangkat`, `tgl_kembali`, `jam_kembali`, `lama_tugas`, `keterangan_lain`, `status`, `keterangan_reject`) VALUES
(1, 'Aden Nurjaya', 'Staff IT', 'Abdul Rozak', 'CCTV KJ4', 'Motor', 'Rumah', 'HW', 'Kalijapat 4', '2020-11-21', '09:12:00', '2020-11-21', '22:33:00', '13 Jam 21 Menit ', 'testing', 'RJ', 'banyakk bannget sampe, 13 jam\r\nrevisi lagiiii'),
(2, 'Aden Nurjaya', 'Staff IT', 'Abdul Rozak', 'installasi', 'Motor', 'Kalijapat 4', '', 'Jakarta Golf Club', '2020-11-20', '17:00:00', '2020-11-20', '21:33:00', '4 Jam 33 Menit ', '-', 'AP', NULL),
(3, 'Ari Pratama Kusuma', 'Staff IT', 'Abdul Rozak', 'testing', 'Motor', 'Hayam Wuruk', '', 'Jakarta Golf Club', '2020-11-21', '12:01:00', '2020-11-21', '21:42:00', '9 Jam 41 Menit ', 'testing', 'RL', NULL),
(4, 'E Hodijeh', 'Staff IT', 'Abdul Rozak', 'bikin email baru', 'Shuttle', 'Hayam Wuruk', 'GS', 'Jakarta Golf Club', '2020-11-22', '17:00:00', '2020-11-22', '21:03:00', '4 Jam 3 Menit ', ' email JGC', 'NW', NULL),
(5, 'E Hodijeh', 'Staff IT', 'Abdul Malik', 'nyoba aja dulu', 'Kendaraan Umum', 'Hayam Wuruk', 'arabian cunshine', 'Jakarta Golf Club', '2020-11-01', '01:12:00', '2020-11-02', '14:44:00', '1 Hari 13 Jam 32 Menit ', ' nyobain aja sii dulu', 'NW', NULL),
(6, 'Abdul Rozak', 'Head IT', 'Abdul Rozak', 'adada', 'Kendaraan Umum', 'Rumah', '', 'Graha Segara', '2020-11-25', '00:01:00', '2020-11-25', '12:02:00', '12 Jam 1 Menit ', ' tes', 'RL', NULL),
(7, 'Abdul Rozak', 'Head IT', 'Abdul Rozak', 'Twatst', 'Kendaraan Umum', 'Rumah', '', 'Graha Segara', '2020-11-25', '15:40:00', '2020-11-25', '17:53:00', '2 Jam 13 Menit ', 'Test', 'RL', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan`
--
ALTER TABLE `catatan`
 ADD PRIMARY KEY (`id`), ADD KEY `user` (`user`);

--
-- Indexes for table `dokumen_it`
--
ALTER TABLE `dokumen_it`
 ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `laporan_it`
--
ALTER TABLE `laporan_it`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
 ADD PRIMARY KEY (`kd_lokasi`);

--
-- Indexes for table `ms_level`
--
ALTER TABLE `ms_level`
 ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `ms_status`
--
ALTER TABLE `ms_status`
 ADD PRIMARY KEY (`no`,`kode_status`);

--
-- Indexes for table `pc_laptop`
--
ALTER TABLE `pc_laptop`
 ADD PRIMARY KEY (`id_perangkat`);

--
-- Indexes for table `spt_lembur`
--
ALTER TABLE `spt_lembur`
 ADD PRIMARY KEY (`id_sptlembur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan`
--
ALTER TABLE `catatan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `dokumen_it`
--
ALTER TABLE `dokumen_it`
MODIFY `id_dokumen` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laporan_it`
--
ALTER TABLE `laporan_it`
MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=478;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `ms_level`
--
ALTER TABLE `ms_level`
MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_status`
--
ALTER TABLE `ms_status`
MODIFY `no` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spt_lembur`
--
ALTER TABLE `spt_lembur`
MODIFY `id_sptlembur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `catatan`
--
ALTER TABLE `catatan`
ADD CONSTRAINT `catatan_ibfk_1` FOREIGN KEY (`user`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
