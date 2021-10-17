<?php 

class Manager {
    var string $name;

    function sayHello(string $name): void
    {
        echo "Hi $name , My name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresindent extends Manager{

    function sayHello(string $name): void
    {
        echo "Hi $name , My name is VP $this->name" . PHP_EOL;
    }
}