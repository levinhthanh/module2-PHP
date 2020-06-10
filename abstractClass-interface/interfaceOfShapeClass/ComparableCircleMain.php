<?php

include "ComparableCircle.php";

$circleOne = new ComparableCircle('circleOne', 2);
$circleTwo = new ComparableCircle('circleTwo', 2);

echo $circleOne->compareTo($circleTwo);

?>