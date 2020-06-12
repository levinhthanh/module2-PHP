<?php

class LinkedList
{
    public $count;
    public $firstNode;
    public $lastNode;
    public function __construct()
    {
        $this->count = 0;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
    }

    public function contains($obj){
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                return true;
            }
            $previous = $current;
            $current = $current->nextNode;
        }
        return false;
    }

    public function indexOf($obj){
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                return $i;
            }
            $previous = $current;
            $current = $current->nextNode;
        }
        return "Không có trong danh sách";
    }

    public function clone(){
        $previous = NULL;
        $current = $this->firstNode;
        $newList = new LinkedList;
        for ($i = 0; $i < $this->count; $i++) {
            $newList->addLast($current);
            $previous = $current;
            $current = $current->nextNode;
        }
        return $newList;
    }

    public function size(){
        return $this->count;
    }

    public function get(int $index)
    {
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $previous = $current;
            $current = $current->nextNode;
        }
        return $current->readNode();
    }

    public function removeObj($obj)
    {
        $previous = NULL;
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->readNode() === $obj) {
                $this->remove($i);
            }
            $previous = $current;
            $current = $current->nextNode;
        }
    }

    public function remove(int $index)
    {
        if ($index === 0) {
            $next = $this->firstNode->nextNode;
            $this->firstNode = $next;
            $next->previousNode = NULL;
            $this->count--;
        } else {
            if ($index === $this->count - 1) {
                $previous = $this->lastNode->previousNode;
                $this->lastNode = $previous;
                $previous->nextNode = NULL;
                $this->count--;
            } else {
                if ($index > 0 && $index < $this->count - 1) {
                    $previous = NULL;
                    $current = $this->firstNode;
                    for ($i = 0; $i < $index; $i++) {
                        $previous = $current;
                        $current = $current->nextNode;
                    }
                    $next = $current->nextNode;
                    $previous->nextNode = $next;
                    $next->previousNode = $previous;
                    $this->count--;
                } else {
                    echo "Index không hợp lệ";
                }
            }
        }
    }
    public function printList()
    {
        $current = $this->firstNode;
        for ($i = 0; $i < $this->count; $i++) {
            $arrayList[$i] = $current->readNode();
            $current = $current->nextNode;
        }
        return $arrayList;
    }

    public function addFirst($data)
    {
        if ($this->count === 0) {
            $newNode = new Node($data);
            $this->firstNode = $newNode;
            $this->lastNode = $newNode;
            $this->count++;
        } else {
            $newNode = new Node($data);
            $newNode->nextNode = $this->firstNode;
            $this->firstNode = $newNode;
            $this->count++;
        }
    }

    public function addLast($data)
    {
        if ($this->count === 0) {
            $this->addFirst($data);
        } else {
            $newNode = new Node($data);
            $this->lastNode->nextNode = $newNode;
            $newNode->previousNode = $this->lastNode;
            $newNode->nextNode = NULL;
            $this->lastNode = $newNode;
            $this->count++;
        }
    }
    public function add(int $index, $data)
    {
        if ($index === 0) {
            $this->addFirst($data);
        } else {
            if ($index === $this->count) {
                $this->addLast($data);
            } else {
                if ($index > 0 && $index < $this->count) {
                    $newNode = new Node($data);
                    $previous = NULL;
                    $current = $this->firstNode;

                    for ($i = 0; $i < $index; $i++) {
                        $previous = $current;
                        $current = $current->nextNode;
                    }
                    $newNode->nextNode = $current;
                    $newNode->previousNode = $previous;
                    $previous->nextNode = $newNode;
                    $current->previousNode = $newNode;
                    $this->count++;
                } else {
                    echo "Index không hợp lệ";
                }
            }
        }
    }
}
