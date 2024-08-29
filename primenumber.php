<?php

function prime($num)
{

    if ($num <= 1) {
        echo "$num is not prime number.";
        return;
    }
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            echo "$num is not prime number.";
            return;
        }
    }

    echo "$num is prime number.";
}

prime(7);
