<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert USD to VND</title>
</head>
<body>
    <form action="" method="post">
    <h1>Convert money from USD to VND</h1>
    Money(USD):
    <input type="text" name="usd">
    <input type="submit"><br>
    </form>
    <p>Now rate: 23000 VND/USD</p>
    <?php 
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usd = $_POST["usd"];
    }
    $vnd = 23000 * $usd;
    echo "Result: ".$usd.'USD = '.$vnd.'VND';
    ?>
</body>
</html>