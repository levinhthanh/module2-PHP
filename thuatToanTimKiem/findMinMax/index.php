<?php

$nums = [];
for ($i = 0; $i < 100; $i++) {
   $nums[$i] = rand(1, 101);
}
echo "<br> Max = ".findMax($nums);
echo "<br> Min = ".findMin($nums);

function findMin($nums)
{
   $min = $nums[0];
   for ($i = 0; $i < 100; $i++) {
      if ($min > $nums[$i]) {
         $min = $nums[$i];
      }
   }
   return $min;
}

function findMax($nums)
{
   $max = $nums[0];
   for ($i = 0; $i < 100; $i++) {
      if ($max < $nums[$i]) {
         $max = $nums[$i];
      }
   }
   return $max;
}
