<?php
    $str = null;
    $i = 0;
    for ($i=1; $i <= 50 ; $i++) { 
        $str = "$i-";

        if ($i == 50) {
            $str = $i;
        }echo $str;
    }
?>