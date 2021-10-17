<?php

trait B{
    public function doA(): void
    {
        echo "a" . PHP_EOL;
    }
    public function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait A{ 
    public function doA(): void
    {
        echo "a" . PHP_EOL;
    }
    public function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

class Sample {
    use A,B {
        A::doA insteadOf B;
        B::doB insteadOf A;
    }
}

$sample = new Sample;

$sample->doA();
$sample->doB();

