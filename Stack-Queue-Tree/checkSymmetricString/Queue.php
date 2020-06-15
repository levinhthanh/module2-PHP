<?php

class Queue
{
    public $queueList;
    public $count;

    public function __construct()
    {
        $this->queueList = [];
        $this->count = 0;
    }
    public function enqueue($data)
    {
        $this->queueList[] = $data;
        $this->count++;
    }
    public function dequeue()
    {
        $data = $this->queueList[0];
        array_shift($this->queueList);
        $this->count--;
        return $data;
    }
}