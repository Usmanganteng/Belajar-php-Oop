<?php

class Programmer
{

    public string $name;

    public function __construct(string $name = "")
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer 
{    
}

class FrontendProgrammer extends Programmer 
{
}

class Company
{
    var Programmer $programmer;
}

function sayHelloprogrammer(Programme $programmer)
{
    echo "Hello $programmer->name" . PHP_EOL;
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}