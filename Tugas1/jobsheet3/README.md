## Jobsheet 3: Menerapkan Konsep Inheritance, Polymorphism, Encapsulation, dan Abstraction dalam PHP
### 1. Inheritance (<a href="inheritance.php">inheritance.php</a>)
> Membuat class Person dengan atribut name dan function getName()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
<?php
class Person {
    public $nama;

    // Konstruktor untuk menginisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Metode untuk mendapatkan nama
    public function getName() {
        return "Nama: $this->nama";
    }
}
```
> Membuat class Student dengan atribut studentID dan function getstudentID()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
class Student extends Person {
    public $studentID;

    // Konstruktor yang menerima nama dan studentID
    public function __construct($nama, $studentID) {
        // Memanggil konstruktor dari kelas induk (Person)
        parent::__construct($nama);
        $this->studentID = $studentID;
    }

    // Metode untuk mendapatkan studentID
    public function getStudentID() {
        return "Student ID: $this->studentID";
    }
}
```
> Pembuatan Objek dari class student
> memanggil function getName dan getStudentID()
```sh
// Membuat objek Student
$pelajar = new Student("Dzakwan", "S181818");

// Menampilkan studentID
echo $pelajar->getName() . "<br>"; 
echo $pelajar->getStudentID(); 
?>
```
![Screenshot 2024-09-18 094237](https://github.com/user-attachments/assets/bba0bb14-2507-472f-96f0-ddaad39a6398)

### 2. Polymorphism (<a href="polymorphism.php">polymorphism.php</a>)
> Membuat class Person dengan atribut name dan function getName()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
<?php
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}
```
> Membuat class Student dengan atribut studentID dan function getstudentID()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
class Student extends Person{
    public $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "$this->name, $this->StudentID";
    }
```
> Membuat fungsi yang sama dengan parent nya yaitu getName yang berfungsi menampilkan nama dan pesan tambahan nya.
```sh
    public function getName() {
        return "Nama Student adalah " . parent::getName() ;
    }
}

```
> Membuat class Teacher dengan atribut teacherID dan function getteacherID()
> Aksebilitas yang digunakan adalah protected yang hanya dapat diakses dikelas nya dan turunan nya
```sh
class Teacher extends Person{
    protected $teacherID;

    public function __construct($teacherID){
        $this->teacherID = $teacherID;
    }

```
> Membuat fungsi yang sama dengan parent nya yaitu getName yang berfungsi menampilkan nama dan pesan tambahan nya.
```sh
    public function getName() {
        parent::getName();
        return "Nama Teacher adalah $this->name";
    }
}

```
> Pembuatan Objek dari kelas Student dan menampilkan nama dengan memanggil getName()
```sh
$pp = new Student("davuu",26262);
echo $pp->getName();
```
> Pembuatan Objek dari kelas Teacher dan menampilkan nama dengan memanggil getName()
```sh
$qq = new Teacher("Andrias", 22222);
$qq->getName();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 095659](https://github.com/user-attachments/assets/84bcc0db-292c-4049-9410-c21d0cbe2649)

### 3. Encapsulation ( <a href="encapsulation.php">encapsulation.php</a>) 
> Membuat class Person dengan atribut name dan function getName()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
<?php
// Kelas Person sebagai parent class untuk Student dan Teacher
class Person {
    public $name;  // Atribut untuk menyimpan nama

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name;
    }

    // Getter untuk mengambil nama
    public function getName() {
        return $this->name;
    }
}
```
> Membuat class Student dengan atribut studentID dan function getstudentID()
> Aksebilitas yang digunakan adalah public yang dapat diakses dimana saja
```sh
// Kelas Student mewarisi dari Person
class Student extends Person {
    private $studentID;  // Atribut khusus untuk menyimpan ID Mahasiswa

    // Konstruktor yang hanya menginisialisasi studentID (perlu diperbaiki untuk juga menerima nama)
    public function __construct($studentID) {
        $this->studentID = $studentID;
    }

    // Getter untuk mengambil studentID
    public function getStudentID() {
        return "Student ID: $this->studentID";
    }

    // Setter untuk mengubah studentID
    public function setStudentID($studentID) {
        $this->studentID = $studentID;
    }
```
> Membuat fungsi yang sama dengan parent nya yaitu getName yang berfungsi menampilkan nama dan pesan tambahan nya.
```sh
    // Override metode getName untuk menampilkan nama mahasiswa
    public function getName() {
        parent::getName();  // Memanggil metode dari parent class
        return "Nama Student adalah $this->name";
    }

    // Setter untuk mengubah nama
    public function setName($name) {
        $this->name = $name;
    }
}
```
> Membuat class Teacher dengan atribut teacherID dan function getteacherID()
> Aksebilitas yang digunakan adalah protected yang hanya dapat diakses dikelas nya dan turunan nya
```sh
// Kelas Teacher mewarisi dari Person
class Teacher extends Person {
    protected $teacherID;  // Atribut khusus untuk menyimpan ID Guru

    // Konstruktor yang hanya menginisialisasi teacherID (perlu diperbaiki untuk juga menerima nama)
    public function __construct($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Getter untuk mengambil teacherID
    public function getTeacherID() {
        return "Teacher ID: $this->teacherID";
    }

    // Setter untuk mengubah teacherID
    public function setTeacherID($teacherID) {
        $this->teacherID = $teacherID;
    }

    // Setter untuk mengubah nama
    public function setName($name) {
        $this->name = $name;
    }
```
> Membuat fungsi yang sama dengan parent nya yaitu getName yang berfungsi menampilkan nama dan pesan tambahan nya.
```sh
    // Override metode getName untuk menampilkan nama guru
    public function getName() {
        parent::getName();  // Memanggil metode dari parent class
        return "Nama Teacher adalah $this->name";
    }
}
```
> Pembuatan Objek dari kelas Student
> mengedit nama dengan memanggil setName()
> menampilkan nama dengan memanggil getName()
> menampilkan studentID dengan memanggil getStudentID()
```sh
// Membuat objek dari kelas Student
$student = new Student("S12345");
$student->setName("Abdul");  // Mengatur nama melalui metode setName
echo $student->getName() . "<br>";  
echo $student->getStudentID() . "<hr>";  
```
> Pembuatan Objek dari kelas Teacher
> mengedit nama dengan memanggil setName()
> menampilkan nama dengan memanggil getName()
> menampilkan studentID dengan memanggil getStudentID()
```sh
// Membuat objek dari kelas Teacher
$teacher = new Teacher("T98765");
$teacher->setName("Hanif");
echo $teacher->getName() . "<br>"; 
echo $teacher->getTeacherID();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 100623](https://github.com/user-attachments/assets/052eaf71-94f9-4483-96e2-7c64191932de)


### 4. Abstraction ( <a href="abstraction.php">abstraction.php</a>)
> Membuat abstrak class Course yang berisi function getCourseDetails()
```sh
<?php
abstract class Course{
    abstract public function getCourseDetails();
}
```
> Membuat class Online Course yang mewarisi Course yang berisi function getCourseDetail()
> getCourseDetail() berfungsi untuk memberikan informasi mengenai detail Course
```sh
class OnlineCourse extends Course{
    public function getCourseDetails(){
        return "Ini adalah Course yang diselenggarakan secara Online";
    }
}
```
> Membuat class Offline Course yang mewarisi Course yang berisi function getCourseDetail()
> getCourseDetail() berfungsi untuk memberikan informasi mengenai detail Course
```sh
class OfflineCourse extends Course{
    public function getCourseDetails(){
        return "Ini adalah Couse yang diselenggarakan secara Offline";
    }
}
```
> Pembuatan Objek dari class OnlineCouse dan menampilkan detail Course dengan memanggil getCourseDetail()
```sh
$kelass = new OnlineCourse();
echo $kelass->getCourseDetails() . "<br>";
```
> Pembuatan Objek dari class OnlineCouse dan menampilkan detail Course dengan memanggil getCourseDetail()
```sh
$kelass = new OfflineCourse();
echo $kelass->getCourseDetails();
?>
```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 100728](https://github.com/user-attachments/assets/d004bdf6-bdd5-4a9e-9e40-66ffb719ab58)


### TUGAS (<a href="tugas.php">tugas.php </a>)
> Membuat class Person dengan atribut nama
```sh
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
```
> Membuat metode getRole yang nantinya akan sesuai dengan data pada child nya
```sh
    // Metode getRole untuk ditimpa oleh subclass
    public function getRole() {
        return "Person";
    }
}
```
> Membuat class Dosen yang mewarisi Person dengan atribut nidn
```sh
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
```
> Override metode getRole pada parent class
```sh
    // Override metode getRole untuk menampilkan peran Dosen
    public function getRole() {
        return "$this->nama adalah seorang Dosen";
    }
}
```
> Membuat class Mahasiswa yang mewarisi Person dengan atribut nim
```sh
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
```
> Override metode getRole pada parent class
```sh
    // Override metode getRole untuk menampilkan peran Mahasiswa
    public function getRole() {
        return "$this->nama adalah seorang Mahasiswa";
    }
}

