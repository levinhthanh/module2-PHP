<?php
$array = [8, 9, 1, 7, 6, 56789, 5, 4, 3, 2, 1, 3, 2, 1, 5, 676, 9, 34, 56, 789, 2455];

insertionSort($array);

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}

function insertionSort(&$array)
{
    $count = count($array);
    for($i = 0; $i < $count; $i++){
       $value = $array[$i];
       for($j = $i-1; $j >= 0; $j--){
           if($value < $array[$j]){
            $array[$j+1] = $array[$j];
            $array[$j] = $value;
           }
       }   
    }
}

?>