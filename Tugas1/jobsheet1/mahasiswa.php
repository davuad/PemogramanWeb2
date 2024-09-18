<?php
//Membuat Class Mahasiswa
class Mahasiswa{
    public $nama, $nim, $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData() {
        return "Haloo, nama saya adalah $this->nama dengan $this->nim dari jurusan $this->jurusan.";
    }

    public function updateJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    public function setNim($nim) {
        $this->nim = $nim;
    } 
}

$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
echo $mhs->tampilkanData();
echo "<br>";
$mhs->updateJurusan("Rekayasa Mesin dan Industri Pertanian");
echo $mhs->tampilkanData();
echo "<br>";
$mhs->setNim(22222222);
echo $mhs->tampilkanData();
?>