<?php
abstract class Animal
{
    abstract public function makeSound(); // Abstract Method With No Implementation 

    public function eat()
    {
        echo "The animal is eating ";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo "The dog barks";
    }
}

class Cat extends Animal
{
    public function makeSound()
    {
        echo "The cat meows";
    }
}

// You Cannot Create An Instance Of The Abstract Class 
// $animal = new Animal(); // This Would Result In An Error 
// Create Instances Of Concrete Subclasses 
$dog = new Dog();
$cat = new Cat();

// Call Methods
$dog->makeSound(); // Output: The dog barks.
$dog->eat(); // Output: The animal is eating.

$cat->makeSound(); // Output: The cat meows.
$cat->eat(); // Output: The animal is eating.
?>