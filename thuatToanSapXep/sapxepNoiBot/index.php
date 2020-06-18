<?php

$array = [9, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1,5,676,9,34,56,789,2455];

bubbleSort($array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}




function bubbleSort($array)
{
    global $array;
    $count = count($array);
    for ($i = 0; $i < $count - 1; $i++) {
        $check = true;
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($array[$j] < $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
                $check = false;
            }
        }
        if ($check) {
            return $array;
        }
    }
    return $array;
}





