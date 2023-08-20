
<?php
class Employee
{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
    
    public function getSalary()
    {
        return $this->salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

// Create a Employee object
$employee = new Employee("Azim", 24, 30000);

// Access and display the name and age
echo "Name: " . $employee->getName() . "\n";
echo "Age: " . $employee->getAge() . "\n";
echo "Salary: " . $employee->getSalary() . "\n";

// Update the name and age using the setter methods
$employee->setName("Shafik");
$employee->setAge(26);
$employee->setSalary(152580);


// Display the updated name and age
echo "Updated Name: " . $employee->getName() . "\n";
echo "Updated Age: " . $employee->getAge() . "\n";
echo "Updated Salary: " . $employee->getSalary() . "\n";