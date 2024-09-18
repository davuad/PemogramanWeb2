<?php
// Membuat Class Pengguna yang bersifat abstract.
// Class abstract ini tidak dapat diinstansiasi langsung dan berfungsi sebagai kerangka bagi class turunan.
abstract class Pengguna {
    protected $nama; // Property protected agar bisa diakses oleh class turunan.

    // Constructor untuk menginisialisasi property 'nama'.
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Method untuk mendapatkan nama pengguna.
    public function getNama($nama) {
        return $this->nama;
    }

    // Method abstract yang harus diimplementasikan oleh class turunan.
    abstract public function aksesFitur($nama);
}

// Membuat class Dosen yang merupakan turunan dari class Pengguna.
class Dosen extends Pengguna {
    protected $mataKuliah; // Property khusus untuk menyimpan mata kuliah dosen.

    // Constructor yang menerima nama dan mata kuliah dosen, lalu memanggil constructor parent untuk menginisialisasi nama.
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama); // Memanggil constructor dari class Pengguna.
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah.
    }

    // Method untuk mendapatkan data dosen.
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah"; // Mengembalikan string dengan nama dan mata kuliah dosen.
    }

    // Implementasi dari method abstract aksesFitur().
    // Mengganti nama dosen dan mengembalikan pesan bahwa nama telah diubah.
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengganti nama dosen.
        return "Nama dosen telah diganti menjadi $this->nama."; // Mengembalikan pesan perubahan nama.
    }
}

// Membuat class Mahasiswa yang merupakan turunan dari class Pengguna.
class Mahasiswa extends Pengguna {
    protected $npm, $jurusan; // Property khusus untuk menyimpan NPM dan jurusan mahasiswa.

    // Constructor yang menerima nama, npm, dan jurusan mahasiswa, lalu memanggil constructor parent untuk menginisialisasi nama.
    public function __construct($nama, $npm, $jurusan){
        parent::__construct($nama); // Memanggil constructor dari class Pengguna.
        $this->npm = $npm; // Inisialisasi NPM.
        $this->jurusan = $jurusan; // Inisialisasi jurusan.
    }

    // Method untuk mendapatkan data mahasiswa.
    public function getDataMahasiswa() {
        return "Nama mahasiswa adalah $this->nama dengan npm $this->npm jurusan $this->jurusan."; // Mengembalikan string dengan data mahasiswa.
    }

    // Implementasi dari method abstract aksesFitur().
    // Mengganti nama mahasiswa dan mengembalikan pesan bahwa nama telah diubah.
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengganti nama mahasiswa.
        return "Nama mahasiswa telah diganti menjadi $this->nama."; // Mengembalikan pesan perubahan nama.
    }
}

// Membuat objek dosen baru dan menginisialisasi nama serta mata kuliah.
$dosen2 = new Dosen("Aditya Nugroho","Struktur Data");
echo $dosen2->getDataDosen() . "<br>"; // Menampilkan data dosen (nama dan mata kuliah).
echo $dosen2->aksesFitur("Davuuu") . "<hr>"; // Mengganti nama dosen dan menampilkan pesan perubahan nama.

// Membuat objek mahasiswa baru dan menginisialisasi nama, npm, dan jurusan.
$mahasiswaa = new Mahasiswa("Sidiq Putra",230302093,"Teknik Informatika");
echo $mahasiswaa->getDataMahasiswa() . "<br>"; // Menampilkan data mahasiswa (nama, npm, dan jurusan).
echo $mahasiswaa->aksesFitur("Dzakwann") . "<hr>"; // Mengganti nama mahasiswa dan menampilkan pesan perubahan nama.
?>
