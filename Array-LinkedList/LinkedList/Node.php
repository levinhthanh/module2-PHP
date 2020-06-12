<?php

class Node{
    public $dataNode;
    public $nextNode;
    public $previousNode;

    function __construct($data)
    {
        $this->dataNode = $data;
        $this->nextNode = NULL;
        $this->previousNode = NULL;
    }

    function readNode()
    {
        return $this->dataNode;
    }
}

?>