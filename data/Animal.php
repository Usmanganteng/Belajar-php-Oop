<?php

namespace Data;

require_once "Food.php";

abstract class Animal
{
    public string $name;

    public abstract function run();

    public abstract function eat(AnimalFood $animalFood): void;
}

class Cat extends Animal
{
    public function run()
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "cat is eating". PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run()
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void
    {
        echo "Dog is eating". PHP_EOL;
    }
}