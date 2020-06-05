<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find max in array2c</title>
    <style>
        input {
            width: 50px;
            text-align: center;
        }
        button{
            width: 70px;
            height: 25px;
            margin-left: 70px;
            margin-top: 20px;
        }
        .form1 {
            border: solid 1px black;
            width: 200px;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form method="dialog" class="form1" action="" >
        <h4>Nhập kích thước ma trận</h4>
        <table>
            <tr>
                <td>Chiều dài</td>
                <td>Chiều rộng</td>
            </tr>
            <tr>
                <td><input id="length" type="text" value=""></td>
                <td><input id="width" type="text" value=""></td>
            </tr>
        </table>
        <button onclick="inputData()">Submit</button>
    </form><br>
    <form action="" method="post">
        <table id="table">   
        </table>
        <input id="len" type="text" value="" name="len" hidden>
        <input id="wid" type="text" value="" name="wid" hidden>
    </form>

    <?php
        if($_SERVER['REQUEST_METHOD']=='POST')  
        {
            $len = $_POST['len'];
            $wid = $_POST['wid'];
            $arr = [];
            for($i=0; $i<$len; $i++)
            {
                for($j=0; $j<$wid; $j++)
                {
                   $arr[$i][$j] = $_POST["arr$i-$j"];
                }
            }
            $max = $arr[0][0];
            for($i=0; $i<$len; $i++)
            {
                for($j=0; $j<$wid; $j++)
                {
                   if($arr[$i][$j] > $max)
                   {
                       $max = $arr[$i][$j];
                   }
                }
            }
            print_r($arr);
            echo '<br> Giá trị lớn nhất của ma trận là '.$max;
        }
    ?>
    <script>
        function inputData() {
            let len = document.getElementById('length').value;
            let wid = document.getElementById('width').value;
            document.getElementById('len').value = len;
            document.getElementById('wid').value = wid;
            let draw ='';
            for(let i=0; i<len; i++)
            {   
                draw += '<tr>';
                for(let j=0; j<wid; j++)
                {
                    draw += '<td>arr['+i+','+j+'] = <input type="text" name=arr'+i+'-'+j+'></td>';
                }
                draw += '</tr>';
            }
            draw += '<input type="submit">';
            document.getElementById('table').innerHTML = draw;
        }
    </script>
</body>

</html>