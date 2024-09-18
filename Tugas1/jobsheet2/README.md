## Jobsheet 2: Implementasi Prinsip OOP dalam PHP
### 1. Encapsulation (<a href="encapsulation.php">encapsulation.php</a>)
> Membuat class Mahasiswa yang memiliki atribut nama, nim dan jurusan
> aksebilitas semua atribut adalah private yang hanya dapat diakses di kelasnya.
```sh
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
```
> Membuat setter dan getter untuk nama, nim dan jurusan
```sh
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

```
> Pembuatan Objek dari class Mahasiswa
> Tampilkan data mahasiswa dengan memanggil function tampilkanData()
```sh
// Instansiasi objek Mahasiswa dengan data awal (nama, nim, jurusan)
$mhs = new Mahasiswa("Davu Andrias", 230102077, "Komputer dan Bisnis");
// Memanggil method tampilkanData untuk menampilkan data mahasiswa
echo $mhs->tampilkanData() . "<br>";
```
> Mengubah nama dengan memanggil function setNama dan menampilkan nya dengan memanggil function getNama
```sh 
// Mengubah nama menggunakan setter setNama dan menampilkan nama yang baru
$mhs->setNama("Andrias");
echo $mhs->getNama() . "<br>";
```
> Mengubah nim dengan memanggil function setNim dan menampilkan nya dengan memanggil function getNim
```sh 
// Mengubah NIM menggunakan setter setNim dan menampilkan NIM yang baru
$mhs->setNim("11111111");
echo $mhs->getNim() . "<br>";
```
> Mengubah jurusan dengan memanggil function setJurusan dan menampilkan nya dengan memanggil function getJurusan
```sh 
// Mengubah jurusan menggunakan setter setJurusan dan menampilkan jurusan yang baru
$mhs->setJurusan("Rekayasa Mesin dan Industri Pertanian");
echo $mhs->getJurusan();

?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 093739](https://github.com/user-attachments/assets/5121671c-9d52-42e5-94f0-8bbfb1404d01)


### 2. Inheritance (<a href="inheritance.php">inheritance.php</a>)
> Membuat class Pengguna yang memiliki atribut nama dan metode getNama()
> aksebilitas dari atribut dan metode adalah public yang dapat diakses dimana saja.
```sh
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
```
> Membuat class Dosen yang merupakan turunan dari class pengguna yang memiliki atribut mataKuliah()
> aksebilitas yang digunakan adalah public yang dapat diakses dimana saja.
```sh
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
```
> Membuat metode function getDataDosen yang berfungsi untuk menampilkan
 seluruh data dosen
```sh
    // Method untuk menampilkan data dosen berupa nama dosen dan mata kuliah yang diampu
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah";
    }
}
```
> Pembuatan Objek dari class Dosen dan tampilkan seluruh data dosen dengan memanggil function getDataDosen()
```sh
// Instansiasi objek Dosen dengan data nama dan mata kuliah
$dosenn = new Dosen("Rizqi Nurrahman", "Basis Data");
// Menampilkan informasi dosen menggunakan method getDataDosen
echo $dosenn->getDataDosen();

