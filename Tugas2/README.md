# Tugas2
Sistem Informasi Surat-menyurat Berbasis Web bagi Dosen Jurusan Komputer dan Bisnis merupakan platform yang dirancang untuk menyederhanakan pengelolaan surat dan dokumen resmi antara dosen dan bagian administrasi jurusan. Sistem ini memungkinkan dosen untuk mengirimkan, melacak, dan mengelola surat-menyurat seperti permohonan cuti, nota dinas, dan dokumen administrasi lainnya secara daring. Dengan mendigitalkan proses, sistem ini meningkatkan efisiensi, akurasi, dan aksesibilitas, sekaligus mengurangi pekerjaan administrasi dan memperlancar komunikasi di dalam jurusan.

Pada tugas kedua ini, mahasiswa diminta untuk membuat tampilkan dari 2 tabel pada database persuratan dosen. Saya mendapat bagian untuk membuat table laporan_kerja_lembur dan penggantian_pengawas_ujian. tampilan dibuat menggunakan Object-oriented programming (OOP) menggunakan PHP.

## Daftar Isi
- <a href="koneksi.php">Koneksi</a>
- <a href="navbar.php">Navbar</a>
- <a href="laporanKerjaLembur.php"> Data Laporan Kerja Lembur</a>
- <a href="pergantianPengawasUjian.php">Data Pergantian Pengawas Ujian</a>
- <a href="pilihLaporanKerjaLembur.php">Data Keterangan Laporan Kerja Lembur yang Sudah Selesai</a>
- <a href="pilihPengawasUjian.php">Data Unit Kerja Pergantian Pengawas Ujian</a>

## Langkah-langkah
### Persiapkan Database
Pada tugas ini menggunakan phpmyadmin untuk mengelola database MYSQL dan laragon sebagai aplikasi untuk membuat website di komputer lokal.
> Langkah pertama adalah buatlah database persuratan_dosen
```sh
CREATE DATABASE persuratan_dosen;
```
> Buat tabel bernama laporan_kerja_lembur
```sh
CREATE TABLE laporan_kerja_lembur;
```
> Isikan data tabel laporan_kerja_lembur dengan perintah berikut:
```sh
INSERT INTO `laporan_kerja_lembur`(`lembur_id`, `hari_tgl_laporan`, `waktu`, `uraian_pekerjaan`, `keterangan`, `dosen_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]');
```
> Buat tabel bernama penggantian_pengawas_ujian
```sh
CREATE TABLE penggantian_pengawas_ujian;
```
> Isikan data tabel penggantian_pengawas_ujian dengan perintah berikut:
```sh
INSERT INTO `penggantian_pengawas_ujian`(`pengganti_id`, `nama_pengawas_diganti`, `unit_kerja`, `hari_tgl_penggantian`, `jam`, `ruang`, `nama_pengawas_pengganti`, `dosen_id`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]')
```

### Koneksi (<a href="koneksi.php">koneksi.php</a>)
Setelah Membuat dan mengisikan data pada kedua tabel diatas, langkah selanjutnya adalah mengkoneksikan database
> Buat class bernama Koneksi yang berfungsi untuk mengelola koneksi database.
> Properti $host, $user, $pass, $dbname untuk menyimpan konfigurasi koneksi pada database.
> Properti $conn untuk menyimpan koneksi ke database
```sh
<?php
class Koneksi {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbname = "persuratan_dosen";
  protected $conn;
```
> Tambahkan metode __construct() untuk inisialisasi koneksi database
```sh
  public function __construct() {
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    if ($this->conn->connect_error) {
      die("Koneksi gagal: " . $this->conn->connect_error);
    }
  }
}
```
> Membuat Class PergantianPengawasUjian yang mewarisi class Koneksi.
> Tambahkan metode tampil_data_pengawas_ujian() yang berfungsi untuk menampilkan seluruh data pada table penggantian_pengawas_ujian.
```sh
class PergantianPengawasUjian extends Koneksi {
  public function tampil_data_pengawas_ujian() {
    $pengawas = "SELECT * FROM penggantian_pengawas_ujian";
    return mysqli_query($this->conn, $pengawas);
  }
}
```
> Membuat Class LaporanKerjaLembur yang mewarisi class Koneksi.
> Tambahkan metode tampil_data_LaporanKerjaLembur() yang berfungsi untuk menampilkan seluruh data pada table laporan_kerja_lembur.
```sh
class LaporanKerjaLembur extends Koneksi {
  public function tampil_data_LaporanKerjaLembur() {
    $laporan = "SELECT * FROM laporan_kerja_lembur";
    return mysqli_query($this->conn, $laporan);
  }
}
```
> Membuat Class LaporanKerjaLemburSelesai yang mewarisi class Koneksi.
> Gunakan polymorphism pada metode tampil_data_LaporanKerjaLembur().
> Tambahkan metode tampil_data_LaporanKerjaLembur() yang berfungsi menampilkan data yang hanya memiliki nilai 'Selesai' pada kolom keterangan pada tabel laporan_kerja_lembur.
```sh
class LaporanKerjaLemburSelesai extends Koneksi{
  public function tampil_data_LaporanKerjaLembur() {
    $laporanselesai = "SELECT * FROM laporan_kerja_lembur WHERE keterangan = 'Selesai'";
    return mysqli_query($this->conn, $laporanselesai);
  }
}
```
> Membuat Class PergantianPengawasUjianKeterangan yang mewarisi class Koneksi.
> Gunakan polymorphism pada metode tampil_data_pengawas_ujian().
> Tambahkan metode tampil_data_pengawas_ujian() yang berfungsi menampilkan data yang hanya memiliki nilai 'Fakultas Teknik' pada kolom unit_kerja pada tabel penggantian_pengawas_ujian.
```sh
class PergantianPengawasUjianKeterangan extends Koneksi{
  public function tampil_data_pengawas_ujian() {
    $unitkerja = "SELECT * FROM penggantian_pengawas_ujian WHERE unit_kerja = 'Fakultas Teknik'";
    return mysqli_query($this->conn, $unitkerja);
  }
}
?>
```

### Navbar (<a href="navbar.php">navbar.php </a>)
> Untuk navbar menggunakan bootstrap, hanya mengganti link sesuai dengan nama file agar bisa terhubung ke file tersebut.
```sh
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="laporanKerjaLembur.php">Laporan Kerja Lembur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pergantianPengawasUjian.php">Pergantian Pengawas Ujian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pilihLaporanKerjaLembur.php">Keterangan Laporan Kerja Lembur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pilihPengawasUjian.php">Unit Kerja Lembur</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
```

### Tampilan Data Laporan Kerja Lembur (<a href="laporanKerjaLembur.php">laporanKerjaLembur.php </a>)
> Menyertakan file koneksi untuk menghubungkan ke database dan file navbar untuk menampilkan navbar
```sh
<?php
include 'koneksi.php';
include 'navbar.php';
```
> Membuat objek dari kelas LaporanKerjaLembur
```sh
$db = new LaporanKerjaLembur();
$data_catatan = $db->tampil_data_LaporanKerjaLembur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
```
> Link CSS Bootstrap untuk styling
```sh
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
```
```sh
    <title>Data Pergantian Kerja Lembur</title>
