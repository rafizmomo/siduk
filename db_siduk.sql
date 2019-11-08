-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2019 pada 14.32
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_duk`
--

CREATE TABLE `tb_duk` (
  `no` int(50) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `gelar_depan` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `gelar_belakang` varchar(255) DEFAULT NULL,
  `JK` varchar(255) DEFAULT NULL,
  `pangkat_gol_ruang` varchar(255) DEFAULT NULL,
  `tmt_pangkat` varchar(255) DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `eselon` varchar(255) DEFAULT NULL,
  `struktur` varchar(255) DEFAULT NULL,
  `tmt_jabatan` varchar(255) DEFAULT NULL,
  `th_sk_terakhir` varchar(255) DEFAULT NULL,
  `bln_sk_terakhir` varchar(255) DEFAULT NULL,
  `th_seluruh` varchar(255) DEFAULT NULL,
  `bln_seluruh` varchar(255) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `universitas` varchar(255) DEFAULT NULL,
  `th_lulus` varchar(255) DEFAULT NULL,
  `tmt_mutasi` varchar(255) DEFAULT NULL,
  `instansi_lama` varchar(255) DEFAULT NULL,
  `pensiun` varchar(255) DEFAULT NULL,
  `kgb` varchar(255) DEFAULT NULL,
  `pangkat_kenaikan` varchar(255) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL COMMENT '1=admin/2=user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `password`, `nama`, `role_id`) VALUES
('adminkominsa', '$2b$10$ChqVFp8GO0./cRQ3dIrtc.fKhugEZH./xr5qwc8AF08yyxHMxw3oq', 'Administrator', 1),
('kadiskominsa', '$2b$10$o15K1zIubvFr5a56mQo2E.WqYwiVhXSOnm5W3.VFFvNmvMfnBEfu2', 'Kepala Dinas Komunikasi, Informatika dan Persandian Kab. Bireuen', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_access_menu`
--

CREATE TABLE `tb_user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_access_menu`
--

INSERT INTO `tb_user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_menu`
--

CREATE TABLE `tb_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_menu`
--

INSERT INTO `tb_user_menu` (`id`, `menu`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_role`
--

CREATE TABLE `tb_user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_role`
--

INSERT INTO `tb_user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user_sub_menu`
--

CREATE TABLE `tb_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user_sub_menu`
--

INSERT INTO `tb_user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 0),
(2, 2, 'Data Urut Kepangkatan', 'user/duk', 'fas fa-fw fa-home', 1),
(3, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(4, 1, 'Input DUK', 'admin/duk_input', 'fas fa-fw fa-keyboard', 0),
(5, 1, 'Edit DUK', 'admin/duk_edit', 'fas fa-fw fa-wrench', 0),
(6, 1, 'Update DUK via Excel', 'admin/duk_update', 'fas fa-fw fa-table', 0),
(7, 1, 'Input User', 'admin/user_input', 'fas fa-fw fa-user-cog', 0),
(8, 1, 'Menu User', 'admin/user_menu', 'fas fa-fw fa-user-edit', 1),
(9, 1, 'Menu DUK', 'admin/duk_menu', 'fas fa-folder fa-sm', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_duk`
--
ALTER TABLE `tb_duk`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_role`
--
ALTER TABLE `tb_user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_duk`
--
ALTER TABLE `tb_duk`
  MODIFY `no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user_role`
--
ALTER TABLE `tb_user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
