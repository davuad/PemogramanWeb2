<?php
class ProgramStudiController {
  public function index() {
    require_once "models/ProgramStudi_model.php";
    $ins = new ProgramStudi_model;
    $data = $ins->programStudiView();
    require_once "views/program_studi_view.php";
  }
}