<?php

interface HelloWorld
{
    function sayHello(): void;
}

$helloWorld = new class("Aldizar") implements HelloWorld {

    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWorld->sayHello();