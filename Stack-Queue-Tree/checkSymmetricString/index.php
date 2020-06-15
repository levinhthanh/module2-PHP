<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: thistle;
            border: solid 2px black;
            width: 500px;
            padding-top: 10px;
            padding-bottom: 50px;
            text-align: center;
            margin-left: 300px;
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h1>Kiểm tra chuỗi đối xứng</h1>
        <input type="text" name="string">
        <input type="submit">
        <div>
        <?php
        include ('Queue.php');
        include ('Stack.php');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $str = $_POST['string'];
            echo "<br> Bạn đã nhập: <br>";
            echo $str."<br>";
            $len = strlen($str);
            $queue = new Queue;
            $stack = new Stack($len);
            for ($i = 0; $i < $len; $i++) {
                $queue->enqueue($str[$i]);
                $stack->push($str[$i]);
            }
            $check = true;
            for ($i = 0; $i < $len; $i++) {
                if ($queue->dequeue() !== $stack->pop()) {
                    $check = false;
                }
            }
            if($check){
                echo "<br> Chuỗi của bạn đối xứng! <br>";
            }
            else{
                echo "<br> Chuỗi của bạn không đối xứng! <br>";
            }
        }

        ?>
        </div>
    </form>
</body>

</html>