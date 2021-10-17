<?php

function getGenap(int $max):Iterator
{
    $array = [];
    for($i = 1; $i <= $max;$i++){
        if($i % 2 == 0){
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}


function getGanjil(int $max):Iterator
{
    $array = [];
    for($i = 1; $i <= $max;$i++){
        if($i % 2 == 1){
            yield $i;
        }
    }

    return new ArrayIterator($array);
}

foreach(getGanjil(100) as $value){
    echo "Genap : $value" .PHP_EOL;
}
