<?php
namespace Manager;

class EmployeeManager
{
    private static $employees;

    public function __construct()
    {
        self::$employees = [];
    }

    public static function addEmployee($employee) {
        self::$employees[] = $employee;
    }

    public static function getEmployees()
    {
        return  self::$employees;
    }
}
?>