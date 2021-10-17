<?php


namespace FajarTest\Test;

use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase{

  private Counter $counter;

  protected function setUp() :void 
  {
      $this->counter = new Counter();
      echo "Membuat counter" . PHP_EOL;

  }

  public function testIncrement()
  {
    self::assertEquals(0,$this->counter->getCounter());
    self::markTestIncomplete("TODO NOT INCOMPLETE");
  }

  public function testCounter()
  {
     $this->counter->increment();

     $this->assertEquals(1,$this->counter->getCounter());
  }
  
  /**
   * 
   * @test
   * 
   */

  public function increment()
  {
    
    self::markTestSkipped('Masih ada error dan binung');

    $this->counter->increment();
    $this->assertEquals(1,$this->counter->getCounter());
  }

  public function testFirst() : Counter
  {
    $this->counter->increment();

    $this->assertEquals(1,$this->counter->getCounter());

    return $this->counter;
  } 

  /**
   * 
   * @depends testFirst
   * 
   */

   public function testSecond(Counter $counter) : void
  {

    $counter->increment();

    $this->assertEquals(2,$counter->getCounter());

    // return $counter;
  }

  protected function tearDown(): void
  {
    echo "Tear Down" .PHP_EOL;
  }

  /**
   * @after
   *
   * @return void
   */
  protected function after(): void
  {
    echo "After" .PHP_EOL;
  }

  /**
   * 
   *  @requires OSFAMILY Windows
   *
   * @return void
   */
  public function testOnlyWindows()
  {
    self::assertTrue(true, "Only in Mac");
  }

}