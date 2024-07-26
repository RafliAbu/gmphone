-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 10:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `namakerusakan` varchar(100) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namakerusakan`, `gejala`) VALUES
('Kerusakan', 'smarthphone pernah jatuh'),
('kamera tidak berfungsi', 'smarthphone pernah jatuh'),
('kamera tidak berfungsi', 'smarthphone pernah jatuh'),
('Android Lambat', 'Hp sakit'),
('kamera tertawa', 'Hp sakit'),
('kamera tertawa', 'Mual'),
('Sim Card Rusak', 'apakah Kuningan pada SIM CARD rusak ?'),
('Sim Card Rusak', 'Apakah Slot Card Rusak ?'),
('Kamera Rusak', 'Apakah Smartphone Pernah Jatuh ?'),
('Kamera Rusak', 'Apakah Smartphone Pernah Kemasukan Air ?'),
('Kamera Rusak', 'Apakah Handphone terserang virus ?'),
('Boot Restart', 'Apakah Handphone terserang virus ?'),
('Boot Restart', 'Apakah terdapat File Sampah yang menumpuk pada sis'),
('Boot Restart', 'Apakah kinerja CPU, Memori RAM dan GPU Overload  ?'),
('Boot Restart', 'Apakah anda menginstal aplikasi yang masih Noval di'),
('Boot Restart', 'Apakah Smartphone Anda mengalami panas berlebih ?'),
('Bootloop', 'Apakah Anda memodifikasi Sistem ?'),
('Bootloop', 'Apakah Anda melakukan Overlock Android ?'),
('Bootloop', 'Apakah Anda Sering melepas Battery ?'),
('Tidak bisa Charger', 'Apakah Kabel usb rusak ?'),
('Tidak bisa Charger', 'Apakah Adapter charger rusak ?'),
('Tidak bisa Charger', 'Apakah port usb rusak ?'),
('Hardbrick', 'Apakah Smartphone Pernah Kemasukan Air ?'),
('Hardbrick', 'Apakah Anda memodifikasi Sistem ?'),
('Hardbrick', 'Apakah terjadi Kegagal saat install software ?'),
('Lcd Rusak', 'Apakah layar Android terdapat shadow ?'),
('Lcd Rusak', 'Apakah layar sentuh tidak Sensitif'),
('Battery Rusak', 'Apakah battery cepat habis ?'),
('Lcd Rusak', 'Apakah layar smartphone terdapat goresan ?');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `jenishp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `jenishp`) VALUES
('C01', 'apakah Kuningan pada SIM CARD rusak ?', 'Android'),
('C02', 'Apakah Slot Card Rusak ?', 'Android'),
('C03', 'Apakah Smartphone Pernah Jatuh ?', 'Android'),
('C04', 'Apakah Smartphone Pernah Kemasukan Air ?', 'Android'),
('C05', 'Apakah Handphone terserang virus ?', 'Android'),
('C06', 'Apakah terdapat File Sampah yang menumpuk pada sistem ?', 'Android'),
('C07', 'Apakah kinerja CPU, Memori RAM dan GPU Overload  ?', 'Android'),
('C08', 'Apakah anda menginstal aplikasi yang masih Noval didalam smartphone ?', 'Android'),
('C09', 'Apakah Smartphone Anda mengalami panas berlebih ?', 'Android'),
('C10', 'Apakah Anda memodifikasi Sistem ?', 'Android'),
('C11', 'Apakah Anda melakukan Overlock Android ?', 'Android'),
('C12', 'Apakah Anda Sering melepas Battery ?', 'Android'),
('C13', 'Apakah Kabel usb rusak ?', 'Android'),
('C14', 'Apakah Adapter charger rusak ?', 'Android'),
('C15', 'Apakah port usb rusak ?', 'Android'),
('C16', 'Apakah terjadi Kegagal saat install software ?', 'Android'),
('C17', 'Apakah layar Android terdapat shadow ?', 'Android'),
('C18', 'Apakah battery cepat habis ?', 'Android'),
('C19', 'Apakah layar sentuh tidak Sensitif', 'Android'),
('C20', 'Apakah layar smartphone terdapat goresan ?', 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `idkerusakan` varchar(20) NOT NULL,
  `namakerusakan` varchar(1000) NOT NULL,
  `jenishp` varchar(20) NOT NULL,
  `caramengatasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`idkerusakan`, `namakerusakan`, `jenishp`, `caramengatasi`) VALUES
('K1', 'Sim Card Rusak', 'Android', 'Reboot Smartphone\r\nPastikan SIM CARD terpasang dengan benar\r\nGunakan Mode manual jaringan\r\nperiksa Kondisi SIM CARD\r\nGanti SIM CARD\r\nLepas dan pasang kemnali SIM CARD\r\nTes SIM CARD pada Smartphone lain\r\nbersihkan Cahce dan data di Android\r\nPindah SLOT SIM CARD\r\nMerestart Jaringan\r\nUpdate Android\r\nFactory Reset\r\n'),
('K10', 'Lcd Rusak', 'Android', 'Ganti Lcd smartphone '),
('K2', 'Kamera Rusak', 'Android', 'reboot ponsel\r\nhentikan aplikasi kamera\r\nclear data camera\r\nganti dangan aplikasi kamera lain\r\nScan aplikasi antivirus\r\nfactory reset\r\n'),
('K3', 'Boot Restart', 'Android', 'Clear cache Smartphone\r\nHapus aplikasi yang tidak kampatibel\r\nhapus apLIkasi yang berat\r\npasang anti virus\r\nfactory reset\r\n'),
('K4', 'Bootloop', 'Android', 'Flash Ulang\r\nBila parah ganti EMMC\r\n'),
('K5', 'Tidak bisa Charger', 'Android', 'Ganti Konektor Charger\r\nGanti ganti adapter Charger\r\n'),
('K6', 'Hardbrick', 'Android', 'Ganti IC Power\r\n\r\n'),
('K7', 'IC power supply rusak', 'Android', 'Ganti IC Power'),
('K8', 'Software Rusak', 'Android', 'Wipe Data & cache smartphone\r\nInstall Ulang Smartphone'),
('K9', 'Battery Rusak', 'Android', 'Ganti Smartphone dengan Batteyr baru\r\njangan menggunakan adapter charger yang bukan original');

-- --------------------------------------------------------

--
-- Table structure for table `smartphones`
--

CREATE TABLE `smartphones` (
  `NO` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `imei` varchar(255) NOT NULL,
  `jenishp` varchar(255) NOT NULL,
  `idkerusakan` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `smartphones`
--

INSERT INTO `smartphones` (`NO`, `brand`, `model`, `imei`, `jenishp`, `idkerusakan`) VALUES
(1, 'admin', 'admin', '122013i123', 'Android', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`) VALUES
('U001', 'admin', 'admin', 'admin'),
('12', 'edojahat123', 'edojahat123', 'edo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`idkerusakan`);

--
-- Indexes for table `smartphones`
--
ALTER TABLE `smartphones`
  ADD UNIQUE KEY `NO` (`NO`),
  ADD KEY `idkerusakan` (`idkerusakan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `smartphones`
--
ALTER TABLE `smartphones`
  MODIFY `NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
