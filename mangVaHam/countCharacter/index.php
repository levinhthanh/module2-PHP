<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count Character</title>
    <style>
    form{
        border: solid 1px black;
        width: 300px;
        padding: 20px;
    }
    </style>
</head>

<body>
    <h1>Đếm ký tự trong chuỗi</h1>
    <form action="" method="post">
        Nhập chuỗi cần kiểm tra: <br>
        <input type="text" name="string"><br><br>
        Nhập ký tự cần đếm: <br>
        <input type="text" name="character"><br><br>
        <input type="submit">
    </form>
    <?php 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $str = $_POST['string'];
            $cha = $_POST['character'];
        }
        $len = strlen($str);
        $count = 0;
        for($i=0 ; $i < $len ; $i++){
            if($str[$i] == $cha){
                $count++;
            }
        }
        echo "<br>Bạn đã nhập: ".$str;
        echo "<br>Ký tự $cha xuất hiện $count lần";

    ?>
</body>

</html>