?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 093828](https://github.com/user-attachments/assets/0be2c087-c84c-44ac-9ae3-d9773a794cd2)


### 3. Polymorphism (<a href="polymorphism.php">polymorphism.php</a>)
> Membuat class Pengguna yang memiliki atribut nama dan metode getNama()
> aksebilitas dari atribut dan metode adalah public yang dapat diakses dimana saja.
```sh
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
```
> Tambahkan function aksesFitur() yang berfungsi untuk mengubah nama dan menampilkan nya dengan pesan tambahan
```sh
    // Method untuk mengganti nama pengguna dan menampilkan pesan konfirmasi
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengubah nilai atribut nama
        return "Nama telah diganti menjadi $this->nama."; // Mengembalikan pesan konfirmasi
    }
}
```
> Membuat class Dosen yang merupakan turunan dari class pengguna yang memiliki atribut mataKuliah
> aksebilitas yang digunakan adalah public yang dapat diakses dimana saja.
```sh
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
```
> Membuat metode function getDataDosen yang berfungsi untuk menampilkan
 seluruh data dosen
```sh
    // Method untuk menampilkan data dosen
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah"; // Menampilkan nama dosen dan mata kuliah yang diampu
    }
}
```
> Membuat class Mahasiswa yang merupakan turunan dari class pengguna yang memiliki atribut npm dan jurusan
> aksebilitas yang digunakan adalah public yang dapat diakses dimana saja.
```sh
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
```
> Membuat metode function getDataMahasiswa yang berfungsi untuk menampilkan
 seluruh data Mahasiswa
```sh
    // Method untuk menampilkan data mahasiswa
    public function getDataMahasiswa() {
        return "Nama mahasiswa adalah $this->nama dengan npm $this->npm jurusan $this->jurusan."; // Menampilkan data mahasiswa
    }
}
```
> Pembuatan Objek dari class Dosen dan tampilkan seluruh data dosen dengan memanggil function getDataDosen()
```sh
// Instansiasi objek Dosen dengan nama dan mata kuliah
$dosen2 = new Dosen("Aditya Nugroho", "Struktur Data");
echo $dosen2->getDataDosen() . "<br>"; // Menampilkan data dosen
```
> Memanggil function aksesFitur yang akan mengubah nama pada dosen
```sh
echo $dosen2->aksesFitur("Andriass") . "<hr>"; // Mengganti nama dosen dan menampilkan pesan konfirmasi
```
> Pembuatan Objek dari class Dosen dan tampilkan seluruh data dosen dengan memanggil function getDataDosen()
```sh
// Instansiasi objek Mahasiswa dengan nama, npm, dan jurusan
$mahasiswaa = new Mahasiswa("Sidiq Putra", 230302093, "Teknik Informatika");
echo $mahasiswaa->getDataMahasiswa() . "<br>"; // Menampilkan data mahasiswa
```
> Memanggil function aksesFitur yang akan mengubah nama pada dosen
```sh
echo $mahasiswaa->aksesFitur("Dzakwann") . "<hr>"; // Mengganti nama mahasiswa dan menampilkan pesan konfirmasi

?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 094013](https://github.com/user-attachments/assets/19ce4c4f-ba1f-4bd4-83fb-bb0bf570f4d0)


### 4. Abstraction ( <a href="abstraction.php">abstraction.php</a>)
> Membuat class abstrak Pengguna yang memiliki atribut nama dan metode getNama()
> aksebilitas dari atribut dan metode adalah public yang dapat diakses dimana saja.
```sh
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
```
> Membuat Metode atau function abstrak aksesFitur()
```sh
    // Method abstract yang harus diimplementasikan oleh class turunan.
    abstract public function aksesFitur($nama);
}
```
> Membuat class Dosen yang merupakan turunan dari class pengguna yang memiliki atribut mataKuliah
> aksebilitas yang digunakan adalah protected yang hanya dapat diakses di kelasnya dan kelas turunan nya
```sh
// Membuat class Dosen yang merupakan turunan dari class Pengguna.
class Dosen extends Pengguna {
    protected $mataKuliah; // Property khusus untuk menyimpan mata kuliah dosen.

