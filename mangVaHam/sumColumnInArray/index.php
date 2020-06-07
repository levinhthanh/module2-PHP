<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum column in array</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Tính tổng từng cột của mảng</h1>
    <form method="dialog">
        <fieldset>
            <legend>Sum column:</legend>
            Chiều dài mảng:
            <input id="length" type="text" placeholder="0">
            Chiều rộng mảng:
            <input id="width" type="text" placeholder="0"><br>
            <button onclick="inputData()">Nhập mảng</button><br>

            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $len = $_POST['len'];
                $wid = $_POST['wid'];
                $col = $_POST['col'];
                $arr = [];
                $sum = 0;
                for ($i = 0; $i < $len; $i++) {
                    for ($j = 0; $j < $wid; $j++) {
                        $arr[$i][$j] = $_POST["arr$i-$j"];
                    }
                }
                if ($col <= ($wid - 1)) {
                    for ($i = 0; $i < $len; $i++) {
                        for ($j = 0; $j < $wid; $j++) {
                            if ($j == $col) {
                                $sum += $arr[$i][$j];
                            }
                        }
                    }
                    echo "<br> Mảng vừa nhập là: ";
                    print_r($arr);
                    echo "<br><br>Tổng cột $col = $sum";
                } else {
                    echo "<br> Cột bạn vừa nhập không tồn tại. ";
                }
            }
            ?>
        </fieldset>
    </form>
    <form action="" method="post">
        <table id="table">
            <!-- put in here -->
        </table>
        <span id="span" style="display: none">Nhập cột bạn muốn cộng [0 , ... , n]:</span>
        <input id="column" type="text" name="col" style="display: none">
        <input id="submit" type="submit" style="display: none">
        <input id="l" type="text" name="len" style="display: none">
        <input id="w" type="text" name="wid" style="display: none">
    </form>
    <script>
        let len;
        let wid;
        function inputData() {
            len = parseInt(document.getElementById('length').value);
            wid = parseInt(document.getElementById('width').value);
            if (!isNaN(len) && !isNaN(wid)) {
                document.getElementById('l').value = len;
                document.getElementById('w').value = wid;
                document.getElementById('length').placeholder = toString(len);
                document.getElementById('width').placeholder = toString(wid);
                let draw = '';
                for (let i = 0; i < len; i++) {
                    draw += '<tr>';
                    for (let j = 0; j < wid; j++) {
                        draw += '<td>Array[' + i + ',' + j + '] = <input type="text" name="arr' + i + '-' + j + '"></td>';
                    }
                    draw += '</tr>';
                }
                document.getElementById('table').innerHTML = draw;
                document.getElementById('submit').style = "display: block";
                document.getElementById('column').style = "display: block";
                document.getElementById('span').style = "display: block";
            }
        }
    </script>
</body>


</html>