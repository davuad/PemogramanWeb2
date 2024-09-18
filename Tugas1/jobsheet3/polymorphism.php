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

class Student extends Person{
    public $studentID;

    public function __construct($name, $studentID) {
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID() {
        return "$this->name, $this->StudentID";
    }

    public function getName() {
        return "Nama Student adalah " . parent::getName() ;
    }
}

class Teacher extends Person{
    protected $teacherID;

    public function __construct($teacherID){
        $this->teacherID = $teacherID;
    }

    public function getName() {
        parent::getName();
        return "Nama Teacher adalah $this->name";
    }
}

$pp = new Student("davuu",26262);
echo $pp->getName();

$qq = new Teacher("Andrias", 22222);
$qq->getName();
?>