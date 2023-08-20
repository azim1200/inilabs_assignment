<?php
abstract class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

$dog = new Dog("Dog");
$cat = new Cat("Tom");
$cow = new Cow("Cow");

$animals = [$dog, $cat, $cow];

foreach ($animals as $animal) {
    echo $animal->name . " says: " . $animal->makeSound() . "<br>";
}