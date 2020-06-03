<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Read the number</title>

<head>
    <style>

    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="number">
        <input type="submit" name="submit">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numInp = $_POST["number"];
        }
        $charOfNum = '';

        if ( floor($numInp / 10) == 0) {
            switch ($numInp) {
                case '0': {
                        $charOfNum = 'zero';
                        break;
                    }
                case '1': {
                        $charOfNum = 'one';
                        break;
                    }
                case '2': {
                        $charOfNum = 'two';
                        break;
                    }
                case '3': {
                        $charOfNum = 'three';
                        break;
                    }
                case '4': {
                        $charOfNum = 'four';
                        break;
                    }
                case '5': {
                        $charOfNum = 'five';
                        break;
                    }
                case '6': {
                        $charOfNum = 'six';
                        break;
                    }
                case '7': {
                        $charOfNum = 'seven';
                        break;
                    }
                case '8': {
                        $charOfNum = 'eight';
                        break;
                    }
                case '9': {
                        $charOfNum = 'nine';
                        break;
                    }
            }
        }
        if ( floor($numInp / 10) == 1 ) {
            switch ($numInp) {
                case '10': {
                        $charOfNum = 'ten';
                        break;
                    }
                case '11': {
                        $charOfNum = 'eleven';
                        break;
                    }
                case '12': {
                        $charOfNum = 'twelve';
                        break;
                    }
                case '13': {
                        $charOfNum = 'thirdteen';
                        break;
                    }
                case '14': {
                        $charOfNum = 'fourteen';
                        break;
                    }
                case '15': {
                        $charOfNum = 'fifteen';
                        break;
                    }
                case '16': {
                        $charOfNum = 'sixteen';
                        break;
                    }
                case '17': {
                        $charOfNum = 'seventeen';
                        break;
                    }
                case '18': {
                        $charOfNum = 'eighteen';
                        break;
                    }
                case '19': {
                        $charOfNum = 'nineteen';
                        break;
                    }
            }
        }

           $arrNum = array(
            "0" => "",
            "1" => " one",
            "2" => " two",
            "3" => " three",
            "4" => " four",
            "5" => " five",
            "6" => " six",
            "7" => " seven",
            "8" => " eight",
            "9" => " nine"
        );
        if ( floor($numInp / 10) > 1 & floor($numInp / 10) < 10 ) {
            $numInp1 = floor($numInp / 10);
            $numInp2 = $numInp % 10;
            foreach ($arrNum as $num => $char) {
                    if ($num == $numInp2) {
                         $char2 = $char;
                    }
                }
            
            switch ($numInp1) {
                case '2': {
                        $charOfNum = 'twenty'.$char2;
                        break;
                    }
                case '3': {
                        $charOfNum = 'thirsty'.$char2;
                        break;
                    }
                case '4': {
                        $charOfNum = 'fourty'.$char2;
                        break;
                    }
                case '5': {
                        $charOfNum = 'fifty'.$char2;
                        break;
                    }
                case '6': {
                        $charOfNum = 'sixty'.$char2;
                        break;
                    }
                case '7': {
                        $charOfNum = 'seventy'.$char2;
                        break;
                    }
                case '8': {
                        $charOfNum = 'eighty'.$char2;
                        break;
                    }
                case '9': {
                        $charOfNum = 'ninety'.$char2;
                        break;
                    }
            }
        }
        if ( floor($numInp / 10) >= 10 & floor($numInp / 10) < 100 ) {
            $numInp1 = floor($numInp / 100);
            $numInp2 = $numInp % 100;
            $numInp2 = floor($numInp2 /10);
            $numInp3 = $numInp % 100;
            $numInp3 = floor($numInp3 %10);
           
            
            switch ($numInp1) {
                case '1': {
                    $charOfNum = 'one hundred';
                    break;
                }
                case '2': {
                        $charOfNum = 'two hundred';
                        break;
                    }
                case '3': {
                        $charOfNum = 'three hundred';
                        break;
                    }
                case '4': {
                        $charOfNum = 'four hundred';
                        break;
                    }
                case '5': {
                        $charOfNum = 'five hundred';
                        break;
                    }
                case '6': {
                        $charOfNum = 'six hundred';
                        break;
                    }
                case '7': {
                        $charOfNum = 'seven hundred';
                        break;
                    }
                case '8': {
                        $charOfNum = 'eight hundred';
                        break;
                    }
                case '9': {
                        $charOfNum = 'nine hundred';
                        break;
                    }
            }
             foreach ($arrNum as $num => $char) {
                    if ($num == $numInp3) {
                         $char3 = $char;
                    }
                }
            switch ($numInp2) {
                case '0': {
                    $charOfNum = $charOfNum.$char3;
                    break;
                }
                case '1': {
                    switch($char3)
                    {   
                        case '': {$charOfNum = $charOfNum.' ten'; break;}
                        case ' one': {$charOfNum = $charOfNum.' eleven'; break;}
                        case ' two': {$charOfNum = $charOfNum.' twelve'; break;}
                        case ' three': {$charOfNum = $charOfNum.' thirdteen'; break;}
                        case ' four': {$charOfNum = $charOfNum.' fourteen'; break;}
                        case ' five': {$charOfNum = $charOfNum.' fifteen'; break;}
                        case ' six': {$charOfNum = $charOfNum.' sisteen'; break;}
                        case ' seven': {$charOfNum = $charOfNum.' seventeen'; break;}
                        case ' eight': {$charOfNum = $charOfNum.' eighteen'; break;}
                        case ' nine': {$charOfNum = $charOfNum.' nineteen'; break;}
                    }
                    break;
                }
                case '2': {
                        $charOfNum = $charOfNum.' twenty '.$char3;
                        break;
                    }
                case '3': {
                        $charOfNum = $charOfNum.' thirsty '.$char3;
                        break;
                    }
                case '4': {
                        $charOfNum = $charOfNum.' fourty '.$char3;
                        break;
                    }
                case '5': {
                        $charOfNum = $charOfNum.' fifty '.$char3;
                        break;
                    }
                case '6': {
                        $charOfNum = $charOfNum.' sisty '.$char3;
                        break;
                    }
                case '7': {
                        $charOfNum = $charOfNum.' seventy '.$char3;
                        break;
                    }
                case '8': {
                        $charOfNum = $charOfNum.' eighty '.$char3;
                        break;
                    }
                case '9': {
                        $charOfNum = $charOfNum.' ninety '.$char3;
                        break;
                    }
            }
        }

        echo "<br/><br/>";
        echo "Số " . $numInp . " đọc là: " . $charOfNum;
     

        // if ($numInp / 100 > 1) {
        //     $num3char = $numInp;
        // } else {
        //     if ($numInp / 10 > 1) {
        //         $num2char = $numInp;
        //     } else {
        //         $num1char = $numInp;
        //     }
        // }
        // switch ($numInp) {
        //     case $num1char: {
        //             foreach ($arrNum as $num => $char) {
        //                 if ($num == $numInp) {
        //                     $charOfNum = $char;
        //                 }
        //             }
        //         }
        //     case $num2char: {
        //             if ($numInp == '10') {
        //                 $charOfNum = 'ten';
        //             }
        //             if ($numInp == '11') {
        //                 $charOfNum = 'eleven';
        //             }
        //             if ($numInp == '12') {
        //                 $charOfNum = 'twelve';
        //             }
        //             if ($numInp > 12 & $numInp < 20) {
        //                 $numInp1 = $numInp % 10;
        //                 $numInp2 = $numInp / 10;
        //                 foreach ($arrNum as $num1 => $char1) {
        //                     if ($num1 == $numInp1) {
        //                         $charOfNum1 = $char1;
        //                     }
        //                 }
        //                 switch ($numInp2) {
        //                     case '1':
        //                         $charOfNum = $char1 . 'teen';
        //                 }
        //             }
        //         }
        // }




        // if ($num2char == $numInp) {
        //     if ($numInp == '10') {
        //         $char = 'ten';
        //         echo "<br/><br/>";
        //         echo "Số " . $numInp . " đọc là: " . $char;
        //     }
        //     if ($numInp == '11') {
        //         $char = 'eleven';
        //         echo "<br/><br/>";
        //         echo "Số " . $numInp . " đọc là: " . $char;
        //     }
        //     if ($numInp == '12') {
        //         $char = 'twelve';
        //         echo "<br/><br/>";
        //         echo "Số " . $numInp . " đọc là: " . $char;
        //     }
        // }



        // if($numInp <10){
        // foreach ($arrNum as $num => $char) {
        //     if ($num == $numInp) {
        //         echo "<br/><br/>";
        //         echo "Số " . $numInp . " đọc là: " . $char;  
        //     }
        // }}


        ?>
    </form>
</body>

</html>