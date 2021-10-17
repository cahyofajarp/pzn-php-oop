<?php

class Zero{

    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
        // echo "accessed $name";
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }
    
    public function __isset($name):bool
    {
        return isset($this->properties[$name]);        
    }
    
    public function __unset($name)
    {
        unset($this->properties[$name]);   
    }

    public function __call($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call function $name with arguments $join";
    }
    public static function __callStatic($name, $arguments)
    {
        $join = join(",",$arguments);
        echo "call static function $name with arguments $join";
    }

}

$zero = new Zero;
$zero->firstname = "Cahyo";
$zero->middlename = "Fajar";
$zero->lastname ="Pamungkas";

// unset($zero->lastname);

// $zero->lastname ="Pamungkasssss";
// echo $zero->lastname;

// echo $zero->lastname;

// $zero->sayHello('ajar','pamung');
// $zero::sayHello('asd');

// get magic method
// echo $zero->firstname;