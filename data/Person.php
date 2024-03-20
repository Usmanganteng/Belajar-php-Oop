<?php

// class Person
// {
//     var string $name;
//     var ?string $address = null; //bisa juga data di kosongkan null
//     var string $country = "indonesia"; bisa mengisi langsung data
// }

// class Person
// {
//     const AUTHOR = "Muhamad Aldizar Ilham" //menambahkan constant di class
//     var string $name;
//     var string $address;
//     var string $country;
// }

class Person
{
    const AUTHOR = "Muhamad Aldizar Ilham";
    
    var string $name;
    var string $address;
    var string $country ;

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->adddress = $address;
    } 
    
    function sayHello(?string $name)
    {
        if (is_null($name)){
            echo "Hi, My name is {$this->name}" .PHP_EOL;
        } else {
            echo "Hello $name, My name is {$this->name}" .PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR :" . self::AUTHOR . PHP_EOL;
    }
    
    function __destruct()
    {
       echo "Object person {$this->name} is destroyed" . PHP_EOL;   
    }

}