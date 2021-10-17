<?php
namespace Data\Traits;

trait SayGoodbye{
    public function goodBye(?string $name):void
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }
        else{
            echo "Good Bye $name ". PHP_EOL;
        }
    }
}

trait SayHello{
    public function hello(?string $name):void
    {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }
        else{
            echo "Hello $name ". PHP_EOL;
        }
    }
}

trait HasName {
    public string $name;
}

trait CanRun{
    public abstract function run():void;
}

class ParentPerson { 
    
    public function goodBye(?string $name):void
    {
        if(is_null($name)){
            echo "Good Bye" . PHP_EOL;
        }
        else{
            echo "Good Bye in person $name ". PHP_EOL;
        }
    }

    public function hello(?string $name):void
    {
        if(is_null($name)){
            echo "Hello" . PHP_EOL;
        }
        else{
            echo "Hello in perosn $name ". PHP_EOL;
        }
    }

}
trait All{
    use SayGoodbye,SayHello,HasName,CanRun;
}
class Person extends ParentPerson{

    use All;
    
    public function run():void
    {
        echo "Person $this->name is Running" . PHP_EOL;
    }

    // public function goodBye(?string $name):void
    // {
    //     if(is_null($name)){
    //         echo "Good Bye" . PHP_EOL;
    //     }
    //     else{
    //         echo "Good Bye in person $name ". PHP_EOL;
    //     }
    // }

    // public function hello(?string $name):void
    // {
    //     if(is_null($name)){
    //         echo "Hello" . PHP_EOL;
    //     }
    //     else{
    //         echo "Hello in perosn $name ". PHP_EOL;
    //     }
    // }

}

// Paarent akan ter overidde ole trair , dan trait akan teroveridde oleh child class oarent
// sangat membangongkan bukan ?
// ya jelas sangat 
// tapi saya haru telen semua nya yaa
// supaya menjadi master 
// semangat yaa guyyssss 
// kita pasti bisa kok hehehe

// I hope one day I will be I should be Fullstack developer and get Big salery hehe , 
// I want I want :(