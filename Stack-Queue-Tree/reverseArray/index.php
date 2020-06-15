<?php

include ('Stack.php');

$arrData = [1, 2, 3, 4, 5, 6];
$stack = new Stack(10);
echo "<br> Mảng ban đầu: <br>";
print_r($arrData);
for($i = 0; $i < count($arrData); $i++){
    $stack->push($arrData[$i]);
}
for($i = 0; $i < count($arrData); $i++){
    $arrData[$i] = $stack->pop();
}
echo "<br> Mảng sau khi đảo: <br>";
print_r($arrData);