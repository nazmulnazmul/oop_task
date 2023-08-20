<?php
// create a employee class
class Employee {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        $this->year = $salary;
    }
}

// Create a Employee object
$employee = new Employee("Nazmul", "24", 23000);

// Access and display the name, age, and salary
echo "<b style='color:green;'>Employee Name :</b> " . $employee->getName() . "<br>";
echo "<b style='color:green;'>Employee Age : </b>" . $employee->getAge() . "<br>";
echo "<b style='color:green;'>Employee Salary : </b>" . $employee->getSalary() . "<br><br>";

// Update the salary using the setSalary() method
$employee->setSalary(25000);

// Display the updated salary
echo "<b style='color:green;'>Updated Salary : </b>" . $employee->getSalary() . "<br>";


?>
