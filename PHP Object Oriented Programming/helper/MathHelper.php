<?php 

namespace Helper;

class MathHelper{
    static public string $name = 'Cahyo';

    public static function sum(int ...$number):int
    {
        $total = 0;

        foreach($number as $result){
            $total += $result;
        }

        return $total;
    }
}