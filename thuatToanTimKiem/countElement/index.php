<?php
$array = [];
for($i = 0; $i < 100; $i++){
    $array[$i] = rand(1,10);
}
$result = countNumber($array,5);
echo "5 xuất hiện $result lần";
function countNumber($array,$data){
    $count = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] === $data){
            $count++;
        }
    }
    return $count;
}
?>