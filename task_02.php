<?php

class Student {

    private $name;
    private $grades;

    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    public function averageGrade() {
        if (empty($this->grades)) {
            return 0;
        }
        $total = array_sum($this->grades); 
        $count = count($this->grades);
        return $total / $count; 
    }
    
    public function displayResult() {
        $average = $this->averageGrade(); 
        echo "Student Name: {$this->name}\n";
        echo "Average Grade: " . number_format($average, 2) . "\n";
    }
}

$student = new Student("Ratul", [75, 80, 88, 92]);
$student->displayResult();

?>