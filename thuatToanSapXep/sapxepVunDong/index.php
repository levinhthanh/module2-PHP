<?php

$array = [20, 43, 65, 88, 11, 33, 45, 56, 45, 78, 89, 43, 74];
heapSort($array, count($array));
for ($i = 0; $i < count($array); $i++) {
   echo $array[$i] . " ";
}

function heapSort(&$array, $count)
{
   $heapSize = $count;

   for ($i = floor($heapSize/2 -1) ; $i >= 0; $i--){
      maxHeap($array, $heapSize, $i);
   }
      

   for ($i = $count - 1; $i > 0; $i--) {
      $temp = $array[$i];
      $array[$i] = $array[0];
      $array[0] = $temp;

      $heapSize--;
      maxHeap($array, $heapSize, 0);
   }
}

function maxHeap(&$array, $heapSize, $index)
{
   $left = $index * 2 + 1;
   $right = $index * 2 + 2;
   $largest = 0;

   if ($left < $heapSize && $array[$left] > $array[$index])
      $largest = $left;
   else
      $largest = $index;

   if ($right < $heapSize && $array[$right] > $array[$largest])
      $largest = $right;

   if ($largest != $index) {
      $temp = $array[$index];
      $array[$index] = $array[$largest];
      $array[$largest] = $temp;
      maxHeap($array, $heapSize, $largest);
   }
}




