<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color: darkgray;
            width: 330px;
            padding: 50px;
            margin-left: 350px;
            margin-top: 50px;
            border: solid 2px black;
        }

        input {
            width: 80px;
            height: 30px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <h2>Nhập danh sách số điện thoại:</h2>
        <textarea name="stringTelephones" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Phân loại">
        <?php



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $string = $_POST['stringTelephones'];
            $arrayTelephone = explode(",", $string);
            $viettel = [];
            $mobiphone = [];
            $vinaphone = [];
            for ($i = 0; $i < count($arrayTelephone); $i++) {
                $result = checkNetwork($arrayTelephone[$i]);
                if ($result === "viettel") {
                    $viettel[] = $arrayTelephone[$i];
                } else {
                    if ($result === "mobiphone") {
                        $mobiphone[] = $arrayTelephone[$i];
                    } else {
                        if ($result === "vinaphone") {
                            $vinaphone[] = $arrayTelephone[$i];
                        }
                    }
                }
            }
            $viettelString = '';
            for($i = 0; $i < count($viettel); $i++){
                $viettelString .= $viettel[$i].' ';
            }
            echo '<br><br> Viettel: '.$viettelString;
            $mobiphoneString = '';
            for($i = 0; $i < count($mobiphone); $i++){
                $mobiphoneString .= $mobiphone[$i].' ';
            }
            echo '<br> Mobiphone: '.$mobiphoneString;
            $vinaphoneString = '';
            for($i = 0; $i < count($vinaphone); $i++){
                $vinaphoneString .= $vinaphone[$i].' ';
            }
            echo '<br> Vinaphone: '.$vinaphoneString;
        }




        function checkNetwork($teleNum)
        {
            $viettelHead = ['032', '033', '034', '035', '036', '037', '038', '039', '086', '096', '097', '098'];
            $mobiphoneHead = ['070', '076', '077', '078', '079', '089', '090', '093'];
            $vinaphoneHead = ['081', '082', '083', '084', '085', '088', '091', '094'];
            if (strlen($teleNum) !== 10) {
                return NULL;
            } else {
                $headNum = substr($teleNum, 0, 3);
                if (binarySearch($viettelHead, $headNum)) {
                    return "viettel";
                }
                if (binarySearch($mobiphoneHead, $headNum)) {
                    return "mobiphone";
                }
                if (binarySearch($vinaphoneHead, $headNum)) {
                    return "vinaphone";
                }
                return NULL;
            }
        }



        function binarySearch(array $numbers, $needle)
        {
            $first = 0;
            $last = count($numbers) - 1;
            while ($last - $first >= 0) {
                $middle = floor(($last + $first) / 2);
                if ($numbers[$middle] === $needle) {
                    return true;
                } else {
                    if ($numbers[$middle] > $needle) {
                        $last = $middle - 1;
                    } else {
                        $first = $middle + 1;
                    }
                }
            }
            return false;
        }
        ?>
    </form>
</body>

</html>