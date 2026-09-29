<?php
class Student {
    private $name;
    private $age;
    private $course;

    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    public function getName() { return $this->name; }
    public function getAge() { return $this->age; }
    public function getCourse() { return $this->course; }

    // Method to display student info
    public function displayInfo() {
        echo "Name: " . $this->getName() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        echo "Course: " . $this->getCourse() . "<br><br>";
    }
}

$student1 = new Student("John Mark Garrido", 20, "BSIT");
$student2 = new Student("Maria Santos", 19, "BSCS");
$student3 = new Student("Daniel Cruz", 21, "BSIS");

$student1->displayInfo();
$student2->displayInfo();
$student3->displayInfo();
?>