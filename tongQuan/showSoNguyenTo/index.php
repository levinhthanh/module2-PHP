<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số nguyên tố</title>
</head>
<body>
    <form action="" method="post">
    <h1>Hiển thị các số nguyên tố đầu tiên</h1>
    Nhập số lượng số nguyên tố cần xem:
    <input type="text" name="inp">
    <input type="submit">
    </form><br>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inp = $_POST["inp"];
    }
    $out = '';
    $cnt = 0;
    for($i=2; $cnt != $inp; $i++){
        $rs = check($i);
        if($rs){
            $out = $out.' '.$i;
            $cnt++;
        }
    }
    echo $out;
    
    
    function check($var)
    {   
        $ck =true;
        for($i=2; $i<$var; $i++){
            if($var % $i == 0) $ck = false;
        }
        return $ck;
    }
    ?>
</body>
</html>