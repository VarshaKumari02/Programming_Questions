<?php

function secondHighestElement($arr)
{
    $frequency = array_count_values($arr);
    arsort($frequency);

    $values = array_values($frequency);
    if (count($values) > 1) {
        $second_highest_freq = $values[1];

        $second_highest_elements = array_keys($frequency, $second_highest_freq);

        return $second_highest_elements;
    } else {
        return null;
    }
}

$arr = ['a', 'b', 'c', 'b', 'b', 'a', 'e', 'e', 'e', 'e', 'd', 'e', 'c'];
$result = secondHighestElement($arr);
if ($result !== null) {
    echo "The second highest frequency element(s): " . implode(', ', $result);
} else {
    echo "There is no second highest frequency element because all elements have the same frequency.";
}

?>
