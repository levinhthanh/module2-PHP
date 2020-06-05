<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find min in array</title>
</head>

<body>
    <form action="" method="post">
        <input id="input" type="text" name="len" value="" hidden>
    <table id="table"></table>
    </form>
    
    <script>
        let len = 10;
        document.getElementById('input').value = len;
        let show = '<tr>';
        for (let i = 0; i < len; i++) {
            show += '<td>Array[' + i + ']</td><td><input type="text" name="arr' + i + '"></td></tr>';
        }
        show += '<input type="submit">';
        document.getElementById('table').innerHTML = show;
    </script>
    <?php 
         if($_SERVER['REQUEST_METHOD'] == 'POST')
         {
             $len = $_POST['len'];
             $arr = [];
             for($i=0; $i<$len ; $i++){
                 $arr[$i] = $_POST["arr$i"];
             }
             $min = $arr[0];
             for($i=1; $i<$len ; $i++){
                if($min > $arr[$i]){
                    $min = $arr[$i];
                }
            }
            echo 'Mảng vừa nhập là:<br>';
            print_r($arr);
            echo '<br> Phần tử nhỏ nhất mảng là: ' .$min;
         }
    ?>
</body>

</html>