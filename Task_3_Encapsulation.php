<?php
// create a employee class
class Employee {
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->setSalary($salary);
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
        if ($salary > 0) {
            $this->salary = $salary;
        } else {
            throw new InvalidArgumentException("Salary must be a positive value.");
        }
    }
}



try {
    // create a employee object
    $employee = new Employee("Salman", 24, 20000);
    echo "<b style='color:green;'>Employee Name : </b>" . $employee->getName() . "<br>";
    echo "<b style='color:green;'>Employee Age : </b>" . $employee->getAge() . "<br>";
    echo "<b style='color:green;'>Employee Salary : Taka. </b>" . $employee->getSalary() . "<br>";

    // Try setting an invalid salary
    $employee->setSalary(-1000);
} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

?>