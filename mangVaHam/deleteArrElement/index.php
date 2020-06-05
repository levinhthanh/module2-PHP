<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete array element</title>
</head>
<body>
     Array = [1, 3, 45, 65, 2, 6, 6, 7, 12, 3] <br><br>
    <form action="" method="post">
     Nhập vị trí cần xóa:
    <input type="text" name="deleteIndex">
    <input type="submit">
    </form>
    <?php 
    $arr = [1, 3, 45, 65, 2, 6, 6, 7, 12, 3];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $det = $_POST['deleteIndex'];
        for($i=$det; $i<9; $i++){
            $arr[$i] = $arr[$i+1];
        }
        $arr[9] = 0;
        echo '<br>Mảng sau khi xóa: <br>';
        for($i=0; $i<10; $i++){
        echo $arr[$i].' ';
        }
    }
    ?>
</body>
</html>