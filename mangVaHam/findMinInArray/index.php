<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find min in arrar</title>
</head>
<body>
    <?php
         $arr = [1, 4, 6, 9, 10, 13, -6, 23];
         echo findMin($arr);
         function findMin($arr){
             $min = $arr[0];
            for($i=0; $i<count($arr); $i++){
                if($arr[$i] < $min){
                    $min = $arr[$i];
                }
            }
            return $min;
         }
    ?>
</body>
</html>