<?php

class Programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class Backend extends Programmer{

}

class FrontEnd extends Programmer{

}

class Company {
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer){

    if($programmer instanceof Backend){
        echo "Hello Back end programmer $programmer->name" . PHP_EOL;
    }
    else if($programmer instanceof FrontEnd){
        echo "Hello Front end programmer $programmer->name" . PHP_EOL;
    }
    else if($programmer instanceof Programmer){
        echo "Hello programmer $programmer->name" . PHP_EOL;
    }
}