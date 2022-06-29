-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2022 pada 18.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskes2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) UNSIGNED NOT NULL,
  `kode_antrian` varchar(32) DEFAULT NULL,
  `nomor_antrian` varchar(8) DEFAULT NULL,
  `nama_pasien` varchar(64) DEFAULT NULL,
  `alamat_pasien` text DEFAULT NULL,
  `jenis_kelamin` varchar(16) DEFAULT NULL,
  `keluhan` text DEFAULT NULL,
  `nomor_kis` int(32) UNSIGNED DEFAULT NULL,
  `nomor_kk` int(32) UNSIGNED DEFAULT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antrian`
--

INSERT INTO `antrian` (`id`, `kode_antrian`, `nomor_antrian`, `nama_pasien`, `alamat_pasien`, `jenis_kelamin`, `keluhan`, `nomor_kis`, `nomor_kk`, `tanggal`, `status`, `created_at`) VALUES
(2, 'B18D0118', '001', 'junita', 'tanah abang', 'Perempuan', 'batuk', 87348754, 4294967295, '2022-06-18', 1, '2022-06-18 12:55:00'),
(3, 'CF546241', '001', 'Angga Saputra', 'KP baru', 'Laki-Laki', 'iya', 2332, NULL, '2022-06-26', 4, '2022-06-26 20:16:22'),
(4, '78FCD6BD', '002', 'ri bud', 'Taraban', 'Perempuan', 'Sakit hati', 264387, 4325254, '2022-06-26', 0, '2022-06-26 22:13:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(11) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2019-04-25', 201, '1556235694'),
('::1', '2019-04-26', 225, '1556274069'),
('::1', '2019-04-28', 5, '1556494161'),
('::1', '2019-05-03', 22, '1556926144'),
('::1', '2019-05-04', 163, '1556977184'),
('::1', '2019-05-05', 17, '1557046907'),
('::1', '2019-05-08', 1, '1557276241'),
('::1', '2019-07-15', 10, '1563200583'),
('::1', '2019-08-11', 9, '1565538997'),
('::1', '2019-08-17', 8, '1566048982'),
('::1', '2019-08-18', 6, '1566110970'),
('::1', '2019-09-19', 15, '1568883776'),
('::1', '2019-09-20', 1, '1569023648'),
('::1', '2019-09-21', 38, '1569069011'),
('::1', '2019-09-22', 5, '1569159654'),
('::1', '2019-09-23', 5, '1569207746'),
('::1', '2019-10-02', 2, '1569979870'),
('::1', '2019-10-10', 3, '1570673464'),
('::1', '2019-10-11', 5, '1570760224'),
('::1', '2019-10-21', 3, '1571620063'),
('::1', '2019-11-28', 1, '1574909436'),
('::1', '2019-12-03', 51, '1575413919'),
('::1', '2019-12-04', 9, '1575434237'),
('::1', '2019-12-05', 5, '1575549461'),
('::1', '2020-03-13', 7, '1584117664'),
('::1', '2022-04-14', 68, '1649945461'),
('::1', '2022-04-15', 43, '1650029871'),
('::1', '2022-04-16', 6, '1650122067'),
('::1', '2022-04-17', 13, '1650201106'),
('::1', '2022-04-18', 45, '1650274135'),
('::1', '2022-04-19', 7, '1650376624'),
('::1', '2022-04-20', 3, '1650455848'),
('::1', '2022-04-25', 1, '1650890756'),
('::1', '2022-05-10', 20, '1652180501'),
('127.0.0.1', '2022-06-11', 14, '1654967236'),
('127.0.0.1', '2022-06-12', 44, '1654994066'),
('127.0.0.1', '2022-06-13', 4, '1655079222'),
('127.0.0.1', '2022-06-14', 2, '1655139807'),
('::1', '2022-06-18', 2, '1655531744'),
('::1', '2022-06-20', 6, '1655725855'),
('::1', '2022-06-21', 13, '1655817574'),
('::1', '2022-06-22', 46, '1655905518'),
('::1', '2022-06-25', 3, '1656122801'),
('::1', '2022-06-26', 53, '1656262537'),
('::1', '2022-06-29', 34, '1656519122');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `agenda_deskripsi` text DEFAULT NULL,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(10, 'Lomba Kreasi Gambo dan Desain Kemasan Se- Kecamatan', '2022-04-14 13:05:58', 'Akan diadakan lomba Kreasi Gambo dan Desain Kemasan Se- Kecamatan Batanghari Leko Kab.Musi Banyuasin.', '2022-04-12', '2022-04-12', 'Kantor Kecamatan', '07.00 - 13.00', '-', 'Ananda '),
(11, 'Giat Saka Bakti Husada UPT Puskesmas Tanah Abang', '2022-04-14 13:08:30', 'Akan diadakan Giat Saka Bakti Husada UPT Puskesmas Tanah Abang.', '2022-04-22', '2022-04-22', 'UPT Puskesmas Tanah Abang', '07.00 - 13.00', '-', 'Ananda '),
(9, 'Sosialisasi kesehatan remaja di SMAN 1 Batanghari Leko', '2022-04-14 13:02:38', 'Akan diadakan Sosialisasi kesehatan remaja di SMAN 1 Batanghari Leko', '2022-04-07', '2022-04-07', 'SMAN 1 Batanghari Leko ', '07.00 - 10.00', '-', 'Ananda ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT 0,
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(6, 'Kegiatan Masyarakat', '2022-04-18 02:01:46', 11, 'Ananda', 6, 'd29f0aaa524fa1b916b784ba0a907a33.jpg'),
(7, 'Kegiatan Puskesmas', '2022-04-18 00:05:00', 11, 'Ananda', 6, 'd8e2ff12c5cf4286067ed69ae6c259d5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bulan`
--

CREATE TABLE `tbl_bulan` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bulan`
--

INSERT INTO `tbl_bulan` (`id`, `name`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agusutus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dalam`
--

