<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>100 số nguyên ngẫu nhiên</h1>
    <p>
        <?php
        $arr = [];
        for ($i = 0; $i < 50; $i++) {
            $arr[$i] = rand(10, 100);
            echo  $arr[$i] . '  ';
        }
        echo '<br>';
        for ($i = 50; $i < 100; $i++) {
            $arr[$i] = rand(10, 100);
            echo  $arr[$i] . '  ';
        }
        ?>
    </p>
    <form action="" method="post">
        Nhập chỉ số bạn muốn hiển thị:
        <input type="text" name="index">
        <input type="submit">
    </form><br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $index = $_POST['index'];
    }
    try {
        if ($index < 0 || $index >= 100) {
            throw new Exception("Chỉ số này không hợp lệ");
        }
        // $booltest = is_nan($index);
        // if ($booltest) {
        //     throw new Exception("Chỉ số này không hợp lệ");
        // }
        echo "Số ở vị trí $index là $arr[$index]";
    } catch (Exception $e) {
        echo 'Message: ' . $e->getMessage();
    }
    ?>
</body>

</html>