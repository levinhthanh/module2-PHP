<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
</head>
<body>
    <form action="" method="post">
        Inventment Amount (money unit):
        <input type="text" name="inventment"><br><br>
        Yearly Interest Rate (%):
        <input type="text" name="rate"><br><br>
        Number of Years:
        <input type="text" name="years"><br><br>
        <input type="submit" name="submit"><br>
    </form>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inventInp = $_POST["inventment"];
        $rateInp = $_POST["rate"];
        $yearsInp = $_POST["years"];
    }
    $futureValue =  0;
    $nowValue = $inventInp;
    for($i = 0; $i < $yearsInp; $i++){
        $futureValue = $nowValue + $nowValue*$rateInp;
        $nowValue = $futureValue;
    }
    echo '<br> Future value ='.$futureValue;
    ?>
</body>
</html>