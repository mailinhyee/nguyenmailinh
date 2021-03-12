<?php
    function sum($num1, $num2) {
        if ($num1 != $num2) {
        return $num1 + $num2;           
        }
        else{
            return ($num1 + $num2)*3;
        }
    }
    $a = 3;
    $b = 3;
    $total  = sum($a, $b);
    echo "a = $a <br/>";
    echo "b = $b <br/>";
    echo "Tổng = $total";
?>