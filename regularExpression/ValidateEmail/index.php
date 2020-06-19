<?php
$emailEmpty = "";
$emailError =  "";
$email = "";
$checkEmail = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email'])) {
        $emailEmpty = "Email chưa được nhập!";
    } else {
        $email = $_POST['email'];
        if (!preg_match($checkEmail, $email)) {
            $emailError = "$email là email không hợp lệ!";
            $email = '';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate email</title>
    <style>
        form {
            background-color: khaki;
            padding: 30px;
            border: 3px solid black;
            width: 200px;
            margin-left: 300px;
            margin-top: 20px ;
        }
        label{
            color: red;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Validate email</h1>
        <input type="text" name="email">
        <label for=""><?= $emailEmpty ?></label>
        <label for=""><?= $emailError ?></label><br><br>
        <input type="submit"><br>
        <label for=""><?= $email ?></label>
    </form>
</body>

</html>