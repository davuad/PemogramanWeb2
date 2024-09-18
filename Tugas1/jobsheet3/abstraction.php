<?php
abstract class Course{
    abstract public function getCourseDetails();
}

class OnlineCourse extends Course{
    public function getCourseDetails(){
        return "Ini adalah Course yang diselenggarakan secara Online";
    }
}

class OfflineCourse extends Course{
    public function getCourseDetails(){
        return "Ini adalah Couse yang diselenggarakan secara Offline";
    }
}

$kelass = new OnlineCourse();
echo $kelass->getCourseDetails() . "<br>";
$kelass = new OfflineCourse();
echo $kelass->getCourseDetails();
?>