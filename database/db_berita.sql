-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Okt 2022 pada 11.06
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_img` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_img`, `judul`, `gambar`, `deskripsi`) VALUES
(1, 'DOKUMEN PENDIDIKAN', 'pendidikan.jpeg', 'Salah satu produk utama Peruri Security Printing adalah cetakan dokumen pendidikan.Peruri Security Printing telah bekerja sama dengan perguruan-perguruan tinggi baik negeri maupun swasta yang tersebar di seluruh Indonesia.Peruri Security Printing cukup intens menjalin kerjasama yang baik dengan instansi-instansi dibidang pendidikan khususnya jenjang sekolah. Peruri Security Printing selalu mengedepankan hasil cetakan berkualitas tinggi dengan fitur-fitur sekuriti yang sangat variatif dan berkelas. Adapun produk-produk Peruri Security Printing dibidang pendidikan adalah sebagai berikut : Ijasah, Transkrip, Sertifikat, Raport, dll'),
(2, 'DOKUMEN PERIJINAN', 'perijinan.jpeg', 'Salah satu produk cetakan Peruri Security Printing adalah dokumen perijinan meliputi : IMB, TDP, SIUP, Ijin Gangguan (HO), TDI, IUI, dll. Dokumen-dokumen ini dikeluarkan oleh pemerintah daerah setempat sebagai legalitas baik secara individu maupun badan usaha. Dokumen-dokumen ini sangat rentan untuk dipalsukan sehingga dibutuhkan penanaman fitur security printing pada dokumen tersebut.'),
(3, 'DOKUMEN PERHUBUNGAN', 'perhubungan.jpeg', 'Di bidang perhubungan produk-produk cetakan sekuriti Peruri Security Printing meliputi: Karcis dan Stiker Parkir, Uji Tipe, Tiket Perjalanan, dll. Dokumen-dokumen ini dikeluarkan oleh Kementrian Perhubungan.'),
(4, 'DOKUMEN PERPAJAKAN', 'perpajakan.jpeg', 'Salah satu produk cetakan Peruri Security Printing dokumen perpajakan antara lain : SKPD,SPOPD,SPPT,PBB,dll.'),
(5, 'DOKUMEN KEPENDUDUKAN', 'kependudukan.jpeg', 'Produk Security Printing Dokumen Kependudukan antara lain : Akta Kematian, Akta Register, Kartu Keluarga, dll.'),
(6, 'DOKUMEN PERBANKAN', 'perbankan.jpeg', 'Dokumen perbankan cetakan Peruri Security Printing antara lain : Bilyet Deposito,Buku Tabungan,Cek, Bilyet Giro,Surat Saham,dll.'),
(7, 'DOKUMEN KPU', 'kpu.jpeg', 'Produk cetakan Peruri Security Printing Dokumen KPU antara lain : Surat Suara,Segel,Template,Form,dll.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kebijakan`
--

CREATE TABLE `tbl_kebijakan` (
  `id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klien`
--

CREATE TABLE `tbl_klien` (
  `id_klien` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_klien`
--

INSERT INTO `tbl_klien` (`id_klien`, `img`, `title`, `isi`) VALUES
(1, 'klien.jpg', 'Jangkauan Pemasaran: Sumatra, Jawa, Bali, Kalimantan, Nusa Tenggara, Sulawesi, Maluku, Papua', '<h5>&nbsp; &nbsp; &nbsp;Peruri Security Printing telah bekerja sama dengan perguruan-perguruan tinggi baik negeri maupun swasta yang tersebar di seluruh Indonesia<b>.</b></h5>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lvuser`
--

CREATE TABLE `tbl_lvuser` (
  `id_lvuser` int(10) NOT NULL,
  `leveluser` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lvuser`
--

INSERT INTO `tbl_lvuser` (`id_lvuser`, `leveluser`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nilaiperusahaan`
--

CREATE TABLE `tbl_nilaiperusahaan` (
  `id_nilai` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nilaiperusahaan`
--

INSERT INTO `tbl_nilaiperusahaan` (`id_nilai`, `image`, `isi`) VALUES
(1, 'CoreValues.jpeg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_peraturan`
--

CREATE TABLE `tbl_peraturan` (
  `id_direksi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `id_post` int(25) NOT NULL,
  `img` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `artikel` text DEFAULT NULL,
  `date` date NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `sinopsis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_posts`
--

INSERT INTO `tbl_posts` (`id_post`, `img`, `thumbnail`, `judul`, `artikel`, `date`, `kategori`, `sinopsis`) VALUES
(1, '2022-10-05 (12).png', '2022-10-05 (11).png', 'Info lowongan pekerjaan pada perusahaan ini,segera kirim CV anda', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Salah satu produk utama Peruri Security Printing adalah cetakan dokumen pendidikan.Peruri Security Printing telah bekerja sama dengan perguruan-perguruan tinggi baik negeri maupun swasta yang tersebar di seluruh Indonesia.Peruri Security Printing cukup intens menjalin kerjasama yang baik dengan instansi-instansi dibidang pendidikan khususnya jenjang sekolah. Peruri Security Printing selalu mengedepankan hasil cetakan berkualitas tinggi dengan fitur-fitur sekuriti yang sangat variatif dan berkelas. Adapun produk-produk Peruri Security Printing dibidang pendidikan adalah sebagai berikut : Ijasah, Transkrip, Sertifikat, Raport, dll</span><br></p>', '2022-10-25', 'berita', 'segera kirim CV anda kepada perusahaan kami'),
(2, 'flutter.PNG', 'fluter.PNG', 'Info lowongan pekerjaan pada perusahaan ini,segera kirim CV anda', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Salah satu produk utama Peruri Security Printing adalah cetakan dokumen pendidikan.Peruri Security Printing telah bekerja sama dengan perguruan-perguruan tinggi baik negeri maupun swasta yang tersebar di seluruh Indonesia.Peruri Security Printing cukup intens menjalin kerjasama yang baik dengan instansi-instansi dibidang pendidikan khususnya jenjang sekolah. Peruri Security Printing selalu mengedepankan hasil cetakan berkualitas tinggi dengan fitur-fitur sekuriti yang sangat variatif dan berkelas. Adapun produk-produk Peruri Security Printing dibidang pendidikan adalah sebagai berikut : Ijasah, Transkrip, Sertifikat, Raport, dll&nbsp;</span><br></p>', '2022-10-25', 'berita', 'segera kirim CV anda kepada perusahaan kami'),
(3, 'peruri1.PNG', 'peruri.PNG', 'Info lowongan pekerjaan pada perusahaan ini,segera kirim CV anda', '<p><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: justify;\">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Salah satu produk utama Peruri Security Printing adalah cetakan dokumen pendidikan.Peruri Security Printing telah bekerja sama dengan perguruan-perguruan tinggi baik negeri maupun swasta yang tersebar di seluruh Indonesia.Peruri Security Printing cukup intens menjalin kerjasama yang baik dengan instansi-instansi dibidang pendidikan khususnya jenjang sekolah. Peruri Security Printing selalu mengedepankan hasil cetakan berkualitas tinggi dengan fitur-fitur sekuriti yang sangat variatif dan berkelas. Adapun produk-produk Peruri Security Printing dibidang pendidikan adalah sebagai berikut : Ijasah, Transkrip, Sertifikat, Raport, dll</span><br></p>', '2022-10-25', 'berita', 'segera kirim CV anda kepada perusahaan kami');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`id_sejarah`, `gambar`, `isi`) VALUES
(1, 'gedung-lama.jpg', '<p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;PT Peruri Wira Timur didirikan berdasarkan Akta Pendirian No 06 tanggal 05 April 2011, berdomisili di Surabaya sebagai Perusahaan Pengembangan Kerjasama Operasi (KSO) antara Perum Peruri (BUMN) dengan PT Panca Wira Usaha (BUMD) Provinsi Jawa TImur, yang bergerak di bidang Security Printing dalam rangka perluasan pangsa pasar Perum Peruri, khususnya di Provinsi Jawa Timur dan Indonesia bagian timur.</span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">&nbsp; &nbsp; &nbsp; &nbsp;Kegiatan operasional PT. Peruri Wira Timur telah memperoleh izin dari Badan Intelijen Negara (BIN) cq : Badan Koordinasi Pemberantasan Uang Palsu (BOTASUPAL) dan telah memiliki ISO 9001 : 2008 (Quality Management System) dari SAI Global.</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(255) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `id_lvuser` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `username`, `password`, `nama_pengguna`, `img`, `id_lvuser`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Tegar Santuy', 'aldos.jpg', 1),
(2, 'user', '5d8a8a118ab27197bd9689846e67131f', 'Nopek', 'avatar2.png', 2),
(32, 'isa', '165a1761634db1e9bd304ea6f3ffcf2b', 'Isa Nur', 'avatar4.png', 2),
(35, 'pengguna', '202cb962ac59075b964b07152d234b70', 'pengguna1', 'walpaper.jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_vimi`
--

CREATE TABLE `tbl_vimi` (
  `id_vimi` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_vimi`
--

INSERT INTO `tbl_vimi` (`id_vimi`, `img`, `isi`) VALUES
(1, 'VisiMisi.jpeg', '<p><br></p>');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_img`);

--
-- Indeks untuk tabel `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_klien`
--
ALTER TABLE `tbl_klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indeks untuk tabel `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  ADD PRIMARY KEY (`id_lvuser`);

--
-- Indeks untuk tabel `tbl_nilaiperusahaan`
--
ALTER TABLE `tbl_nilaiperusahaan`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  ADD PRIMARY KEY (`id_direksi`);

--
-- Indeks untuk tabel `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`id_post`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `tbl_users_ibfk_1` (`id_lvuser`);

--
-- Indeks untuk tabel `tbl_vimi`
--
ALTER TABLE `tbl_vimi`
  ADD PRIMARY KEY (`id_vimi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_kebijakan`
--
ALTER TABLE `tbl_kebijakan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_klien`
--
ALTER TABLE `tbl_klien`
  MODIFY `id_klien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_lvuser`
--
ALTER TABLE `tbl_lvuser`
  MODIFY `id_lvuser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_nilaiperusahaan`
--
ALTER TABLE `tbl_nilaiperusahaan`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_peraturan`
--
ALTER TABLE `tbl_peraturan`
  MODIFY `id_direksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `id_post` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tbl_vimi`
--
ALTER TABLE `tbl_vimi`
  MODIFY `id_vimi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD CONSTRAINT `tbl_users_ibfk_1` FOREIGN KEY (`id_lvuser`) REFERENCES `tbl_lvuser` (`id_lvuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
