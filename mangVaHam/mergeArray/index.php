<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merge Array</title>
    <style>
        form {
            width: 220px;
            border: solid 1px black;
            padding: 20px;
        }

        button {
            width: 100px;
            height: 20px;
            margin-left: 50px;
        }

        #form2 {
            border: none;
        }
    </style>
</head>

<body>
    <h1>Gộp 2 mảng</h1>
    <form method="dialog" action="">
        Độ dài mảng thứ nhất:
        <input id="len1" type="text"><br>
        Độ dài mảng thứ hai:
        <input id="len2" type="text"><br><br>
        <button onclick="mergeArr()">Gộp</button>
    </form>

    <form id="form2" action="" method="post">
        <input id="lenArr1" type="text" value="" name="len1" hidden>
        <input id="lenArr2" type="text" value="" name="len2" hidden>
        <div id="input"></div>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $len1 = $_POST["len1"];
        $len2 = $_POST['len2'];
        for ($i = 0; $i < $len1; $i++) {
            $arr1[$i] = $_POST["arr1-$i"];
        }
        for ($i = 0; $i < $len2; $i++) {
            $arr2[$i] = $_POST["arr2-$i"];
        }
        $arr3 = $arr1;
        for ($i = 0; $i < $len2; $i++) {
            array_push($arr3 , $arr2[$i]);
        }
        echo "<br><br> Mảng thứ nhất là:<br>";
        print_r($arr1);
        echo "<br><br> Mảng thứ hai là:<br>";
        print_r($arr2);
        echo "<br><br> Mảng gộp là:<br>";
        print_r($arr3);
    }
    ?>
    <script>
        function mergeArr() {
            let len1 = document.getElementById('len1').value;
            let len2 = document.getElementById('len2').value;
            document.getElementById('lenArr1').value = len1;
            document.getElementById('lenArr2').value = len2;
            let draw = '<h4>Nhập các phần tử mảng 1:</h4>';
            for (let i = 0; i < len1; i++) {
                draw += 'Arr1[' + i + '] = <input type="text" name="arr1-' + i + '">';
            }
            draw += '<h4>Nhập các phần tử mảng 2:</h4>';
            for (let i = 0; i < len2; i++) {
                draw += 'Arr2[' + i + '] = <input type="text" name="arr2-' + i + '">';
            }
            draw += '<br><br><input type="submit">';
            document.getElementById('input').innerHTML = draw;
        }
    </script>
</body>

</html>