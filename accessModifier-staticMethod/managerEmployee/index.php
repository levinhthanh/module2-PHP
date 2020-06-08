<?php
include_once "Employees/employee.php";
include_once "ManagerEmployees/managerEmployee.php";

use Manager\EmployeeManager;
use Employees\Employee;

$employeeManager = new EmployeeManager();
$employeeManager->addEmployee(new Employee('Lê', 'Vĩnh Thành', '19/08/1992', 'Phú Bài', 'Nhân viên'));
$employeeManager->addEmployee(new Employee('Lê', 'Thạnh', '01/01/2001', 'Kim Long', 'Nhân viên'));

$employees = $employeeManager->getEmployees();
foreach ($employees as $employee) {
    echo $employee->getLastName().' - '.$employee->getAddress() ."<br/>";
}
?>