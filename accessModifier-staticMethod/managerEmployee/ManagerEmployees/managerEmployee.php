<?php
namespace Manager;

class EmployeeManager
{
    private $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee) {
        $this->employees[] = $employee;
    }

    public function getEmployees()
    {
        return $this->employees;
    }
}
?>