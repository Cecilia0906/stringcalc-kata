<?php

class StringCalculator
{
    public function add($string)
    {
        $numbers = explode(',', $string);

        $this->checkNegatives($numbers);

        if (1 === count($numbers)  && "" !== $string) {
            return $numbers[0]; 
        } else {
            return array_sum($numbers);
        }
        return 0;
    }

    private function checkNegatives($numbers)
    {
        $negatives = array_filter($numbers, function($number) {
                    return $number < 0;
            });

        if (count($negatives) > 0) {
            throw new InvalidArgumentException();
        }
    }
}

?>