<?php

include "Point2D.php";
include "Point3D.php";

$var2d = new Point2D(3,4);
$var3d = new Point3D(2,4,7);

print_r($var2d->getXY());
echo '<br><br>'.$var3d->toString();

?>