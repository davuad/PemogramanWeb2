<?php

require_once "controllers/MahasiswaController.php";
require_once "controllers/ProgramStudiController.php";

$ini = new MahasiswaController;
$itu = new ProgramStudiController;

if (isset($_GET['id'])) {
  $ini->show();
}else if(isset($_GET['prodi'])){
  $itu->index();
}else {
  $ini->index();
}
