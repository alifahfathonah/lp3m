-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 18 Des 2018 pada 00.01
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lp3m`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_buku`
--

CREATE TABLE `dokumen_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokumen_sk`
--

CREATE TABLE `dokumen_sk` (
  `id_sk` int(11) NOT NULL,
  `no_sk` varchar(255) NOT NULL,
  `nama_sk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal_sk` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokumen_sk`
--

INSERT INTO `dokumen_sk` (`id_sk`, `no_sk`, `nama_sk`, `deskripsi`, `tanggal_sk`, `file`) VALUES
(9, 'C.TEL. A-029261 /PD620/TCU-1B000000/2018', 'Agenda Change Management', 'Sertifikat', '2018-07-19', 'Agenda_Change_Management_(Bilingual)_Get_Your_Certificate.pdf'),
(10, 'C.TEL. A-035463 /PD620/TCU-1B000000/2018', 'Agenda Cisco Router', 'Sertifikat', '2018-12-15', 'Agenda_Cisco_Router_Get_Your_Certificate.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_formulir`
--

CREATE TABLE `master_formulir` (
  `id_formulir` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `formulir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_formulir`
--

INSERT INTO `master_formulir` (`id_formulir`, `kode`, `formulir`) VALUES
(1, '01', 'Surat Usulan Pengesahan Kompetensi Lulusan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_judul`
--

CREATE TABLE `master_judul` (
  `id_judul` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_judul`
--

INSERT INTO `master_judul` (`id_judul`, `kode`, `deskripsi`) VALUES
(1, 'SOP-100-100', 'SOP Penetapan VMT'),
(2, 'SOP-100-201', 'SOP Penyusunan VMT'),
(3, 'SOP-100-202', 'SOP Sosialisasi'),
(4, 'SOP-100-203', 'SOP Monitoring'),
(5, 'SOP-100-300', 'SOP Evaluasi VMT'),
(6, 'SOP-100-400', 'SOP Pengendalian VMT'),
(7, 'SOP-100-500', 'SOP Peningkatan VMT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_mp`
--

CREATE TABLE `master_mp` (
  `id_mp` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_mp`
--

INSERT INTO `master_mp` (`id_mp`, `kode`, `deskripsi`) VALUES
(1, 'MP-01', '-'),
(2, 'MP-02', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_standar`
--

CREATE TABLE `master_standar` (
  `id_standar` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_standar`
--

INSERT INTO `master_standar` (`id_standar`, `kode`, `deskripsi`) VALUES
(1, 'VMT-01', 'Standar Visi, Misi,Tujuan dan sasaran '),
(2, 'TKL-01', 'Standar Tata Kelola'),
(3, 'PJM-01', 'Standar Sistem Penjaminan Mutu'),
(4, 'PLU-01', 'Standar Pelayanan Umum'),
(7, 'HMP-01', 'Standar Humas & Protokoler'),
(8, 'PKU-01', 'Standar Pengelolaan Keuangan'),
(9, 'MHS-01', 'Standar Kemahasiswaan'),
(10, 'CTR-01', 'Standar Carier Center'),
(11, 'AMN-01', 'Standar Alumni'),
(12, 'SDM-01', 'Standar Sumber Daya Manusia'),
(13, 'PTK-01', 'Standar Perpustakaan'),
(14, 'SIM-01', 'Standar Sistem Informasi'),
(15, 'MNE-01', 'Standar Monitoring dan Evaluasi'),
(16, 'KKS-01', 'Standar Kerjasama dan Kemitraan Strategis'),
(17, 'PSP-01', 'Standar Pengelolaan Sarana dan Prasarana'),
(18, 'KKK-01', 'Standar K3'),
(19, 'PIB-01', 'Standar Pengelolaan Inventaris Barang'),
(20, 'LAB-01', 'Standar Laboratorium'),
(21, 'TLS-01', 'Standar Tata Letak Naskah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_unitkerja`
--

CREATE TABLE `master_unitkerja` (
  `id_uk` int(11) NOT NULL,
  `kode` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen_buku`
--
ALTER TABLE `dokumen_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `dokumen_sk`
--
ALTER TABLE `dokumen_sk`
  ADD PRIMARY KEY (`id_sk`);

--
-- Indexes for table `master_formulir`
--
ALTER TABLE `master_formulir`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `master_judul`
--
ALTER TABLE `master_judul`
  ADD PRIMARY KEY (`id_judul`);

--
-- Indexes for table `master_mp`
--
ALTER TABLE `master_mp`
  ADD PRIMARY KEY (`id_mp`);

--
-- Indexes for table `master_standar`
--
ALTER TABLE `master_standar`
  ADD PRIMARY KEY (`id_standar`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `master_unitkerja`
--
ALTER TABLE `master_unitkerja`
  ADD PRIMARY KEY (`id_uk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_buku`
--
ALTER TABLE `dokumen_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_sk`
--
ALTER TABLE `dokumen_sk`
  MODIFY `id_sk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_formulir`
--
ALTER TABLE `master_formulir`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `master_judul`
--
ALTER TABLE `master_judul`
  MODIFY `id_judul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_mp`
--
ALTER TABLE `master_mp`
  MODIFY `id_mp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_standar`
--
ALTER TABLE `master_standar`
  MODIFY `id_standar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `master_unitkerja`
--
ALTER TABLE `master_unitkerja`
  MODIFY `id_uk` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