CREATE TABLE `tbl_dalam` (
  `dalam_id` int(11) NOT NULL,
  `dalam_judul` varchar(100) NOT NULL,
  `dalam_isi` text NOT NULL,
  `dalam_ket` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dalam`
--

INSERT INTO `tbl_dalam` (`dalam_id`, `dalam_judul`, `dalam_isi`, `dalam_ket`) VALUES
(9, 'PELAYANAN POLI UMUM', '<h3>PERSYARATAN :</h3>\r\n\r\n<ul>\r\n	<li>Membawa Kartu Identitas KK/KTP</li>\r\n	<li>Membawa Kartu Berobat (Khusus Pasien Lama/Sudah Pernah Berkunjung)</li>\r\n	<li>Membawa Surat Keterangan Domisili&nbsp;</li>\r\n	<li>Membawa Fotokopi KTP dan Kartu JKN-KIS</li>\r\n</ul>\r\n\r\n<h3>SISTEM, MEKANISME, PROSEDUR :</h3>\r\n\r\n<ul>\r\n	<li>Petugas ruang pelayanan memanggil pasien berdasarkan nomor antrian ruang pelayanan</li>\r\n	<li>Petugas ruang pelayanan melakukan anamnesa untuk skrining kesehatan pasien</li>\r\n	<li>Petugas merujuk pasien ke ruang laboratorium untuk dilakukan cek darah</li>\r\n	<li>Petugas menerima hasil pemeriksaan laboratorium kemudian melakukan konseling kesehatan kepada pasien berdasarkan hasil test laboratorium</li>\r\n</ul>\r\n\r\n<h3>WAKTU PENYELESAIAN :</h3>\r\n\r\n<p>20 Menit<br />\r\n<br />\r\nJangka waktu yang dibutuhkan dalam proses general medical check-up dimulai dari pemanggilan pasien oleh ruang pelayanan umum sampai dengan selesai pemeriksaan laboratorium maksimal 20 menit sejak proses pasien dipanggil, dalam hal ini sepanjang pasien memenuhi persyaratan berdasarkan administrasi dan pemeriksaan dokter di ruang pelayanan umum</p>\r\n\r\n<h3>BIAYA / TARIF :</h3>\r\n\r\n<p>Sesuai dengan Perwali No. 27 Tahun 2019 tentang Program Pembebasan Biaya Pelayanan Kesehatan&nbsp;</p>\r\n', 'MENGENAI POLI UMUM'),
(10, 'PELAYANAN POLI KIA - KB', '<h3>PERSYARATAN :</h3>\r\n\r\n<ul>\r\n	<li>Kartu Berobat</li>\r\n	<li>Karrtu BPJS Kesehatan / KIS</li>\r\n	<li>KTP</li>\r\n	<li>KK</li>\r\n	<li>Kartu KB</li>\r\n</ul>\r\n\r\n<h3>SISTEM, MEKANISME, PROSEDUR :</h3>\r\n\r\n<ul>\r\n	<li>Perawatan suntik KB dilakukan di ruang pelayanan</li>\r\n	<li>Pelayanan Konsultasi</li>\r\n</ul>\r\n\r\n<h3>WAKTU PENYELESAIAN :</h3>\r\n\r\n<p>20 Menit<br />\r\n<br />\r\nJangka waktu yang dibutuhkan dalam pelayanan keluarga berencana adalah 20 menit</p>\r\n\r\n<h3>BIAYA / TARIF :</h3>\r\n\r\n<p>Sesuai dengan Perwali No. 27 Tahun 2019 tentang Program Pembebasan Biaya Pelayanan Kesehatan&nbsp;</p>\r\n', 'MENGENAI POLI KIA - KB'),
(12, 'PELAYANAN IMUNISASI', '<h2>PERSYARATAN</h2>\r\n\r\n<ul>\r\n	<li>Membawa KIA (Kartu Identitas Anak)/KK</li>\r\n	<li>Membawa buku KIA (Kesehatan Ibu dan Anak</li>\r\n	<li>Membawa Kartu Berobat (Khusus Pasien Lama/Sudah Pernah Berkunjung)</li>\r\n</ul>\r\n\r\n<h3>SISTEM, MEKANISME, PROSEDUR</h3>\r\n\r\n<p>Petugas ruang pelayanan memanggil pasien berdasarkan nomor antrian ruang pelayanan</p>\r\n\r\n<ul>\r\n	<li>Petugas ruang pelayanan melakukan anamnesa dan melakukan penyuntikan vaksin ke pasien yang memenuhi syarat</li>\r\n	<li>Petugas merujuk pasien ke ruang laboratorium untuk dilakukan cek darah</li>\r\n	<li>Petugas memberikan obat ke pasien</li>\r\n</ul>\r\n\r\n<p>WAKTU PENYELESAIAN</p>\r\n\r\n<p>10 Menit<br />\r\n<br />\r\nJangka waktu yang dibutuhkan dalam proses imunisasi dimulai dari pemanggilan pasien oleh ruang pelayanan Kesehatan Ibu dan Anak sampai dengan mendapatkan obat maksimal 10 menit sejak proses pasien dipanggil, dalam hal ini sepanjang pasien memenuhi persyaratan cek kesehatan yang diberikan</p>\r\n\r\n<h3>BIAYA / TARIF</h3>\r\n\r\n<p>Sesuai dengan Perwali No. 27 Tahun 2019 tentang Program Pembebasan Biaya Pelayanan Kesehatan&nbsp;</p>\r\n', 'MENGENAI PELAYANAN IMUNISASI'),
(11, 'PELAYANAN KESEHATAN GIGI DAN MULUT', '<h3>PERSYARATAN :</h3>\r\n\r\n<ul>\r\n	<li>Membawa Kartu Identitas KK/KTP</li>\r\n	<li>Membawa Kartu Berobat (Khusus Pasien Lama/Sudah Pernah Berkunjung)</li>\r\n	<li>Membawa Surat Keterangan Domisili&nbsp;</li>\r\n	<li>Membawa Fotokopi KTP dan Kartu JKN-KIS</li>\r\n</ul>\r\n\r\n<p>SISTEM, MEKANISME, PROSEDUR :</p>\r\n\r\n<ul>\r\n	<li>Petugas ruang pelayanan memanggil pasien berdasarkan nomor antrian ruang pelayanan</li>\r\n	<li>Petugas ruang pelayanan melakukan anamnesa untuk skrining kesehatan Pemeriksaan Fisik dan Pemeriksaan Gigi pasien</li>\r\n	<li>Petugas memberikan obat ke pasien</li>\r\n</ul>\r\n\r\n<p>WAKTU PENYELESAIAN :</p>\r\n\r\n<p>20 Menit<br />\r\n<br />\r\nJangka waktu yang dibutuhkan dalam proses pemeriksaan gigi dan mulut dimulai dari pemanggilan pasien oleh ruang pelayanan gigi dan mulut sampai dengan selesai pemeriksaan maksimal 20 menit sejak proses pasien dipanggil, dalam hal ini sepanjang pasien memenuhi persyaratan berdasarkan administrasi dan pemeriksaan dokter di ruang pelayanan umum</p>\r\n\r\n<h3>BIAYA / TARIF :</h3>\r\n\r\n<p>Sesuai dengan Perwali No. 27 Tahun 2019 tentang Program Pembebasan Biaya Pelayanan Kesehatan&nbsp;</p>\r\n', 'MENGENAI PELAYANAN KESEHATAN GIGI DAN MULUT'),
(13, 'LABORATORIUM', '<h2>PERSYARATAN</h2>\r\n\r\n<ul>\r\n	<li>Membawa Kartu Identitas KK/KTP</li>\r\n	<li>Membawa Kartu Berobat (Khusus Pasien Lama/Sudah Pernah Berkunjung)</li>\r\n	<li>Membawa Surat Keterangan Domisili&nbsp;</li>\r\n	<li>Membawa Fotokopi KTP dan Kartu JKN-KIS</li>\r\n</ul>\r\n\r\n<p>SISTEM, MEKANISME, PROSEDUR</p>\r\n\r\n<ul>\r\n	<li>Pasien memberikan form permintaan laboratorium kepada petugas laboratorium</li>\r\n	<li>Petugas memberi nomor urut pada form permintaan</li>\r\n	<li>Pasien melakukan antrian di ruang tunggu depan layanan laboratorium</li>\r\n	<li>Petugas memanggil pasien/ klien masuk ke layanan laboratorium sesuai dengan no urut</li>\r\n	<li>Petugas mengecek identitas pasien sesuai dengan form permintaan pemeriksaan</li>\r\n	<li>Petugas mengambil specimen sesuai dengan form permintaan pemeriksaan laboratorium</li>\r\n</ul>\r\n\r\n<p>WAKTU PENYELESAIAN</p>\r\n\r\n<p>90 Menit<br />\r\n<br />\r\nProses pemeriksaan laboratorium berlangsung &le; 90 menit</p>\r\n\r\n<h3>BIAYA / TARIF</h3>\r\n\r\n<p>Sesuai dengan Perwali No. 27 Tahun 2019 tentang Program Pembebasan Biaya Pelayanan Kesehatan</p>\r\n', 'MENGENAI LABORATORIUM'),
(14, 'PELAYANAN HIV', '<h2>PERSYARATAN</h2>\r\n\r\n<ul>\r\n	<li>Kartu JKN (mandiri/KIS) bagi yang memiliki</li>\r\n	<li>Kartu identitas KTP / KK</li>\r\n	<li>Kartu Identitas berobat bagi pasien lama</li>\r\n	<li>Keterangan domisili dari kelurahan&nbsp;</li>\r\n</ul>\r\n\r\n<h3>SISTEM, MEKANISME, PROSEDUR</h3>\r\n\r\n<ul>\r\n	<li>Pasien menuju meja petugas skrining.</li>\r\n	<li>Pasien mendapatkan arahan dari petugas menuju meja pendaftaran.</li>\r\n	<li>Pasien melakukan pendaftaran di meja pendaftaran</li>\r\n	<li>Pasien diarahkan menuju ruang pemeriksaan</li>\r\n	<li>Pasien di ruang pemeriksaan dilakukan anamneses dan pemeriksaan fisik dan dilakukanpen catatan rekam medis oleh petugas</li>\r\n	<li>Berdasarkan hasil anamneses dan pemeriksaan fisik, pasien di arahkan ke ruang konseling</li>\r\n	<li>Pasien diruang konseling dilakukan wawancara (pretes) sebelum dilakukan tes laboratorium</li>\r\n	<li>Pasien menuju ruang laboratorium untuk dilakukan tes darah</li>\r\n	<li>Pasien menerima hasil tes laboratorium</li>\r\n	<li>Pasien menerima konseling ulang (post tes) atas hasil tes laboratorium.</li>\r\n	<li>Pasien mendapatkan layanan lebih lanjut sesuai hasil konseling ulang (post tes)</li>\r\n</ul>\r\n\r\n<h3>WAKTU PENYELESAIAN</h3>\r\n\r\n<p>Sesuai kondisi pasien</p>\r\n\r\n<h3>BIAYA / TARIF</h3>\r\n\r\n<p>Gratis</p>\r\n', 'MENGENAI PELAYANAN HIV');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `dokter_id` int(11) NOT NULL,
  `dokter_nip` varchar(30) DEFAULT NULL,
  `dokter_nama` varchar(70) DEFAULT NULL,
  `dokter_jenkel` varchar(2) DEFAULT NULL,
  `dokter_tmp_lahir` varchar(80) DEFAULT NULL,
  `dokter_tgl_lahir` varchar(80) DEFAULT NULL,
  `dokter_jabatan` varchar(120) DEFAULT NULL,
  `dokter_photo` varchar(40) DEFAULT NULL,
  `dokter_tgl_input` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`dokter_id`, `dokter_nip`, `dokter_nama`, `dokter_jenkel`, `dokter_tmp_lahir`, `dokter_tgl_lahir`, `dokter_jabatan`, `dokter_photo`, `dokter_tgl_input`) VALUES
(11, '48724298929473', 'Kurniawan, AM.KEP, SKM.M.KES', 'L', 'Palembang', '12 Desember 1978', 'Kepala UPT Puskesmas Tanah Abang', 'd538864839ffd183d51553ca6e556d88.jpg', '2022-04-15 06:44:51'),
(12, '48724298929111', 'Dr. Andes', 'L', 'Palembang', '12 Desember 1970', 'Dokter Gigi', '905636cf99f58e7a8792c1ebbfd38478.jpeg', '2022-05-10 10:10:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(22, 'Rapat', '2022-04-15 05:41:57', '0427c4e4ed892c5704de08f2fbe5f249.jpg', 7, 14, 'Ananda '),
(23, 'senam', '2022-04-15 05:42:37', '0703a9276f0d527ef4226fe9b0f7e7d0.jpg', 7, 14, 'Ananda '),
(24, 'Rapat', '2022-04-15 05:43:00', '4b09524d874bd7686ac65e6f4ebb37bc.jpg', 7, 14, 'Ananda '),
(25, 'foto bersama', '2022-04-15 05:45:15', '54bd08a603dcc191561db5b889a76ab1.jpg', 7, 14, 'Ananda '),
(26, 'pelayanan', '2022-04-15 05:45:35', 'a09e186ceb30ad731988f553287378cd.jpg', 7, 14, 'Ananda '),
(27, 'foto bersama', '2022-04-15 05:45:58', 'a7d9b4a68eac0be7f6f656c4be92e8e6.jpg', 7, 14, 'Ananda '),
(28, 'suntik vaksin', '2022-04-15 05:47:51', '4b3ed57739fbb49f52175be01ecfb6ab.jpg', 6, 14, 'Ananda '),
(29, 'Sosialisasi SD', '2022-04-15 05:50:06', '0fff5189671e6c479b1a3baee262d0a4.jpg', 6, 14, 'Ananda '),
(30, 'suntik vaksin', '2022-04-15 05:55:42', '833677212c0f6ddd748f92c473a3044a.jpg', 6, 14, 'Ananda ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text DEFAULT NULL,
  `inbox_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `inbox_status` int(11) DEFAULT 1 COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `jabatan_id` int(11) NOT NULL,
  `jabatan_nama` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`jabatan_id`, `jabatan_nama`) VALUES
