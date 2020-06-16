<?php

class QueueArrayList
{
    public $queueList;
    public $limit;

    public function __construct($limit)
    {
        $this->queueList = [];
        $this->limit = $limit;
    }
    public function delete($index){
        $lengthQueue = count($this->queueList);
        for($i = $index; $i < $lengthQueue-1; $i++){
            $this->queueList[$i] = $this->queueList[$i+1];
        }
        array_pop($this->queueList);
    }
    public function insert($index , $data){
        $lengthQueue = count($this->queueList);
        for($i =  $lengthQueue; $i > $index; $i--){
            $this->queueList[$i] = $this->queueList[$i-1];
        }
        $this->queueList[$index] = $data;
    }
    public function search($data){
        $result = '';
        $lengthQueue = count($this->queueList);
        for($i = 0; $i < $lengthQueue; $i++){
             if($this->queueList[$i] === $data){
                 $result .= " index = $i";
             }
        }
        if($result === ''){
            return "Không có $data trong queue";
        }
        else{
            return "$data nằm ở vị trí $result";
        }
    }
    public function enqueue($data)
    {
        $lengthQueue = count($this->queueList);
        if($lengthQueue < $this->limit){
            $this->queueList[] = $data;
        }
        else{
            echo "Hàng đợi đang bị đầy!";
        }
    }
    public function dequeue()
    {
        $data = $this->queueList[0];
        array_shift($this->queueList);
        return $data;
    }
}