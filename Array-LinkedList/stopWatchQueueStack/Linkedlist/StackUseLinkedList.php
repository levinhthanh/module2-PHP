<?php
include('Node.php');
class StackLinkedList
{
    public $limit;
    public $firstNode;
    public $lastNode;
    public $count;

    public function __construct($limit)
    {
        $this->limit = $limit;
        $this->firstNode = NULL;
        $this->lastNode = NULL;
        $this->count = 0;
    }

    public function insert($index, $data)
    {
        if ($this->count === $this->limit) {
            echo "<br> Ngăn xếp đang bị đầy!";
        } else {
            if ($index > $this->count) {
                echo "Vị trí chèn không hợp lệ!";
            } else {
                $current = $this->firstNode;
                for ($i = 0; $i < $index; $i++) {
                    $current = $current->previous;
                }
                $next = $current->next;
                $newNode = new Node($data);
                $newNode->next = $next;
                $newNode->previous = $current;
                $next->previous = $newNode;
                $current->next = $newNode;
                $this->count++;
            }
        }
    }
    public function delete($index)
    {
        $current = $this->firstNode;
        for ($i = 0; $i < $index; $i++) {
            $current = $current->previous;
        }
        $next = $current->next;
        $previous = $current->previous;
        $previous->next = $next;
        $next->previous = $previous;
        unset($current);
        $this->count--;
    }
    public function search($data)
    {
        $current = $this->firstNode;
        $result = '';
        for ($i = 0; $i < $this->count; $i++) {
            if ($current->data === $data) {
                $result .= 'index = ' . $i . ' ';
            }
            $current = $current->previous;
        }
        if ($result === '') {
            return "Không tìm thấy $data trong ngăn xếp!";
        } else {
            return "$data nằm ở vị trí $result";
        }
    }
    public function push($data)
    {
        if ($this->count === $this->limit) {
            echo "<br> Ngăn xếp đang bị đầy!";
        } else {
            if ($this->count === 0) {
                $newNode = new Node($data);
                $this->count++;
                $this->firstNode = $newNode;
                $this->lastNode = $newNode;
            } else {
                $newNode = new Node($data);
                $this->count++;
                $newNode->next = $this->lastNode;
                $this->lastNode->previous = $newNode;
                $this->lastNode = $newNode;
            }
        }
    }

    public function pop()
    {
        if ($this->count === 0) {
            echo "<br> Ngăn xếp đang rỗng!";
        } else {
            $data = $this->lastNode->data;
            $current = $this->lastNode->next;
            unset($this->lastNode);
            $this->count--;
            $this->lastNode = $current;
            $this->lastNode->previous = NULL;
            return $data;
        }
    }

    public function readStack()
    {
        $current = $this->firstNode;
        $count = 0;
        $stackData = '';
        while ($count < $this->count) {
            $stackData .= $current->data . " ";
            $current = $current->previous;
            $count++;
        }
        return $stackData;
    }
}
