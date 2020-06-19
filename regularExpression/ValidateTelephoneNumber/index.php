<?php
$telenumEmpty = "";
$telenumError =  "";
$telenum = "";
$checkTelenum = "/^[(]{1}[0-9]{2}[)]{1}[-]{1}[(]{1}[0]{1}[0-9]{9}[)]{1}$/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['telenum'])) {
        $telenumEmpty = "Số điện thoại chưa được nhập!";
    } else {
        $telenum = $_POST['telenum'];
        if (!preg_match($checkTelenum, $telenum)) {
            $telenumError = "$telenum là số điện thoại không hợp lệ!";
            $telenum = '';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate telephone number</title>
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
        <h1>Validate telephone number</h1>
        <input type="text" name="telenum"><br>
        <label for=""><?= $telenumEmpty ?></label>
        <label for=""><?= $telenumError ?></label><br>
        <input type="submit"><br>
        <label for=""><?= $telenum ?></label>
    </form>
</body>

</html>