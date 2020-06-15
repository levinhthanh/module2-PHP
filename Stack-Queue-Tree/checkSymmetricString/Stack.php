<?php

class Stack{
    protected $stack;
    protected $limit;
    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }
    public function push($data){
        $len = count($this->stack);
        if($len < $this->limit)
        {
            array_unshift($this->stack, $data);
        } 
        else
        {
            echo "Ngăn xếp đầy!";
        }
    }
    public function pop(){
        $len = count($this->stack);
        
        if($len > 0)
        {
            $dataPop = $this->stack[0];
            array_shift($this->stack);
            return $dataPop;
        } 
        else
        {
            return "Ngăn xếp rỗng!";
        }
        
    }

}

?>