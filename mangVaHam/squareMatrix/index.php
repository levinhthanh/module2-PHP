<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square Matrix</title>
    <style>
        input {
            width: 50px;
            text-align: center;
        }

        button {
            width: 70px;
            height: 25px;
            margin-left: 10px;
            margin-top: 20px;
        }

    </style>
</head>

<body>

    <h4>Tổng đường chéo chính ma trận vuông</h4>
    Nhập chiều dài ma trận vuông: <br>
    <input id="length" type="text">
    <button onclick="inputData()">Submit</button>

    <form action="" method="post">
        <table id="table">
        </table>
        <input id="len" type="text" value="" name="len" hidden>
    </form>

    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $len = $_POST['len'];
        $arr = [];
        $sum = 0;
        for($i=0 ; $i<$len ; $i++){
            for($j=0 ; $j<$len ; $j++){
                   $arr[$i][$j] = $_POST["arr$i-$j"];
            }
        }
        for($i=0 ; $i<$len ; $i++){
            for($j=0 ; $j<$len ; $j++){
                  if($i===$j){
                      $sum += $arr[$i][$j];
                  }
            }
        }
        echo "<br> Tổng đường chéo chính bằng: $sum";
    }
    ?>

    <script>
        function inputData() {
            let len = document.getElementById('length').value;
            document.getElementById('len').value = len;
            let draw = '';
            for (let i = 0; i < len; i++) {
                draw += '<tr>';
                for (let j = 0; j < len; j++) {
                    draw += '<td>arr[' + i + ',' + j + '] = <input type="text" name=arr' + i + '-' + j + '></td>';
                }
                draw += '</tr>';
            }
            draw += '<input type="submit">';
            document.getElementById('table').innerHTML = draw;
        }
    </script>
</body>

</html>