<?php
// Membuat Class Pengguna sebagai class induk (parent class)
class Pengguna {
    // Atribut publik yang menyimpan nama pengguna
    public $nama;

    // Constructor untuk menginisialisasi nilai nama saat objek Pengguna dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method untuk mengambil nama pengguna
    public function getNama() {
        return $this->nama;
    }
}

// Membuat Class Dosen yang merupakan turunan dari class Pengguna (subclass)
class Dosen extends Pengguna {
    // Atribut publik yang menyimpan mata kuliah yang diampu oleh dosen
    public $mataKuliah;

    // Constructor untuk menginisialisasi nama dan mata kuliah saat objek Dosen dibuat
    public function __construct($nama, $mataKuliah){
        // Memanggil constructor dari class parent (Pengguna) untuk inisialisasi nama
        parent::__construct($nama);
        // Inisialisasi mata kuliah
        $this->mataKuliah = $mataKuliah;
    }

    // Method untuk menampilkan data dosen berupa nama dosen dan mata kuliah yang diampu
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah";
    }
}

// Instansiasi objek Dosen dengan data nama dan mata kuliah
$dosenn = new Dosen("Rizqi Nurrahman", "Basis Data");
// Menampilkan informasi dosen menggunakan method getDataDosen
echo $dosenn->getDataDosen();

?>
