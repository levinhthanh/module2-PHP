<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stop Watch</title>
</head>

<body>
    <h1>Tính thời gian thực hiện thuật toán sắp xếp 1000 số</h1>
    <p>
        <?php
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        class StopWatch
        {
            private $startTime;
            private $endTime;
            function __constructor()
            {
                $this->startTime = date("h:i:sa");
            }
            function getStartTime()
            {
                return $this->startTime;
            }
            function getEndTime()
            {
                return $this->endTime;
            }
            function start()
            {
                $this->startTime = microtime(true);
            }
            function stop()
            {
                $this->endTime = microtime(true);
            }
            function getElapsedTime()
            {
                $delta =  $this->endTime - $this->startTime;
                return $delta * 1000;
            }
        }
        $arrNum = [];
        for ($i = 0; $i < 1000; $i++) {
            $arrNum[$i] = (rand(10, 100));
        }

        $sort = new StopWatch;
        $sort->start();
        for ($i = 0; $i < count($arrNum); $i++) {
            for ($j = $i + 1; $j < count($arrNum); $j++) {
                if ($arrNum[$i] > $arrNum[$j]) {
                    $tmp = $arrNum[$i];
                    $arrNum[$i] = $arrNum[$j];
                    $arrNum[$j] = $tmp;
                }
            }
            echo $arrNum[$i] . ' ';
        }
        $sort->stop();
        echo '<br><br> Thuật toán mất ' . $sort->getElapsedTime() . ' ms';
        ?>
    </p>
</body>

</html>