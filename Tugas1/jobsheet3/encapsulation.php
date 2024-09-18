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

    // Override metode getName untuk menampilkan nama guru
    public function getName() {
        parent::getName();  // Memanggil metode dari parent class
        return "Nama Teacher adalah $this->name";
    }
}

// Membuat objek dari kelas Student
$student = new Student("S12345");
$student->setName("Abdul");  // Mengatur nama melalui metode setName
echo $student->getName() . "<br>";  
echo $student->getStudentID() . "<hr>";  

// Membuat objek dari kelas Teacher
$teacher = new Teacher("T98765");
$teacher->setName("Hanif");
echo $teacher->getName() . "<br>"; 
echo $teacher->getTeacherID();
?>



    