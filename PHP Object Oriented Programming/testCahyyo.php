<?php  

namespace Coba;

trait RangeCar{

    public int $dtCar;
    public int $price;


    public abstract function carYear(?int $year):void;

    public function countPriceCar($dtCar,$price):int
    {
        $this->dtCar = $dtCar;
        $this->price = $price;

        $result = $this->dtCar * $this->price;

        return $result;
    }
}

abstract class Honda{    
    protected string $name;

    abstract public function getCivic():void;

    public function data()
    {
        echo 'dd'.PHP_EOL;
    }
}

class Civic extends Honda{

    use RangeCar;
    // public ?string c$nameC;
    public int $year;

    public function setName(string $name):void
    {
        $this->name = $name;
    } 

    public function getCivic():void
    {
        echo "Asik gua punya mobil $this->name" .PHP_EOL;
    }

    public function carYear(?int $year):void
    {
        $this->year = $year;

        echo $this->year .PHP_EOL;

    }
}


$civic = new Civic;

// echo $civic->countPriceCar(2,5000) .PHP_EOL;

// $civic->carYear(2021);

// $civic->data();
// $civic->setName("CIVIC HATBACK");

// $civic->getCivic();