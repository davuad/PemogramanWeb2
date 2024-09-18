<?php
// Kelas Person sebagai parent class
class Person {
    protected $nama;

    // Konstruktor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Getter untuk nama
    public function getNama(){
        return $this->nama;
    }

    // Metode getRole untuk ditimpa oleh subclass
    public function getRole() {
        return "Person";
    }
}

class Dosen extends Person {
    private $nidn;  // Atribut khusus untuk Dosen

    // Konstruktor yang menginisialisasi nama dan NIDN
    public function __construct($nama,$nidn) {
        parent::__construct($nama);  // Memanggil konstruktor parent (Person)
        $this->nidn = $nidn;
    }

    // Setter untuk NIDN
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Getter untuk NIDN
    public function getNidn() {
        return $this->nidn;
    }

    // Override metode getRole untuk menampilkan peran Dosen
    public function getRole() {
        return "$this->nama adalah seorang Dosen";
    }
}

class Mahasiswa extends Person {
    private $nim;  // Atribut khusus untuk Mahasiswa

    // Konstruktor yang menginisialisasi nama dan NIM
    public function __construct($nama, $nim) {
        parent::__construct($nama);  // Memanggil konstruktor parent (Person)
        $this->nim = $nim;
    }

    // Getter untuk NIM
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk NIM
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override metode getRole untuk menampilkan peran Mahasiswa
    public function getRole() {
        return "$this->nama adalah seorang Mahasiswa";
    }
}

// Kelas abstrak Jurnal untuk mengelola pengajuan jurnal
abstract class Jurnal {
    protected $title;  // Atribut untuk judul jurnal

    // Konstruktor yang menginisialisasi judul
    public function __construct($title) {
        $this->title = $title;
    }

    // Metode abstrak untuk pengelolaan pengajuan jurnal
    abstract public function manageSubmission();
}

// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Mengelola pengajuan jurnal oleh dosen yang berjudul: " . $this->title;
    }
}

// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Mengelola pengajuan jurnal oleh mahasiswa yang berjudul: " . $this->title;
    }
}

// Membuat objek Dosen dan Mahasiswa
$dosenn = new Dosen("Pak Budi", "28382818");
$mahasiswaa = new Mahasiswa("Davu Andrias", "230102077");

// Menampilkan informasi dan peran
echo $dosenn->getRole() . "<br>";
echo $mahasiswaa->getRole() . "<hr>";  

// Membuat dan mengelola pengajuan jurnal
$jurnalDosenn = new JurnalDosen("Penelitian masyarakat sekitar.");
$jurnalMahasiswaa = new JurnalMahasiswa("Tugas Akhir: Sistem Informasi Perpustakaan.");

// Menampilkan hasil pengelolaan jurnal
echo $jurnalDosenn->manageSubmission() . "<br>";
echo $jurnalMahasiswaa->manageSubmission(); 
?>
