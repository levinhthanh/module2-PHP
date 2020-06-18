<?php
$array = [9, 8, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1, 5, 676, 9, 34, 56, 789, 2455];

selectionSort($array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

function selectionSort(&$array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i++){
        $min = $i;
        for($j = $i+1 ; $j < $count; $j++){
            if($array[$min] > $array[$j]){
                $min = $j;
            }
        }
        if($min !== $i){
            $tmp = $array[$min];
            $array[$min] = $array[$i];
            $array[$i] = $tmp;
        }

    }
}

?>