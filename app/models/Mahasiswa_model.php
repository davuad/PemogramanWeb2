<?php
class Mahasiswa_model {
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $dbname = "pwebmvc";
  protected $db;

  public function __construct() {
    $this->db = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

    if ($this->db->connect_error) {
      die("Koneksi Gagal" . $this->db->connect_error);
    }
  }

  public function getAllMahasiswa() {
    $all = "SELECT * FROM mahasiswa";
    return mysqli_query($this->db, $all);
  }

  public function getMahasiswaById($id) {
    $byid = "SELECT * FROM mahasiswa WHERE id =  '$id' ";
    return mysqli_query($this->db, $byid);
  }
}