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

// Membuat objek Student
$pelajar = new Student("Dzakwan", "S181818");

// Menampilkan studentID
echo $pelajar->getName() . "<br>"; 
echo $pelajar->getStudentID(); 
?>
