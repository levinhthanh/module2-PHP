<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Số nguyên tố</title>
</head>
<body>
    <form action="" method="post">
    <h1>Các số nguyên tố bé hơn 100</h1>
    Nhấn để xem:
    <input type="submit" name="submit" value="Watch">
    </form><br>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inp = $_POST["submit"];
    }
    $out = '';
    for($i=2; $i<=100; $i++){
        $rs = check($i);
        if($rs){
            $out = $out.' '.$i;
        }
    }
    if($inp=='Watch'){
        echo $out;
    }
    
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