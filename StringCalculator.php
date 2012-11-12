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
        foreach ($numbers as $number) {
            if ($number < 0) {
                throw new InvalidArgumentException();
            }
        }
    }
}

?>