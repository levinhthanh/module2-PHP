<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Employee</title>
    <style>
        input{
            text-align: center;
        }
        #table{
            width: 200px;
            border: solid 1px darkorange;
            text-align: center;
        }
        table{
            margin-left: 50px;
        }

        form{
            border: solid 1px darkorange;
            background-color: burlywood;
            width: 450px;
            padding: 40px ;
            margin-left: 330px;
        }
        #btn{
            margin-left: 180px;
        }
        #list{
            margin-left: 450px;
        }
    </style>
</head>

<body>
    <br>
    <form action="" method="post">
        <h1>Nhập nhân viên vào danh sách</h1>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstName"></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lastName"></td>
            </tr>
            <tr>
                <td>Birthday:</td>
                <td><input type="date" name="birthday"></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Possition:</td>
                <td><input type="text" name="possition"></td>
            </tr>
        </table><br>
        <input id="btn" type="submit" name="submit" value="Submit">
    </form>

    <h1 id="list">Danh sách nhân viên </h1>
    <table>
        <tr>
            <th id='table'>First Name</th>
            <th id='table'>Last Name</th>
            <th id='table'>Birthday</th>
            <th id='table'>Address</th>
            <th id='table'>Possition</th>
        </tr>
        <?php
        include_once "Employees/employee.php";
        include_once "ManagerEmployees/managerEmployee.php";

        use Manager\EmployeeManager;
        use Employees\Employee;

        $employeeManager = new EmployeeManager();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $fname = $_POST['firstName'];
            $lname = $_POST['lastName'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $possition = $_POST['possition'];


            $employeeManager->addEmployee(new Employee($fname, $lname, $birthday,  $address, $possition));
            $employees = $employeeManager->getEmployees();


            foreach ($employees  as $employee) {
                echo "<tr id='table'><td id='table'>" . $employee->getFirstName() . "</td>" . "<td id='table'>" . $employee->getLastName() . "</td>"
                    . "<td id='table'>" . $employee->getBirthday() . "</td>" . "<td id='table'>" . $employee->getAddress() . "</td>"
                    . "<td id='table'>" . $employee->getPossition() . "</td></tr>";
            }
        }

        ?>
    </table>


</body>

</html>