(1, 'Pelayanan Promosi'),
(2, 'Pelayanan Kesehatan'),
(3, 'Pelayanan KIA dan KB'),
(4, 'Pelayanan Gizi'),
(5, 'Pelayanan Keperawatan'),
(6, 'Pelayanan Pemeriksaan Umum'),
(7, 'Pelayanan Persalinan'),
(8, 'Pelayanan Rawat Inap'),
(9, 'Pelayanan UGD'),
(10, 'Tata Usaha'),
(11, 'Kepegawaian'),
(12, 'Rumah Tangga'),
(13, 'Keuangan'),
(14, 'Laboratorium');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(10) UNSIGNED NOT NULL,
  `jadwal` varchar(1000) DEFAULT NULL,
  `info` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `jadwal`, `info`, `created_at`, `updated_at`) VALUES
(1, '<h3><strong>1. Pendaftaran</strong></h3>\r\n\r\n<p><strong>Pagi&nbsp; &nbsp; &nbsp;</strong>: Senin &ndash; Kamis 07.30 s/d 12.30 WIB<br />\r\n<strong>Jumat&nbsp;&nbsp;</strong>: 07.30 s/d 10.30 WIBnnn<br />\r\n<strong>Sabtu&nbsp; &nbsp;</strong>: 07.30 s/d 11.30 WIB<br />\r\n<strong>Sore&nbsp; &nbsp;&nbsp;</strong>: 14.00 s/ 19.00 WIB</p>\r\n\r\n<h3><strong>2. Bp Umum</strong></h3>\r\n\r\n<p>Pagi : 08.00 WIB s/d selesai<br />\r\nSore : 14.30 WIB s/d selesai</p>\r\n\r\n<h3><strong>3. Bp. Gigi</strong></h3>\r\n\r\n<p>Jam Pelayanan 08.00 WIB s/d selesai</p>\r\n\r\n<h3><strong>4. KIA</strong></h3>\r\n\r\n<p>a. Periksa hamil<br />\r\nSetiap hari Senin-Rabu jam 08.00 WIB s/d selesai<br />\r\nb. Pemeriksaan USG (Konsultasi Sp.Og)<br />\r\nSetiap hari Senin minggu ke 2 jam 08.00 WIB s/d selsai<br />\r\nc. Terapi Musik (Brain Boster)<br />\r\nSetiap hari Senin-Rabu jam 08.00 WIB s/d selesai<br />\r\nd. Nifas dan Neonatus<br />\r\nSetiap hari jam 08.00 WIB s/d selesai<br />\r\ne. KB<br />\r\nSetiap hari Sabtu jam 08.00 WIB s/d selesai<br />\r\nf. Im', '<h2><strong>Informasi Pendaftaran</strong></h2>\r\n\r\n<p>Senin - Kamis Pukul 08.00 - 16.00 WIB</p>\r\n\r\n<p>Jum&#39;at - Sabtu Pukul 08.00 - 14.30 WIB</p>\r\n', '2022-06-01 20:14:17', '2022-06-29 23:03:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pelayanan Publik', '2022-04-18 05:49:04'),
(5, 'Pemberdayaan Masyarakat', '2022-04-18 06:19:26'),
(6, 'Ketentraman Dan Ketertiban', '2022-04-18 02:51:09'),
(21, 'Umum', '2022-04-18 06:57:56'),
(19, 'Keagamaan', '2022-04-18 06:30:58'),
(22, 'pengumuman', '2022-06-26 16:05:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1),
(9, 'user', 'user@gmail.com', ' Kegiatan yang bagus dan perlu digalakkan bravo pemkec dungingi', '2019-03-31 06:38:22', '1', 25, 0),
(11, 'Ramli Taliki', '', 'siap', '2019-04-14 08:03:48', '1', 25, 9),
(12, 'Ramli Agustiawan Taliki, S.STP', 'ramliagustiawan@gmail.com', ' tes', '2019-04-15 04:57:12', '1', 30, 0),
(13, 'Ramli Taliki', '', 'oke', '2019-04-15 04:57:42', '1', 30, 12),
(14, 'Tri Rahmadani', 'marlinanani038@gmail.com', ' good', '2022-04-18 07:13:35', '1', 35, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text DEFAULT NULL,
  `log_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob DEFAULT NULL,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_luar`
--

CREATE TABLE `tbl_luar` (
  `luar_id` int(11) NOT NULL,
  `luar_judul` varchar(100) NOT NULL,
  `luar_tanggal` date NOT NULL,
  `luar_isi` text NOT NULL,
  `luar_gambar` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_luar`
--

INSERT INTO `tbl_luar` (`luar_id`, `luar_judul`, `luar_tanggal`, `luar_isi`, `luar_gambar`) VALUES
(6, 'Pelayanan Diluar Gedung', '0000-00-00', '', '4381673e24904d838529479f9a724ecb.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nopen`
--

CREATE TABLE `tbl_nopen` (
  `nopen_id` int(11) NOT NULL,
  `nopen_user` varchar(10000) NOT NULL,
  `nopen_hp` varchar(100) NOT NULL,
  `nopen_ket` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_nopen`
--

INSERT INTO `tbl_nopen` (`nopen_id`, `nopen_user`, `nopen_hp`, `nopen_ket`) VALUES
(20, 'MAPOLRES Muba', '0714-321094', 'MAPOLRES Muba'),
(19, 'Pemkab Musi Banyuasin', '0714-321021', 'Pemkab Musi Banyuasin'),
(21, 'RSUD Sekayu', '0714-321855', 'RSUD Sekayu'),
(22, 'PLN Ranting Sekayu', '0714-321049', 'PLN Ranting Sekayu'),
(23, 'PDAM Sekayu', '0714-321628', 'PDAM Sekayu'),
(24, 'KAKODIM 0401 Muba', '0714-321062', 'KAKODIM 0401 Muba');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT 1,
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT current_timestamp(),
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(14, 'Ananda ', NULL, 'P', 'ananda', '7f363f401f336a7925f28655b6a44447', NULL, 'ananda@gmail.com', '085797809802', NULL, NULL, NULL, NULL, 1, '1', '2022-04-15 13:33:03', '5abf2e0c43587d378a0658fbd2d59ba5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text DEFAULT NULL,
  `pengumuman_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(8, 'Vaksin booster  untuk memperkuat tingkat kekebalan', 'Info ayo kita vaksin booster \r\nuntuk memperkuat tingkat kekebalan dan memperpanjang perlindungan terhadap Covid-19. Pelayanan vaksinasi covid-19 buka setiap hari (kecuali hari libur) pukul : 08.30 s.d selesai', '2022-04-15 05:22:36', 'Ananda '),
(7, 'Ibu Hamil Vaksin Booster', 'Info untuk bumil sudah bisa untuk vaksin bosster yaa , Kemenkes memberikan izin kepada ibu hamil untuk mendapatkan vaksin booster , ayok datang ke puskesmas kami buka setiap hari dari senin-sabtu (kecuali hari libur) jam 08.30 s.d selesai.', '2022-04-15 05:20:23', 'Ananda '),
(9, 'Gebyar Vaksin Massal BERHADIAH', 'Ayo Randikers.. jangan lewatkan Gebyar Vaksin Massal BERHADIAH di balai desa Bukit Selabu Kecamatan Batanghari Leko, Sabtu 12 Maret 2022 jam 08.00 wib.', '2022-04-15 05:26:24', 'Ananda ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL,
  `hits` int(11) NOT NULL DEFAULT 1,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`, `hits`, `online`) VALUES
(1046, '2022-04-20 06:49:41', '::1', 'Chrome', 1, ''),
(1045, '2022-04-19 08:03:39', '::1', 'Chrome', 1, ''),
(1040, '2022-04-14 06:50:44', '::1', 'Chrome', 1, ''),
(1041, '2022-04-15 05:00:19', '::1', 'Chrome', 1, ''),
(1042, '2022-04-16 07:07:16', '::1', 'Chrome', 1, ''),
(1043, '2022-04-17 08:16:24', '::1', 'Chrome', 1, ''),
(1044, '2022-04-18 07:00:25', '::1', 'Chrome', 1, ''),
(1047, '2022-04-25 12:45:56', '::1', 'Chrome', 1, ''),
(1048, '2022-05-10 08:27:48', '::1', 'Chrome', 1, ''),
(1049, '2022-06-11 00:12:16', '127.0.0.1', 'Chrome', 1, ''),
(1050, '2022-06-11 17:07:16', '127.0.0.1', 'Chrome', 1, ''),
(1051, '2022-06-13 07:05:19', '127.0.0.1', 'Chrome', 1, ''),
(1052, '2022-06-13 17:03:26', '127.0.0.1', 'Chrome', 1, ''),
(1053, '2022-06-18 05:39:54', '::1', 'Chrome', 1, ''),
(1054, '2022-06-19 22:49:05', '::1', 'Chrome', 1, ''),
(1055, '2022-06-21 10:15:50', '::1', 'Chrome', 1, ''),
(1056, '2022-06-22 02:52:47', '::1', 'Chrome', 1, ''),
(1057, '2022-06-25 01:30:51', '::1', 'Chrome', 1, ''),
(1058, '2022-06-26 11:03:46', '::1', 'Chrome', 1, ''),
(1059, '2022-06-29 12:39:11', '::1', 'Chrome', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_poll`
--

CREATE TABLE `tbl_poll` (
  `id` int(11) NOT NULL,
  `Sbaik` int(11) NOT NULL,
  `baik` int(11) NOT NULL,
  `cukup` int(11) NOT NULL,
  `kurang` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_poll`
--

INSERT INTO `tbl_poll` (`id`, `Sbaik`, `baik`, `cukup`, `kurang`) VALUES
(3, 0, 1, 0, 0),
(4, 0, 0, 0, 1),
(5, 1, 0, 0, 0),
(6, 1, 0, 0, 0),
(7, 1, 0, 0, 0),
(8, 0, 0, 0, 0),
(9, 0, 0, 1, 0),
(10, 0, 1, 0, 0),
(11, 1, 0, 0, 0),
(12, 1, 0, 0, 0),
(13, 1, 0, 0, 0),
(14, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_potensi`
--

CREATE TABLE `tbl_potensi` (
  `potensi_id` int(11) NOT NULL,
  `potensi_kelurahan_id` int(11) NOT NULL,
  `potensi_judul` varchar(50) NOT NULL,
  `potensi_gambar` varchar(5000) NOT NULL,
  `potensi_ket` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sejarah`
--

CREATE TABLE `tbl_sejarah` (
  `sejarah_id` int(11) NOT NULL,
  `sejarah_judul` varchar(100) NOT NULL,
  `sejarah_tanggal` date NOT NULL,
  `sejarah_isi` text NOT NULL,
  `sejarah_gambar` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sejarah`
--

INSERT INTO `tbl_sejarah` (`sejarah_id`, `sejarah_judul`, `sejarah_tanggal`, `sejarah_isi`, `sejarah_gambar`) VALUES
(5, 'Sejarah UPT Puskesmas Tanah Abang', '2022-04-15', '<p>Menurut sejarah, UPT Puskesmas Tanah Abang didirikan pada tahun 1992 dengan luas wilayah kerja 292,07 km2. Terdiri atas 7 desa binaan yaitu :</p>\r\n\r\n<ol>\r\n	<li>Desa Tanah Abang</li>\r\n	<li>Desa Talang Leban</li>\r\n	<li>Desa Saud</li>\r\n	<li>Desa Pinggap</li>\r\n	<li>Desa Pengaturan</li>\r\n	<li>Desa Lubuk Buah</li>\r\n	<li>Desa Tanjung Bali</li>\r\n</ol>\r\n\r\n<p>Dengan batas wilayah kerja puskesmas :</p>\r\n\r\n<ul>\r\n	<li>Sebelah Utara : Puskesmas Bukit Selabu</li>\r\n	<li>Sebelah Timur : Kecamatan Sekayu dan Kecamatan Keluang</li>\r\n	<li>Sebelah Selatan : Kecamatan Babat Toman</li>\r\n	<li>Sebelah Barat : Kecamatan Lawang Wetan</li>\r\n</ul>\r\n', 'fe3c2c197b09e0faef44cdd2410ff770.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_judul` varchar(30) NOT NULL,
  `service_gambar` varchar(2500) NOT NULL,
  `service_metod` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(100) NOT NULL,
  `slider_judul` varchar(100) NOT NULL,
  `slider_tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `slider_gambar` mediumtext NOT NULL,
  `active` tinyint(1) NOT NULL,
  `slider_album_id` int(100) NOT NULL,
  `slider_pengguna_id` int(100) NOT NULL,
  `slider_author` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sotk`
--

CREATE TABLE `tbl_sotk` (
  `sotk_id` int(11) NOT NULL,
  `sotk_judul` varchar(100) NOT NULL,
  `sotk_isi` text NOT NULL,
  `sotk_gambar` varchar(5000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sotk`
--

INSERT INTO `tbl_sotk` (`sotk_id`, `sotk_judul`, `sotk_isi`, `sotk_gambar`) VALUES
(3, 'Struktur Organisasi UPT Puskesmas Tanah Abang', '', 'e4c4deaa56107f43e9b7aa578067adcf.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_staf`
--

CREATE TABLE `tbl_staf` (
  `staf_id` int(11) NOT NULL,
  `staf_nip` varchar(20) DEFAULT NULL,
  `staf_nama` varchar(70) DEFAULT NULL,
  `staf_jenkel` varchar(2) DEFAULT NULL,
  `staf_jabatan_id` int(11) DEFAULT NULL,
  `staf_photo` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_staf`
--

INSERT INTO `tbl_staf` (`staf_id`, `staf_nip`, `staf_nama`, `staf_jenkel`, `staf_jabatan_id`, `staf_photo`) VALUES
(2, '378485589374392', 'Yuliana, S.Kep', 'P', 1, '759ae66b16ecb1a87dbc822faf3b012e.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text DEFAULT NULL,
  `tulisan_tanggal` timestamp NULL DEFAULT current_timestamp(),
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT 0,
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT 0,
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(33, 'Vaksin Massal Di BHL Muba Dimulai Sisir Lansia Hingga ODGJ Dan Penyandang Disabilitas', '<p>Sebanyak 220 orang yang berasal dari 7 desa di Kecamatan Batanghari Leko, Kabupaten Musi Banyuasin, Senin (22/6) menjalani vaksinasi massal di halaman kantor Camat Batanghari Leko. Vaksinasi ini merupakan kegiatan pelaksanaan vaksin berkelanjutan dan dinamis (mobile) untuk wilayah kerja UPT Puskesmas Tanah Abang.</p>\r\n\r\n<p>&quot;Sasaran untuk vaksinasi kita 500 orang, tapi yang divaksin disini 220 orang. Sasarannya Orang Dengan Gangguan Jiwa (ODGJ), Penyandang Disabilitas (Usia diatas 18 Tahun), Lansia dan seluruh pelayanan publik,&quot; ujar Kepala UPT Puskesmas Tanah Abang, Kurniawan SKM MKes.</p>\r\n\r\n<p>Adapun peserta vaksin berasal dari tujuh desa yakni Desa Tanah Abang, Tanjung Bali, Saud, Talang Leban, Pinggap, Pengaturan, dan Lubuk Buah. &quot;Sisanya nanti 280 orang akan dilakukan vaksinasi di Puskesmas, karena kalau dilaksanakan satu hari semua tak memungkinkan, kita juga menghindari kerumunan,&quot; ungkap Camat Batanghari Leko, Drs Yuliarto MSi.</p>\r\n\r\n<p>Selain di wilayah Puskesmas Tanah Abang, program vaksinasi nantinya akan dilakukan juga di dua puskesmas lain yang ada di Kecamatan Batanghari Leko yakni Puskesmas Lubuk Bintialo dan Bukit Selabu. &quot;Kepada masyarakat yang sudah divaksin, tetap harus mematuhi protokol kesehatan. Ini untuk mengurangi potensi penularan Covid-19,&quot; kata Yuliarto.</p>\r\n', '2022-04-15 05:13:06', 1, 'Pelayanan Publik', 3, '2c530b7965e6c64f537f0a63b9d1ed8f.jpg', 14, 'Ananda ', 0, 'vaksin-massal-di-bhl-muba-dimulai-sisir-lansia-hingga-odgj-dan-penyandang-disabilitas'),
(32, 'Kunjungi Puskesmas Tanah Abang Ketua TP PKK Muba Apresiasi Inovasi Para Nakes', '<p>Usai meresmikan Warung Kelompok Wanita Tani (KWT) Rambutan Desa Tanah Abang, Ketua Tim Penggerak PKK Kabupaten&nbsp;Musi Banyuasin (Muba) Hj Thia Yufada Dodi Reza didampingi Wakil Ketua TP PKK Kabupaten Muba Susy Imelda Beni Hernedi melanjutkan kegiatan kunjungan ke UPTD Puskesmas Tanah Abang Kecamatan Batanghari Leko, Selasa (12/10).</p>\r\n\r\n<p>Kedatangan rombongan TP PKK Kabupaten Muba disambut penuh ceria oleh anak-anak peserta didik PAUD Desa Tanah Abang. Ketua dan Wakil Ketua TP PKK Muba dengan penuh bahagia menyapa anak-anak PAUD dan langsung memberikan hadiah kepada anak-anak.</p>\r\n\r\n<p>Kemudian Bunda Baca Kabupaten Muba ini meninjau langsung rumah dinas tenaga kesehatan yang baru selesai dibangun dan Perpustakaan Kesehatan yang dikelola oleh UPTD Puskesmas Tanah Abang dibawah komando Plt Kepala Puskesmas Tanah Abang Kurniawan SKM MKes.</p>\r\n\r\n<p>Selanjutnya Ketua, Wakil bersama Anggota TP PKK mendatangi langsung Plaza Bataleke Puskesmas Tanah Abang, dimana tempat tersebut merupakan pojok bersantai, disediakan bebagai sajian minuman obat herbal yang diberikan gratis bagi pasien yang mendatangi UPTD Puskesmas Tanah Abang.</p>\r\n\r\n<p>Istri Bupati dan Wakil Bupati Muba ini didampingi Kepala Dinas Kesehatan Kabupaten Muba dr Azmi Dariusmansyah menikmati langsung seduhan minuman herbal jahe hangat yang tentunya punya banyak sekali manfaat bagi kesehatan.</p>\r\n\r\n<p>Thia Yufada memberikan apresiasi atas berbagai inovasi yang dilakukan oleh UPTD Puskemas Tanah Abang. Diharapkan kedepan terus menelurkan inovasi-inovasi lainnya lagi, demi memberikan pelayanan kesehatan yang maksimal bagi masyarakat.</p>\r\n\r\n<p>&ldquo;Untuk para tenaga kesehatan (nakes) di UPTD Puskesmas Tanah Abang teruslah bersemangat untuk memberikan pelayanan kesehatan yang terbaik bagi masyarakat, meski suntik vaksin sudah kita laksanakan dan daerah kita sudah zona hijau namun tetap harus mematuhi protokol kesehatan,&rdquo; pungkasnya.</p>\r\n\r\n<p>Pada kesempatan tersebut Ketua TP PKK didampingi Kadinkes Muba dan Ketua TP PKK Kecamatan Batanghari Leko secara simbolis menyerahkan bantuan dari Dinas Kesehatan berupa alat antropometri untuk nakes, posyandu kit untuk kader kesehatan, posbindu kit untuk kader kesehatan dan bantuan dari pt mbi untuk Puskesmas Tanah Abang berupa satu unit PC. (Tarmizi)</p>\r\n', '2022-04-15 05:09:56', 5, 'Pemberdayaan Masyarakat', 2, '6f0bdc8bf309de32bca87734919af495.jpg', 14, 'Ananda ', 0, 'kunjungi-puskesmas-tanah-abang-ketua-tp-pkk-muba-apresiasi-inovasi-para-nakes'),
(35, 'Sungai Batanghari Leko Meluap Permukiman Banjir 1 Meter', '<p>Meningkatnya intensitas hujan di Kabupaten Musi Banyuasin, Sumatera Selatan, membuat Sungai Batanghari Leko di sana kembali meluap. Airnya mengalir ke permukiman di beberapa desa di Kecamatan Lais, hingga menimbulkan kebanjiran.</p>\r\n\r\n<p>Desa yang terendam itu yakni Desa Epil, Desa Teluk, Desa Petaling, dan Desa Teluk Kijing. Ribuan rumah di sana terkena bencana itu.</p>\r\n\r\n<p>Informasi yang dihimpun, banjir di sana sekira 1,5 meter. Bencana ini membuat warga di sana khawatir terserang penyakit seperti gatal-gatal.</p>\r\n\r\n<p>Selain itu, pada umumnya aktivitas korban terganggu karena insiden ini. Namun ada salah satu warga yang tetap berupaya untuk meneruskan rutinitasnya. Ia dalah Siti, warga Desa Epil.</p>\r\n\r\n<p>Meski rumahnya tergenang air, Siti terus melakoni pekerjaannya dengan membuat keranjang atau wadah untuk memanen padi.</p>\r\n', '2022-04-17 13:11:42', 21, 'Umum', 5, 'b8718ef0b1e1f3bb4951595b88a75a5e.jpg', 14, 'Ananda ', 0, 'sungai-batanghari-leko-meluap-permukiman-banjir-1-meter'),
(36, 'Vaksinasi', '<p>vaksinasi</p>\r\n', '2022-06-26 16:16:31', 22, 'pengumuman', 1, '55c7c2c2377226ad3f9b2d621cdf7214.png', 14, 'Ananda ', 0, 'vaksinasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_visi`
--

CREATE TABLE `tbl_visi` (
  `visi_id` int(11) NOT NULL,
  `visi_judul` varchar(100) NOT NULL,
  `visi_tanggal` date NOT NULL,
  `visi_isi` text NOT NULL,
  `visi_gambar` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_visi`
--

INSERT INTO `tbl_visi` (`visi_id`, `visi_judul`, `visi_tanggal`, `visi_isi`, `visi_gambar`) VALUES
(9, 'Visi dan Misi UPT Puskesmas Tanah Abang', '0000-00-00', '<p>VISI</p>\r\n\r\n<ul>\r\n	<li>Terwujudnya Pelayanan Kesehatan yang Berkualitas, Komprehensif dan Professional.</li>\r\n</ul>\r\n\r\n<p>MISI</p>\r\n\r\n<ul>\r\n	<li>Memberikan Pelayanan Terbaik Untuk Masyarakat</li>\r\n	<li>Meningkatkan&nbsp;Pelayanan Promotif, Prefektif, Kuratif yang Berkualitas</li>\r\n	<li>Menerapkan Manajemen&nbsp;Mutu Secara Konsisten dan Kesenambungan.</li>\r\n	<li>Mendorong Pendirian Masyarakat untuk Berperilaku Hidup Sehat dan Bersih.</li>\r\n</ul>\r\n\r\n<p>NILAI-NILAI</p>\r\n\r\n<ul>\r\n	<li>INTEGRITAS</li>\r\n	<li>PROFESIONAL</li>\r\n	<li>EMPATI</li>\r\n	<li>SINERGI</li>\r\n	<li>INOVATIF</li>\r\n</ul>\r\n', '6a801d92d8af77c2567cf7f2f1a3ccef.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `pengguna_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `pengguna_id`, `menu_id`) VALUES
(11, 1, 9),
(9, 1, 10),
(4, 2, 10),
(5, 3, 11),
(14, 2, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(9, 'superadmin'),
(10, 'adminkantor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_ss_menu`
--

CREATE TABLE `user_ss_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(128) NOT NULL,
  `menu_ss` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `pengguna_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_ss_menu`
--

INSERT INTO `user_ss_menu` (`id`, `menu_id`, `menu_ss`, `title`, `url`, `icon`, `pengguna_status`) VALUES
(1, '9', '1', 'Data Profil', '#', 'fa fa-fw fa-list', 1),
(2, '10', '3', 'Data Galeri', '#', 'fa fa-fw fa-camera', 1),
(3, '10', '2', 'Data Pelayanan', '#', 'fa fa-fw fa-desktop', 1),
(4, '10', '4', 'Data SDM', '#', 'fa fa-fw fa-user-plus', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `subtitle` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `pengguna_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `subtitle`, `url`, `icon`, `pengguna_status`) VALUES
(7, 9, 'Data Pengguna', '', 'superadmin/pengguna', 'fa fa-fw fa-users', 1),
(5, 9, 'Data Menu', '', 'superadmin/menu', 'fa fa-fw fa-home', 1),
(6, 9, 'Data Submenu', '', 'superadmin/menu/submenu', 'fa fa-fw fa-bars', 1),
(8, 10, 'Data Berita', '', 'adminkantor/tulisan', 'fa fa-fw fa-newspaper-o', 1),
(12, 9, 'Data Komentar', '', 'superadmin/komentar', 'fa fa-fw fa-comments-o', 1),
(13, 10, 'Data Pengumuman', '', 'adminkantor/pengumuman', 'fa fa-fw fa-bullhorn', 1),
(14, 10, 'Data Agenda', '', 'adminkantor/agenda', 'fa fa-fw fa-book', 1),
(16, 9, 'Data Kategori Berita', '', 'superadmin/kategori', 'fa fa-fw fa-check-square-o', 1),
(17, 10, 'Data Nomor Penting', '', 'adminkantor/nopen', 'fa fa-fw fa-phone', 1),
(20, 10, 'Data Pasien', 'Data Pasien', 'adminkantor/pasien', 'fa fa-fw fa-hospital-o', 1),
(11, 10, 'jadwal', 'Jadwal', 'adminkantor/jadwal', 'fa fa-fw fa-book', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tree_menu`
--

CREATE TABLE `user_tree_menu` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(128) NOT NULL,
  `menu_tree` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `pengguna_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_tree_menu`
--

INSERT INTO `user_tree_menu` (`id`, `menu_id`, `menu_tree`, `title`, `url`, `icon`, `pengguna_status`) VALUES
(1, '9', '1', 'Sejarah', 'superadmin/sejarah', 'fa fa-fw fa-history', 1),
(2, '9', '1', 'Visi & Misi', 'superadmin/visi_misi', 'fa fa-fw fa-external-link-square', 1),
(4, '10', '2', 'Luar Gedung', 'adminkantor/luar', 'fa fa-fw fa-folder-open-o ', 1),
(5, '10', '2', 'Dalam Gedung', 'adminkantor/dalam', 'fa fa-fw fa-folder-open', 1),
(6, '10', '3', 'Galeri', 'adminkantor/galeri', 'fa fa-fw fa-picture-o', 1),
(10, '10', '3', 'Album', 'adminkantor/album', 'fa fa-fw fa-camera-retro', 1),
(13, '10', '4', 'Data Dokter dan Perawat', 'adminkantor/Dokter', 'fa fa-fw fa-user', 1),
(14, '10', '4', 'Data Staff', 'adminkantor/staf', 'fa fa-fw fa-user', 1),
(7, '9', '1', 'Struktur Organisasi', 'superadmin/sotk', 'fa fa-fw fa-sitemap', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dalam`
--
ALTER TABLE `tbl_dalam`
  ADD PRIMARY KEY (`dalam_id`);

--
-- Indeks untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`dokter_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`jabatan_id`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indeks untuk tabel `tbl_luar`
--
ALTER TABLE `tbl_luar`
  ADD PRIMARY KEY (`luar_id`);

--
-- Indeks untuk tabel `tbl_nopen`
--
ALTER TABLE `tbl_nopen`
  ADD PRIMARY KEY (`nopen_id`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_poll`
--
ALTER TABLE `tbl_poll`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_potensi`
--
ALTER TABLE `tbl_potensi`
  ADD PRIMARY KEY (`potensi_id`),
  ADD KEY `potensi_kelurahan_id` (`potensi_kelurahan_id`);

--
-- Indeks untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  ADD PRIMARY KEY (`sejarah_id`);

--
-- Indeks untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indeks untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indeks untuk tabel `tbl_sotk`
--
ALTER TABLE `tbl_sotk`
  ADD PRIMARY KEY (`sotk_id`);

--
-- Indeks untuk tabel `tbl_staf`
--
ALTER TABLE `tbl_staf`
  ADD PRIMARY KEY (`staf_id`);

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indeks untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  ADD PRIMARY KEY (`visi_id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_ss_menu`
--
ALTER TABLE `user_ss_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_tree_menu`
--
ALTER TABLE `user_tree_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_dalam`
--
ALTER TABLE `tbl_dalam`
  MODIFY `dalam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `dokter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `jabatan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_luar`
--
ALTER TABLE `tbl_luar`
  MODIFY `luar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_nopen`
--
ALTER TABLE `tbl_nopen`
  MODIFY `nopen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1060;

--
-- AUTO_INCREMENT untuk tabel `tbl_poll`
--
ALTER TABLE `tbl_poll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tbl_potensi`
--
ALTER TABLE `tbl_potensi`
  MODIFY `potensi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_sejarah`
--
ALTER TABLE `tbl_sejarah`
  MODIFY `sejarah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT untuk tabel `tbl_sotk`
--
ALTER TABLE `tbl_sotk`
  MODIFY `sotk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_staf`
--
ALTER TABLE `tbl_staf`
  MODIFY `staf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_visi`
--
ALTER TABLE `tbl_visi`
  MODIFY `visi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_ss_menu`
--
ALTER TABLE `user_ss_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user_tree_menu`
--
ALTER TABLE `user_tree_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
