<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: orange;
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
        <h1>Kiểm tra dấu ngoặc của biểu thức</h1>
        <input type="text" name="string">
        <input type="submit">
        <div>
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $str = $_POST['string'];
                echo "<br> Bạn đã nhập: <br>";
                echo $str . "<br>";
                $bracketStack = new SplStack;
                $check = true;
                for($i = 0; $i < strlen($str); $i++){
                    if($str[$i] === "("){
                        $bracketStack->push("(");
                    }
                    if($str[$i] === ")"){
                        if($bracketStack->isEmpty()){
                            $check = false;
                        }
                        else{
                            $bracketStack->pop();
                        }
                    }
                }
                if(!$bracketStack->isEmpty()){
                    $check = false;
                }
                if($check){
                    echo "<br> Dấu ngoặc của biểu thức hợp lệ!";
                }
                else{
                    echo "<br> Dấu ngoặc của biểu thức KHÔNG hợp lệ!";
                }
            }
            ?>
        </div>
    </form>
</body>

</html>