<?php
$nameEmpty = "";
$nameError =  "";
$name = "";
$checkName = "/^[CAP][0-9]{4}[GHIKLM]$/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['name'])) {
        $nameEmpty = "Tên lớp chưa được nhập!";
    } else {
        $name = $_POST['name'];
        if (!preg_match($checkName, $name)) {
            $nameError = "$name là tên không hợp lệ!";
            $name = '';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate class name</title>
    <style>
        form {
            background-color: antiquewhite;
            padding: 30px;
            border: 3px solid black;
            width: 280px;
            margin-left: 300px;
            margin-top: 20px ;
        }
        label{
            color: red;
        }
        h1{
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Validate class name</h1>
        <input type="text" name="name"><br>
        <label for=""><?= $nameEmpty ?></label>
        <label for=""><?= $nameError ?></label><br>
        <input type="submit"><br>
        <label for=""><?= $name ?></label>
    </form>
</body>

</html>