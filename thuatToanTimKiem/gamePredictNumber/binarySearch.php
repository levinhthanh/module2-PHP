<?php

$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(0, 100);
}
$search = 50;
$result = binarySearch($numbers, $search);
if ($result) {
    echo "$search có ở trong mảng!";
} else {
    echo "$search không có ở trong mảng!";
}




function binarySearch(array $numbers, int $needle)
{
    $first = 0;
    $last = count($numbers) - 1;
    while ($last - $first >= 0) 
    {
        $middle = floor(($last + $first) / 2);
        if ($numbers[$middle] === $needle) 
        {
            return true;
        } 
        else 
        {
            if ($numbers[$middle] > $needle) 
            {
                $last = $middle - 1;
            } 
            else 
            {
                $first = $middle + 1;
            }
        }
    }
    return false;
}
