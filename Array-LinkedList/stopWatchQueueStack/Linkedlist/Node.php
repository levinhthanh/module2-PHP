<?php
class Node{
    public $data;
    public $previous;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
        $this->previous = NULL;
        $this->next = NULL;
    }
    public function readNode(){
        return $this->data;
    }
}
?>