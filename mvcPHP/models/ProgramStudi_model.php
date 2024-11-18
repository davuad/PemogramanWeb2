<?php

class ProgramStudi_model {
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

  public function programStudiView() {
    $getprodi = "SELECT * FROM prodi";
    return mysqli_query($this->db, $getprodi);
  }
}