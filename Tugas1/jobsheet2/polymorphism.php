<?php
// Membuat Class Pengguna sebagai class induk (parent class)
class Pengguna {
    // Atribut protected untuk menyimpan nama, hanya bisa diakses oleh class ini dan class turunannya
    protected $nama;

    // Constructor untuk menginisialisasi atribut nama saat objek Pengguna dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method untuk mengambil nama pengguna
    public function getNama() {
        return $this->nama;
    }

    // Method untuk mengganti nama pengguna dan menampilkan pesan konfirmasi
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengubah nilai atribut nama
        return "Nama telah diganti menjadi $this->nama."; // Mengembalikan pesan konfirmasi
    }
}

// Membuat Class Dosen yang merupakan turunan dari class Pengguna
class Dosen extends Pengguna {
    // Atribut protected untuk menyimpan mata kuliah yang diampu
    protected $mataKuliah;

    // Constructor untuk menginisialisasi atribut nama dan mata kuliah
    public function __construct($nama, $mataKuliah){
        // Memanggil constructor dari class Pengguna untuk inisialisasi nama
        parent::__construct($nama);
        // Inisialisasi mata kuliah
        $this->mataKuliah = $mataKuliah;
    }

    // Method untuk menampilkan data dosen
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah"; // Menampilkan nama dosen dan mata kuliah yang diampu
    }
}

// Membuat Class Mahasiswa yang merupakan turunan dari class Pengguna
class Mahasiswa extends Pengguna {
    // Atribut protected untuk menyimpan npm dan jurusan
    protected $npm, $jurusan;

    // Constructor untuk menginisialisasi atribut nama, npm, dan jurusan
    public function __construct($nama, $npm, $jurusan){
        // Memanggil constructor dari class Pengguna untuk inisialisasi nama
        parent::__construct($nama);
        // Inisialisasi npm dan jurusan
        $this->npm = $npm;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function getDataMahasiswa() {
        return "Nama mahasiswa adalah $this->nama dengan npm $this->npm jurusan $this->jurusan."; // Menampilkan data mahasiswa
    }
}

// Instansiasi objek Dosen dengan nama dan mata kuliah
$dosen2 = new Dosen("Aditya Nugroho", "Struktur Data");
echo $dosen2->getDataDosen() . "<br>"; // Menampilkan data dosen
echo $dosen2->aksesFitur("Andriass") . "<hr>"; // Mengganti nama dosen dan menampilkan pesan konfirmasi

// Instansiasi objek Mahasiswa dengan nama, npm, dan jurusan
$mahasiswaa = new Mahasiswa("Sidiq Putra", 230302093, "Teknik Informatika");
echo $mahasiswaa->getDataMahasiswa() . "<br>"; // Menampilkan data mahasiswa
echo $mahasiswaa->aksesFitur("Dzakwann") . "<hr>"; // Mengganti nama mahasiswa dan menampilkan pesan konfirmasi

?>
