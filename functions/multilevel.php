<?php
// Parent class
class Animal {
    // Property
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

// Grandchild class inheriting from Dog
class Puppy extends Dog {
    // Method
    public function play() {
        return "Playing with a toy!";
    }
}

// Create an instance of the Puppy class
$puppy = new Puppy("Buddy");

// Accessing properties and methods
echo "The puppy's name is " . $puppy->name . ".\n";
echo "<br>";
echo "The puppy says: " . $puppy->makeSound() . ".\n";
echo "<br>";
echo "The puppy is: " . $puppy->play() . ".\n";
?>
