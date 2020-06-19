<?php
$accountEmpty = "";
$accountError =  "";
$account = "";
$checkAccount = "/^[_a-z0-9]{6,}$/";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['account'])) {
        $accountEmpty = "Account chưa được nhập!";
    } else {
        $account = $_POST['account'];
        if (!preg_match($checkAccount, $account)) {
            $accountError = "$account là account không hợp lệ!";
            $account = '';
        }
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate account</title>
    <style>
        form {
            background-color: khaki;
            padding: 30px;
            border: 3px solid black;
            width: 250px;
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
        <h1>Validate account</h1>
        <input type="text" name="account"><br>
        <label for=""><?= $accountEmpty ?></label>
        <label for=""><?= $accountError ?></label><br>
        <input type="submit"><br>
        <label for=""><?= $account ?></label>
    </form>
</body>

</html>