    // Constructor yang menerima nama dan mata kuliah dosen, lalu memanggil constructor parent untuk menginisialisasi nama.
    public function __construct($nama, $mataKuliah){
        parent::__construct($nama); // Memanggil constructor dari class Pengguna.
        $this->mataKuliah = $mataKuliah; // Inisialisasi mata kuliah.
    }
```
> Membuat metode function getDataDosen yang berfungsi untuk menampilkan
 seluruh data dosen
```sh
    // Method untuk mendapatkan data dosen.
    public function getDataDosen() {
        return "$this->nama mengampu $this->mataKuliah"; // Mengembalikan string dengan nama dan mata kuliah dosen.
    }
```
> Memanggil metode function aksesFitur() yang digunakan untuk mengubah nama dosen dan pesan tambahan.
```sh
    // Implementasi dari method abstract aksesFitur().
    // Mengganti nama dosen dan mengembalikan pesan bahwa nama telah diubah.
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengganti nama dosen.
        return "Nama dosen telah diganti menjadi $this->nama."; // Mengembalikan pesan perubahan nama.
    }
}
```
> Membuat class Mahasiswa yang merupakan turunan dari class pengguna yang memiliki atribut npm dan jurusan
>  aksebilitas yang digunakan adalah protected yang hanya dapat diakses di kelasnya dan kelas turunan nya.
```sh
// Membuat class Mahasiswa yang merupakan turunan dari class Pengguna.
class Mahasiswa extends Pengguna {
    protected $npm, $jurusan; // Property khusus untuk menyimpan NPM dan jurusan mahasiswa.

    // Constructor yang menerima nama, npm, dan jurusan mahasiswa, lalu memanggil constructor parent untuk menginisialisasi nama.
    public function __construct($nama, $npm, $jurusan){
        parent::__construct($nama); // Memanggil constructor dari class Pengguna.
        $this->npm = $npm; // Inisialisasi NPM.
        $this->jurusan = $jurusan; // Inisialisasi jurusan.
    }
```
> Membuat metode function getDataMahasiswa yang berfungsi untuk menampilkan
 seluruh data Mahasiswa
```sh
    // Method untuk mendapatkan data mahasiswa.
    public function getDataMahasiswa() {
        return "Nama mahasiswa adalah $this->nama dengan npm $this->npm jurusan $this->jurusan."; // Mengembalikan string dengan data mahasiswa.
    }
```
> Memanggil metode function aksesFitur() yang digunakan untuk mengubah nama mahasiswa dan pesan tambahan.
```sh
    // Implementasi dari method abstract aksesFitur().
    // Mengganti nama mahasiswa dan mengembalikan pesan bahwa nama telah diubah.
    public function aksesFitur($nama) {
        $this->nama = $nama; // Mengganti nama mahasiswa.
        return "Nama mahasiswa telah diganti menjadi $this->nama."; // Mengembalikan pesan perubahan nama.
    }
}
```
> Pembuatan Objek dari class Dosen dan menampilkan data dosen dengan memanggil function getDataDosen()
```sh
// Membuat objek dosen baru dan menginisialisasi nama serta mata kuliah.
$dosen2 = new Dosen("Aditya Nugroho","Struktur Data");
echo $dosen2->getDataDosen() . "<br>"; // Menampilkan data dosen (nama dan mata kuliah).
```
> Memanggil function aksesFitur yang akan mengubah nama pada dosen
```sh
echo $dosen2->aksesFitur("Davuuu") . "<hr>"; // Mengganti nama dosen dan menampilkan pesan perubahan nama.
```
> Pembuatan Objek dari class Dosen dan menampilkan data dosen dengan memanggil function getDataDosen()
```sh
// Membuat objek mahasiswa baru dan menginisialisasi nama, npm, dan jurusan.
$mahasiswaa = new Mahasiswa("Sidiq Putra",230302093,"Teknik Informatika");
echo $mahasiswaa->getDataMahasiswa() . "<br>"; // Menampilkan data mahasiswa (nama, npm, dan jurusan).
```
> Memanggil function aksesFitur yang akan mengubah nama pada dosen
```sh
echo $mahasiswaa->aksesFitur("Dzakwann") . "<hr>"; // Mengganti nama mahasiswa dan menampilkan pesan perubahan nama.
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 094106](https://github.com/user-attachments/assets/5a9fa3e8-52d8-4878-9ab4-19799bc8538c)
