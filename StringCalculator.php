<?php

class StringCalculator
{
    public function add($string)
    {
        $numbers = explode(',', $string);

        if (1 === count($numbers)  && "" !== $string) {
            return $numbers[0]; 
        } else {
            return array_sum($numbers);
        }
        return 0;
    }
}

?>