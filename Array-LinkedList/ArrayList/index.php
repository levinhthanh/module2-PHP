<?php

class MyList{
      public $size;
      public $elements = [];

      public function insert($index , $obj){
          $len = count($this->elements);
          for($i = $len-1 ; $i >= $index ; $i--){
            $this->elements[$i+1] = $this->elements[$i];
          }
          $this->elements[$index] = $obj; 
      }

      public function add($obj){
        array_push($this->elements , $obj);
      }

      public function remove($index){
        $len = count($this->elements);
          for($i=$index ; $i<$len-1 ; $i++){
            $this->elements[$i] = $this->elements[$i+1];
          }
          array_pop( $this->elements);
      }

      public function get($index){
        return $this->elements[$index];
      }

      public function clear(){
        $this->elements = [];
      }

      public function addAll($arr){
          $len = count($arr);
        for($i=0 ; $i<$len ; $i++){
            array_push($this->elements , $arr[$i]);
        }
      }
      public function indexOf($obj){
        $len = count($this->elements);
        for($i=0 ; $i<$len ; $i++){
          if($this->elements[$i] === $obj) return $i;
        }
      }
      public function isEmpty(){
        $len = count($this->elements);
        if($len === 0){
          return true;
        }
        else{
          return false;
        }
      }
}

$myList = new MyList;
$myList->add(5);
$myList->add(6);
$myList->add(8);
$myList->add(9);
echo "<br><br> Mảng đã nhập <br><br>";
print_r($myList->elements);
$myList->insert(2,7);
echo "<br><br> Chèn 7 vào vị trí thứ 2 <br><br>";
print_r($myList->elements);
$myList->remove(4);
echo "<br><br> Xóa phần tử ở vị trí thứ 4 <br><br>";
print_r($myList->elements);
$myList->clear();
echo "<br><br> Xóa hết các phần tử của mảng <br><br>";
print_r($myList->elements);
$array1 = ['Thành',34,12,35];
$myList->addAll($array1);
echo "<br><br> Add vào 1 mảng <br><br>";
print_r($myList->elements);
echo "<br><br> Số 12 nằm ở chỉ số ". $myList->indexOf(12) ."<br><br>";

?>