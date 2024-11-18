<?php

class MahasiswaController {
  public function index() {
    require_once "models/Mahasiswa_model.php";
    $ins = new Mahasiswa_model;
    $data = $ins->getAllMahasiswa();
    require_once "views/mahasiswa_view.php";
  }

  public function show() {
    require_once "models/Mahasiswa_model.php";
    $inst = new Mahasiswa_model;
    $data = $inst->getMahasiswaById($_GET['id']);
    require_once "views/mahasiswa_detail_view.php";
  }
}