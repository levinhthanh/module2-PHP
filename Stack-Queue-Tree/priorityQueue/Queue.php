<?php
include('Patient.php');
class Queue
{
    public $patientList;
    public $count;

    public function __construct()
    {
        $this->patientList = [];
        $this->count = 0;
    }
    public function enqueue($name, $code)
    {
        $this->patientList[] = new Patient($name, $code);
        $this->count++;
    }
    public function dequeue()
    {
        $minCode = $this->patientList[0]->code;
        for ($i = 1; $i < $this->count; $i++) {
            if ($minCode > $this->patientList[$i]->code) {
                $minCode = $this->patientList[$i]->code;
            }
        }
        for ($i = 0; $i < $this->count; $i++) {
            if ($this->patientList[$i]->code === $minCode) {
                $tmp = $this->patientList[$i]->name;
                for ($j = $i; $j < $this->count - 1; $j++) {
                    $this->patientList[$j] = $this->patientList[$j + 1];
                }
                array_pop($this->patientList);
                $this->count--;
                return $tmp;
            }
        }
    }
    public function toString(){
        $str = "";
        for ($i = 0; $i < $this->count; $i++) {
           $str .= $this->patientList[$i]->name ." - ";
           $str .= $this->patientList[$i]->code ."   => ";
        }
        return $str;
    }
}
