<?php
// Membuat Class Mahasiswa
class Mahasiswa{
    // Membuat atribut privat untuk menyimpan nama, nim, dan jurusan
    private $nama, $nim, $jurusan;

    // Constructor untuk menginisialisasi nilai atribut ketika objek dibuat
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa dalam format tertentu
    public function tampilkanData() {
        return "Haloo, nama saya adalah $this->nama dengan NPM $this->nim dari jurusan $this->jurusan.";
    }

    // Setter untuk atribut nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    // Getter untuk atribut nama
    public function getNama() {
        return $this->nama;
    }

    // Setter untuk atribut NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Getter untuk atribut NIM
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk atribut jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan;
    }

    // Getter untuk atribut jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
}

// Instansiasi objek Mahasiswa dengan data awal (nama, nim, jurusan)
$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
// Memanggil method tampilkanData untuk menampilkan data mahasiswa
echo $mhs->tampilkanData() . "<br>";

// Mengubah nama menggunakan setter setNama dan menampilkan nama yang baru
$mhs->setNama("Andrias");
echo $mhs->getNama() . "<br>";

// Mengubah NIM menggunakan setter setNim dan menampilkan NIM yang baru
$mhs->setNim("11111111");
echo $mhs->getNim() . "<br>";

// Mengubah jurusan menggunakan setter setJurusan dan menampilkan jurusan yang baru
$mhs->setJurusan("Rekayasa Mesin dan Industri Pertanian");
echo $mhs->getJurusan();

?>
