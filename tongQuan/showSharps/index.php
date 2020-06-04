<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draw Sharps</title>
    <style>
        div{
            margin-left: 100px;
        }
    </style>
</head>

<body>
    <h1>I want to show:</h1>
    <form action="" method="get">
        <input type="radio" name="sharp" value="rectangle">Rectangle
        <input type="radio" name="sharp" value="square">Square triangle
        <input type="radio" name="sharp" value="isosceles">Isosceles triangle
        <br><br>
        <input type="submit">
        <br><br>
    </form>
    <div>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $user = $_GET["sharp"];
    }
    if($user == "rectangle"){
        for($i = 0; $i < 3; $i++){
             for($j = 0; $j < 5; $j++){
                 echo "&nbsp;*&nbsp;";
             }
             echo '<br>';
        }
    }
    if($user == "square"){
        for($i = 0; $i < 5; $i++){
            for($j = 4-$i; $j < 5; $j++){
                echo "&nbsp;*&nbsp;";
            }
            echo '<br>';
       } 
    }
    if($user == "isosceles"){
        for($i = 0; $i < 5; $i++){
            for($j = $i; $j < 5; $j++){
                echo "&nbsp;*&nbsp;";
            }
            echo '<br>';
       } 
    }
    ?>
    </div>
</body>

</html>