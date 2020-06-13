<?php
include('Node.php');
class Queue
{
    public $front;
    public $back;
    public $count;

    public function __construct()
    {
        $this->front = NULL;
        $this->back = NULL;
        $this->count = 0;
    }
    public function printQueue(){
        $current = $this->back;
        $dataArr = [];
        for($i = 0; $i < $this->count; $i++){
           $dataArr[] = $current->value;
           $current = $current->next;
        }
        return $dataArr;
    }
    public function isEmpty()
    {
        if ($this->front === NULL) {
            return true;
        } else {
            return false;
        }
    }
    public function enqueue($value)
    {
        if ($this->count === 0) {
            $new = new Node($value);
            $this->count++;
            $this->front = $new;
            $this->back = $new;
        } else {
            $new = new Node($value);
            $this->count++;
            $new->next = $this->back;
            $this->back = $new;
        }
    }
    public function dequeue()
    {
        if ($this->count === 0) {
            echo "<br> Hàng đợi rỗng, không có gì để lấy! <br>";
        } else {
            if ($this->count === 1) {
                $tmp = $this->front->value;
                $this->front->value = NULL;
                $this->front = NULL;
                $this->back = NULL;
                $this->count = 0;
                return $tmp;
            } else {
                $current = $this->back;
                for ($i = 1; $i < $this->count - 1; $i++) {
                    $current = $current->next;
                }
                $tmp = $this->front->value;
                $this->front->value = NULL;
                $this->front = $current;
                $this->count--;
                return $tmp;
            }
        }
    }
}
