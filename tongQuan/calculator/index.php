<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        form {
            border: solid 1px black;
            padding: 2px;
            width: 270px;
        }
        input {
            width: 100px;
        }
        #btn {
            width: 70px;
            margin-left: 80px;
        }
    </style>
</head>

<body>

    <form action="" method="get">
        <h1>Simple Calculator</h1>
        <fieldset>
            <legend>Calculator:</legend>
            <table>
                <tr>
                    <td><label>First Operand:</label></td>
                    <td><input type="text" name="operand1"><br><br></td>
                </tr>
                <tr>
                    <td><label>Operator:</label></td>
                    <td>
                        <select name="operator" id="">
                            <option value="add">Add</option>
                            <option value="sub">Sub</option>
                            <option value="mul">Mul</option>
                            <option value="div">Div</option>
                        </select><br><br>
                    </td>
                </tr>
                <tr>
                    <td><label>Second Operand:</label></td>
                    <td><input type="text" name="operand2"><br><br></td>
                </tr>
            </table>
            <input id="btn" type="submit" name="submit" value="Calculator">
        </fieldset>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $num1 = $_GET["operand1"];
        $num2 = $_GET["operand2"];
        $operator = $_GET["operator"];
    }
    
    
    
        function calculator($num1, $num2, $operator)
        {
            if ($num2 == 0 && $operator == 'div') {
                throw new Exception('Không được chia cho 0');
            }
            if ($operator == 'add') {
                return $num1 + $num2;
            }
            if ($operator == 'sub') {
                return $num1 - $num2;
            }
            if ($operator == 'mul') {
                return $num1 * $num2;
            }
            if ($operator == 'div') {
                return $num1 / $num2;
            }
        }
   
    try {
        $result = calculator($num1, $num2, $operator);
        echo '<h1>Result:</h1>';
        if ($operator == 'add') $opr = ' + ';
        if ($operator == 'sub') $opr = ' - ';
        if ($operator == 'mul') $opr = ' * ';
        if ($operator == 'div') $opr = ' / ';
        echo $num1.$opr.$num2.' = '.$result;
    } catch (Exception $e) {
        echo 'Message: ' .$e->getMessage();
    }
    ?>
</body>

</html>