```
> Membuat abstrak class Jurnal yang memiliki atribut title
```sh
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
```
> Membuat class JurnalDosen yang mewarisi Jurnal dengan metode manageSubmission()
> manageSubmission() berfungsi untuk menampilkan detail pengajuan jurnal
```sh
// Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Mengelola pengajuan jurnal oleh dosen yang berjudul: " . $this->title;
    }
}
```
> Membuat class JurnalMahasiswa yang mewarisi Jurnal dengan metode manageSubmission()
> manageSubmission() berfungsi untuk menampilkan detail pengajuan jurnal
```sh
// Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    // Implementasi metode manageSubmission
    public function manageSubmission() {
        return "Mengelola pengajuan jurnal oleh mahasiswa yang berjudul: " . $this->title;
    }
}
```
> Pembuatan objek dari class mahasiswa dan dosen
> menampilkan peran (role) dengan memanggil function getRole()
```sh
// Membuat objek Dosen dan Mahasiswa
$dosenn = new Dosen("Pak Budi", "28382818");
$mahasiswaa = new Mahasiswa("Davu Andrias", "230102077");

// Menampilkan informasi dan peran
echo $dosenn->getRole() . "<br>";
echo $mahasiswaa->getRole() . "<hr>";  

```
> Pembuatan objek dari class JurnalDosen dan JurnalMahasiswa
> menampilkan detail pengajuan jurnal dengan memanggil manageSubmission()
```sh
// Membuat dan mengelola pengajuan jurnal
$jurnalDosenn = new JurnalDosen("Penelitian masyarakat sekitar.");
$jurnalMahasiswaa = new JurnalMahasiswa("Tugas Akhir: Sistem Informasi Perpustakaan.");

// Menampilkan hasil pengelolaan jurnal
echo $jurnalDosenn->manageSubmission() . "<br>";
echo $jurnalMahasiswaa->manageSubmission(); 
?>

```
> Berikut ini adalah Output atau hasil dari program:
![Screenshot 2024-09-18 100820](https://github.com/user-attachments/assets/d804a091-81f8-41d3-9340-12cd13e5fab8)
