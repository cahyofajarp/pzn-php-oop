<?php

namespace FajarTest\Test;


use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{   
    private Person $person;

    protected function setUp() :void 
    {
        // $this->person = new Person("Fajar");
        // echo "Membuat Counter" .PHP_EOL;
    }

    /**
     * 
     *@before
     * 
     */
    public function createPerson()
    {
        $this->person = new Person("Fajar");
    }

    public function testSuccess()
    {
        // $person = new Person("Fajar");

        self::assertEquals("Hello Budi,My name is Fajar",$this->person->sayHello('Budi'));
    }  
    
    public function testException()
    {
        // $person = new Person("Fajar");
        $this->expectException(\Exception::class);

        $this->person->sayHello(null);
    }

    public function testGoodByeSuccess()
    {
        // $person = new Person("Fajar");


        $this->expectOutputString("Good bye Budi" . PHP_EOL);
        
        $this->person->sayGoodBye('Budi');
        

    }
}