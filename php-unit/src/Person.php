<?php

namespace FajarTest\Test;

class Person {
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function sayHello(?string $name)
    {
        if($name == null) throw new \Exception('Name is null');

        return "Hello $name,My name is $this->name";
    }
    
    public function sayGoodbye(?string $name): void
    {
        // if($name == null) throw new \Exception('Name is null');
        echo "Good bye $name" . PHP_EOL;
    }
}