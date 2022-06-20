<?php
isPrimeNum(100); 

function isPrimeNum($num)
{
    for ($i = 2; $i <= $num; $i++) {
        $flag = true;

        for ($j = 2; $j < $i; $j++) {

            if ($i % $j == 0) {
   
                $flag = false;
                break;
            }
        }

        if ($flag) {
            echo $i . "<br>";
        }
    }
}
