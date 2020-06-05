<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem bói</title>
    <style>
        form {
            border: solid 1px black;
            width: 250px;
            padding: 30px;
        }
    </style>
</head>

<body>
    <h1>Ứng dụng xem bói vui</h1>
    <form action="http://localhost:1908" method="post">
        Nhập năm sinh của bạn:
        <input type="text" name="year"><br><br>
        Nhập giới tính của bạn:
        <input type="text" name="gender"><br><br>
        <input type="submit">
    </form><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['year'])){
            $check1 = $_POST['year'];
        }
        if(isset($_POST['gender'])){
            $check2 = $_POST['gender'];
        }
        
        if ($check1 != '' && $check2 != '') {
            echo 'Bạn là con người, có mẹ có cha';
        }
    }
    ?>
</body>

</html>