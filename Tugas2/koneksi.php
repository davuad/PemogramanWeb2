<?php
class Koneksi {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbname = "persuratan_dosen";
  protected $conn;

  public function __construct() {
    $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
    if ($this->conn->connect_error) {
      die("Koneksi gagal: " . $this->conn->connect_error);
    }
  }
}

class PergantianPengawasUjian extends Koneksi {
  public function tampil_data_pengawas_ujian() {
    $pengawas = "SELECT * FROM penggantian_pengawas_ujian";
    return mysqli_query($this->conn, $pengawas);
  }
}

class LaporanKerjaLembur extends Koneksi {
  public function tampil_data_LaporanKerjaLembur() {
    $laporan = "SELECT * FROM laporan_kerja_lembur";
    return mysqli_query($this->conn, $laporan);
  }
}

class LaporanKerjaLemburSelesai extends Koneksi{
  public function tampil_data_LaporanKerjaLembur() {
    $laporanselesai = "SELECT * FROM laporan_kerja_lembur WHERE keterangan = 'Selesai'";
    return mysqli_query($this->conn, $laporanselesai);
  }
}

class PergantianPengawasUjianKeterangan extends Koneksi{
  public function tampil_data_pengawas_ujian() {
    $unitkerja = "SELECT * FROM penggantian_pengawas_ujian WHERE unit_kerja = 'Fakultas Teknik'";
    return mysqli_query($this->conn, $unitkerja);
  }
}
?>
