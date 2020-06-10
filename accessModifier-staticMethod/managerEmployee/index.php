<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Employee</title>
    <style>
        input {
            text-align: center;
        }

        #table {
            width: 200px;
            border: solid 1px darkorange;
            text-align: center;
        }

        table {
            margin-left: 50px;
        }

        form {
            border: solid 1px darkorange;
            background-color: burlywood;
            width: 450px;
            padding: 40px;
            margin-left: 330px;
        }

        #btn {
            margin-left: 180px;
        }

        #list {
            margin-left: 450px;
        }
    </style>
</head>

<body>
    <br>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
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
            $check = 1;
            if (!empty($_POST['firstName'])) {
                $fname = $_POST['firstName'];
            } else {
                $check = 0;
            }
            if (!empty($_POST['lastName'])) {
                $lname = $_POST['lastName'];
            } else {
                $check = 0;
            }
            if (!empty($_POST['birthday'])) {
                $birthday = $_POST['birthday'];
            } else {
                $check = 0;
            }
            if (!empty($_POST['address'])) {
                $address = $_POST['address'];
            } else {
                $check = 0;
            }
            if (!empty($_POST['possition'])) {
                $possition = $_POST['possition'];
            } else {
                $check = 0;
            }
            if ($check === 1) {
                $employee = new Employee($fname, $lname, $birthday,  $address, $possition);
                $employeeManager->addEmployee($employee);
                $employeeArray = $employeeManager->getEmployees();

                $dataJson = file_get_contents('data.json');
                $dataArray = json_decode($dataJson);

                for ($i = 0; $i < count($employeeArray); $i++) {
                    $tmp = $employeeArray[$i];
                    $arr = [$tmp->getFirstName(), $tmp->getLastName(), $tmp->getBirthday(), $tmp->getAddress(), $tmp->getPossition()];
                    array_push($dataArray, $arr);
                }

                $dataJson = json_encode($dataArray);
                file_put_contents('data.json', $dataJson);

                for ($i = 0; $i < count($dataArray); $i++) {
                    echo "<tr id='table'><td id='table'>" . $dataArray[$i][0] . "</td>" . "<td id='table'>" . $dataArray[$i][1] . "</td>"
                        . "<td id='table'>" . $dataArray[$i][2] . "</td>" . "<td id='table'>" . $dataArray[$i][3] . "</td>"
                        . "<td id='table'>" . $dataArray[$i][4] . "</td></tr>";
                }
            }
            else
            {
                $dataJson = file_get_contents('data.json');
                $dataArray = json_decode($dataJson);
                for ($i = 0; $i < count($dataArray); $i++) {
                    echo "<tr id='table'><td id='table'>" . $dataArray[$i][0] . "</td>" . "<td id='table'>" . $dataArray[$i][1] . "</td>"
                        . "<td id='table'>" . $dataArray[$i][2] . "</td>" . "<td id='table'>" . $dataArray[$i][3] . "</td>"
                        . "<td id='table'>" . $dataArray[$i][4] . "</td></tr>";
                }
            }
        }
        ?>
    </table>


</body>

</html>