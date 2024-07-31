
<?php
// Parent class
class Animal {
    public $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Method
    public function makeSound() {
        return "Some generic animal sound";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    // Method
    public function makeSound() {
        return "Bark";
    }
}

// Create an instance of the Dog class
$dog = new Dog("Buddy");

// Accessing properties and methods
echo "The dog's name is " . $dog->name . ".\n";
echo "The dog says: " . $dog->makeSound() . ".\n";
echo "<br>";
echo "<br>";
class account{
public $salary;
public function __construct($salary) {
    $this->salary = $salary;
}
public function bonus(){
    return "bonus";

}
}
class programmer extends account{
    public function bonus(){
        return "5000";
    }

}
$programmer=new programmer("12000");

echo "The salary is " . $programmer->salary. ".\n";
echo "The bonus is: " . $programmer->bonus() . ".\n";
