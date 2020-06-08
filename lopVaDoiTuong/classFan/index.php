<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Fan</title>
</head>

<body>
    <?php
    class Fan
    {
        public $SLOW;
        public $MEDIUM;
        public $FAST;
        private $speed;
        private $on;
        private $radius;
        private $color;
        public function __construct()
        {
            $this->SLOW = 1;
            $this->MEDIUM = 2;
            $this->FAST = 3;
            $this->speed = (int) $this->SLOW;
            $this->on = (boolean) false;
            $this->radius = (float) 5;
            $this->color = (string) 'blue';
        }
        public function getSpeed()
        {
            return $this->speed;
        }
        public function setSpeed($newSpeed)
        {
            $this->speed = $newSpeed;
        }
        public function getOn()
        {
            return $this->on;
        }
        public function setOn()
        {
            $this->on = !$this->on;
        }
        public function getRadius()
        {
            return $this->radius;
        }
        public function setRadius($newRadius)
        {
            $this->radius = $newRadius;
        }
        public function getColor()
        {
            return $this->color;
        }
        public function setColor($newColor)
        {
            $this->color = $newColor;
        }
        public function toString(){
            if($this->on == true){
                return 'Speed: '.$this->speed.' - Radius: '.$this->radius.' - Color: '.$this->color.' - Fan is on';
            }
            else {
                return 'Speed: '.$this->speed.' - Radius: '.$this->radius.' - Color: '.$this->color.' - Fan is off';
            }
        }
    }

    $fan1 = new Fan;
    $fan1->setSpeed($fan1->FAST);
    $fan1->setRadius(10);
    $fan1->setColor('yellow');
    $fan1->setOn();
    echo $fan1->toString();
    echo '<br>';
    $fan2 = new Fan;
    $fan2->setSpeed($fan2->MEDIUM);
    $fan2->setRadius(5);
    $fan2->setColor('blue');
    echo $fan2->toString();
    ?>
</body>

</html>