<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $desInp = $_POST["description"];
    $priceInp = $_POST["price"];
    $disInp = $_POST["discount"];
}
echo '<br> Product Description: '.$desInp;
echo '<br> List Price: '.$priceInp;
echo '<br> Discount Percent: '.$disInp;
$discAmt =   $priceInp *   $disInp * 0.1;
echo '<br>=> Discount Amount: '.$discAmt;
