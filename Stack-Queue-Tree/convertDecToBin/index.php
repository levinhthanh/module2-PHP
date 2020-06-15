
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form{
        background-color: khaki;
        padding: 5px;
        width: 400px;
        border: solid 2px black;
        margin-left: 400px;
        margin-top: 100px;
    }
    #input,p{
        margin-left: 70px;
    }
    input{
        text-align: center;
    }
    h1{
        margin-left: 10px;
    }
    </style>
</head>
<body>
    <form action="" method="post">
    <h1>Convert Decimal to Binary</h1>
    <input id="input" type="text" name="dec">
    <input type="submit">
    <p>Result:
    <?php 
    include('Stack.php');
     if($_SERVER['REQUEST_METHOD']==='POST')
     {
         $myStack = new Stack(30);
         $count = 0;
         $dec = $_POST['dec'];
      
         while($dec/2 > 0){
            $myStack->push($dec%2);
            $count++;
            $dec = floor($dec/2);
         }
         $str = "";
         for($i = 0; $i < $count; $i++){
             $str .=  $myStack->pop();
         }
        echo $str;
     }
    ?>
    </p>
    </form>
    
</body>
</html>

