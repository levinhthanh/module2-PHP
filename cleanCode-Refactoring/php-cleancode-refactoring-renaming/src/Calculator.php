<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */

// class Calculator
// {
//     public function calculate($a, $b, $o) {
//         switch ($o) {
//             case '+':
//                 return $a + $b;
//             case '-':
//                 return $a - $b;
//             case '*':
//                 return $a * $b;
//             case '/':
//                 if ($b != 0) {
//                     return $a / $b;
//                 } else {
//                     echo("Can not divide by 0");
//                     break;
//                 }
//             default:
//                 echo ("Unsupported operation");
//         }
//     }
// }

// class Calculator
// {
//     public function calculate($firstOperand, $secondOperand, $operator) {
//         switch ($operator) {
//             case '+':
//                 return $firstOperand + $secondOperand;
//             case '-':
//                 return $firstOperand - $secondOperand;
//             case '*':
//                 return $firstOperand * $secondOperand;
//             case '/':
//                 if ($secondOperand != 0) {
//                     return $firstOperand / $secondOperand;
//                 } else {
//                     echo("Can not divide by 0");
//                     break;
//                 }
//             default:
//                 echo ("Unsupported operation");
//         }
//     }
// }

const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator) {
        switch ($operator) {
            case ADDITION:
                return $firstOperand + $secondOperand;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}