</head>
<body>
```
> Membuat tabel untuk menampilkan data laporan kerja lembur
```sh
    <div class="container mt-3">
        <h1 class="text-center mb-4">Data Laporan Kerja Lembur</h1>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>ID Lembur</th>
                        <th>Hari Tanggal Laporan</th>
                        <th>Waktu</th>
                        <th>Uraian Pekerjaan</th>
                        <th>Keterangan</th>
                        <th>ID Dosen</th>
                    </tr>
                </thead>
                <tbody>
```
> Inisialisasi No urut dan lakukan perulangan melalui data yang diambil dari database
```sh
                    <?php
                        $no = 1;

                        foreach($data_catatan as $row) {
                    ?>
```
> Baris untuk setiap data yang ditampilkan dalam tabel
```sh
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['lembur_id']; ?></td>
                        <td><?php echo $row['hari_tgl_laporan']; ?></td>
                        <td><?php echo $row['waktu']; ?></td>
                        <td><?php echo $row['uraian_pekerjaan']; ?></td>
                        <td><?php echo $row['keterangan']; ?></td>
                        <td><?php echo $row['dosen_id']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
```
> Link yang memuat script JavaScript Bootstrap
```sh
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
```

### Tampilan data Pergantian Pengawas Ujian (<a href="pergantianPengawasUjian.php">pergantianPengawasUjian.php</a>)
> Menyertakan file koneksi untuk menghubungkan ke database dan file navbar untuk menampilkan navbar
```sh
<?php
include 'koneksi.php';
include 'navbar.php';
```
> Membuat objek dari kelas PergantianPengawasUjian
```sh
$db = new PergantianPengawasUjian();
$data_catatan = $db->tampil_data_pengawas_ujian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
```
> Link CSS Bootstrap untuk styling
```sh
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Pergantian Pengawas Ujian</title>
</head>
<body>
```
> Membuat tabel untuk menampilkan data Pergantian Pengawas Ujian
```sh
    <div class="container mt-3">
        <h1 class="text-center mb-4">Data Pergantian Pengawas Ujian</h1>
        
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary text-center">
              <tr>
                <th>No</th>
                <th>ID Pengganti</th>
                <th>Nama Pengawas Yang Diganti</th>
                <th>Unit Kerja</th>
                <th>Hari dan Tanggal Penggantian</th>
                <th>Jam</th>
                <th>Ruang</th>
                <th>Nama Pengawas Pengganti</th>
                <th>ID Dosen</th>
              </tr>
            </thead>
            <tbody>
```
> Inisialisasi No urut dan lakukan perulangan melalui data yang diambil dari database
```sh
              <?php
                $no = 1;
            
                foreach($data_catatan as $row) {
              ?>
```
> Baris untuk setiap data yang ditampilkan dalam tabel
```sh
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['pengganti_id']; ?></td>
                <td><?php echo $row['nama_pengawas_diganti']; ?></td>
                <td><?php echo $row['unit_kerja']; ?></td>
                <td><?php echo $row['hari_tgl_penggantian']; ?></td>
                <td><?php echo $row['jam']; ?></td>
                <td><?php echo $row['ruang']; ?></td>
                <td><?php echo $row['nama_pengawas_pengganti']; ?></td>
                <td><?php echo $row['dosen_id']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
```
> Link yang memuat script JavaScript Bootstrap
```sh
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
```

### Data Keterangan Laporan Kerja Lembur yang Sudah Selesai (<a href="pilihLaporanKerjaLembur.php">pilihLaporanKerjaLembur.php</a>)
> Menyertakan file koneksi untuk menghubungkan ke database dan file navbar untuk menampilkan navbar
```sh
<?php
include 'koneksi.php';
include 'navbar.php';
```
> Membuat objek dari kelas LaporanKerjaLemburSelesai
```sh
$db = new LaporanKerjaLembur();
$data_catatan = $db->tampil_data_LaporanKerjaLembur();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
```
> Link CSS Bootstrap untuk styling
```sh
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
```
```sh
    <title>Data Pergantian Kerja Lembur</title>
</head>
<body>
```
> Membuat tabel untuk menampilkan data laporan kerja lembur
```sh
    <div class="container mt-3">
        <h1 class="text-center mb-4">Data Laporan Kerja Lembur</h1>
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary text-center">
                    <tr>
                        <th>No</th>
                        <th>ID Lembur</th>
                        <th>Hari Tanggal Laporan</th>
                        <th>Waktu</th>
                        <th>Uraian Pekerjaan</th>
                        <th>Keterangan</th>
                        <th>ID Dosen</th>
                    </tr>
                </thead>
                <tbody>
```
> Inisialisasi No urut dan lakukan perulangan melalui data yang diambil dari database
```sh
                    <?php
                        $no = 1;

                        foreach($data_catatan as $row) {
                    ?>
```
> Baris untuk setiap data yang ditampilkan dalam tabel
```sh
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['lembur_id']; ?></td>
                        <td><?php echo $row['hari_tgl_laporan']; ?></td>
                        <td><?php echo $row['waktu']; ?></td>
                        <td><?php echo $row['uraian_pekerjaan']; ?></td>
                        <td><?php echo $row['keterangan']; ?></td>
                        <td><?php echo $row['dosen_id']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
```
> Link yang memuat script JavaScript Bootstrap
```sh
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
```

### Data Unit Kerja Pergantian Pengawas Ujian (<a href="pilihPengawasUjian.php">pilihPengawasUjian.php</a>)
> Menyertakan file koneksi untuk menghubungkan ke database dan file navbar untuk menampilkan navbar
```sh
<?php
include 'koneksi.php';
include 'navbar.php';
```
> Membuat objek dari kelas PergantianPengawasUjian
```sh
$db = new PergantianPengawasUjian();
$data_catatan = $db->tampil_data_pengawas_ujian();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
```
> Link CSS Bootstrap untuk styling
```sh
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Data Pergantian Pengawas Ujian</title>
</head>
<body>
```
> Membuat tabel untuk menampilkan data Pergantian Pengawas Ujian
```sh
    <div class="container mt-3">
        <h1 class="text-center mb-4">Data Pergantian Pengawas Ujian</h1>
        
        <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary text-center">
              <tr>
                <th>No</th>
                <th>ID Pengganti</th>
                <th>Nama Pengawas Yang Diganti</th>
                <th>Unit Kerja</th>
                <th>Hari dan Tanggal Penggantian</th>
                <th>Jam</th>
                <th>Ruang</th>
                <th>Nama Pengawas Pengganti</th>
                <th>ID Dosen</th>
              </tr>
            </thead>
            <tbody>
```
> Inisialisasi No urut dan lakukan perulangan melalui data yang diambil dari database
```sh
              <?php
                $no = 1;
            
                foreach($data_catatan as $row) {
              ?>
```
> Baris untuk setiap data yang ditampilkan dalam tabel
```sh
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['pengganti_id']; ?></td>
                <td><?php echo $row['nama_pengawas_diganti']; ?></td>
                <td><?php echo $row['unit_kerja']; ?></td>
                <td><?php echo $row['hari_tgl_penggantian']; ?></td>
                <td><?php echo $row['jam']; ?></td>
                <td><?php echo $row['ruang']; ?></td>
                <td><?php echo $row['nama_pengawas_pengganti']; ?></td>
                <td><?php echo $row['dosen_id']; ?></td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
    </div>
```
> Link yang memuat script JavaScript Bootstrap
```sh
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
```
