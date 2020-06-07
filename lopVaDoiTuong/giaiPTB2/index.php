<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc 2</title>
    <style>
         form{
             background-color: khaki;
             padding: 20px;
             width: 300px;
         }
         input{
             text-align: center;
         }
         
    </style>
</head>

<body>
    <h1>Giải phương trình bậc 2</h1>
    <form action="" method="post">
        Nhập hệ số a:
        <input type="text" name="heso-a"><br><br>
        Nhập hệ số b:
        <input type="text" name="heso-b"><br><br>
        Nhập hệ số c:
        <input type="text" name="heso-c"><br><br>
        <input type="submit"><br><br> 
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $a = $_POST['heso-a'];
            $b = $_POST['heso-b'];
            $c = $_POST['heso-c'];
        }
        try
        {
             if($a == 0) throw new Exception('Hệ số a không hợp lệ');
             $cal = new QuadraticEquation($a , $b , $c);
             $x1 = $cal->getRoot1();
             $x2 = $cal->getRoot2();
             echo "<br><br> Nghiệm thứ nhất x1 = $x1 <br>";
             echo "<br> Nghiệm thứ nhất x2 = $x2 <br>";
        }
        catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
        class QuadraticEquation
        {
            public $a;
            public $b;
            public $c;
            public function __construct($a, $b, $c)
            {
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }
            public function getterA()
            {
                return $this->a;
            }
            public function getterB()
            {
                return $this->b;
            }
            public function getterC()
            {
                return $this->c;
            }
            public function getDiscriminant()
            {
                $delta = ($this->b * $this->b) - 4 * $this->a * $this->c;
                return $delta;
            }
            public function getRoot1()
            {    
                $delta = $this->getDiscriminant();
                if($delta < 0) {
                    return 0;
                }
                else{
                    $sqrtDelta =pow($delta , 0.5);
                    $r1 = (-$this->b + $sqrtDelta)/(2 * $this->a);
                    return $r1;
                }
                
            }
            public function getRoot2()
            {    
                $delta = $this->getDiscriminant();
                if($delta < 0) {
                    return 0;
                }
                else{
                    $sqrtDelta =pow($delta , 0.5);
                    $r2 = (-$this->b - $sqrtDelta)/(2 * $this->a);
                    return $r2;
                }
                
            }
        }
        ?>
    </form>
</body>

</html>