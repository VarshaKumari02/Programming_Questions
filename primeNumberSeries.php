<?php

function primeSeries($start, $end)
{
    if ($start <= 1 || $end <= 1) {
        echo "The given series range must be greater than 1 for prime numbers.";
        return;
    }
    
    for ($i = $start; $i <= $end; $i++) {
        $isPrime = true;
        for($j = 2; $j <= sqrt($i); $j++){
            if($i%$j == 0){
                $isPrime=false;
                break;
            }
        }

        if ($isPrime && $i > 1) {
            echo "$i <br>";
        }
    }
}

primeSeries(2,10);
?>