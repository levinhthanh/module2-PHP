<?php

class StackArrayList{
    protected $stack;
    protected $limit;
    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function delete($index){
        $lengthStack = count($this->stack);
        for($i = $index; $i < $lengthStack-1; $i++){
            $this->stack[$i] = $this->stack[$i+1];
        }
        array_pop($this->stack);
    }
    public function insert($index , $data){
        $lengthStack = count($this->stack);
        for($i =  $lengthStack; $i > $index; $i--){
            $this->stack[$i] = $this->stack[$i-1];
        }
        $this->stack[$index] = $data;
    }
    public function search($data){
        $result = '';
        $lengthStack = count($this->stack);
        for($i = 0; $i < $lengthStack; $i++){
             if($this->stack[$i] === $data){
                 $result .= " index = $i";
             }
        }
        if($result === ''){
            return "Không có $data trong stack";
        }
        else{
            return "$data nằm ở vị trí $result";
        }
    }
    public function push($data){
        $lengthStack = count($this->stack);
        if($lengthStack < $this->limit)
        {
            array_push($this->stack, $data);
        } 
        else
        {
            echo "Ngăn xếp đầy!";
        }
    }
    public function pop(){
        $lengthStack = count($this->stack);
        if($lengthStack > 0)
        {
            array_pop($this->stack);
        } 
        else
        {
            echo "Ngăn xếp rỗng!";
        }
    }
    public function top(){
        $lengthStack = count($this->stack);
        if( $lengthStack > 0)
        {
            return $this->stack[0];
        } 
        else
        {
            return "Ngăn xếp rỗng!";
        }
    }
    public function isEmpty(){
        $lengthStack = count($this->stack);
        if($lengthStack > 0){
            return false;
        }
        else{
            return true;
        } 
    }
}